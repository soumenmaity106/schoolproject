<section class="page-title ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-bold">Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase">Drop us a line</h2>
            <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form name="contact-form" id="contactForm" action="<?php echo base_url();?>Super_admin/send_contact_us" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input required type="text" name="from_name" style="text-transform:uppercase;" class="validate" id="name">
                                <label for="from_name">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field">
                                <label class="sr-only" for="from_email">Email</label>
                                <input required id="email" type="email" name="from_email" class="validate">
                                <label for="from_email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input required id="phone" type="tel" name="from_phone" class="validate">
                                <label for="from_phone">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="website" type="text" name="from_web" class="validate">
                                <label for="from_web">Your Website</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        <textarea required name="from_message" id="message" class="materialize-textarea"></textarea>
                        <label for="from_message">Message</label>
                    </div>
                    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button text-capitalize mt-30">Send Message</button>
                </form>
            </div>
            <div class="col-md-4 contact-info">
                <address>
                    <i class="material-icons brand-color">&#xE55F;</i>
                    <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103
                        <hr>
                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                            United States of America.</p>
                    </div>
                    <i class="material-icons brand-color">&#xE61C;</i>
                    <div class="phone">
                        <p>Fax: (123) 456-7890<br>
                            Phone: (123) 456-7890</p>
                    </div>
                    <i class="material-icons brand-color">&#xE0E1;</i>
                    <div class="mail">
                        <p><a href="http://trendytheme.net/cdn-cgi/l/email-protection#c3e0"><span class="__cf_email__" data-cfemail="e18788939295cf8d809295a18499808c918d84cf828e8c">[email&#160;protected]</span></a><br>
                            <a href="#">www.yourdomain.com</a></p>
                    </div>
                </address>
            </div>
        </div>
    </div>
</section>


<div id="myMap" class="height-350"></div>
