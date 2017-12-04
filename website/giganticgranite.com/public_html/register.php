<?php 
    require_once 'utils.php'; 
    if (signed_in()) {
        $http = new HTTP2();
        $http->redirect('/');
    }
?>

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
                    <li class="nav-item">
                        <a class="nav-link" href="/">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <?php
            if (isset($_POST['username']) && isset($_POST['password'])) {
                global $result;
                $result = sign_up($_POST['username'], $_POST['password']);
                if ($result == 0) {
                    echo "Your account was created!";
                } 
            }
            if (!isset($result) || $result != 0) { ?>

                <!-- sign up -->
                <div class="container">
                    <form class="form-signin" action="register.php" method="post" onsubmit="return form_submit()">
                        <h2 class="form-signin-heading">Sing up</h2>
                        <div class="form-group">
                            <label for="inputUsername" class="sr-only">Username</label>
                            <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required>
                            <?php
                            if (isset($result) && $result == 1) { ?>
                                <span class="help-block">Username taken</span>
                                <?php
                            } ?>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group" id="divPasswordRepeat">
                            <label for="inputPasswordRepeat" class="sr-only">Repeat password</label>
                            <input type="password" id="inputPasswordRepeat" class="form-control" placeholder="Repeat password" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="agree" required> I agree with <a href="#">Terms and conditions</a>
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>

                <?php
            } else {
                require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
                $http = new HTTP2();
                $http->redirect('/');
            } ?>
        </main>

        <!-- JQuery, Popper.js, Bootstrap JS scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="scripts/validate.js"></script>        
    </body>
</html>
