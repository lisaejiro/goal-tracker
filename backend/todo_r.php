<?php
require ("conn.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="todore.php" method="post">
<input type="text" name="id" value="<?php if(isset($id)){ echo $id;}?>">
<input type="text" name="goal" placeholder="how are you set to achieve?">
<button type="submit"> add todo </button>


</form>

<h4><?php if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
}
    ?>
    
</h4>

</body>
</html>
<?php
unset($_SESSION['success']);
?>