<?php

How to integrate razorpay payment gateway in codeigniter
Ask Question

up vote
4
down vote
favorite
2
Hi i am trying to integrate razorpay payment gateway in codeigniter. The code that I'm using is

View Code

<?php echo form_open_multipart('user/addcredit/'); ?>
    <div class="form-group">
        <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="razorpay_key">
        </script>
    </div>
<?php echo form_close(); ?>
Controller code

class User extends CI_Controller
{
    public function addcredit()
    {
        require_once (APPPATH . 'base_url()/litehires/assets/razorpay-php/Razorpay.php');

        use Razorpay\Api\Api;

        $api = new Api('rzp_test_KEY_ID', ''rzp_test_KEY_ID');

        if (isset($_POST['razorpay_payment_id']) === false) {
            die("Payment id not provided");
        }

        $id = $_POST['razorpay_payment_id'];

        echo json_encode($payment->toArray());
    }
}
What I got to know is that I cannot use 'use' keyword inside the function. But I'm not able to find alternative way to do the integration. I haven't use composer, so would appreciate if anyone could please tell me how to integrate this payment without composer

php codeigniter payment-gateway payment gateway
shareimprove this question
edited Oct 19 '16 at 7:40
asked Oct 19 '16 at 7:02

Sam
748
1
require_once (APPPATH . 'base_url()/litehires/assets/razorpay-php/Razorpay.php'); base_url() in this context shouldn't work. Maybe typo, but you also have sufficient quote character in $api = new Api('rzp_test_KEY_ID', ''rzp_test_KEY_ID');. Check here how to use integrated libraries: Put use Some\Library at the top of the file, above class. – Tpojka Oct 19 '16 at 8:43
add a comment
1 Answer
active oldest votes
up vote
1
down vote
You can easily put the use keyword at the top of that file. If there is already an Api class clashing with this, you can do the following:

<?php

require_once (APPPATH . 'base_url()/litehires/assets/razorpay-php/Razorpay.php');

use Razorpay\Api as RazorpayApi;

class User extends CI_Controller
{
    public function addcredit()
    {
        $api = new RazorpayApi('rzp_test_KEY_ID', 'rzp_test_KEY_ID');
This will include the file, then use the class, so it is available below in the controller.

Disclaimer: I work for Razorpay.

#########################################################################
        
        
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDz713vJIEYg66Gg9AVGuKy7KNcpkdTIWs",
    authDomain: "smart-arc-143708.firebaseapp.com",
    databaseURL: "https://smart-arc-143708.firebaseio.com",
    projectId: "smart-arc-143708",
    storageBucket: "smart-arc-143708.appspot.com",
    messagingSenderId: "244454239703"
  };
  firebase.initializeApp(config);
</script>


################
        
https://console.firebase.google.com/project/invertible-pipe-144311/overview

        
https://firebase.google.com/docs/web/setup?authuser=0
        