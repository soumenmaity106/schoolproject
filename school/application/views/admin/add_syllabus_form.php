

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
        Syllabus
        <small><small>EntryForm</small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<!--    <h1>I am here</h1>-->
    <?php// exit();?>
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


<!--<form action="<?php echo base_url(); ?>super_admin/save_class" method="POST" enctype="multipart/form-data">-->
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_syllabus" method="post" enctype="multipart/form-data">


                    <div class="box-body">


                        <div class="form-group">
                            <label for="syllabus_title">Syllabus Title</label>
                            <input type="text" class="form-control" name="syllabus_title" id="syllabus_title" placeholder="Enter Numeric Class">
                        </div>                        

                        <div class="form-group">
                            <label for="syllabus_description">Description</label>
                            <textarea class="form-control" rows="4" name="syllabus_description" id="syllabus_description"></textarea>                            
                        </div>

                        <div class="form-group">
                            <label for="syllabus_class">Class<span class="req">*</span></label>
                            <select required name="syllabus_class" id="syllabus_class" class="form-control">
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
                            <label for="syllabus_photo">Syllabus File Upload</label>
                            <div class="controls">
                                <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="syllabus_photo" id="syllabus_photo">
                            <!--<input type='file' onchange="readURL(this);" />-->
                                <img id="blah" src="../../../image/syllabus_image/100x100.png" alt="your image" />

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


