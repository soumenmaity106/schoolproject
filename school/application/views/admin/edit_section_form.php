<?php
//echo "This is Add Section Form";
//echo "<pre>";
//echo $data['all_teacher'];
//exit();
?>



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
        Edit Section
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
                        //$this->session->unset_userdata('message');
                    }/* else{
                      echo '<p style="color:green; font-weight:bold;">' . 'Please login with your Username and Password.' . '</p>';
                      } */
                    ?>    
                </div>    
                <!--FOR SUCCESSFUL Insert-->                 


                <form id="edit_section_form"  action="<?php echo base_url(); ?>super_admin/update_section" method="POST" class="form-horizontal" enctype="multipart/form-data">                                        


                    <div class="box-body">
                        
                        
                        
                        <div class="form-group">
                            <label for="section_name">Section<span class="req">*</span></label>
                            <select name="section_name" id="section_name" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>
                        
                        <div class="form-group">
                            <label for="section_category">Section Category</label>
                            <input type="text" class="form-control" name="section_category" id="section_category" placeholder="Enter category" value="<?php echo $section_info->section_category; ?>">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="section_capacity">Section Capacity</label>
                            <input type="text" class="form-control" name="section_capacity" id="section_capacity" placeholder="Enter Capacity" value="<?php echo $section_info->section_capacity; ?>">
                        </div>                          
                        
                        <div class="form-group">
                            <label for="section_class">Class<span class="req">*</span></label>
                            <select required name="section_class" id="section_class" class="form-control">
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
                            <label for="teacher_id">Teacher Name</label>
                            <select name="teacher_id" id="teacher_id" class="form-control">
                                <option>Select Teacher Name</option>     
                                
                                <?php
                                foreach($all_teacher as $v_teacher)
                                {    
                                ?>                                
                                
                                <option value="<?php echo $v_teacher->teacher_id;?>"><?php echo $v_teacher->teacher_name;?></option>
                                
                                <?php
                                }
                                ?>          
                                
                            </select>               
                        </div>


                        <div class="form-group">
                            <label for="section_note">Notes</label>
                            <textarea class="form-control" rows="4" name="section_note" id="section_note">
                               <?php echo $section_info->section_note; ?>
                            </textarea>                            
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
    document.forms['edit_section_form'].elements['section_name'].value = "<?php echo $section_info->section_name; ?>";    
    document.forms['edit_section_form'].elements['section_class'].value = "<?php echo $secton_info->section_class; ?>";        
    document.forms['edit_section_form'].elements['teacher_id'].value = "<?php echo $section_info->teacher_id; ?>";            
</script>  




