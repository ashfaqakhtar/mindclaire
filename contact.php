<?php
$title = "Mindcleair | Contact";
$meta = "";
$metakeyword = "";
include "header.php";
?>

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

    .contact-banner h1 {
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

    .location-sect h1 {
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
                <h1>Contact</h1>
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
                <h1 class="heading">Schedule a <span>free 15 minute Consultation</span></h1>
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
                <img class="img-fluid" src="./assets/img/ritu-1.webp" alt="">
            </div>
        </div>
        <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12  d-flex align-items-center">
            <div class="contat-details">
                <h1>
                    <h2 class="blue-text">Ritu Goel <span class="purple-text-md">MD.</span></h2>
                </h1>
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
                        <p>ritu.goel@mindclaire.com</p>
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
                <h1>Location</h1>
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


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="index-ai-cta">
                <a class="white_cta" href="ai_wellness">
                    <svg style="    position: absolute; top: -26px; right: 194px;" xmlns="http://www.w3.org/2000/svg"
                        width="52" height="49" viewBox="0 0 52 49" fill="none">
                        <g clip-path="url(#clip0_1272_95)">
                            <path
                                d="M39.1941 23.737L34.3884 24.965C29.4825 26.2192 25.7662 30.1318 24.8439 35.0046L24.0017 39.4594L23.1595 34.9981C22.2371 30.1253 18.5209 26.2192 13.6216 24.9585L8.81592 23.7305L13.6283 22.5286C18.5276 21.3006 22.2639 17.4272 23.2197 12.574L24.0017 8.6156L24.7837 12.5674C25.7395 17.4206 29.4758 21.3006 34.3817 22.5286L39.1941 23.7305V23.737Z"
                                fill="#FFC700" />
                            <path
                                d="M48.6987 38.5972L45.731 39.3549C42.7032 40.1322 40.404 42.549 39.8358 45.5537L39.3145 48.3036L38.7931 45.5472C38.225 42.5425 35.9258 40.1257 32.9047 39.3484L29.937 38.5907L32.9047 37.846C35.9324 37.0883 38.2384 34.6976 38.8266 31.6995L39.3078 29.2565L39.789 31.6995C40.3772 34.6976 42.6898 37.0948 45.7176 37.8526L48.692 38.5972H48.6987Z"
                                fill="#FFC700" />
                            <path
                                d="M18.7548 9.33401L15.7872 10.0917C12.7594 10.869 10.4601 13.2858 9.89199 16.2905L9.37064 19.0405L8.8493 16.284C8.28117 13.2793 5.98192 10.8625 2.96081 10.0852L-0.00683594 9.32748L2.96081 8.58284C5.9886 7.82513 8.29454 5.43445 8.88272 2.43629L9.36396 -0.00665283L9.8452 2.43629C10.4334 5.43445 12.746 7.83166 15.7738 8.58937L18.7481 9.33401H18.7548Z"
                                fill="#FFC700" />
                            <path
                                d="M46.2524 26.4348C46.2524 25.1153 47.3486 24.0441 48.6987 24.0441C50.0489 24.0441 51.145 25.1153 51.145 26.4348C51.145 27.7542 50.0489 28.8254 48.6987 28.8254C47.3486 28.8254 46.2524 27.7542 46.2524 26.4348Z"
                                fill="#FFC700" />
                            <path
                                d="M9.37744 32.9928C9.37744 31.6733 10.4736 30.6021 11.8237 30.6021C13.1739 30.6021 14.27 31.6733 14.27 32.9928C14.27 34.3122 13.1739 35.3835 11.8237 35.3835C10.4736 35.3835 9.37744 34.3122 9.37744 32.9928Z"
                                fill="#FFC700" />
                            <path
                                d="M43.3916 20.3535C43.3916 19.635 43.9865 19.0471 44.7284 19.0471C45.4703 19.0471 46.0652 19.635 46.0652 20.3535C46.0652 21.072 45.4636 21.6599 44.7284 21.6599C43.9932 21.6599 43.3916 21.072 43.3916 20.3535Z"
                                fill="#FFC700" />
                            <path
                                d="M4.625 37.6958C4.625 36.9773 5.22655 36.3894 5.96178 36.3894C6.697 36.3894 7.29855 36.9773 7.29855 37.6958C7.29855 38.4143 6.697 39.0022 5.96178 39.0022C5.22655 39.0022 4.625 38.4143 4.625 37.6958Z"
                                fill="#FFC700" />
                            <path
                                d="M47.6895 16.1273C47.6895 15.5786 48.144 15.141 48.6987 15.141C49.2535 15.141 49.708 15.5852 49.708 16.1273C49.708 16.6695 49.2535 17.1136 48.6987 17.1136C48.144 17.1136 47.6895 16.6695 47.6895 16.1273Z"
                                fill="#FFC700" />
                            <path
                                d="M15.6069 41.9285C15.6069 41.3798 16.0614 40.9421 16.6162 40.9421C17.171 40.9421 17.6255 41.3863 17.6255 41.9285C17.6255 42.4706 17.171 42.9148 16.6162 42.9148C16.0614 42.9148 15.6069 42.4706 15.6069 41.9285Z"
                                fill="#FFC700" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1272_95">
                                <rect width="51.145" height="48.3036" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>AI Mental Wellness
                    <svg style="    position: absolute; bottom: -22px; right: -20px;" xmlns="http://www.w3.org/2000/svg" width="52" height="49" viewBox="0 0 52 49" fill="none">
                        <path
                            d="M28.6943 20.4646L25.7266 21.2223C22.6988 21.9996 20.3996 24.4164 19.8314 27.4211L19.3101 30.171L18.7888 27.4145C18.2206 24.4099 15.9214 21.993 12.9003 21.2157L9.93262 20.458L12.9003 19.7134C15.9281 18.9557 18.234 16.565 18.8222 13.5668L19.3034 11.1239L19.7846 13.5668C20.3728 16.565 22.6855 18.9622 25.7133 19.7199L28.6876 20.4646H28.6943Z"
                            fill="#FFC700" />
                        <path
                            d="M36.9129 25.5292L35.3619 25.9252C33.7795 26.3314 32.5778 27.5946 32.2809 29.1649L32.0084 30.6021L31.7359 29.1615C31.439 27.5911 30.2373 26.328 28.6584 25.9218L27.1074 25.5258L28.6584 25.1366C30.2408 24.7406 31.446 23.4912 31.7534 21.9242L32.0049 20.6475L32.2564 21.9242C32.5638 23.4912 33.7725 24.744 35.3549 25.14L36.9094 25.5292H36.9129Z"
                            fill="#FFC700" />
                        <path
                            d="M9.37744 32.9928C9.37744 31.6733 10.4736 30.6021 11.8237 30.6021C13.1739 30.6021 14.27 31.6733 14.27 32.9928C14.27 34.3122 13.1739 35.3835 11.8237 35.3835C10.4736 35.3835 9.37744 34.3122 9.37744 32.9928Z"
                            fill="#FFC700" />
                        <path
                            d="M4.625 37.6958C4.625 36.9773 5.22655 36.3894 5.96178 36.3894C6.697 36.3894 7.29855 36.9773 7.29855 37.6958C7.29855 38.4143 6.697 39.0022 5.96178 39.0022C5.22655 39.0022 4.625 38.4143 4.625 37.6958Z"
                            fill="#FFC700" />
                        <path
                            d="M15.6069 41.9285C15.6069 41.3798 16.0614 40.9421 16.6162 40.9421C17.171 40.9421 17.6255 41.3863 17.6255 41.9285C17.6255 42.4706 17.171 42.9148 16.6162 42.9148C16.0614 42.9148 15.6069 42.4706 15.6069 41.9285Z"
                            fill="#FFC700" />
                    </svg>

                </a>
            </div>
        </div>
    </div>
</div>



<?php
include "footer.php";
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