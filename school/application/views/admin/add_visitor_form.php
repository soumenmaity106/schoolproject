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
        Visitor
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
            
            
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_visitor" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="visitor_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="visitor_name" id="visitor_name" placeholder="Enter Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="visitor_email">Email</label>
                            <input type="text" class="form-control" name="visitor_email" id="visitor_email" placeholder="Enter Email">
                        </div>
                        
                        <div class="form-group">
                            <label for="visitor_phone">Phone</label>
                            <input type="text" class="form-control" name="visitor_phone" id="visitor_phone" placeholder="Enter Phone No">
                        </div>
                        
                        <div class="form-group">
                            <label for="visitor_company">Company</label>
                            <input type="text" class="form-control" name="visitor_company" id="visitor_company" placeholder="Enter Company">
                        </div>
                        
                        <div class="form-group">
                            <label for="visitor_comingfrom">Coming From</label>
                            <input type="text" class="form-control" name="visitor_comingfrom" id="visitor_comingfrom" placeholder="Coming From">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="visitor_tomeet_usertype">To Meet User Type</label>
                            <select name="visitor_tomeet_usertype" id="visitor_tomeet_usertype" class="form-control">
                                <option>Select Role</option>                      
                                <option>Moderator</option>
                                <option>Receptionist</option>
                                <option>Librarian</option>
                                <option>Accountant</option>
                                <option>Teacher</option>
                                <option>Student</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="visitor_tomeet">To Meet</label>
                            <input type="text" class="form-control" name="visitor_tomeet" id="visitor_tomeet" placeholder="To Meet">
                        </div>                        
                        

                        <div class="form-group">
                            <label for="visitor_checkin">Check In</label>
                            <input type="text" class="form-control" name="visitor_checkin" id="visitor_checkin" placeholder="Check In time">
                        </div>                        
                        

                        <div class="form-group">
                            <label for="visitor_checkout">Check Out</label>
                            <input type="text" class="form-control" name="visitor_checkout" id="visitor_checkout" placeholder="Check out time">
                        </div>                        
                        
                        <div class="form-group">
                            <label for="visitor_status">Status</label>
                            <input type="text" class="form-control" name="visitor_status" id="visitor_status" placeholder="Check out time">
                        </div>                        
                        
                        
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="col-md-6">

        </div>
    </div>
</section>


<script>
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
////////////////////////////////////////////////////////
function myFunction(x) {
    //alert(x);
    //x.style.background = "yellow";    
    var zr = "R";                           //R
    var zname1 = $('#student_name').val();  //Tanisha
    var zname = zname1.substr(0, 1);        // T
    
    
    var date = new Date();
    //alert((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
    //alert(date.getDate());
    var zday=(date.getDate());
    //alert(zday);

    var zmonth=(date.getMonth()+1);
    //alert(zmonth);
    //var newDate = new Date();
    //alert(newDate);
    
    var zyear1=(date.getFullYear());
    var zyear2=zyear1.toString();
    var zyear = zyear2.substr(2, 2);
    
    
    
    
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    //alert(time);
    var zhour=dt.getHours();
    
    
    var zmin=dt.getMinutes();
    
    
    var zsec=dt.getSeconds();
    
    
    //var zdd = date();
    //alert(zdd);
    
    //var zname = str.substring(zname1, 1,1);
    
    var regnum = zr + zname + zday + zmonth + zyear + zhour + zmin +zsec;
    //"R"+str.substring(1, 1);
    //alert(regnum);
    //regnum = regnum+name;
    //alert("Generated Registration Number ; " + regnum);
    
    x.value=regnum;
    //$('#student_register_no').css("background", "green");
    $('#student_register_no').css({"font-size" : "25px", "color" : "#000000"});
    //$("#student_register_no").prop('disabled', true);
    //$('#student_register_no').css("padding", "10px 10px 10px 10px");

    //alert("working.......");
    //$('#student_name').value(regnum);
    //this.val(regnum);
    //return false;
}

function myFunctionz() {
    //alert("hi");
    //alert(x);
    //x.style.background = "yellow";    
    var zr = "R";                           //R
    var zname1 = $('#student_name').val();  //Tanisha
    var zname = zname1.substr(0, 1);        // T
    
    
    var date = new Date();
    //alert((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
    //alert(date.getDate());
    var zday=(date.getDate());
    //alert(zday);

    var zmonth=(date.getMonth()+1);
    //alert(zmonth);
    //var newDate = new Date();
    //alert(newDate);
    
    var zyear1=(date.getFullYear());
    var zyear2=zyear1.toString();
    var zyear = zyear2.substr(2, 2);
    
    
    
    
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    //alert(time);
    var zhour=dt.getHours();
    
    
    var zmin=dt.getMinutes();
    
    
    var zsec=dt.getSeconds();
    
    
    //var zdd = date();
    //alert(zdd);
    
    //var zname = str.substring(zname1, 1,1);
    
    var regnum = zr + zname + zday + zmonth + zyear + zhour + zmin +zsec;
    //"R"+str.substring(1, 1);
    //alert(regnum);
    //regnum = regnum+name;
    //alert("Generated Registration Number ; " + regnum);
    
    //x.value=regnum;
    $('#student_register_no').val(regnum);
    $('#student_register_no').css({"font-size" : "20px", "color" : "#000000"});
    $("#student_register_no").prop("readonly", true);
    //$("#user_role_name").val(abcd);
    //$('#student_register_no').css("background", "green");
    //////////$('#student_register_no').css({"font-size" : "25px", "color" : "#000000"});
    //$("#student_register_no").prop('disabled', true);
    //$('#student_register_no').css("padding", "10px 10px 10px 10px");

    //alert("working.......");
    //$('#student_name').value(regnum);
    //this.val(regnum);
    //return false;
}

        
$("#qstudent_dob").blur(function(){
    var zr = "R";                           //R
    var zname1 = $('#student_name').val();  //Tanisha
    var zname = zname1.substr(0, 1);        // T
    
    
    var date = new Date();
    //alert((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
    //alert(date.getDate());
    var zday=(date.getDate());
    //alert(zday);

    var zmonth=(date.getMonth()+1);
    //alert(zmonth);
    //var newDate = new Date();
    //alert(newDate);
    
    var zyear1=(date.getFullYear());
    var zyear2=zyear1.toString();
    var zyear = zyear2.substr(2, 2);
    
    
    
    
    var dt = new Date();
    var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    //alert(time);
    var zhour=dt.getHours();
    
    
    var zmin=dt.getMinutes();
    
    
    var zsec=dt.getSeconds();
    
    
    //var zdd = date();
    //alert(zdd);
    
    //var zname = str.substring(zname1, 1,1);
    
    var regnum = zr + zname + zday + zmonth + zyear + zhour + zmin +zsec;
    //"R"+str.substring(1, 1);
    alert(regnum);
    //regnum = regnum+name;
    //alert("Generated Registration Number ; " + regnum);
    
    ////x.value=regnum;
    //$('#student_register_no').css("background", "green");
    ////$('#student_register_no').css({"font-size" : "25px", "color" : "#000000"});
    ////$("#student_register_no").prop('disabled', true);
    //$('#student_register_no').css("padding", "10px 10px 10px 10px");

    //alert("working.......");
    //$('#student_name').value(regnum);
    //this.val(regnum);

});     
        
        
        
        
        
        
        
        
        
</script>
