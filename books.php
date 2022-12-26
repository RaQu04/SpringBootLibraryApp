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

<body class="form_exe">
  <h1>Witam w aplikacji biblioteki domowej! </h1>

  <nav>
    <a href="index.html">Strona Główna</a>
    <a href="books.php">Przeglądaj</a>
    <a href="new_book.html">Dodaj książkę</a>
    <a href="new_account.html">Zarejestruj się</a>
    <a href="new_account.html">Zaloguj się</a>
    <div class="animation start-about"></div>

  </nav>

  <h3 id="h_form_books">Przeglądaj ksiązki w tabeli </h3>

  <svg style="display: none">
    <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
      <path d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0          6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5          1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5            11z" fill="#fff" fill-rule="evenodd" />
    </symbol>
  </svg>

  <div class="search-bar">

    <input type="text" class="input" id="search" placeholder="&nbsp;">
    <span class="label">Wyszukaj</span>
    <span class="highlight"></span>
    <div class="search-btn">
      <svg class="icon icon-18">
        <use xlink:href="#magnify"></use>
      </svg>
    </div>
  </div>
  <div id="table_books_php">
    <?php
    include('dbconnect.php');
    require_once "dbconnect.php";
    $conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");
    $query = "SELECT id, tytul, autor, wydawca, kategoria, rok_wydania FROM ksiazki";
    $result = $conn->query($query);
    ?>
    <table class="table_books" border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th class="headers">ID</th>
        <th class="headers">Tytul</th>
        <th class="headers">Autor</th>
        <th class="headers">Wydawca</th>
        <th class="headers">Kategoria</th>
        <th class="headers">Rok wydania</th>

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

  </div>
</body>

</html>