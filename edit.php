<?php
// Connecting to the database
include "config.php";

// Check if 'id' exists in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    echo "<div class='alert alert-danger'>Student ID is not provided!</div>";
    exit;
}

// PHP for showing data in form for updating
$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Check if query returns valid data
if (!$result || mysqli_num_rows($result) === 0) {
    echo "<div class='alert alert-danger'>Student not found!</div>";
    exit;
}

$student = mysqli_fetch_assoc($result);

// PHP for updating data in form
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    // Update SQL query
    $sql = "UPDATE students SET name = '$name', email = '$email', course = '$course' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    //php for showing alert & redirect to index.php file
    if ($result) {
        echo " <script>
        alert('Student record updated successfully!');
        window.location.href = 'index.php';
              </script>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Update failed!</strong> Please check the entered information and try again.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
}

if (mysqli_query($conn, $sql)) {

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .edit-heading {
            animation: fadeInUp 0.8s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Student Management System </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Form for updating student record -->
    <div class="container mt-5">
        <!-- Heading Section -->
        <div class="text-center bg-warning text-dark py-4 px-3 rounded shadow-sm">
            <h2 class="fw-bold mb-1">
                <i class="bi bi-pencil-square me-2"></i> Edit Student Information
            </h2>
            <p class="mb-0">Update the student’s details and click "Update Student" to save the changes.</p>
        </div>
        <form method="POST" action="edit.php?id=<?= $id; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($student['name']) ?>" id="name"
                    name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" value="<?= htmlspecialchars($student['email']) ?>" id="email"
                    name="email">
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($student['course']) ?>" id="course"
                    name="course">
            </div>

            <button type="submit" class="btn btn-warning">Update Student</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Footer start -->
    <footer class="bg-dark text-white text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Student Management System</h5>
                    <p>A simple CRUD app built with PHP and MySQL. Manage student data with ease.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="add.php" class="text-white text-decoration-none">Register New Student</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact</h5>
                    <ul class="list-unstyled">
                        <li><small>Email: <a class="text-white text-decoration-none"
                                    href="mailto:muhammadusaid136@gmail.com">muhammadusaid136@gmail.com</a></small></li>
                        <li><small>Phone: <a class="text-white text-decoration-none" href="tel:+923300262678">+92 330
                                    0262678</a></small></li>
                        <li><small>Follow me on Linkedin: <a class="text-white text-decoration-none" href="https://www.linkedin.com/in/m-usaid-saddiq-110500320" target="_blank">M.Usaid Saddiq</a></small></li>
                                        </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3 bg-secondary">
            © <?= date("Y") ?> Student Management System. All rights reserved.<br> Made by Usaid Saddiq.
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Bootstrap JS and other necessary JS links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>