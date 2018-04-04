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
    <center><h3>Student Management</h3></center>
    <a style="margin-left:10px;" href="<?php echo base_url() ?>Super_admin/add_student">
        <button type="button" class="btn btn-info">Add New</button>
    </a>
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



<script>
////////////////////////////////////////////////////////////////////////////////
   $('#student-management-table').DataTable( {
        "columnDefs": [
            {
                "targets": [ 0 ],   //ID
                "visible": true,
                "searchable": true
            },
            {
                "targets": [ 1 ],  //PHOTO
                "visible": true
            },
            {
                "targets": [ 2 ],  //NAME
                "visible": true
            },
            {
                "targets": [ 3 ],  //student_register_no
                "visible": false
            },
            {
                "targets": [ 4 ],  //ROLR
                "visible": true
            },
            {
                "targets": [ 5 ],  //EMAIL
                "visible": true
            },
            {
                "targets": [ 6 ],  //STATUS
                "visible": true
            }
        ],
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
              extend: 'pdfHtml5',
              orientation: 'landscape',   //landscape give you more space
              pageSize: 'A3',
              customize: function (doc) 
              { doc.defaultStyle.fontSize = 8;       //2,3,4,etc 
                doc.styles.tableHeader.fontSize = 8; //2,3,4,etc 
              },               
              exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6  ]
                }
            },
        ],
        "order": [[ 1, "desc" ]]
    } );
////////////////////////////////////////////////////////////////////////////////
</script>