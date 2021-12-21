<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Pod Niebieskim Kurem - Rejestracja</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
        
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Twoje konto zostało utworzone!</h3><br/>
                  <p class='link'>Możesz się <a href='login.php'>Zalogować</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Coś poszło nie tak.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Rejestracja</h1>
        <input type="text" class="login-input" name="username" placeholder="Nazwa użytkownika" required /><br><br>
        <input type="text" class="login-input" name="email" placeholder="Email"><br><br>
        <input type="password" class="login-input" name="password" placeholder="Hasło:"><br><br>
        <input type="submit" name="submit" value="Załóż Konto" class="login-button">
        <p class="link"><a href="login.php">Zaloguj się</a></p>
    </form>
<?php
    }
?>
</body>
</html>