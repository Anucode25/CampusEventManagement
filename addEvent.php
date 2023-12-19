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
        <h2>ADD EVENT </h2></div>
        <div class="form_event">
        <form name="eventdata" action="addEvent.php" method="post">
    <div class="form-group">
    <label for="formGroupExampleInput">Event Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Event name">
    </div>
    <div class="form-group">
    <label for="inputAddress">Event Description</label>
    <input type="textarea" class="form-control" id="inputAddress" placeholder="Event description">
  </div>
  <div class="form-group col-md-2">
      <label for="inputZip">Entry Fee</label>
      <input type="number" class="form-control" id="inputZip"placeholder="EntryFee">
    </div>

</form>
        </div>
        
         
 </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
include("conection.php");

?>
</body>
</html>