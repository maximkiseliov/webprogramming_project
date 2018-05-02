<?php 
    $nameErr = $emailErr =$commentErr = "";
    $name = $email = $comment = "";

    function verificare($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Заполните это поле!";
        } else {
            $name = verificare($_POST["name"]);
            if (!preg_match("/^[A-Z][a-z]{1,14}$/",$name)) {
                $nameErr = "Имя должно состоять из букв и начинаться с заглавной буквы!"; 
            }
        }
        
        if (empty($_POST["e_mail"])) {
            $emailErr = "Заполните это поле!";
        } else {
            $email = verificare($_POST["e_mail"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Не валидный email адрес!"; 
            }
        }
        if (empty($_POST["comment"])) {
            $commentErr = "Заполните это поле!";
        } else {
            $comment = verificare($_POST["comment"]);
            if (!preg_match("/^[-a-zA-Z0-9 \.\,\?\!\:]{1,1000}$/",$comment)) {
                $commentErr = "Разрешён ввод букв, цифр и пробелов!"; 
            }
        }   
    }

    //добавление в БД
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($nameErr.$emailErr.$commentErr == ""){
            require_once('connection.php');
            //переменная соеденения с БД $conn
            $addCommentDataToBD = "INSERT INTO contact_us (name_visitor, email_visitor, comment_visitor) VALUES ('$name', '$email', '$comment')";
            mysqli_query($conn, $addCommentDataToBD);
            mysqli_close($conn);
            header('Location: http://'.$_SERVER['SERVER_NAME'].'/contact-us.php');
            $name = $email = $comment = "";
        }   
    }
?>



<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Fitness Website" />
    <meta name="keywords" content="fitness, bodybuilding, work-out, muscle, diet, nutrition" />
	<link rel="shortcut icon" href="images/ico.png">
    <title>Fit Guide</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />	
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('#slideshow').nivoSlider({
				directionNav: false
			});
		});
	</script>
<style type="text/css">
table.form {margin: 25px 0 0 29px; border-collapse: collapse; }
</style>
</head>

<body>


<div id="header">
	<div class="container">
		<h1>
			<a href="index.html" title="Fit Guide">Fit Guide - Your Guide In World Of Fitness</a>
		</h1>
		<ul class="menu fr">
			<li><a href="index.html" title="Home">Home</a></li>
			<li><a href="about.html" title="About">About</a></li>
			<li><a href="gallery.php" title="Gallery">Gallery</a></li>
			<li class="active"><a href="contact-us.<?php  ?>" title="Contact Us">Contact Us</a></li>
		</ul>
	</div>
</div><!-- end header -->

<div id="main">
	<div class="container">
		<div id="slideshow">
			<img src="images/slideshow/slide1.jpg" alt="Slideshow Image" />
			<img src="images/slideshow/slide2.jpg" alt="Slideshow Image" />
			<img src="images/slideshow/slide3.jpg" alt="Slideshow Image" />
			<img src="images/slideshow/slide4.jpg" alt="Slideshow Image" />
		</div><!-- end slideshow -->
	
				<div class="intro">
			<p><h1><i>Mens Sana In Corpore Sano</i></h1></p>
		</div><!-- end .intro -->
		<div id="about" class="clearfix">

			<div id="content_wrapper">
  <div id="contenter">


	<form name="form" class="contact" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <h1>Contact Us</h1>
		<label for="name">Name * </label>
            <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>" /><span class="err">* <?php echo $nameErr;?></span><br />

		<label for="email">E-mail * </label>
            <input name="e_mail" type="email" placeholder="email@email.com" value="<?php echo $email;?>" /><span class="err">* <?php echo $emailErr;?></span><br />

		<label for="comment"></label><br />
			<textarea name="comment" id="comment" cols="40" rows="4" placeholder = "Type here..."><?php echo $comment;?></textarea><span class="err">* <?php echo $commentErr;?></span>
            
		<input type="submit" value="Send" name="submit"/>
    </form>



	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.4043128183093!2d28.83671311560998!3d47.01266827914981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c240535aa31%3A0xb613ca4880fd76ad!2sStadionul+Republican!5e0!3m2!1sru!2s!4v1495147920341" width="880" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!-- end of content -->
  <p>&nbsp;</p>
  <p><strong>Adress:</strong> Moldova, Chisinau, Strada București</p>
   <p><strong>Tel:</strong> +373 22 229 269</p>
   <p> <strong>Manager:</strong>  +373 78 115 119 </p> 
   <p><strong>Email:</strong> maxim.kiseliov@gmail.com </p>
   </p>
   

<div id="footer">
	<div class="container">
		<ul class="menu fl">
			<li><a href="index.html" title="Home">Home</a></li>
			<li><a href="about.html" title="About">About</a></li>
			<li><a href="gallery.php" title="Gallery">Gallery</a></li>
			<li class="active"><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
		</ul>
		<p>&copy;  2018 Kiseliov Maxim </p>
	</div>
</div><!-- end footer -->
	
	
</body>
</html>  