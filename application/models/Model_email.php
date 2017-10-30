<?php

class Model_email extends CI_Model {

    function send_email($from_user,$from_email,$subject,$sent_to,$message_content) //choose this

    {

        $from_email = $from_email; // ini nanti diganti 

        $this->load->library('encrypt');
        $this->load->library('email');
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['mailtype'] = 'html';
        $config['priority'] = '1';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes*/
        $config['wordwrap'] = TRUE;
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'jimiwander@gmail.com';
        $config['smtp_pass'] = 'fadil1990';
        
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        //Email content
        //$htmlContent = '<h1>Sending email via SMTP server</h1>';
        $htmlContent .= 'Hai Glenz Security,<br /><br />You Got Message From .<br /><br /> Name : '.$from_user.
        ' <br /><br /> Email : '.$from_email.
        '<br />

        <br /><br /> Subject: '.$subject.' <br /><br /> '.$message_content.' <br /><br /> Thank you <br /><br /> ';

        //send mail

        $this ->email-> from($from_email, 'User From glenzsecurity.com');

        $this ->email->to($sent_to);

        $this ->email-> subject($subject);

        $this ->email-> message($htmlContent);

        if ($this->email->send() == true)

        {
            $this ->email-> send();
            redirect('home');  
        }

        else

        {
           echo "gagal cuy";
           return  show_error($this->email->print_debugger());

        }


    }

}





?>