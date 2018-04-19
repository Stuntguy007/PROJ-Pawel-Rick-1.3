<?php
include_once 'header.php';
?>

<section class="main-container">
    <div class="main-wrapper">
        <h2 class="title">Forget password</h2>
        <form class="signup-form" method="post" action="includes/forgetpass.inc.php" id="forgetpass">
            <div class="textbox">
                If you forgot your password then we'll attempt to email you. If you don't receive the email then try looking in your spam folder.
            </div>
            <input type="text" name="email" placeholder="E-mail">
            <button type="submit" name="submit" id="continue">Continue</button>
        </form>
    </div>
</section>

<?php
include_once 'footer.php';
?>

