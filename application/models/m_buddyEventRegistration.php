<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class m_buddyEventRegistration extends CI_Model
{
    function buddyEventRegistration($id){
        $query=$this->db->query("SELECT ber.idRegistration, ber.idEvent, ber.npmUser, u.nameMahasiswa, ber.image, ber.email, ber.noPhoneMahasiswa, ber.urlVideo, ber.status FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent left join users u on ber.npmUser = u.npmUser WHERE ber.idEvent = $id");
        return $query->result();
    }

    function idEvent($session){
        $query = $this->db->query("SELECT ber.idEvent FROM buddy_event_registration ber WHERE ber.npmUser = $session")->result_array();
        return $query;
    }

    function yourEvent($session){
        $query = $this->db->query("SELECT eb.idEvent, eb.eventTitle, eb.eventDate, ber.status FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent WHERE ber.npmUser = $session")->result_array();
        return $query;
    }

    function eventInterview(){
        $query = $this->db->query("SELECT idEvent, eventTitle FROM event_buddy")->result_array();
        return $query;
    }

    function interviewSchedule(){
        $query = $this->db->query("SELECT inter.idInterview ,inter.idEvent, eb.eventTitle, inter.interviewTime, inter.interviewDate, inter.interviewPlace FROM interview_schedule inter LEFT JOIN event_buddy eb on inter.idEvent = eb.idEvent")->result_array();
        return $query;
    }

    function interviewScheduleData($id){
        $query = $this->db->query("SELECT inter.idInterview, inter.idEvent, eb.eventTitle, inter.interviewTime, inter.interviewDate, inter.interviewPlace FROM interview_schedule inter LEFT JOIN event_buddy eb on inter.idEvent = eb.idEvent WHERE inter.idEvent = $id")->result_array();
        return $query;
    }

    function getInterviewSchdule($id){
        $query = $this->db->query("SELECT inter.idInterview, inter.idEvent, eb.eventTitle, inter.interviewTime, inter.interviewDate, inter.interviewPlace FROM interview_schedule inter LEFT JOIN event_buddy eb on inter.idEvent = eb.idEvent WHERE inter.idInterview = $id")->result_array();
        return $query;
    }

    function getEventName(){
        $query = $this->db->query("SELECT idEvent, eventTitle, eventDescription FROM event_buddy")->result_array();
        return $query;
    }

    function getBuddy($id){
        $query = $this->db->query("SELECT ber.idEvent, ber.npmUser, u.nameMahasiswa, ber.email, ber.status FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent left join users u on ber.npmUser = u.npmUser WHERE ber.status = 'accept' AND eb.idEvent = $id")->result_array();
        return $query;
    }
    
    function getEmailBuddy($id){
        $query = $this->db->query("SELECT ber.email FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent left join users u on ber.npmUser = u.npmUser WHERE ber.status = 'accept' AND eb.idEvent = $id")->result_array();
        return $query;
    }
}