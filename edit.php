<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<title>CurdSysteem | Edit</title>
<link href="css/newrecord.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav>
<ul><li id="naam">Curd Systeem - Edit Page</li></ul>
</nav>
		
<?php

include 'connection.php';
 
$id = $_GET['id'];
$query= mysqli_query($conn, "SELECT * FROM item WHERE id=$id");
while($row = mysqli_fetch_array($query))
{

$id = $row['id'];
$voornaam = $row['voornaam'];
$achternaam = $row['achternaam'];
$adress = $row['adress'];
$telefoon = $row['telefoon'];

}
?>

<form method="post" action="update.php?id=<?php echo $id; ?>">


<label for="voornaam">Voornaam</label><br>
<input type="text" name="voornaam" id="voornaam" value="<?php echo $voornaam; ?>"><br>
        
<label for="achternaam">Achternaam</label><br>
<input type="text" name="achternaam" id="achternaam" value="<?php echo $achternaam; ?>"><br>

<label for="adress">Adress</label><br>
<input type="text" name="adress" id="adress" value="<?php echo $adress; ?>"><br>

<label for="telefoon">Telefoon</label><br>
<input type="text" name="telefoon" id="telefoon" value="<?php echo $telefoon; ?>"><br>
		
<input type="submit" value="update"></a>
<span><a href="index.php"><li class="btn">Terug naar Home</li></a></span>

</form>

</body>

</html>