<?php 

include_once'connexion.php';
session_start();

$req= "select * from agent";
 $res=mysqli_query($con,$req);
 while($row = mysqli_fetch_array($res)){
                                                

$ida=$row['ida'];
$namea=$row['namea'];
$adra=$row['adra'];
$villea=$row['villea'];
$maila=$row['maila'];
$notea=$row['notea'];
$gendera=$row['gendera'];
$agea=$row['agea'];
$imga=$row['imga'];
$tela=$row['tela'];                                             
                                                     

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>







</body>
</html>

