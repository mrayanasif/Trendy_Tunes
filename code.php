<?php

$connection = mysqli_connect("localhost", "root", "", "trendy_tunes");
include_once "session.php";
// User login

if (isset($_POST['login'])) {
    $email = $_POST['useremail'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Store user info in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['full_name'] = $user['full_name'];
    }
        if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch user from DB

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role']; // 'admin' or 'user'

        if ($user['role'] === 'admin') {
            $_SESSION['admin_id'] = $user['id']; // needed for dashboard check
            header("Location: musico admin panel/dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password'); window.location.href='login.php';</script>";
    }
}
}

// ========== USER REGISTER ==========
if (isset($_POST['register'])) {
    $fullName = $_POST['Fullname'];
    $username = $_POST['userName'];
    $phone = $_POST['Number'];
    $email = $_POST['useremail'];
    $password = $_POST['password'];

    $checkEmail = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($checkEmail) > 0) {
        echo "<script>
            alert('This email is already registered. Please use another one or login.');
            window.location.href = 'register.php';
        </script>";
    } else {
        $query = mysqli_query(
            $connection,
            "INSERT INTO users (full_name, username, phone_number, email, password) 
             VALUES ('$fullName', '$username', '$phone', '$email', '$password')"
        );

        if ($query) {
            echo "<script>
                alert('Registered Successfully!');
                window.location.href = 'login.php';
            </script>";
        } else {
            echo "Error inserting data: " . mysqli_error($connection);
        }
    }
}

// ========== USER DELETE ==========
if (isset($_POST["delete"])) {
    $id = $_POST['id'];

    $deleteQuery = mysqli_query($connection, "DELETE FROM users WHERE id = '$id'");

    if ($deleteQuery) {
        echo "<script>
        alert('User deleted successfully!');
        location.assign('musico admin panel/dashboard.php');
        </script>";
    } else {
        echo "<script>alert('Error deleting user');</script>";
    }
}

// ========== USER UPDATE ==========

if (isset($_POST['update'])) {
    $u_id = $_POST['updateid'];
    $u_full_name = $_POST['full_name'];
    $u_username = $_POST['username'];
    $u_phone = $_POST['phone_number'];
    $u_email = $_POST['email'];
    $u_password = $_POST['password'];
    $u_role = $_POST['role'];

    $update_query = mysqli_query($connection, "UPDATE users SET 
        full_name = '$u_full_name', 
        username = '$u_username', 
        phone_number = '$u_phone', 
        email = '$u_email', 
        password = '$u_password', 
        role = '$u_role' 
        WHERE id = '$u_id'
    ");

    if ($update_query) {
        echo "<script>
        alert('User updated successfully!');
        location.assign('musico admin panel/dashboard.php');
        </script>";
    } else {
        echo "<script>alert('Error updating user');</script>";
    }
}

// ========== ADD SONG ==========
if (isset($_POST['add_song'])) {
    $title = mysqli_real_escape_string($connection, $_POST['song_title']);
    $artist = mysqli_real_escape_string($connection, $_POST['artist']);
    // In your code.php where you add songs, modify the album name before saving:
    $album = isset($_POST['album']) ? ucwords(strtolower(trim($_POST['album']))) : null;

    // This will convert "JAL PARI" to "Jal Pari" before storing in database
    $genre = mysqli_real_escape_string($connection, $_POST['genre']);
    $year = !empty($_POST['year']) ? (int) $_POST['year'] : null;
    $language = !empty($_POST['language']) ? mysqli_real_escape_string($connection, $_POST['language']) : null;
    $description = !empty($_POST['description']) ? mysqli_real_escape_string($connection, $_POST['description']) : null;

    $is_new = ($year >= 2020) ? 1 : 0;

    $audio_dir = "uploads/songs/";
    $thumb_dir = "uploads/thumbnails/";

    if (!is_dir($audio_dir))
        mkdir($audio_dir, 0777, true);
    if (!is_dir($thumb_dir))
        mkdir($thumb_dir, 0777, true);

    $audio_filename = uniqid() . '_' . basename($_FILES['mp3_file']['name']);
    $audio_target = $audio_dir . $audio_filename;

    $thumb_filename = null;
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
        $thumb_filename = uniqid() . '_' . basename($_FILES['cover_image']['name']);
        $thumb_target = $thumb_dir . $thumb_filename;
    }

    $upload_success = move_uploaded_file($_FILES['mp3_file']['tmp_name'], $audio_target);
    if ($thumb_filename) {
        $upload_success = $upload_success && move_uploaded_file($_FILES['cover_image']['tmp_name'], $thumb_target);
    }

    if ($upload_success) {
        // Escape filename variables
        $audio_filename_escaped = mysqli_real_escape_string($connection, $audio_target);
        $thumb_filename_escaped = $thumb_filename ? mysqli_real_escape_string($connection, $thumb_filename) : null;

        $query = "INSERT INTO music 
            (title, artist, album, genre, year, language, description, file_path, thumbnail, is_new) 
            VALUES (
                '$title', 
                '$artist', 
                " . ($album ? "'$album'" : "NULL") . ", '$genre', 
                " . ($year ? $year : "NULL") . "," . ($language ? "'$language'" : "NULL") . ", " . ($description ? "'$description'" : "NULL") . ", 
                '$audio_filename_escaped', " . ($thumb_filename_escaped ? "'$thumb_filename_escaped'" : "NULL") . ", 
                $is_new
            )";

        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['success'] = 'Song added successfully!';
        } else {
            $_SESSION['error'] = "Database error: " . mysqli_error($connection);
        }
    } else {
        $_SESSION['error'] = "File upload failed. Check permissions and file sizes.";
    }

    header("Location: http://localhost/sound/musico%20admin%20panel/mp3.php");
    exit();
}


// ========== DELETE SONG ==========
if (isset($_POST['delete_song'])) {
    $id = (int) $_POST['id'];
    $query = mysqli_query($connection, "SELECT file_path, thumbnail FROM music WHERE id = '$id'");
    $song = mysqli_fetch_assoc($query);

    if (!empty($song['file_path'])) {
        unlink("../uploads/audio/" . $song['file_path']);
    }
    if (!empty($song['thumbnail'])) {
        unlink("../uploads/thumbnails/" . $song['thumbnail']);
    }

    $deleteQuery = mysqli_query($connection, "DELETE FROM music WHERE id = '$id'");
    if ($deleteQuery) {
        $_SESSION['success'] = 'Song deleted successfully!';
        header("Location:http://localhost/sound/musico%20admin%20panel/mp3.php");
        exit();
    } else {
        $_SESSION['error'] = "Error deleting record: " . mysqli_error($connection);
        header("Location:http://localhost/sound/musico%20admin%20panel/dashboard.php");
        exit();
    }
}

// ========== UPDATE SONG ==========
if (isset($_POST['add_video'])) {
    // Set upload limits
    ini_set('upload_max_filesize', '100M');
    ini_set('post_max_size', '110M');
    ini_set('max_execution_time', '300');

    // Allowed file types
    $allowed_video_types = ['video/mp4'];
    $allowed_image_types = ['image/jpeg', 'image/png', 'image/webp'];

    // Max file sizes
    define('MAX_VIDEO_SIZE', 50 * 1024 * 1024); // 50MB
    define('MAX_THUMB_SIZE', 5 * 1024 * 1024); // 5MB

    // Validate video upload
    if ($_FILES['video_file']['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['error'] = "Video upload error.";
        header("Location: mp4.php");
        exit();
    }

    // Validate thumbnail (optional)
    if ($_FILES['cover_image']['error'] !== UPLOAD_ERR_OK && $_FILES['cover_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $_SESSION['error'] = "Thumbnail upload error.";
        header("Location: mp4.php");
        exit();
    }

    // Size checks
    if ($_FILES['video_file']['size'] > MAX_VIDEO_SIZE) {
        $_SESSION['error'] = "Video too large (max 50MB).";
        header("Location: mp4.php");
        exit();
    }

    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK && 
        $_FILES['cover_image']['size'] > MAX_THUMB_SIZE) {
        $_SESSION['error'] = "Thumbnail too large (max 5MB).";
        header("Location: mp4.php");
        exit();
    }

    // Type checks
    if (!in_array($_FILES['video_file']['type'], $allowed_video_types)) {
        $_SESSION['error'] = "Invalid video type. Only MP4 allowed.";
        header("Location: mp4.php");
        exit();
    }

    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK && 
        !in_array($_FILES['cover_image']['type'], $allowed_image_types)) {
        $_SESSION['error'] = "Invalid thumbnail type. Only JPG, PNG, WebP allowed.";
        header("Location: mp4.php");
        exit();
    }

    // Sanitize form inputs
    $title = mysqli_real_escape_string($connection, $_POST['video_title']);
    $artist = mysqli_real_escape_string($connection, $_POST['artist']);
    $album = isset($_POST['album']) ? ucwords(strtolower(trim($_POST['album']))) : null;
    $genre = mysqli_real_escape_string($connection, $_POST['genre']);
    $year = !empty($_POST['year']) ? (int) $_POST['year'] : null;
    $language = !empty($_POST['language']) ? mysqli_real_escape_string($connection, $_POST['language']) : null;
    $description = !empty($_POST['description']) ? mysqli_real_escape_string($connection, $_POST['description']) : null;

    $is_new = ($year >= 2020) ? 1 : 0;

    // Upload directories
    $video_dir = "uploads/videos/";
    $thumb_dir = "uploads/thumbnails/";

    if (!is_dir($video_dir)) mkdir($video_dir, 0777, true);
    if (!is_dir($thumb_dir)) mkdir($thumb_dir, 0777, true);

    // Unique filenames
    $video_filename = uniqid() . '_' . basename($_FILES['video_file']['name']);
    $video_target = $video_dir . $video_filename;

    $thumb_filename = null;
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK) {
        $thumb_filename = uniqid() . '_' . basename($_FILES['cover_image']['name']);
        $thumb_target = $thumb_dir . $thumb_filename;
    }

    // Upload files
    $upload_success = move_uploaded_file($_FILES['video_file']['tmp_name'], $video_target);
    if ($thumb_filename) {
        $upload_success = $upload_success && move_uploaded_file($_FILES['cover_image']['tmp_name'], $thumb_target);
    }

    if ($upload_success) {
        // Escape filenames
        $video_filename_escaped = mysqli_real_escape_string($connection, $video_filename);
        $thumb_filename_escaped = $thumb_filename ? mysqli_real_escape_string($connection, $thumb_filename) : null;

        // Insert into database
        $query = "INSERT INTO videos 
            (title, artist, album, genre, year, language, description, file_path, thumbnail, is_new) 
            VALUES (
                '$title',
                '$artist',
                " . ($album ? "'$album'" : "NULL") . ",
                '$genre',
                " . ($year ? $year : "NULL") . ",
                " . ($language ? "'$language'" : "NULL") . ",
                " . ($description ? "'$description'" : "NULL") . ",
                '$video_filename_escaped',
                " . ($thumb_filename_escaped ? "'$thumb_filename_escaped'" : "NULL") . ",
                $is_new
            )";

        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['success'] = "Video added successfully!";
        } else {
            $_SESSION['error'] = "Database error: " . mysqli_error($connection);
            if (file_exists($video_target)) unlink($video_target);
            if ($thumb_filename && file_exists($thumb_target)) unlink($thumb_target);
        }
    } else {
        $_SESSION['error'] = "File upload failed. Check folder permissions.";
    }

    header("Location: http://localhost/sound/musico%20admin%20panel/dashboard.php");
    exit();
}
// ========== UPDATE VIDEO ==========
if (isset($_POST['edit_video'])) {
    $id = (int) $_POST['video_id'];
    $title = mysqli_real_escape_string($connection, $_POST['edit_title']);
    $artist = mysqli_real_escape_string($connection, $_POST['edit_artist']);
    $album = mysqli_real_escape_string($connection, $_POST['edit_album']);
    $genre = mysqli_real_escape_string($connection, $_POST['edit_genre']);
    $year = !empty($_POST['edit_year']) ? (int) $_POST['edit_year'] : null;
    $language = mysqli_real_escape_string($connection, $_POST['edit_language']);
    $description = mysqli_real_escape_string($connection, $_POST['edit_description']);
    $is_new = ($year >= 2020) ? 1 : 0;

    // Handle optional thumbnail upload
    $thumb_filename = null;
    if (isset($_FILES['edit_cover_image']) && $_FILES['edit_cover_image']['error'] === 0) {
        $thumb_dir = "../uploads/thumbnails/";
        $thumb_filename = uniqid() . '_' . basename($_FILES['edit_cover_image']['name']);
        $thumb_target = $thumb_dir . $thumb_filename;

        if (move_uploaded_file($_FILES['edit_cover_image']['tmp_name'], $thumb_target)) {
            // Delete old thumbnail
            $old_thumb_query = mysqli_query($connection, "SELECT thumbnail FROM videos WHERE id = '$id'");
            $old_thumb = mysqli_fetch_assoc($old_thumb_query);
            if (!empty($old_thumb['thumbnail']) && file_exists($thumb_dir . $old_thumb['thumbnail'])) {
                unlink($thumb_dir . $old_thumb['thumbnail']);
            }
        }
    }

    // Handle optional video file upload
    if (isset($_FILES['edit_video_file']) && $_FILES['edit_video_file']['error'] === 0) {
        $video_dir = "../uploads/videos/";
        $video_filename = uniqid() . '_' . basename($_FILES['edit_video_file']['name']);
        $video_target = $video_dir . $video_filename;

        if (move_uploaded_file($_FILES['edit_video_file']['tmp_name'], $video_target)) {
            // Delete old video file
            $old_video_query = mysqli_query($connection, "SELECT file_path FROM videos WHERE id = '$id'");
            $old_video = mysqli_fetch_assoc($old_video_query);
            if (!empty($old_video['file_path']) && file_exists($video_dir . $old_video['file_path'])) {
                unlink($video_dir . $old_video['file_path']);
            }

            $update_video = ", file_path = '$video_filename'";
        } else {
            $_SESSION['error'] = "Failed to upload new video file.";
            header("Location: http://localhost/sound/musico%20admin%20panel/dashboard.php");
            exit();
        }
    } else {
        $update_video = "";
    }

    // Build update query
    $query = "UPDATE videos SET 
        title = '$title',
        artist = '$artist',
        album = '$album',
        genre = '$genre',
        year = " . ($year !== null ? "'$year'" : "NULL") . ",
        language = " . (!empty($language) ? "'$language'" : "NULL") . ",
        description = " . (!empty($description) ? "'$description'" : "NULL") . ",
        is_new = '$is_new'";

    if ($thumb_filename) {
        $query .= ", thumbnail = '$thumb_filename'";
    }

    $query .= $update_video;
    $query .= " WHERE id = '$id'";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['success'] = 'Video updated successfully!';
    } else {
        $_SESSION['error'] = "Error updating video: " . mysqli_error($connection);
    }

    header("Location: http://localhost/sound/musico%20admin%20panel/dashboard.php");
    exit();
}
// ========== DELETE VIDEO ==========
if (isset($_POST['delete_video'])) {
    $id = (int) $_POST['id'];
    $query = mysqli_query($connection, "SELECT file_path, thumbnail FROM videos WHERE id = '$id'");
    $video = mysqli_fetch_assoc($query);

    if (!empty($video['file_path']) && file_exists("../uploads/videos/" . $video['file_path'])) {
        unlink("../uploads/videos/" . $video['file_path']);
    }
    if (!empty($video['thumbnail']) && file_exists("../uploads/thumbnails/" . $video['thumbnail'])) {
        unlink("../uploads/thumbnails/" . $video['thumbnail']);
    }

    $deleteQuery = mysqli_query($connection, "DELETE FROM videos WHERE id = '$id'");
    if ($deleteQuery) {
        $_SESSION['success'] = 'Video deleted successfully!';
    } else {
        $_SESSION['error'] = "Error deleting video: " . mysqli_error($connection);
    }

    header("Location: http://localhost/sound/musico%20admin%20panel/mp4.php");
    exit();
}

if (isset($_POST['add_video'])) {
    // Set upload limits
    ini_set('upload_max_filesize', '100M');
    ini_set('post_max_size', '110M');
    ini_set('max_execution_time', '300');

    // Allowed file types
    $allowed_video_types = ['video/mp4'];
    $allowed_image_types = ['image/jpeg', 'image/png', 'image/webp'];

    // Max file sizes
    define('MAX_VIDEO_SIZE', 50 * 1024 * 1024); // 50MB
    define('MAX_THUMB_SIZE', 5 * 1024 * 1024); // 5MB

    // Validate video upload
    if ($_FILES['video_file']['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['error'] = "Video upload error.";
        header("Location: mp4.php");
        exit();
    }

    // Validate thumbnail (optional)
    if ($_FILES['cover_image']['error'] !== UPLOAD_ERR_OK && $_FILES['cover_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $_SESSION['error'] = "Thumbnail upload error.";
        header("Location: mp4.php");
        exit();
    }

    // Size checks
    if ($_FILES['video_file']['size'] > MAX_VIDEO_SIZE) {
        $_SESSION['error'] = "Video too large (max 50MB).";
        header("Location: mp4.php");
        exit();
    }

    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK && 
        $_FILES['cover_image']['size'] > MAX_THUMB_SIZE) {
        $_SESSION['error'] = "Thumbnail too large (max 5MB).";
        header("Location: mp4.php");
        exit();
    }

    // Type checks
    if (!in_array($_FILES['video_file']['type'], $allowed_video_types)) {
        $_SESSION['error'] = "Invalid video type. Only MP4 allowed.";
        header("Location: mp4.php");
        exit();
    }

    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK && 
        !in_array($_FILES['cover_image']['type'], $allowed_image_types)) {
        $_SESSION['error'] = "Invalid thumbnail type. Only JPG, PNG, WebP allowed.";
        header("Location: mp4.php");
        exit();
    }

    // Sanitize form inputs
    $title = mysqli_real_escape_string($connection, $_POST['video_title']);
    $artist = mysqli_real_escape_string($connection, $_POST['artist']);
    $album = isset($_POST['album']) ? ucwords(strtolower(trim($_POST['album']))) : null;
    $genre = mysqli_real_escape_string($connection, $_POST['genre']);
    $year = !empty($_POST['year']) ? (int) $_POST['year'] : null;
    $language = !empty($_POST['language']) ? mysqli_real_escape_string($connection, $_POST['language']) : null;
    $description = !empty($_POST['description']) ? mysqli_real_escape_string($connection, $_POST['description']) : null;

    $is_new = ($year >= 2020) ? 1 : 0;

    // Upload directories
    $video_dir = "uploads/videos/";
    $thumb_dir = "uploads/thumbnails/";

    if (!is_dir($video_dir)) mkdir($video_dir, 0777, true);
    if (!is_dir($thumb_dir)) mkdir($thumb_dir, 0777, true);

    // Unique filenames
    $video_filename = uniqid() . '_' . basename($_FILES['video_file']['name']);
    $video_target = $video_dir . $video_filename;

    $thumb_filename = null;
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] === UPLOAD_ERR_OK) {
        $thumb_filename = uniqid() . '_' . basename($_FILES['cover_image']['name']);
        $thumb_target = $thumb_dir . $thumb_filename;
    }

    // Upload files
    $upload_success = move_uploaded_file($_FILES['video_file']['tmp_name'], $video_target);
    if ($thumb_filename) {
        $upload_success = $upload_success && move_uploaded_file($_FILES['cover_image']['tmp_name'], $thumb_target);
    }

    if ($upload_success) {
        // Escape filenames
        $video_filename_escaped = mysqli_real_escape_string($connection, $video_filename);
        $thumb_filename_escaped = $thumb_filename ? mysqli_real_escape_string($connection, $thumb_filename) : null;

        // Insert into database
        $query = "INSERT INTO videos 
            (title, artist, album, genre, year, language, description, file_path, thumbnail, is_new) 
            VALUES (
                '$title',
                '$artist',
                " . ($album ? "'$album'" : "NULL") . ",
                '$genre',
                " . ($year ? $year : "NULL") . ",
                " . ($language ? "'$language'" : "NULL") . ",
                " . ($description ? "'$description'" : "NULL") . ",
                '$video_filename_escaped',
                " . ($thumb_filename_escaped ? "'$thumb_filename_escaped'" : "NULL") . ",
                $is_new
            )";

        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['success'] = "Video added successfully!";
        } else {
            $_SESSION['error'] = "Database error: " . mysqli_error($connection);
            if (file_exists($video_target)) unlink($video_target);
            if ($thumb_filename && file_exists($thumb_target)) unlink($thumb_target);
        }
    } else {
        $_SESSION['error'] = "File upload failed. Check folder permissions.";
    }

    header("Location: http://localhost/sound/musico%20admin%20panel/dashboard.php");
    exit();
}

// Review the song 
// if (isset($_POST['submit_review'])) {
//     // ✅ Only check login when review is being submitted
//     if (!isset($_SESSION['user_id'])) {
//         echo "<script>alert('Please log in to submit a review.'); window.location.href = 'login.php';</script>";
//         exit();
//     }
// }
// song review
if (isset($_POST['submit_review'])) {
    $user_id = $_SESSION['user_id'];
    $song_id = $_POST['song_id'];
    $song_name = $_POST['song_name'];
    $artist_name = $_POST['artist_name'];
    $rating = $_POST['rating'];
    $experience = $_POST['experience'];
    $advice = $_POST['advice'];
    $created_at = date('Y-m-d H:i:s');

    $checkReview = mysqli_query($connection, "SELECT * FROM reviews WHERE user_id = '$user_id' AND song_id = '$song_id'");
    if (mysqli_num_rows($checkReview) > 0) {
        echo "<script>
                alert('You Have Already Reviewed The Song!');
                window.location.href = 'review.php';
              </script>";
    } else {
        $query = mysqli_query($connection, "INSERT INTO reviews (user_id, song_id, song_name, artist_name, rating, experience, advice, created_at) VALUES ('$user_id', '$song_id', '$song_name', '$artist_name', '$rating', '$experience', '$advice', '$created_at')");
        if ($query) {
            echo "<script>
                    alert('Review submitted successfully!');
                    window.location.href = 'review.php';
                  </script>";
        } else {
            echo "Error inserting review: " . mysqli_error($connection);
        }
    }
}


// ========== REVIEW UPDATE ==========
if (isset($_POST['update_review'])) {
    $review_id = $_POST['review_id'];
    $rating = $_POST['rating'];
    $experience = $_POST['experience'];
    $advice = $_POST['advice'];

    $updateReviewQuery = mysqli_query($connection, "UPDATE reviews SET 
        rating = '$rating', 
        experience = '$experience', 
        advice = '$advice' 
        WHERE id = '$review_id'
    ");

    if ($updateReviewQuery) {
        echo "<script>
        alert('Review updated successfully!');
        location.assign('musico admin panel/review.php');
        </script>";
    } else {
        echo "<script>alert('Error updating review');</script>";
    }
}
// ========== REVIEW DELETE ==========
if (isset($_POST['delete_review'])) {
    $review_id = $_POST['review_id'];

    $deleteReviewQuery = mysqli_query($connection, "DELETE FROM reviews WHERE id = '$review_id'");

    if ($deleteReviewQuery) {
        echo "<script>
                alert('Review deleted successfully!');
                location.assign('musico admin panel/review.php');
              </script>";
    } else {
        echo "<script>
                alert('Error deleting review: " . mysqli_error($connection) . "');
              </script>";
    }
}




// for updating user and song
$userQuery = mysqli_query($connection, "SELECT COUNT(*) as total_users FROM users");
$totalUsers = mysqli_fetch_assoc($userQuery)['total_users'];

$lastUserQuery = mysqli_query($connection, "SELECT full_name FROM users ORDER BY created_at DESC LIMIT 1");
$lastUser = mysqli_num_rows($lastUserQuery) > 0 ? mysqli_fetch_assoc($lastUserQuery)['full_name'] : 'No users yet';

// Note: We removed the individual music statistics here since we're now getting them in the dashboard.php


?>
<!-- me -->