<?php

//Databse connection
include_once("./dbcon.php");

// get the record ID to delete
$id = $_GET['id'];

// delete the record
$sql = "DELETE FROM rfa WHERE id = $id";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

// redirect to another page
header("Location: rfa_search.php");
exit();


?>