<?php
$title = "MindClaire | Faq's";
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

<!-- <div class="container-fluid">
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
</div> -->


<?php
include 'footer.php';
?>