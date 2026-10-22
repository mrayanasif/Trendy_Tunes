<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trendy Tunes</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="div.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- icon for chat -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
/* hides horizontal scrollbar */
html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden; 
}
</style>
</head>

<body>
    <!-- PreLoader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <?php
    include_once 'header.php';
    ?>
    <!-- Slider Start -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Slider 01-->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Stay Trendy Stay Tuned </h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Unlock The World Of Sounds <span>Unlock
                                        The World Of Sounds</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#nav"
                                    class="btn oneMusic-btn mt-50">Looking for Something Specific ? <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider 02 -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Trendy Tunes</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Where Music Meets You <span>Where Music Meets You</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#nav" class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End-->

    <!-- navbar for album, artist, year, language START-->
    <section id="nav">
        <div class="navbar ">
            <div class="dropdown">
                <button class="dropbtn">Album</button>
                <div class="dropdown-content">
                    <a href="albums-store.php#song1">Jhal Pari</a>
                    <a href="albums-store.php#song2">Bollywood Hits</a>
                    <a href="albums-store.php#song3">Regional Hits</a>
                    <a href="albums-store.php#song4">Bemathlab</a>
                    <a href="albums-store.php#youngsters">Rebirth</a>
                    <a href="albums-store.php">All Albums</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Artist</button>
                <div class="dropdown-content">
                    <a href="#nusrat">Nusrat Fateh Ali Khan</a>
                    <a href="#atif">Atif Aslam</a>
                    <a href="#youngsters">Youngsters</a>
                    <a href="#aliz">Ali Zafar</a>
                    <a href="#asim">Asim Azhar</a>
                    <a href="#hassan">Hasan Raheem</a>
                    <a href="#hassan">View More</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Year</button>
                <div class="dropdown-content">
                    <a href="albums-store.php">2001-2010</a>
                    <a href="albums-store.php">2011-2020</a>
                    <a href="albums-store.php">2021-2025</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Language</button>
                <div class="dropdown-content">
                    <a href="albums-store.php">Regional Language</a>
                    <a href="albums-store.php">International Language</a>
                </div>
            </div>
        </div>

    </section>
    <!-- navbar for album, artist, year, language END-->

    <!--Nusrat Glimpse START -->
    <section class="latest-albums-area section-padding-100">
        <div class="container wow fadeInUp">
            <div class="row align-items-center mb-5">
                <div class="col-md-5">
                    <img src="img/Cover-Photos/Nusrat Fateh Ali Khan.jpg" alt="Nusrat Fateh Ali Khan"
                        class="img-fluid rounded shadow">
                </div>
                <div class="col-md-7 mt-2 mt-md-0">
                    <div class="section-heading style-2">
                        <p>Legend of Sufi Music</p>
                        <h2>Nusrat Fateh Ali Khan</h2>

                        <p
                            style="font-size: 15px; color: black; font-weight: bolder; text-align: justify; text-transform: capitalize;">
                            legendary Pakistani vocalist and composer, celebrated as the greatest Qawwali singer of all
                            time. Known for his mesmerizing voice and spiritual depth, he brought Sufi devotional music
                            to a
                            global audience. With powerful performances that transcended language and culture, Nusrat
                            collaborated with international artists and inspired generations. His legacy continues to
                            echo
                            through his timeless compositions and recordings, making him a revered figure in world
                            music.
                            His contributions to the genre of Qawwali have left an indelible mark, earning him the title
                            of
                            "Shahenshah-e-Qawwali" (King of Kings of Qawwali). Nusrat's music remains a source of
                            inspiration and spiritual upliftment for millions around the world.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Famous Glimpse Of Nusrat Fateh Ali</h2>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <!-- Video Carousel -->
                <div class="carousel-wrapper" id="videoCarousel">
                    <!-- Video 01-->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/LySZ7dMLyD4?autoplay=1">
                        <img src="img/Cover-Photos/video 01.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Ishq Hai Ishq</div>
                    </div>
                    <!-- Video 02 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/IfhVCbCL3Sw?autoplay=1">
                        <img src="img/Cover-Photos/Saasoun ki maala 01.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Saanson Ki Maala Pe</div>
                    </div>
                    <!-- Video 03 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/i3oMdQcXxP8?autoplay=1">
                        <img src="img/Cover-Photos/v3.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Tumhe Dillagi</div>
                    </div>
                    <!-- Video 04 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/VimwJvPr4po?autoplay=1">
                        <img src="img/Cover-Photos/v4.jpg" class="img-fluid"
                            style="width: 150%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Rashke Qamar</div>
                    </div>
                    <!-- video 05 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/Xd55qWUvL5Y?autoplay=1">
                        <img src="img/Cover-Photos/nusrat thumbnail.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Woh Kitnay Masoom Thai</div>
                    </div>
                    <!-- Video 06 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/SsyX35uTL1Y?autoplay=1">
                        <img src="img/Cover-Photos/dil pe zakham.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Dil Pe Zakham Khatay Hain</div>
                    </div>
                    <!-- Video 07 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/z64Oeh2jyTM?autoplay=1">
                        <img src="img/Cover-Photos/Thumbnail 04.webp" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Halka Suroor Hai</div>
                    </div>
                    <!-- Video 08 -->
                    <div class="video-thumb" data-bs-toggle="modal" data-bs-target="#videoModal"
                        data-video="https://www.youtube.com/embed/dTXbeOzOE38?autoplay=1y">
                        <img src="img/Cover-Photos/v8.jpg" class="img-fluid"
                            style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px;">
                        <div class="video-title">Afreen Afreen</div>
                    </div>
                </div>
            </div>

            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-black">
                        <div class="modal-body p-0 position-relative">
                            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2"
                                data-bs-dismiss="modal"></button>
                            <div class="ratio ratio-16x9">
                                <iframe id="videoFrame" src="" title="YouTube video" allowfullscreen
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                const carousel = document.getElementById('videoCarousel');
                const videoModal = document.getElementById('videoModal');
                const videoFrame = document.getElementById('videoFrame');

                // Modal autoplay logic
                videoModal.addEventListener('show.bs.modal', event => {
                    const trigger = event.relatedTarget;
                    const videoUrl = trigger.getAttribute('data-video');
                    videoFrame.src = videoUrl;
                });

                videoModal.addEventListener('hidden.bs.modal', () => {
                    videoFrame.src = '';
                });

                // Manual scroll with buttons
                function scrollCarousel(direction) {
                    carousel.scrollBy({ left: direction, behavior: 'smooth' });
                }

                // Keyboard support
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'ArrowRight') scrollCarousel(300);
                    else if (e.key === 'ArrowLeft') scrollCarousel(-300);
                });

                // ✅ Clone carousel items 3x for long loop
                const originalItems = [...carousel.children];
                for (let i = 0; i < 3; i++) {
                    originalItems.forEach(item => {
                        const clone = item.cloneNode(true);
                        carousel.appendChild(clone);
                    });
                }

                // ✅ Seamless auto-scroll loop
                let scrollSpeed = 0.5;
                let isHovered = false;

                function autoScroll() {
                    if (!isHovered) {
                        carousel.scrollLeft += scrollSpeed;

                        // When we've scrolled past original content *2*, reset to original start
                        if (carousel.scrollLeft >= (carousel.scrollWidth / 3) * 2) {
                            carousel.scrollLeft = carousel.scrollWidth / 3;
                        }
                    }
                    requestAnimationFrame(autoScroll);
                }

                // Hover pause
                carousel.addEventListener('mouseenter', () => isHovered = true);
                carousel.addEventListener('mouseleave', () => isHovered = false);

                // Initial position in center clone so reset is seamless
                window.onload = () => {
                    carousel.scrollLeft = carousel.scrollWidth / 3;
                    autoScroll();
                };
            </script>
        </div>
        </div>

        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-black">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="ratio ratio-16x9">
                            <iframe id="videoFrame" src="" title="YouTube video" allowfullscreen
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            const videoModal = document.getElementById('videoModal');
            const videoFrame = document.getElementById('videoFrame');

            videoModal.addEventListener('show.bs.modal', event => {
                const trigger = event.relatedTarget;
                const videoUrl = trigger.getAttribute('data-video');
                videoFrame.src = videoUrl;
            });

            videoModal.addEventListener('hidden.bs.modal', () => {
                videoFrame.src = ''; // Stop the video when modal is closed
            });
        </script>
        </div>
    </section>
    <!-- Nusrat Glimpse END-->

    <!-- Artist Page START -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100" id="artist">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Meet Our Famous Stars</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="atif" >
                    <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                        <div class="album-thumb">
                            <a href="albums-store.php#actor"><img src="img/Cover-Photos/Atif cover.jpg" class="img-fluid"></a>
                        </div>
                        <div class="album-info">
                            <h5>Atif Aslam</h5>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="asim">
                    <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="album-thumb">
                        <a href="albums-store.php#actor"><img src="img/Cover-Photos/Asim Azhar Cover.jpg" class="img-fluid"></a>
                        </div>
                        <div class="album-info">
                            <h5>Asim Azhar</h5>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class=" col-12 col-sm-6 col-md-4 col-lg-2" id="aliz" >
                                <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                                    <div class="album-thumb">
                                        <a href="albums-store.php#actor"><img src="img/Cover-Photos/ali zafar cover.jpg" class="img-fluid"></a>
                                    </div>
                                    <div class="album-info">
                                        <h5>Ali Zafar</h5>
                                    </div>
                                </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="rahat">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                                <div class="album-thumb">
                                   <a href="albums-store.php#actor"> <img src="img/Cover-Photos/rahat.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Rahat Fateh Ali Khan</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="hassan" >
                            <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                                <div class="album-thumb">
                                   <a href="albums-store.php#actor"> <img src="img/Cover-Photos/Hassan cover.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Hasan Raheem</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="youngsters" >
                            <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                                <div class="album-thumb">
                                    <a href="albums-store.php#actor"><img src="img/Cover-Photos/talha2.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Youngsters</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="nusrat">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                                <div class="album-thumb">
                                   <a href="albums-store.php#actor"> <img src="img/Cover-Photos/nusrat fateh ali Cover 03.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Nusrat Fateh ALi Khan</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="bilal">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                                <div class="album-thumb">
                                   <a href="albums-store.php#actor"> <img src="img/Cover-Photos/Bilal Saeed.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Bilal Saeed</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="abrar">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                                <div class="album-thumb">
                                   <a href="albums-store.php#actor"> <img src="img/Cover-Photos/abrar ul haq.jpeg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Abrar Ul Haq</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="ed" >
                            <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                                <div class="album-thumb">
                                 <a href="albums-store.php#actor">   <img src="img/Cover-Photos/Ed sheeran.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Ed-Sheeran</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Single Album Area -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-2" id="alan">
                            <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                                <div class="album-thumb">
                                    <a href="albums-store.php#actor"><img src="img/Cover-Photos/Alan Walker Cover.jpg" class="img-fluid"></a>
                                </div>
                                <div class="album-info">
                                    <h5>Alan Walker</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                                <a href="albums-store.php" class="btn oneMusic-btn">Load More <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Artist Page END -->

    <!-- Independence Event START-->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed"
        style="background-image: url(img/bg-img/bgbg04.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/pak4.jpg"
                            style="width: 100%; height: 450px; object-fit: cover; border-radius: 8px;"
                            alt="Featured Artist">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <div class="section-heading white text-left mb-30">
                            <p>UPCOMING EVENT</p>
                            <h2>Independence Day</h2>
                        </div>
                        <p>On 14th August 1947, Pakistan emerged as a free and independent nation after countless
                            sacrifices and an unyielding struggle led by visionary leaders and brave souls. This day
                            reminds us of our rich history, our unity, and the courage that shaped our homeland. Let us
                            honor the legacy of those who gave us freedom and strive to build a better tomorrow.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Ay-Jawan</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Awaz - Ay Jawan (Haroon & Faakhir) Official HD Music Video.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Independence Event END-->
     
    <!-- Songs Start-->
    
    <section class="miscellaneous-area section-padding-100-0">
        <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>New Collection</h2>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <!-- ***** Weekly Top ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Top 6 </p>
                            <h2> Weekly Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Jhol Cover.jpg" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>JHOL</h6>
                                    <p>Mannu</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Jhol  Coke Studio Pakistan  Season 15  Maanu x Annural Khalid-Coke Studio Pakistan-1738258057312 (1).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Cover 03.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Wishes</h6>
                                    <p>Hassan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Hasan Raheem - Wishes ft Talwiinder  Prod by Umair (Official Lyric Video) (1).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/cover 04.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Departure Lane</h6>
                                    <p>Talha Anjum</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Talha Anjum - Departure Lane  Prod. by Umair (Official Music Video).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Ishq.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Ishq</h6>
                                    <p>Faheem Abdullah</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/ISHQ   Faheem Abdullah, Rauhan Malik (Lyrics)  trending-Axjuu-1738258038447.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/pal.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Pal Pal</h6>
                                    <p>Afusic</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Afusic - Pal Pal (Official Music Video) Prod. @AliSoomroMusic.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/pasoori.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Pasoori</h6>
                                    <p>Ali Sethi </p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Coke Studio _ Season 14 _ Pasoori _ Ali Sethi x Shae Gill.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <!-- ***** Pakistani Trends ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Pakistani</p>
                            <h2>Trendy Beats </h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Blockbuster.jpg" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Blockbuster</h6>
                                    <p>Faris Shafi</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Blockbuster  Coke Studio Pakistan  Season 15  Faris Shafi x Umair Butt x Gharwi Group.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/roop.jpg" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Roop</h6>
                                    <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/ROOP - NAYEL  Hasan Raheem (Official Music Video)  LATEST PUNJABI SONGS 2024.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/maand.jpg" style="width: 70px;height: 70px;object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Bayaan</h6>
                                    <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Bayaan  Hasan Raheem  Rovalio - Maand (Lyric Video).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/saaadqay.jpg" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Sadqay</h6>
                                    <p>Aashir Wajahat</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/SADQAY - AASHIR WAJAHAT x NAYEL x NEHAAL NASEEM (MUSIC VIDEO) - KE JANAM PYAAR TUMSE HAI.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/tere sitam.jpg" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Tere Sitam</h6>
                                    <p>Ali Sethi</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Tera Sitam  Ali Sethi (Official Music Video).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/pehli dafa.jpg" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Pehli Dafa</h6>
                                    <p>Atif Aslam </p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Atif Aslam_ Pehli Dafa Song (Video)  Ileana DCruz  Latest Hindi Song 2017  T-Series.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <!-- ***** Indian Trends ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>Indian</p>
                            <h2>Trendy Beats</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/heeriyai.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Heeriye</h6>
                                    <p>Arjit Singh</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Heeriye (Official Video) Jasleen Royal ft Arijit Singh Dulquer Salmaan Aditya Sharma Taani Tanvir.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/saiyarra.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Saiyaara</h6>
                                    <p>Faheem Abdullah</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Saiyaara Title Song  Ahaan Panday, Aneet Padda  Tanishk Bagchi, Faheem A, Arslan N  Irshad Kamil.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/million.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Millionaire</h6>
                                    <p>Honey Singh</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/MILLIONAIRE SONG (Full Video)_ YO YO HONEY SINGH _ GLORY _ LEO _ TEJI SANDHU _ BHUSHAN KUMAR.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/qatal.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Qatal</h6>
                                    <p>Guru Randhawa</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Guru Randhawa - QATAL - (Official Video).mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/ek number.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Shaky</h6>
                                    <p>Sanju Rathod</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Shaky (Official Video) Sanju Rathod Ft. Isha Malviya _ G-Spark _ New Marathi Songs 2025.mp3">
                            </audio>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/tere hawale.jpg" alt="" style="width: 70px;height: 70px; bjeoct-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Tere Hawaale</h6>
                                    <p>Arjit Singh</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Tere Hawaale (Arijit Singh - Shreya Ghoshal Duet)  Laal Singh Chaddha  Aamir, Kareena  Pritam.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Songs End-->

<!--Contact Area Start-->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg02.jpg);">
    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
        <h2>Got Feedback Or Want To Collaborate ?</h2>
    </div>
<div class="text-center py-5 rounded" >
  <h3 style="color: white; font-size: 36px; font-weight: bold;">Feel Free To Ask</h3>
  <p style="color: white; font-weight: bold; font-size: 18px;">
    We're always open to ideas, artist submissions, and partnership requests.
  </p>
  <a href="https://wa.me/923352112258" 
     style="display: inline-block; background-color: #25D366; color: white; font-weight: bold; padding: 12px 24px; border-radius: 6px; font-size: 16px; text-decoration: none;">
    <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Contact Us
  </a>
</div>


</section>
<!--Contact Area End-->
    
<?php
include_once 'footer.php';
?>


<!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>