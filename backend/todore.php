<?php

require ("conn.php");



	if($_SERVER['REQUEST_METHOD']== 'POST'){
    $id=$conn->real_escape_string(htmlentities($_POST['id'],ENT_QUOTES));
    $goal=$conn->real_escape_string(htmlentities($_POST['goal'],ENT_QUOTES));
    $status='uncompleted';
	date_default_timezone_set("Africa/Lagos");
	$date=date("Y-m-d h:i:sa");

    mysqli_query($conn, "insert into todo set todo='$goal', goal_id='$id', status='$status' ") or die(mysqli_error($conn));
    
		$_SESSION['success']="to-do set!";
		header("Location: todo_r.php");
			
	



}