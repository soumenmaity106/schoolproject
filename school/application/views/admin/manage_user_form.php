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
} );
</script>

<hr>
<center><h3>User Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_user">
<button type="button" class="btn btn-info">Add New</button>
</a>

<hr style="border:0.25px solid #3C8DBC;">

<!--Total Active Student 10  Total Inactive Student 1
<hr style="border:1px solid #3C8DBC;">-->

<table id="management-table" class="table table-striped table-bordered table-hover table-responsive">
<!--<table id="user-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="10%">User Photo</th>
        <th width="15%">User Name</th>
        <th width="20%">Email</th>
        <th width="20%">Role</th>
        <th width="10%">Status</th>
        <th width="20%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_user as $v_all_user) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_user->user_id; ?></td>
        
        <td class="center">
            <a class="wrap_link" href="product.html"> 
                <span class="image">
                    <img style="border-radius:20%; border:2px solid #3C8DBC;" src="<?php echo base_url().$v_all_user->user_photo;?>" alt="Student_image" height="30" width="30" />
                </span> 
            </a>
        </td>
        
        <td><?php echo $v_all_user->user_name;?></td>
       
        <td><?php echo $v_all_user->user_email;?></td>
       
        <td><?php echo $v_all_user->user_role_name;?></td>
       
<!--        <td><?php echo $v_all_user->user_status;?></td>-->
        
        <td>
            <?php
            if ($v_all_user->user_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_user->user_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_user/<?php echo $v_all_user->user_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_user/<?php echo $v_all_user->user_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_user/<?php echo $v_all_user->user_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_user/<?php echo $v_all_user->user_id; ?>" title="Delete" onclick="return checkDelete();">
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
























