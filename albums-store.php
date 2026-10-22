<?php
include_once 'code.php';
include_once 'header.php';

// Fetch all songs grouped by album
$songsByAlbum = [];
$songsQuery = "SELECT * FROM music ORDER BY album, title";
$songsResult = mysqli_query($connection, $songsQuery);

while ($song = mysqli_fetch_assoc($songsResult)) {
    $album = $song['album'] ? $song['album'] : 'Unknown Album';
    $songsByAlbum[$album][] = $song;
}

// Define static album sections with their IDs and metadata
$staticAlbums = [
    'song1' => [
        'title' => 'Jal Pari',
        'img' => 'img/bg-img/Jal Pri ALbum.jpg',
        'year' => '2003',
        'classes' => 'atif year2 local pop'
    ],
    'song2' => [
        'title' => 'Bollywood Hits',
        'img' => 'img/bg-img/atif cover.jpeg',
        'year' => '2020',
        'classes' => 'atif year3 local classical'
    ],
     'song3' => [
        'title' => 'Regional Hits',
        'img' => 'img/bg-img/lbum.jpg',
        'year' => '2010',
        'classes' => 'alizafar year2 local pop'
    ],
     'song4' => [
        'title' => 'Bemathlab',
        'img' => 'img/bg-img/bemathlab album 1.jpeg',
        'year' => '2017',
        'classes' => 'asim year3 local pop'
    ],
     'song5' => [
        'title' => 'Saada Ishq',
        'img' => 'img/bg-img/abrar album.jpeg',
        'year' => '2007',
        'classes' => 'abrar year2 local softrock'
    ],
     'song6' => [
        'title' => 'Walker World',
        'img' => 'img/bg-img/Alan Channel.jpg',
        'year' => '2024',
        'classes' => 'alan year4 global classical'
    ],
     'song8' => [
        'title' => 'Superstar',
        'img' => 'img/bg-img/Superstar at 1.avif',
        'year' => '2024',
        'classes' => 'bilal year4 local softrock classical'
    ],
     'song9' => [
        'title' => 'Divide',
        'img' => 'img/bg-img/divide album.jpeg',
        'year' => '2017',
        'classes' => 'ed year3 global classical'
    ],
     'song10' => [
        'title' => 'Nautanki',
        'img' => 'img/bg-img/Nautanki Cover.jpg',
        'year' => '2025',
        'classes' => 'hasan year4 local pop'
    ],
     'song11' => [
        'title' => 'Old Is Gold',
        'img' => 'img/bg-img/nusrat album.jpeg',
        'year' => '2010',
        'classes' => 'nusrat year2 local qawali'
    ],
     'song12' => [
        'title' => 'Back 2 Love',
        'img' => 'img/bg-img/Habibi Rahat.jpeg',
        'year' => '2010',
        'classes' => 'rahat year2 local softrock'
    ],
    // ... (all your other static albums)
    'song15' => [
        'title' => 'Rebirth',
        'img' => 'img/bg-img/Rebirth Youngsters cover.jpg',
        'year' => '2017',
        'classes' => 'young year3 local rap'
    ]
];

// Find dynamic albums (those in database but not in static list)
$dynamicAlbums = [];
foreach ($songsByAlbum as $albumName => $songs) {
    $found = false;
    foreach ($staticAlbums as $album) {
        if (strtolower(trim($album['title'])) == strtolower(trim($albumName))) {
            $found = true;
            break;
        }
    }
    if (!$found && $albumName != 'Unknown Album') {
        $dynamicAlbums[] = [
            'title' => $albumName,
            'img' => !empty($songs[0]['thumbnail']) ? 'uploads/thumbnails/' . $songs[0]['thumbnail'] : 'img/bg-img/default-album.jpg',
            'year' => $songs[0]['year'],
            'classes' => strtolower(str_replace(' ', '', $songs[0]['artist'])) . ' ' . 
                         ($songs[0]['year'] >= 2021 ? 'year4' : 
                         ($songs[0]['year'] >= 2011 ? 'year3' : 
                         ($songs[0]['year'] >= 2001 ? 'year2' : 'year1'))) . ' ' .
                         ($songs[0]['language'] == 'global' ? 'global' : 'local')
        ];
    }
}

// Filter categories
$filterCategories = [
    '*' => 'Browse All',
    '.atif' => 'Atif Aslam',
    '.alizafar' => 'Ali Zafar',
    '.asim' => 'Asim Azhar',
    '.abrar' => 'Abrar Ul Haq',
    '.alan' => 'Alan Walker',
    '.bilal' => 'Bilal Saeed',
    '.ed' => 'Ed Sheeran',
    '.hasan' => 'Hasan Raheem',
    '.nusrat' => 'Nusrat Fateh Ali Khan',
    '.rahat' => 'Rahat Fateh Ali Khan',
    '.young' => 'Youngsters',
    '.local' => 'Regional Language',
    '.global' => 'International Language',
    '.rap' => 'Rap',
    '.pop' => 'Pop',
    '.softrock' => 'Soft Rock',
    '.classical' => 'Classical',
    '.qawali' => 'Qawali',
    
    '.year2' => '2001-2010',
    '.year3' => '2011-2020',
    '.year4' => '2021-2025'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Album | Trendy Tunes</title>
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" href="style.css">
    <style>
        .album-img { width:100%; height:200px; object-fit:cover; }
        @media (max-width:576px) { .album-img { height:auto; object-fit:contain; } }
        html { scroll-behavior:smooth; scroll-padding-top:150px; }
        .filter-active { font-weight:bold; color:#1cc3b2 !important; }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <?php include_once "header.php"; ?>

    <!-- Breadcumb Area -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image:url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent"><h2>Albums</h2></div>
    </section>

    <!-- Album Category Area -->
    <section class="album-catagory section-padding-100-0" id="actor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <?php foreach($filterCategories as $filter=>$label): ?>
                            <a href="#" data-filter="<?=$filter?>" class="<?=$filter=='*'?'active':''?>"><?=$label?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">
                <!-- Static Albums -->
                <?php foreach($staticAlbums as $sectionId=>$album): ?>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item <?=$album['classes']?>">
                    <div class="single-album">
                        <a href="#<?=$sectionId?>" id="<?=explode(' ',$album['classes'])[0]?>">
                            <img src="<?=$album['img']?>" class="album-img">
                            <div class="album-info"><h5><?=$album['title']?></h5><p><?=$album['year']?></p></div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <!-- Dynamic Albums -->
                <?php foreach($dynamicAlbums as $index=>$album): 
                    $sectionId = 'dynamic-' . $index;
                ?>
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item <?=$album['classes']?>">
                    <div class="single-album">
                        <a href="#<?=$sectionId?>">
                            <img src="<?=$album['img']?>" class="album-img">
                            <div class="album-info"><h5><?=$album['title']?></h5><p><?=$album['year']?></p></div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Song Area -->
    <section>
        <div class="one-music-songs-area mb-70">
            <div class="container">
                <div class="row">
                    <!-- Static Album Sections -->
                    <?php foreach($staticAlbums as $sectionId=>$album): 
                        $albumSongs = [];
                        foreach($songsByAlbum as $dbAlbumName=>$songs) {
                            if(strtolower(trim($dbAlbumName))==strtolower(trim($album['title']))) {
                                $albumSongs = $songs;
                                break;
                            }
                        }
                    ?>
                    <div class="col-12 col-lg-4" id="<?=$sectionId?>">
                        <div class="new-hits-area mb-100">
                            <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                                <p><?=!empty($albumSongs)?$albumSongs[0]['year']:$album['year']?></p>
                                <h2><?=$album['title']?></h2>
                            </div>

                            <?php if(!empty($albumSongs)): ?>
                                <?php foreach($albumSongs as $song): ?>
                                <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                                    <div class="first-part d-flex align-items-center">
                                        <div class="thumbnail">
                                            <img src="<?=!empty($song['thumbnail'])?'uploads/thumbnails/'.$song['thumbnail']:'img/bg-img/default-song.jpg'?>" 
                                                 style="width:70px;height:70px;object-fit:cover;border-radius:4px;">
                                        </div>
                                        <div class="content-">
                                            <h6><?=$song['title']?></h6>
                                            <p><?=$song['artist']?></p>
                                        </div>
                                    </div>
                                    <audio preload="auto" controls>
                                        <source src="<?='uploads/songs/'.basename($song['file_path'])?>">
                                    </audio>
                                </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="alert alert-info">No songs found in this album.</div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Dynamic Album Sections -->
                    <?php foreach($dynamicAlbums as $index=>$album): 
                        $sectionId = 'dynamic-' . $index;
                        $albumSongs = $songsByAlbum[$album['title']] ?? [];
                    ?>
                    <div class="col-12 col-lg-4" id="<?=$sectionId?>">
                        <div class="new-hits-area mb-100">
                            <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                                <p><?=$album['year']?></p>
                                <h2><?=$album['title']?></h2>
                            </div>

                            <?php if(!empty($albumSongs)): ?>
                                <?php foreach($albumSongs as $song): ?>
                                <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                                    <div class="first-part d-flex align-items-center">
                                        <div class="thumbnail">
                                            <img src="<?=!empty($song['thumbnail'])?'uploads/thumbnails/'.$song['thumbnail']:'img/bg-img/default-song.jpg'?>" 
                                                 style="width:70px;height:70px;object-fit:cover;border-radius:4px;">
                                        </div>
                                        <div class="content-">
                                            <h6><?=$song['title']?></h6>
                                            <p><?=$song['artist']?></p>
                                        </div>
                                    </div>
                                    <audio preload="auto" controls>
                                        <source src="<?='uploads/songs/'.basename($song['file_path'])?>">
                                    </audio>
                                </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'footer.php'; ?>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/plugins/plugins.js"></script>
    <script src="js/active.js"></script>
    
    <script>
    $(document).ready(function() {
        $('.catagory-menu a').click(function(e) {
            e.preventDefault();
            $('.catagory-menu a').removeClass('filter-active');
            $(this).addClass('filter-active');
            
            const filterValue = $(this).attr('data-filter');
            if (filterValue === '*') {
                $('.single-album-item').show();
            } else {
                $('.single-album-item').hide().filter(filterValue).show();
            }
            history.pushState(null, null, '?filter=' + filterValue.replace('.', ''));
        });
        
        const urlParams = new URLSearchParams(window.location.search);
        const filterParam = urlParams.get('filter');
        if (filterParam) {
            $(`[data-filter=".${filterParam}"]`).click();
        }
    });
    </script>
</body>
</html>