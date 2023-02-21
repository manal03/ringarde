<?php
include("connection.php");
if(isset($_POST['submitbtn'])){
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$insert_query="insert into `users` (name, email, password) values ('$name', '$password','$email')";
$sql_execute=mysqli_query($con,$insert_query);

if($sql_execute){
    echo 'User added';
}else{
    echo 'User not added';
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register!</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="form">
        <form action="" method="post"> <!--*Difference between post and get*-->
            <link rel="stylesheet" href="style.css">
            <div class="input-box">
                <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-box">
                <input type="text"  placeholder="Email" name="email">
            </div>
            <div class="input-box">
                <input type="text"  placeholder="Password" name="password">
            </div>
            <a href="#" >Do you have an account? <strong>Sign in </strong></a>
            <div class="box">
                <input type="submit"  name="submitbtn" value="submit">
            </div>

    </div>
    </form>
    </div>

</body>

</html>