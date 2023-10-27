<?php
require 'conectare.php';

$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$parereata=$_POST['parereata'];


$sql="INSERT INTO utilizatori(nume,prenume,parereata) VALUES(?,?,?)";
$stmt=mysqli_stmt_init($conectare);
mysqli_stmt_bind_param($stmt,"sss",$nume,$prenume,$parereata);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
?>

