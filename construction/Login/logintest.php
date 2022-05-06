<?php 

include_once'connexion.php';
session_start();

	if(isset($_POST['sub'])){
		$user=$_POST["username"];
		$pass=$_POST["pass"];

	$reqad ="select * from admin where nomad='$user' and passwordad='$pass' ";
	$query=mysqli_query($con,$reqad);
	$row=mysqli_num_rows($query);
		if($row == 1){
			echo "login succ";
			header('location:index.php');
			$_SESSION['username']=$user;
			

		}
		else
		{
			$reqad ="select * from client where namecl='$user' and passwordcl='$pass' ";
			$query=mysqli_query($con,$reqad);
			$row=mysqli_num_rows($query);
			if($row == 1){
				echo "login succ";
				header('location:logincheck.php');
				$_SESSION['username']=$user;
	

			}
		}

}
?>