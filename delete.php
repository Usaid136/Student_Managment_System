<?php
//connecting database
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

//delete query
$sql = "DELETE FROM students WHERE id = $id";
$result = mysqli_query($conn,$sql);

if ($result) {
    echo "
    <script>
     alert('Student deleted successfully.');
     window.location.href = 'index.php';
    </script>
    ";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
} else {
    echo "Invalid request.";
}
?>