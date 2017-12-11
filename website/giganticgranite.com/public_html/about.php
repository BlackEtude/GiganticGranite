<?php require_once 'utils.php' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gigantic Granite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Gigantic Granite</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php
                    if (signed_in()) { ?>
                        <li class="nav-item">
                            <a class="nav-link disabled"><?php echo $_SESSION['username']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Log out</a>
                        </li>
                        <?php
                    } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Sing in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Sign up</a>
                        </li>
                        <?php
                    } ?>
                </ul>
            </div>
        </nav>

        <!-- fill main -->
        <main>
            <div class="container text-center">
                <h3>This project was created by:</h3>
                <ul class="list-group">
                    <li class="list-group-item">Miriam Jańczak</li>
                    <li class="list-group-item">Agata Jasionowska</li>
                    <li class="list-group-item">Małgorzata Kaczmarczyk</li>
                    <li class="list-group-item">Michał Krasoń</li>
                    <li class="list-group-item">Wojciech Przytarski</li>
                    <li class="list-group-item">Paweł Rakosza</li>
                </ul>
            </div>
        </main>

        <!-- JQuery, Popper.js, Bootstrap JS scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>