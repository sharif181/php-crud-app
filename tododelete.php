<?php
include("connection.php");
$Id = $_GET['ID'];

$sql = "DELETE FROM todotable where id=$Id";

$result = $conn->query($sql);
if($result){
    echo "Deleted Succesfully";
}
else{
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("Location: home.php");
?>