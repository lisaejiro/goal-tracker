<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $email=$password="";
    // validate name 
    if (empty($_POST["uname"])) {
        $unam = 'Full name required';
       
    } else{
        $uname = test_values($_POST["uname"]);
        
    }
    //validate email
    if (empty($_POST["email"])) {
        $ema = 'Email required';
    }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $ema = 'Enter a valid email';
    }else{
        $email = test_values($_POST["email"]);  
    }

    //validate password
    if(empty($_POST["pswd"])){        
        $pass = 'Please enter a password';

            }elseif(!preg_match("/^[a-zA-Z0-9]*$/",$_POST["pswd"])){                
        $pass = 'Password must be in alphanumeric.';
    }elseif(strlen($_POST["pswd"])< 6){
        $pass = 'Password must be at least six characters.';
    }else {
        $password = test_values($_POST["pswd"]);  
    }

        $passw2 = test_values($_POST["pass"]);
    
    // validating passwords

     if( $password !== $passw2) {

    $err="<b>Please confirm your password!</b>";
    
    }else{
        $password = password_hash(test_values($_POST["pswd"]),PASSWORD_DEFAULT);
    }




  if(empty($ema) && empty($pass) && empty($err)){  

    $result = mysqli_query($conn, "SELECT * FROM users where email='$email'");

    if (mysqli_num_rows($result) == 0) {
    
        //create account
        mysqli_query($conn, "insert into users set name='$uname', email='$email', password='$password'") or die(mysql_error($conn));
        
        $_SESSION['sms']= "<div class='alert alert-success'>
        <strong>Success!</strong> Proceed to <a href='login.php'>Login</a>
      </div>";
            
        $email=$password="";
        }
        
        else {
        $err="<font color=red><b>Email already exist!</b></font>";
        
        }
   
        
    }
    

} 
    







function test_values($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // $data = empty($data);
    return $data;
}


?>