<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Super_Admin_Model extends CI_Model {

    public function save_category_info($data) {
        $this->db->INSERT('tbl_category', $data);
    }

    public function save_student_info($data) {
        $this->db->INSERT('tbl_student', $data);
    }

    public function save_parent_info($data) {
        $this->db->INSERT('tbl_parent', $data);
    }

    public function save_teacher_info($data) {
        $this->db->INSERT('tbl_teacher', $data);
    }

    public function save_user_info($data) {
        $this->db->INSERT('tbl_user', $data);
    }

    public function save_class_info($data) {
        $this->db->INSERT('tbl_class', $data);
    }

    public function save_subject_info($data) {
        $this->db->INSERT('tbl_subject', $data);
    }

    public function save_section_info($data) {
        $this->db->INSERT('tbl_section', $data);
    }

    public function save_syllabus_info($data) {
        $this->db->INSERT(' tbl_syllabus', $data);
    }

    public function save_assignment_info($data) {
        $this->db->INSERT(' tbl_assignment', $data);
    }

    public function save_routine_info($data) {
        $this->db->INSERT(' tbl_routine', $data);
    }

    public function save_exam_info($data) {
        $this->db->INSERT(' tbl_exam', $data);
    }

    public function save_exam_schedule_info($data) {
        $this->db->INSERT('tbl_exam_schedule', $data);
    }

    public function save_email_info($data) {
        $this->db->INSERT('tbl_email', $data);
    }
    
    public function save_sms_info($data) {
        $this->db->INSERT('tbl_sms', $data);
    }
    
    public function save_exam_question_group_info($data) {
        $this->db->INSERT('tbl_question_group', $data);
    }
    
    public function save_exam_question_level_info($data) {
        $this->db->INSERT('tbl_question_level', $data);
    }
    
    public function save_exam_question_bank_info($data) {
        $this->db->INSERT('tbl_question_bank', $data);
    }
    
    public function save_exam_question_instruction($data) {
        $this->db->INSERT('tbl_question_instruction', $data);
    }
    
    public function save_library_books($data) {
        $this->db->INSERT('tbl_book', $data);
    }

    public function save_books_category($data) {
        $this->db->INSERT('tbl_book_category', $data);
    }

    public function save_transport($data) {
        $this->db->INSERT(' tbl_transport', $data);
    }

    public function save_transport_member($data) {
        $this->db->INSERT('tbl_trans_memb', $data);
    }

    public function save_hostel($data) {
        $this->db->INSERT('tbl_hostel', $data);
    }

    public function save_visitor($data) {
        $this->db->INSERT('tbl_visitor', $data);
    }

    public function save_staff($data) {
        $this->db->INSERT('tbl_staff', $data);
    }


public function update_suspend_student_by_id($student_id)
{
    $this->db->set('student_status',0);
    $this->db->WHERE('student_id', $student_id);
    $this->db->UPDATE('tbl_student');
}        

public function update_active_student_by_id($student_id)
{
    $this->db->set('student_status',1);
    $this->db->WHERE('student_id', $student_id);
    $this->db->UPDATE('tbl_student');
}        



public function update_suspend_parent_by_id($parent_id)
{
    $this->db->set('parent_status',0);
    $this->db->WHERE('parent_id', $parent_id);
    $this->db->UPDATE('tbl_parent');
}        

public function update_active_parent_by_id($parent_id)
{
    $this->db->set('parent_status',1);
    $this->db->WHERE('parent_id', $parent_id);
    $this->db->UPDATE('tbl_parent');
}        


public function update_active_teacher_by_id($teacher_id)
{
    $this->db->set('teacher_status',1);
    $this->db->WHERE('teacher_id', $teacher_id);
    $this->db->UPDATE('tbl_teacher');
}        

//update_suspend_teacher_by_id
public function update_suspend_teacher_by_id($teacher_id)
{
    $this->db->set('teacher_status',0);
    $this->db->WHERE('teacher_id', $teacher_id);
    $this->db->UPDATE('tbl_teacher');
}        







public function update_suspend_user_by_id($user_id)
{
    $this->db->set('user_status',0);
    $this->db->WHERE('user_id', $user_id);
    $this->db->UPDATE('tbl_user');
}        

public function update_active_user_by_id($user_id)
{
    $this->db->set('user_status',1);
    $this->db->WHERE('user_id', $user_id);
    $this->db->UPDATE('tbl_user');
}        







public function update_suspend_staff_by_id($staff_id)
{
    $this->db->set('staff_status',0);
    $this->db->WHERE('staff_id', $staff_id);
    $this->db->UPDATE('tbl_staff');
}        

public function update_active_staff_by_id($staff_id)
{
    $this->db->set('staff_status',1);
    $this->db->WHERE('staff_id', $staff_id);
    $this->db->UPDATE('tbl_staff');
}        







public function update_suspend_class_by_id($class_id)
{
    $this->db->set('class_status',0);
    $this->db->WHERE('class_id', $class_id);
    $this->db->UPDATE('tbl_class');
}        

public function update_active_class_by_id($class_id)
{
    $this->db->set('class_status',1);
    $this->db->WHERE('class_id', $class_id);
    $this->db->UPDATE('tbl_class');
}        










public function update_suspend_subject_by_id($subject_id)
{
    $this->db->set('subject_status',0);
    $this->db->WHERE('subject_id', $subject_id);
    $this->db->UPDATE('tbl_subject');
}        

public function update_active_subject_by_id($subject_id)
{
    $this->db->set('subject_status',1);
    $this->db->WHERE('subject_id', $subject_id);
    $this->db->UPDATE('tbl_subject');
}        

















































public function update_suspend_section_by_id($section_id)
{
    $this->db->set('section_status',0);
    $this->db->WHERE('section_id', $section_id);
    $this->db->UPDATE('tbl_section');
}        

public function update_active_section_by_id($section_id)
{
    $this->db->set('section_status',1);
    $this->db->WHERE('section_id', $section_id);
    $this->db->UPDATE('tbl_section');
}        































public function select_student_info_by_id($student_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_student');
    $this->db->WHERE('student_id', $student_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}


public function select_teacher_info_by_id($teacher_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_teacher');
    $this->db->WHERE('teacher_id', $teacher_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}









public function select_user_info_by_id($user_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_user');
    $this->db->WHERE('user_id', $user_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}








public function select_staff_info_by_id($staff_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_staff');
    $this->db->WHERE('staff_id', $staff_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}









public function select_class_info_by_id($class_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_class');
    $this->db->WHERE('class_id', $class_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}











public function select_subject_info_by_id($subject_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_subject');
    $this->db->WHERE('subject_id', $subject_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}


























public function select_section_info_by_id($section_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_section');
    $this->db->WHERE('section_id', $section_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}

























//delete_student_info
public function delete_student_info($student_id)
{
    $this->db->WHERE('student_id', $student_id);
    $this->db->DELETE('tbl_student');
}


public function delete_parent_info($parent_id)
{
    $this->db->WHERE('parent_id', $parent_id);
    $this->db->DELETE('tbl_parent');
}


public function update_student_info($data, $student_id)
{
    $this->db->WHERE('student_id', $student_id);
    $this->db->UPDATE('tbl_student',$data);        
}


public function update_parent_info($data, $parent_id)
{
    $this->db->WHERE('parent_id', $parent_id);
    $this->db->UPDATE('tbl_parent',$data);        
}



//update_teacher_info
public function update_teacher_info($data, $teacher_id)
{
    $this->db->WHERE('teacher_id', $teacher_id);
    $this->db->UPDATE('tbl_teacher',$data);        
}

public function update_user_info($data, $user_id)
{
    $this->db->WHERE('user_id', $user_id);
    $this->db->UPDATE('tbl_user',$data);        
}







public function update_staff_info($data, $staff_id)
{
    $this->db->WHERE('staff_id', $staff_id);
    $this->db->UPDATE('tbl_staff',$data);        
}








public function update_class_info($data, $class_id)
{
    $this->db->WHERE('class_id', $class_id);
    $this->db->UPDATE('tbl_class',$data);        
}







public function update_subject_info($data, $subject_id)
{
    $this->db->WHERE('subject_id', $subject_id);
    $this->db->UPDATE('tbl_subject',$data);        
}















    public function count_students()
    {
    $this->db->from('tbl_student');
    $query = $this->db->get();
    //$rowcount = $query->num_rows();
    $result = $query->num_rows();
    //echo $result;
    //exit();
    return $result;
    }
//  or       $table_row_count = $this->db->count_all('table_name');






    
    
    
    
public function select_parent_info_by_id($parent_id)
{
    $this->db->select('*');
    $this->db->FROM('tbl_parent');
    $this->db->WHERE('parent_id', $parent_id);
    $query_result = $this->db->get();
    $result = $query_result->row();
    return $result;        
}
    








    
    public function select_all_student() {
        $this->db->select('*');
        $this->db->FROM(' tbl_student');
        $this->db->order_by("student_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_parent() {
        $this->db->select('*');
        $this->db->FROM('  tbl_parent');
        $this->db->order_by("parent_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        /*echo "<pre>";
        print_r($result);
        exit();*/
        return $result;
    }

    public function select_all_teacher() {
        $this->db->select('*');
        $this->db->FROM('tbl_teacher');
        $this->db->order_by("teacher_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_user() {
        $this->db->select('*');
        $this->db->FROM('tbl_user');
        $this->db->order_by("user_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_class() {
        $this->db->select('*');
        $this->db->FROM('tbl_class');
        $this->db->order_by("class_numeric", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        //echo "<pre>";
        //print_r($result);
        //exit();
        return $result;
    }

    public function select_all_subject() {
        $this->db->select('*');
        $this->db->FROM('tbl_subject');
        $this->db->order_by("subject_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    
    
    
    
//    public function select_all_section() {
//        $this->db->select('*');
//        $this->db->FROM('tbl_section');
//        $this->db->order_by("section_id", "desc");
//        $query_result = $this->db->get();
//        $result = $query_result->result();
//        return $result;
//    }
    
    
    public function select_all_section() {
        $this->db->select('*');
        $this->db->FROM('tbl_section');
        $this->db->join('tbl_teacher', 'tbl_teacher.teacher_id = tbl_section.teacher_id');
        $this->db->order_by("section_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        //echo "I am here";
        //echo "<pre>";
        //print_r($result);
        //exit();
        return $result;
    }
    
    
  public function select_attendence_class($zclass, $zsection)
{
    $this->db->select('*');
    $this->db->FROM('tbl_student');
    $this->db->WHERE('class_id', $zclass);
    $this->db->WHERE('section_id', $zsection);
    $this->db->order_by("class_id", "desc");
    $query_result = $this->db->get();
    $result = $query_result->result();
    //echo "<pre>";
    //print_r($result);
    //exit();
    return $result;        
}
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function select_all_syllabus() {
        $this->db->select('*');
        $this->db->FROM('tbl_syllabus');
        $this->db->order_by("syllabus_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_assignment() {
        $this->db->select('*');
        $this->db->FROM('tbl_assignment');
        $this->db->order_by("assignment_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_routine() {
        $this->db->select('*');
        $this->db->FROM('tbl_routine');
        $this->db->order_by("routine_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_exam() {
        $this->db->select('*');
        $this->db->FROM('tbl_exam');
        $this->db->order_by("exam_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_exam_schedule() {
        $this->db->select('*');
        $this->db->FROM('tbl_exam_schedule');
        $this->db->order_by("exam_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_exam_grade() {
        $this->db->select('*');
        $this->db->FROM('tbl_exam_grade');
        $this->db->order_by("exam_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_email() {
        $this->db->select('*');
        $this->db->FROM('tbl_email');
        $this->db->order_by("email_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_sms() {
        $this->db->select('*');
        $this->db->FROM('tbl_sms');
        $this->db->order_by("sms_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_question_group() {
        $this->db->select('*');
        $this->db->FROM('tbl_question_group');
        $this->db->order_by("q_group_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_question_level() {
        $this->db->select('*');
        $this->db->FROM('tbl_question_level');
        $this->db->order_by("q_level_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_question_bank() {
        $this->db->select('*');
        $this->db->FROM('tbl_question_instruction');
        $this->db->order_by("q_instruct_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_question_instruction() {
        $this->db->select('*');
        $this->db->FROM('tbl_question_instruction');
        $this->db->order_by("q_instruct_id", "asc"); // should not be desc as all instruction should come one by one
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

public function smssend($mobile,$message)
{
$request='username=username &pass=123456&senderid=Usersenderid              &dest_mobileno='.$mobile.'&message='.$message.'&response=Y';

$ch = curl_init('www.smsjust.com/blank/sms/user/urlsms.php');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $request);

$resuponce=curl_exec($ch);

echo $resuponce;
exit();

curl_close($ch);

return $resuponce;

}    
    
    
    
    
    










    public function select_all_books() {
        $this->db->select('*');
        $this->db->FROM('tbl_book');
        $this->db->order_by("book_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_books_category() {
        $this->db->select('*');
        $this->db->FROM('tbl_book_category');
        $this->db->order_by("category_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    

    public function select_all_transport() {
        $this->db->select('*');
        $this->db->FROM('tbl_transport');
        $this->db->order_by("transport_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_transport_member() {
        $this->db->select('*');
        $this->db->FROM(' tbl_trans_memb');
        $this->db->order_by("trans_memb_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_hostel() {
        $this->db->select('*');
        $this->db->FROM('tbl_hostel');
        $this->db->order_by("hostel_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_visitor() {
        $this->db->select('*');
        $this->db->FROM('tbl_visitor');
        $this->db->order_by("visitor_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
//select_all_staff    
    public function select_all_staff() {
        $this->db->select('*');
        $this->db->FROM('tbl_staff');
        $this->db->order_by("staff_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    
    public function save_contact_us_email($data){
        $this->db->INSERT('tbl_email', $data);
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
