$(document).ready(function () {

    $('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

});

 // <!-- typed js effect starts -->
 var typed = new Typed(".typing-text", {
    strings: ["Data Structures and Algorithms", "JAVA Programming Language", "Python Programming Language ", "C++ Programming","frontend development", "backend development", "web designing", "android development", "Full Stack Web Development", "Data Analysis", "Machine Learning"],
    loop: true,
    typeSpeed: 60,
    backSpeed: 30,
    backDelay: 500,
});
// <!-- typed js effect ends -->