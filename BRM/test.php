<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="style.css">
    <!--  -->
    <title>Homepage</title>
</head>
<body>
    <h1 style="color:blue"> Welcome to Digital Library</h1>

<div class="container">
    <div class="row">
        <div class="colimn">
            <div class="login2">
               
                <form method="post">
                    <p>Teacher Sign Up</p>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-5">
                    <input name="name2" type="text" class="form-control" id="inputEmail2">
                </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input name="email2" type="email" class="form-control" id="inputEmail3">
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input name="pass2" type="password" class="form-control" id="inputPassword3">
                    </div>
                    </div>
                    <input name="submit2" type="submit" value="Sign Up">
                </form>

                <?php 
                    if (isset($_POST['submit2'])) {
                        $name = $_POST['name2'];
                        $email = $_POST['email2'];
                        $password = $_POST['pass2'];
                        $servername = "localhost"; 
                        $username = "root";
                        $dbpass = "";
                        $dbname = "library";
        
                        $conn = new mysqli($servername, $username, $dbpass, $dbname);
        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
        
                        $sql = "INSERT INTO teachersignup(name,`email`,`password`)
                                VALUES ('$name','$email','$password')";

                    if ($conn->query($sql) === TRUE) {
                        echo'<p style="color:green;">Registerd successfully...</p>';
                        }
                    else {
                        echo '<p style="color:red;">Error: ' . $sql .'<br>' . $conn->error.'</p>';
                        }
                    }
                ?>
                </div>
            </div>

        <div class="colimn">
            <div class="login2">
               
                <form method="post">
                    <p>Student Sign Up</p>
                    <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-5">
                    <input name="name3" type="text" class="form-control" id="inputEmail2">
                </div>
                </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input name="email3" type="email" class="form-control" id="inputEmail3">
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input name="pass3" type="password" class="form-control" id="inputPassword3">
                    </div>
                    </div>

                    <input name="submit3" type="submit" value="Sign Up">
                </form>

                <?php 
                    if (isset($_POST['submit3'])) {
                        $name = $_POST['name3'];
                        $email = $_POST['email3'];
                        $password = $_POST['pass3'];
                        $servername = "localhost"; 
                        $username = "root";
                        $dbpass = "";
                        $dbname = "library";
        
                        $conn = new mysqli($servername, $username, $dbpass, $dbname);
        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
        
                        $sql = "INSERT INTO studentsignup(name,`email`,`password`)
                                VALUES ('$name','$email','$password')";
        
                        if ($conn->query($sql) === TRUE) {
                            echo'<p style="color:green;">Registerd successfully...</p>';
                        }
                        else {
                            echo'<p style="color:#ff0000;">Error: ' . $sql .'<br>' . $conn->error.'</p>';
                        }
                    }
                ?>

            </div>
        </div>
        <div class="column">
            <div class="login1">
                
            <form method="post">
                    <p>Login</p>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-5">
                    <input name="email" type="email" class="form-control" id="inputEmail2">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-5">
                    <input name="pass" type="password" class="form-control" id="inputPassword4">
                </div>
                </div>
                <input name="login" type="submit" value="Login">
                
            </form>

            <?php 
                    session_start();
                    if (isset($_POST['login'])) {
                        $email = $_POST['email'];
                        $password = $_POST['pass'];
                        if (!empty($email) && !empty($password)) {
                            $servername = "localhost";
                            $username = "root";
                            $dbpass = "";
                            $dbname = "library";
            
                            $conn = new mysqli($servername, $username, $dbpass, $dbname);
            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
            
                            $sql = "SELECT id FROM studentsignup WHERE email = '$email' && password = '$password' ";
            
                            $result = $conn->query($sql);

                            $sqlTeacher = "SELECT id FROM teachersignup WHERE email = '$email' && password = '$password' ";

                            $resultTeacher = $conn->query($sqlTeacher);
            
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
            
                                $_SESSION['user_id'] = $row['id'];
                                header('location:studentlogin.php');

                            }
                            elseif ($resultTeacher->num_rows > 0) {
                                $row = $result->fetch_assoc();
            
                                $_SESSION['user_id'] = $row['id'];
                                header('location:adminlogin.php');

                            }
                            else {
                                echo '<p style="color:red;">Error: ' . $sql . '<br>' . $conn->error . '</p>';
                            }
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>