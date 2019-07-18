<?php 
	$host	= "localhost";
	$user	=	"root";
	$pwd	=	"";
	$db		=	"tugas_tim";

	$conn	=	mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno($conn)) {
			mysqli_connect_error();
		}
	
 ?>