<?php
$title = "MindClaire |Care that measures what truly matters. ";
$meta = "Learn effective strategies to empower introverts in the workplace, fostering inclusivity and leveraging diverse strengths";
$metakeyword = "";
include "header.php";
?>

<div class="head-space"></div>


<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col-md-8">
            <div class="blog-details-box">

                <div class="detail-blog-head">
                    <h1>Care that measures what truly matters</h1>
                    <p>by Dr. Ritu Goel | 9th January, 2026 | Press Releases | 0 comments</p>
                </div>

                <div class="blog-detail-img">
                    <img class="img-fluid" src="./assets/img/pressrelease/pr_33.webp" alt="pr_33">
                </div>

                <div class="blog-detail-body">
                    <p> IN a Forbes Business Council article, Dr. Ritu Goel joins fellow healthcare leaders in examining the shift toward value-based care—where success is measured not by volume, but by meaningful outcomes that reflect real patient well-being. She emphasizes the importance of tracking progress across mental health, emotional regulation, sleep, daily functioning, and continuity of care, demonstrating how early support and ongoing monitoring transform care from reactive to proactive.This approach reflects MindClaire’s mission of delivering outcomes-driven, preventative mental wellness, reminding us that care only creates real value when it truly improves lives.
                    </p>


                    <br>



                    <a href="https://www.forbes.com/councils/forbesbusinesscouncil/2026/01/09/how-healthcare-leaders-are-leading-the-shift-to-value-based-care/"
                        target="_blank" rel="noopener noreferrer">
                        Read More
                    </a>

                    <div class="edu-comment-box">
                        <div class="edu-box-title">
                            <h1><span class="black-text">Submit a </span><span class="purple-text-about">Comment</span>
                            </h1>

                            <p>Your email address will not be published. Required fields are marked *</p>

                        </div>

                        <form action="" method="post">
                            <div class="row">
                                <div class="conct-form col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="message_box" id="exampleFormControlTextarea1"
                                        rows="5" placeholder="Comment*" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="first_name" required class="form-control"
                                        placeholder="First name*">
                                </div>
                                <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="last_name" required class="form-control"
                                        placeholder="Last name*">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                                    <input type="email" name="email_id" required class="form-control"
                                        placeholder="Email*">
                                </div>
                                <div class="conct-form col-md-6 col-sm-12 col-xs-12">
                                    <input type="url" name="website_url" required class="form-control"
                                        placeholder="Website*">
                                </div>
                            </div>


                            <div class="row mb-2 mt-4">
                                <div class="col-12">
                                    <button type="submit" name="submit" id="send"
                                        class="form-send dark_cta">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="blog-right">
                <h1>Recent Posts</h1>
                <div class="recent-link-box">
                    <a href="care-that-measures-what-truly-matters">Care that measures what truly matters</a>
                    <br>
                    <br>
                    <a href="shares-integrative-insomnia">Dr. Ritu Goel, MD, shares integrative insomnia care-CBT-I plus
                        holistic supports</a>
                    <br>
                    <br>
                    <a href="guidance-on-catapres-safety">Dr. Ritu Goel Shares Guidance on Catapres Safety</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spacing"></div>
<?php
include 'footer.php';
?>
<style>
    .nav a {
        color: #000000;
    }
</style>



<?php

if (isset($_POST['submit'])) {
    // $mailto = "bipin.singh@occamsadvisory.com, ritu.goel@mindclaire.com";
    $mailto = "ritu.goel@mindclaire.com";
    $fromEmail = "info@mindclaire.com";

    // Sanitize input data
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email_id = htmlspecialchars($_POST['email_id']);
    $website_url = htmlspecialchars($_POST['website_url']);
    $comment_on_post = htmlspecialchars($_POST['message_box']);


    $subject = "Media Mention Page | Conmmet Section";

    // Email body I will receive
    $message = "First Name: " . $first_name . "\n\n"
        . "Last Name: " . $last_name . "\n\n"
        . "Email Id: " . $email_id . "\n\n"
        . "Website URL: " . $website_url . "\n\n"
        . "Comment On Post: " . $comment_on_post . "\n\n";

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