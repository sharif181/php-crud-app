<?php
include('connection.php');


$todo = $_POST['todo'];
$des = $_POST['description'];
$deadline = $_POST['deadline'];

if($todo != null && $des !=null && $deadline != null){
    $sql = "INSERT INTO todotable VALUES ('','$todo','$des','$deadline')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
$conn->close();
header('Location: home.php');
?>