<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <!-- Navbar Starts -->
    <?php include './includes/header.php' ?>
    <!-- Navbar Ends -->
    <!-- Hero Section Start-->
    <section class="home" id="home">
        <div id="particles-js"></div>
        <div class="content">
            <h2>Learn To Become<br /><span>Software Engineer</span></h2>
            <p>I can help you learn <span class="typing-text"> </span><br />And Grasp A Placement</p>
            <p style="margin:0; padding:0; font-size: 30px; ">Hello<span style="font-size: 36px;"> <?php echo $_SESSION['name'] ?> </span></p>
            <div class="socials" style="margin-top: 4rem;" >
                <ul class="social-icons">
                    <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/imps1001/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="github" aria-label="GitHub" href="https://github.com/imps1001" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a class="telegram" aria-label="Telegram" href="https://t.me/imps1001" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/govind_sakhi_007/"><i class="fab fa-instagram" target="_blank"></i></a></li>
                    <li><a class="dev" aria-label="Dev" href="https://www.youtube.com/@codeatrandom" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="image">
            <img draggable="false" class="tilt" src="./images/hero.png" />
        </div>
    </section>
    <!-- Hero Section End  -->
    <!-- About us section starts here -->
    <section class="about" id="about">
        <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/hero2.png" draggable="false" class="tilt" alt="Hero" />
            </div>
            <div class="content">
                <h3>Hello, I'm Pragati</h3>
                <span class="tag">Full Stack Web Developer</span>
                <p>Are you feeling stuck or overwhelmed in your coding journey?
                    Don't worry, I've got your back! Together, we'll work to level up your
                    skills, increase your earning potential, and build a brighter future.</p>
                <p>I know learning to code can be tough. So I've carefully organized my
                    courses into simple, bite-sized pieces to help you progress smoothly,
                    one step at a time. </p>
                <p>I believe the best way to learn is by actually doing. That's why my
                    courses teach you the essential theory and provide practical exercises.
                    You'll be able to practice everything you learn and apply it to real-life
                    situations.</p>

                <div class="profilebtn" style="margin-bottom:0px;">
                    <a href="https://imps1001.github.io/Portfolio_Website/" target="_blank" class="btn"><span>View my profile</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
    </section>
    <!-- particle.js links -->
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>