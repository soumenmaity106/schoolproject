<!--admin_master.php-->

<?php
//session_start();
           //echo "<h1>Session hold following values</h1>";
           //echo "<h3>" . $this->session->userdata('admin_id') . "</h3>";
           //echo "<h3>" . $this->session->userdata('admin_name') . "</h3>";
           //echo "I am inside admin_master";
           //echo $ses_data['user_role_name']."<br>";
           //exit();
           //echo $this->session->userdata('$user_role_name');
           //exit();

?>







<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>apkaSchool | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  
  <!-- CSS for DataTable with Export Buttons-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  

<script>
            function checkDelete(){
                var chk = confirm("Are you sure to Delete this ?");
                if(chk)
                   {
                    return true;
                   } 
                   else {
                         return false;
                        } 
            }    
</script>  
  
  
  
  
  
  
  
  
  
  
  
  
  
</head>









<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    
    
  <header class="main-header">
    <!-- Logo -->
    <!-- Logo -->
    <a style="padding-left:0;" href="<?php echo base_url();?>Super_admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>PK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
          <img src="<?php echo base_url();?>assets/img/logo/apkalogo.png" height="53" width="230" alt="logo Image">          
      </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        
<!--<img style="border-radius:20%; border:2px solid #3C8DBC;" src="<?php echo base_url().$v_all_student->student_photo;?>" alt="Student_image" height="30" width="30" />                        -->
                        
                        
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        apkaSchool Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
              
              
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--              <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
<img src="<?php echo base_url();?><?php echo $this->session->userdata('user_photo'); ?>" class="user-image" alt="Student_image">              
              <!--<span class="hidden-xs">apysan</span>-->
<span class="hidden-xs"><?php echo "<strong>" . $this->session->userdata('user_name') . "</strong>"; ?></span>
            </a>
<!--            chalu1  -->
              
              
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
<!--                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                <img src="<?php echo base_url();?><?php echo $this->session->userdata('user_photo'); ?>" class="img-circle" alt="Student_image">

                <p>
                  <!--Alexander Pie rce - Web Developer-->
                  <?php echo "<strong>" . $this->session->userdata('user_name') . "</strong>"; ?>
                  - <?php echo "<strong>" . $this->session->userdata('user_role_name') . "</strong>"; ?>
                  <small><?php echo $this->session->userdata('user_role_name');?> since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-info btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                  
                  <a href="<?php echo base_url();?>Super_admin/logout" class="btn btn-info btn-flat">Sign out</a>                  
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
<!--<img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
    <img src="<?php echo base_url();?><?php echo $this->session->userdata('user_photo'); ?>" class="img-circle" alt="Student_image">          
        </div>
        <div class="pull-left info">
          <p><?php echo "<strong>" . $this->session->userdata('user_name') . "</strong>"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
<!--      chalu2-->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
<!--          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>-->
        
<li>
    <a id="dashboard_li" href="#">
        <i class="fa fa-dashboard"></i>
        <span style="padding-left:1px;">Dashboard</span>
    </a>
</li>       
        

<li>
    <a id="student_li" href="#">
        <i class="fa fa-graduation-cap"></i>
        <span style="padding-left:1px;">Student</span>
    </a>
</li>       


<li>
    <a id="parent_li" href="#">
        <i class="fa fa-user"></i> 
        <span style="padding-left:1px;">Parent</span>
    </a>
</li>


<li>
    <a id="teacher_li" href="#">
        <i class="fa fa-black-tie"></i>
        <span style="padding-left:1px;">Teacher</span>
    </a>
</li>   
        

<li>
    <a id="user_li" href="#">
        <i class="fa fa-users"></i>
        <span style="padding-left:1px;">User</span>
    </a>
</li>   


<li>
    <a id="staff_li" href="#">
        <i class="fa fa-user-plus"></i>
        <span style="padding-left:1px;">Staff</span>
    </a>
</li>   


<li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Academic</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li>
        <a id="class_li" href="#">
            <i class="fa fa-wheelchair"></i> 
            <span style="padding-left:1px;">Class</span>
        </a>
    </li>
    
    <li>
        <a id="subject_li" href="#">
            <i class="fa fa-map"></i> 
            <span style="padding-left:1px;">Subject</span>
        </a>
    </li>
    
    <li>
        <a id="section_li" href="#">
            <i class="fa fa-object-group"></i> 
            <span style="padding-left:1px;">Section</span>
        </a>
    </li>
    
    <li>
        <a id="syllabus_li" href="#">
            <i class="fa fa-object-group"></i> 
            <span style="padding-left:1px;">Syllabus</span>
        </a>
    </li>
    
    <li>
        <a id="assignment_li" href="#">
            <i class="fa fa-object-group"></i> 
            <span style="padding-left:1px;">Assignment</span>
        </a>
    </li>
    
    <li>
        <a id="routine_li" href="#">
            <i class="fa fa-object-group"></i> 
            <span style="padding-left:1px;">Routine</span>
        </a>
    </li>
    
  </ul>
</li>



        






<li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Attendence</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="<?php echo base_url();?>Super_admin/manage_student_attendence"><i class="fa fa-wheelchair"></i> Student Attendence</a></li>
    <li><a href="<?php echo base_url();?>Super_admin/manage_student_attendence"><i class="fa fa-map"></i> Teacher Attendence</a></li>
    <li><a href="<?php echo base_url();?>Super_admin/manage_student_attendence"><i class="fa fa-object-group"></i> User Attendence</a></li>
  </ul>
</li>



        
        
        
        
        
        
        
        
        
<li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Exam</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li>
        <a id="exam_li" href="#">
            <i class="fa fa-wheelchair"></i> 
            <span style="padding-left:1px;">Exam</span>
        </a>
    </li>
    
    <li>
        <a id="exam_schedule_li" href="#">
            <i class="fa fa-wheelchair"></i> 
            <span style="padding-left:1px;">Exam Schedule</span>
        </a>
    </li>
    
    <li>
        <a id="grade_li" href="#">
            <i class="fa fa-wheelchair"></i> 
            <span style="padding-left:1px;">Grade</span>
        </a>
    </li>
    
    <li>
        <a id="exam_attendence_li" href="#">
            <i class="fa fa-wheelchair"></i> 
            <span style="padding-left:1px;">Exam attendence</span>
        </a>
    </li>

  </ul>
</li>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        






        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Mark</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-wheelchair"></i> Mark</a></li>
            <li><a href="#"><i class="fa fa-map"></i> Mark Percentage</a></li>
            <li><a href="#"><i class="fa fa-object-group"></i> Promotion</a></li>
          </ul>
        </li>




        







        <li><a href="<?php echo base_url()?>Super_admin/manage_email"><i class="fa fa-paper-plane-o"></i><span style="padding-left:1px;">Message</span></a></li>           







         



        <li><a href="<?php echo base_url()?>Super_admin/add_user"><i class="fa fa-medium"></i><span style="padding-left:1px;">Media</span></a></li>  











        <li><a href="<?php echo base_url()?>Super_admin/manage_sms"><i class="fa fa-medium"></i><span style="padding-left:1px;">Mail / SMS</span></a></li>  





        
        
        





        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Online Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Super_admin/manage_exam_question_group"><i class="fa fa-wheelchair"></i> Question Group</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_exam_question_level"><i class="fa fa-map"></i> Question Level</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_exam_question_bank"><i class="fa fa-object-group"></i> Question Bank</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/chartjs.html"><i class="fa fa-wheelchair"></i> Online Exam</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_exam_question_instruction"><i class="fa fa-map"></i> Instruction</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/flot.html"><i class="fa fa-object-group"></i> Take Exam</a></li>
            
          </ul>
        </li>

        





        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Library</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>assets/pages/charts/chartjs.html"><i class="fa fa-wheelchair"></i> Member</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_books_category"><i class="fa fa-cubes"></i> Books Category</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_library_books"><i class="fa fa-map"></i> Books</a></li>            
            <li><a href="<?php echo base_url();?>assets/pages/charts/flot.html"><i class="fa fa-object-group"></i> Issue</a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Transport</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Super_admin/manage_transport"><i class="fa fa-wheelchair"></i> Transport</a></li>
            <li><a href="<?php echo base_url();?>Super_admin/manage_transport_member"><i class="fa fa-map"></i> Member</a></li>
          </ul>
        </li>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hostel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Super_admin/manage_hostel"><i class="fa fa-wheelchair"></i> Hostel</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/morris.html"><i class="fa fa-map"></i> Category</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/morris.html"><i class="fa fa-map"></i> Member</a></li>            
          </ul>
        </li>


        


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Announcement</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>assets/pages/charts/chartjs.html"><i class="fa fa-wheelchair"></i> Notice</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/morris.html"><i class="fa fa-map"></i> Event</a></li>
            <li><a href="<?php echo base_url();?>assets/pages/charts/morris.html"><i class="fa fa-map"></i> Holiday</a></li>            
          </ul>
        </li>





        
        
        
        
        
        
        
        
        
        
        
        
        
        <li><a href="<?php echo base_url()?>Super_admin/manage_visitor"><i class="fa fa-medium"></i><span style="padding-left:1px;">Visitor Information</span></a></li>          
        
        
        
        
        
        
        



        




        




        
        
<!--<li><a href="<?php echo base_url()?>Super_admin/add_class">Add Class</a></li>   -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_subject">Add Subject</a></li>   -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_section">Add Section</a></li>   -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_syllabus">Add Syllabus</a></li>   -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_assignment">Add Assignment</a></li>   -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_routine">Add Routine</a></li>  -->




<!--<li><a href="<?php echo base_url()?>Super_admin/add_exam">Add Exam</a></li>     -->

<!--<li><a href="<?php echo base_url()?>Super_admin/add_exam_schedule">Add Exam Schedule</a></li>     -->








        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <i class="fa fa-street-view"></i>
            <span>Academic</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>-->
        

<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        
        <li class="treeview">
          <a href="#">
          <i class="fa fa-edit"></i>
            <span>Attendence</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>-->
        

<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Exam</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>-->
        

<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Mark</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        -->

<!--        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Message</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>-->
        


<!--        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>-->








<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>-->
        
        
        
        
<!--        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->














<!--

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Mail/SMS</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Online Exam</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        -->
        
        
        
        
        
        
        
        
        
<!--        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Payroll</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Library</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
-->












<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transport</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Hostel</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Account</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        -->
        
        

        
        
        
        
        


<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Announcement</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>-->
        
        
        

        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Visitor Information</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Administrator</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>-->

        


        
        
        
        
        
        
        
        
        
        
        
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        
        -->
        
        
        
        
        
        
        
        
        
        <li class="treeview">
            <a href="#">
                <i class="fa fa-list"></i>
                <span style="padding-left:1px; color:yellow;font-weight:bold;">Reports</span>
                <span class="pull-right-container">
<!--                    <span class="label label-primary pull-right">4</span>-->
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Student Information</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Students Fees Collection</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Students Attendance Summary</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Student Marks Sheet</a></li>
                
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Employee Information</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Attendance Summary</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Payment Summary</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Book List</a></li>

                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Book Issue</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> SMS Delivery Report</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Email Delivery Report</a></li>
            </ul>
        </li>



        
        






        



        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="zcontent">
      
                    <!-- content starts -->
                    <!--=================================================-->                    
                    <!--=================================================-->                     
                    <?php
                    echo $ADMINMAINCONTENT;
                    ?>
                    <!--=================================================-->                    
                    <!--=================================================-->                     
                    <!-- content ends -->
      
  </div>
  <!-- /.content-wrapper -->
  

  
  
  
  
  
  
  
  
  
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="#">SIT Solution</a>.</strong> All rights
    reserved.
  </footer>
  
  
  
  
  
  
  
  
  
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>





<!-- DataTable with Button Export Options-->
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js" type="text/javascript"></script>



<!-- CK Editor -->
<!--<script src="../../bower_components/ckeditor/ckeditor.js"></script>-->
<script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<!--<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/amd/bootstrap3-wysihtml5.all.js"></script>












<script>
$(document).ready(function(){
    
    
    
    
//function checkDelete()
//{
//    var chk = confirm("Are you sure to Delete this ?");
//    if(chk)
//       {
//        return true;
//       } 
//       else
//       {
//        return false;
//       } 
//}    
    
    
    
    
    
    
    
    
      //testing
      //alert("working - Read js from Main Page");    
      
//ckeditor
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('question')
    CKEDITOR.replace('explanation')
    CKEDITOR.replace('content')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
//ck end here

      //Date picker
      //===========
      //var datepicker = $.fn.datepicker.noConflict(); // return $.fn.datepicker to previously assigned value
      //$.fn.bootstrapDP = datepicker;                 // give $().bootstrapDP the bootstrap-datepicker functiona
      //$.fn.datepicker.defaults.format = "dd-mm-yy";



///////////////////////////////////////////////////////////////////////////////    
function myFunction2() {
    //x.style.background = "yellow";
    //alert("working.......");
}
//////////////////////////////////////////////////////////////////////////////





$(document).ready(function() {
    //alert("Working in mainpage datepicker function...");

      $('.datepicker').datepicker({
        dateFormat: 'dd-mm-yy',
        autoclose: true,
        todayBtn: true,
        todayHighlight: true,
      })
} );





//$(document).ready(function() {
    //alert("Working in mainpage Dataable function...");
    
    
//$('#student-table').DataTable();  
// 
// var buttons = new $.fn.dataTable.Buttons(table, {
//     buttons: [
//       'copyHtml5',
//       'excelHtml5',
//       'csvHtml5',
//       'pdfHtml5'
//    ]
//}).container().appendTo($('#buttons'));






   /* $('#management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        
        "order": [[ 1, "desc" ]]
        
        
        
    } );*/





//student-attendence-table
////////////////////////////////////////////////////////////////////////////////
    $('#student-attendence-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
    } );
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
    $('#syllabus-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
    } );
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
    $('#subject-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
    } );
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
    $('#class-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
    } );
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
    $('#management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 1, "desc" ]]
    } );
////////////////////////////////////////////////////////////////////////////////
/*   $('#student-management-table').DataTable( {
        "columnDefs": [
            {
                "targets": [ 0 ],   //ID
                "visible": true,
                "searchable": true
            },
            {
                "targets": [ 1 ],  //PHOTO
                "visible": true
            },
            {
                "targets": [ 2 ],  //NAME
                "visible": true
            },
            {
                "targets": [ 3 ],  //student_register_no
                "visible": false
            },
            {
                "targets": [ 4 ],  //ROLR
                "visible": true
            },
            {
                "targets": [ 5 ],  //EMAIL
                "visible": true
            },
            {
                "targets": [ 6 ],  //STATUS
                "visible": true
            }
        ],
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
              extend: 'pdfHtml5',
              orientation: 'landscape',   //landscape give you more space
              pageSize: 'A3',
              customize: function (doc) 
              { doc.defaultStyle.fontSize = 8;       //2,3,4,etc 
                doc.styles.tableHeader.fontSize = 8; //2,3,4,etc 
              },               
              exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6  ]
                }
            },
        ],
        "order": [[ 1, "desc" ]]
    } );*/
////////////////////////////////////////////////////////////////////////////////
/*    $('#parent-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 1, "desc" ]]
    } );*/
////////////////////////////////////////////////////////////////////////////////
    $('#teacher-management-table').DataTable( {
        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 1, "desc" ]]
    } );
////////////////////////////////////////////////////////////////////////////////
















/////////////////////////////////////////////////////////
//------------------STUDENT ATTENDENCE-----------------//
/////////////////////////////////////////////////////////
///////////
      //alert("work");
      var zcounter=0;
      
      $('#class_id').change(function(){
          zcounter = zcounter+1;
          //alert("You change class_id");
          //alert("zcounter is " + zcounter);
      }); 
      $('#section_id').change(function(){
          zcounter = zcounter+1;
          //alert("You change class_id");
          //alert("zcounter is " + zcounter);
                if(zcounter = 2)
                   {
                    //alert("zcounter is now " + zcounter);
                    $('.btn-warning')
                    .removeClass('disabled')
                    .prop('disabled', false)
                    .text('Click Me to Start Attendence');
                    var xclassval="";
                    var xclasstext="";
                    var xsectionval="";
                    var xsectiontext="";
                    
  
   xclassval = jQuery("#class_id option:selected").val();
   xclasstext = jQuery("#class_id option:selected").text(); 
   
   xsectionval = jQuery("#section_id option:selected").val();
   xsectiontext = jQuery("#section_id option:selected").text(); 
   
   alert ("Value of Class is : " + xclassval + "\n" + 
           "Text of Class is  : "  + xclasstext + "\n" + 
           "Value of Section is : " + xsectionval + "\n" + 
           "Text of Section is  : "  + xsectiontext); 

   //$xsectionval = jQuery("#section_id option:selected").val();
   //$xsectiontext = jQuery("#section_id option:selected").text(); 
   //alert ("Value of Section is : " + $xsectionval + "\n" + "Text of Section is  : "  + $xsectiontext); 

   //sending class and section to controll with ajax


            
// $.ajax({
//     type: "POST",
//     url: "<?php// echo base_url();?>Super_admin/add_student_attendence",
//     async: false,
//     dataType: 'text',
//     processData: false,
//     data: {
//            input: JSON.stringify(IVRInstant.data), 
//            name: xclassval
//           },
//     /*var data_to_be_sent = {'searchvalue' : $('#inputtext').val() }; */
//     //dataType: 'json',
//     /*data: "class=$xclassval&section=$xsectionval",*/
//     success: function(data){
//        alert( "Data Saved: " + data );
//     }
//});






// Ajax post
//$(document).ready(function() {
    //alert("I am ready");
//$(".submit").click(function(event) {
event.preventDefault();

var classval   = xclassval;               //$("input#name").val();
var sectionval = xsectionval;           //$("input#pwd").val();
////alert(classval);
////alert(sectionval);

jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "/Super_admin/add_student_attendence",
dataType: 'json',
data: {class: classval, section: sectionval},
success: function(data) {
    if(data)
    {
         //$('#result').innerHTML(data);
         $('#result').html(data);
    }
    else
    {
         //$('#result').innerHTML("something wrong");
         $('#result').html("something wrong");
    }
//if (res)
//{
//// Show Entered Value
//alert("success");
//jQuery("div#result").show("<?php echo $data->class_id;?>");
//jQuery("div#valueclass").html("<?php echo $data->section_id;?>");
//jQuery("div#valuesection").html(res.section_id);
//}
}
//error: function(ts) { console.log(ts.responseText) }
});
//});
//});













































































   //
   //$xclasstext = jQuery("#class_id option:selected").text(); 
   //alert ("Text of Class is  : "  + $xclasstext);
                    
//var xclass={};
//
//$('#class_id option').function(){
//    xclass[$(this).val()] = $(this).text();
//    alert(xclass[$(this).val()]);
//};                    
                    
                    
                    zcounter=0;
                   }
          zcounter=0
      }); 
///////////






///////////////////////////////////////////////////////////////////////////
//    $('#management-table').DataTable( {
//        dom: 'lBfrtip', //THIS WILL SOLVE THE HIDDEN DROPDOWN ISSUE
////        buttons: [
////            'copyHtml5',
////            'excelHtml5',
////            'csvHtml5',
////            'pdfHtml5'
////        ],
//buttons : [
//    { 
//    'copyHtml5',
//    'excelHtml5',
//    'csvHtml5',
//        
//    extend : 'pdfHtml5',
//    customize: function(doc) {
//
//        //ensure doc.images exists
//        doc.images = doc.images || {};
//
//        //build dictionary
//        doc.images['avatar'] = getBase64Image(avatar);
//        //..add more images[xyz]=anotherDataUrl here
//
//        //when the content is <img src="avatar.png">
//        //remove the text node and insert an image node
//        for (var i=1;i<doc.content[1].table.body.length;i++) {
//            if (doc.content[1].table.body[i][0].text == '<img src="avatar.png">') {
//                delete doc.content[1].table.body[i][0].text;
//                doc.content[1].table.body[i][0].image = 'avatar';
//            }
//        }
//    },
//    exportOptions : {
//        stripHtml: false
//    }
//}        
//        "order": [[ 1, "desc" ]]
//        
//        
//        
//    } );
//
//
//
//
//
//
//
//
//function getBase64Image(img) {
//    var canvas = document.createElement("canvas");
//    canvas.width = img.width;
//    canvas.height = img.height;
//    var ctx = canvas.getContext("2d");
//    ctx.drawImage(img, 0, 0);
//    return canvas.toDataURL("student_image/png");
//}





    
    
//SUCCESS MESSAGE DISPLAY START    
//$('#smsg').css("border-radius", "10px");
//$('#smsg').css("background", "green");
//$('#smsg').css({"font-size" : "15px", "color" : "#FFFFFF"});
//$('#smsg').css("padding", "10px 10px 10px 10px");
//$('#smsg').css({"display" : "block", "text-align" : "center"});
////$('#smsg').css("width", message_length*10);
//$('#smsg').css("margin", "0 auto");
//
//$("#smsg").animate({opacity: 1}, 0009, function() {
//        $(this).animate({opacity: 0}, 9000);
//  });
//SUCCESS MESSAGE DISPLAY END HERE    

    
        
//} );







//   function readURL(input) {
//       alert("Image View Activated...");
//            if (input.files && input.files[0]) {
//                var reader = new FileReader();
//                reader.onload = function (e) {
//                    $('#blah')
//                        .attr('src', e.target.result);
//                };
//                reader.readAsDataURL(input.files[0]);
//            }
//        }




//   function readURL(input) {
//       alert("Image View Activated...");
//            if (input.files && input.files[0]) {
//                var reader = new FileReader();
//                reader.onload = function (e) {
//                    $('#blah')
//                        .attr('src', e.target.result);
//                };
//                reader.readAsDataURL(input.files[0]);
//            }
//        }



///*$(document).ready(function() {
//    $('#example').DataTable( {
//        dom: 'Bfrtip',
//        buttons: [
//            {
//                extend: 'copyHtml5',
//                exportOptions: {
//                    columns: [ 0, ':visible' ]
//                }
//            },
//            {
//                extend: 'excelHtml5',
//                exportOptions: {
//                    columns: ':visible'
//                }
//            },
//            {
//                extend: 'pdfHtml5',
//                exportOptions: {
//                    columns: [ 0, 1, 2, 5 ]
//                }
//            },
//            'colvis'
//        ]
//    } );
//} );/*
///////////////////////////////////////////////////////////////////////////
//        "columnDefs": [
//            {
//                "targets": [ 2 ],
//                "visible": false,
//                "searchable": false
//            },
//            {
//                "targets": [ 3 ],
//                "visible": false
//            }
//        ]
///////////////////////////////////////////////////////////////////////////


//button select all or cancel AWESOME CHECK-BOX
//$("#select-all").click(function () {
//alert("testing");


    $('#select-all').change(function() {
        if($(this).is(":checked")) {
            var returnVal = confirm("Are you sure?");
            $(this).attr("checked", returnVal);
        }
        //$('#textbox1').val($(this).is(':checked'));        
    });
    
$("#box420").click(function () {    
    //alert("You click checkbox");
    //var all = $("input.select-all")[0];
    //all.checked = !all.checked
    //var checked = all.checked;
    //$("input.select-item").each(function (index,item) {
    //    item.checked = checked;
    //});
});

    //href="<?php// echo base_url()?>Super_admin/manage_student"
    
    
    
    
    $('#dashboard_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/index2";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    $('#student_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_student";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });

    $('#parent_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_parent";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });

    $('#teacher_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_teacher";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });

    $('#user_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_user";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    

    $('#staff_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_staff";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });

    
    //class_li
    $('#class_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_class";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //subject_li
    $('#subject_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_subject";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //section_li
    $('#section_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_section";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //syllabus_li
    $('#syllabus_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_syllabus";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
      
    //assignment_li
    $('#assignment_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_assignment";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //routine_li
    $('#routine_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_routine";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //exam_li    
    $('#exam_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_exam";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //exam_schedule_li
    $('#exam_schedule_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_exam_schedule";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //grade_li
    $('#grade_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_exam_grade";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    //exam_attendence_li
    $('#exam_attendence_li').mouseover(function(){
    var url = "<?= base_url();?>Super_admin/manage_exam_attendence";
    $.post( url)
    .done(function(data) {
        $('#zcontent').html(data);
    });    
    });
    
    
    
    
    
    
    
    
    
    
    
    
      
  });
</script>

</body>





</html>

