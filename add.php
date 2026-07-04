<?php
include "db.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students(name, email, department, phone)
            VALUES('$name', '$email', '$department', '$phone')";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Student Added Successfully');
                window.location='index.php';
              </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Student</h1>

    <form method="POST">

        <input type="text" name="name" placeholder="Student Name" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="text" name="department" placeholder="Department" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <button type="submit" name="submit">Add Student</button>

    </form>

    <br>

    <a href="index.php">← Back to Home</a>

</div>

</body>
</html>