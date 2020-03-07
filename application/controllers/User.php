<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('session');
    }

    public function index()
    {
        $userData['title'] = 'Welcome Buddy';
        $userData['user']= $this->session->userdata();

        $this->load->view('templates/index_header', $userData);
        $this->load->view('welcome', $userData);
        $this->load->view('templates/index_footer');
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
