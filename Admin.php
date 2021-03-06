<?php 
  require 'db.php';
  session_start();
  $bool = 1;
  $msg = "";
if(isset($_POST['signup'])){
	$username=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	if($password!=$cpassword) {
    $bool = 0;
    $msg = "Please make sure both passwords match";
  }
  if($bool){
    $query = "INSERT INTO ADMINS VALUES (NULL,'$username','$email','$password')";
    $res = mysqli_query($conn,$query);
    if($res){
      $msg = "Congratulations ! Please Login";
    }
  }
}
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
    $que = "SELECT * FROM ADMINS WHERE EMAIL = '$email' AND PASSWORD = '$password'";
    $res = mysqli_query($conn,$que);
    $row = mysqli_fetch_assoc($res);
    if($res){
      $_SESSION['adminlogin']="loggedin";
      $_SESSION['adminid'] = $row['ID'];
      $_SESSION['adminname']=$row['USERNAME'];
      header('Location: CandidatesApp.php');
    }
    else {
      $msg = "Incorrect Username or Password";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="User.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/pic4.jpg" alt="">
      </div>
      <div class="back">
        <img class="backImg" src="images/pic4.jpg" alt="">
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Admin Login</div>
            <p><?php echo $msg ?></p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Admin Signup</div>
          <p><?php echo $msg ?></p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="cpassword" placeholder="confirm your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="signup" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>