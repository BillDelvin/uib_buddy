<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        if(empty($this->session->userdata())) {
            redirect("welcome");
        }
    }

    public function index()
    {
        // if($this->session->userdata()){
        //     redirect('admin');
        // }

        $userData['title'] = 'Welcome Admin';
        $userData['user']= $this->session->userdata();

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $userData);
        $this->load->view('admin/footer');
    }

    public function eventList()
    {
        // if($this->session->userdata('npmUser')){
        //     redirect('admin');
        // }

        $userData['title'] = 'Event List';
        $userData['user']= $this->session->userdata();
        $getData= $this->db->get('event_buddy')->result();
        $userData["eventBuddy"] = json_decode(json_encode($getData), true);

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/listEvent', $userData);
        $this->load->view('admin/footer');
    }

    public function eventRegistration()
    {
        // if($this->session->userdata('npmUser')){
        //     redirect('admin');
        // }

        $userData['title'] = 'Event Registration';
        $userData['user']= $this->session->userdata();

        $this->form_validation->set_rules('eventTitle', 'event title', 'required|trim');
        $this->form_validation->set_rules('eventDescription', 'event description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $userData);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eventRegister');
            $this->load->view('admin/footer');
        } else {
            $data =[
                'eventTitle' => htmlspecialchars($this->input->post('eventTitle', true)),
                'eventDescription' => htmlspecialchars($this->input->post('eventDescription', true)),
            ];
            
            $this->db->insert('event_buddy', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event registered!</div>');
            redirect('admin/eventRegistration');
        }

    }
    
    public function eventUpdate($idEvent)
    {
        $userData['title'] = 'Update Event';
        $userData['user'] = $this->session->userdata();
        $userData['event'] = $this->db->get_where('event_buddy', ['idEvent' => $idEvent])->row_array();
        $userData['id'] = $idEvent;

        $this->form_validation->set_rules('eventTitle', 'event title', 'required|trim');
        $this->form_validation->set_rules('eventDescription', 'event description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $userData);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/eventUpdate',$userData);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'eventTitle' => htmlspecialchars($this->input->post('eventTitle')),
                'eventDescription' => htmlspecialchars($this->input->post('eventDescription'))
            ];
            $this->db->where('idEvent', $idEvent);
            $this->db->update('event_buddy', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event Update successfully! </div>');
            redirect('admin/eventUpdate/'.$idEvent);
        } 

    }

    public function eventDelete($idEvent)
    {
        $userData['event'] = $this->db->get_where('event_buddy', ['idEvent' => $idEvent])->row_array();

        $this->db->delete('event_buddy', array('idEvent' => $idEvent)); 
        redirect('admin/eventList');
    }

}


// public function buddyList()
// {
//     $userData['title'] = "Buddy List";
//     $userData['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
//     $result = $this->db->get('buddy')->result();
//     $buddyData["buddy"] = json_decode(json_encode($result), true);

//     $this->load->view('templates/header', $userData);
//     $this->load->view('templates/sidebar');
//     $this->load->view('user/buddy_list', $buddyData);
//     $this->load->view('templates/footer');
// }