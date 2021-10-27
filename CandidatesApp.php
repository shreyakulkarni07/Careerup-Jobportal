<?php require '_admindashheader.php' ?>
<table class="table">
    <thead>
        <tr>
         <th>A.No</th>
         <th>Candidate Name</th>
         <th>Position</th>
         <th>Qualification </th>
         <th>Year Passout </th>
        </tr>
    </thead>
    <tbody>
          <?php require 'db.php';
            $query = "SELECT * FROM CAPPLIED";
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                  echo  "<tr>
              <td>".$row['AID']."</td>
              <td>".$row['NAME']."</td>
              <td>".$row['POSITION']."</td>
              <td>".$row['QUAL']."</td>
              <td>".$row['YEAR']."</td>";
            }
            ?>
  </tbody>
</table>
<?php require '_admindashfooter.php' ?>
