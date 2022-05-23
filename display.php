<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table from Data Base</title>
    <link rel="stylesheet" href="css/main2.css">
</head>

<body>

<button class="add" ><a href="index.php">Add new Employee</a></button>

    <table class="container">
        <thead>
            <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // create connection 
            $con = new mysqli('localhost', 'root', '', 'company_db');
            // verification
            if (!$con) {
                die(mysqli_error($con));
            }

            // read all rows from db table
            $sql = "SELECT * FROM employees";

            // result
            $result = $con->query($sql);

            while ($row = $result->fetch_assoc()) { // the fetch_assoc will fetches a row as an associative array. donc $row is storing the result and the fetch_assoc convert it to array 
                // juste en bas ou il ya les deux  boutons la update et delete.... les href=update.php?updateid nous permet de selectionner les id attribuer a chaque element dans le tableau pareil pour le delete.php?deleteid
                echo '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["fullname"] . '</td>
                <td>' . $row["age"] . '</td>
                <td>' . $row["birthday"] . '</td>
                <td>' . $row["gender"] . '</td>
                <td>' . $row["salary"] . '</td>
                <td>
                <button class="btn1" ><a href="update.php?updateid=' . $row["id"] . '">Update</a></button>
                <button class="btn2" ><a href="delete.php?deleteid=' . $row["id"] . '">Delete</a></button>
                </td>
            </tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>