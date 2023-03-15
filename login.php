<?php

session_start();
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "john";
    $password = "123";
     
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['login_user'] = $username;
        header("location: welcome.php");
    } else {
        $error = "Invalid username or password";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <label>Username :</label>
        <input type="text" name="username" /><br />
        <label>Password :</label>
        <input type="password" name="password" /><br/><br />
        <input type="submit" value=" Login "/><br />
    </form>
    <div><?php echo isset($error) ? $error : ''; ?></div>
</body>
</html>