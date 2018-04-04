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
        Exam
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
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_exam" method="post" enctype="multipart/form-data">
    
    
                    <div class="box-body">
                        
                        
                        <div class="form-group">
                            <label for="exam_name">Exam</label>
                            <select name="exam_name" id="exam_name" class="form-control">
                                <option>Select Exam</option>                      
                                <option>Semester-Exam1</option>
                                <option>Semester-Exam2</option>
                                <option>Semester-Exam3</option>
                                <option>Semester-Exam4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exam_date">Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="exam_date" id="exam_date" class="form-control pull-right" >
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="exam_note">Note</label>
                            <textarea class="form-control" rows="4" name="exam_note" id="exam_note"></textarea>                            
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




