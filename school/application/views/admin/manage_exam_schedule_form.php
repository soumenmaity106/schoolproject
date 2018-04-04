<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

<style>
    .dt-button buttons-copy{
        color:red; 
    }    
</style>


<script type="text/javascript">
$(document).ready(function() {
    //alert("working........");
//    $('#student-table').DataTable( {
//        dom: 'Bfrtip',
//        buttons: [
//            'copyHtml5',
//            'excelHtml5',
//            'csvHtml5',
//            'pdfHtml5'
//        ]
//    } );
} );
</script>

<!--<script>
    $('#student-table').mouseover(function){
        //$("table").css("background-color", "yellow");
        alert("working........");
    });
</script>-->



<hr>
<div>
<center><h3>Exam Schedule Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_exam_schedule">
<button type="button" class="btn btn-info">Add New</button>
</a>
</div>

<hr style="border:0.25px solid #3C8DBC;">

<!--Total Active Student 10  Total Inactive Student 1
<hr style="border:1px solid #3C8DBC;">-->

<table id="management-table" class="table table-striped table-bordered table-hover table-responsive">
<!--<table id="student-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="15%">Exam Name</th>
        <th width="10%">Class</th>
        <th width="10%">Section</th>
        <th width="10%">Subject</th>
        <th width="10%">Date</th>
        <th width="10%">Time From</th>
        <th width="10%">Time To</th>
        <th width="10%">Room</th>
        <th width="205%">Action</th>        
        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_exam_schedule as $v_all_student) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_student->exam_id; ?></td>
        <td id="td2"><?php echo $v_all_student->exam_name; ?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_class, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_section, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_subject, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_date, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_time_from, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_time_to, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->exam_room, 0, 50);?></td>
        
        
        <td id="td5">
            <?php
            if ($v_all_student->publication_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php// echo base_url(); ?>super_Admin/unpublished_student/<?php echo $v_all_student->student_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php// echo base_url(); ?>super_Admin/published_student/<?php echo $v_all_student->student_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>
            <a class="btn btn-xs btn-default" href="<?php// echo base_url(); ?>super_Admin/edit_student/<?php echo $v_all_student->student_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php// echo base_url(); ?>super_Admin/delete_student/<?php echo $v_all_student->student_id; ?>" title="Delete" onclick="return checkDelete();">
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
























