<?php include './includes/connection.php'; 

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $insert_query="insert into form(username, phone, email, message) values('$username','$phone',
  '$email','$message')";
  $result=mysqli_query($con, $insert_query);
  if($result){
    echo "";
  }else{
    die(mysqli_error($result));
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="form.css">
  <script src="https://kit.fontawesome.com/d780d0ff93.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="form-container">
    <form action="" method="post">
      <div class="row">
        <div class="input-label">
          <input type="text" id="username" name="username" required>
          <label for="username"><i class="fa-solid fa-user"></i> Your Name</label>
        </div>
        <div class="input-label">
          <input type="text" id="phone" name="phone"required>
          <label for="phone"><i class="fas fa-phone-square-alt"></i> Phone</label>
        </div>
      </div>
      <div class="input-label">
        <input type="email" id="email" name="email" required>
        <label for="email"><i class="fas fa-envelope"></i> Email ID</label>
      </div>
      <div class="input-label">
        <textarea id="message" rows="8" name="message" required></textarea>
        <label for="message"><i class="fas fa-comments"></i> message</label>
      </div>
      <div class="btn-grp">
        <button type="submit" name="submit">Submit <i class="fas fa-paper-plane"></i></button>
        <button type="button" name="details" class="view_data" href="display.php" target="_blank">Details <i class="fas fa-download"></i></button>
      </div>
     
    </form>
  </div>
</body>

</html>