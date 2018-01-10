<?php require_once('admin/scripts/config.php');

if(isset($_POST['name'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subj'];
	$message = $_POST['message'];
	$direct = "index.php";

	if($subject === ""){

		$sendMail = submitMessage($name, $email, $message, $direct);

	}
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diego Bernal Motion Designer</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Montserrat:400,500" rel="stylesheet">
</head>
<body>

<h1 class="hide">Diego Bernal</h1>

<div class="nav_bar_wrap grid-x" data-magellan>
    <div class="small-3 large-4 cell logo_wrap">
        <a href="#home"><img src="images/logo.svg" alt="Logo" class="nav_logo"></a>
    </div>
    <div class="small-6 cell hide-for-large"></div>
    <div class="cell large-6 large-offset-2 show-for-large desktop_nav">
        <nav>
            <h2 class="hide">Desktop Navigation</h2>
            <ul>
                <li><a href="#home" class="hide_overlay">reel</a></li>
                <li><a href="#portfolio" class="hide_overlay">portfolio</a></li>
                <li><a href="#about" class="hide_overlay">about</a></li>
                <li><a href="#contact" class="hide_overlay">contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="small-3 cell burger_button_wrap hide-for-large">
        <div class="burger_button">
            <div class="top"></div>
            <div class="mid"></div>
            <div class="bot"></div>
        </div>
    </div>
    <div class="nav_overlay hide-for-large">
        <nav>
            <h2 class="hide">Mobile Device Nav</h2>
            <ul>
                <li><a href="#home" class="hide_overlay">reel</a></li>
                <li><a href="#portfolio" class="hide_overlay">portfolio</a></li>
                <li><a href="#about" class="hide_overlay">about</a></li>
                <li><a href="#contact" class="hide_overlay">contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="banner_video_wrap grid-x" id="home" data-magellan-target="home"
     data-interchange="[images/hero_image_mobile.jpg, small], [images/hero_image.jpg, medium], [images/hero_image.jpg, large]">
    <div class="cell title_wrap">
        <div class="text">
            <h2>demo reel</h2>
            <h3>motion & ui design</h3>
            <video controls class="demo_reel">
              <source src="video/Reel17LQ.mp4" alt="demoreel">
            </video>
        </div>
    </div>
    <div class="banner_overlay"></div>
</div>

<div class="portfolio_section_wrap grid-x" id="portfolio" data-magellan-target="portfolio">
    <div class="portfolio_title cell">
        <h2>portfolio</h2>
        <p>Here you can find my most recent work including personal and commercial projects.</p>
    </div>
    <div class="frameworks cell portfolio large-6"
         data-interchange="[images/frameworks_img_mobile.jpg, small], [images/frameworks.jpg, medium], [images/frameworks.jpg, large]">
        <div class="portfolio_text_wrap"> <a href="frameworks.html" class="hide_overlay"></a>
            <h2>frameworks</h2>
            <p>ui & design concept</p>

        </div>
        <div class="portfolio_overlay"></div>
    </div>
    <div class="clairvoyant cell portfolio large-6"
         data-interchange="[images/clairvoyant_mobile.jpg, small], [images/clairvoyant.jpg, medium], [images/clairvoyant.jpg, large]">
        <div class="portfolio_text_wrap">
            <h2>the clairvoyant</h2>
            <p>design & motion</p>
        </div>
        <div class="portfolio_overlay"></div>
    </div>
    <div class="athly cell portfolio large-6"
         data-interchange="[images/athly_mobile.jpg, small], [images/athly.jpg, medium], [images/athly.jpg, large]">
        <div class="portfolio_text_wrap">
            <h2>athly</h2>
            <p>design & motion</p>
        </div>
        <div class="portfolio_overlay"></div>
    </div>
    <div class="julio cell portfolio large-6"
         data-interchange="[images/jones_mobile.jpg, small], [images/jones_desktop.jpg, medium], [images/jones_desktop.jpg, large]">
        <div class="portfolio_text_wrap">
            <h2>julio jones</h2>
            <p>design & motion</p>
        </div>
        <div class="portfolio_overlay"></div>
    </div>
</div>

<div class="about_section_wrap large-4" id="about" data-magellan-target="about">
    <div class="cell self_portrait_wrap"
         data-interchange="[images/about_mobile.jpg, small], [images/about_desktop.jpg, medium], [images/about_desktop.jpg, large]">
        <h2>who i am</h2>
        <div class="bio hide-for-small-only">
            <p>I am Diego Bernal. I am a motion graphic designer.</p>
            <p>Hello! My name is Diego Bernal and I’m a Motion Designer. I studied Audiovisual Media and some courses of Graphic Design in Colombia. <br>Recently I’m pursuing a Diploma in Interactive Media Design as a way to expand my knowledge and build up desirable skills for the current industry of Motion Design and Motion in UX.
            I came to Canada in 2016 to follow my dreams, my passion and discipline have brought me here with the goal to pursue a career in the Motion Design industry.
            </p>

        </div>
        <div class="portfolio_overlay"></div>
    </div>

    <div class="bio hide-for-medium cell">
        <p>I am Diego Bernal. I am a motion graphic designer.</p>
        <p>
          Hello! My name is Diego Bernal and I’m a Motion Designer. I studied Audiovisual Media and some courses of Graphic Design in Colombia. <br>recently I’m pursuing a Diploma in Interactive Media Design as a way to expand my knowledge and build up desirable skills for the current industry of Motion Design and Motion in UX.
          I came to Canada in 2016 to follow my dreams, my passion and discipline have brought me here with the goal to pursue a career in the Motion Design industry.
        </p>
    </div>
</div>

<div class="contact_section_wrap grid-x" id="contact" data-magellan-target="contact">
    <div class="contact_intro cell medium-8 medium-offset-2">
        <h2>contact</h2>
        <p>
            Let’s work together! Send me a brief message either about a porject you have in mind <br>
						that requires video and animation or just to say Hello, I will contact you back soon to <br>
						help you out with you business or your idea:
        </p>
    </div>

    <form action="contact.php" class="contact_form cell medium-6 medium-offset-3 large-4 large-offset-4">
        <label for="name">Name</label>
        <input type="text">
        <label for="email">Email</label>
        <input type="email">
        <label for="subj">Subject</label>
        <input type="text">
        <label for="message">Message</label>
        <input type="text">
				<input name="submit" type="submit" value="Send" />
    </form>
    <div class="send cell medium-12">

        <button name="submit" type="submit" value="Send" />
            <p >send</p>
        </button>
    </div>
</div>

<footer class="main_footer grid-x">
    <div class="social_media cell">
        <a href="https://www.behance.net/diego_bernal" target="_blank"><span class="fa fa-behance"></span></a>
        <a href="https://vimeo.com/diegomographics" target="_blank"><span class="fa fa-vimeo"></span></a>
        <a href="https://www.linkedin.com" target="_blank"><span class="fa fa-linkedin"></span></a>
        <a href="https://www.instagram.com" target="_blank"><span class="fa fa-instagram"></span></a>
    </div>
</footer>
<?php
	db_disconnect($db);
 ?>
<script src="https://use.fontawesome.com/06ca416ec7.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/nav.js"></script>
</body>
</html>
