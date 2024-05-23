<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border="1" id="students">
        <th colspan="6">All Students</th>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Department</td>
            <td>Phone</td>
            <td>Email</td>
            <td colspan="2">Action</td>
        </tr>
        <tr>
            <td colspan="6"><input type="text" id="searchInput" placeholder="Search for names.." onkeyup="searchTable()">
           </td>
        </tr>
    </table>
    <a href="add.php">Add Student</a>
    <script>
        fetch("http://localhost/atika/api2/list.php").then(function(response){
        return response.json();
    }).then(function(data){
    
        let students = document.getElementById("students");
        data.forEach((each_student,index)=>{
            let row = students.insertRow(2+index);

            let td_1 = row.insertCell(0);
            td_1.innerHTML = each_student.Id;
            
            let td_2 = row.insertCell(1);
            td_2.innerHTML = each_student.Name;

            let td_3 = row.insertCell(2);
            td_3.innerHTML = each_student.Department;

            let td_4 = row.insertCell(3);
            td_4.innerHTML = each_student.Phone;

            let td_5 = row.insertCell(4);
            td_5.innerHTML = each_student.Email;

            let td_6 = row.insertCell(5);
            td_6.innerHTML = "<button>Edit</button> <button>Delete</button>";
        });
    });
     function searchTable() {
             // Get the search input element
            var input = document.getElementById('searchInput');
         // Get the search query and convert to uppercase for case insensitive comparison
             var filter = input.value.toUpperCase();
             // Get the table element
             var table = document.getElementById('students');
             // Get all the rows in the table's body
             var tr = table.getElementsByTagName('tr');

            // Loop through all table rows, and hide those that don't match the search query
            for (var i = 1; i < tr.length; i++) {
            // Get the first cell (Name) in the current row
                 var td = tr[i].getElementsByTagName('td')[0];
                 if (td) {
                     var txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                         tr[i].style.display = '';
                     } else {
                         tr[i].style.display = 'none';
                     }
                 }
             }
         }

    </script>
    </center>
</body>
</html>