<?php
$title = "MindClaire Contact";
$meta = "Contact MindClaire for personalized mental health support. Schedule a free 15-minute consultation with Dr. Ritu Goel to discuss treatment goals and explore tailored psychiatric services.";
$metakeyword = "";
include "header.php";
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
    .nav a {
        color: black;
    }

    .contact-banner {
        margin: 120px 0px 50px 0px;
        background: url(./assets/img/contact-banner.jpg);
        background-size: 100%;
        background-position: center;
        border-radius: 30px;
        background-repeat: no-repeat;
    }

    .contact-banner h2 {
        padding: 210px 0px 222px 120px;
        color: #ffffff;
        font-size: 50px;
        font-family: Ringift;
    }

    .blue-text {
        color: #3C0A6D;
        font-family: Ringift;
        font-size: 50px;
    }

    .purple-text-md {
        color: #984AD7;
        font-family: "Inter", sans-serif;
        font-size: 20px;
    }

    .ritu-bio h6 {
        font-size: 18px;
        margin: 0px;
        font-family: "Inter", sans-serif;
    }

    .ritu-bio p {
        font-size: 19px;
        font-family: "Inter", sans-serif;
    }

    .ritu-image img {
        height: 500px;
        width: 409px;
        border-radius: 30px;
    }

    .black-text {
        color: #000000;
        font-size: 35px;
        font-family: "Inter", sans-serif;
        font-weight: 500;
    }

    .purple-text-about {
        color: #984AD7;
        font-size: 35px;
        font-family: "Inter", sans-serif;
        font-weight: 500;
    }

    .about-slider h1 {
        text-align: center;
    }

    .about-slider img {
        border-radius: 30px;
    }

    .about-middle-sect-img img {
        float: right;
        height: 435px;
        border-radius: 30px;
    }

    .good-fit {
        padding: 60px 0px 60px 0px;
    }

    .good-fit {
        background: url(./assets/img/purp-rec.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 30px;
    }

    .good-fit h1 {
        color: white;
        text-align: center;
        font-size: 30px;
        font-family: Ringift;
    }

    .good-fit h2 {
        color: white;
        font-size: 16px;
        text-align: center;
    }

    .good-fit-cta {
        margin: 20px 0px 0px 0px;
    }

    .good-fit-cta a {
        color: #000000;
        text-decoration: none;
        background: #ffffff;
        padding: 6px 15px 8px 20px;
        border-radius: 30px;
    }

    .credin {
        text-align: center;
    }

    .credin-list ul li a {
        color: #000000;

    }

    .small-space {
        padding: 10px 0px;
    }
</style>
<style>
    .contact-bio-image img {
        /* width: 406px; */
        /* height: 409px; */
        border-radius: 20px;
        /* float: right; */
    }

    .office-add {
        display: flex;
        gap: 20px;
    }

    .cont-sect-row {
        display: flex;
        justify-content: space-evenly;
    }

    .logo-color {
        color: #3C0A6D;
    }

    .location-sect h2 {
        text-align: center;
    }

    .g-map iframe {
        width: 100%;
        height: 400px;
        border-radius: 20px;
    }

    .disabled {
        cursor: not-allowed;
        background: #ccc !important;
    }
</style>

<div class="container mobile_display_none">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-banner">
                <h2>Contact</h2>
            </div>
        </div>
    </div>
</div>

<section class="contact-mob mobile_display_block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="about-mob-title">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container" id="contact-box">
    <div class="row">
        <div class="col-md-12 col-lg-10 mx-auto">
            <div class="calnder-box">
                <h2 class="heading">Schedule a <span>free 15 minute Consultation</span></h2>
                <p>I offer a free 15-min consultation call to learn more about you and your treatment goals to see
                    if we
                    would be a good fit. Please be sure to read over my services page to learn more about my
                    appointment
                    types and fees before booking your call.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-7 mx-auto">
                <form action="" method="post">
                    <div class="row mb-2">
                        <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="first_name" required class="form-control"
                                placeholder="First name*">
                        </div>
                        <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="last_name" required class="form-control" placeholder="Last name*">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                            <input type="email" name="email_id" required class="form-control" placeholder="Email*">
                        </div>
                        <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                            <input type="tel" id="mobile_code" name="phone_number" required class="form-control"
                                placeholder="Phone Number*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="conct-form col-md-12 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="message_box" id="exampleFormControlTextarea1" rows="5"
                                placeholder="What problem led you seek help and what do you hope to get out of treatment?*"
                                required></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <p>I have reviewed MindClaire's Fees as posted</p>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="fee_review" id="flexRadioDefault1"
                            value="yes" checked onclick="yes();">
                        <label class="form-check-label" for="flexRadioDefault1">Yes, I have reviewed the fee list on the
                            Services page and I am willing and able to pay the fees.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="fee_review" id="flexRadioDefault2" value="no"
                            onclick="no();">
                        <label class="form-check-label" for="flexRadioDefault2">No, I have not reviewed the fees or am
                            not able or willing to pay them. I will seek out a different psychiatrist and not be
                            contacted.<span id="fee"><a href="services#serv-appont">Please see our fee structure
                                    here.</a></span></label>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <p>Acknowledgement</p>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="acknowledge" id="flexCheckDefaultYes"
                                required>
                            <label class="form-check-label" for="flexCheckDefaultYes">I acknowledge that an initial free
                                phone call will not establish a provider-patient relationship and the intention of this
                                call is to offer guidance regarding treatment track and answer general questions, rather
                                than offer specific medical advice.</label>
                        </div>
                    </div>
                    <div class="row mb-2 mt-4">
                        <div class="col-12">
                            <div class="g-recaptcha mb-2" data-sitekey="6Leb7wErAAAAAAb8BewzAqgfyODCoTTy712uOOw3"></div>

                            <button type="submit" name="submit" id="send" class="form-send dark_cta">Send</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="spacing"></div>

<div class="container">
    <div class="row cont-sect-row">
        <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12 ">'
            <div class="contact-bio-image">
                <img class="img-fluid" src="./assets/img/ritu-1.webp" alt="Ritu Goel MD, DFAACAP - Integrative Psychiatrist">
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12  d-flex align-items-center">
            <div class="contat-details">
                <h2 class="blue-text">Ritu Goel <span class="purple-text-md">MD, DFAACAP</span></h2>
                <div class="office-add">
                    <div>
                        <i class="fa-solid fa-location-dot logo-color"></i>
                    </div>
                    <div>
                        <h6>Office Address</h6>
                        <p>5150 E. Pacific Coast Hwy, 2nd Floor, <br> Long Beach, CA 90804</p>
                    </div>
                </div>
                <div class="office-add">
                    <div>
                        <i class="fa-regular fa-envelope logo-color"></i>
                    </div>
                    <div>
                        <h6>Email</h6>
                        <!--<p>ritu.goel@mindclaire.com</p>-->
                        <img src="assets/img/emailid.png" width="50%" style="margin-bottom:20px; margin-left:-4px">
                    </div>
                </div>
                <div class="office-add">
                    <div>
                        <i class="fa-solid fa-phone logo-color"></i>
                    </div>
                    <div>
                        <h6>Phone</h6>
                        <p>562- 448-2222</p>
                    </div>
                </div>
                <div class="office-add">
                    <div>
                        <i class="fa-solid fa-fax"></i>
                    </div>
                    <div>
                        <h6>FAX</h6>
                        <p>562-661-9707</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spacing"></div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="location-sect">
                <h2>Location</h2>
            </div>
        </div>
    </div>
    <div class="small-space"></div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="g-map text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3316.137635398423!2d-118.13845381921612!3d33.78294376297269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd31c0da01afa3%3A0xe2747d65d1d9e27a!2s5150%20E%20Pacific%20Coast%20Hwy%2C%20Long%20Beach%2C%20CA%2090804%2C%20USA!5e0!3m2!1sen!2sin!4v1715865692285!5m2!1sen!2sin"
                    width="" height="" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="spacing"></div>


<div class="spacing"></div>

<?php
include 'footer.php';
?>

<?php
if (isset($_POST['submit'])) {
    $mailto = "bipin.singh@occamsadvisory.com, ritu.goel@mindclaire.com";
    $fromEmail = "info@mindclaire.com";

    // Google reCAPTCHA Secret Key
    $secretKey = "6Leb7wErAAAAAL49Gw92HH9We46gc-59_ViGGkGq";
    $captchaResponse = $_POST["g-recaptcha-response"];

    // Verify reCAPTCHA
    $verifyURL = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $secretKey,
        "response" => $captchaResponse
    ];

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded",
            "method" => "POST",
            "content" => http_build_query($data)
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($verifyURL, false, $context);
    $responseKeys = json_decode($result, true);

    if (!$responseKeys["success"]) {
        echo "<script>alert('reCAPTCHA verification failed. Please try again.');</script>";
        exit;
    }

    // Sanitize input data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email_id = htmlspecialchars($_POST['email_id']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $what_prob_lead = htmlspecialchars($_POST['message_box']);
    $fee_review = isset($_POST['fee_review']) ? $_POST['fee_review'] : '';
    $acknowledge = isset($_POST['acknowledge']) ? 'Yes' : 'No';

    $subject = "Enquiry from Home page";

    // Email body I will receive
    $message = "First Name: " . $first_name . "\n\n"
        . "Last Name: " . $last_name . "\n\n"
        . "Email Id: " . $email_id . "\n\n"
        . "Phone Number: " . $phone_number . "\n\n"
        . "Message From Client: " . $what_prob_lead . "\n\n"
        . "Reviewed Fee List: " . $fee_review . "\n\n"
        . "Acknowledgement: " . $acknowledge . "\n\n";

    // Email headers
    $headers = "From: " . $fromEmail;

    // PHP mailer function
    $result1 = mail($mailto, $subject, $message, $headers);

    if ($result1) {
        echo "<script>alert('Your message was sent successfully!');</script>";
    } else {
        echo "<script>alert('Sorry! Message was not sent, try again later.');</script>";
    }
}
?>
<script>

    document.getElementById('fee').style.display = 'none';
    function yes() {
        document.getElementById('fee').style.display = 'none';
        $("#send").attr('disabled', false);
        $("#send").removeClass('disabled');


    }
    function no() {
        document.getElementById('fee').style.display = 'inline-flex';
        $("#send").attr('disabled', true);
        $("#send").addClass('disabled');

    }
</script>

<?php

if (isset($_POST['submit'])) {
    $mailto = "bipin.singh@occamsadvisory.com, ritu.goel@mindclaire.com";
    $fromEmail = "info@mindclaire.com";

    // Sanitize input data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email_id = htmlspecialchars($_POST['email_id']);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $what_prob_lead = htmlspecialchars($_POST['message_box']);
    $fee_review = isset($_POST['fee_review']) ? $_POST['fee_review'] : '';
    $acknowledge = isset($_POST['acknowledge']) ? 'Yes' : 'No';

    $subject = "Enquiry from Contact page";

    // Email body I will receive
    $message = "First Name: " . $first_name . "\n\n"
        . "Last Name: " . $last_name . "\n\n"
        . "Email Id: " . $email_id . "\n\n"
        . "Phone Number: " . $phone_number . "\n\n"
        . "Message From Client: " . $what_prob_lead . "\n\n"
        . "Reviewed Fee List: " . $fee_review . "\n\n"
        . "Acknowledgement: " . $acknowledge . "\n\n";

    // Email headers
    $headers = "From: " . $fromEmail;

    // PHP mailer function
    $result1 = mail($mailto, $subject, $message, $headers);


    if ($result1) {
        echo "<script>alert('Your message was sent successfully!');</script>";
    } else {
        echo "<script>alert('Sorry! Message was not sent, try again later.');</script>";
    }
}
?>