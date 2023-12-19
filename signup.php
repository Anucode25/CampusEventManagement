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
    <form action="signup.php" method="post">
        <div class="login-info">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="repass" placeholder="Confirm Password">
                <label for="floatingPassword">Confirm Password</label>
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
    $password=$_POST["pass"];
    $repass=$_POST["repass"];
    //validate data
    $error=array();
    if(empty($email) OR empty($password) OR empty($repass) ){
        array_push($error,"ALL FIELDS ARE REQUIRED");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($error,"EMAIL IS NOT VALID");
    }
    if(strlen($password)<8){
        array_push($error,"Password must 8 characters");
    }
    if($password!==$repass){
        array_push($error,"Password doesn't match");
    }
    $sql="SELECT * FROM user where email='$email'";
    $result=mysqli_query($conn,$sql);
    $rowCount=mysqli_num_rows($result);
    if($rowCount>0){
        array_push($error,"EMAIL IS ALREADY REGISTERED");
    }

    if(count($error)>0){
        foreach($error as $e){
            echo '<script type="text/javascript">alert("'.$e.'")</script>';
        }
    }else{
        //insert into database
       $sql="INSERT INTO user(email,password,repass)VALUES(?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      $pst=mysqli_stmt_prepare($stmt,$sql);
      if($pst){
        mysqli_stmt_bind_param($stmt,"sss",$email,$password,$repass);
        mysqli_stmt_execute($stmt);
        echo '<script type="text/javascript">alert("REGISTERED USER")</script>';
        header("location:index.php");
      }
      else{
        die("something went wrong");
      }

      
    }


}
?>
</body>
</html>