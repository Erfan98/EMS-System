<?php require "conn.php"; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
<p></p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                  <div class="card-header">
                    Freon Employee Management System
                  </div>
                  <div class="card-body">
                  <div class="card-title text-center"><h3> Form</h3></div>
                  <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="u_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Username</label>
                        <input type="text" name="u_name" class="form-control" id="exampleInputPassword1" placeholder="JOhn Doe">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="u_pass"class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <p></p>
                    <button type="submit" name="u_reg" class="btn btn-success">Register</button>
                    <a href="index.php" type="submit" class="btn btn-primary">Login to existing account</a>
                </form>
                  </div>
                </div>

            </div>
        </div>
    </div>
    </div>


    <?php

        if(isset($_POST['u_reg'])){
            $u_name=$_POST['u_name'];
            $u_mail=$_POST['u_mail'];
            $u_pass=md5($_POST['u_pass']);


            $sql="INSERT INTO `emp` (`u_id`, `u_mail`, `u_name`, `u_pass`) VALUES (NULL, '$u_mail', '$u_name', '$u_pass')";

            if(mysqli_query($conn,$sql)){
                echo "<script> alert('New Record Created Successfully!'); </script>";
    
            }
            else{
                echo mysqli_error($conn);
            }
        }


    
    ?>




    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>