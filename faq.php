<?php
$title = "Mindclaire | Faq's";
$meta = "";
$metakeyword = "";
include "header.php";
?>

<style>
    .nav a {
        color: black;
    }

    .faq-banner {
        margin: 120px 0px 50px 0px;
        background: url(./assets/img/faq-banner.png);
        background-size: 100%;
        background-position: center;
        border-radius: 30px;
        background-repeat: no-repeat;
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
    .card-header {
        background: #ffffff;
        border-radius: 20px !important;
    }

    .accordian .card_1 {
        /* box-shadow: 0px 0px 20px #d4d4d4; */
        /* background: #f4f4f4 !important; */
        font-family: "Lato", arial, sans-serif !important;
        background: #fff;
        margin-bottom: 20px;
        border: 1px solid #d9d9d9;
        border-radius: 16px !important;
        /* float: left; */
        width: 100% !important;
    }

    .accordian .card_1 .card-header h3 {
        font-family: "Lato", arial, sans-serif !important;
        cursor: pointer;
        font-size: 14px;
        color: #000000;
        position: relative;
        /* background-color: #3343a2; */
        margin: 0;
        padding: 15px 20px;

    }

    .accordian .card_1 .card-header {
        position: relative;
        border-bottom: unset;
    }

    .accordian .card_1 .card-header span {
        font-family: "Lato", arial, FontAwesome, sans-serif !important;
        position: absolute;
        right: 20px;
        top: 37%;
        /* float: right; */
        height: 23px;
        width: 23px;
        color: white;
        background-color: #3C0A6D;
        border-radius: 50%;
        text-align: center;
        line-height: 16px;
        font-size: 14px;
        font-weight: 400;
        padding: 4px 0px 0px 0px;
    }

    .accordian .card_1 .card-body {
        padding: 20px 38px;
    }

    .accordian .card_1 .card-body {
        display: none;
    }

    /*open one card by default*/
    .accordian .card_1:nth-child(1) .card-body {
        display: block;
    }

    .accordian .card_1 .card-body p {
        font-family: "Lato", arial, sans-serif !important;
        color: #000000;
        font-size: 16px !important;
        /* line-height: 14px; */
        margin: 0px;
    }

    .accordian .card_1 .card-body li {
        font-family: "Lato", arial, sans-serif;
        color: #000000;
        font-size: 15px;
        padding-top: 6px;
    }

    .accordian {
        max-width: 100%;
        display: block;
        /* margin: 100px auto; */
    }
</style>


<div class="container mobile_display_none">
    <div class="row">
        <div class="col-md-12">
            <div class="faq-banner">
                <h1>FAQ’s</h1>
            </div>
        </div>
    </div>
</div>

<section class="faq-mob mobile_display_block">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="about-mob-title">
                    <h1>FAQ's</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-12">


            <div class="accordian">


                <div class="card_1">
                    <div class="card-header">
                        <h3><b>Do you accept insurance?</b></h3>
                        <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="card-body active">
                        <p>I currently do not accept insurance directly. However, I can provide you with a superbill
                            that you may submit to your insurance company for possible reimbursement. Please check
                            with your insurer to understand your coverage for out-of-network providers.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>How are you different from an in-network provider?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>As an out-of-network provider, I offer personalized and integrative psychiatric care that
                            combines the best of conventional medicine with holistic treatments. This allows for
                            more flexible and extended sessions, personalized treatment plans, and a focus on
                            overall well-being rather than just symptom management.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>Do you prescribe stimulants?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>Yes, I do prescribe stimulants when clinically appropriate as part of a comprehensive
                            treatment plan. All prescriptions are based on a careful evaluation and are aimed at
                            achieving the best possible outcomes with careful monitoring for safety and
                            effectiveness.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>What should I expect during the initial consultation?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>During the initial 15-minute consultation, we will discuss your current challenges and
                            treatment goals. This is a great opportunity for us to determine if we are a good fit
                            for each other. It’s also your time to ask any questions about my practice and approach.
                        </p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>Can I book appointments online?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>Yes, you can book appointments directly through our website using the booking widget.
                            This allows you to choose a time and date that are most convenient for you, and you will
                            receive immediate confirmation of your appointment.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>What is your cancellation policy?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>I understand that unforeseen circumstances can arise. If you need to cancel or reschedule
                            your appointment, please do so at least 48 hours in advance to avoid being charged for
                            the session.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>Do you offer telehealth services?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>Yes, I offer telehealth services to patients who are in California. This is a convenient
                            way to access care from the comfort of your own home or any private space. Telehealth
                            appointments are available for both initial evaluations and follow-up sessions.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>How long does each session last?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>Initial evaluations typically last 90 minutes. This allows us adequate time to thoroughly
                            evaluate your history and needs. Follow-up appointments can be either 25 or 50 minutes,
                            depending on the complexity and needs.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>What ages do you treat?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>I provide services to children, adolescents, and adults. My practice is equipped to
                            address the unique challenges faced by each age group with tailored interventions.</p>
                    </div>
                </div>

                <div class="card_1">
                    <div class="card-header">
                        <h3><b>How do I prepare for my first appointment?</b></h3>
                        <span class="fa fa-angle-up"></span>
                    </div>
                    <div class="card-body">
                        <p>Before your first appointment, please fill out the forms sent to you and gather any
                            previous medical or therapy records that might be relevant. It’s helpful to write down
                            any symptoms, concerns, and goals you wish to discuss during our session.</p>
                    </div>
                </div>


            </div>


        </div>
    </div>
</div>


<div class="spacing"></div>


<?php
include 'footer.php';
?>