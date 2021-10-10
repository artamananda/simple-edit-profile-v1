<?php
    require 'functions.php';
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
    <title>Edit Profil</title>
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
    <form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row mt-5 mb-5">
            <!-- Left Side -->
            <div class="col-4 text-center">
                <!-- Profile Picture -->
                <img class="profile-picture img-fluid mb-3" src="img/<?= $data["profile_pict"]; ?>" alt="Foto Profil">
                <br>
                <!-- Change Profile Picture -->
                <div class="container mb-3">
                    <label for="profile-picture" class="form-label">Change Profile Picture</label>
                    <input type="file" name="profile_pict" class="form-control" id="profile-picture" value="<?= $data["profile_pict"]; ?>">
                </div>
                <br>
            </div>
            <!-- Right Side -->
            <div class="col-8">
                <div class="row g-3 mb-3">
                    <!-- First Name -->
                    <div class="col">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" value="<?= $data["firstname"]; ?>">
                    </div>
                    <!-- Last Name -->
                    <div class="col">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="<?= $data["lastname"]; ?>">
                    </div>
                </div>
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" name="username" class="form-control" id="username" value="<?= $data["username"]; ?>" required>
                    </div>
                </div>
                <!-- Bio -->
                <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <input type="text" name="bio" class="form-control" id="bio" value="<?= $data["bio"]; ?>">
                </div>
                <!-- Facebook -->
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <div class="input-group">
                        <div class="input-group-text">facebook.com/</div>
                        <input type="text" name="facebook" class="form-control" id="facebook" value="<?= $data["facebook"]; ?>">
                    </div>
                </div>
                <!-- Instagram -->
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <div class="input-group">
                        <div class="input-group-text">instagram.com/</div>
                        <input type="text" name="instagram" class="form-control" id="instagram" value="<?= $data["instagram"]; ?>">
                    </div>
                </div>
                <!-- GitHub -->
                <div class="mb-3">
                    <label for="github" class="form-label">GitHub</label>
                    <div class="input-group">
                        <div class="input-group-text">github.com/</div>
                        <input type="text" name="github" class="form-control" id="github" value="<?= $data["github"]; ?>">
                    </div>
                </div>
                <!-- Cancel Button -->
                <a href="index.php">
                    <button type="button" class="btn btn-secondary mt-3">Cancel</button>
                </a>
                <!-- Save Changes Button -->
                <input type="submit" name="submit" value="Save Changes" class="btn btn-dark mt-3">
            </div>
        </div>
    </div>
    </form>
    <!-- End Main Profile -->
</body>
</html>