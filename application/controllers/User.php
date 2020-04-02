<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'email','url'));
        $this->load->model('m_buddyEventRegistration');
        if(empty($this->session->userdata())) {
            redirect("welcome");
        }
    }

    public function index()
    {
        $userData['title'] = 'Welcome';
        $userData['user']= $this->session->userdata();

        $this->load->view('templates/index_header', $userData);
        $this->load->view('welcome', $userData);
        $this->load->view('templates/index_footer');
    }

    public function event()
    {
        $userData['title'] = 'Buddy Event';
        $userData['user']= $this->session->userdata();
        $getData = $this->db->get('event_buddy')->result();
        $userData['event'] = json_decode(json_encode($getData), true);

        if(!$this->session->userdata('npmUser')){
            $this->load->view('templates/index_header', $userData);
            $this->load->view('user/event', $userData);
            $this->load->view('templates/index_footer');
        } else {
            $IdEvent = $this->m_buddyEventRegistration->idEvent($this->session->userdata('npmUser'));
            $arrayIdEvent = json_decode(json_encode($IdEvent), true);
            $arr = array();
            foreach($arrayIdEvent as $i) {
                array_push($arr, $i['idEvent']);
            }
            $userData['idEvent'] = $arr;
            $this->load->view('templates/index_header', $userData);
            $this->load->view('user/event', $userData);
            $this->load->view('templates/index_footer');
        }
    }
    
    public function buddyRegisterForm($idEvent)
    {       
        $userData['title'] = 'Buddy Event';
        $userData['user']= $this->session->userdata();
        $getData = $this->db->get_where('event_buddy', ['idEvent' => $idEvent])->row_array();
        $userData['id'] = $getData['idEvent'];

        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|xss_clean');
        $this->form_validation->set_rules('noPhoneMahasiswa', 'phone number', 'required|trim');
        $this->form_validation->set_rules('urlVideo', 'url video', 'required|trim');
        if (empty($_FILES['uploadImage']['name'])) {
            $this->form_validation->set_rules('uploadImage', 'image', 'required');
        }

        if ($this->form_validation->run() == false) {
            $userData['title'] = 'Buddy Event';
            $userData['user']= $this->session->userdata();

            $this->load->view('templates/index_header', $userData);
            $this->load->view('user/buddyRegisterForm', $userData);
            $this->load->view('templates/index_footer');
        } else {
            $imageUpload = $_FILES['uploadImage']['name'];
            $this->do_upload($imageUpload, $userData['id'] );
        }
    }

    private function do_upload($imageUpload, $id)
    {
        $config['upload_path'] = './assets/buddy_img/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 2048000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('uploadImage')) {
            $userdata['title'] = 'Buddy Event';
            $userData['user']= $this->session->userdata();
            $userData['id'] = $id;

            $this->load->view('templates/index_header', $userdata);
            $this->load->view('user/buddyRegisterForm', $userData);
            $this->load->view('templates/index_footer');
        } else {
            $userData['user']= $this->session->userdata();

            $data = [
                'idEvent' => $id,
                'npmUser' => $userData['user']['npmUser'],
                'email' => htmlspecialchars($this->input->post('email', true)),
                'noPhoneMahasiswa' => $this->input->post('noPhoneMahasiswa'),
                'urlVideo' => $this->input->post('urlVideo'),
                'image' => $imageUpload,
                'status' => 'pending'
            ];

            $this->db->insert('buddy_event_registration', $data);
            $this->session->set_flashdata('message', '<p class="alert alert-success" role="alert">Congratulations! you have successfully registered as a Buddy</p>');
            redirect('user/event'); 
        }
    }

    public function yourEvent()
    {
        $userData['title'] = 'Your Event';
        $userData['user']= $this->session->userdata();

        $userEvent = $this->m_buddyEventRegistration->yourEvent($this->session->userdata('npmUser'));
        $userData['userEvent'] = $userEvent;

        $this->load->view('templates/index_header', $userData);
        $this->load->view('user/yourEvent', $userData);
        $this->load->view('templates/index_footer');
    }

    public function interviewData($id){
        $interviewSchedule = $this->m_buddyEventRegistration->interviewScheduleData($id);
        $data = json_encode($interviewSchedule);
        echo $data;
    }
}

// json_decode(json_encode($IdEvent), true);