<!DOCTYPE html>
<html lang="en">
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
    <div class="container mt-2 bg-light">
        <h4 class="display-4">ToDo App</h4>
        <form action="todo.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Todo Name: </label>
              <input type="text" name="todo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter todo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description:</label>
              <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description...">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Deadline:</label>
                <input type="date" name="deadline" class="form-control" id="exampleInputPassword1">
              </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <div class="card-header mt-5">
            <h5>Todos: </h5>
        </div>
    </div>  
</body>
</html>

<?php
       include('retrievetodo.php')       
?>