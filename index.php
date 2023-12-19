<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Event Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@300;400;500;600;700&family=REM:wght@300;400;500&family=Rubik+Maps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="black_bg">
        <div class="button-index">
        <a href="index.php"><button class="login">LOGIN</button></a>
        <a href="signup.php"> <button class="signin">SIGN IN</button> </a>   
    </div>
    </div>
    <div class="home">
    <div class="grey_bg">
        <div class="intro">
            <h1>CAMPUS EVENT </h1>
             <h1>MANAGEMENT</h1>
        </div>
    </div>
    <div class="Login-box">
        <div class="heading">
        <h2>Welcome User</h2></div>
    <form action="index.php" method="post">
        <div class="login-info">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            <div class="login-btn">
            <input type="submit" name="s1" class="button" value="Login">
            </div>
        </div>
    </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
include("conection.php");
 if(isset($_POST["s1"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $sql="SELECT * FROM user where email='$email'and password='$pass'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    $user=mysqli_fetch_assoc($result);
    if($rowCount=1){
        
       if($user["password"]=== $pass)
        {
        header("location:dashbroad.php");
        }
    }
    else{
        echo '<script type="text/javascript">alert("incorrect login information")</script>';
    }
    }
?>
</body>
</html>