<footer>
    <div class="container-fluid">
        <div class="row d-flex justify-content-end">
            <div class="col-md-3">
                <div class="left-footer">
                    <img class="img-fluid" src="./assets/img/MindClaire_Logo.png" alt="Mindclaire-holistic mental wellness logo">
                </div>
            </div>
            <div class="col-md-9 right-footer">
                <div class="row">
                    <div class="right-top-footer">
                        <div class="inner-footer col">
                            <h4><a href="about">About</a></h4>
                        </div>
                        <div class="inner-footer col">
                            <h4><a href="services">Services</a></h4>
                        </div>
                        <div class="inner-footer col">
                            <h4><a href="blog">Blog</a></h4>
                            <h4><a href="media-mentions">Media Mentions</a></h4>
                            <h4><a href="resources">Resources</a></h4>
                            <h4><a href="events">Events</a></h4>
                            <h4><a href="press-release">Press Release</a></h4>
                        </div>
                        <div class="inner-footer col">
                            <h4><a href="contact">Contact</a></h4>
                        </div>
                        <div class="inner-footer col">
                            <h4>Office Address</h4>
                            <p>5150 E. Pacific Coast Highway, 2nd Floor, <br> Long Beach, CA 90804</p>
                        </div>
                        <div class="inner-footer col">

                        </div>
                        <div class="inner-footer col">
                            <h4>Connect With Us</h4>
                            <div class="footer-icons">
                                <a href="https://www.facebook.com/profile.php?id=61560276094752&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.tiktok.com/@mindclaire_?_t=ZP-8tPrGNlLrtG&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="https://www.instagram.com/mindclaire/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://youtube.com/@mindclaire?si=FA9swMC9rXvUkVoQ" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/company/mindclaire/" target="_blank"><i
                                        class="fa-brands fa-linkedin"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 right-bottom-footer">
                        <hr>
                        <div class="footer-terms">
                            <div>
                                <h4><a href="terms-of-use">Terms of Use</a></h4>
                            </div>
                            <div>
                                <h4><a href="acceptable-use-policy">Acceptable Use Policy</a></h4>
                            </div>
                            <div>
                                <h4><a href="privacy-policy">Privacy Policy</a></h4>
                            </div>
                            <div>
                                <h4><a href="medical-disclaimer">Medical Disclaimer</a></h4>
                            </div>
                            <div>
                                <h4>© <script>document.write(new Date().getFullYear())</script> MindClaire. All Right Reserved.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="spacing"></div>


<script>
    const headerRow = document.querySelector('header .row');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            headerRow.classList.add('navbar-bg');
        } else {
            headerRow.classList.remove('navbar-bg');
        }
    });
</script>

<script>
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $(".logo-icon").attr("src", "https://mindclaire.com/assets/img/icons/dr.ritu-mindcleair-logo.svg");
        } else {
            $(".logo-icon").attr("src",
                "assets/img/MindClaire_Logo_White.svg");

        }
    });
</script>

<script>
    $(document).ready(function () {
        $(".card-header").click(function () {
            // self clicking close
            if ($(this).next(".card-body").hasClass("active")) {
                $(this).next(".card-body").removeClass("active").slideUp()
                $(this).children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
            } else {
                $(".card_1 .card-body").removeClass("active").slideUp()
                $(".card_1 .card-header span").removeClass("fa-angle-down").addClass("fa-angle-up");
                $(this).next(".card-body").addClass("active").slideDown()
                $(this).children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
            }
        })
    })
</script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<script src="./assets/js/slick.js"></script>
<script src="./assets/js/tracker.js"></script>


</body>

<script>
    $(document).ready(function () {
        $('.about-slider').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    });
</script>
<script>
    const hamMenu = document.querySelector('.ham-menu');
    const mobNav = document.querySelector('.mob-nav');


    hamMenu.addEventListener('click', () => {
        hamMenu.classList.toggle('mob-active');
        mobNav.classList.toggle('mob-active');
    })
</script>

</html>