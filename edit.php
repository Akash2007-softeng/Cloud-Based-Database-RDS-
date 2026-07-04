<?php
include "db.php";

// Get student details
$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Update student
if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];

    $update = "UPDATE students
               SET name='$name',
                   email='$email',
                   department='$department',
                   phone='$phone'
               WHERE id='$id'";

    if(mysqli_query($conn, $update))
    {
        echo "<script>
                alert('Student Updated Successfully');
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
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Edit Student</h1>

    <form method="POST">

        <input type="text" name="name"
               value="<?php echo $row['name']; ?>" required>

        <input type="email" name="email"
               value="<?php echo $row['email']; ?>" required>

        <input type="text" name="department"
               value="<?php echo $row['department']; ?>" required>

        <input type="text" name="phone"
               value="<?php echo $row['phone']; ?>" required>

        <button type="submit" name="update">
            Update Student
        </button>

    </form>

    <br>

    <a href="index.php">← Back to Home</a>

</div>

</body>
</html>