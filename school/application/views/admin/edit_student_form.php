
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
        Edit Student
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
                        //exit();
                        $this->session->unset_userdata('message');
                    }/* else{
                      echo '<p style="color:green; font-weight:bold;">' . 'Please login with your Username and Password.' . '</p>';
                      } */
                    ?>    
                </div>    
                <!--FOR SUCCESSFUL Insert-->  
                
                
                <form id="edit_student_form"  action="<?php echo base_url(); ?>super_admin/update_student" method="POST" class="form-horizontal" enctype="multipart/form-data">                    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="student_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="student_name" id="student_name" placeholder="Enter Student Name" value="<?php echo $student_info->student_name; ?>">
                            <input type="hidden" name="student_id" id="student_id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $student_info->student_id; ?>">                            
                        </div>

                        <div class="form-group">
                            <label for="student_gurdian">Gurdian</label>
                            <input required type="text" class="form-control" name="student_gurdian" id="student_gurdian" placeholder="Enter Gurdian Name" value="<?php echo $student_info->student_gurdian; ?>">
                        </div>

                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input required type="text" onblur="myFunctionz()" name="student_dob" id="student_dob" class="form-control pull-right" value="<?php echo $student_info->student_dob; ?>">
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="student_gender">Gender</label>
                            <select name="student_gender" id="student_gender" class="form-control">
                                <option>Select Gender</option>                      
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="student_blood_group">Blood Group</label>
                            <select name="student_blood_group" id="student_blood_group" class="form-control">
                                <option>Select Blood Group</option>                                    
                                <option value="A+">A+</option>
                                <option value="A">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_relegion">Religion</label>
                            <select name="student_relegion" id="student_relegion" class="form-control">
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
                            <label for="student_email">Email</label>
                            <input type="text" class="form-control" name="student_email" id="student_email" placeholder="Enter Student Email" value="<?php echo $student_info->student_email; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_phone">Phone</label>
                            <input type="text" class="form-control" name="student_phone" id="student_phone" placeholder="Enter Phone No" value="<?php echo $student_info->student_phone; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_address">Address</label>
                            <textarea class="form-control" rows="4" name="student_address" id="student_address">
                              <?php echo $student_info->student_address; ?>
                            </textarea>                            
                        </div>

                        <div class="form-group">
                            <label for="student_country">Country</label>
                            <select name="student_country" id="student_country" class="form-control">
                                <option>Select Country</option>                                    
                                <option>India</option>
                                <option>Bangladesh</option>
                                <option>Sri Lanka</option>
                                <option>Bhutan</option>
                                <option>China</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_state">State</label>
                            <select name="student_state" id="student_state" class="form-control">
                                <option>Select State</option>                                    
                                <option>West Bengal</option>
                                <option>Bihar</option>
                                <option>Uttar Prasdesh</option>
                                <option>Karnataka</option>
                                <option>Gujarat</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_city">City</label>
                            <select name="student_city" id="student_city" class="form-control">
                                <option>Select City</option>                                    
                                <option>Kolkata</option>
                                <option>Delhi</option>
                                <option>Mumbai</option>
                                <option>Patna</option>
                                <option>Lucknow</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_class">Class<span class="req">*</span></label>
                            <select required name="student_class" id="student_class" class="form-control">
                                <option>Select Class</option>                                
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                                <option>Six</option>
                                <option>Seven</option>
                                <option>Eight</option>
                                <option>Nine</option>
                                <option>Ten</option>
                                <option>Ex-Student</option>                              
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_section">Section<span class="req">*</span></label>
                            <select name="student_section" id="student_section" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_group">Group</label>
                            <div class="form-group">
                                <select name="student_group" id="student_group" class="form-control">
                                    <option>Select Group</option>                                     
                                    <option>Art</option>
                                    <option>Science</option>
                                    <option>Commerce</option>
                                </select>               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="student_opt_subject">Optional Subject</label>
                            <div class="form-group">
                                <select name="student_opt_subject" id="student_opt_subject" class="form-control">
                                    <option>Select Opt Subject</option>                                     
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Math</option>
                                </select>               
                            </div>
                        </div>

                        <div class="form-group">
                            <!--
                            COMBINATION OF REGISTRATION NO. R + FIRST CHAR OF NAME +
                            DD + MM + YY + H + S 
                            -->
                            <label for="student_register_no">Register No<span class="req">*</span></label>
                            <input readonly type="text" class="form-control" name="student_register_no" id="student_register_no" placeholder="Enter Register No." value="<?php echo $student_info->student_register_no; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_roll_no">Roll<span class="req">*</span></label>
                            <input type="text" class="form-control" name="student_roll_no" id="student_roll_no" placeholder="Enter Roll No." value="<?php echo $student_info->student_roll_no; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_photo">Image Upload</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="student_photo" id="student_photo" value="<?php echo $student_info->student_photo; ?>">
                            <!--<input type='file' onchange="readURL(this);" />-->
                                <img id="blah" src="<?php echo base_url();?><?php echo $student_info->student_photo; ?>" alt="your image" />
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="student_extra_curr">Extra Curricular Activities</label>
                            <input type="text" class="form-control" name="student_extra_curr" id="student_extra_curr" placeholder="Enter Extra Curricular Activities" value="<?php echo $student_info->student_extra_curr; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_remark">Remarks</label>
                            <textarea class="form-control" rows="4" name="student_remark" id="student_remark">
                               <?php echo $student_info->student_remark; ?>
                            </textarea>                                                        
                        </div>

                        <div class="form-group">
                            <label for="student_username">Username<span class="req">*</span></label>
                            <input type="text" class="form-control" name="student_username" id="student_username" placeholder="Enter Extra Curricular Activities" value="<?php echo $student_info->student_username; ?>">
                        </div>

                        <div class="form-group">
                            <label for="student_password">Password<span class="req">*</span></label>
                            <input type="password" class="form-control" name="student_password" id="student_password" placeholder="Enter Extra Curricular Activities" value="<?php echo $student_info->student_password; ?>">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-6">

        </div>
    </div>
</section>

     
    
    
<script>
    document.forms['edit_student_form'].elements['student_gender'].value = "<?php echo $student_info->student_gender; ?>";    
    document.forms['edit_student_form'].elements['student_blood_group'].value = "<?php echo $student_info->student_blood_group; ?>";        
    document.forms['edit_student_form'].elements['student_blood_group'].value = "<?php echo $student_info->student_blood_group; ?>";            
    document.forms['edit_student_form'].elements['student_relegion'].value = "<?php echo $student_info->student_relegion; ?>";                

    document.forms['edit_student_form'].elements['student_country'].value = "<?php echo $student_info->student_country; ?>";    
    document.forms['edit_student_form'].elements['student_state'].value = "<?php echo $student_info->student_state; ?>";        
    document.forms['edit_student_form'].elements['student_city'].value = "<?php echo $student_info->student_city; ?>";            
    document.forms['edit_student_form'].elements['student_class'].value = "<?php echo $student_info->student_class; ?>";                
    document.forms['edit_student_form'].elements['student_section'].value = "<?php echo $student_info->student_section; ?>";    
    document.forms['edit_student_form'].elements['student_group'].value = "<?php echo $student_info->student_group; ?>";        
    document.forms['edit_student_form'].elements['student_opt_subject'].value = "<?php echo $student_info->student_opt_subject; ?>";            

</script>  

