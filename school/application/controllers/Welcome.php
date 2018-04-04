<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        //$this->load->model('Welcome_model','w_model');  // name_of_model, object_of_that_model
        //$data['all_user_role_name'] = $this->w_model->select_all_user_role_name();
        $data['title'] = "Home";
        $data['MAINCONTENT'] = $this->load->view('home_content', $data, TRUE);
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    public function about() {
        $data = array();
        $data['title'] = "About";
        $data['MAINCONTENT'] = $this->load->view('about_content', $data, TRUE);
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    public function services() {
        $data = array();
        $data['MAINCONTENT'] = $this->load->view('service_content', $data, TRUE);
        $data['title'] = "Services";
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    public function casestudy() {
        $data = array();
        $data['MAINCONTENT'] = $this->load->view('casestudy_content', $data, TRUE);
        $data['title'] = "Case Study";
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    public function contact() {
        $data = array();
        $data['MAINCONTENT'] = $this->load->view('contact_content', $data, TRUE);
        $data['title'] = "Contact Us";
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    
    ///////////////////////////////////////////////////////////
    
    public function start_student_attendence()
    {
     echo "<h1>"."I am inside Controller"."</h1>";
     
     $data = array(); 

     $data['class_id']   = $this->input->post('class_id',TRUE);
     $data['section_id'] = $this->input->post('section_id',TRUE);        

     
     echo "<pre>";
     print_r($data);
     
     echo "<br>";
     echo "Class id is   " . $data['class_id']."<br>";
     echo "Section id is " . $data['section_id'];
     //exit();   
     
     $zclass   =  $data['class_id'];
     $zsection =  $data['section_id'];
     
     $data['attendence_class'] = $this->sa_model->select_attendence_class($zclass, $zsection); 
     $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_student_form', $data, TRUE);
     $this->load->view('admin/admin_master', $data);   
    }

    
    
    
    
    
    
    
    
    
    
    
    
    public function front_registration() {
        $data = array();
        $data['MAINCONTENT'] = $this->load->view('front_registration', $data, TRUE);
        $data['title'] = "Registration";
        $this->load->view('master', $data);    // this will display the contents of master.php
    }

    public function front_user_registration_check() {
        $data = array();
        $data['user_email'] = $this->input->post('user_email', TRUE);
        $data['user_password'] = md5($this->input->post('user_password', TRUE));
        //$data['submit']            = $this->input->post('submit', TRUE);
        $data['user_role_name'] = $this->input->post('user_role_name', TRUE);
        $data['user_role_numeric'] = $this->input->post('user_role_numeric', TRUE);
        //print_r($data);

        $this->load->model('Welcome_Model', 'w_model');
        
        $result = $this->w_model->front_user_registration_check_info($data['user_email'], $data['user_password']);
        echo "<h1>" . $result . "</h1>";
        if ($result == "FALSE")
           {
            echo "This Email is Already registered!!";
            $data = array();
            //$data['MAINCONTENT'] = $this->load->view('already_exist',$data,TRUE);                
            $data['MAINCONTENT'] = $this->load->view('front_registration',$data,TRUE);                
            $this->load->view('master',$data);
            //exit();
           } 
        else 
        {
          echo "Welcome New User!!!!";
          $zlast_user_id = $this->w_model->save_user_registration_info($data);
          //$zlast_user_id = $insert_id;
          //echo "<h1>" . $zlast_user_id . "</h1>";
          //exit();
          //After Saving in the Database send an Welcome Email to New Regstrant

             
             /*
              * START CUSTOMER ACTIVATION EMAIL
              */
             $mdata = array();
             $mdata['from_address']    = 'apysan@gmail.com';
             //$mdata['admin_full_name'] = 'apysan@rediffmail.com';
             $mdata['to_address']      = $this->input->post('user_email', TRUE);
             $mdata['subject']         = 'This is the Subject of the mail';
             //$mdata['password']      = $this->input->post('password',true);    
             $mdata['password']        = $this->input->post('user_password', TRUE);                      
             $mdata['user_id']         = $zlast_user_id; //$this->session->userdata('customer_id');
             //$mdata['last_name']       = $this->input->post('last_name',true);
             
             echo "To   " .$mdata['to_address']."<br>";
             echo "Sub  " .$mdata['subject']."<br>";
             echo "Pass " .$mdata['password']."<br>";
             echo "uid  " .$mdata['user_id']."<br>";
             //exit();
             
             
             
             $this->load->model('Mailer_Model', 'm_model');
             
             $this->m_model->sendEmail($mdata,'activation_email');
             //print_r($mdata);
             //exit();
             /*
              * END CUSTOMER ACTIVATION EMAIL
              */
          
          
          //--------------email proc end
          redirect('welcome');
        }
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        public function update_user_status($id){
            //echo $id."<br/>";
            $en_user_id = str_replace("%F2","/", $id);
            //echo $en_customer_id."<br/>";
            $user_id = $this->encrypt->decode($en_user_id);
            //echo $customer_id;
            $this->load->model('Welcome_model', 'w_model');
            $this->w_model->update_user_status_field($user_id);
            
            
            $data = array();
            //$data['title'] = "Checkout - Shipping Form";
            //$data['all_published_product_category'] = $this->welcome_model->select_all_published_product_category();
            //$data['manufacturer_list']              = $this->welcome_model->select_manufacturers();                
            $data['MAINCONTENT']                    = $this->load->view('activation_status',$data,TRUE);                
            $this->load->view('master',$data);
        }
        
        
        
        
        
        
        
        
        
        
        
        
    public function front_login() {
        $data = array();
        $data['MAINCONTENT'] = $this->load->view('front_login', $data, TRUE);
        $data['title'] = "Login";
        $this->load->view('master', $data);    // this will display the contents of master.php
    }
        
        
        
        
        
    
    public function user_login_check()
    {
     ////$this->load->view('admin/admin_master');    
     //$admin_email_address = $_POST['admin_email_address']; //php procedural way   
     $user_email        = $this->input->post('user_email', TRUE);
     $user_password     = $this->input->post('user_password', TRUE);
     $submit            = $this->input->post('submit', TRUE);
     $user_role_name    = $this->input->post('user_role_name', TRUE);    // for user login now it is " "
     $user_role_numeric = $this->input->post('user_role_numeric', TRUE); // for user login now it is " "
     
     
     
     
     
     if (isset($_POST["submit"]))
        {
         echo "=========yes it is set========<br>";
         echo "User Email is       : " . $user_email."<br>";
         echo "User Password is    : " . $user_password."<br>";
         echo "Submit is           : " . $submit."<br>";
         echo "User Role Name is   : " . $user_role_name."<br>";
         echo "User Role Numeric is: " . $user_role_numeric."<br>";   //user_id."<br>";
         //exit();
        }
     //echo "i am here<br>";
     $this->load->model('Admin_Model','a_model');  // name_of_model, object_of_that_model
     $result = $this->a_model->user_login_check_info($user_email,$user_password);  // sending param
     
     //echo "<pre>";
     //print_r($result);
     //var_dump($result);
     //exit();
     
     $ses_data = array(); //Declaring Session Array
        if($result)
          {
           //echo "inside result<br>";
           //exit(); 
           $ses_data['user_name']         = $result->user_name;         //user_name 
           $ses_data['user_id']           = $result->user_id;           //user_id
           $ses_data['user_role_name']    = $result->user_role_name;    //user_id
           $ses_data['user_role_numeric'] = $result->user_role_numeric; //user_id
           $ses_data['user_photo']        = $result->user_photo;        //user_id
           /*echo "SESSION--user_name         " . $ses_data['user_name']        ."<br>";
           echo "SESSION--user_id           " . $ses_data['user_id']          ."<br>";
           echo "SESSION--user_role_name    " . $ses_data['user_role_name']   ."<br>";
           echo "SESSION--user_role_numeric " . $ses_data['user_role_numeric']."<br>";
           echo "SESSION--user_photo        " . $ses_data['user_photo']       ."<br>";
           echo "<br>";*/
           //exit();
           
           /*echo "Admin Id is    " . $ses_data['admin_id'];
           echo "<br>";
           echo "Admin name is  " . $ses_data['admin_name'];
           exit();*/
           
           $this->session->set_userdata($ses_data);
           //echo "<h1>Session hold following values</h1>";
           //echo "<h3>" . $this->session->userdata('user_id') . "</h3>";
           //echo "<h3>" . $this->session->userdata('user_name') . "</h3>";
           //echo "<h3>" . "USER ROLE : " . $this->session->userdata('user_role_name') . "</h3>";
           //echo "<h3>" . $this->session->userdata('user_role_numeric') . "</h3>";
           //echo "<h3>" . $this->session->userdata('user_photo') . "</h3>";
           //exit();
           
           //GO TO YOUR PROFILE AFTER SUCCESSFUL LOGIN
           //redirect('Welcome');
           redirect('Super_admin');
          }  
        else
          {
           //echo "<h1>Password is Incorrect</h1>";
           //exit();
           $ses_data['exception'] = 'Your Userid or Password Invalid !!!!'; 
           $this->session->set_userdata($ses_data);
           //echo "I am hera due to wrong password................"."<br>";
           //redirect('admin/index'); 
           redirect('admin'); 
           //$this->index();       //all 3 will redirec to same controller
          }  
    }
    
    
    
            
        
        
        
        
        
    
    
}
