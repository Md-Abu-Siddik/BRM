<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                <button class="btn">Login</button>
            </div>
        </div>
    </header>
    <div class="admin_notification">
        <div class="container">
            <div class="notification_content">
                <div class="notification_head">
                    <h1>Notificarions</h1>
                </div>
                <div class="main_notification">
                    <h2><span>Someone</span> rents <span>someones</span> building</h2>
                    <h2><span>Someone</span> rents <span>someones</span> building</h2>
                    <h2><span>Someone</span> rents <span>someones</span> building</h2>
                    <h2><span>Someone</span> rents <span>someones</span> building</h2>
                    <h2><span>Someone</span> rents <span>someones</span> building</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="question_notification">
        <div class="container">
            <div class="user_questions">
                <h1>Question section</h1>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
                <div class="question">
                    <h2><span>Someone</span> ask you a question</h2>
                    <div class="down_arrow">
                        <img src="image/down.png" alt="">
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="check_subscribe">
        <div class="container">
            <div class="subscribe_content">
            <?php
                $servername = "localhost";
                $username = "root";
                $dbpass = "";
                $dbname = "building_rent_management";

                $conn = new mysqli($servername, $username, $dbpass, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, email FROM subscribe";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table><tr><th>ID</th><th>Name</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["email"];
                    }
                    echo "</table>";
                    } else {
                        echo "0 results";
                    }

                    $conn->close();
                ?>

            </div>
        </div>
    </div>
</body>
</html>