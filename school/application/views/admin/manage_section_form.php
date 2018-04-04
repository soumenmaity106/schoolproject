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
<center><h3>Section Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_section">
<button type="button" class="btn btn-info">Add New</button>
</a>
</div>

<hr style="border:0.25px solid #3C8DBC;">


<table id="management-table" class="table table-striped table-bordered table-hover table-responsive">
<!--<table id="section-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="05%">Section</th>
        <th width="05%">Category</th>
        <th width="05%">Capacity</th>
        <th width="10%">Teacher</th>
        <th width="15%">Note</th>
        <th width="10%">Status</th>
<!--        <th width="20%">Action</th>        -->
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_section as $v_all_section) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td><?php echo $v_all_section->section_id; ?></td>
        <td><?php echo strtoupper($v_all_section->section_name); ?></td>
        <td><?php echo $v_all_section->section_category;?></td>
        <td><?php echo $v_all_section->section_capacity;?></td>
        <td><?php echo $v_all_section->teacher_name;?></td>
        <td>
            <textarea rows="3" cols="50" style="overflow-y:scroll;height:100px;resize:none;">
                <?php echo substr($v_all_section->section_note, 0, 250);?>
            </textarea>
        </td>
        <td>
            <?php
            if ($v_all_section->section_status == 1) {
                echo "Active";
            } else {
                echo "Suspended";
            }
            ?>    
        </td>

        <td>
            <?php
            if ($v_all_section->section_status == 1) {
                ?>    
                <a class="btn btn-xs btn-success" href="<?php echo base_url(); ?>super_Admin/suspended_section/<?php echo $v_all_section->section_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-up">
                    </span>
                </a>
                <?php
            } else {
                ?>    
                <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>Super_Admin/active_section/<?php echo $v_all_section->section_id; ?>" title="Published">
                    <span class="glyphicon glyphicon-arrow-down">
                    </span>
                </a>
                <?php
            }
            ?>

            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_section/<?php echo $v_all_section->section_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_section/<?php echo $v_all_section->section_id; ?>" title="Delete" onclick="return checkDelete();">
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

