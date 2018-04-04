<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(0);
//session_start();
//if(!isset($_SESSION)){
//    session_start();
//}
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        //echo "I am here................<br>";
//        if($admin_id != NULL)
//          {
//           //echo "There is nothng in the session"; 
//           //exit();
//           //redirect('Super_admin','refresh');
//          }
    }

    public function index()
    {
     $data = array();   
     $this->load->model('Admin_Model','a_model');  // name_of_model, object_of_that_model
     $data['all_user_role_name'] = $this->a_model->select_all_user_role_name();
     $this->load->view('admin/login',$data);    
    }
    
    
    
    public function admin_login_check()
    {
     ////$this->load->view('admin/admin_master');    
     //$admin_email_address = $_POST['admin_email_address']; //php procedural way   
     $user_email        = $this->input->post('user_email', TRUE);
     $user_password     = $this->input->post('user_password', TRUE);
     $submit            = $this->input->post('submit', TRUE);
     $user_role_name    = $this->input->post('user_role_name', TRUE);
     $user_role_numeric = $this->input->post('user_role_numeric', TRUE);
     
     
     
     
     
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
     $result = $this->a_model->admin_login_check_info($user_email,$user_password);  // sending param
     
     /*echo "<pre>";
     echo "submit_case is :" . $submit_case->submit;  
     print_r($result);
     var_dump($result);
     exit();*/
     
     $ses_data = array(); //Declaring Session Array
        if($result)
          {
           //echo "inside result<br>";
           $ses_data['user_name']         = $result->user_name;         //user_name 
           $ses_data['user_id']           = $result->user_id;           //user_id
           $ses_data['user_role_name']    = $result->user_role_name;    //user_id
           $ses_data['user_role_numeric'] = $result->user_role_numeric; //user_id
           $ses_data['user_photo']        = $result->user_photo;        //user_id
           //echo $ses_data['user_name']."<br>";
           //echo $ses_data['user_id']."<br>";
           //echo $ses_data['user_role_name']."<br>";
           //echo $ses_data['user_role_numeric']."<br>";
           //echo $ses_data['user_photo']."<br>";
           //echo "<br>";
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
    
    
    
    
    
    
    
    
    
//    
//    
//    
//    public function category_management()
//    {
//     //$this->load->view('admin/category');   
//     $data = array();
//     $data['ADMINMAINCONTENT'] = $this->load->view('admin/category','',TRUE);
//     $this->load->view('admin/ADMIN_MASTER',$data);   
//     
//    }
//    
//
//    public function blog_management()
//    {
//     //$this->load->view('admin/category');   
//     $data = array();
//     $data['ADMINMAINCONTENT'] = $this->load->view('admin/blog','',TRUE);
//     $this->load->view('admin/ADMIN_MASTER',$data);   
//     
//    }
    
    
    
    
    
    
    
    
    
}
