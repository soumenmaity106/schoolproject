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
<center><h3>Library Books Management</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_library_books">
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
        <th width="20%">Book Name</th>
        <th width="20%">Author</th>
        <th width="10%">Subject Code</th>
        <th width="10%">Price</th>
        <th width="10%">Quantity</th>
        <th width="10%">Rack No</th>
        <th width="15%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_books as $v_all_student) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_student->book_id; ?></td>
        <td id="td2"><?php echo $v_all_student->book_name; ?></td>
        <td id="td2"><?php echo $v_all_student->book_author; ?></td>
        <td id="td2"><?php echo $v_all_student->subject_code; ?></td>
        <td id="td2"><?php echo $v_all_student->book_price; ?></td>
        <td id="td2"><?php echo $v_all_student->book_qty; ?></td>
        <td id="td2"><?php echo $v_all_student->book_rack; ?></td>
        
        
<!--        
<a id="popover" data-trigger="hover">Popover</a>        
-->        
        
<!--        <td id="td4">
            <?php
            if ($v_all_student->publication_status == 1) {
                echo "Published";
            } else {
                echo "Un-published";
            }
            ?>    
        </td>-->
        
        
        
        
        
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
























