<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // ini digunakan untuk memanggil costruct yang di ci controller
        $this->load->library('phpmailer_lib');
        $this->load->config('email');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_buddyEventRegistration');
        if( empty( $this->session->userdata('npmUser') ) ) {
            redirect("welcome");
        }
    }

    public function email()
    {
        $userData['title'] = 'Email';
        $userData['user']= $this->session->userdata();

        $getData= $this->m_buddyEventRegistration->getEventName();
        $userData["eventName"] = $getData;
        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
		$this->load->view('admin/email/email', $userData);
		$this->load->view('admin/footer');
    }

    public function emailForm($idEvent)
    {
        $userData['title'] = 'Email';
        $userData['user']= $this->session->userdata();
        $getBuddy = $this->m_buddyEventRegistration->getBuddy($idEvent);
        $userData['buddyEmail'] = $getBuddy;
        $userData['idEvent'] = $idEvent;
        $getEmail = $this->m_buddyEventRegistration->getEmailBuddy($idEvent);
        $arr = array();
        foreach($getEmail as $i) {
            array_push($arr, $i['email']);
        }
        $email = implode(" , ", $arr);

        $this->form_validation->set_rules('subject', 'subject', 'required|trim');
        $this->form_validation->set_rules('message', 'message', 'required|trim');

        if($this->form_validation->run() == false){
            $this->load->view('admin/header', $userData);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/email/sendEmail', $userData);
            $this->load->view('admin/footer');
        } else {
            $subject = htmlspecialchars($this->input->post('subject', true));
            $message = htmlspecialchars($this->input->post('message', true));

            $this->load->library('email');
            $config = Array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'smtp.gmail.com';
            $config['smtp_port'] = '587';
            $config['smtp_timeout'] = '30';    
            $config['smtp_user'] = 'billdelvin6@gmail.com';
            $config['smtp_pass'] = 'billdelvin1234';
            $config['smtp_crypto'] = 'tls';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = "utf-8";
            $config['newline'] = "\r\n";
            $config['mailtype'] = 'html';
            $config['validate'] = true;
            $config['wordwrap'] = TRUE;
            
            $this->email->initialize($config);
            $this->email->from("billdelvin6@gmail.com", "bill delvin");
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($message);
            // $this->email->send();

            // Send mail
            if($this->email->send()) {
                $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
                redirect('email/emailForm/'.$idEvent);
            }
            else{
                show_error($this->email->print_debugger());
                $this->session->set_flashdata("email_sent","You have encountered an error");
                redirect('email/emailForm/'.$idEvent);
            }
        }
    }
}