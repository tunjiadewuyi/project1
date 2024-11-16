<?php include './includes/connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display Records</title>
  <link rel="stylesheet" href="display.css">
</head>
<body>
<h2>Display Records</h2>
<div class="table_container">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <tbody>
        <?php 
        $select_query ='select * from form';
        $result = mysqli_query($con,$select_query);
        if($result){
          while($row=mysqli_fetch_assoc($result)){;
          $id=$row['ID'];
          $username=$row['username'];
          $phone=$row['phone'];
          $email=$row['email'];
          $message=$row['message'];
          echo " <tr>
          <td>$id</td>
          <td>$username</td>
          <td>$phone</td>
          <td>$email</td>
          <td>$message</td>
        </tr>";
          
        }
        }else{
          die(mysqli_error($result));
        }
        
        
        ?>
        
      </tboby>
    </thead>

</div>
  
</body>
</html>