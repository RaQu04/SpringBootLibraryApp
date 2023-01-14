<?php

 if (isset($_POST['tytul'])) 
{
    require_once "dbconnect.php";
    $conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");

  
    $autor = $_POST['autor'];
    $wydawca = $_POST['wydawca'];
    $kategoria = $_POST['kategoria'];
    $rok_wydania = $_POST['rok_wydania'];
    $tytul = $_POST['tytul'];

    $q = "insert into ksiazki (tytul, autor, wydawca, kategoria, rok_wydania) value ('$tytul', '$autor', '$wydawca', '$kategoria', $rok_wydania)";

    mysqli_query($conn, $q);

    mysqli_close($conn);
} else {
    echo "Connection Error - problem with values";
}
?>