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
        Edit Staff
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
            
            
        <form id="edit_staff_form"  action="<?php echo base_url(); ?>super_admin/update_staff" method="POST" class="form-horizontal" enctype="multipart/form-data">                            
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="staff_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="staff_name" id="staff_name" placeholder="Enter Name" value="<?php echo $staff_info->staff_name; ?>">
                            <input required type="hidden" class="form-control" name="staff_id" id="staff_id" placeholder="Enter Name" value="<?php echo $staff_info->staff_id; ?>">                            
                        </div>
                        
                        <div class="form-group">
                            <label for="staff_doj">Date of Join</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input required type="text" onblur="myFunctionz()" name="staff_doj" id="staff_doj" class="form-control pull-right" value="<?php echo $staff_info->staff_doj; ?>" >
                            </div>
                        </div>                        
                        
                        
                        <div class="form-group">
                            <label for="staff_email">Email</label>
                            <input type="text" class="form-control" name="staff_email" id="staff_email" placeholder="Enter Email" value="<?php echo $staff_info->staff_email; ?>">
                        </div>

                        <div class="form-group">
                            <label for="staff_phone">Phone</label>
                            <input type="text" class="form-control" name="staff_phone" id="staff_phone" placeholder="Enter Phone" value="<?php echo $staff_info->staff_phone; ?>">
                        </div>

                        <div class="form-group">
                            <label for="staff_address">Address</label>
                            <textarea class="form-control" rows="4" name="staff_address" id="staff_address">
                                <?php echo $staff_info->staff_address; ?>
                            </textarea>                            
                        </div>
                        
                        <div class="form-group">
                          <label for="staff_photo">Image Upload</label>
                          <div class="controls">
                              <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="staff_photo" id="staff_photo" value="<?php echo $staff_info->staff_photo; ?>">
                          <!--<input type='file' onchange="readURL(this);" />-->
                              <img id="blah" src="../../../image/staff_image/100x100.png" alt="your image" />
                          </div>
                        </div> 
                        
                        <div class="form-group">
                            <label for="staff_pan">PAN No.</label>
                            <input type="text" class="form-control" name="staff_pan" id="staff_pan" placeholder="Enter Email" value="<?php echo $staff_info->staff_pan; ?>">
                        </div>

                        <div class="form-group">
                            <label for="staff_aadhar">Aadhar No</label>
                            <input type="text" class="form-control" name="staff_aadhar" id="staff_aadhar" placeholder="Enter Phone" value="<?php echo $staff_info->staff_aadhar; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="staff_designation">Designation</label>
                            <select name="staff_designation" id="staff_designation" class="form-control">
                                <option>Please Select</option>                                    
                                <option value="Accountant">Accountant</option>
                                <option value="Clerk">Clerk</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Driver">Driver</option>
                                <option value="Receptionish">Receptionist</option>
                                <option value="Peon">Peon</option>
                                <option value="Gate Keeper">Gate_Keeper</option>
                            </select>               
                        </div>
                        
                        <div class="form-group">
                            <label for="staff_salary">Salary</label>
                            <input type="text" class="form-control" name="staff_salary" id="staff_salary" placeholder="Enter Salary" value="<?php echo $staff_info->staff_salary; ?>">
                        </div>                        
                        
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

   document.forms['edit_staff_form'].elements['staff_designation'].value = "<?php echo $staff_info->staff_designation; ?>";        


   
</script>
