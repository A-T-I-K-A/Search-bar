<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("student_Management.php");?>

    <table border="1">
        <th colspan="5">All Students</th>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Department</td>
            <td>Phone</td>
            <td>Email</td>
            <td colspan="2">Action</td>
        </tr>
</table>
<script>
    fetch("http://localhost/atika/api2/api2.php").then(function(response){
        //console.log(response.ok);
        return response.json();
    }).then(function(data){
console.log(data);
    });

</script>
</body>
</html>