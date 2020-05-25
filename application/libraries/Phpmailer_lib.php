<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

/**
 * CodeIgniter PMPMailer class
 * 
 * This class enables SMTP email with PHPMailer
 * 
 */


 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 class PHPMailer_Lib
 {
    public function __contruct()
    {
        log_message("Debug","PHPMailer class is loaded");
    }

    public function load()
    {
        require_once APPPATH."third_party/PHPMailer/PHPMailerAutoload.php" ;
        require_once APPPATH."third_party/PHPMailer/Exception.php";
        require_once APPPATH."third_party/PHPMailer/PHPMailer.php";
        require_once APPPATH."third_party/PHPMailer/SMTP.php";

        $email = new PHPMailer;
        return $email;
    }
 }
