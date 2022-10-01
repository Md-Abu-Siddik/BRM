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
                <a class="btn" href="login.php">Login</a>
            </div>
        </div>
    </header>
    <div class="rent_form">
        <div class="container">
            <div class="userRent_form">
                <h1>Register</h1>
                <form action="" method="post">
                    <input class="full" type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="number" name="job" placeholder="Contact">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" name="register" value="register">
                </form>

                <?php 
                    if (isset($_POST['register'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $contact = $_POST['job'];
                        $password = $_POST['password'];
                        if (!empty($name) && !empty($email) && !empty($contact) && !empty($password)) {
                            $servername = "localhost"; 
                            $username = "root";
                            $dbpass = "";
                            $dbname = "building_rent_management";
            
                            $conn = new mysqli($servername, $username, $dbpass, $dbname);
            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
            
                            $sql = "INSERT INTO register(`name`,`email`,`contact`,`password`)
                                    VALUES ('$name','$email','$contact','$password')";
            
                            if ($conn->query($sql) === TRUE) {
                                echo'<p style="color:#00ff00;">Registerd successfully...</p>';
                            }
                            else {
                                echo '<p style="color:#ff0000;">Error: ' . $sql .'<br>' . $conn->error.'</p>';
                            }
                        }
                    }
                ?>

            </div>
        </div>
    </div>
</body>