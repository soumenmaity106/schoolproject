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
<center><h3>Teacher Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_teacher">
<button type="button" class="btn btn-info">Add New</button>
</a>

<hr style="border:0.25px solid #3C8DBC;">

<table id="teacher-management-table" class="table table-striped table-bordered table-hover table-responsive">
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="15%">Teacher Photo</th>
        <th width="20%">Teacher Name</th>
        <th width="20%">Email</th>
        <th width="20%">Status</th>
        <th width="20%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_teacher as $v_all_teacher) {
        ?>        
        <tr>
    <div>             
        <td id="td1"><?php echo $v_all_teacher->teacher_id; ?></td>
        
        <td class="center">
            <a class="wrap_link" href="product.html"> 
                <span class="image">
                    <img style="border-radius:20%; border:2px solid #3C8DBC;" src="<?php echo base_url().$v_all_teacher->teacher_photo;?>" alt="Teacher_image" height="30" width="30" />
                </span> 
            </a>
        </td>
        
        <td><?php echo substr($v_all_teacher->teacher_name, 0, 50);?></td>
       
       <td><?php echo $v_all_teacher->teacher_email;?></td>
       
<!--       <td><?php echo $v_all_teacher->teacher_status;?></td>-->
       
        <td>
            <?php
            if ($v_all_teacher->teacher_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_teacher->teacher_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_teacher/<?php echo $v_all_teacher->teacher_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_teacher/<?php echo $v_all_teacher->teacher_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_teacher/<?php echo $v_all_teacher->teacher_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_teacher/<?php echo $v_all_teacher->teacher_id; ?>" title="Delete" onclick="return checkDelete();">
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





<script>
    $('#teacher-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 1, "desc" ]]
    } );
    
    
    
    
 $('#arrow1').click(function(){
    //$('li').click(function(){    
        //alert("dddddddddddddddddddddddddddddddddddddddddd");
    var url = "<?= base_url();?>super_Admin/suspended_parent";
        //var cat = 'A';
    //$.post( url)
    $.post( url, { parent_id : <?php echo $v_all_parent->parent_id; ?> })
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });    
</script>


















