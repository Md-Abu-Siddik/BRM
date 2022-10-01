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
                <h1>Post</h1>
                <form method="post">
                    <input type="blob" placeholder="Image">
                    <a class="btn" href="">Choose file</a>
                    <input class="full" type="text" name="name" placeholder="Title">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="job" placeholder="Job">
                    <input type="number" name="contact" placeholder="Contact">
                    <input class="full" name="terms1" type="text" placeholder="Terms and condition">
                    <input class="full" name="terms2" type="text" placeholder="Terms and condition">
                    <input class="full" name="terms3" type="text" placeholder="Terms and condition">
                    <input type="submit" name="submit" value="Post">
                </form>

                <?php
                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $job = $_POST['job'];
                        $contact = $_POST['contact'];
                        $terms1 = $_POST['terms1'];
                        $terms2 = $_POST['terms2'];
                        $terms3 = $_POST['terms3'];
                        if (!empty($name) && !empty($email) && !empty($job) && !empty($contact) && !empty($terms1) && !empty($terms2) && !empty($terms3)) {
                            $servername = "localhost";
                            $username = "root";
                            $dbpass = "";
                            $dbname = "building_rent_management";
            
                            $conn = new mysqli($servername, $username, $dbpass, $dbname);
            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
            
                            $sql = "INSERT INTO post(`name`,`email`,`job`,`contact`,`terms1`,`terms2`,`terms3`)
                                    VALUES ('$name','$email','$job','$contact','$terms1','$terms2','$terms3')";
            
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