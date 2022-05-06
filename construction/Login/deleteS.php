<?php
include('../connexion.php');


echo $ids =$_GET['ids'];
$req=" delete from `services` where `ids`='$ids' ";
$res=mysqli_query($con,$req);

if($res){
	header('location: index.php');
}




?>