<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Career</title>
    <link rel="shortcut icon" type="image/jpg" href="../images/pic6.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Careers.css">

</head>
<body>
<div class="contain">

    <h1 class="heading">Career Portal...</h1>

    <div class="box-container">
  <?php require 'db.php';
      $query = "SELECT * FROM CAREERS";
      $result = mysqli_query($conn,$query);
      while($row= mysqli_fetch_assoc($result)) {
        echo "<div class='box'>
        <h3>".$row['COMPANYNAME']."</h3>
        <p> Position : ".$row['POSITION']."</p>
        <p> Job Description ".$row['JD']."</p>
        <p> Skills : ".$row['SKILLS']."</p>
        <p CTC : ".$row['CTC']."</p>        
        <a href='careerform.php' class='btn'>Apply</a>
    </div>";
      }
        ?>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
<?php require 'careerfooter.php'; ?>