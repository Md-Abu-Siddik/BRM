<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building rent management</title>
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
                    <li><a href="#category">Category</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#footer">contact</a></li>
                </ul>
            </nav>
            <div class="login">
                <!-- <button class="btn">Login</button> -->
                <a href="login.php" class="btn">Login</a>
            </div>
        </div>
    </header>
    <div class="slide_area" id="home" style="background-image: url(image/slider.jpg);">
        <div class="container">
            <div class="slider">
                <div class="slider_text">
                    <h1>Highest Standards of Construction</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="show" id="category">
        <div class="container">
            <div class="show_content">
                <div class="cards">
                    <div class="card">
                        <div class="card_text">
                            <h3>MSM group is the larger building rent management agency in Bangladesh</h3>
                        </div>
                    </div>
                    <div class="card" style="background-image:url(image/building.jpg)">
                        <h2>Building title</h2>
                    </div>
                    <div class="card" style="background-image:url(image/building.jpg)">
                        <h2>Building title</h2>
                    </div>
                    <div class="card" style="background-image:url(image/building.jpg)">
                        <h2>Building title</h2>
                    </div>
                    <div class="card" style="background-image:url(image/building.jpg)">
                        <h2>Building title</h2>
                    </div>
                    <div class="card" style="background-image:url(image/building.jpg)">
                        <h2>Building title</h2>
                    </div>
                </div>
                <a class="btn" href="all.php">See more</a>
            </div>
        </div>
    </div>
    <div class="service" id="about">
        <div class="container">
            <div class="service_img">
                <img src="image/service.jpg" alt="Image">
            </div>
            <div class="service_text">
                <div class="service_text_content">
                    <h1>Our service</h1>
                    <p>We provide you a better service about building rent. You can get any type of building as a rent from us.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overview">
        <div class="container">
            <div class="overview_align">
                <div class="overview_circle">
                    <div class="circle_cover">
                        <div class="circle">
                            <h1>5k</h1>
                        </div>
                    </div>
                    <div class="overview_show">
                        <h1>Happy client</h1>
                    </div>
                </div>
                <div class="overview_circle">
                    <div class="circle_cover">
                        <div class="circle">
                            <h1>5k</h1>
                        </div>
                    </div>
                    <div class="overview_show">
                        <h1>Happy client</h1>
                    </div>
                </div>
                <div class="overview_circle">
                    <div class="circle_cover">
                        <div class="circle">
                            <h1>5k</h1>
                        </div>
                    </div>
                    <div class="overview_show">
                        <h1>Happy client</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="touch">
        <div class="container">
            <div class="touch_content">
                <div class="touch_text">
                    <div class="touchText_content">
                        <h1>Get in touch</h1>
                        <p>If you have any question or suggestion, feel free to message us or contact us.</p>
                    </div>
                </div>
                <div class="form">
                    <form action="test.php" method = "get">
                        <input type="text" name="name" placeholder="Full name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="message" name="message" placeholder="message">
                        <input type="submit" name="submit" value="Send">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="footer"></div>
    <footer>
        <div class="container">
            <div class="footer_content">
                <div class="contact">
                    <h1>Contact us</h1>
                    <a href="">+8801925634852</a><br>
                    <a href="">+8801789653421</a><br>
                    <a href="">msm@gmail.com</a>
                    <p>Sonadanga mujgunni mahasarak Khulna</p>
                </div>
                <div class="media">
                    <h1>Social media</h1>
                    <img src="image/facebook.png" alt="">
                    <img src="image/whatsapp.png" alt="">
                    <img src="image/youtube.png" alt="">
                    <img src="image/instagram.png" alt="">
                    <img src="image/snapchat.png" alt="">
                </div>
                <div class="subscribe">
                    <h1>Subscribe for update</h1>
                    <form action="">
                        <input type="text" placeholder="E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>