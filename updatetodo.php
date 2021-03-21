<?php
include('connection.php');




$conn->close();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <title>Todo App</title>
</head>
<body>


<?php
    include('connection.php');
    $id = $_GET['ID'];
    $sql = "SELECT todo,description,deadline from todotable WHERE id=$id";
    $result = $conn->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo "<div class='container mt-2 bg-light'>".
      "<h4 class='display-4'>ToDo App</h4>".
      "<form action='update.php' method='POST'>".
          "<div class='form-group'>".
            "<label for='exampleInputEmail1'>Todo Name: </label>".
            "<input  value=".$row['todo']. " type='text' name='todo' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter todo'>".
          "</div>".
          "<div class='form-group'>".
            "<label for='exampleInputPassword1'>Description:</label>".
            "<input  value=".$row['description']." type='text' name='description' class='form-control' id='exampleInputPassword1' placeholder='Description...'>".
          "</div>".
          "<div class='form-group'>".
              "<label for='exampleInputPassword1'>Deadline:</label>".
              "<input value=".$row['deadline']. " type='date' name='deadline' class='form-control' id='exampleInputPassword1'>".
            "</div>".
          "<button value=".$id." type='submit' name='id' class='btn btn-success'>Update</button>".
      "</form>".
    "</div>";
      }
    }
    else{
      echo "Nothing";
    }
?>

 
</body>
