<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.7/awesome-bootstrap-checkbox.css">
<style>
    .dt-button buttons-copy{
        color:red; 
    }    
</style>
    
<!--Attendance Details
Class : One
Section : A
Day : Thursday
Date : 29th March 2018-->

<hr>
<div>
    <center><h3 id="zqq">Student Attendence222</h3></center>
<form class="form-horizontal" action="<?php echo base_url();?>Super_admin/start_student_attendence" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-4">
<!--            <div class="box-footer">
                   <button disabled="disabled" type="submit" class="btn btn-warning">Start Attendence</button>
            </div>-->
                    <div class="box-footer">
<!--                        <a href="<?php// echo base_url();?>super_admin/start_student_attendence">-->
                        <button disabled="disabled" type="submit" class="btn btn-warning">Send & Save</button>
<!--                        </a>-->
                    </div>        
        
        
    </div>
    
    <div class="form-group col-md-4"></div>
    
    <div class="form-group col-md-2">
        <select required name="class_id" id="class_id" class="form-control">
            <option>Select Class</option>                                
            <?php
            foreach($all_class as $v_class)
            {    
            ?>                                
            <option value="<?php echo $v_class->class_id;?>"><?php echo $v_class->class_name;?></option>
            <?php
            }
            ?>                                        
        </select>               
    </div>
    
    <div class="form-group col-md-2">
        <select required name="section_id" id="section_id" class="form-control">
            <option>Select Section</option>                                
            <?php
            foreach($all_section as $v_section)
            {    
            ?>                                
            <option value="<?php echo $v_section->section_id;?>"><?php echo $v_section->section_name;?></option>
            <?php
            }
            ?>                                        
        </select>               
    </div>
</form>    
</div>









<hr style="border:0.25px solid #3C8DBC;">

<table id="student-attendence-table" class="table table-striped table-bordered table-hover table-responsive">
    <thead>
        <tr>
    <center>
        <th width="05%">ID</th>
        <th width="10%">Photo</th>
        <th width="15%">Name</th>
        <th width="05%">Roll</th>
        <th width="65%">
            <div class="checkbox checkbox-success">
                   <input type="checkbox" id="header_chk" class="select-all checkbox select-item styled" value="">
                   <label id="box421">HEAD</label>
            </div>
        </th>        
    </center>            
</tr>
</thead>

<tbody>
    <?php
    foreach ($attendence_class as $v_all_student) {
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
<!--        <td><?php// echo $v_all_student->student_register_no; ?></td>-->
        <td><?php echo $v_all_student->student_roll_no; ?></td>
        
        <td>
            <?php
            //if ($v_all_student->present_absent == 1)
            //   {
            ?>    
            <a href="<?php echo base_url();  ?>Super_Admin/student_mark_attendence/<?php echo $v_all_student->student_id; ?>">
                <div class="checkbox checkbox-success">
                   <input type="checkbox" id="rowchk" class="select-item styled" value="<?php echo $v_all_student->student_id; ?>">
                   <label><?php echo $v_all_student->student_id; ?></label>
                </div>
            </a>   
            <?php
               //} else{
            ?>   
<!--                <div class="checkbox checkbox-success">
                   <input type="checkbox" id="rowchk" class="select-item styled" value="<?php echo $v_all_student->student_id; ?>">
                   <label><?php// echo $v_all_student->student_id; ?></label>
                </div>-->
               <?php //}?>
        </td>
        
        
<!--        <td><?php echo $v_all_student->student_email; ?></td>-->

        <td>
            <?php
            /*if ($v_all_student->present_absent == 1) {
                echo "Present";
            } else {
                echo "Absent";
            }*/
            ?>    
        </td>

        <td>
            Action
<!--            <a class="btn btn-xs btn-default" href="<?php echo base_url();  ?>Super_Admin/edit_student/<?php echo $v_all_student->student_id; ?>" title="Edit">
                <span class="glyphicon glyphicon-pencil">
                </span>
            </a>
            <a class="btn btn-xs btn-default"  href="<?php echo base_url();  ?>Super_Admin/delete_student/<?php echo $v_all_student->student_id; ?>" title="Delete" onclick="return checkDelete();">
                <span class="glyphicon glyphicon-remove">
                </span>
            </a>-->
        </td>

    </div>                      
    </tr>
    <?php
}
?>        
</tbody>

</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function(){
        
        $('#header_chk').click(function(e){
          var table= $(e.target).closest('table');
          $('td input:checkbox',table).prop('checked',this.checked);
        });
        
        $('#rowchk').mouseover(function(e){
                $(':checkbox').prop('title', function() {
                    return $(this).val();
                });
        });
        

        
//         $("#header_chk").click(function () {
//            var all = $("input.select-all")[0];
//            all.checked = !all.checked
//            var checked = all.checked;
//            $("input.select-item").each(function (index,item) {
//                item.checked = checked;
//            });
//        });

        
        //alert("kfhdlhflkdhfkdfhlkajdhfklhfklajdhf");
        //button select all or cancel
//        $(".select-all").click(function () {
//            //alert("qwertqqqqqqqqqqqqqqqqqqqqqqq");
//            var all = $("input.select-all")[0];
//            all.checked = !all.checked
//            var checked = all.checked;
//            $("input.select-item").each(function (index,item) {
//                item.checked = checked;
//            });
//        });

//        //button select invert
//        $("#select-invert").click(function () {
//            $("input.select-item").each(function (index,item) {
//                item.checked = !item.checked;
//            });
//            checkSelected();
//        });
//
//        //button get selected info
//        $("#selected").click(function () {
//            var items=[];
//            $("input.select-item:checked:checked").each(function (index,item) {
//                items[index] = item.value;
//            });
//            if (items.length < 1) {
//                alert("no selected items!!!");
//            }else {
//                var values = items.join(',');
//                console.log(values);
//                var html = $("<div></div>");
//                html.html("selected:"+values);
//                html.appendTo("body");
//            }
//        });
//
//        //column checkbox select all or cancel
//        $("input.select-all").click(function () {
//            var checked = this.checked;
//            $("input.select-item").each(function (index,item) {
//                item.checked = checked;
//            });
//        });
//
//        //check selected items
//        $("input.select-item").click(function () {
//            var checked = this.checked;
//            console.log(checked);
//            checkSelected();
//        });
//
//        //check is all selected
//        function checkSelected() {
//            var all = $("input.select-all")[0];
//            var total = $("input.select-item").length;
//            var len = $("input.select-item:checked:checked").length;
//            console.log("total:"+total);
//            console.log("len:"+len);
//            all.checked = len===total;
//        }
    });
</script>





