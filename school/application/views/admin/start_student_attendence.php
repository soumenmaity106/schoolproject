<style>
    .dt-button buttons-copy{
        color:red; 
    }    
</style>
    
<!--Attendance Details
Class : One
Section : A
Day : Thursday
Date : 29th March 2018-->

<hr>
<div>
    <center><h3 id="zqq">Student Attendence222</h3></center>
<form class="form-horizontal" action="<?php echo base_url();?>super_admin/start_student_attendence" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-4">
<!--            <div class="box-footer">
                   <button disabled="disabled" type="submit" class="btn btn-warning">Start Attendence</button>
            </div>-->
                    <div class="box-footer">
                        <a href="<?php echo base_url();?>super_admin/start_student_attendence">
                        <button disabled="disabled" type="submit" class="btn btn-warning">Send & Save</button>
                        </a>
                    </div>        
        
        
    </div>
    
    <div class="form-group col-md-4"></div>
    
    <div class="form-group col-md-2">
        <select required name="class_id" id="class_id" class="form-control">
            <option>Select Class</option>                                
            <?php
            foreach($all_class as $v_class)
            {    
            ?>                                
            <option value="<?php echo $v_class->class_id;?>"><?php echo $v_class->class_name;?></option>
            <?php
            }
            ?>                                        
        </select>               
    </div>
    
    <div class="form-group col-md-2">
        <select required name="section_id" id="section_id" class="form-control">
            <option>Select Section</option>                                
            <?php
            foreach($all_section as $v_section)
            {    
            ?>                                
            <option value="<?php echo $v_section->section_id;?>"><?php echo $v_section->section_name;?></option>
            <?php
            }
            ?>                                        
        </select>               
    </div>
</form>    
</div>





<hr style="border:0.25px solid #3C8DBC;">

<table id="student-management-table" class="table table-striped table-bordered table-hover table-responsive">
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="10%">Photo</th>
        <th width="25%">Name</th>
        <th width="25%">reg-no</th>
        <th width="10%">Roll</th>
        <th width="20%">Email</th>
        <th width="15%">Status</th>
        <th width="15%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_student as $v_all_student) {
        ?>     
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_student->student_id; ?></td>

        <td class="center">
            <a class="wrap_link" href="#"> 
                <span class="image">
                    <img style="border-radius:20%; border:2px solid #3C8DBC;" 
                         src="<?php echo base_url() . $v_all_student->student_photo; ?>" 
                         alt="Student_image" 
                         height="30" 
                         width="30" />
                </span> 
            </a>
        </td>

        <td><?php echo "<strong>".$v_all_student->student_name."</strong>"; ?></td>
        <td><?php echo $v_all_student->student_register_no; ?></td>
        <td><?php echo $v_all_student->student_roll_no; ?></td>
        <td><?php echo $v_all_student->student_email; ?></td>

        <td>
            <?php
            if ($v_all_student->student_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_student->student_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_student/<?php echo $v_all_student->student_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_student/<?php echo $v_all_student->student_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_student/<?php echo $v_all_student->student_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_student/<?php echo $v_all_student->student_id; ?>" title="Delete" onclick="return checkDelete();">
                <span class="glyphicon glyphicon-remove">
                </span>
            </a>
        </td>

    </div>                      
    </tr>
    <?php
}
?>        
</tbody>

</table>







