<?php

include 'connection.php';

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$adress = $_POST["adress"];
$telefoon = $_POST["telefoon"];


$sql = "INSERT INTO item (voornaam, achternaam, adress, telefoon)
VALUES ('$voornaam', '$achternaam', '$adress','$telefoon')";

if (mysqli_query($conn, $sql)) {
   header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);








?>