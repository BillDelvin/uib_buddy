<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class m_buddyEventRegistration extends CI_Model
{

    function buddyEventRegistration($id){
        $query=$this->db->query("SELECT ber.npmUser, u.nameMahasiswa, ber.image, ber.email, ber.noPhoneMahasiswa, ber.urlVideo, ber.status FROM buddy_event_registration ber left join event_buddy eb on ber.idEvent = eb.idEvent left join users u on ber.npmUser = u.npmUser WHERE ber.idEvent = $id");
        return $query->result();
    }
}