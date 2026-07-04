<?php
include "db.php";

$search = "";

if(isset($_POST['search']))
{
    $search = $_POST['search_text'];
    $sql = "SELECT * FROM students WHERE name LIKE '%$search%'";
}
else
{
    $sql = "SELECT * FROM students";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Search Student</h1>

    <form method="POST">
        <input type="text" name="search_text" placeholder="Enter Student Name"
               value="<?php echo $search; ?>" required>

        <button type="submit" name="search">Search</button>
    </form>

    <br>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Phone</th>
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
                echo "</tr>";
            }
        }
        else
        {
            echo "<tr><td colspan='5'>No student found.</td></tr>";
        }
        ?>

    </table>

    <br>

    <a href="index.php">← Back to Home</a>

</div>

</body>
</html>