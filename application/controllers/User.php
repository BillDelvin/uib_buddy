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

        $this->load->view('templates/index_header', $userData);
        $this->load->view('user/event', $userData);
        $this->load->view('templates/index_footer');
    }
    
    public function buddyRegisterForm()
    {       
        // $this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
        //     'is_unique' => 'This email already registered!'
        // ]);
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
            $this->load->view('user/buddyRegisterForm');
            $this->load->view('templates/index_footer');
        } else {
            $image = $_FILES['uploadImage']['name'];
            // besok lanjut disini 
            // $this->do_upload($image);
        }
    }

    private function do_upload($image)
    {
        $config['upload_path'] = './assets/buddy_img/';
        $config['allowed_types'] = 'jpg|png';
        $config['overwrite'] = true;
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('uploadImage')) {
            $userdata['title'] = 'Buddy Event';
            $userData['user']= $this->session->userdata();
            $npmUser = $userData['user']['npmUser'];

            $this->load->view('templates/auth_header', $userdata);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'idEvent' => htmlspecialchars($this->input->post('name', true)),
                'npmUser' => $npmUser,
                'email' => htmlspecialchars($this->input->post('npm', true)),
                'phone_number' => $this->input->post('phoneNumber'),
                'urlVideo' => $this->input->post('urlVideo'),
                'image' => $image,
                'status' => 'process'
            ];

            $this->db->insert('buddy_event_registration', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! you have successfully registered as a Buddy</div>');
            // redirect('auth'); mesti di redirect ke url registrasi itu 
        }
    }
}
