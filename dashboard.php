<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pod Niebieskim Kurem - Panel Klienta</title>
    <link rel="stylesheet" href="style4.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
  
    <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="index.php">Pod Niebieskim Kurem</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="logout.php">Wyloguj</a></li>
      </ul>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>


  <div class="banner">
  <h1>Witaj <?php echo $_SESSION['username']; ?>!<br>
  Oto Twój Panel Klienta!<br>
  Złóż Zamowienie!</h1>

      
    </div>


  <div class="zamownienia  col-12  col-m-6">
  <form class="form  col-6" method="post" name="zamownie" action=dashboard.php>
        <h1 class="zam-title">⚛ Złó<span>ż Zamówi</span>enie! ⚛</h1>
        <input type="text"  name="nazwa" placeholder="Nazwa Dania" /><br><br>
        <input type="text" placeholder="Twój adres" name="adres" /><br><br>
        <input type="text" placeholder="Numer telefonu" name="numer" /><br><br>
        <input type="submit" value="Złóż zamówienie" name="submit" class="login-button"/>
  </form>
</div>

<?php


$nazwa_z=$_POST['nazwa'];
$adres_z=$_POST['adres'];
$numer_z=$_POST['numer'];


date_default_timezone_set('europe/warsaw');
$data_z=date("y-m-d g:i");

$con = new mysqli('localhost' ,'root', '','rest');

//Dodawanie zamownia przez pobranie wartosci z  formularza 
$result = $con-> query("INSERT INTO `zamowienia`(`nazwa`,`zdata`,`adres`,`numer`)
VALUES('$nazwa_z','$data_z','$adres_z','$numer_z')");

if($result) echo "zamowienie zostało przyjete";
else echo "Błąd nie udało się złozyć zamowienia";




?>







<script src="script.js"></script> 
</body>
</html>