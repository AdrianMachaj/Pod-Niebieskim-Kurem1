<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Pod Niebieskim Kurem - Logowanie</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // tworzenie sesji
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // usuwanie backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Zła nazwa lub hasło.</h3><br/>
                  <a href='login.php'>Spróbuj Ponownie</a> 
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Zaloguj się</h1>
        <input type="text" class="login-input" name="username" placeholder="Nazwa użytkownika" autofocus="true"/><br><br>
        <input type="password" class="login-input" name="password" placeholder="Hasło"/><br><br>
        <input type="submit" value="Zaloguj" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">Załóż Konto</a></p>
  </form>
<?php
    }
?>
</body>
</html>