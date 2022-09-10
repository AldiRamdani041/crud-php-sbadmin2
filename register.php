<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Data User Baru</h1>
                            </div>
                            <form action="register.php" method="post" class="user">
                                <div class="form-group">
                                    <input name="NAME" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input name="EMAIL" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input name="MOBILE" type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Mobile Number">
                                </div>
                                <input name="SUBMIT" type="submit" class="btn btn-primary btn-user btn-block" value="Submit"/>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['SUBMIT'])) {
        $name = $_POST['NAME'];
        $email = $_POST['EMAIL'];
        $mobile = $_POST['MOBILE'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        if($result){
            header("Location: tables.php");
            die();
        }else{
            // Show message when user added
            echo "Penambahan User Gagal. <a href='tables.php'>View Users</a> ";
        }

        // Show message when user added
        echo "User added successfully. <a href='tables.php'>View Users</a>";
    }
    ?>

</body>

</html>