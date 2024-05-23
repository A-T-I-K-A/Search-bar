<?php
 $Id = $_POST["id"];
 $Name = $_POST["name"];
 $Department = $_POST["department"];
 $PHone = $_POST["phone"];
 $Email = $_POST["email"];
 
 
include("db_connection.php");
$sql = "INSERT INTO student
VALUES ('$Id', '$Name', '$Department', '$Phone', '$Email')";
mysqli_query($connection,$sql);

header("Location: student_Management.php");