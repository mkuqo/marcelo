<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form

       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']);

       $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $active = $row['active'];

       $count = mysqli_num_rows($result);

       // If result matched $myusername and $mypassword, table row must be 1 row

       if($count == 1) {
           session_register("myusername");
           $_SESSION['login_user'] = $myusername;

           header("location: welcome.php");
       }else {
           $error = "Your Login Name or Password is invalid";
       }
   }
?>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Apple</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Samsung</button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Sony</button>
            </div>
        </div>
        <a href="#">Forgot your password?</a>
</div>

<center>
    <footer>
        <p>&copy; Marcelo Kuqo 2017</p>
    </footer>
</center>
</div>
</body>
</html>


