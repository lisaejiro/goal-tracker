<?php

require ("conn.php");



	if($_SERVER['REQUEST_METHOD']== 'POST'){

	$goal=$conn->real_escape_string(htmlentities($_POST['goal'],ENT_QUOTES));
	date_default_timezone_set("Africa/Lagos");
	$date=date("Y-m-d h:i:sa");

		mysqli_query($conn, "insert into goal set goal='$goal',time_created='$date'") or die(mysql_error($conn));
    
		$_SESSION['success']="New Goal set!";
		header("Location: todo.php");
			
	



}