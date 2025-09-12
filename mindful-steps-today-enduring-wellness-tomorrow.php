<?php
$title = "MindClaire | Dr. Ritu Goel of MindClaire featured in Forbes: Insights on empowering introverts in the workplace.";
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
                    <h1>Mindful steps today. Enduring wellness tomorrow. - Dr. Ritu Goel, Mindclaire.</h1>
                    <p>by Dr. Ritu Goel | July 23, 2025 | Press Releases | 0 comments</p>
                </div>

                <div class="blog-detail-img">
                    <img class="img-fluid" src="./assets/img/pressrelease/pr-forbes.webp" alt="pr-forbes">
                </div>

                <div class="blog-detail-body">

                    <p>At MindClaire, Dr. Ritu Goel applies the same principles strong leaders use—clarity, purpose, and
                        long-term focus—to mental health. We help you move beyond quick fixes, guiding you to build
                        habits and strategies that support lasting emotional well-being.</p>

                    <br>

                    <a target="_blank" class=""
                        href="https://www.forbes.com/councils/forbesbusinesscouncil/2025/07/23/20-ways-leaders-can-get-their-team-to-focus-on-long-term-results/?utm_campaign=Social%20Member%20EPs&utm_content=340250542&utm_medium=social&utm_source=linkedin&hss_channel=lcp-27064223">
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
                    <a href="adhd-in-children">ADHD in Children, Adolescents, and Young Adults: Integrative Psychiatry
                        Treatmentss</a>
                    <br>
                    <br>
                    <a href="integrative-psychiatry-practices">Integrative Psychiatry Practices for Children and Youth
                        with Autism Spectrum Disorder</a>
                    <br><br>
                    <a href="comprehensive-tntegrative-treatment-approach-in-a-child-with-autism">Case Study:
                        Comprehensive Integrative Treatment Approach in a child with autism.</a>
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