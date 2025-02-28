<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/icons/Fevicon.svg" type="image/x-icon">


    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Jquery cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <!-- slick slider css  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- fontawsome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>
        <?php echo $title; ?>
    </title>
    <style>
        .logo img{
            height: 70px;
        }
    </style>
    <meta name="description" content=" <?php echo $meta; ?>" />
    <meta name="keywords" content="<?php echo $metakeyword; ?>">
</head>


<div class="container nav_mobile_display_none">
    <div class="row">
        <header class="fixed-top mt-3">
            <div class="container ">
                <div class="row align-items-center justify-content-evenly">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index"><img class="logo-icon" src="assets/img/MindClaire_Logo_White.svg"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <ul class="nav justify-content-end align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services">Services</a>
                            </li>
                            <li class="nav-item res-tab">
                                <a class="nav-link" href="#">Resources <i class="fa-solid fa-chevron-down fa-xs"></i></a>
                                <div class="dropdown-res">
                                    <ul>
                                        <li><a href="blog">Blog</a></li>
                                        <li><a href="media-mentions">Media Mentions</a></li>
                                        <li><a href="resources">Resource</a></li>
                                        <li><a href="events">Events</a></li>
                                        <li><a href="press-release">Press Releases</a></li>
                                    </ul>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link faq-cta" href="faq">FAQ’s</a>
                            </li>
                            <li class="">
                                <a class=" dark_cta" href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<div class="container nav_mobile_display_block mob-nav-main fixed-top">
    <div class="row ">
        <div class="col-sm-12">
            <div class="mob-logo-nav">
                <div class="mob-logo">
                    <div class="mob-logo-box">
                        <a href="index">
                            <img class="-mob-logo-icon"
                                src="./assets/img/icons/dr.ritu-mindcleair-logo.svg">
                        </a>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="ham-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <navbar class="mob-nav">
                <div class="mob-link-box">
                    <ul class="mob-link">
                        <li><a class="" href="about">About</a></li>
                        <li><a class="" href="services">Services</a></li>
                        <li><a class="" href="blog">Blog</a></li>
                        <li><a class="" href="media-mentions">Media Mentions</a></li>
                        <li><a class="" href="faq">Faq's</a></li>
                        <li><a class="" href="contact">Contact</a></li>
                    </ul>
                </div>
            </navbar>
        </div>
    </div>
</div>