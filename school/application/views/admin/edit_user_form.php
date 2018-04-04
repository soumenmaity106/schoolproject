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
        Edit User
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
                <!--FOR SUCCESSFUL insert-->   
                <div id="zmsg">
                    <?php
                    $msg = $this->session->userdata('message');
                    if ($msg) {
                        //echo '<p id="smsg" style="color:green; font-size:18px; font_weight:bold;";>' . $msg . '</p>';
                        echo '<p id="smsg";>' . $msg . '</p>';
                        $this->session->unset_userdata('message');
                    }/* else{
                      echo '<p style="color:green; font-weight:bold;">' . 'Please login with your Username and Password.' . '</p>';
                      } */
                    ?>    
                </div>    
                <!--FOR SUCCESSFUL Insert-->                 



                <form id="edit_user_form"  action="<?php echo base_url(); ?>super_admin/update_user" method="POST" class="form-horizontal" enctype="multipart/form-data">                                        
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter Student Name" value="<?php echo $user_info->user_name; ?>">
                            <input required type="hidden" class="form-control" name="user_id" id="user_id" placeholder="Enter Student Name" value="<?php echo $user_info->user_id; ?>">                            
                        </div>

                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="user_DOB" id="user_DOB" class="form-control pull-right" value="<?php echo $user_info->user_DOB; ?>" >
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="user_gender">Gender</label>
                            <select name="user_gender" id="user_gender" class="form-control">
                                <option>Select Gender</option>                      
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="user_religion">Religion</label>
                            <select name="user_religion" id="student_relegion" class="form-control">
                                <option>Select Religion</option>                                  
                                <option>Hinduism</option>
                                <option>Islam</option>
                                <option>Buddhism</option>
                                <option>Jainism</option>
                                <option>Christianity</option>
                                <option>Sikhism</option>
                                <option>Other</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="user_email">Email</label>
                            <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Enter User Email" value="<?php echo $user_info->user_email; ?>">
                        </div>

                        <div class="form-group">
                            <label for="user_phone">Phone</label>
                            <input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="Enter Phone No" value="<?php echo $user_info->user_phone; ?>">
                        </div>

                        <div class="form-group">
                            <label for="user_address">Address</label>
                            <textarea class="form-control" rows="4" name="user_address" id="user_address">
                             <?php echo $user_info->user_address; ?>
                            </textarea>                            
                        </div>

                        <div class="form-group">
                            <label>Join Date:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="user_DOJ" id="user_DOJ" class="form-control pull-right" value="<?php echo $user_info->user_DOJ; ?>" >
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="user_photo">Image Upload</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="user_photo" id="user_photo" value="<?php echo $user_info->user_photo; ?>">
                                <img id="blah" src="../../../image/user_image/100x100.png" alt="your image" />
                            </div>
                        </div> 

<!--                        <div class="form-group">
                            <label for="user_role_name">Religion</label>
                            <select name="user_role_name" id="user_role_name" class="form-control">
                                <option>Select Role</option>                                  
                                <option value="1">Admin</option>
                                <option value="2">Student</option>
                                <option value="3">Parent</option>
                                <option value="4">Teacher</option>
                                <option value="5">Librarian</option>
                                <option value="6">Receptionist</option>
                                <option value="7">Transporter</option>
                                <option value="8">Staff</option>
                            </select>               
                        </div>                        -->
                        <div class="form-group">
                            <label for="user_role_name">Role</label>
                            <select name="user_role_name" id="user_role_name" class="form-control">
                                <option>Select Role</option>                                  
                                <option value="Admin">Admin</option>
                                <option value="Student">Student</option>
                                <option value="Parent">Parent</option>
                                <option value="4">Teacher</option>
                                <option value="Teacher">Librarian</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Transporter">Transporter</option>
                                <option value="Staff">Staff</option>
                            </select>               
                        </div>                        
                        

                        <div class="form-group">
                            <label for="user_username">Username<span class="req">*</span></label>
                            <input type="text" class="form-control" name="user_username" id="user_username" placeholder="Enter Extra Curricular Activities" value="<?php echo $user_info->user_username; ?>">
                        </div>

                        <div class="form-group">
                            <label for="user_password">Password<span class="req">*</span></label>
                            <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter Extra Curricular Activities" value="<?php echo $user_info->user_password; ?>">
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
        </div>
    </div>
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
    
    
    
    document.forms['edit_user_form'].elements['user_gender'].value = "<?php echo $user_info->user_gender; ?>";    
    document.forms['edit_user_form'].elements['user_religion'].value = "<?php echo $user_info->user_religion; ?>";        
    document.forms['edit_user_form'].elements['user_role_name'].value = "<?php echo $user_info->user_role_name; ?>";            
</script>

