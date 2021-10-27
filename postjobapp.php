<?php require '_admindashheader.php';
    require 'db.php';
    $msg="";
    if(isset($_POST['post'])){
        $company = $_POST['company'];
        $position = $_POST['position'];
        $jd = $_POST['jd'];
        $skills = $_POST['skills'];
        $ctc = $_POST['ctc'];
        $query="INSERT INTO CAREERS VALUES (NULL,'$company','$position','$jd','$skills','$ctc')";
        $res = mysqli_query($conn,$query);
        if($res){
            $msg = "Successful !";
        }
        else {
            $msg = "Invalid Inputs !";
        }
    }
?>
<link rel="stylesheet" href="Postjob.css" />
        <div class="form-wrap">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p><?php echo $msg ?></p>
                <h1>Post Job</h1>
                <input type="text"  name ="company" placeholder="Company Name" required>
                <input type="text" name ="position" placeholder="Position" required>
                <input type="text" name ="jd" placeholder="Job Description" required>
                <input type="text" name ="skills" placeholder="Skills" required>
                <input type="text"  name ="ctc" placeholder="CTC" required >
                <input type="submit" name="post" value="Post">
            
            </form>
        
        </div> 
<?php require '_admindashfooter.php' ?>