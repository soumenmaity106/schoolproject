<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<!--<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>-->
<!--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>-->

<style>
    .dt-button buttons-copy{
        color:red; 
    }    
</style>


<script type="text/javascript">
    $(document).ready(function () {
    });
</script>

<hr>
<div>
    <center><h3>Parent Management</h3></center>
    <a style="margin-left:10px;" href="<?php echo base_url() ?>Super_admin/add_parent">
        <button type="button" class="btn btn-info">Add New</button>
    </a>
</div>

<hr style="border:0.25px solid #3C8DBC;">

<table id="parent-management-table" class="table table-striped table-bordered table-hover table-responsive">
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="10%">Photo</th>
        <th width="25%">Name</th>
        <th width="20%">Email</th>
        <th width="15%">Status</th>
        <th width="25%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_parent as $v_all_parent) {
        ?>     
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_parent->parent_id; ?></td>

        <td class="center">
            <a class="wrap_link" href="#"> 
                <span class="image">
                    <img style="border-radius:20%; border:2px solid #3C8DBC;" 
                         src="<?php echo base_url() . $v_all_parent->parent_photo; ?>" 
                         alt="parent_image" 
                         height="30" 
                         width="30" />
                </span> 
            </a>
        </td>

        <td><?php echo $v_all_parent->parent_name; ?></td>
        <td><?php echo $v_all_parent->parent_email; ?></td>

        <td>
            <?php
            if ($v_all_student->parent_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_parent->parent_status == 1) {
                ?>    
            <a id="arrow1" class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_parent/<?php echo $v_all_parent->parent_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_parent/<?php echo $v_all_parent->parent_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_parent/<?php echo $v_all_parent->parent_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_parent/<?php echo $v_all_parent->parent_id; ?>" title="Delete" onclick="return checkDelete();">
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
    $('#parent-management-table').DataTable( {
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