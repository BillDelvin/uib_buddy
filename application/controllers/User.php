<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

        $this->load->view('templates/index_header', $userData);
        $this->load->view('user/event', $userData);
        $this->load->view('templates/index_footer');
    }
}
