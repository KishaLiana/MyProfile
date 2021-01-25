<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"
  />  <link href="./styles.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Open+Sans:wght@300&family=Syne+Mono&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="./index.php">Home</a>
        <a href="./Projects.php">Projects</a>
        <a href="#contact" class="active">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <div class = "info">
      <ul>
      <li><i class="fa fa-mobile" aria-hidden="true">: +256 708669709</i></li>

      <li><i class="fa fa-envelope-o" aria-hidden="true">: kishaliana@gmail.com</i></li>

     <li><i class="fa fa-globe" aria-hidden="true">: Plot 67-173, Bishop Tucker Road, Mukono</i></li>
      </ul>
      </div>
    <h3 style="text-align: center; margin:50px 0px 50px 0px;">Contact Form</h3>

<div class="contact">


<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db = "liana";

$conn = new mysqli($servername, $user, $pass, $db);

// if($conn->error){
//     echo "DB error ".$conn->error."";
// }
// else{
//     echo "Connection successful";
// }

if (isset($_POST['submit'])) {
  echo "<br>";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  $sql = "insert into feedback (name,email,subject) values ('$name','$email','$subject')";

  if ($conn->query($sql)) {
    // echo "message sent SUCCESSFULLY!!!";
    echo '<span style="color:green;">message sent SUCCESSFULLY!!!</span>';
  } else {
    echo "Error: " . $conn->error;
  }
}

?>
  <form action="./Contact.php" method="POST">
    <label for="fname">Name</label>
    <br>
    <input type="text" id="fname" name="name">
    <br>
    <label for="lname">Email</label>
    <br>
    <input type="text" id="lname" name="email">

    <br>
    <label for="subject">Subject</label>
    <br>
    <textarea id="subject" name="subject" placeholder="write something here..." style="height:200px"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>

