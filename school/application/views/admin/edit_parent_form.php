<!--
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
-->
<style>
    img{
        max-width:180px;
    }
    input[type=file]{
        padding:10px;
        background:#2d2d2d;}  
    </style>    




    <section class="content-header">
    <h1>
        Edit Parent
        <small><small>EntryForm</small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-8">             
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--<h3 class="box-title">Quick Example</h3>-->
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <!-- <form role="form">-->


                <!--FOR SUCCESSFUL insert-->   
                <div id="zmsg">
                    <?php
                    $msg = $this->session->userdata('message');
                    //echo "I am here";
                    //echo $msg;
                    //exit();

                    if ($msg) {
                        //echo '<p id="smsg" style="color:green; font-size:18px; font_weight:bold;";>' . $msg . '</p>';
                        //exit();
                        $this->session->unset_userdata('message');
                    }/* else{
                      echo '<p style="color:green; font-weight:bold;">' . 'Please login with your Username and Password.' . '</p>';
                      } */
                    ?>    
                </div>    
                <!--FOR SUCCESSFUL Insert-->                 



                <form id="edit_parent_form"  action="<?php echo base_url(); ?>super_admin/update_parent" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="parent_name">Gurdian name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="parent_name" id="parent_name" placeholder="Enter Parent Name" value="<?php echo $parent_info->parent_name; ?>">
                            <input required type="hidden" class="form-control" name="parent_id" id="parent_id" placeholder="Enter Parent Name" value="<?php echo $parent_info->parent_id; ?>">                            
                        </div>

                        <div class="form-group">
                            <label for="parent_father_name">Father's Name</label>
                            <input type="text" class="form-control" name="parent_father_name" id="parent_father_name" placeholder="Enter Father Name" value="<?php echo $parent_info->parent_father_name; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_mother_Name">Mother's Name</label>
                            <input type="text" class="form-control" name="parent_mother_Name" id="parent_mother_Name" placeholder="Enter Mother Name" value="<?php echo $parent_info->parent_mother_Name; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_father_profession">Father's Profession</label>
                            <input type="text" class="form-control" name="parent_father_profession" id="parent_father_profession" placeholder="Enter Father's Profesion" value="<?php echo $parent_info->parent_father_profession; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_mother_profession">Mother's Profession</label>
                            <input type="text" class="form-control" name="parent_mother_profession" id="parent_mother_profession" placeholder="Enter Mother's Profesion" value="<?php echo $parent_info->parent_mother_profession; ?>">
                        </div>


                        <div class="form-group">
                            <label for="parent_email">Email</label>
                            <input type="text" class="form-control" name="parent_email" id="parent_email" placeholder="Enter Parent Email" value="<?php echo $parent_info->parent_email; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_phone">Phone</label>
                            <input type="text" class="form-control" name="parent_phone" id="parent_phone" placeholder="Enter Phone No" value="<?php echo $parent_info->parent_phone; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_address">Address</label>
                            <textarea class="form-control" rows="4" name="parent_address" id="parent_address">
                            <?php echo $parent_info->parent_address; ?>
                            </textarea>                            
                        </div>

<!--                        <div class="form-group">
                            <label for="parent_photo">Image Upload</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="parent_photo" id="parent_photo">
                            <input type='file' onchange="readURL(this);" />
                                <img id="blah" src="../../../image/parent_image/100x100.png" alt="your image" />

                            </div>
                        </div> -->

                      <div class="form-group">
                            <label for="parent_photo">Image Upload</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="parent_photo" id="parent_photo" value="<?php echo $student_info->parent_photo; ?>">
                            <!--<input type='file' onchange="readURL(this);" />-->
                                <img id="blah" src="<?php echo base_url();?><?php echo $parent_info->parent_photo; ?>" alt="your image" />
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="parent_username">Username<span class="req">*</span></label>
                            <input type="text" class="form-control" name="parent_username" id="parent_username" placeholder="Enter Extra Curricular Activities" value="<?php echo $parent_info->parent_username; ?>">
                        </div>

                        <div class="form-group">
                            <label for="parent_password">Password<span class="req">*</span></label>
                            <input type="password" class="form-control" name="parent_password" id="parent_password" placeholder="Enter Extra Curricular Activities" value="<?php echo $parent_info->parent_password; ?>">
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->







        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">


        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>




<script>

    function readURL(input) {
        //alert("Image View Activated...");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah')
                        .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    
//    document.forms['edit_student_form'].elements['student_gender'].value = "<?php echo $student_info->student_gender; ?>";    
//    document.forms['edit_student_form'].elements['student_blood_group'].value = "<?php echo $student_info->student_blood_group; ?>";        
//    document.forms['edit_student_form'].elements['student_blood_group'].value = "<?php echo $student_info->student_blood_group; ?>";            
//    document.forms['edit_student_form'].elements['student_relegion'].value = "<?php echo $student_info->student_relegion; ?>";                
//
//    document.forms['edit_student_form'].elements['student_country'].value = "<?php echo $student_info->student_country; ?>";    
//    document.forms['edit_student_form'].elements['student_state'].value = "<?php echo $student_info->student_state; ?>";        
//    document.forms['edit_student_form'].elements['student_city'].value = "<?php echo $student_info->student_city; ?>";            
//    document.forms['edit_student_form'].elements['student_class'].value = "<?php echo $student_info->student_class; ?>";                
//    document.forms['edit_student_form'].elements['student_section'].value = "<?php echo $student_info->student_section; ?>";    
//    document.forms['edit_student_form'].elements['student_group'].value = "<?php echo $student_info->student_group; ?>";        
//    document.forms['edit_student_form'].elements['student_opt_subject'].value = "<?php echo $student_info->student_opt_subject; ?>";            



</script>
