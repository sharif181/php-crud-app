<?php
include('connection.php');

$sql = "SELECT * From todotable";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='container mt-2 bg-light'>". 
         "<div class='card mt-2'>". 
         "<div class='card-body'>".
            "<b>". "Title: " ."</b>". $row['todo'] ."</h5>".
            "<p class='card-text'>".
            "<b>". "Description: " ."</b>".$row['description'].
            "</p>".
            "<p class='card-text'>".
              "<b>". "Deadline: " ."</b>".$row['deadline'].
            "</p>".
            "<a href='tododelete.php?ID=". $row['id']."'"." class='btn btn-danger'>" ."Delete". "</a>".
            "<a href='updatetodo.php?ID=". $row['id']."'"." class='btn btn-success ml-4'>" ."Update". "</a>".
         "</div>".
         "</div>". 
         "</div>";
    } 
}
?>