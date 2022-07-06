<?php include "header.php" ?>
<?php include "connect.php" ?>
<div class="container" style="min-height:500 ;">
  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <th>Name</th>
      <th>contact</th>
      <th>email</th>
      <th>Address</th>
      <th>msg</th>
    </tr>
    <?php
    $id = 1;
    $select_slider = "SELECT * FROM project";
    $result = mysqli_query($con, $select_slider);
    foreach ($result as $row) {
    ?>
      <tr>
        <td><?= $id; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['contact']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['address']; ?></td>
        <td><?= $row['msg']; ?></td>



      </tr>








    <?php $id++;
    } ?>




  </table>
</div>
<?php include "footer.php" ?>