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
        if(!$this->session->userdata()) {
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
        $getData= $this->db->get('event_buddy')->result();
        $userData["eventBuddy"] = json_decode(json_encode($getData), true);

        $this->load->view('admin/header', $userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/listEvent', $userData);
        $this->load->view('admin/footer');
    }

    public function eventRegistration()
    {
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

    public function note()
    {

        $userData['title'] = "Note";
        $userData['user'] = $this->session->userdata();
        $getData = $this->db->get('note')->result();
        $userData['note'] = json_decode(json_encode($getData), true);

        $this->load->view('admin/header',$userData);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/note', $userData);
        $this->load->view('admin/footer');
    }

    public function addNote()
    {
        $userData['title'] = "Adding Note";
        $userData['user'] = $this->session->userdata();

        $this->form_validation->set_rules('noteTitle', 'note title', 'required|trim');
        $this->form_validation->set_rules('noteDescription', 'note description', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header',$userData);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/addNote');
            $this->load->view('admin/footer');
        } else {
            $data =[
                'noteTitle' => htmlspecialchars($this->input->post('noteTitle', true)),
                'noteDescription' => htmlspecialchars($this->input->post('noteDescription', true)),
            ];
            
            $this->db->insert('note', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event registered!</div>');
            redirect('admin/addNote');
        }
    }

    public function updateNote($idNote)
    {
        $userData['title'] = "Update Note";
        $userData['user'] = $this->session->userdata();
        $userData['note'] = $this->db->get_where('note', ['idNote' => $idNote])->row_array();
        $userData['id'] = $idNote;


        $this->form_validation->set_rules('noteTitle', 'note title', 'required|trim');
        $this->form_validation->set_rules('noteDescription', 'note description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $userData);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/updateNote',$userData);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'noteTitle' => htmlspecialchars($this->input->post('noteTitle')),
                'noteDescription' => htmlspecialchars($this->input->post('noteDescription'))
            ];
            $this->db->where('idNote', $idNote);
            $this->db->update('note', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Note Update successfully! </div>');
            redirect('admin/updateNote/'.$idNote);
        }
    }

    public function deleteNote($idNote)
    {
        $userData['event'] = $this->db->get_where('note', ['idNote' => $idNote])->row_array();

        $this->db->delete('note', array('idNote' => $idNote)); 
        redirect('admin/note');
    }

    public function landingPage()
    {
        $userData['title'] = 'Welcome Admin';
        $userData['user']= $this->session->userdata();

        $this->load->view('templates/index_header', $userData);
		$this->load->view('welcome', $userData);
		$this->load->view('templates/index_footer');
    }
}

