<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['useragent']        = 'PHPMailer';
$config['protocol']         = 'smtp';
$config['mailpath']         = '/usr/sbin/sendmail';
$config['smtp_host']        = 'smtp.gmail.com';
$config['smtp_auth']        = true;
$config['smtp_user']        = ''; //admin email 
$config['smtp_pass']        = ''; //admin pass
$config['smtp_port']        = 587;
$config['smtp_timeout']     = 30;
$config['smtp_crypto']      = 'tls';
$config['smtp_debug']       = 0;
$config['debug_output']     = '';
$config['smtp_auto_tls']    = true;
$config['smtp_conn_options'] = array();
$config['wordwrap']         = true;
$config['wrapchars']        = 76;
$config['mailtype']         = 'html';
$config['charset']          = null;
$config['validate']         = true;
$config['priority']         = 3;
$config['crlf']             = "\n";
$config['newline']          = "\r\n";
$config['bcc_batch_mode']   = false;
$config['bcc_batch_size']   = 200;
$config['encoding']         = '8bit';

$config['dkim_domain']      = '';
$config['dkim_private']     = '';
$config['dkim_private_string'] = '';
$config['dkim_selector']    = '';
$config['dkim_passphrase']  = '';
$config['dkim_identity']    = '';