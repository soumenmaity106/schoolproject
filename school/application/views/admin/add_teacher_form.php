

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
        Teacher
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


<!--<form action="<?php echo base_url(); ?>super_admin/save_student" method="POST" enctype="multipart/form-data">-->
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_teacher" method="post" enctype="multipart/form-data">


                    <div class="box-body">
                        <div class="form-group">
                            <label for="teacher_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="teacher_name" id="teacher_name" placeholder="Enter Student Name">
                        </div>

                        <div class="form-group">
                            <label for="teacher_designation">Designation</label>
                            <input type="text" class="form-control" name="teacher_designation" id="teacher_designation" placeholder="Enter Gurdian Name">
                        </div>

                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="teacher_DOB" id="teacher_DOB" class="form-control pull-right" >
                            </div>
                        </div>       


                        <div class="form-group">
                            <label for="teacher_gender">Gender</label>
                            <select name="teacher_gender" id="teacher_gender" class="form-control">
                                <option>Select Gender</option>                      
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="teacher_religion">Religion</label>
                            <select name="teacher_religion" id="teacher_religion" class="form-control">
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
                            <label for="teacher_email">Email</label>
                            <input type="text" class="form-control" name="teacher_email" id="teacher_email" placeholder="Enter Student Email">
                        </div>

                        <div class="form-group">
                            <label for="teacher_phone">Phone</label>
                            <input type="text" class="form-control" name="teacher_phone" id="teacher_phone" placeholder="Enter Phone No">
                        </div>

                        <div class="form-group">
                            <label for="teacher_address">Address</label>
                            <textarea class="form-control" rows="4" name="teacher_address" id="teacher_address"></textarea>                            
                        </div>


                        <div class="form-group">
                            <label>Joining Date:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="teacher_DOJ" id="teacher_DOJ" class="form-control pull-right" >
                            </div>
                        </div>       


                        <div class="form-group">
                            <label for="teacher_photo">Photo</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="teacher_photo" id="teacher_photo">
                            <!--<input type='file' onchange="readURL(this);" />-->
                                <img id="blah" src="../../../image/teacher_image/100x100.png" alt="your image" />

                            </div>
                        </div> 



                        <div class="form-group">
                            <label for="teacher_username">Username<span class="req">*</span></label>
                            <input type="text" class="form-control" name="teacher_username" id="teacher_username" placeholder="Enter Extra Curricular Activities">
                        </div>

                        <div class="form-group">
                            <label for="teacher_password">Password<span class="req">*</span></label>
                            <input type="password" class="form-control" name="teacher_password" id="teacher_password" placeholder="Enter Extra Curricular Activities">
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
