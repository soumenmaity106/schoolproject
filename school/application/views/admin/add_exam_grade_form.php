

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
        Exam Schedule
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
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_exam_schedule" method="post" enctype="multipart/form-data">


                    <div class="box-body">


                        <div class="form-group">
                            <label for="exam_name">Exam</label>
                            <select name="exam_name" id="exam_name" class="form-control">
                                <option>Select Exam</option>                      
                                <option>Exam1</option>
                                <option>Exam2</option>
                                <option>Exam3</option>
                                <option>Exam4</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="exam_class">Class<span class="req">*</span></label>
                            <select required name="exam_class" id="exam_class" class="form-control">
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
                            <label for="exam_section">Section<span class="req">*</span></label>
                            <select name="exam_section" id="exam_section" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>


                        <div class="form-group">
                            <label for="exam_subject">Subject</label>
                            <div class="form-group">
                                <select name="exam_subject" id="exam_subject" class="form-control">
                                    <option>Select Opt Subject</option>                                     
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Math</option>
                                </select>               
                            </div>
                        </div>



                        <div class="form-group">
                            <label>Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="exam_date" id="exam_date" class="form-control pull-right" >
                            </div>
                        </div>                        








                        <div class="form-group">
                            <label for="exam_time_from">Time From<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="exam_time_from" id="exam_time_from" placeholder="Enter Student Name">
                        </div>

                        <div class="form-group">
                            <label for="exam_time_to">Time To</label>
                            <input type="text" class="form-control" name="exam_time_to" id="exam_time_to" placeholder="Enter Gurdian Name">
                        </div>

                        <div class="form-group">
                            <label for="exam_room">Room</label>
                            <input type="text" class="form-control" name="exam_room" id="exam_room" placeholder="Enter Gurdian Name">
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



