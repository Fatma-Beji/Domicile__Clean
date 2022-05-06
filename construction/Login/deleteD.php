<?php
include('../connexion.php');


echo $idd =$_GET['idd'];
$req=" delete from `domaine` where `idd`='$idd' ";
$res=mysqli_query($con,$req);

if($res){
	header('location: index.php');
}




?>