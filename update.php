<?php
    include('connection.php');
    $todo = $_POST['todo'];
    $des = $_POST['description'];
    $deadline = $_POST['deadline'];
    $id = $_POST['id'];
    if($todo != null && $des !=null && $deadline != null){
        $sql = "UPDATE todotable SET todo='$todo', description='$des', deadline='$deadline' WHERE id=$id" ;
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
    $conn->close();
    header('Location: home.php');
?>