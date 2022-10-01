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
                <h1>User rent</h1>
                <form method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="job" placeholder="Job">
                    <input type="number" name="contact" placeholder="Contact">
                    <input type="submit" name="rent" value="Rent">
                </form>

                <?php
                    if (isset($_POST['rent'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $job = $_POST['job'];
                        $contact = $_POST['contact'];
                        if (!empty($name) && !empty($email) && !empty($job) && !empty($contact)) {
                            $servername = "localhost";
                            $username = "root";
                            $dbpass = "";
                            $dbname = "building_rent_management";
            
                            $conn = new mysqli($servername, $username, $dbpass, $dbname);
            
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
            
                            $sql = "INSERT INTO rent(`name`,`email`,`job`,`contact`)
                                    VALUES ('$name','$email','$job','$contact')";
            
                            if ($conn->query($sql) === TRUE) {
                                echo'<p style="color:#00ff00;">Post successfully...</p>';
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