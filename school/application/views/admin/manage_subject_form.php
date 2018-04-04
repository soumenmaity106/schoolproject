<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

<style>
    .dt-button buttons-copy{
        color:red; 
    }    
</style>


<hr>
<div>
<center><h3>Subject Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_subject">
<button type="button" class="btn btn-info">Add New</button>
</a>
</div>

<hr style="border:0.25px solid #3C8DBC;">

<!--Total Active Student 10  Total Inactive Student 1
<hr style="border:1px solid #3C8DBC;">-->

<table id="management-table" class="table table-striped table-bordered table-hover table-responsive">
<!--<table id="subject-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="15%">Subject</th>
        <th width="15%">Author</th>
        <th width="05%">Code</th>
        <th width="10%">Teacher</th>
        <th width="10%">Pass Mark</th>
        <th width="10%">Final Mark</th>
        <th width="10%">Type</th>
        <th width="10%">Status</th>
        <th width="15%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_subject as $v_all_subject) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td><?php echo $v_all_subject->subject_name; ?></td>
        <td><?php echo $v_all_subject->subject_author; ?></td>
        <td><?php echo $v_all_subject->subject_code;?></td>
        <td><?php echo $v_all_subject->teacher_name;?></td>
        <td><?php echo $v_all_subject->pass_mark;?></td>
        <td><?php echo $v_all_subject->final_mark;?></td>
        <td><?php echo $v_all_subject->subject_type;?></td>
       
        <td>
            <?php
            if ($v_all_subject->subject_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_subject->subject_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_subject/<?php echo $v_all_subject->subject_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_subject/<?php echo $v_all_subject->subject_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_subject/<?php echo $v_all_subject->subject_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_subject/<?php echo $v_all_subject->subject_id; ?>" title="Delete" onclick="return checkDelete();">
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
























