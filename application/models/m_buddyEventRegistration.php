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
        $query = $this->db->query("SELECT eb.eventTitle, eb.eventDate, ber.status FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent WHERE ber.npmUser = $session")->result_array();
        return $query;
    }
}