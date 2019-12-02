<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $userData['title'] = 'Dashboard';
        $userData['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); // get from session

        $this->load->view('templates/header', $userData);
        $this->load->view('templates/sidebar');
        $this->load->view('user/index', $userData);
        $this->load->view('templates/footer');
    }

    public function buddyList()
    {
        // $userData['title'] = "Buddy List";
        $userData['buddy'] = $this->db->get_where('buddy');
        var_dump($userData);
        die;
    }
}
