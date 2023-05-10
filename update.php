<?php

include "connection.php";

$id = $_GET["id"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$adress = $_POST["adress"];
$telefoon = $_POST["telefoon"];

$sql = "UPDATE item SET voornaam='$voornaam', achternaam='$achternaam', adress='$adress', telefoon='$telefoon' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>