<?php
include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <div class="login-wrapper">
            <div  id="gedoe">
                <h2 class="title" id="login-title">Signup</h2>
            </div>
            <?php
            if (isset ($_GET['message'])) {
                include_once 'includes/message-list.inc.php';
            }
            ?>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="Password" name="pwd" placeholder="Password">
                <span class="terms">Bye creating a count you have read, understand, and agree to the <a href="Terms.php" target="_blank">Terms of Service</a></span>
                <button type="submit" name="submit">Sign up</button>
                <a class="extras" href="login.php"> Already Have An Account? Log In!</a>
        </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>


