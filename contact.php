<? include_once "header.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //create body
    $body = "Name: {$_POST['sendername']}\n\Contact Number: {$_POST['telephone']}
    \n\nSubject: {$_POST['sendersubject']}\n\nMessage: {$_POST['sendermessage']}";

    //Make it no longer than 70 characters long
    $body = wordwrap($body, 70);

    //send mail
    mail("realolamilekan@gmail.com", "Contact Form Submission", $body, "From: {$_POST['emailaddress']}" );

    //Print Message
    echo '<p> Thank you for contacting us, We will reply you shortly.</p>';
}else{
    echo '<p tyle="font-weight: bold; color: #C00"> Your form could not be submitted, please try again later!</p>';
}
?>

<div class="clearfix"></div>

<section class="page-title-6 text-center contactbimg">
    <div class="container">
        <div class="row aboutus">

            <h2>Contact Auxano</h2>
            <h6 style="color:white; font-size: 30px;  line-height: 1.75;">Be Next!</h6>

        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end page title -->

<section class="sec-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-12 col-xs-12 margin-bottom">

                <h3 class="font-weight-6 ">REQUEST FOR SERVICE</h3>
                <div class="text-box white">
                    <div class="smartforms-modal-body">
                        <div>
                            <div class="smart-forms smart-container transparent wrap-full">
                                <div class="form-body no-padd">
                                    <form method="post" action="#" id="smart-form">

                                        <div class="margin-bottom-2">
                                            <label class="field prepend-icon">
                                                <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                                <span class="field-icon"><i class="fa fa-user"></i></span>
                                            </label>
                                        </div><!-- end section -->

                                        <div class="margin-bottom-2">
                                            <label class="field prepend-icon">
                                                <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                                            </label>
                                        </div><!-- end section -->


                                        <div class="margin-bottom-2">
                                            <label class="field prepend-icon">
                                                <input type="text" name="telephone" id="telephone" class="gui-input" placeholder="Enter Telephone...">
                                                <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                                            </label>
                                        </div><!-- end section -->


                                        <div class="margin-bottom-2">
                                            <label class="field prepend-icon">
                                                <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                                <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                                            </label>
                                        </div><!-- end section -->

                                        <div class="margin-bottom-2">
                                            <label class="field prepend-icon">
                                                <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                                <span class="field-icon"><i class="fa fa-comments"></i></span>
                                                <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>
                                            </label>
                                        </div><!-- end section -->


                                        <div class="result"></div><!-- end .result  section -->

                                        <!-- end .form-body section -->
                                        <div class="text-left margin-top-1">
                                            <button type="submit" data-btntext-sending="Sending..." class="button btn-primary">Submit</button>
                                            <button type="reset" class="button"> Cancel </button>
                                        </div><!-- end .form-footer section -->
                                    </form>
                                </div><!-- end .form-body section -->
                            </div><!-- end .smart-forms section -->
                        </div><!-- end .smart-wrap section -->
                    </div>
                </div><!-- end .smart-wrap section -->
                <!-- end .smart-forms section -->
            </div>
            <!--end item-->

            <div class="col-md-5 col-sm-12 col-xs-12 text-left">
                <h4 class="font-weight-6 uppercase">Address Info</h4>
                <h6>Auxano Solutions Technology</h6>
                <p>21, Abeokuta street, Anifowose, Ikeja, Lagos<br />
                    Telephone: +234 708 655 6010<br />
                </p>
                <p><a href="#" class="primary">E-mail: Auxanosolutions@info.net</a></p>
                <p>Working Days: Mon-Fri</p>
                <p>Working Hours: 8am-5pm</p>

                <div class="margin-top-1">
                    <div id="map_extended" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4436.865639645713!2d3.3410988311081686!3d6.603364938826822!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25bce86350a7a420!2sAuxano%20Solutions%20Technology%20Ltd!5e0!3m2!1sen!2sng!4v1574097307962!5m2!1sen!2sng" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div><!-- end map -->

            </div>
            <!--end item-->



        </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- end section -->
<br>

<div class="clearfix"></div>
<? include_once "footer.php" ?>