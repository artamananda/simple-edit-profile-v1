<?php
    require 'data.php';

    $social_media = ["facebook", "instagram", "github"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Profil</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold fst-italic fs-3" href="index.php">UnsriMHS</a>
    </div>
    </nav>
    <!-- End Navbar -->

    <!-- Main Profile -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-4 text-center">
                <!-- Profile Picture -->
                <img class="profile-picture img-fluid" src="img/<?= $data["profile_pict"]; ?>" alt="Foto Profil">
                <br>
                <!-- Edit Profile Button -->
                <a href="edit_profile.php"><button type="button" class="btn btn-dark mt-5">Edit Profile</button></a>
                <br>
            </div>
            <div class="col-8">
                <!-- Name -->
                <h1 class="profile-name fw-bold"><?= $data["firstname"] . " " . $data["lastname"]; ?></h1>
                <!-- Verified Badge -->
                <img class="verified img-fluid" src="img/verified.png" alt="verified">
                <!-- Username -->
                <p>@<?= $data["username"]; ?></p>
                <!-- Bio -->
                <p class="bio"><?= $data["bio"]; ?></p>
                <!-- Social Media -->
                <p>Follow me : </p>
                <?php foreach($social_media as $sosmed) : ?>
                    <div class="social-media img-fluid">
                        <a href="https://www.<?= $sosmed; ?>.com/<?= $data[$sosmed]; ?>" target="_blank">
                            <img src="img/<?= $sosmed; ?>.png" alt="<?= $sosmed; ?>">
                        </a>
                </div>
                <?php endforeach;?>
                <!-- End Social Media -->
            </div>
        </div>
    </div>
    <!-- End Main Profile -->
</body>
</html>