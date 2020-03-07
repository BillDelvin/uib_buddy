<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $userData['title'] = 'Welcome Buddy';
        $userData['user']= $this->session->userdata();

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('user/buddy_list', $userData);
        $this->load->view('admin/footer');
    }
}