

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
        Hostel
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
                <form class="form-horizontal" action="<?php echo base_url(); ?>super_admin/save_hostel" method="post" enctype="multipart/form-data">


                    <div class="box-body">
                        <div class="form-group">
                            <label for="hostel_name">Hostel Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="hostel_name" id="hostel_name" placeholder="Enter Student Name">
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="Hostel Type">Hostel Type</label>
                            <select name="hostel_type" id="hostel_type" class="form-control">
                                <option>Please Select</option>                      
                                <option>Boys</option>
                                <option>Girls</option>
                                <option>Combine</option>
                            </select>
                        </div>                        
                        
                        
                        <div class="form-group">
                            <label for="hostel_address">Hostel Address</label>
                            <textarea class="form-control" rows="4" name="hostel_address" id="hostel_address"></textarea>                            
                        </div>
                        
                        
                        
                         <div class="form-group">
                            <label for="hostel_note">Notes</label>
                            <textarea class="form-control" rows="4" name="hostel_note" id="hostel_note"></textarea>                            
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
