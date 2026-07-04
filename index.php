<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cloud-Based Database (RDS)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Cloud-Based Database (Amazon RDS)</h1>

    <a href="add.php" class="btn">+ Add Student</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['department']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>
                        <a href='edit.php?id=".$row['id']."'>Edit</a> |
                        <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Delete this record?\")'>Delete</a>
                      </td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "<tr><td colspan='6'>No records found.</td></tr>";
        }
        ?>

    </table>

</div>

</body>
</html>