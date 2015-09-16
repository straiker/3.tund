<?php
$email_error = "";
$pswd_error = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate login form
    if (isset($_POST['login'])) {
        if (empty($_POST['email'])) {
            $email_error = "Email kohustuslik!";
        } else {
            echo $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $pswd_error = "Password kohustuslik!";
        } else {
            echo $_POST['password'];
        }
    }
}
?>

<div id="login_form">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="email" name="username" id="email" placeholder="Email"><? echo $email_error;?><br>
        <input type="password" name="password" id="password" placeholder="password"><? echo $pswd_error;?><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
