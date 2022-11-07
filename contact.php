<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php
    include('./partials/header.php')
    ?>
    <!-- Header End -->

    <!-- Contact Top Content Section Begin -->
    <section class="contact-content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cc-text set-bg" data-setbg="img/contact-content-bg.jpg">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-4">
                                <div class="section-title">
                                    <h2>Location</h2>
                                    <p>Get directions to our event center</p>
                                </div>
                                <div class="cs-text">
                                    <div class="ct-address">
                                        <span>Address:</span>
                                        <p>01 Pascale Springs Apt. 339, NY City <br />United State</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span>Phone:</span>
                                            (+12)-345-67-8910
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            info.colorlib@gmail.com
                                        </li>
                                    </ul>
                                    <div class="ct-links">
                                        <span>Website:</span>
                                        <p>https://conference.colorlib.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cc-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105718.20476932525!2d-118.28504975143346!3d34.10298127166687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6badc8521ad%3A0x7ad323479ca23922!2sNortheast%20Los%20Angeles%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1579884986183!5m2!1sen!2sbd" height="580" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-hover">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-hover-inner">
                                <h5>01 Pascale SP Apt. 339</h5>
                                <p>NewYork City, US</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Top Content Section End -->

    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact Us By Email!</h2>
                        <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="comment-form contact-form">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Messages"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->

    <!-- Footer Section Begin -->
    <?php
    include('./partials/footer.php')
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>