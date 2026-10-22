<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <title>About Us | Trendy Tunes</title>
  <link rel="icon" href="img/core-img/favicon.ico">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="about.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
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
  <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
      <h2>About Us</h2>
    </div>
  </section>
  <!-- Why Choose Us Section -->
  <section class="why-choose-us py-5">
    <div class="container ">
      <h2 class="section-title text-center mb-5">Why Choose Trendy Tunes ?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 bg-danger-subtle text-dark rounded shadow-sm text-center h-100  feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-music-note-list"></i></div>
            <h5>Massive Music Library</h5>
            <p>Browse thousands of old, new, and classical albums across all genres — all in one place.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-success-subtle text-dark border rounded shadow-sm text-center h-100 feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-laptop"></i></div>
            <h5>Clean, Easy-to-Use Design</h5>
            <p>Designed for smooth navigation and fast access — no clutter, no confusion, just music.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-primary-subtle text-dark rounded shadow-sm text-center h-100 feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-shield-check"></i></div>
            <h5>100% Ad-Free</h5>
            <p>Enjoy a distraction-free experience. No annoying popups, no interruptions — ever.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-secondary-subtle text-dark rounded shadow-sm text-center h-100 feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-star"></i></div>
            <h5>Tailored To You</h5>
            <p>Whether you're into retro vibes or the latest hits, we help you find what suits you best.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-warning-subtle text-dark rounded shadow-sm text-center h-100 feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-cloud-arrow-down"></i></div>
            <h5>Easy Access to Albums</h5>
            <p>Quickly explore full artist discographies, sorted by era, genre, or popularity.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 bg-success-subtle text-dark rounded shadow-sm text-center h-100 feature-card">
            <div class="feature-icon mb-3"><i class="bi bi-speedometer2"></i></div>
            <h5>Fast & Responsive</h5>
            <p>Optimized for desktop and mobile devices so you can enjoy music wherever you are.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Mission -->
  <section class="container my-5">
    <h2 class="section-title mb-4">Who We Are ?</h2>
    <p>
      At <strong>Trendy Tunes</strong>, We’re passionate about music. Our platform gives you access to a vast collection
      of albums — from timeless classics to today’s top hits — all in one place. Whether you're reviving your favorite
      old-school tracks or discovering new sounds, we’ve got you covered. All our albums are carefully curated to ensure
      you get the best listening experience, free from ads and distractions. We believe in making music accessible and
      enjoyable for everyone, so you can focus on what really matters: the music itself. | Happy listening!
    </p>
  </section>
  <!-- ##### Newsletter & Testimonials Area Start ##### -->
  <section class="newsletter-testimonials-area">
    <div class="container">
      <div class="row">
        <!-- Newsletter Area -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-area mb-100">
            <div class="section-heading text-left mb-50">
              <h2>Subscribe to newsletter</h2>
            </div>
            <div class="newsletter-form">
              <form action="#">
                <input type="search" name="search" id="newsletterSearch" placeholder="E-mail" required>
                <button type="submit" class="btn oneMusic-btn">Subscribe <i class="fa fa-angle-double-right"></i></button>
              </form>
            </div>
          </div>
        </div>
        <!-- Testimonials Area -->
        <div class="col-12 col-lg-6">
          <div class="testimonials-area mb-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-3.jpg);">
            <div class="section-heading white text-left mb-50">
              <p>Have A Look</p>
              <h2>What Our Listeners Say</h2>
            </div>
            <!-- Testimonial Slide -->
            <div class="testimonials-slide owl-carousel">
              <!-- Single Slide -->
              <div class="single-slide">
                <p>Perfect for discovering artists' older work. It’s clean, fast, and actually respects the user experience.Loved the experience</p>
                <div class="testimonial-info d-flex align-items-center">
                  <div class="testimonial-thumb">
                    <img src="img/bg-img/t1.jpg" alt="">
                  </div>
                  <p>Zain</p>
                </div>
              </div>
              <!-- Single Slide -->
              <div class="single-slide">
                <p> This site is a hidden gem. I found albums I thought were lost to time. Super easy to navigate with no ads . </p>
                <div class="testimonial-info d-flex align-items-center">
                  <div class="testimonial-thumb">
                    <img src="img/bg-img/a1.jpg" alt="">
                  </div>
                  <p>Laiba</p>
                </div>
              </div>
              <!-- Single Slide -->
               <div class="single-slide">
                <p>  Finally, a music archive that feels modern. The mobile experience is seamless, and the ability to explore by genre or year makes discovering music a fun, personal journey. </p>
                <div class="testimonial-info d-flex align-items-center">
                  <div class="testimonial-thumb">
                    <img src="img/bg-img/a2.jpg" alt="">
                  </div>
                  <p>Ali</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ##### Newsletter & Testimonials Area End ##### -->
  

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
  <!-- Bootstrap Icons (Optional for features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>