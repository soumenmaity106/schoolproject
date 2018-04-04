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
        Examination Question's Instructions
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
            
            
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_exam_question_instruction" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        

                        
                        <div class="form-group">
                            <label for="title">Title<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="title" id="title" >
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="ckeditor" name="content" rows="10" cols="80" id="content"></textarea>                            
                        </div>
                        


                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-6">

        </div>
    </div>
</section>


