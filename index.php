<?php


include 'connection.php';

$sql = "SELECT id, voornaam, achternaam, adress, telefoon FROM item";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<title>CurdSysteem | Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav>
<ul><li id="naam">Curd Systeem</li><span id="right"><a href="newrecord.html"><li class="btn">Record Toevoegen</li></a></span></ul>
</nav>

<?php	if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) { ?>

<table>
  <tr>
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>Stad</th>
    <th>Telefoon</th>
  </tr>
  <tr>
    <td><p><?php echo $row["voornaam"]; ?></p></td>
    <td><p><?php echo $row["achternaam"]; ?></p></td>
    <td><p><?php echo $row["adress"]; ?></p></td>
     <td><p><?php echo $row["telefoon"]; ?></p></td>
  </tr>
  <tr>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>"><input type="submit" value="edit"></a>	</td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>"><input type="submit" value="delete" ></a></td>
    <td></td>
    <td></td>
  </tr>
</table>

<?php
}
} else {
  echo "0 results";
}
$conn->close();
?>




</body>
</html>
