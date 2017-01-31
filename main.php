<?php
    $_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
?>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Home</a>
        <a href="#">Open account</a>
        <a href="#">Transfer money</a>
        <a href="#">Contact us</a>
    </div>
</div>

<h2>Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">

    <form class="modal-content animate" action="action_page.php">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked"> Remember me
</div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="AAEAAQAAAAAAAAIQAAAAJGE5NmU4MGJmLWMxMzgtNDVlZC05ZTgxLWQ5YjdlOWE5Mzg4OA.jpg" style="width:100%">
        <div class="text">1</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="droit-bancaire.jpg" style="width:100%">
        <div class="text">2</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="e-banking.jpg" style="width:100%">
        <div class="text">3</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="hand_card_money_online_purchase_laptop_80035_1920x1080.jpg" style="width:100%">
        <div class="text">4</div>
    </div>
    <a class="prev" onclick="plusSlides(-1)"><</a>
    <a class="next" onclick="plusSlides(1)">></a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>
<a href="#">Forgot your password?</a>

<center>
    <footer>
        <p>&copy; Marcelo Kuqo 2017</p>
    </footer>
</center>

</body>
</html>

