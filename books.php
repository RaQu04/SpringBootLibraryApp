<?php
include('dbconnect.php');
require_once "dbconnect.php";
$conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia");
$query = "SELECT id, tytul, autor, wydawca, kategoria, rok_wydania FROM ksiazki";
$result = $conn->query($query);
?>
<table border="1" cellspacing="0" cellpadding="10">
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
  $sn=1;
  while($data = $result->fetch_assoc()) {
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
  $sn++;}} else { ?>
    <tr>
     <td colspan="6">No data found</td>
    </tr>

 <?php } ?>
  </table>