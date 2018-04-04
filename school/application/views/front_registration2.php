<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <body class="hold-transition login-page">
        <h1><center>Frontpage registration</center></h1>
        <div class="login-box">
            <div class="login-logo">
                <a href="../../index2.html"><b>apkaSchool</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg" id="top_prompt">
<!--                    Sign in to start your session-->
                                <?php
                                $exc = $this->session->userdata('exception');
                                if ($exc) {
                                    echo "<p style='color:red;font-size:16px;font-weight:bold;text-align:center;'>".$exc."</p>";
                                    $this->session->unset_userdata('exception');
                                }
                                else{
                                    echo "Sign in to start your session";
                                }
                                ?>
                </p>
                            <h3 id="f3" style="color:red;font-size:16px;font-weight:bold;text-align:center;">
                                <?php
                                $exc = $this->session->userdata('exception');
                                if ($exc) {
                                    echo $exc;
                                    $this->session->unset_userdata('exception');
                                }
                                ?>
                            </h3>     
                            <h3 id="f4" style="color:green;font-size:16px;font-weight:bold;text-align:center;">
                                <?php
                                $msg = $this->session->userdata('message');
                                if ($msg) {
                                    echo $msg;
                                    $this->session->unset_userdata('message');
                                }
                                ?>
                            </h3>                               
                
                
                
                

                <form action="<?php echo base_url(); ?>admin/admin_login_check" method="post">

                        <div class="form-group">
                            <center><label for="zuser_role_numeric">Role</label></center>
                            <select name="zuser_role_numeric" id="zuser_role_numeric" class="form-control">
                                <option>Select Role</option>  
                                
<?php
foreach($all_user_role_name as $v_all_role){
?>                                
                                <option value="1"><?php echo $v_all_role->user_role_name; ?></option>
                                
                                
<!--                                <option value="2">Student</option>
                                <option value="3">Parent</option>
                                <option value="4">Teacher</option>
                                <option value="5">Librarian</option>
                                <option value="6">Receptionist</option>
                                <option value="7">Transporter</option>
                                <option value="8">Staff</option>-->-->
<?php
}
?>                                

                            </select>
                        </div>
                    
                    
                    <div class="form-group has-feedback">
                        <input disabled type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    
                    <div class="form-group has-feedback">
                        <input disabled type="password" name="user_password" id="user_password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <input type="text" name="user_role_name" id="user_role_name">
                        <input type="text" name="user_role_numeric" id="user_role_numeric">                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
<!--                            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
                               <input disabled id="submit" type="submit" name="submit" value="Submit" class="btn btn-primary btn-block btn-flat">
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                
                
                
                
                
                
                
                
                

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>
                </div>
                <!-- /.social-auth-links -->

                <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script>
                
            $(document).ready(function(){
                $("#f4").animate({opacity: 1}, 0009, function() {
                        $(this).animate({opacity: 0}, 9000);
                  });
                  
                $("#zuser_role_numeric").change(function(){
                  $("#user_email").prop('disabled', false);
                  $("#user_password").prop('disabled', false);
                  $("#submit").prop('disabled', false);
                  var abcd = $(this).find(":selected").text();
                  
                  $("#top_prompt").html(abcd + " Login");
                  $("#user_role_name").val(abcd);
                  $("#user_role_numeric").val(this.value);

                  $("#top_prompt").css("color", "green")
                  $("#top_prompt").css("font-weight", "bold")
                  $("#top_prompt").css({"font-size" : "15px"});                  
                  $("#top_prompt").animate({opacity: 1}, 0009, function() {
                        $(this).animate({opacity: 0}, 9000);
                  });
                  //===========================================
                });
            }); 
        </script>
    </body>
    
    
    
    
    
    
    
    
    
    
    
</html>
