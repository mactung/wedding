<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>Thiệp cưới online - Mạc Tùng & Lệ Thủy</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<?php
function getImageCdn($url)
{
    $cdnUrl = $_SERVER['SERVER_NAME'] === 'mactung.com' ? 'https://truyenaz.net/cdn' : null;
    if (!$cdnUrl) {
        return $url;
    }
    if (strpos($url, 'http') !== 0) {
        if (strpos($url, '//') !== 0) {
            if (strpos($url, '/') !== 0) {
                $url = 'https://' . $url;
            } else {
                $url = $_SERVER['SERVER_NAME'] . $url;
            }
        } else {
            $url = 'https:' . $url;
        }
    }
    if (substr($url, -3) == 'svg') {
        return $url;
    }
    if (substr($url, 0, 4) == 'http') {
        $url = str_replace('https://', '', $url);
        $url = str_replace('http://', '', $url);
    }
    $baseCdnUrl = $cdnUrl . '/';
    $baseCdnUrl .= $url;
    return $baseCdnUrl . '?v=3';
}

$path = './myexcel.csv';
$rows = [];
$handle = fopen($path, "r");
while (($row = fgetcsv($handle)) !== false) {
    $rows[] = $row;
}
fclose($handle);
$messages = [];
foreach ($rows as $row) {
    $messages[] =  $row;
}
?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="<?php echo (getImageCdn('assets/images/preloader.png')); ?>" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <!-- start of hero -->
        <div class="wpo-box-style">
            <section class="wpo-hero-slider wpo-hero-style-2">
                <div class="wedding-announcement">
                    <div class="couple-text">
                        <!-- <div class="shape-1"><img src="assets/images/slider/shape5.png" alt=""></div> -->
                        <h2 class="wow slideInUp" data-wow-duration="1s">Mac Tung & Le Thuy</h2>
                        <p class="wow slideInUp" data-wow-duration="1.8s">We Are Getting Married Jan 07, 2023</p>
                        <!-- <div class="shape-2"><img src="assets/images/slider/shape6.png" alt=""></div> -->
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" data-background="<?php echo (getImageCdn('assets/images/Film-138.jpg')) ?>">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" data-background="<?php echo (getImageCdn('assets/images/G1770589.jpg')) ?>">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" data-background="<?php echo (getImageCdn('assets/images/G1770744.jpg')) ?>">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->

                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" data-background="<?php echo (getImageCdn('assets/images/Film-63.jpg')) ?>">
                            </div> <!-- end slide-inner -->
                        </div> <!-- end swiper-slide -->
                    </div>
                    <!-- end swiper-wrapper -->

                    <!-- swipper controls -->
                    <div class="swiper-pagination"></div>
                    <div class="next-prev-btn">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end of hero slider -->
        <!-- start wpo-wedding-date -->
        <section class="wpo-wedding-time">
            <h2 class="hidden">some</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="clock-grids">
                            <div id="clock2"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-wedding-date -->
        <!-- start couple-section -->
        <section class="couple-section-s2 section-padding" id="couple">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-xs-12">
                        <div class="couple-area clearfix">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="couple-item">
                                        <div class="couple-img">
                                            <img src="<?php echo (getImageCdn('assets/images/1-1.jpg')) ?>" alt="">
                                        </div>
                                        <div class="couple-text">
                                            <h3>Mạc Trần Tùng</h3>
                                            <p>Có người nói rằng hôn nhân cản trở sự lãng mạn. Không nghi ngờ gì. Mỗi khi bạn có một cuộc lãng mạn, thế nào vợ bạn cũng sẽ can thiệp.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="middle-couple-text">
                                        <h2>
                                            <span class="wow slideInUp" data-wow-duration="1s">L</span>
                                            <span class="wow slideInUp" data-wow-duration="1.2s">o</span>
                                            <span class="wow slideInUp" data-wow-duration="1.3s">v</span>
                                            <span class="wow slideInUp" data-wow-duration="1.4s">e</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="couple-item">
                                        <div class="couple-img">
                                            <img src="<?php echo (getImageCdn('assets/images/1-2.jpg')) ?>" alt="">
                                        </div>
                                        <div class="couple-text">
                                            <h3>Nguyễn Thị Lệ Thủy</h3>
                                            <p>Sau mỗi thành công của người chồng luôn có hình bóng người vợ kề bên.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end couple-section -->

        <!-- start wpo-story-section -->
        <section class="wpo-story-section section-padding" id="story">
            <div class="container">
                <div class="wpo-section-title">
                    <div class="section-title-img">
                        <img src="assets/images/section-title.png" alt="">
                    </div>
                    <h2>Câu chuyện của chúng tôi</h2>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col col-lg-12 col-12">
                        <div class="tab-area">
                            <div class="tablinks">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="Meet-tab" data-bs-toggle="tab" href="#Meet" role="tab" aria-controls="Meet" aria-selected="true">Buổi gặp đầu tiên</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Date-tab" data-bs-toggle="tab" href="#Date" role="tab" aria-controls="Date" aria-selected="false">Buổi hẹn đầu tiên</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Proposal-tab" data-bs-toggle="tab" href="#Proposal" role="tab" aria-controls="Proposal" aria-selected="false">Cầu hôn</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="Engagement-tab" data-bs-toggle="tab" href="#Engagement" role="tab" aria-controls="Engagement" aria-selected="false">Kết hôn</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane in active" id="Meet">
                                    <div class="wpo-story-item">
                                        <div class="wpo-story-img">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-7.jpg')) ?>" alt="">
                                        </div>
                                        <div class="wpo-story-content">
                                            <div class="wpo-story-content-inner">
                                                <span><img src="assets/images/story/1.png" alt=""></span>
                                                <h2>Lần đầu gặp gỡ</h2>
                                                <span>Tháng 9, 2010</span>
                                                <p>Bước chân vào cấp 3, 2 đứa học chung 1 lớp, được xếp ngồi chung 1 bàn. Những lần làm bài kiểm tra đã kéo chúng tôi đoàn kết như một. Những lần hóng hớt và cùng nhau bình luận về câu chuyện bi hài của chúng bạn, cứ thế ngồi cười hô hô ha ha với nhau. Rồi có những tối bỏ bê học hành cùng nhau nghe XoneFM, nhắn tin tám chuyện bằng chiếc nokia cục gạch, chỉ để hỏi đối phương đang làm gì, nghe bài gì, rồi cứ thế lặn mất dần mất đều. Thời niên thiếu chúng tôi đã quý mến nhau như thế.</p>
                                                <div class="border-shape">
                                                    <img src="<?php echo (getImageCdn('assets/images/story/shape.jpg')) ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Date">
                                    <div class="wpo-story-item">
                                        <div class="wpo-story-img">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-20.jpg')) ?>" alt="">
                                        </div>
                                        <div class="wpo-story-content">
                                            <div class="wpo-story-content-inner">
                                                <span><img src="assets/images/story/2.png" alt=""></span>
                                                <h2>Buổi hẹn đầu tiên</h2>
                                                <span>Tháng 3 ,2017</span>
                                                <p>Đó là vào mùa hè năm 2 đại học, tôi có 3 chiếc vé đi Festival, tôi rủ anh trai và cô ấy cùng đi, nhưng cuối cùng tôi được ông anh trai tốt bụng bỏ bom, chỉ có 2 chúng tôi đi với nhau. Sau buổi đi chơi hôm đó, tôi đã nhen nhóm tình cảm với cô ấy, và sau đó liên tục là những buổi cafe, xem film, những tin nhắn đến tối muộn của 2 đứa. Tình yêu đã triển nở để chúng tôi bên nhau suốt 6 năm qua với đủ các cung bậc cảm xúc hỉ, nộ, ái, ố. Cùng nhau trải qua những khó khăn để chúng tôi biết trân quý nhau hơn và cần nhau hơn.</p>
                                                <div class="border-shape">
                                                    <img src="assets/images/story/shape.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Proposal">
                                    <div class="wpo-story-item">
                                        <div class="wpo-story-img">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770589.jpg')) ?>" alt="">
                                        </div>
                                        <div class="wpo-story-content">
                                            <div class="wpo-story-content-inner">
                                                <span><img src="assets/images/story/3.png" alt=""></span>
                                                <h2>Cầu hôn</h2>
                                                <span>Tháng 9 25,2021</span>
                                                <p>Cảm giác hạnh phúc và bình yên nhất chính là được ôm trọn người mình yêu vào buổi tối và nhìn thấy họ đầu tiên vào buổi sáng. Sau khoảng thời gian dài gắn bó, chúng tôi cảm thấy không thể thiếu nhau mỗi ngày, nên tôi đã cầu hôn cô ấy, để cô ấy luôn là cái gối ôm 37 độ cùng tôi đi ngủ và thức dậy mỗi sáng.</p>
                                                <div class="border-shape">
                                                    <img src="assets/images/story/shape.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Engagement">
                                    <div class="wpo-story-item">
                                        <div class="wpo-story-img">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-138.jpg')) ?>" alt="">
                                        </div>
                                        <div class="wpo-story-content">
                                            <div class="wpo-story-content-inner">
                                                <span><img src="assets/images/story/4.png" alt=""></span>
                                                <h2>Kết hôn</h2>
                                                <span>Tháng 1 07,2023</span>
                                                <p>Vượt qua hàng ngàn chân dài xinh đẹp vây quanh, cô ấy đã trở thành vợ của tôi. Xin lỗi các em nhưng anh đã là người có vợ.. Chúc cho cuộc sống hôn nhân của chúng mình luôn cơm lành canh ngọt, yêu thương nhau thắm thiết. Ngày hôm nay chính thức "vơ lấy tội". Mọi người cùng chúc mừng cho chúng tôi nhé!</p>
                                                <div class="border-shape">
                                                    <img src="assets/images/story/shape.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end story-section -->
        <!-- start wpo-video-section -->
        <!-- <section class="wpo-video-section">
            <h2 class="hidden">some</h2>
            <a href="https://www.youtube.com/embed/G-rzE-9zHj8" class="video-btn" data-type="iframe"><i class="fi flaticon-play"></i></a>
        </section> -->
        <!-- end wpo-video-section-->
        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="wpo-section-title">
                        <div class="section-title-img">
                            <img src="assets/images/section-title.png" alt="">
                        </div>
                        <h2>Khoảnh khắc</h2>
                    </div>
                </div>
                <div class="sortable-gallery">
                    <div class="gallery-filters"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-grids gallery-container clearfix">
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-71.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-71.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-31.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-31.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-63.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-63.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>


                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770692.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770692.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>

                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770619.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770619.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-48.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-48.jpg')) ?>" alt class="img img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770723.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770723.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>



                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/L1002048-1.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/L1002048-1.jpg')) ?>" alt class="img img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770445.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770445.jpg')) ?>" alt class=" img img-responsive">

                                        </a>
                                    </div>
                                </div>


                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-7.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-7.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770749.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770749.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770755.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770755.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770737.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770737.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/G1770671.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/G1770671.jpg')) ?>" alt class="img img-responsive">

                                        </a>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="img-holder">
                                        <a href="<?php echo (getImageCdn('assets/images/Film-10.jpg')) ?>" class="fancybox" data-fancybox-group="gall-1">
                                            <img src="<?php echo (getImageCdn('assets/images/Film-10.jpg')) ?>" alt class="img img-responsive">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->

        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section" id="RSVP">
            <div class="container">
                <div class="wpo-contact-section-wrapper">
                    <div class="wpo-contact-form-area">
                        <div class="wpo-section-title">
                            <div class="section-title-img">
                                <img src="assets/images/section-title.png" alt="">
                            </div>
                            <h2>Bạn có thể tham gia tiệc cưới?</h2>
                        </div>
                        <form method="post" class="contact-validation-active" id="contact-form-main">
                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Họ và Tên">
                            </div>
                            <div>
                                <select name="side" class="form-control">
                                    <option disabled="disabled" selected>Bạn là khách của bên nào? </option>
                                    <option>Nhà trai</option>
                                    <option>Nhà gái</option>
                                </select>
                            </div>
                            <div>
                                <select name="guest" class="form-control">
                                    <option disabled="disabled" selected>Số lượng người</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="message" id="message" placeholder="Lời nhắn">
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn-s3">Gửi</button>
                                <div id="c-loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="clearfix error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later.</div>
                            </div>
                        </form>
                        <div class="border-style"></div>
                    </div>
                    <div class="vector-1">
                        <img src="assets/images/contact/1.png" alt="">
                    </div>
                    <div class="vector-2">
                        <img src="assets/images/contact/2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->

        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section">
            <div class="container">
                <div class="wpo-contact-section-wrapper" style="max-width: 100%">
                    <div class="wpo-contact-form-area" style="padding: 60px 40px">
                        <div class=" wpo-section-title">
                        <div class="section-title-img">
                            <img src="assets/images/section-title.png" alt="">
                        </div>
                        <h2>Lời nhắn</h2>
                    </div>
                    <div style="height: 280px; overflow:scroll">
                        <?php
                        foreach ($messages as $message) {
                            echo ('<div>');
                            echo ('<strong>' . $message[0] . ': ' . '</strong>');
                            echo ($message[3]);
                            echo('<hr>');
                            echo ('</div>');                        
                        }
                        ?>
                    </div>
                    <div class="border-style"></div>
                </div>
            </div>
    </div>
    </section>
    <!-- end of wpo-contact-section -->

    <!-- start wpo-event-section -->
    <section class="wpo-event-section section-padding" id="event">
        <div class="container">
            <div class="row">
                <div class="wpo-section-title">
                    <div class="section-title-img">
                        <img src="<?php echo (getImageCdn('assets/images/section-title2.png')); ?>" alt="">
                    </div>
                    <h2>Các sự kiện</h2>
                </div>
            </div>
            <div class="wpo-event-wrap">
                <div class="row">
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="<?php echo (getImageCdn('assets/images/event/3.jpg')) ?>" alt="">
                            </div>
                            <div class="wpo-event-text">
                                <h2>Ăn hỏi</h2>
                                <ul>
                                    <li>Thứ 5, 05/01/2023 <br>
                                        8:00 AM– 11:30 AM</li>
                                    <li>Ngõ 233 Phùng Khoang, TX, HN</li>

                                    <li> <a target="_blank" href="https://goo.gl/maps/HXmNeodavE4zKWya8">Google map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="<?php echo (getImageCdn('assets/images/320846435_2988930307919460_2749564314569954684_n-2.jpg')) ?>" alt="">
                            </div>
                            <div class="wpo-event-text">
                                <h2>Lễ cưới</h2>
                                <ul>
                                    <li>Thứ 5, 05/01/2023 <br>
                                        19:00 - 21:00</li>
                                    <li>Nhà thờ giáo xứ Phùng Khoang</li>

                                    <li> <a target="_blank" href="https://goo.gl/maps/G1zeqSQfuLanSwwz6">Google map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6 col-12">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="<?php echo (getImageCdn('assets/images/event/1.jpg')) ?>" alt="">
                            </div>
                            <div class="wpo-event-text">
                                <h2>Tiệc cưới</h2>
                                <ul>
                                    <li>Thứ 7, 07/01/2023 <br>
                                        11:00 – 14:30</li>
                                    <li>Tầng 3, 229 Tây Sơn, Đống Đa, HN</li>

                                    <li> <a target="_blank" href="https://goo.gl/maps/Z1nGA6VfY8RLYQiw8">Google map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end wpo-event-section -->

    <!-- start of wpo-site-footer-section -->
    <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="widget wpo-service-link-widget">
                            <div class="widget-title">
                                <h3>Contact </h3>
                            </div>
                            <div class="contact-ft">
                                <ul>
                                    <li><i class="fi flaticon-email"></i>mactrantung@gmail.com</li>
                                    <li><i class="fi flaticon-phone-call"></i>0973.222.382</li>
                                    <li><i class="fi flaticon-maps-and-flags"></i>Tầng 3, 229 Tây Sơn, Đống Đa, Hà Nội
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <p class="copyright"> &copy; 2023 Wedding Template. Copy By MacTung. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->
    <!-- color-switcher -->
    <!-- <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                </ul>
            </div>
        </div> -->

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>