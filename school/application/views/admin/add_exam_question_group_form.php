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
        Exam Question Group
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
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_exam_question_group" method="post" enctype="multipart/form-data">
    
    
                    <div class="box-body">
                        
                        
                        <div class="form-group">
                            <label for="title"> Group Title<span class="req">*</span></label>
                            <input required type="title" class="form-control" name="title" id="parent_name" placeholder="Enter Title">
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




