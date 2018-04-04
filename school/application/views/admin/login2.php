<!DOCTYPE html>
<html lang="en">
    <head>
        <!--
            ===
            This comment should NOT be removed.
    
            Charisma v2.0.0
    
            Copyright 2012-2014 Muhammad Usman
            Licensed under the Apache License v2.0
            http://www.apache.org/licenses/LICENSE-2.0
    
            http://usman.it
            http://twitter.com/halalit_usman
            ===
        -->
        <meta charset="utf-8">
        <title>Free HTML5 Bootstrap Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
        <meta name="author" content="Muhammad Usman">

        <!-- The styles -->
        <!--<link id="bs-css" href="<?php echo base_url();?>assets/css/bootstrap-cerulean.min.css" rel="stylesheet">-->

        <link href="<?php echo base_url();?>assets/css/bootstrap-cerulean.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/charisma-app.css" rel="stylesheet">

        <!--
        <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
        <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
        <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
        <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
        <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
        <link href='bower_components/bootstrap-tour/build/<?php echo base_url(); ?>css/bootstrap-tour.min.css' rel='stylesheet'>
        -->        

        <link href='<?php echo base_url();?>assets/css/jquery.noty.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/noty_theme_default.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/elfinder.min.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/elfinder.theme.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/uploadify.css' rel='stylesheet'>
        <link href='<?php echo base_url();?>assets/css/animate.min.css' rel='stylesheet'>

        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <!--[endif]-->

        <!-- The fav icon -->
        <link rel="shortcut icon" href="img/favicon.ico">


        <script>
            $(document).ready(function () {
                //alert("working........");
                $('#admin_email_address').click(function () {
                    //alert("working........");
                    //$('#f3').text() = "i love jQuery";
                });

            });
        </script>    



    </head>
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <body>
        <div class="ch-container">
            <div class="row">

                <div class="row">
                    <div class="col-md-12 center login-header">
                        <h3>Welcome to Admin-Panel</h3>
                    </div>
                    <!--/span-->
                </div><!--/row-->

                <div class="row">
                    <div class="well col-md-5 center login-box">
                        <div class="alert alert-info">
                            <!--Please login with your Username and Password.-->
                            <h3 id="f3" style="color:red;">
                                <?php
                                $exc = $this->session->userdata('exception');
                                if ($exc) {
                                    echo $exc;
                                    $this->session->unset_userdata('exception');
                                }
                                ?>
                            </h3>

                            <h3 id="f3" style="color:green;">
                                <?php
                                $msg = $this->session->userdata('message');
                                if ($msg) {
                                    /*echo "After unset<br>";
                                    echo $this->session->userdata('admin_id');
                                    echo "<br>";
                                    echo $this->session->userdata('admin_full_name');
                                    echo "<br>";
                                    exit();*/                                    
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                            </h3>

                        </div>
         <form class="form-horizontal" action="<?php echo base_url(); ?>admin/admin_login_check" method="post">
                            <fieldset>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                    <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" placeholder="Admin Email Addresss.....">
                                </div>
                                <div class="clearfix"></div><br>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock blue"></i></span>
                                    <input type="password" name="admin_email_password" id="admin_email_password" class="form-control" placeholder="Password">
                                </div>
                                <div class="clearfix"></div>

                                <div class="input-prepend">
                                    <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                                </div>
                                <div class="clearfix"></div>

                                <p class="center col-md-5">
                                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Login</button>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/span-->
                </div><!--/row-->
            </div><!--/fluid-row-->

        </div><!--/.fluid-container-->

        <!-- external javascript -->

        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

        <!-- library for cookie management -->
        <script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
        <!-- calender plugin -->


        <!--
        <script src='bower_components/moment/min/moment.min.js'></script>
        <script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
        -->



        <!-- data table plugin -->
        <script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>


        <!--
        <!-- select or dropdown enhancer -->
        <!--
        <script src="bower_components/chosen/chosen.jquery.min.js"></script>
        -->
        <!-- plugin for gallery image view -->
        <!--
        <script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
        -->

        <!-- notification plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>



        <!--.-->
        <!-- library for making tables responsive -->
        <script src="bower_components/responsive-tables/responsive-tables.js"></script>
        <!-- tour plugin -->
        <script src="bower_components/bootstrap-tour/build/<?php echo base_url(); ?>js/bootstrap-tour.min.js"></script>
        <!-- -->

        <!-- star rating plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
        <!-- for iOS style toggle switch -->
        <script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
        <!-- autogrowing textarea plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
        <!-- multiple file upload plugin -->
        <script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
        <!-- history.js for cross-browser state change on ajax -->
        <script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
        <!-- application script for Charisma demo -->
        <script src="<?php echo base_url(); ?>js/charisma.js"></script>






    </body>
</html>
