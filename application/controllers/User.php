<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $userData['title'] = 'Dashboard';
        $userData['users'] = $this->db->get_where('users', ['npmUser' => $this->session->userdata('npmUser')])->row_array(); // get from session

        $this->load->view('templates/header', $userData);
        $this->load->view('templates/sidebar');
        $this->load->view('user/index', $userData);
        $this->load->view('templates/footer');
    }

    public function landingPage(){
        $title['title'] = "Welcome to Buddy UIB";
		$this->load->view('templates/index_header', $title);
		$this->load->view('welcome', );
		$this->load->view('templates/index_footer');
    }

    public function buddyList()
    {
        $userData['title'] = "Buddy List";
        $userData['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $result = $this->db->get('buddy')->result();
        $buddyData["buddy"] = json_decode(json_encode($result), true);

        $this->load->view('templates/header', $userData);
        $this->load->view('templates/sidebar');
        $this->load->view('user/buddy_list', $buddyData);
        $this->load->view('templates/footer');
    }
}
