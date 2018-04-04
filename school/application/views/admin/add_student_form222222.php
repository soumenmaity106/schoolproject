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
        Student
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
            
            
    <form class="form-horizontal" action="<?php echo base_url();?>super_admin/save_student" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="student_name">Name<span class="req">*</span></label>
                            <input required type="text" class="form-control" name="student_name" id="student_name" placeholder="Enter Student Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="student_gurdian">Gurdian</label>
                            <input required type="text" class="form-control" name="student_gurdian" id="student_gurdian" placeholder="Enter Gurdian Name">
                        </div>

                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input required type="text" onblur="myFunctionz()" name="student_dob" id="student_dob" class="form-control pull-right" >
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="student_gender">Gender</label>
                            <select name="student_gender" id="student_gender" class="form-control">
                                <option>Select Gender</option>                      
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="student_blood_group">Blood Group</label>
                            <select name="student_blood_group" id="student_blood_group" class="form-control">
                                <option>Select Blood Group</option>                                    
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                                <option>AB+</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_relegion">Religion</label>
                            <select name="student_relegion" id="student_relegion" class="form-control">
                                <option>Select Religion</option>                                  
                                <option>Hinduism</option>
                                <option>Islam</option>
                                <option>Buddhism</option>
                                <option>Jainism</option>
                                <option>Christianity</option>
                                <option>Sikhism</option>
                                <option>Other</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_email">Email</label>
                            <input type="text" class="form-control" name="student_email" id="student_email" placeholder="Enter Student Email">
                        </div>

                        <div class="form-group">
                            <label for="student_phone">Phone</label>
                            <input type="text" class="form-control" name="student_phone" id="student_phone" placeholder="Enter Phone No">
                        </div>

                        <div class="form-group">
                            <label for="student_address">Address</label>
                            <textarea class="form-control" rows="4" name="student_address" id="student_address"></textarea>                            
                        </div>

                        <div class="form-group">
                            <label for="student_country">Country</label>
                            <select name="student_country" id="student_country" class="form-control">
                                <option>Select Country</option>                                    
                                <option>India</option>
                                <option>Bangladesh</option>
                                <option>Sri Lanka</option>
                                <option>Bhutan</option>
                                <option>China</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_state">State</label>
                            <select name="student_state" id="student_state" class="form-control">
                                <option>Select State</option>                                    
                                <option>West Bengal</option>
                                <option>Bihar</option>
                                <option>Uttar Prasdesh</option>
                                <option>Karnataka</option>
                                <option>Gujarat</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_city">City</label>
                            <select name="student_city" id="student_city" class="form-control">
                                <option>Select City</option>                                    
                                <option>Kolkata</option>
                                <option>Delhi</option>
                                <option>Mumbai</option>
                                <option>Patna</option>
                                <option>Lucknow</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_class">Class<span class="req">*</span></label>
                            <select required name="student_class" id="student_class" class="form-control">
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
                            <label for="student_section">Section<span class="req">*</span></label>
                            <select name="student_section" id="student_section" class="form-control required">
                                <option>Select Section</option>                                 
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>               
                        </div>

                        <div class="form-group">
                            <label for="student_group">Group</label>
                            <div class="form-group">
                                <select name="student_group" id="student_group" class="form-control">
                                    <option>Select Group</option>                                     
                                    <option>Art</option>
                                    <option>Science</option>
                                    <option>Commerce</option>
                                </select>               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="student_opt_subject">Optional Subject</label>
                            <div class="form-group">
                                <select name="student_opt_subject" id="student_opt_subject" class="form-control">
                                    <option>Select Opt Subject</option>                                     
                                    <option>Hindi</option>
                                    <option>Bengali</option>
                                    <option>Math</option>
                                </select>               
                            </div>
                        </div>

                        <div class="form-group">
                            <!--
                            COMBINATION OF REGISTRATION NO. R + FIRST CHAR OF NAME +
                            DD + MM + YY + H + S 
                            -->
                            <label for="student_register_no">Register No<span class="req">*</span></label>
                            <input type="text" class="form-control" name="student_register_no" id="student_register_no" placeholder="Enter Register No.">
                        </div>

                        <div class="form-group">
                            <label for="student_roll_no">Roll<span class="req">*</span></label>
                            <input type="text" class="form-control" name="student_roll_no" id="student_roll_no" placeholder="Enter Roll No.">
                        </div>

                        <div class="form-group">
                          <label for="student_photo">Image Upload</label>
                          <div class="controls">
                              <input type="file" onchange="readURL(this);" class="input-file uniform_on" name="student_photo" id="student_photo">
                          <!--<input type='file' onchange="readURL(this);" />-->
                              <img id="blah" src="../../../image/student_image/100x100.png" alt="your image" />
                          </div>
                        </div> 

                        <div class="form-group">
                            <label for="student_extra_curr">Extra Curricular Activities</label>
                            <input type="text" class="form-control" name="student_extra_curr" id="student_extra_curr" placeholder="Enter Extra Curricular Activities">
                        </div>

                        <div class="form-group">
                            <label for="student_remark">Remarks</label>
                            <textarea class="form-control" rows="4" name="student_remark" id="student_remark"></textarea>                                                        
                        </div>

                        <div class="form-group">
                            <label for="student_username">Username<span class="req">*</span></label>
                            <input type="text" class="form-control" name="student_username" id="student_username" placeholder="Enter Extra Curricular Activities">
                        </div>

                        <div class="form-group">
                            <label for="student_password">Password<span class="req">*</span></label>
                            <input type="password" class="form-control" name="student_password" id="student_password" placeholder="Enter Extra Curricular Activities">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Send & Save</button>
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
