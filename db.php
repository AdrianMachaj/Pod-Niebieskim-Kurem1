<?php
    //laczenie z baza ddancyh
    $con = mysqli_connect("localhost","root","", "rest");
    if (mysqli_connect_errno()){
        echo "Nie udało się: " . mysqli_connect_error();
        
    }
?>
