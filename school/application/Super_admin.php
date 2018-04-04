<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//if(!isset($_SESSION)){
//    session_start();
//}++
error_reporting(0);

//session_start();

class Super_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        /* echo "<h1>Session hold following values</h1>";
          echo "i am inside super_admin";
          echo "<h3>USER-ID----" . $this->session->userdata('user_id') . "</h3>";
          echo "<h3>USER-NAME----" . $this->session->userdata('user_name') . "</h3>";
          echo "<h3>USER-ROLE-NAME----" . $this->session->userdata('user_role_name') . "</h3>";
          echo "<h3>USER-ROLE-NUMERIC----" . $this->session->userdata('user_role_numeric') . "</h3>";
          exit(); */

        $admin_id = $this->session->userdata('admin_id');
        //echo "I am here................<br>";
        //echo $admin_id;
        //exit();
        if ($admin_id == NULL) {
            //echo "There is nothng in the session"; 
            //exit();
            //redirect('admin','refresh');
        }
        $this->load->model('Super_admin_model', 'sa_model');  // name_of_model, object_of_that_model
        //$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
    }

    public function index() {
        $data = array();
        $data['count_students'] = $this->sa_model->count_students();
        $data['count_teachers'] = $this->db->count_all('tbl_teacher');
        //  or       $table_row_count = $this->db->count_all('table_name');
        //echo $data['count_students'];
        //echo "<br>";
        //echo $count_students;
        //exit();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/dashboard', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
        //$this->load->view('admin/admin_master'); 
    }

    public function logout() {
        //echo "<br>"; 
        //echo "I am in Logout function<br>";
        //echo "Before unset<br>";
        //echo $this->session->userdata('admin_id');
        //echo "<br>";
        //echo $this->session->userdata('admin_name');
        //echo "<br>";
        //exit();

        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');

        //echo "After unset<br>";
        //echo $this->session->userdata('admin_id');
        //echo "<br>";
        //echo $this->session->userdata('admin_full_name');
        //echo "<br>";
        //exit();

        $sdata = array();
        $sdata['message'] = 'You are <big>s</big>uccessfully logged out...';
        $this->session->set_userdata($sdata);
        redirect('admin');
    }

    //CATEGORY    
    public function add_student() {
        $data = array();
        $data['all_class'] = $this->sa_model->select_all_class();
        $data['all_section'] = $this->sa_model->select_all_section();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_student_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_student() {
        $data = array();
        $data['student_name'] = $this->input->post('student_name', TRUE);
        $data['student_name'] = strtoupper($data['student_name']); // STORE IN DB UPPERCASE
        $data['class_id'] = $this->input->post('class_id', TRUE);
        $data['class_name'] = "2b Fetched"; //$this->input->post('class_name',TRUE);
        $data['section_id'] = $this->input->post('section_id', TRUE);
        $data['section_name'] = "2b Fetched"; //$this->input->post('class_name',TRUE);
        $data['student_gurdian'] = $this->input->post('student_gurdian', TRUE);
        $data['student_dob'] = $this->input->post('student_dob', TRUE);
        $data['student_gender'] = $this->input->post('student_gender', TRUE);
        $data['student_blood_group'] = $this->input->post('student_blood_group', TRUE);
        $data['student_relegion'] = $this->input->post('student_relegion', TRUE);
        $data['student_email'] = $this->input->post('student_email', TRUE);
        $data['student_phone'] = $this->input->post('student_phone', TRUE);
        $data['student_address'] = $this->input->post('student_address', TRUE);
        $data['student_country'] = $this->input->post('student_country', TRUE);
        $data['student_state'] = $this->input->post('student_state', TRUE);
        $data['student_city'] = $this->input->post('student_city', TRUE);
        $data['student_class'] = "not req"; //$this->input->post('student_class',TRUE);                 
        $data['student_section'] = "not req"; //$this->input->post('student_section',TRUE);        
        $data['student_group'] = $this->input->post('student_group', TRUE);
        $data['student_opt_subject'] = $this->input->post('student_opt_subject', TRUE);
        $data['student_register_no'] = $this->input->post('student_register_no', TRUE);
        $data['student_roll_no'] = $this->input->post('student_roll_no', TRUE);
        $data['student_photo'] = $this->input->post('student_photo', TRUE);
        $data['student_extra_curr'] = $this->input->post('student_extra_curr', TRUE);
        $data['student_remark'] = $this->input->post('student_remark', TRUE);
        $data['student_username'] = $this->input->post('student_username', TRUE);
        $data['student_password'] = $this->input->post('student_password', TRUE);
        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          print_r($_FILES);
          exit(); */
        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/student_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';  // kilobyte
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('student_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['student_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/student_image/" . $_FILES["file"]["name"];
            echo $filepath;

//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */

        $this->sa_model->save_student_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        //redirect('super_admin/add_student');
        redirect('super_admin/manage_student');
    }

    public function manage_student() {
        $data = array();
        $data['all_student'] = $this->sa_model->select_all_student();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_student_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function suspended_student($student_id) {
        $this->sa_model->update_suspend_student_by_id($student_id);
        redirect('super_admin/manage_student');
    }

    public function active_student($student_id) {
        $this->sa_model->update_active_student_by_id($student_id);
        redirect('super_admin/manage_student');
    }

    public function edit_student($student_id) {
        $data = array();
        $data['student_info'] = $this->sa_model->select_student_info_by_id($student_id); //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_student_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_teacher($teacher_id) {
        $data = array();
        $data['teacher_info'] = $this->sa_model->select_teacher_info_by_id($teacher_id); //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_teacher_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_user($user_id) {
        $data = array();
        $data['user_info'] = $this->sa_model->select_user_info_by_id($user_id); //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_user_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_class($class_id) {
        $data = array();
        $data['class_info'] = $this->sa_model->select_class_info_by_id($class_id);
        $data['all_teacher'] = $this->sa_model->select_all_teacher();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_class_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_student_attendence() {
        $data = array();
        $data['all_student'] = ""; //$this->sa_model->select_all_student();
        $data['all_class'] = $this->sa_model->select_all_class();
        $data['all_section'] = $this->sa_model->select_all_section();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_student_attendence_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_section($section_id) {
        $data = array();
        $data['section_info'] = $this->sa_model->select_section_info_by_id($section_id);
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_section_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function suspended_staff($staff_id) {
        $this->sa_model->update_suspend_staff_by_id($staff_id);
        redirect('super_admin/manage_staff');
    }

    public function active_staff($staff_id) {
        $this->sa_model->update_active_staff_by_id($staff_id);
        redirect('super_admin/manage_staff');
    }

    public function edit_staff($staff_id) {
        $data = array();
        $data['staff_info'] = $this->sa_model->select_staff_info_by_id($staff_id); //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_staff_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function suspended_class($class_id) {
        $this->sa_model->update_suspend_class_by_id($class_id);
        redirect('super_admin/manage_class');
    }

    public function active_class($class_id) {
        $this->sa_model->update_active_class_by_id($class_id);
        redirect('super_admin/manage_class');
    }

    public function suspended_section($section_id) {
        $this->sa_model->update_suspend_section_by_id($section_id);
        redirect('super_admin/manage_section');
    }

    public function active_section($section_id) {
        $this->sa_model->update_active_section_by_id($section_id);
        redirect('super_admin/manage_section');
    }

    public function suspended_subject($subject_id) {
        $this->sa_model->update_suspend_subject_by_id($subject_id);
        redirect('super_admin/manage_subject');
    }

    public function active_subject($subject_id) {
        $this->sa_model->update_active_subject_by_id($subject_id);
        redirect('super_admin/manage_subject');
    }

    public function delete_student($student_id) {
        $this->sa_model->delete_student_info($student_id);
        redirect('super_admin/manage_student');
    }

    public function delete_parent($parent_id) {
        $this->sa_model->delete_parent_info($parent_id);
        redirect('super_admin/manage_parent');
    }

    public function update_student() {
        $data = array();
        $data['student_name'] = $this->input->post('student_name', TRUE);
        $data['student_gurdian'] = $this->input->post('student_gurdian', TRUE);
        $data['student_dob'] = $this->input->post('student_dob', TRUE);
        $data['student_gender'] = $this->input->post('student_gender', TRUE);
        $data['student_blood_group'] = $this->input->post('student_blood_group', TRUE);
        $data['student_relegion'] = $this->input->post('student_relegion', TRUE);
        $data['student_email'] = $this->input->post('student_email', TRUE);
        $data['student_phone'] = $this->input->post('student_phone', TRUE);
        $data['student_address'] = $this->input->post('student_address', TRUE);
        $data['student_country'] = $this->input->post('student_country', TRUE);
        $data['student_state'] = $this->input->post('student_state', TRUE);
        $data['student_city'] = $this->input->post('student_city', TRUE);
        $data['student_class'] = $this->input->post('student_class', TRUE);
        $data['student_section'] = $this->input->post('student_section', TRUE);
        $data['student_group'] = $this->input->post('student_group', TRUE);
        $data['student_opt_subject'] = $this->input->post('student_opt_subject', TRUE);
        $data['student_register_no'] = $this->input->post('student_register_no', TRUE);
        $data['student_roll_no'] = $this->input->post('student_roll_no', TRUE);
        $data['student_photo'] = $this->input->post('student_photo', TRUE);
        $data['student_extra_curr'] = $this->input->post('student_extra_curr', TRUE);
        $data['student_remark'] = $this->input->post('student_remark', TRUE);
        $data['student_username'] = $this->input->post('student_username', TRUE);
        $data['student_password'] = $this->input->post('student_password', TRUE);
        $student_id = $this->input->post('student_id', TRUE);
        $this->sa_model->update_student_info($data, $student_id);
        redirect('super_admin/manage_student');
    }

    public function update_parent() {
        $data = array();
        $data['parent_name'] = $this->input->post('parent_name', TRUE);
        $data['parent_id'] = $this->input->post('parent_id', TRUE);
        $data['parent_father_name'] = $this->input->post('parent_father_name', TRUE);
        $data['parent_mother_Name'] = $this->input->post('parent_mother_Name', TRUE);
        $data['parent_father_profession'] = $this->input->post('parent_father_profession', TRUE);
        $data['parent_mother_profession'] = $this->input->post('parent_mother_profession', TRUE);
        $data['parent_email'] = $this->input->post('parent_email', TRUE);
        $data['parent_phone'] = $this->input->post('parent_phone', TRUE);
        $data['parent_address'] = $this->input->post('parent_address', TRUE);
        $data['parent_photo'] = $this->input->post('parent_photo', TRUE);
        $data['parent_status'] = $this->input->post('parent_status', TRUE);
        $data['parent_username'] = $this->input->post('parent_username', TRUE);
        $data['parent_password'] = $this->input->post('parent_password', TRUE);
        $parent_id = $this->input->post('parent_id', TRUE);
        $this->sa_model->update_parent_info($data, $parent_id);
        redirect('super_admin/manage_parent');
    }

    public function update_user() {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', TRUE);
        $data['user_role_name'] = $this->input->post('user_role_name', TRUE);
        $data['user_role_numeric'] = $this->input->post('user_role_numeric', TRUE);
        $data['user_DOB'] = $this->input->post('user_DOB', TRUE);
        $data['user_gender'] = $this->input->post('user_gender', TRUE);
        $data['user_religion'] = $this->input->post('user_religion', TRUE);
        $data['user_email'] = $this->input->post('user_email', TRUE);
        $data['user_phone'] = $this->input->post('user_phone', TRUE);
        $data['user_address'] = $this->input->post('user_address', TRUE);
        $data['user_DOJ'] = $this->input->post('user_DOJ', TRUE);
        $data['user_photo'] = $this->input->post('user_photo', TRUE);
        $data['user_status'] = $this->input->post('user_status', TRUE);
        $data['user_username'] = $this->input->post('user_username', TRUE);
        $data['user_password'] = $this->input->post('user_password', TRUE);
        $user_id = $this->input->post('user_id', TRUE);
        $this->sa_model->update_user_info($data, $user_id);
        redirect('super_admin/manage_user');
    }

    public function update_staff() {
        $data = array();
        $data['staff_name'] = $this->input->post('staff_name', TRUE);
        $data['staff_phone'] = $this->input->post('staff_phone', TRUE);
        $data['staff_email'] = $this->input->post('staff_email', TRUE);
        $data['staff_address'] = $this->input->post('staff_address', TRUE);
        $data['staff_pan'] = $this->input->post('staff_pan', TRUE);
        $data['staff_aadhar'] = $this->input->post('staff_aadhar', TRUE);
        $data['staff_designation'] = $this->input->post('staff_designation', TRUE);
        $data['staff_salary'] = $this->input->post('staff_salary', TRUE);
        $data['staff_doj'] = $this->input->post('staff_doj', TRUE);
        $data['staff_photo'] = $this->input->post('staff_photo', TRUE);
        $data['staff_status'] = $this->input->post('staff_status', TRUE);
        $staff_id = $this->input->post('staff_id', TRUE);
        $this->sa_model->update_staff_info($data, $staff_id);
        redirect('super_admin/manage_staff');
    }

    public function update_class() {
        echo "I am here";
        //exit();
        $data = array();
        //$data['class_class']        = $this->input->post('class_class',TRUE);
        //$data['class_numeric']      = $this->input->post('class_numeric',TRUE);
        //$data['class_teacher_name'] = $this->input->post('class_teacher_name',TRUE);
        //$data['class_note']         = $this->input->post('class_note',TRUE);        
        //$data['class_status']       = $this->input->post('class_status',TRUE); 
//-----------         
        $data['class_name'] = $this->input->post('class_name', TRUE);
        $data['class_name'] = strtoupper($data['class_name']); // STORE IN DB UPPERCASE         
        $data['class_numeric'] = $this->input->post('class_numeric', TRUE);
        $data['teacher_id'] = $this->input->post('teacher_id', TRUE);
        $data['class_teacher_name'] = "2bd"; //$this->input->post('class_teacher_name',TRUE);    
        $data['teacher_name'] = "2B-FETCHED"; //$this->input->post('class_teacher_name',TRUE);    
        $data['class_note'] = $this->input->post('class_note', TRUE);

        $class_id = $this->input->post('class_id', TRUE);
        $this->sa_model->update_class_info($data, $class_id);
        redirect('super_admin/manage_class');
    }

    public function update_subject() {
        $data = array();
        $data['class_name'] = $this->input->post('class_name', TRUE);
        $data['teacher_name'] = $this->input->post('teacher_name', TRUE);
        $data['subject_type'] = $this->input->post('subject_type', TRUE);
        $data['pass_mark'] = $this->input->post('pass_mark', TRUE);
        $data['final_mark'] = $this->input->post('final_mark', TRUE);
        $data['subject_name'] = $this->input->post('subject_name', TRUE);
        $data['subject_author'] = $this->input->post('subject_author', TRUE);
        $data['subject_code'] = $this->input->post('subject_code', TRUE);
        $data['subject_status'] = $this->input->post('subject_status', TRUE);

        /* echo "<pre>";
          print_r($data);
          exit(); */

        $subject_id = $this->input->post('subject_id', TRUE);
        $this->sa_model->update_subject_info($data, $subject_id);
        redirect('super_admin/manage_subject');
    }

    public function suspended_user($user_id) {
        $this->sa_model->update_suspend_user_by_id($user_id);
        redirect('super_admin/manage_user');
    }

    public function active_user($user_id) {
        $this->sa_model->update_active_user_by_id($user_id);
        redirect('super_admin/manage_user');
    }

    public function manage_parent() {
        $data = array();
        $data['all_parent'] = $this->sa_model->select_all_parent();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_parent_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function suspended_parent($parent_id) {
        $this->sa_model->update_suspend_parent_by_id($parent_id);
        redirect('super_admin/manage_parent');
    }

    public function active_parent($parent_id) {
        $this->sa_model->update_active_parent_by_id($parent_id);
        redirect('super_admin/manage_parent');
    }

    public function edit_parent($parent_id) {
        $data = array();
        $data['parent_info'] = $this->sa_model->select_parent_info_by_id($parent_id); //both published and unpublished 
        //echo "<pre>";
        //print_r($data);
        //exit();      


        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_parent_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function active_teacher($teacher_id) {
        $this->sa_model->update_active_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }

//suspended_teacher    
    public function suspended_teacher($teacher_id) {
        $this->sa_model->update_suspend_teacher_by_id($teacher_id);
        redirect('super_admin/manage_teacher');
    }

//manage_teacher        
    public function manage_teacher() {
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_all_teacher();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_teacher_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

//manage_teacher        
    public function manage_user() {
        $data = array();
        $data['all_user'] = $this->sa_model->select_all_user();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_user_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_teacher() {
        echo "I am here";
        //exit();
        $data = array();
        $data['teacher_name'] = $this->input->post('teacher_name', TRUE);
        $data['teacher_designation'] = $this->input->post('teacher_designation', TRUE);
        $data['teacher_DOB'] = $this->input->post('teacher_DOB', TRUE);
        $data['teacher_gender'] = $this->input->post('teacher_gender', TRUE);
        $data['teacher_religion'] = $this->input->post('teacher_religion', TRUE);
        $data['teacher_email'] = $this->input->post('teacher_email', TRUE);
        $data['teacher_phone'] = $this->input->post('teacher_phone', TRUE);
        $data['teacher_address'] = $this->input->post('teacher_address', TRUE);
        $data['teacher_DOJ'] = $this->input->post('teacher_DOJ', TRUE);
        $data['teacher_photo'] = $this->input->post('teacher_photo', TRUE);
        $data['teacher_status'] = $this->input->post('teacher_status', TRUE);
        $data['teacher_username'] = $this->input->post('teacher_username', TRUE);
        $data['teacher_password'] = $this->input->post('teacher_password', TRUE);


        $teacher_id = $this->input->post('teacher_id', TRUE);
        $this->sa_model->update_teacher_info($data, $teacher_id);
        redirect('super_admin/manage_teacher');
    }

    public function edit_subject($subject_id) {
        $data = array();
        $data['subject_info'] = $this->sa_model->select_subject_info_by_id($subject_id); //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/edit_subject_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_teacher() {
        //echo "I am inside the add_student function";
        //exit();
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_teacher_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_teacher() {
        $data = array();
        $data['teacher_name'] = $this->input->post('teacher_name', TRUE);
        $data['teacher_designation'] = $this->input->post('teacher_designation', TRUE);
        $data['teacher_DOB'] = $this->input->post('teacher_DOB', TRUE);
        $data['teacher_gender'] = $this->input->post('teacher_gender', TRUE);
        $data['teacher_religion'] = $this->input->post('teacher_religion', TRUE);
        $data['teacher_email'] = $this->input->post('teacher_email', TRUE);
        $data['teacher_phone'] = $this->input->post('teacher_phone', TRUE);
        $data['teacher_address'] = $this->input->post('teacher_address', TRUE);
        $data['teacher_DOJ'] = $this->input->post('teacher_DOJ', TRUE);
        $data['teacher_photo'] = $this->input->post('teacher_photo', TRUE);
        $data['teacher_username'] = $this->input->post('teacher_username', TRUE);
        $data['teacher_password'] = $this->input->post('teacher_password', TRUE);



        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();

        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/teacher_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';  // kilobyte
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('teacher_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['teacher_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/teacher_image/" . $_FILES["file"]["name"];
            echo $filepath;

//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */




//         echo $data['student_name']."<br>";
//         echo $data['student_gurdian']."<br>";
//         echo $data['student_dob']."<br>";        
//         echo $data['student_gender']."<br>";                 
//         echo $data['student_blood_group']."<br>";        
//         echo $data['student_relegion']."<br>";        
//         echo $data['student_email']."<br>";                 
//         echo $data['student_phone']."<br>";        
//         echo $data['student_address']."<br>";        
//         echo $data['student_country']."<br>";                 
//         echo $data['student_state']."<br>";        
//         echo $data['student_city']."<br>";        
//         echo $data['student_class']."<br>";                 
//         echo $data['student_section']."<br>";        
//         echo $data['student_group']."<br>";        
//         echo $data['student_opt_subject']."<br>";                 
//         echo $data['student_register_no']."<br>";        
//         echo $data['student_roll_no']."<br>";        
//         echo $data['student_photo']."<br>";                 
//         echo $data['student_extra_curr']."<br>";        
//         echo $data['student_remark']."<br>";        
//         echo $data['student_username']."<br>";                 
//         echo $data['student_password']."<br>";     
//         exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        $this->sa_model->save_teacher_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_teacher');
    }

    public function add_parent() {
        //echo "I am inside the add_student function";
        //exit();
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_parent_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_parent() {
        $data = array();
        $data['parent_name'] = $this->input->post('parent_name', TRUE);
        $data['parent_father_name'] = $this->input->post('parent_father_name', TRUE);
        $data['parent_mother_Name'] = $this->input->post('parent_mother_Name', TRUE);
        $data['parent_father_profession'] = $this->input->post('parent_father_profession', TRUE);
        $data['parent_mother_profession'] = $this->input->post('parent_mother_profession', TRUE);
        $data['parent_email'] = $this->input->post('parent_email', TRUE);
        $data['parent_phone'] = $this->input->post('parent_phone', TRUE);
        $data['parent_address'] = $this->input->post('parent_address', TRUE);
        $data['parent_photo'] = $this->input->post('parent_photo', TRUE);
        $data['parent_username'] = $this->input->post('parent_username', TRUE);
        $data['parent_password'] = $this->input->post('parent_password', TRUE);



        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();

        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/parent_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';  // kilobyte
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('parent_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['parent_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/parent_image/" . $_FILES["file"]["name"];
//echo $filepath; 
//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */

        echo $data['parent_name'] . "<br>";
        echo $data['parent_father_name'] . "<br>";
        echo $data['parent_mother_Name'] . "<br>";
        echo $data['parent_father_profession'] . "<br>";
        echo $data['parent_mother_profession'] . "<br>";
        echo $data['parent_email'] . "<br>";
        echo $data['parent_phone'] . "<br>";
        echo $data['parent_address'] . "<br>";
        echo $data['parent_photo'] . "<br>";
        echo $data['parent_username'] . "<br>";
        echo $data['parent_password'] . "<br>";

//exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        $this->sa_model->save_parent_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_parent');
    }

    public function add_user() {
        //echo "I am inside the add_student function";
        //exit();
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_user_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_user() {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', TRUE);
        $data['user_role_name'] = $this->input->post('user_role_name', TRUE);
        $data['user_DOB'] = $this->input->post('user_DOB', TRUE);
        $data['user_gender'] = $this->input->post('user_gender', TRUE);
        $data['user_religion'] = $this->input->post('user_religion', TRUE);
        $data['user_email'] = $this->input->post('user_email', TRUE);
        $data['user_phone'] = $this->input->post('user_phone', TRUE);
        $data['user_address'] = $this->input->post('user_address', TRUE);
        $data['user_DOJ'] = $this->input->post('user_DOJ', TRUE);
        $data['user_photo'] = $this->input->post('user_photo', TRUE);
        $data['user_username'] = $this->input->post('user_username', TRUE);
        $data['user_password'] = md5($this->input->post('user_password', TRUE));

        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          print_r($_FILES);
          exit(); */

        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/user_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';  // kilobyte
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('user_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['user_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/user_image/" . $_FILES["file"]["name"];
//echo $filepath; 
//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();





        /* echo $data['student_name']."<br>";
          echo $data['student_gurdian']."<br>";
          echo $data['student_dob']."<br>";
          echo $data['student_gender']."<br>";
          echo $data['student_blood_group']."<br>";
          echo $data['student_relegion']."<br>";
          echo $data['student_email']."<br>";
          echo $data['student_phone']."<br>";
          echo $data['student_address']."<br>";
          echo $data['student_country']."<br>";
          echo $data['student_state']."<br>";
          echo $data['student_city']."<br>";
          echo $data['student_class']."<br>";
          echo $data['student_section']."<br>";
          echo $data['student_group']."<br>";
          echo $data['student_opt_subject']."<br>";
          echo $data['student_register_no']."<br>";
          echo $data['student_roll_no']."<br>";
          echo $data['student_photo']."<br>";
          echo $data['student_extra_curr']."<br>";
          echo $data['student_remark']."<br>";
          echo $data['student_username']."<br>";
          echo $data['student_password']."<br>"; */
        //exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        $this->sa_model->save_user_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_user');
    }

    public function add_class() {  //Standard
        //echo "i am here";
        //exit();
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_all_teacher();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_class_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_class() {
        $data = array();
        $data['all_class'] = $this->sa_model->select_all_class();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_class_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_class() {
        $data = array();
        $data['class_name'] = $this->input->post('class_name', TRUE);
        $data['class_name'] = strtoupper($data['class_name']); // STORE IN DB UPPERCASE
        $data['class_numeric'] = $this->input->post('class_numeric', TRUE);
        $data['teacher_id'] = $this->input->post('teacher_id', TRUE);
        $data['class_teacher_name'] = "2bd"; //$this->input->post('class_teacher_name',TRUE);    
        $data['teacher_name'] = "2B-FETCHED"; //$this->input->post('class_teacher_name',TRUE);    
        $data['class_note'] = $this->input->post('class_note', TRUE);
        $this->sa_model->save_class_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_class');
    }

    public function add_subject() {
        //echo "I am inside the add_student function";
        //exit();
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_subject_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_subject() {
        $data = array();
        $data['all_subject'] = $this->sa_model->select_all_subject();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_subject_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_subject() {
        $data = array();
        $data['class_name'] = $this->input->post('class_name', TRUE);
        $data['teacher_name'] = $this->input->post('teacher_name', TRUE);
        $data['subject_type'] = $this->input->post('subject_type', TRUE);
        $data['pass_mark'] = $this->input->post('pass_mark', TRUE);
        $data['final_mark'] = $this->input->post('final_mark', TRUE);
        $data['subject_name'] = $this->input->post('subject_name', TRUE);
        $data['subject_author'] = $this->input->post('subject_author', TRUE);
        $data['subject_code'] = $this->input->post('subject_code', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_subject_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_subject');
    }

    public function add_section() {  //Standard
        $data = array();
        $data['all_teacher'] = $this->sa_model->select_all_teacher();
        //$data['all_section'] = $this->sa_model->select_all_section();
        $data['all_class'] = $this->sa_model->select_all_class();

        //echo "<pre>";
        //print_r($data);
        //exit();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_section_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_section() {
        $data = array();
        $data['section_name'] = $this->input->post('section_name', TRUE);
        $data['section_category'] = $this->input->post('section_category', TRUE);
        $data['section_capacity'] = $this->input->post('section_capacity', TRUE);
        $data['section_class'] = "2bd"; //$this->input->post('section_class',TRUE);
        $data['section_teacher_name'] = "not reqd field"; //$this->input->post('section_teacher_name',TRUE);
        $data['teacher_name'] = "not reqd field"; //$this->input->post('section_teacher_name',TRUE);
        $data['teacher_id'] = $this->input->post('teacher_id', TRUE);
        $data['section_note'] = $this->input->post('section_note', TRUE);
        //strtoupper()
        $data['section_name'] = strtoupper($data['section_name']); // STORE IN DB UPPERCASE
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_section_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_section');
    }

    public function manage_section() {
        $data = array();
        $data['all_section'] = $this->sa_model->select_all_section();
        //$data['all_teacher'] = $this->sa_model->select_all_teacher(); 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_section_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_syllabus() {
        $data = array();
        $data['all_syllabus'] = $this->sa_model->select_all_syllabus();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_syllabus_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_syllabus() {  //Standard
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_syllabus_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_syllabus() {
        $data = array();
        $data['syllabus_title'] = $this->input->post('syllabus_title', TRUE);
        $data['syllabus_description'] = $this->input->post('syllabus_description', TRUE);
        $data['syllabus_class'] = $this->input->post('syllabus_class', TRUE);
        $data['syllabus_photo'] = $this->input->post('syllabus_photo', TRUE);

        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();

        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/syllabus_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|zip|txt|html';
        $config['max_size'] = '1000';  // kilobyte
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';
        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('syllabus_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['syllabus_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/syllabus_image/" . $_FILES["file"]["name"];
//echo $filepath; 
//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */




//         echo $data['student_name']."<br>";
//         echo $data['student_gurdian']."<br>";
//         echo $data['student_dob']."<br>";        
//         echo $data['student_gender']."<br>";                 
//         echo $data['student_blood_group']."<br>";        
//         echo $data['student_relegion']."<br>";        
//         echo $data['student_email']."<br>";                 
//         echo $data['student_phone']."<br>";        
//         echo $data['student_address']."<br>";        
//         echo $data['student_country']."<br>";                 
//         echo $data['student_state']."<br>";        
//         echo $data['student_city']."<br>";        
//         echo $data['student_class']."<br>";                 
//         echo $data['student_section']."<br>";        
//         echo $data['student_group']."<br>";        
//         echo $data['student_opt_subject']."<br>";                 
//         echo $data['student_register_no']."<br>";        
//         echo $data['student_roll_no']."<br>";        
//         echo $data['student_photo']."<br>";                 
//         echo $data['student_extra_curr']."<br>";        
//         echo $data['student_remark']."<br>";        
//         echo $data['student_username']."<br>";                 
//         echo $data['student_password']."<br>";     
//         exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        $this->sa_model->save_syllabus_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_syllabus');
    }

    public function manage_assignment() {
        $data = array();
        $data['all_assignment'] = $this->sa_model->select_all_assignment();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_assignment_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_assignment() {  //Standard
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_assignment_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_assignment() {
        $data = array();
        $data['assignment_title'] = $this->input->post('assignment_title', TRUE);
        $data['assignment_description'] = $this->input->post('assignment_description', TRUE);
        $data['assignment_deadline'] = $this->input->post('assignment_deadline', TRUE);
        $data['assignment_class'] = $this->input->post('assignment_class', TRUE);
        $data['assignment_section'] = $this->input->post('assignment_section', TRUE);
        $data['assignment_subject'] = $this->input->post('assignment_subject', TRUE);
        $data['assignment_photo'] = $this->input->post('assignment_photo', TRUE);

        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();

        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/assignment_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|zip|txt|html';
        $config['max_size'] = '1000';  // kilobyte
        //$config['max_width']  = '1024';
        //$config['max_height']  = '768';
        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('assignment_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['assignment_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/assignment_image/" . $_FILES["file"]["name"];
//echo $filepath; 
//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */




//         echo $data['student_name']."<br>";
//         echo $data['student_gurdian']."<br>";
//         echo $data['student_dob']."<br>";        
//         echo $data['student_gender']."<br>";                 
//         echo $data['student_blood_group']."<br>";        
//         echo $data['student_relegion']."<br>";        
//         echo $data['student_email']."<br>";                 
//         echo $data['student_phone']."<br>";        
//         echo $data['student_address']."<br>";        
//         echo $data['student_country']."<br>";                 
//         echo $data['student_state']."<br>";        
//         echo $data['student_city']."<br>";        
//         echo $data['student_class']."<br>";                 
//         echo $data['student_section']."<br>";        
//         echo $data['student_group']."<br>";        
//         echo $data['student_opt_subject']."<br>";                 
//         echo $data['student_register_no']."<br>";        
//         echo $data['student_roll_no']."<br>";        
//         echo $data['student_photo']."<br>";                 
//         echo $data['student_extra_curr']."<br>";        
//         echo $data['student_remark']."<br>";        
//         echo $data['student_username']."<br>";                 
//         echo $data['student_password']."<br>";     
//         exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        $this->sa_model->save_assignment_info($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_assignment');
    }

    public function manage_routine() {
        $data = array();
        $data['all_routine'] = $this->sa_model->select_all_routine();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_routine_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_routine() {  //Standard
        //echo "I am inside the add_student function";
        //exit();
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_routine_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

//save_routine    
    public function save_routine() {
        $data = array();
        $data['routine_school_year'] = $this->input->post('routine_school_year', TRUE);
        $data['routine_class'] = $this->input->post('routine_class', TRUE);
        $data['routine_section'] = $this->input->post('routine_section', TRUE);
        $data['routine_subject'] = $this->input->post('routine_subject', TRUE);
        $data['routine_day'] = $this->input->post('routine_day', TRUE);
        $data['routine_teacher'] = $this->input->post('routine_teacher', TRUE);
        $data['routine_start_time'] = $this->input->post('routine_start_time', TRUE);
        $data['routine_end_time'] = $this->input->post('routine_end_time', TRUE);
        $data['routine_room'] = $this->input->post('routine_room', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //print_r($_FILES);
        //exit();
        $this->sa_model->save_routine_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_routine');
    }

//save_exam        







    public function manage_exam() {
        $data = array();
        $data['all_exam'] = $this->sa_model->select_all_exam();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    //CATEGORY    
    public function add_exam() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam() {
        $data = array();
        $data['exam_name'] = $this->input->post('exam_name', TRUE);
        $data['exam_date'] = $this->input->post('exam_date', TRUE);
        $data['exam_note'] = $this->input->post('exam_note', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam');
    }

    public function manage_exam_schedule() {
        $data = array();
        $data['all_exam_schedule'] = $this->sa_model->select_all_exam_schedule();                     //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_schedule_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_schedule() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_schedule_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_schedule() {
        $data = array();
        $data['exam_name'] = $this->input->post('exam_name', TRUE);
        $data['exam_date'] = $this->input->post('exam_date', TRUE);
        $data['exam_class'] = $this->input->post('exam_class', TRUE);
        $data['exam_section'] = $this->input->post('exam_section', TRUE);
        $data['exam_subject'] = $this->input->post('exam_subject', TRUE);
        $data['exam_time_from'] = $this->input->post('exam_time_from', TRUE);
        $data['exam_time_to'] = $this->input->post('exam_time_to', TRUE);
        $data['exam_room'] = $this->input->post('exam_room', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_schedule_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_schedule');
    }

//manage_exam_grade        
    public function manage_exam_grade() {
        $data = array();
        $data['all_exam_grade'] = $this->sa_model->select_all_exam_grade();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_grade_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_grade() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_schedule_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_grade() {
        $data = array();
        $data['exam_name'] = $this->input->post('exam_name', TRUE);
        $data['exam_date'] = $this->input->post('exam_date', TRUE);
        $data['exam_class'] = $this->input->post('exam_class', TRUE);
        $data['exam_section'] = $this->input->post('exam_section', TRUE);
        $data['exam_subject'] = $this->input->post('exam_subject', TRUE);
        $data['exam_time_from'] = $this->input->post('exam_time_from', TRUE);
        $data['exam_time_to'] = $this->input->post('exam_time_to', TRUE);
        $data['exam_room'] = $this->input->post('exam_room', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_schedule_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_schedule');
    }

//manage_exam_attendence
//manage_exam_grade        
    public function manage_exam_attendence() {
        $data = array();
        $data['all_exam_attendence'] = $this->sa_model->select_all_exam_grade();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_attendence_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_attendence() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_schedule_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_attendence() {
        $data = array();
        $data['exam_name'] = $this->input->post('exam_name', TRUE);
        $data['exam_date'] = $this->input->post('exam_date', TRUE);
        $data['exam_class'] = $this->input->post('exam_class', TRUE);
        $data['exam_section'] = $this->input->post('exam_section', TRUE);
        $data['exam_subject'] = $this->input->post('exam_subject', TRUE);
        $data['exam_time_from'] = $this->input->post('exam_time_from', TRUE);
        $data['exam_time_to'] = $this->input->post('exam_time_to', TRUE);
        $data['exam_room'] = $this->input->post('exam_room', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_schedule_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_schedule');
    }

    public function manage_email() {
        $data = array();
        $data['all_email'] = $this->sa_model->select_all_email();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_email_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_email() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_email_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    //save_email
    public function save_email() {
        $data = array();
        $data['to'] = $this->input->post('to', TRUE);
        $data['cc_to'] = $this->input->post('cc_to', TRUE);
        $data['bcc_to'] = $this->input->post('bcc_to', TRUE);
        $data['subject'] = $this->input->post('subject', TRUE);
        $data['message'] = $this->input->post('message', TRUE);
        $data['user_role_name'] = $this->input->post('user_role_name', TRUE);

        $this->sa_model->save_email_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        //=================================//
        //BEFORE REDIRECTING SEND THE EMAIL//
        //=================================//
        $var_to = $data['to'];
        $var_cc_to = $data['cc_to'];
        $var_bcc_to = $data['bcc_to'];
        $var_subject = $data['subject'];
        $var_message = $data['message'];

        //echo $var_to;
        //echo "<br>";
        //echo $var_cc_to;
        //echo "<br>";
        //echo $var_bcc_to;
        //==========================================================
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'apysan@gmail.com',
            'smtp_pass' => 'bharatindia4209211poiuy',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('apysan@gmail.com', 'School-AdminM');
        $this->email->to($var_to);
        $this->email->cc($var_cc_to);
        $this->email->bcc($var_bcc_to);
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


        redirect('super_admin/manage_email');
    }

    public function send_sms() {
        echo "I am inside the send_sms function";
        exit();
        $apiKey = urlencode('/mKR7qM8nBk-32lxWq39TrXG0B6wRFNJmnfefGEJiS');
        // Message details
        //$numbers = ('8100455586');
        $numbers = array('8100455586,7003894257,9007282656,9093587039');
        ////priy    = 7003894257
        ////soumen  = 9093587039 
        ////arjun   = 8100455586
        ////rajudaa = 9007282656
        $sender = urlencode('TXTLCL');
        $message = rawurlencode('Urgent(Testing) Message From School');

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        // Process your response here
        //echo 
        echo "<pre>";
        echo $response;
        //echo "</pre>";

        echo "<h1>SMS success</h1>";
    }

    public function manage_sms() {
        $data = array();
        $data['all_sms'] = $this->sa_model->select_all_sms();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_sms_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_sms() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_sms_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_sms() {
        $data = array();
        $data['to_phone'] = $this->input->post('to_phone', TRUE);
        $data['message'] = $this->input->post('message', TRUE);
        $data['user_role_name'] = $this->input->post('user_role_name', TRUE);

        ////arjun   = 8100455586
        ////rajudaa = 9007282656
        //echo "<pre>";
        //print_r($data);
        //exit();

        $this->sa_model->save_sms_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        //redirect('super_admin/manage_sms');
        //exit();
        $zphone = $data['to_phone'];
        $zmessage = $data['message'];
        //=================================//
        //BEFORE REDIRECTING SEND THE SMS  //
        //=================================//
        //###########https://control.textlocal.in/###########
        //$message='I am a coder';
        //$mobile=8100455586;
        //$this->sms->smssend($mobile,$message);
        //$this->load->helper('sendsms_helper');
        //sendsms( '8100455586', 'test sms' );
        //echo "I am here";
        //exit();
        // Authorisation details.
//	$username = "apysan@rediffmail.com";
//	$hash = "98a4ff59117661430290d81cbafd548e77366f775d07733b76d1e3bb62871133";
//
//	// Config variables. Consult http://api.textlocal.in/docs for more info.
//	$test = "0";
//
//	// Data for text message. This is the text message data.
//	$sender = "ARJUN"; // This is who the message appears to be from.
//	$numbers = "8100455586"; // A single number or a comma-seperated list of numbers
//	$message = "This is a test message from the PHP API script.";
//	// 612 chars or less
//	// A single number or a comma-seperated list of numbers
//	$message = urlencode($message);
//	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
//	$ch = curl_init('http://api.textlocal.in/send/?');
//	curl_setopt($ch, CURLOPT_POST, true);
//	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//	$result = curl_exec($ch); // This is the result from the API
//	curl_close($ch);
        // Account details
        $apiKey = urlencode('/mKR7qM8nBk-32lxWq39TrXG0B6wRFNJmnfefGEJiS');

        // Message details
        //$numbers = ('8100455586');
        //$numbers = array('8100455586,7003894257,9007282656,9093587039');
        $numbers = array($zphone);
        ////priy    = 7003894257
        ////soumen  = 9093587039 
        ////arjun   = 8100455586
        ////rajudaa = 9007282656
        $sender = urlencode('TXTLCL');
        //$message = rawurlencode('Urgent(Testing) Message From School');
        $message = rawurlencode($zmessage);

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Process your response here
        //echo 
        echo "<pre>";
        echo $response;
        //echo "</pre>";













        echo "<h1>SMS success</h1>";


        //=================================//
        //       SENDING SMS END HERE      //
        //=================================//


        redirect('super_admin/manage_email');
    }

    public function manage_exam_question_group() {
        $data = array();
        $data['all_question_group'] = $this->sa_model->select_all_question_group();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_question_group', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_question_group() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_question_group_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_question_group() {
        $data = array();
        $data['title'] = $this->input->post('title', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_question_group_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_question_group');
    }

    public function manage_exam_question_level() {
        $data = array();
        $data['all_question_level'] = $this->sa_model->select_all_question_level();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_question_level', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_question_level() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_question_level_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_question_level() {
        $data = array();
        $data['title'] = $this->input->post('title', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_question_level_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_question_level');
    }

//manage_exam_question_bank        
    public function manage_exam_question_bank() {
        //echo "I am here";
        //exit();
        $data = array();
        $data['all_question_group'] = $this->sa_model->select_all_question_group();   //both published and unpublished 
        $data['all_question_level'] = $this->sa_model->select_all_question_level();   //both published and unpublished             
        $data['all_question_bank'] = $this->sa_model->select_all_question_bank();   //both published and unpublished             
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_question_bank', $data, TRUE);
        //echo "I am here";
        //echo "<pre>";
        //print_r($data);
        //exit();
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_question_bank() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_question_bank_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_question_bank() {
        $data = array();
        $data['q_group'] = $this->input->post('q_group', TRUE);
        $data['q_difficulty'] = $this->input->post('q_difficulty', TRUE);
        $data['question'] = $this->input->post('question', TRUE);
        $data['explanation'] = $this->input->post('explanation', TRUE);
        $data['hints'] = $this->input->post('hints', TRUE);
        $data['mark'] = $this->input->post('mark', TRUE);
        $data['qtype'] = $this->input->post('qtype', TRUE);
        //echo '<pre>';
        //print_r($_POST);
        //echo '<pre>';
        //exit();
        $this->sa_model->save_exam_question_bank_info($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_question_bank');
    }

//manage_exam_question_instruction        

    public function manage_exam_question_instruction() {
        $data = array();
        $data['all_question_instruction'] = $this->sa_model->select_all_question_instruction();   //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_exam_question_instruction', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_exam_question_instruction() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_exam_question_instruction_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_exam_question_instruction() {
        $data = array();
        $data['title'] = $this->input->post('title', TRUE);
        $data['content'] = $this->input->post('content', TRUE);
        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_exam_question_instruction($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_exam_question_instruction');
    }

    public function start_student_attendence() {
        echo "<h1>" . "I am inside Controller" . "</h1>";

        $data = array();

        $data['class_id'] = $this->input->post('class_id', TRUE);
        $data['section_id'] = $this->input->post('section_id', TRUE);


        echo "<pre>";
        print_r($data);

        echo "<br>";
        echo "Class id is   " . $data['class_id'] . "<br>";
        echo "Section id is " . $data['section_id'];
        exit();

        $zclass = $data['class_id'];
        $zsection = $data['section_id'];

        $data['attendence_class'] = $this->sa_model->select_attendence_class($zclass, $zsection);
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_student_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function manage_library_books() {
        $data = array();
        $data['all_books'] = $this->sa_model->select_all_books();                //both published and unpublished 
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_library_books_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_library_books() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_library_books_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_library_books() {
        $data = array();
        $data['book_name'] = $this->input->post('book_name', TRUE);
        $data['book_category'] = $this->input->post('book_category', TRUE);
        $data['book_author'] = $this->input->post('book_author', TRUE);
        $data['subject_code'] = $this->input->post('subject_code', TRUE);
        $data['book_price'] = $this->input->post('book_price', TRUE);
        $data['book_qty'] = $this->input->post('book_qty', TRUE);
        $data['book_rack'] = $this->input->post('book_rack', TRUE);



        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_library_books($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_library_books');
    }

//Super_admin/manage_books_category        
    public function manage_books_category() {
        $data = array();
        $data['all_books_category'] = $this->sa_model->select_all_books_category();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_books_category_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_books_category() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_books_category_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_books_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_description'] = $this->input->post('category_description', TRUE);
        $data['publication_status'] = $this->input->post('publication_status', TRUE);

        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_books_category($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_books_category');
    }

    public function manage_transport() {
        $data = array();
        $data['all_transport'] = $this->sa_model->select_all_transport();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_transport_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_transport() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_transport_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_transport() {
        $data = array();
        $data['transport_route_name'] = $this->input->post('transport_route_name', TRUE);
        $data['transport_no_of_vehicle'] = $this->input->post('transport_no_of_vehicle', TRUE);
        $data['transport_route_fare'] = $this->input->post('transport_route_fare', TRUE);
        $data['transport_note'] = $this->input->post('transport_note', TRUE);

        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_transport($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_transport');
    }

    public function manage_transport_member() {
        $data = array();
        $data['all_transport_member'] = $this->sa_model->select_all_transport_member();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_transport_member_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_transport_member() {
        $data = array();
        $data['all_student'] = $this->sa_model->select_all_student();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_transport_member_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_transport_member() {
        $data = array();
        $data['name'] = $this->input->post('name', TRUE);
        $data['roll'] = $this->input->post('roll', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['photo'] = "photo"; //$this->input->post('photo',TRUE);

        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_transport_member($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_transport_member');
    }

    public function manage_hostel() {
        $data = array();
        $data['all_hostel'] = $this->sa_model->select_all_hostel();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_hostel_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_hostel() {
        $data = array();
        //$data['all_student']      = $this->sa_model->select_all_student();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_hostel_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_hostel() {
        $data = array();
        $data['hostel_name'] = $this->input->post('hostel_name', TRUE);
        $data['hostel_type'] = $this->input->post('hostel_type', TRUE);
        $data['hostel_address'] = $this->input->post('hostel_address', TRUE);
        $data['hostel_note'] = $this->input->post('hostel_note', TRUE);

        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_hostel($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_hostel');
    }

    public function manage_visitor() {
        $data = array();
        $data['all_visitor'] = $this->sa_model->select_all_visitor();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_visitor_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_visitor() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_visitor_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_visitor() {
        $data = array();
        $data['visitor_name'] = $this->input->post('visitor_name', TRUE);
        $data['visitor_email'] = $this->input->post('visitor_email', TRUE);
        $data['visitor_phone'] = $this->input->post('visitor_phone', TRUE);
        $data['visitor_company'] = $this->input->post('visitor_company', TRUE);
        $data['visitor_tomeet'] = $this->input->post('visitor_tomeet', TRUE);
        $data['visitor_tomeet_usertype'] = $this->input->post('visitor_tomeet_usertype', TRUE);
        $data['visitor_checkin'] = $this->input->post('visitor_checkin', TRUE);
        $data['visitor_checkout'] = $this->input->post('visitor_checkout', TRUE);
        $data['visitor_status'] = $this->input->post('visitor_status', TRUE);
        //$data['visitor_action']          = $this->input->post('visitor_action',TRUE);
        /* echo '<pre>';
          print_r($_POST);
          echo '<pre>';
          exit(); */
        $this->sa_model->save_visitor($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_visitor');
    }

//manage_staff
    public function manage_staff() {
        $data = array();
        $data['all_staff'] = $this->sa_model->select_all_staff();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/manage_staff_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_staff() {
        $data = array();
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_staff_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_staff() {
        $data = array();
        $data['staff_name'] = $this->input->post('staff_name', TRUE);
        $data['staff_phone'] = $this->input->post('staff_phone', TRUE);
        $data['staff_email'] = $this->input->post('staff_email', TRUE);
        $data['staff_address'] = $this->input->post('staff_address', TRUE);
        $data['staff_pan'] = $this->input->post('staff_pan', TRUE);
        $data['staff_photo'] = $this->input->post('staff_photo', TRUE);
        $data['staff_aadhar'] = $this->input->post('staff_aadhar', TRUE);
        $data['staff_designation'] = $this->input->post('staff_designation', TRUE);
        $data['staff_salary'] = $this->input->post('staff_salary', TRUE);
        $data['staff_doj'] = $this->input->post('staff_doj', TRUE);
        $data['staff_photo'] = $this->input->post('staff_doj', TRUE);

        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
        //exit();







        /*
         * =====================Start Image upload
         */
        $config['upload_path'] = 'image/staff_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '100';  // kilobyte
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        //load liabrary then initialize
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('staff_photo')) {
            //$error = array('error' => $this->upload->display_errors());
            $error = $this->upload->display_errors();
            echo $error;
            //exit();
            //$this->load->view('upload_form', $error);
        } else {
            //$fdata = array('upload_data' => $this->upload->data());
            $fdata = $this->upload->data();
            $data['staff_photo'] = $config['upload_path'] . $fdata['file_name'];


//==============Display uploaded Image                        
//if(isset($_POST['Submit']))
//{ 
            $filepath = "image/staff_image/" . $_FILES["file"]["name"];
            echo $filepath;

//if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
//{
//echo "<img src=".$filepath." height=200 width=300 />";
//} 
//else 
//{
//echo "Error !!";
//}
//} 
//==============                        
            //echo '<pre>';
            //print_r($fdata);
            //exit();
            //$this->load->view('upload_success', $data);
        }


        /*
         * =====================End Image upload
         */




//         echo $data['student_name']."<br>";
//         echo $data['student_gurdian']."<br>";
//         echo $data['student_dob']."<br>";        
//         echo $data['student_gender']."<br>";                 
//         echo $data['student_blood_group']."<br>";        
//         echo $data['student_relegion']."<br>";        
//         echo $data['student_email']."<br>";                 
//         echo $data['student_phone']."<br>";        
//         echo $data['student_address']."<br>";        
//         echo $data['student_country']."<br>";                 
//         echo $data['student_state']."<br>";        
//         echo $data['student_city']."<br>";        
//         echo $data['student_class']."<br>";                 
//         echo $data['student_section']."<br>";        
//         echo $data['student_group']."<br>";        
//         echo $data['student_opt_subject']."<br>";                 
//         echo $data['student_register_no']."<br>";        
//         echo $data['student_roll_no']."<br>";        
//         echo $data['student_photo']."<br>";                 
//         echo $data['student_extra_curr']."<br>";        
//         echo $data['student_remark']."<br>";        
//         echo $data['student_username']."<br>";                 
//         echo $data['student_password']."<br>";     
//         exit();
        //############################################
        //instead of loading in each function better it to define in constructon so that all function get it
        ////$this->load->model('Super_Admin_Model','sa_model');  // name_of_model, object_of_that_model
        //############################################
        //$this->sa_model->save_category_info($data);
        //$this->sa_model->save_student_info($data);
        //$sdata = array();
        //$sdata['message'] = 'Data Inserted Successfully into Database !!!!'; 
        //$this->session->set_userdata($sdata);
        //redirect('super_admin/add_student');
        //redirect('super_admin/manage_student');



        $this->sa_model->save_staff($data);
        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_staff');
    }

    public function send_contact_us() {
        $data = array();
        $data['from_name'] = $this->input->post('from_name', TRUE);
        $data['from_email'] = $this->input->post('from_email', TRUE);
        $data['from_phone'] = $this->input->post('from_phone', TRUE);
        $data['from_web'] = $this->input->post('from_web', TRUE);
        $data['from_message'] = $this->input->post('from_message', TRUE);

        /* echo "<pre>";
          echo $data['from_name']   . "<br>";
          echo $data['from_email']  . "<br>";
          echo $data['from_phone']  . "<br>";
          echo $data['from_web']    . "<br>";
          echo $data['from_message']. "<br>"; */

        $this->sa_model->save_contact_us_email($data);

        $sdata = array();
        $sdata['message'] = 'Data Inserted Successfully into Database !!!!';
        $this->session->set_userdata($sdata);
        //redirect('super_admin/add_student');
        //=================================//
        //BEFORE REDIRECTING SEND THE EMAIL//
        //=================================//
        //$var_to=$data['arjunkumaryadav@sitsolution.net'];  //company's email
        $var_to = $data['apysan@rediffmail.com'];  //company's email

        $var_sender_name = $data['from_name'];
        $var_sender_email = $data['from_email'];
        $var_sender_phone = $data['from_phone'];
        $var_sender_web = $data['from_web'];
        $var_message = $data['from_message'];
        $var_subject = $data['CONTACT US QUERY'];

        //echo $var_to;
        //echo "<br>";
        //echo $var_cc_to;
        //echo "<br>";
        //echo $var_bcc_to;
        //==========================================================
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'apysan@gmail.com',
            'smtp_pass' => 'bharatindia4209211poiuy',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('apysan@gmail.com', 'School-AdminM');
        $this->email->to('apysan@gmail.com');
        //$this->email->cc($var_cc_to);
        //$this->email->bcc($var_bcc_to);
        $this->email->subject('my-qqqqqqqqqsubject');


        //width=642px
        //border 10px
        //border-radious=5px;
        //http://www.angelpackers.com/images/slide4.png
        //http://gandrlaw.com/about-2/personal-injury
        //    http://gandrlaw.com/wp-content/uploads/2014/05/school-campus.jpg

        $themessage = '<html><body style="width: 642px;background-color:#ffcc80;border:10px solid #000;border-radius:5px;">';
        $themessage .= '<img src="http://gandrlaw.com/wp-content/uploads/2014/05/school-campus.jpg" alt="no image">';
        $themessage .= '<h2 style="color:#000;text-align: center;">Hello Aapka School,</h2>';
        $themessage .= '<p style="color:#080;font-size:18px;margin-left:10px;text-align:center;">I have some urgent business to discuss with Contact me now.</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Name is         :' . '<strong>' . "$var_sender_name" . '</strong>' . '</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Contact No. is  :' . '<strong>' . "$var_sender_phone" . '</strong>' . '</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Email Address is:' . '<strong>' . "$var_sender_email" . '</strong>' . '</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p style="border:1px solid #fff;margin-left:20px;margin-right:20px;">' . "$message" . '</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p style="color:brown;font-size:32px;font-weight:bold;font-family:Script;"><u>Aapka School.</u></p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">CORPORATE OFFICE - xxxxxxxxxxxxxxxxxx,</p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">KOLKATA – 700 001.,</p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">CONTACT NO.: xxx xxxx xxxx, xxx xxxx xxxx.</p>';

        $themessage .= '</body></html>';










        $this->email->message($themessage);
        $this->email->set_newline("\r\n");
        if ($this->email->send()) {
            echo "<h1>your email send successfully, Cong.</h1>";
            $sdata = array();
            $sdata['message'] = 'Data Inserted into Database !!!! and Email Send Successfully!';
            $this->session->set_userdata($sdata);
        } else {
            show_error($this->email->print_debugger());
        }


        redirect('welcome/contact');
















        //redirect('welcome/contact');
    }

    public function sjenterprise_sendmail() {

        //echo "I am in the sendmail function of welcome";
        //exit();        ----------------
        $name = $this->input->post('name', TRUE);
        $email = $this->input->post('email', TRUE);
        $phone = $this->input->post('phone', TRUE);
        $message = $this->input->post('message', TRUE);

        //echo $name;
        //echo $email;			
        //echo $message;
        //exit();
        $config = array();
        $config['useragent'] = "CodeIgniter";
        $config['mailpath'] = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "localhost";
        $config['smtp_port'] = "25";
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

        //$this->load->library('email'); // initially it was like this i.e, config was not there
        $this->load->library('email', $config);

        $this->email->initialize($config);

        //$this->email->from('apysan@gmail.com', 'admin');
        $this->email->from('noreply@sjenterprise.org.in', 'admin');
        //noreply@sjenterprise.org.in
        $this->email->to('anindyabanik5@gmail.com');
        $this->email->cc('sahid.immam725@gmail.com');
        //$this->email->cc('apysan@rediffmail.com'); 
        $this->email->bcc('apysan@gmail.com');
        //$this->email->bcc('apysan@rediffmail.com'); 
        //$this->email->cc('apysan@rediffmail.com'); 	
        //$this->email->bcc('noreply@sjenterprise_org_in'); 	
//1. sahid.immam725@gmail.com
//2. anindyabanik5@gmail.com
//3. garani1956@gmail.com
        //$this->email->bcc($this->input->post('email')); 
        //    $this->email->subject('Registration Verification: Continuous Imapression');
        //    $msg = "Thanks for signing up!
        //Your account has been created, 
        //you can login with your credentials after you have activated your account by pressing the url below.
        //Please click this link to activate your account";
        //$this->email->message($msg);   
        //$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));




        $this->email->subject('This is Tesging ======= Email Test');
        ////$this->email->message('Thank you very much for your Enquiry, We shall contact you ASAP.');
        ////////////////////
        //$path = $this->config->item('server_root');
        //echo $path; die();
        //$file = $path . 'www.abcd.org.in/attachments/yourinfo.txt';
        //$this->email->attach($file);
        //$this->mail->attach('$file');
        ////////////////////
        //////**************$themessage="Thank you very";
// Compose a simple HTML email message
//http://www.tutorialrepublic.com/php-tutorial/php-send-email.php
//essage = '<html><body>';
//$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
//$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
//$message .= '</body></html>';			
        //background-color:#ff9900;
        //style="color:brown;font-size:32px;font-weight:bold;font-family:Script;"
        // Compose a simple HTML email message
        //$themessage = '<html><body style="background-color:yellow;border:2px solid #000;">';
        $themessage = '<html><body style="background-color:#ffcc80;border:5px solid #000;border-radius:20px;">';
        $themessage .= '<img src="http://www.angelpackers.com/images/slide4.png" alt="no image">';
        $themessage .= '<h2 style="color:#000;text-align: center;">Hello S.J Enterprise,</h2>';
        $themessage .= '<p style="color:#080;font-size:18px;margin-left:10px;">I have some urgent business to discuss with Contact me now.</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Name is         :' . '<strong>' . $name . '</strong>' . '</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Contact No. is  :' . '<strong>' . $phone . '</strong>' . '</p>';
        $themessage .= '<p>' . '&nbsp;&nbsp;&nbsp;&nbsp;' . 'My Email Address is:' . '<strong>' . $email . '</strong>' . '</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p style="border:5px solid #fff;margin-left:20px;margin-right:20px;">' . $message . '</p>';
        $themessage .= '<p>&nbsp;</p>';
        $themessage .= '<p style="color:brown;font-size:32px;font-weight:bold;font-family:Script;"><u>S. J Enterprise.</u></p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">CORPORATE OFFICE -	DIAMOND HERITAGE,</p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">KOLKATA – 700 001.,</p>';
        $themessage .= '<p style=" line-height: 40%;color:brown;font-size:10px;font-weight:bold;font-family:Georgia;">CONTACT NO.: 033 6623 2034, 033 6624 2035.</p>';

        $themessage .= '</body></html>';
        //$themessage = $message;

        $message = $this->email->message($themessage);
        if ($this->email->send($message)) {
            //echo "<h1>send email successfully</h1>"; 
            redirect('welcome/index');
        } else {
            show_error($this->email->print_debugger());
            //echo "<h1>Your emain not send due to a techincal problem, contact admin.......</h1>"; 
        }
    }

    public function student_attendence() {
        echo "<h1>" . "I am inside Controller" . "</h1>";

        $data = array();

        $data['class_id'] = $this->input->post('class_id', TRUE);
        $data['section_id'] = $this->input->post('section_id', TRUE);


        echo "<pre>";
        print_r($data);
        echo "<br>";
        echo "Class id is   " . $data['class_id'] . "<br>";
        echo "Section id is " . $data['section_id'];
        exit();
        $zclass = $data['class_id'];
        $zsection = $data['section_id'];
        $data = array();
        $data['attendence_class'] = $this->sa_model->select_attendence_class($zclass, $zsection);
        $data['ADMINMAINCONTENT'] = $this->load->view('admin/add_student_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
