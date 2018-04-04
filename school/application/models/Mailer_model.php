<?php

class Mailer_Model extends CI_Model {

    /************************************************************
     * sendEmail
     * @author Arjun Prasad Yadav
     * @param  -- $data - information to be placed in the mail
     * $templatename -- html template to be used in the body
     * @return -- none
     * modified by -- Arjun Prasad Yadav
     * date -- 29-08-2016 (dd-mm-yyyy)
     ************************************************************/
    
    public function sendEmail($data,$templatename){
        echo '<pre>';
        print_r($data);
        //exit();
        $this->load->library('email');
        $this->email->set_mailtype('html');
        //$this->email->from($data['from_address'],$data['admin_full_name']);
        $this->email->from($data['from_address']);
        $this->email->to($data['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailScripts/'.$templatename, $data, true);        
        //echo $body;
        //exit();
        $this->email->message($body);
        //$this->email->send();
        //exit();
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         //=================================//
         //BEFORE REDIRECTING SEND THE EMAIL//
         //=================================//
            //$var_to=$data['user_email']; //  $data['to'];
            $var_to=$data['to_address']; //  $data['to'];
            
            $data['subject'] = "Welcome to Aapka School";
//            $data['message'] = "<big><strong>Welcome, Sanjay Kumar Gupta.</strong></big>"
//                    . "<br><br><br>"
//                    . "<span style='color:green';font-weight:bold;font-size:14px;>Please Click the below link for Account Activation,</span><br><br>"
//                    . "<a href='http://school.sitsolution.net'>'476hgfgh&%$&$&$%KJHKLH&(*&KJHOGGFYTR%$%$%&$'</a><br><br>"
//                    . "Your Account will be automatically deleted after One week of time "
//                    . "if we won't get your <span style='color:red';font-weight:bold;font-size:40px;>CONFIRMATION.</span><br><br><br>"
//                    . "It is a testing Email Please Ignore.";
            
            $data['message'] = $body;             
            //$var_cc_to=$data['cc_to'];
            //$var_bcc_to=$data['bcc_to'];
            $var_subject=$data['subject'];
            $var_message=$data['message'];
            
            echo $var_to;
            echo $var_subject;
            echo $var_message;
            //exit();
            
            
            
            //echo $var_to;
            //echo "<br>";
            //echo $var_cc_to;
            //echo "<br>";
            //echo $var_bcc_to;
            //==========================================================
            $config = Array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'apysan@gmail.com',
                'smtp_pass' => 'bharatindia4209211poiuy',
                'mailtype'  => 'html',
                'charset'   => 'iso-8859-1',
                'wordwrap'  => TRUE
        );
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('apysan@gmail.com', 'School-AdminM');
        $this->email->to($var_to);
        //$this->email->cc($var_cc_to);
        //$this->email->bcc($var_bcc_to);
        $this->email->subject($var_subject);
        $this->email->message($var_message);
        $this->email->set_newline("\r\n");
        if ($this->email->send()) {
            echo "<h1>your email send successfully, Cong.</h1>";
            $sdata = array();
            $sdata['message'] = 'Data Inserted into Database !!!! and Email Send Successfully!'; 
            $this->session->set_userdata($sdata);
        } else {
            show_error($this->email->print_debugger());
        }
         //=================================//
         //         EMAIL SEND END          //
         //=================================//












        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $this->email->clear();
        
    }










    
    
    
}
