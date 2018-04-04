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
<center><h3>Staff Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_staff">
<button type="button" class="btn btn-info">Add New</button>
</a>
</div>

<hr style="border:0.25px solid #3C8DBC;">

<!--Total Active Student 10  Total Inactive Student 1
<hr style="border:1px solid #3C8DBC;">-->

<table id="management-table" class="table table-striped table-bordered table-hover table-responsive">
<!--<table id="staff-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="15%">Staff Name</th>
        <th width="15%">Staff Photo</th>
        <th width="15%">Staff Phone</th>
        <th width="15%">Staff Email</th>
        <th width="15%">Staff Status</th>
        <th width="35%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_staff as $v_all_staff) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td><?php echo $v_all_staff->staff_id; ?></td>
        
        <td><?php echo $v_all_staff->staff_name; ?></td>
        
        <td class="center">
            <a class="wrap_link" href="#"> 
                <span class="image">
                    <img style="border-radius:20%; border:2px solid #3C8DBC;" src="<?php echo base_url().$v_all_staff->staff_photo;?>" alt="Student_image" height="30" width="30" />
                </span> 
            </a>
        </td>
        
        <td><?php echo $v_all_staff->staff_phone; ?></td>
        
        <td><?php echo $v_all_staff->staff_email; ?></td>
        
<!--        <td><?php echo $v_all_staff->staff_status; ?></td>-->
        
        <td>
            <?php
            if ($v_all_staff->staff_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_staff->staff_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_staff/<?php echo $v_all_staff->staff_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_staff/<?php echo $v_all_staff->staff_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_staff/<?php echo $v_all_staff->staff_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_staff/<?php echo $v_all_staff->staff_id; ?>" title="Delete" onclick="return checkDelete();">
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
























