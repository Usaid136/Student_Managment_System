<?php
//Connecting database
include "config.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Boostrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Data Table css links -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.0/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
    .fade-in-heading {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease-in-out forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

</head>

<body>
    <!-- navbar start -->
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
                        <a class="nav-link active" aria-current="page" href="#"> Home</a>
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
    <!-- navbar end -->
    <!-- form php -->
    <?php
    // php for inserting data through form
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        //sql query for inserting data in table 
        $sql = "INSERT INTO `students` (`name`, `email`, `course`) VALUES ('$name', '$email', '$course')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Registration completed successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Registration failed!</strong> Please check the entered information and try again.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
        }
    }
    ?>

    <!-- Form for Student Management System start -->
    <div class="container mt-5">
        <!-- Heading for Register New Student -->
<div class="text-center bg-success text-white py-4 px-3 rounded shadow-lg fade-in-heading">
    <h2 class="fw-bold mb-2">
        <i class="bi bi-person-plus-fill me-2"></i> Register New Student
    </h2>
    <p class="lead mb-0">Fill in the details below to add a new student to the system.</p>
</div>

        <form method="POST" action="/PHP/PHP_Tutorial_Youtube/Student_Managment_System/add.php">
            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" name="course">
            </div>

            <button type="submit" class="btn btn-success">Add Student</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <!-- Form for Student Management System end -->

    
    <!-- footer start -->
    <footer class="bg-dark text-white text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Student Management System</h5>
                    <p>
                        A simple CRUD app built with PHP and MySQL. Manage student data with ease.
                    </p>
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

    <!-- footer end -->


    <!-- Boostrap js links start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>