<?php

class Welcome_model extends CI_Model {

    public function select_all_user_role_name() {
        $this->db->select('*');
        $this->db->FROM(' tbl_user');
        //$this->db->WHERE('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    
    public function front_user_registration_check_info($user_email,$user_password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email', $user_email);
        ///////////////////////////////$this->db->where('user_password', md5($user_password));

        $query_result = $this->db->get();  //This is Resource Location
        $result = $query_result->row();    //Selecting Single Record from the Resource Location.
        //print_r($result);
        //exit();
        if ( $query_result->num_rows() > 0 )
        {
            $result="FALSE";   //therereturn $query->result();
        }
        else
        {
            $result="TRUE";   //therereturn $query->result();
        }
        return $result;
    }


    public function save_user_registration_info($data){
        $this->db->INSERT('tbl_user', $data);
        //$this->db->insert('posts', $post_data);
        $insert_id = $this->db->insert_id();
        //echo $insert_id;
        //exit();
        return  $insert_id;
    }

    
    
    
    public function update_user_status_field($user_id){
        $this->db->set('user_status',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('tbl_user');
    }
    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
