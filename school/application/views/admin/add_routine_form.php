




<section class="content-header">
    <h1>
        Routine
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <!-- left column -->
        <!--        <div class="col-md-8 col-md-offset-2">-->
        <div class="col-md-10 col-md-offset-1">              
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <!--                    <h3 class="box-title">Quick Example</h3>-->
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
<!--                <form role="form">-->
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_routine" method="post" enctype="multipart/form-data">                    
                    <div class="box-body">
                        <div class="form-group">
                            <label for="routine_school_year">Subject</label>
                            <select required name="routine_school_year" id="routine_school_year" class="form-control">
                                <option>2017-2018</option>
                                <option>2018-2019</option>
                                <option>2019-2020</option>
                                <option>2021-2022</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="routine_class">Class<span class="req">*</span></label>
                            <select required name="routine_class" id="routine_class" class="form-control">
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
                            <label for="routine_section">Section<span class="req">*</span></label>
                            <select name="routine_section" id="routine_section" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>





                        <div class="form-group">
                            <label for="routine_subject">Optional Subject</label>
                            <div class="form-group">
                                <select name="routine_subject" id="routine_subject" class="form-control">
                                    <option>Select Opt Subject</option>                                     
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Math</option>
                                </select>               
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="routine_day">Optional Subject</label>
                            <div class="form-group">
                                <select name="routine_day" id="routine_subject" class="form-control">
                                    <option>Select Day</option>                                     
                                    <option>MONDAY</option>
                                    <option>TUESDAY</option>
                                    <option>WEDNESDAY</option>
                                    <option>THURSDAY</option>
                                    <option>FRIDAY</option>
                                    <option>SATURDAY</option>
                                </select>               
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="routine_teacher">Optional Subject</label>
                            <div class="form-group">
                                <select name="routine_teacher" id="routine_teacher" class="form-control">
                                    <option>Select Teacher</option>                                     
                                    <option>Teacher1</option>
                                    <option>Teacher2</option>
                                    <option>Teacher3</option>
                                    <option>Teacher4</option>
                                </select>               
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group">
                            <label for="routine_start_time">Starting Time</label>
                            <input type="text" class="form-control" name="routine_start_time" id="routine_start_time" placeholder="Enter Section">
                        </div>

                        <div class="form-group">
                            <label for="routine_end_time">Ending Time</label>
                            <input type="text" class="form-control" name="routine_end_time" id="routine_end_time" placeholder="Enter Section">
                        </div>


                        <div class="form-group">
                            <label for="routine_room">Room</label>
                            <input type="text" class="form-control" name="routine_room" id="routine_room" placeholder="Enter Section">
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








