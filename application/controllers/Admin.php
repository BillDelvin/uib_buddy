<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('session');
        if(empty($this->session->userdata())) {
            redirect("welcome");
        }
    }

    public function index()
    {
        $userData['title'] = 'Welcome Admin';
        $userData['user']= $this->session->userdata();

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $userData);
        $this->load->view('admin/footer');
    }

    public function eventList()
    {
        $userData['title'] = 'Event List';
        $userData['user']= $this->session->userdata();

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/listEvent');
        $this->load->view('admin/footer');
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
}

