<?php

$con = new mysqli('localhost' ,'root', '','rest');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Tworzenie stron internetowych , pozycjonowanie stron seo, strony oraz sklepy internetowe">
    <title>Pod Niebieskim Kurem</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo">
        <a href="#">Pod Niebieskim Kurem</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#about">O Nas</a></li>
        <li><a href="#contact">Kontakt</a></li>
        <li><a href="dashboard.php">Zaloguj</a></li>
      </ul>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <div class="banner">
      <h1>Witaj Pod Niebieskim Kurem </h1>
      <a class="ez" href="#menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Zobacz Nasze Menu!
      </a>
    </div>



<!-- MENU -->


      <div id="menu" class="col-12 d-flex">
        <h1>⚛   Nas<span>ze Me</span>nu!   ⚛</h1>

        <table>
          <tr style='font-size:20px' >
            <th style='padding-right: 15vw'>Numer</th>
            <th style='padding-right: 15vw'>Nazwa</th>
            <th>Cena</td>
            <tr>

        <?php 
    $result = $con-> query("SELECT  id , nazwa, cena FROM dania ;" );
    while($row = $result->fetch_assoc()){  
    echo "<tr style='font-size:20px' ><td style='padding-right: 15vw'>" . $row['id'] . "</td> <td style='padding-right: 15vw'>" . $row['nazwa'] . "</td><td>" . $row['cena'] . "</td></tr>";  
    }
    
    echo "</table>"; 
    
    ?>
      </div>

    <!-- ZAMOWNIE -->
      <div id="zam" class=" col-12 ">
        <h2>Złóż zamówienie!</h2>
        <h4> Zaloguj się aby złożyć zamówienie</h4>
        <button><a href="#">Zaloguj się</a></button>
      </div>


    <!-- ABOUT -->
      <div id="about" class=" col-12 ">
        <h2>O <span>Nas</span>!</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo quis, at pariatur fuga, nam sed eius deserunt, porro ipsa corporis consequatur. Repellendus pariatur hic quasi facere quam ipsam magni? Nobis excepturi consequuntur vitae quis impedit similique non repudiandae sapiente ab, nesciunt repellendus aperiam voluptatem atque illum cum ipsam iure molestias amet quae vero architecto consectetur. Aperiam totam minus reiciendis tempore.Excepturi illum perferendis earum rerum soluta, reiciendis vero tenetur autem fugit distinctio provident animi voluptatibus laborum dolor quasi placeat libero dignissimos! Nulla et eos natus ducimus molestias recusandae at asperiores numquam nisi magnam, magni, quasi assumenda enim adipisci doloribus ratione. Quisquam, id!</p>
      </div>

      <!-- Kontakt -->
      <div id="contact" class="col-12">
        <h2>☆ <span>Kon</span>takt ☆</h2>
        
        <div class="kon1 col-6 ">
        <ul>
          <li>podniebieskimkurem@gmail.com</li>
          <li>021 028 902</li>
          <li>Sandomierska 1 , Nisko</li>
          <ul></div>

          <div class="kon2 col-6 ">
          <h4>Smacznego!</h4>
        </div>
      </div>




   
  
      <script src="script.js"></script> 

      <script src="script.js" type="text/javascript"></script>

  </body>
</html>