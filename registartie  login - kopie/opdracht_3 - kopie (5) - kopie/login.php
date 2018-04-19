<?php
include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <div class="login-wrapper">
            <div  id="gedoe">
                <h2 class="title" id="login-title">Log in</h2>
            </div>
            <?php
            if (isset ($_GET['message'])) {
                include_once 'includes/message-list.inc.php';
            }
            ?>
            <form class="signup-form" action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username/e-mail">
                <input type="Password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Login</button>
                <a class="extras" href="signup.php"> Don't Have An Account? Join Acense Now!</a><br>
                <a class="extras" href="forgetpass.php"> Forgot Your Password?</a>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>


