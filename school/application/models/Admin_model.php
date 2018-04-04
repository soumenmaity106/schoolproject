<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function select_all_user_role_name() {
        $this->db->select('*');
        $this->db->FROM(' tbl_user');
        //$this->db->WHERE('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        //echo "<pre>";
        //print_r($result);
        //exit();
        return $result;
    }

    public function admin_login_check_info($user_email, $user_password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', md5($user_password));

        $query_result = $this->db->get();  //This is Resource Location
        $result = $query_result->row();    //Selecting Single Record from the Resource Location.
        //echo "<pre>";
        //echo "Value in result is : ";
        //print_r($result);
        //var_dump($result);
        //exit();

        return $result;
    }
    
    
    //user_login_check_info($user_email,$user_password)
    public function user_login_check_info($user_email, $user_password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', md5($user_password));

        $query_result = $this->db->get();  //This is Resource Location
        $result = $query_result->row();    //Selecting Single Record from the Resource Location.
        /*echo "<pre>";
        echo "Value in result is : ";
        print_r($result);
        var_dump($result);
        exit();*/

        return $result;
    }
        

}
