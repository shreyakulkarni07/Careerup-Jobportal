<?php 
  require 'db.php';
  session_start();
  $bool = 1;
  $msg = "";
if(isset($_POST['apply'])){
	$username=$_POST['name'];
	$applying=$_POST['applying'];
	$qualification=$_POST['qualification'];
	$cgpa=$_POST['cgpa'];
	$passout=$_POST['passout'];
  if($bool){
    $query = "INSERT INTO CAPPLIED VALUES (NULL,'$username','$applying','$qualification','$cgpa','$passout')";
    $res = mysqli_query($conn,$query);
    if($res){
      $msg = "Congratulations !You have successfully applied";
    }
  }
}
?>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="careeform.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="right">
				<h2>Apply</h2>
				<p><?php echo $msg ?></p>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<input type="text" name="name" class="field" placeholder="Your Name" required>
				<input type="text" name="applying"class="field" placeholder="Applying For" required>
				<input type="text" name="qualification" class="field" placeholder="Qualification" required>
				<input type="text" name="cgpa"class="field" placeholder="CGPA" required>
                <input type="text" name="passout" class="field" placeholder="Year Passout" required>
				<button class="btn" name="apply">Apply</button>
                </form>
			</div>
		</div>
	</div>
<?php require 'careerfooter.php' ?>
