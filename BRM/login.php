<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single rent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Category</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">contact</a></li>
                </ul>
            </nav>
            <div class="login">
                <a class="btn" href="">Login</a>
            </div>
        </div>
    </header>
    <div class="rent_form">
        <div class="container">
            <div class="userRent_form">
                <h1>Login</h1>
                <form action="" method="post">
                    <input class="full" type="email" name="name" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <div class="message">
                        <p>Incorrect email or password</p>
                    </div>
                    <input type="submit" name="login" value="Login">
                </form>
                <a href="register.php">Register</a>
                <?php 
                    session_start();
                    if (isset($_POST['login'])) {
                        $email = $_POST['name'];
                        $password = $_POST['password'];
                        if (!empty($email) && !empty($password)) {
                            $servername = "localhost";
                            $username = "root";
                            $dbpass = "";
                            $dbname = "building_rent_management";
            
                            $conn = new mysqli($servername, $username, $dbpass, $dbname);
            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
            
                            $sql = "SELECT id FROM register WHERE `email` = '$email' && `password` = '$password' ";
            
                            $result = $conn->query($sql);

                            $sqlAdmin = "SELECT id FROM admin WHERE `email` = '$email' && `password` = '$password' ";

                            $resultAdmin = $conn->query($sqlAdmin);
            
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
            
                                $_SESSION['user_id'] = $row['id'];
            
                                header('location:owner.php');
                            }
                            elseif ($resultAdmin->num_rows > 0) {
                                $row = $result->fetch_assoc();
            
                                $_SESSION['user_id'] = $row['id'];
            
                                header('location:admin.php');
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
</body>