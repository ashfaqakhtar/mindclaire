<?php
$title = "Dr Ritu Goel- A Journey of Courage";
$meta = "Explore the inspiring journey of Dr. Ritu Goel, highlighting her courage and commitment to mental health advocacy and care.";
$metakeyword = "";
include "header.php";
?>


  <style>
    /* Responsive 16:9 video wrapper */
    .video {
      position: relative;
      width: 100%;
      max-width: 960px;        /* optional: cap the width */
      margin: 2rem auto;       /* center on page */
      aspect-ratio: 16 / 9;    /* modern responsive approach */
      background: #000;        /* prevents white flash before load */
      overflow: hidden;
      border-radius: 12px;     /* optional: rounded corners */
    }
    .video iframe {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>

<div class="head-space"></div>


<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col-md-8">
            <div class="blog-details-box">

                <div class="detail-blog-head">
                    <h1>Dr Ritu Goel- A Journey of Courage </h1>
                    <p>by Dr. Ritu Goel | May 07, 2024 | Press Releases </p>
                </div>

                <div class="blog-detail-img">
                    <img class="img-fluid" src="./assets/img/pressrelease/pr_03.webp" alt="">
                </div>

                <div class="blog-detail-body">

                    <p>Dr. Ritu Goel discusses the integration of AI and mindfulness techniques in mental health care to
                        enhance patient outcomes and overall well-being.</p>
                    <p>Dr. Ritu Goel highlights how MindClaire integrates AI and mindfulness to deliver innovative
                        mental health care, enhancing accessibility, outcomes, and well-being while exploring AI's
                        potential to transform the field.</p>

                        <br>

                    <div class="video">
                        <iframe src="https://www.youtube.com/embed/zdWsdGiJ8wI?si=ryx-SsZq4UtRm9np"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>






        <div class="col-md-3">
            <?php
            include 'recent_pressrelease.php'
                ?>
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