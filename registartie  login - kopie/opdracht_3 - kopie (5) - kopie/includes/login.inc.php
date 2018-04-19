<?php

session_start();

if (isset($_POST['submit'])) {

    include 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Erros handelers
    //check if input are empty

    if (empty($uid) || empty($pwd)){
        header("Location: ../login.php?message=input-empty" );
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='%uid'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            header("Location: ../login.php?message=username-wrong");
            exit();
        } else {
            if($row = mysqli_fetch_assoc($result)) {
                // dehashing de password
                $hashedPwdCheck = Password_verify($pwd, $row['user_pwd']);
                if ($hashedPwdCheck == false) {
                    header("Location: ../login.php?message=pass-wrong");
                    exit();
                } elseif ($hashedPwdCheck == true) {
                    //login the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_id'];
                    header("Location: ../index.php?message=login-success");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../login.php?message=iets-mis");
    exit();
}