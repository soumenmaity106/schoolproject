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
        Edit Subject
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


                <form id="edit_subject_form"  action="<?php echo base_url(); ?>super_admin/update_subject" method="POST" class="form-horizontal" enctype="multipart/form-data">                    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="class_name">Class<span class="req">*</span></label>
                            <select required name="class_name" id="class_name" class="form-control">
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
                            <label for="teacher_name">Teacher Name</label>
                            <select name="teacher_name" id="teacher_name" class="form-control">
                                <option>Select Teacher Name</option>                                  
                                <option>Ram</option>
                                <option>Shyam</option>
                                <option>Jaud</option>
                                <option>Madhu</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="subject_type">Select Type</label>
                            <select name="subject_type" id="subject_type" class="form-control">
                                <option>Select Subject Type</option>                                  
                                <option>Optional</option>
                                <option>Mandatory</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="pass_mark">Pass Mark</label>
                            <input type="text" class="form-control" name="pass_mark" id="pass_mark" placeholder="Enter Numeric Class" value="<?php echo $subject_info->pass_mark; ?>">
                            <input type="hidden" name="subject_id" id="subject_id" class="form-control col-md-7 col-xs-12" value="<?php echo $subject_info->subject_id; ?>">                                                        
                        </div>

                        <div class="form-group">
                            <label for="final_mark">Final Mark</label>
                            <input type="text" class="form-control" name="final_mark" id="final_mark" placeholder="Enter Numeric Class" value="<?php echo $subject_info->final_mark; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject_name">Subject Name</label>
                            <input type="text" class="form-control" name="subject_name" id="subject_name" placeholder="Enter Numeric Class" value="<?php echo $subject_info->subject_name; ?>">
                        </div>

                        <div class="form-group">
                            <label for="subject_author">Subject Author</label>
                            <input type="text" class="form-control" name="subject_author" id="subject_author" placeholder="Enter Numeric Class" value="<?php echo $subject_info->subject_author; ?>">
                        </div>

                        <div class="form-group">
                            <label for="subject_name">Subject Code</label>
                            <input type="text" class="form-control" name="subject_code" id="subject_code" placeholder="Enter Numeric Class" value="<?php echo $subject_info->subject_code; ?>">
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
    document.forms['edit_subject_form'].elements['class_name'].value = "<?php echo $subject_info->class_name; ?>";    
    document.forms['edit_subject_form'].elements['teacher_name'].value = "<?php echo $subject_info->teacher_name; ?>";        
    document.forms['edit_subject_form'].elements['subject_type'].value = "<?php echo $subject_info->subject_type; ?>";            
</script>  



