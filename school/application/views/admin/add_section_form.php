<?php
//echo "inside add_section_form";
//exit();
//print_r($data);
//echo $data['all_teacher']; 
//echo $data['all_class'] ;
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
        Section
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


                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_section" method="post" enctype="multipart/form-data">


                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="section_name">Section Name</label>
                            <input style="text-transform:uppercase;" type="text" class="form-control" name="section_name" id="section_name" placeholder="Enter alphabets like A, B, B, D etc.">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="section_category">Section Category</label>
                            <input type="text" class="form-control" name="section_category" id="section_category" placeholder="Enter category">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="section_capacity">Section Capacity</label>
                            <input type="text" class="form-control" name="section_capacity" id="section_capacity" placeholder="Enter Capacity">
                        </div>                          


                        <div class="form-group">
                            <label for="class_id">Class<span class="req">*</span></label>
                            <select required name="class_id" id="class_id" class="form-control">
                                <option>Please Select</option>                                
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
                            <textarea class="form-control" rows="4" name="section_note" id="section_note"></textarea>                            
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





