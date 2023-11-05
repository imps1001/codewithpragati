<?php
require 'includes/common.php';
function book_now()
{
    global $con;
    if (isset($_GET['book_course'])) {
        $course_id = $_GET['book_course'];
        $user_id = $_SESSION['id'];
        $sql = "INSERT INTO booked_courses (user_id, course_id) VALUES ('$user_id', '$course_id')";
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        echo "<script>alert('Your course is booked')</script>";
        echo "<script>window.open('./dashboard.php','_self')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="socials" style="margin-top: 4rem;">
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
    <!-- Courses Section -->
    <section class="courses bg-white" id="courses">
        <div class="container">
            <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">Our Courses</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $sql = "Select * from courses";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $course_id = $row['course_id'];
                    $title = $row['title'];
                    $description = $row['description']; ?>
                    <div class="col">
                        <div class="card h-100 d-flex align-items-stretch">
                            <?php
                            echo '<img src = "data:image/png;base64,' . base64_encode($row['image']) . '" />'; ?>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 2.5rem; text-align: center;"><strong><?php echo $title ?></strong></h5>
                                <p class="card-text" style="font-size: 1.5rem;"><?php echo $description ?></p>
                                <a href="./dashboard.php?book_course=<?php echo $course_id ?>" class="btn btn-success fw-bold m-2 d-flex justify-content-center" id="bookbtn">Enroll Now For Free</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                book_now()
                ?>
            </div>
        </div>
    </section>
    <!-- Courses Section Ends -->

    <!-- My Courses Section Starts -->
    <section class="bg-white " id="mycourses">
        <?php
        if (isset($_SESSION["email"])) {
            $user_id = $_SESSION['id'];
            $sql = "SELECT * FROM booked_courses WHERE user_id='$user_id' ";
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            if (mysqli_num_rows($result) != 0) {
        ?>
                <div class="container">
                    <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">My Courses</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $course_id = $row['course_id'];
                            $sql2 = "SELECT * FROM courses WHERE course_id=$course_id";
                            $res = mysqli_query($con, $sql2);
                            $row2 = $res->fetch_assoc();
                            $title = $row2['title'];
                            $description = $row2['description'];
                            $link = $row2['link']; ?>
                            <div class="col">
                                <div class="card h-100 d-flex align-items-stretch">
                                    <?php
                                    echo '<img src = "data:image/png;base64,' . base64_encode($row2['image']) . '" />';
                                    ?>
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 2.5rem; text-align: center;"><strong>
                                                <?php echo $title; ?>
                                            </strong></h5>
                                        <p class="card-text" style="font-size: 1.5rem;">
                                            <?php echo $description; ?>
                                        </p>
                                        <a href="<?php echo $link; ?>" class="btn btn-success fw-bold m-2 d-flex justify-content-center" id="bookbtn">Go to
                                            course</a>
                                    </div>
                                </div>
                            </div>
                <?php }
                    }
                } ?>
                    </div>
                </div>

    </section>
    
    <section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>Learn with Pragati</h3>
          <p>Thank you for visiting our page. Connect with us over socials. <br/> <br/> Keep Rising 🚀. Happy Learning</p>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
          <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
          <a href="#services"><i class="fas fa-chevron-circle-right"></i> services</a>
          <a href="#courses"><i class="fas fa-chevron-circle-right"></i> courses</a>
          <a href="#testimonials"><i class="fas fa-chevron-circle-right"></i> testimonials</a>
          <a href="#contact"><i class="fas fa-chevron-circle-right"></i>contact/a>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <p> <i class="fas fa-phone"></i>+91 XXX-XXX-XXXX</p>
          <p> <i class="fas fa-envelope"></i>codeatrandom@gmail.com</p>
          <p> <i class="fas fa-map-marked-alt"></i>Delhi NCR, India</p>
          <div class="share">
              <a href="https://www.linkedin.com/in/imps1001/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
              <a href="https://github.com/imps1001" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
              <a href="mailto:codeatrandom@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
              <a href="https://t.me/imps1001" class="fab fa-telegram-plane" aria-label="Telegram" target="_blank"></a>
              <a href="https://www.youtube.com/@codeatrandom" target="_blank" class="fa-brands fa-youtube" aria-label="Youtube"></a>
          </div>
      </div>
  </div>

  <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/imps1001"> Pragati Sahu</a></h1>

</section>

    <!-- particle.js links -->
    <script src="./js/particles.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>