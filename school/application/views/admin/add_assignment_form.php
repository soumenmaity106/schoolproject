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
        Assignment
        <small><small>EntryForm</small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<?php // exit();?>
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


<!--<form action="<?php echo base_url(); ?>super_admin/save_class" method="POST" enctype="multipart/form-data">-->
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_assignment" method="post" enctype="multipart/form-data">


                    <div class="box-body">


                        <div class="form-group">
                            <label for="assignment_title">Title</label>
                            <input type="text" class="form-control" name="assignment_title" id="assignment_title" placeholder="Enter Numeric Class">
                        </div>                        

                        <div class="form-group">
                            <label for="assignment_description">Description</label>
                            <textarea class="form-control" rows="4" name="assignment_description" id="assignment_description    "></textarea>                            
                        </div>

                        <div class="form-group">
                            <label>Deadline</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="assignment_deadline" id="assignment_deadline" class="form-control pull-right" >
                            </div>
                        </div>                        


                        <div class="form-group">
                            <label for="assignment_class">Class<span class="req">*</span></label>
                            <select required name="assignment_class" id="assignment_class" class="form-control">
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
                            <label for="assignment_section">Section<span class="req">*</span></label>
                            <select name="assignment_section" id="assignment_section" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="assignment_subject">Subject</label>
                            <div class="form-group">
                                <select name="assignment_subject" id="assignment_subject" class="form-control">
                                    <option>Select Opt Subject</option>                                     
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Math</option>
                                </select>               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="assignment_photo">File</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="assignment_photo" id="assignment_photo">
                            <!--<input type='file' onchange="readURL(this);" />-->
                                <img id="blah" src="../../../image/assignment_image/100x100.png" alt="your image" />

                            </div>
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

</script>


