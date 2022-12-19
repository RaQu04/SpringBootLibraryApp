<?php
     require_once "dbconnect.php";
     $conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");

    $q = "create table ksiazki (id int, tytul varchar(255), wydawca varchar(255), kategoria varchar(255), rok_wydania int, primary key(id))";

    mysqli_query($conn, $q);

    mysqli_close($conn);
    echo "OK";
?>