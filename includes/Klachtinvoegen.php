<?php
 include_once 'connect.php';



 if(isset($_POST['submit']))
{    
  $Email = $_POST['Email'];
  $Telefoonnummer = $_POST['Telefoonnummer'];
  $Campeerplaats = $_POST['Campeerplaats'];
  $Klacht = $_POST['Klacht'];
  $sql = "INSERT INTO Klachten ('id', 'Email', 'Telefoonnummer', 'Campeerplaats', 'Klacht') VALUES ('NULL', '$Email', '$Telefoonnummer', '$Campeerplaats', '$Klacht')";
}




?>