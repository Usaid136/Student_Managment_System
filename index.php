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
        .register-btn {
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-in-out;
        }

        .register-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
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

        .fade-in-heading {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease forwards;
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
    <br><br>
    <!-- table for Student Management System start -->
    <div class="container my-4">
        <div class="text-center text-white py-4 px-3 rounded shadow-lg fade-in-heading"
            style="background: linear-gradient(90deg, #6610f2, #6f42c1);">
            <h1 class="display-5 fw-bold mb-0">Welcome to the Student Management System</h1>
            <p class="lead">Here you can manage all student records with ease.</p>
        </div>

        <br><br><br><br>
        <div class="p-3 rounded shadow-sm text-white" style="background: linear-gradient(90deg, #20c997, #198754);">
            <div class="d-flex justify-content-between align-items-center mb-0">
                <h2 class="mb-0">Student List</h2>
                <a href="add.php" class="btn btn-light register-btn">
                    <i class="bi bi-person-plus-fill me-1"></i> Register New Student
                </a>
            </div>
        </div>

        <br><br>
        <table id="myTable" class="table text-center">
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Registration Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Php start for showing data -->
                <?php
                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Query Failed : " . mysqli_error($conn));
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                    <th scope='row'>" . $row['id'] . "</th>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['course'] . "</td>
                    <td>" . $row['registration_date'] . "</td>
                    <td>
                 <a class='btn btn-warning' href='edit.php?id=$row[id]'>Edit</a>
                 <a class='btn btn-danger' href='delete.php?id=$row[id]' onclick=\"return confirm('Are you sure you want to delete this student?');\">Delete</a>
                 </td>
                    </tr>
                    ";
                }

                ?>
                <!-- Php end for showing data -->
            </tbody>
        </table>
    </div>
    <!-- table for Student Management System end -->


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
    <!-- Data Table js links -->
    <script src="//cdn.datatables.net/2.3.0/js/dataTables.min.js"></script>
    <!-- data table link -->
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>