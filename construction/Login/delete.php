<?php
include('../connexion.php');


echo $ida =$_GET['ida'];
$req=" delete from `agent` where `ida`='$ida' ";
$res=mysqli_query($con,$req);

if($res){
	header('location: index.php');
}




?>