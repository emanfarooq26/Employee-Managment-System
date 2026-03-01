<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM employees WHERE id=$id");

header("Location:table.php?msg=Employee Deleted Successfully");
?>