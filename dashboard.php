<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="./styles.css" rel="stylesheet" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    
<title>Dashboard</title>
</head>
<body>
   
   
<body>
  <div class="body1">
    <div class="sidenav">
      <h2>Administrator</h2>

    </div>


    <div class="main">
      <h2>Inbox</h2>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "liana";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $tbl = "feedback"; // Table name 
      $sql = "SELECT * FROM $tbl";
      $result = $conn->query($sql);
      $rows =array();
      while ($rows = $result->fetch_assoc()) {
      ?>
        <?php
        echo "<pre>"."Name: " . $rows['name'];
        echo "<pre>" . "Email: " . $rows['email'];
        echo "<pre>" . "Message: " . $rows['subject'];
        echo "<pre>"
        ?>
        <a  href="dashboard.php?name=<? echo $rows['name']; ?>"> delete</a>
        <hr>
      <?php
      }
      ?>
      <?php
      $conn->close();
      ?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "liana");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt delete query execution
$sql = "DELETE FROM feedback WHERE name='$name'";
if($mysqli->query($sql) === true){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
    </div>
  </div>
</body>

</html>