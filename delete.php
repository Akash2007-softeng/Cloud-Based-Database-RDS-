<?php
include "db.php";

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id='$id'";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
                alert('Student Deleted Successfully');
                window.location='index.php';
              </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
else
{
    header("Location: index.php");
    exit();
}
?>