<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

<style>
    .dt-button buttons-copy{
        color:red; 
    }    
    .chotafont{
        //font-size:12px; 
        //font-weight:bold; 
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
<center><h3>Manage email(s)</h3></center>
<a style="margin-left:10px;" href="<?php echo base_url()?>Super_admin/add_email">
<button type="button" class="btn btn-info">Add New</button>
</a>
</div>

<hr style="border:0.25px solid #3C8DBC;">

<!--Total Active Student 10  Total Inactive Student 1
<hr style="border:1px solid #3C8DBC;">-->
            <!--FOR SUCCESSFUL insert-->   
            <div id="zmsg">
                            <?php
                            $msg = $this->session->userdata('message');
                            if ($msg) {
                                echo '<p>' . $msg . '</p>';
                                //exit();
                                $this->session->unset_userdata('message');
                            }/* else{
                              echo '<p style="color:green; font-weight:bold;">' . 'Please login with your Username and Password.' . '</p>';
                              } */
                            ?>    
            </div>    
            <!--FOR SUCCESSFUL Insert-->                 


<table id="management-table" class="table table-bordered table-hover">
<!--<table id="student-table" class="table table-bordered table-responsive">    -->
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="10%">Send To</th>
<!--        <th width="10%">CC To</th>
        <th width="10%">BCC To</th>-->
        <th width="10%">Subject</th>
        <th width="20%">Message</th>
        <th width="10%">Role Name</th>
        <th width="10%">Send Date</th>
        <th width="15%">Action</th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($all_email as $v_all_student) {
        ?>        
        <tr>
            <!--<div style="height:15px; min-height:15px; overflow :auto;">-->
    <div>             
        <td id="td1"><?php echo $v_all_student->email_id; ?></td>
        <td class="chotafont"><?php echo $v_all_student->to; ?></td>
<!--        <td class="chotafont"><?php echo $v_all_student->cc_to; ?></td>
        <td class="chotafont"><?php echo $v_all_student->bcc_to; ?></td>-->
        
        <td id="td3"><?php echo substr($v_all_student->subject, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->	message, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->user_role_name, 0, 50);?></td>
        <td id="td3"><?php echo substr($v_all_student->send_date, 0, 50);?></td>        
        
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

















        <script>
            //var message_length = 
            var message_length=0;
            var message = $('#zmsg p').text();
            var message_length = (message.length);
        
            $(document).ready(function(){
            $('#zmsg').css("border", "1px solid");    
            $('#zmsg').css("border-radius", "10px");
            //$('#zmsg').css("background", "green");
            $('#zmsg').css("margin", "0 auto");
            //$('#zmsg').css({"font-size" : "15px", "color" : "#FFFFFF"});
            $('#zmsg').css({"font-size" : "15px", "color" : "green"});
            $('#zmsg').css("padding", "10px 10px 10px 10px");
            $('#zmsg').css({"display" : "block", "text-align" : "center"});
            $('#zmsg').css("width", message_length*8);
            $('#zmsg').animate({opacity: 1}, 0009, function() {
                    $(this).animate({opacity: 0}, 9000);
            });
            //===========================================
        
            }); 
        </script>







