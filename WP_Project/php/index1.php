<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("location:../WP_Project/index.html");
    }
?>
    
<!DOCTYPE html>
<!-- color palette - https://www.canva.com/colors/color-palettes/toasted-peach/ -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/homepage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <script src="scripts/login_popup.js" charset="utf-8"></script>
    <title>Karlo Adopt!</title>
</head>
<body>
    <!-- header and navbar -->
    <div class="nav-bg-container">
    <header>
        <a href="index.html"><img src="images/corgi.png" alt="logo"></a>
        <nav>
            <ul class="nav_links">
                <li><a href="adopt.html">Adopt</a></li>
                <li><a href="donate.html">Donation</a></li>
                <li><a href="sponsor.html">Sponsor</a></li>
            </ul>
        </nav>
        <div class="userlogins">
            <a href="#"><button type="button" id="login-button"> Log Out </button></a>
           </div>
    </header>
    </div>
    <br>
    <div id="about">
        <a href="adopt.html">
        <h2> Kar Lo Adopt </h2><br>
        </a>
        <article>
            Thank you for considering adoption! Adopting a shelter animal can be a very rewarding experience. At Karlo Adopt, our mission is to place healthy and treatable adoptable pets into permanent homes. We welcome all adopters and aim to find a great match for every customer by providing as much information as we can about each animal, and ultimately allowing each adopter to make the final decision about what is right for their family. Our goal is to be a resource for you throughout the life of your new pet and beyond!
        </article>
        <br>
        <article>
            Pet adoption is the process of transferring responsibility for a pet that was previously owned by another party such as a person, shelter, or rescue organization. Common sources for adoptable pets are animal shelters and rescue groups. Some organizations give adopters ownership of the pet, while others use a guardianship model wherein the organization retains some control over the animal's future use or care.
        </article>
        <br>
        <article>
            We here at <span style="color:#040CB3">Kar Lo Adopt</span> staunchly believe in Adopt, Don't Shop. In case you are not in a position to adopt, you can contribute in various other ways which would benefit the animals. Feel free to <a href="adopt.html">adopt</a> or <a href="donate.html">donate</a> according to your convenience.
        </article>
        
    </div>
    

    <!-- log in/sign up -  pop up form -->
    <div class="popup lg">
        <div class="close-button" id="close-login">&times;</div> <!-- &times; prints an x close -->
        <div class="login-form">
            <form id="lg-form" action="http://localhost/WP/WP_Project/php/login.php" method="post">
            <h2> Log In </h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-element">
                <input type="checkbox" name="remember-me" id="remember-me">
                <label for="remember-me">Remember Me</label>
            </div>
            <div class="form-element">
                <button type="submit" name="lg-submit"> Login </button>
            </div>
            <div class="form-element">
                <a href="#"> Forgot Password? </a>
            </div>
            </form>
        </div>
    </div>

    <!-- sign up button -->
    <div class="popup su">
        <div class="close-button" id="close-signup">&times;</div> <!-- &times; prints an x close -->
        <div class="login-form">
            <form id="su-form" name="su-form" action="http://localhost/WP/WP_Project/php/register.php" method="post">
            <h2> Sign Up </h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-element">
                <label for="password">Password</label>
                <input type="password" name="password1" placeholder="Enter password">
            </div>
            <div class="form-element">
                <label for="password">Confirm Password</label>
                <input type="password" name="password2" placeholder="Enter password">
            </div>
            <div class="form-element">
                <button type="submit" name="su-submit"> Sign Up </button>
            </div>
            </form>
        </div>
    </div>
    <!--
    <div class="banner">
		<div class="image-container">
			<img src="images/puppy.jpg" alt="Cute Dog Picture in Banner" class="bannerpic">
        </div>
		<div class="bannerlink">
			<h1>Save a Life</h1>
			<p>
				Donate Today
				<a href="donate.html">
					<img src="images/paw_print.png" alt="Click here to go to the support us page.">
				</a>
			</p>
		</div>
	</div>
    -->


    <br>
    <!-- footer -->
    <footer id="contact">
    <ul>
    <div id="icon-container">
        <a href="#">
            <div id="icon">
                <li><i class="fab fa-twitter"></i></li>
            </div>
        </a>
        <a href="#">
            <div id="icon">
                <li><i class="fab fa-instagram"></i></li>
            </div>
        </a>
        <a href="#">
            <div id="icon">
              <li><i class="fab fa-facebook-f"></i></li>
            </div>
        </a>
        <a href="#">
            <div id="icon">
              <li><i class="far fa-envelope"></i></li>
            </div>
        </a>
    </div>
    </ul>
    <p>&copy 2020-2021, Kar Lo Adopt.</p>
    </footer>

</body>
</html>
