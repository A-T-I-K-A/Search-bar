<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #b1{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <center>
        <form method="post" action="save.php">
        <p><b>Student's Information</b></p>
    <table>
        <tr>
            <td>Id</td><td><input type="text" name="id"/></td>
        </tr>
        <tr>
    <td>Name</td><td><input type="text"name="name"/></td>
        </tr>
        <tr>
    <td>Department Name</td><td><select name="department">
        <option selected hidden value="">Choose</option>
        <option>CSE</option>
        <option>BBA</option>
        <option>ELL</option>
        <option>LAW</option>
        <option>ECO</option>
    </select></td>
</tr>
<tr>
    <td>Phone</td><td><input type="text"name="phone"/></td>
</tr>
     <tr>
    <td>Email</td><td><input type="text"name="email"/></td>
    </tr>
    <tr>
    <td></td>
    <td><button id="b1">save</button></td>
    </tr>
    </table>
        </form>
    </center>

</body>
</html>