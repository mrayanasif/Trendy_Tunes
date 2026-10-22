<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>Review | Trendy Tunes</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

<?php
include_once "header.php";
include_once "code.php";
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>Reviews</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->
<br><br><br>
<!-- Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="code.php">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Submit Review</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="song_id" id="modalSongId">
          <input type="hidden" name="song_name" id="modalSongName">
          <input type="hidden" name="artist_name" id="modalArtistName">

          <div class="mb-3">
            <label for="rating" class="form-label">Rating (1-5)</label>
            <input type="number" class="form-control" name="rating" min="1" max="5" required>
          </div>

            <div class="mb-3">
                    <label for="experience" class="form-label">How Was Your Listening Experience</label>
                        <select class="form-control" name="experience" required>
                            <option value="" disabled selected>Select your experience</option>
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="Poor">Poor</option>
                        </select>
            </div>

                        <div class="mb-3">
                         <label for="advice" class="form-label">How Much Do You Recommend This</label>
                            <select class="form-control" name="advice" required>
                                <option value="" disabled selected>Select your advice</option>
                                <option value="Highly Recommend">Highly Recommend</option>
                                 <option value="Recommend">Recommend</option>
                                <option value="Do Not Recommend">Do Not Recommend</option>
                            </select>
                        </div>

        </div>

        <div class="modal-footer">
          <button type="submit" name="submit_review" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

        <section>
        <div class="one-music-songs-area mb-70">
                <div class="container">
                            <div class="row">
                <!-- ***** Album 01 ***** -->
                <div class="col-12 col-lg-4" id="song1">

                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2003</p>
                            <h2> Jal Pari</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Jal Pri ALbum.jpg" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Jal Pari</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                            
                            <audio preload="auto" controls>
                                <source src="audio/Jal Pari  Atif Aslam  Season 2  Coke Studio Pakistan  @RohailHyattMusic.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/aadat.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Aadat</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                            
                            <audio preload="auto" controls>
                                <source src="audio/Aadat - Atif Aslam (Lyrics) -  Kalyug.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/ehsaas.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Ehsaas</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                   
                            <audio preload="auto" controls>
                                <source src="audio/Ehsaas.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/aankhon se.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Aankhon Se</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                   
                            <audio preload="auto" controls>
                                <source src="audio/[LYRICS] Aankhon Se - Atif Aslam.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/tu jaane.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Tu Jaane Na</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                  
                            <audio preload="auto" controls>
                                <source src="audio/Tu Jaane Na Lyrical - Ajab Prem Ki Ghazab Kahani  Atif Aslam  Ranbir Kapoor, Katrina Kaif  Pritam.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                        

                </div>
        
            </div>
                <!-- ***** Album 02 ***** -->
                <div class="col-12 col-lg-4" id="song2">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2020</p>
                            <h2> Bollywood Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/dil diyan galan.jpeg" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Dil Diyan Gallan</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                   
                            <audio preload="auto" controls>
                                <source src="audio/Jal Pari  Atif Aslam  Season 2  Coke Studio Pakistan  @RohailHyattMusic.mp3">
                            </audio>
                               <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/tere sang yara.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Tere Sang Yaara</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                   
                            <audio preload="auto" controls>
                                <source src="audio/Aadat - Atif Aslam (Lyrics) -  Kalyug.mp3">
                            </audio>
                               <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/ehsaas.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Hona Tha Pyar</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ehsaas.mp3">
                            </audio>
                               <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/pehli dafa.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Pehli Dafa</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                  
                            <audio preload="auto" controls>
                                <source src="audio/[LYRICS] Aankhon Se - Atif Aslam.mp3">
                            </audio>
                               <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/rafta.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Rafta Rafta</h6>
                                    <p>Atif Aslam</p>
                                </div>
                            </div>
                                 
                            <audio preload="auto" controls>
                                <source src="audio/Rafta Rafta - Official Music Video  Raj Ranjodh  Atif Aslam Ft. Sajal Ali  Tarish Music.mp3">
                            </audio>
                               <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>                      
                </div>       
            </div> 
        <!-- ***** Album 03 ***** -->
                <div class="col-12 col-lg-4" id="song3">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2015</p>
                            <h2> Regional Hits</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/allay at.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Allay</h6>
                                    <p>Ali Zafar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Allay (Munja Mar Wara)  Ali Zafar ft. Urooj Fatima & Abid Brohi  Lightingale Records.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/balo batiyan ali zafar.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Balo Batiyan</h6>
                                    <p>Ali Zafar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/BALO BATIYAN - Ali Zafar X Atta Ullah Khan Esakhelvi.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/laila o laila at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Laila O Laila</h6>
                                    <p>Ali Zafar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Laila O Laila - Ali Zafar ft Urooj Fatima  Lightingale Productions.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/karay ali at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Karay Karay</h6>
                                    <p>Ali Zafar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Karay Karay - Ali Zafar & Salman Paras.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/larsha ali at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Larsha Pekhawar</h6>
                                    <p>Ali Zafar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Larsha Pekhawar  Ali Zafar ft. Gul Panra & Fortitude Pukhtoon Core  Pashto Song.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 04 ***** -->
                <div class="col-12 col-lg-4" id="song4">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2017</p>
                            <h2> Bemathlab</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/kyun at.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Kyun</h6>
                                    <p>Asim Azhar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Kyun (Lyric Video) Asim Azhar  BEMATLAB.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/karma at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Karma</h6>
                                    <p>Asim Azhar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Karma (Lyric Video) Asim Azhar feat. Talhah Yunus  BEMATLAB (1).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/bemathlab at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Bemathlab</h6>
                                    <p>Asim Azhar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Bematlab (Official Video) Asim Azhar ft. Talha Anjum  BEMATLAB (1).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/you at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>You</h6>
                                    <p>Asim Azhar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/You (Lyric Video) Asim Azhar feat. Hasan Raheem  BEMATLAB.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/mujhse na.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Mujhsa Na</h6>
                                    <p>Asim Azhar</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Mujhsa Na (Lyric Video) Asim Azhar feat. Nehaal Naseem  BEMATLAB.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

        <!-- ***** Album 05 ***** -->
                <div class="col-12 col-lg-4" id="song5">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2007</p>
                            <h2> Saada Ishq</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/chamkeeli At.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Chamkeeli</h6>
                                    <p>Abrar-Ul-Haq</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Abrar Ul Haq I Chamkeeli I Official Music Video.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/punjaban at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Nach Punjaban</h6>
                                    <p>Abrar-Ul-Haq</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/NACH PUNJABAN - OFFICIAL VIDEO - ABRAR UL HAQ.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/ballay at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Ballay Ballay  </h6>
                                    <p>Abrar-Ul-Haq</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Coke Studio Season 11 Ballay Ballay Abrar Ul Haq and Aima Baig.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/mela vekhein Abrar.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Aaj Mela</h6>
                                    <p>Abrar-Ul-Haq</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Aaj Mela Vekhan Aiyaan By Abrar Ul Haq.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/kuriyan abrar.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Kuriyan Lahore Di</h6>
                                    <p>Abrar-Ul-Haq</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Kurian Lahore Diyan - Abrar-ul-Haq.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 06 ***** -->
                <div class="col-12 col-lg-4" id="song6">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2024</p>
                            <h2> Walker World</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/alone at.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Alone</h6>
                                    <p>Alan Walker</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Alan Walker - Alone.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/faded at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Faded</h6>
                                    <p>Alan Walker</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Alan Walker - Faded (Lyrics).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/ALan.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Children Of The Sun</h6>
                                    <p>Alan Walker</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Alan Walker x Pritam - Children Of The Sun feat. Vishal Mishra (Official Lyric Video).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/heart over mind at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Heart Over Mind</h6>
                                    <p>Alan Walker</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Alan Walker, Daya - Heart over Mind (Official Music Video).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/by your side.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>By Your Side</h6>
                                    <p>Alan Walker</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Alan x Walkers - By Your Side.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 08 ***** -->
                <div class="col-12 col-lg-4" id="song9">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2024</p>
                            <h2> Superstar</h2>
                        </div>

                        <!-- Single Top Item -->
                       <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/baaro.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Baari</h6>
                                    <p>Bilal Saeed</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Baari by Bilal Saeed and Momina Mustehsan  Official Music Video.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/bdtd at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Been There Done That</h6>
                                    <p>Bilal Saeed</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/BTDT (Been There Done That) - Official Video  Bilal Saeed, Talha Anjum  Superstar Album.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/miss bilal.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Misunderstood</h6>
                                    <p>Bilal Saeed</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Misunderstood - Official Music Video  Bilal Saeed  SUPERSTAR ALBUM.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/cold hearted at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Cold Hearted</h6>
                                    <p>Bilal Saeed</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Cold Hearted (Official Visualiser) Bilal Saeed Ft. Asim Azhar  SUPERSTAR ALBUM.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/3 saal at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>3 Saal</h6>
                                    <p>Bilal Saeed</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/3 saal  Bilal Saeed  Third from the Album New Song.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 09 ***** -->
                <div class="col-12 col-lg-4" id="song10">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2017</p>
                            <h2> Divide</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Eraser ed.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Eraser</h6>
                                    <p>Ed-Sheeran</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ed Sheeran - Eraser [Official Audio].mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/shape of u.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Shape Of You</h6>
                                    <p>Ed-Sheeran</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ed Sheeran - Shape of You (Official Music Video).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/flower.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Supermarket Flowers</h6>
                                    <p>Ed-Sheeran</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ed Sheeran - Supermarket Flowers [Official Audio].mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/happier.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Happier</h6>
                                  <p>Ed-Sheeran</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ed Sheeran - Happier (Official Music Video).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/castle on ed.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Castle On The Hill</h6>
                                   <p>Ed-Sheeran</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Ed Sheeran - Castle On The Hill [Official Music Video].mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 10 ***** -->
                <div class="col-12 col-lg-4" id="song11">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2025</p>
                            <h2> Nautanki</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/fursat hasan.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Dil Fareb</h6>
                                    <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Hasan Raheem - Dil fareb (Audio).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/fursat hasan 03.jpg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Fursat</h6>
                                   <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Hasan Raheem - Fursat (Audio).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/fursat hasan 02.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Kaleji</h6>
                                  <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Hasan Raheem - Kaleji (Audio).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/fursat 04.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Tareekhi</h6>
                                   <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Hasan Raheem - Tareekhi (Audio).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/memories hasan raheem.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Memories</h6>
                                    <p>Hasan Raheem</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/MEMORIES - Hasan Raheem ft Justin Bibis (Official Music Video)  Latest Urdu Punjabi Song 2025.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 11 ***** -->
                <div class="col-12 col-lg-4" id="song12">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2010</p>
                            <h2> Old Is Gold</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Unke Andaz Karam.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Unke Andaz E Karam</h6>
                                    <p>Nusrat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/UNKE ANDAZ E KARAM (REMIX) - NUSRAT FATEH ALI KHAN X VIBRONO  EXTENDED VERSION.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Shahay Mardan Ali.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Shah-e-Mardan Ali</h6>
                                     <p>Nusrat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Shah-e-Mardane Ali ( Remix )  Nusrat Fateh Ali Khan Full Remix Qawali  Atiq's Creations.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Othe Amla De Hony Ne Navede at.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Othe Amlan De Honay</h6>
                                      <p>Nusrat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Othe Amlan De Hony Ne Navede  Nusrat Fateh Ali Khan Best Qwali #NFAK.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/karam hota hai.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Jab Karam Hota Hai</h6>
                                      <p>Nusrat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Jab Karam Hota Hai Halat Badal Jate Hain  Sufiyana Qawwali  Nusrat Fateh Ali Khan.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/kamli wale.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Kamli Wale</h6>
                                      <p>Nusrat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Kamli Wale Muhammad To Sadke Mein Jaan   Nusrat Fateh Ali Khan   Best Qawwali24.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 12 ***** -->
                <div class="col-12 col-lg-4" id="song13">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2010</p>
                            <h2> Back 2 Love</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Habibi Rahat.jpeg" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Habibi</h6>
                                    <p>Rahat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Habibi (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/Rhishte Naate Rahat.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Rhishte Naate</h6>
                                    <p>Rahat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Lyrics_ Rishte Naate Full Song  Rahat Fateh Ali Khan, Suzanne D'Mello  Sayeed Quadri, Pritam.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/nach rahat.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Nach Dumadam</h6>
                                      <p>Rahat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Nach Dumadum (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/rab janay.jpeg" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Rab Jaane</h6>
                                  <p>Rahat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Rab Jaane.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/sab jhoote.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Sab Jhoote</h6>
                                     <p>Rahat Fateh Ali Khan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/Sab Jhoote (Official Lyric Video)  Rahat Fateh Ali Khan  Back 2 Love.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

            <!-- ***** Album 13 ***** -->
                <div class="col-12 col-lg-4" id="song14">
                    <div class="new-hits-area mb-100" >
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>2017</p>
                            <h2> Rebirth</h2>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/uber.avif" alt=""style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Uber</h6>
                                    <p>Youngsters</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/UBER - Young Stunners  Talhah Yunus  Talha Anjum  (Prod. Umair Khan) [Official Lyrical Video].mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/rooh young.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Rooh</h6>
                                    <p>Youngsters</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/ROOH - (REMIX) - Official Audio.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/karachi chal.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Karachi Chal</h6>
                                 <p>Youngsters</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/KARACHI CHAL - Young Stunners  Talha Anjum  Talhah Yunus (Feat. YAS) Prod. By Momin.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/i dont know you.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>I Dont Know </h6>
                                    <p>Youngsters</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/I Don't Know - Young Stunners - Official Audio.mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>

                        <!-- Single Top Item -->
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/dont mind young x.avif" alt="" style="width: 70px;height: 70px; object-fit: cover; border-radius: 4px;">
                                </div>
                                <div class="content-">
                                    <h6>Dont Mind</h6>
                                    <p>Youngsters</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/DONT MIND - Young Stunners  Talhah Yunus  Talha Anjum  Rap Demon (Official Audio).mp3">
                            </audio>
                            <button type="submit" class="btn btn-danger ms-3" name="submit">Review</button>
                        </div>
                </div>
        
            </div>

          
        </div>

    </section> 

  

    <!-- ##### Footer Area Start ##### -->
<?php
include_once "footer.php";
?>

    <!-- ##### Footer Area Start ##### -->

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
    <!-- Bootstrap JS (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
  const reviewButtons = document.querySelectorAll(".btn-danger[name='submit']");

  reviewButtons.forEach(button => {
    button.addEventListener("click", function () {
      const parent = this.closest('.single-new-item');
      const songName = parent.querySelector('h6').textContent.trim();
      const artistName = parent.querySelector('p').textContent.trim();
      const songId = [...reviewButtons].indexOf(this) + 1;

      document.getElementById("modalSongId").value = songId;
      document.getElementById("modalSongName").value = songName;
      document.getElementById("modalArtistName").value = artistName;
      

      const reviewModal = new bootstrap.Modal(document.getElementById('reviewModal'));
      reviewModal.show();
    });
  });
</script>

</body>

</html>