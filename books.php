<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domowa Biblioteka</title>
  <link rel="Stylesheet" href="style.css" type="text/css" />
  <script src="script.js"></script>
</head>

<body>
  <h1>Witam w aplikacji biblioteki domowej! </h1>

  <nav>
    <a href="index.html">Strona Główna</a>
    <a href="books.php">Przeglądaj</a>
    <a href="new_book.html">Dodaj książkę</a>
    <a href="new_account.html">Zarejestruj się</a>
    <a href="#">Zaloguj się</a>
    <div class="animation start-home"></div>

  </nav>

  <br>
  <br>
  <img class="center" src="src/library.jpg" alt="Photography of library">

  <br>

  <br>

  <?php
  include('dbconnect.php');
  require_once "dbconnect.php";
  $conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");
  $query = "SELECT id, tytul, autor, wydawca, kategoria, rok_wydania FROM ksiazki";
  $result = $conn->query($query);
  ?>
  <table id="table_books" border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Tytul</th>
      <th>Autor</th>
      <th>Wydawca</th>
      <th>Kategoria No</th>
      <th>Rok wydania</th>

    </tr>
    <?php
    if ($result->num_rows > 0) {
      $sn = 1;
      while ($data = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $data['id']; ?> </td>
          <td><?php echo $data['tytul']; ?> </td>
          <td><?php echo $data['autor']; ?> </td>
          <td><?php echo $data['wydawca']; ?> </td>
          <td><?php echo $data['kategoria']; ?> </td>
          <td><?php echo $data['rok_wydania']; ?> </td>
        <tr>
        <?php
        $sn++;
      }
    } else { ?>
        <tr>
          <td colspan="6">No data found</td>
        </tr>

      <?php } ?>
  </table>

 
  
 </body>

</html>