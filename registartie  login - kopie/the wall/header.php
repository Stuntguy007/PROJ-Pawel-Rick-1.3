<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <!--                <li><a href="index.php">Home</a></li>-->
                <a href="index.php"><img src="fotos/logo5.png" id="logo" height="40"></a>
            </ul>
            <div class="nav-login">
                <?php
                if (isset($_SESSION['u_id'])) {
                    echo '<a class="balk-knopies" href="index.php">Home</a>';
                    echo '<a class="balk-knopies" href="upload.php">Upload</a>';
                    echo '<form action="includes/logout.inc.php" method="POST">
                            <button id="hallo" type="submit" name="submit">Logout</button>
                        </form>';
                } else {
                    echo '<a class="balk-knopies" href="index.php">Home</a>
                        <a class="balk-knopies" href="login.php">inloggen</a>
                        <a class="balk-knopies" href="signup.php">Sign up</a>';
                }
                ?>

            </div>
        </div>
    </nav>
</header>
