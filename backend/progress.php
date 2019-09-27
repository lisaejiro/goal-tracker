<?php
require("conn.php");
$todo1=mysqli_query($conn, "select * from todo where goal_id=2");

$todo2=mysqli_query($conn, "select count(*) from todo where goal_id=2 and status='completed'");
$completed=$todo2->num_rows;
$total= $todo1->num_rows;
$result=ceil(($completed/$total)*100);
echo $result;
?>
