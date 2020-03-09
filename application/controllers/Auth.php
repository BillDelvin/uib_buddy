<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function registration()
    {
        $this->form_validation->set_rules('npm', 'npm', 'required|trim|min_length[7]|max_length[7]|is_unique[users.npmUser]', [
            'is_unique' => 'This npm already registered!'
        ]);
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('majors', 'majors', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == false) { //jika validasi gagal makan tampil kan kembali form ini lagi 
            $title['title'] = 'Registration';
            $this->load->view('templates/auth_header', $title);
            $this->load->view('auth/registration', array('error' => ''));
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'npmUser' => htmlspecialchars($this->input->post('npm', true)),
                'nameMahasiswa' => htmlspecialchars(ucwords($this->input->post('name', true))),
                'jurusanMahasiswa' => htmlspecialchars(ucwords($this->input->post('majors', true))),
                'password' => password_hash($this->input->post('password',true), PASSWORD_BCRYPT),
                'role' => 2
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations! you have successfully registered!</div>');
            redirect('auth/registration');
        }
    }

    public function sign_in()
    {
        $this->form_validation->set_rules('npm', 'npm', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $title['title'] = 'Sign In';
            $this->load->view('templates/auth_header', $title);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $npm = $this->input->post('npm');
        $password = $this->input->post('password');
        $userData = $this->db->get_where('users', ['npmUser' => $npm])->row_array();

        if ($userData) {
            //check password
            if ( password_verify($password, $userData['password']) ) {
                $session = [
                    'npmUser' => $userData['npmUser'],
                    'nameMahasiswa' => $userData['nameMahasiswa'],
                    'role' => $userData['role']
                ];
                // check the session
                $this->session->set_userdata($session);
                if(isset($_SESSION['npmUser'])){
                    // check role
                    if($userData['role'] == 1){
                        redirect('admin');
                    } else {
                        // echo('user');
                        redirect('user');
                    }
                } else{
                    echo("session tidak masuk");
                    die;
                }
                
            } else {
                echo('halo');
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth/sign_in');
            }
        } else {
            // if error
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Account is not registered!</div>');
            redirect('auth/sign_in');
        }
    }

    public function logout()
    {
        $array = array('npmUser', 'nameMahasiswa', 'role');
        $this->session->unset_userdata($array);
        redirect('welcome');
    }
}


// // rule form validation
// $this->form_validation->set_rules('npm', 'npm', 'required|trim|min_length[7]|max_length[7]');
// $this->form_validation->set_rules('name', 'name', 'required|trim');
// $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
//     'is_unique' => 'This email already registered!'
// ]);
// $this->form_validation->set_rules('phoneNumber', 'phone number', 'required|trim');
// if (empty($_FILES['userfile']['name'])) {
//     $this->form_validation->set_rules('userfile', 'image', 'required');
// }


// if ($this->form_validation->run() == false) { //jika validasi gagal makan tampil kan kembali form ini lagi 
//     $title['title'] = 'Buddy E-Recruitmen ';
//     $this->load->view('templates/auth_header', $title);
//     $this->load->view('auth/registration', array('error' => ''));
//     $this->load->view('templates/auth_footer');
// } else {
//     // cek image
//     $image = $_FILES['userfile']['name'];
//     $this->do_upload($image);
// }