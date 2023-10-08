<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/95a2002ecf.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Code With Pragati</title>
</head>
<style>
    .card-title {
        font-size: 2rem;
        text-align: center;
    }

    .card-text {
        font-size: 1.5rem;
    }

    .testimonial {
        background: #b3d9ff;
        margin-top: 10px;
        padding: 20px;
    }
</style>

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
            <a href="./forms/register.php" class="btn"><span>Register</span>
                <i class="fa-solid fa-circle-right"></i>
            </a>
            <div class="socials">
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
</body>
<!-- Services Section starts -->
<section>
    <div class="services" id="services">
        <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">Our Services</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/service1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2.5rem; text-align: center;"><strong>Recorded Courses</strong></h5>
                        <p class="card-text" style="font-size: 1.5rem;">Get personalized online tutoring from experienced instructors. Enhance your knowledge from the comfort of your own home.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/service2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Live Sessions</strong></h5>
                        <p class="card-text">We do live sessions on weekends on the trending programming topics, so that students can interact and ask their queries from Instructor.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/service3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong> Career Counseling Session</strong></h5>
                        <p class="card-text">Receive expert guidance to make informed career decisions. Explore various options and plan your path to success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section ends -->

<!-- Courses Section -->
<section class="courses bg-white" id="courses">
    <div class="container">
        <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">Our Courses</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/course1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 2.5rem; text-align: center;"><strong>JAVA Course for Beginners in Hindi</strong></h5>
                        <p class="card-text" style="font-size: 1.5rem;">Learn JAVA Programming Language from scratch. This course will include JAVA Fundamentals, OOPs Concepts, Loops, Arrays, Strings and their Programs.</p>
                        <a href="https://youtube.com/playlist?list=PL3ANP9kKTfRaW7IMKXwkxCYBobat33cJg&si=qIoL4TrdgAj3gP2J" class="btn btn-success fw-bold m-2 d-flex justify-content-center" id="bookbtn">View for free</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/course2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Python Course for Beginners in Hindi</strong></h5>
                        <p class="card-text">Learn Python Programming Language from scratch. This course will include Python Fundamentals, OOPs Concepts, Loops, Arrays, Strings and their Programs</p>
                        <a href="https://youtube.com/playlist?list=PL3ANP9kKTfRb4sEX39TaRwlyyJNJqr6IB&si=CboFIVQhmLyjpZJk" class="btn btn-success fw-bold m-2 d-flex justify-content-center" id="bookbtn">View for free</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 d-flex align-items-stretch">
                    <img src="./images/course3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><strong> Full Stack Web Development Full Course</strong></h5>
                        <p class="card-text">Here you can learn Web Development from scratch. This course will include Full Stack Web Development HTML, CSS, JAVASCRIPT, BootStrap, MySQL, PHP</p>
                        <a href="#" class="btn btn-success fw-bold m-2 d-flex justify-content-center" id="bookbtn">View for free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Courses Section Ends -->

<!-- Testimonials Section -->
<section class="text-red-900 text-xl testimonial" id="testimonial">
    <h1 class="d-flex justify-content-center fs-1 fw-bold py-4">What our Students say about us?</h1>
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="./images/student1.jpg">
                    <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HOLDEN CAULFIELD</h2>
                    <p class="text-gray-500">Senior Product Designer</p>
                </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="./images/student2.jpg">
                    <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">ALPER KAMU</h2>
                    <p class="text-gray-500">UI Develeoper</p>
                </div>
            </div>
            <div class="lg:w-1/3 lg:mb-0 p-4">
                <div class="h-full text-center">
                    <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="./images/student3.jpg">
                    <p class="leading-relaxed">Edison bulb retro cloud bread echo park, helvetica stumptown taiyaki taxidermy 90's cronut +1 kinfolk. Single-origin coffee ennui shaman taiyaki vape DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
                    <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">HENRY LETHAM</h2>
                    <p class="text-gray-500">CTO</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section ends-->

<!-- Contact Form  -->
<section class="text-black text-2xl relative contact" id="contact">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Drop your queries/requests</p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">example@email.com</a>
          <p class="leading-normal my-5">49 Smith St.
            <br>Saint Cloud, MN 56301
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section ends -->
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


<!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
<!-- scroll top btn -->
<a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
<!-- scroll back to top -->
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- typed.js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- particle.js links -->
<script src="./js/particles.min.js"></script>
<script src="./js/app.js"></script>
<script src="./js/script.js"></script>

</html>