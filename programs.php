<?php
    function validate($data) {
        $data = trim($data);        
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = trim(preg_replace('/\s+/', ' ', $data));
        return $data;
    }

    $name = $email = $message = "";
	$date = date("y-m-d h:i:s");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = validate($_POST["name"]);
        $email = validate($_POST["email"]);
        $message = validate($_POST["message"]);

        if (!empty($name) && !empty($email) && !empty($message)) {
            $file = fopen("date.txt", "a") or die("File wasn't found");
            $divider = "|";
            $nl = "\n";
            fwrite($file, $date);
            fwrite($file, $divider);
            fwrite($file, $name);
            fwrite($file, $divider);
            fwrite($file, $email);
            fwrite($file, $divider);
            fwrite($file, $message);
            fwrite($file, $nl);
            fclose($file);
        }
    }
?>


<!DOCTYPE html> 
<html> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Fitness Website" />
    <meta name="keywords" content="fitness, bodybuilding, work-out, muscle, diet, nutrition" />
	<link rel="shortcut icon" href="images/ico.png">
    <title>Fit Guide</title>	
    <link href="css/style.css" rel="stylesheet" type="text/css" />
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
			<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
		</ul>
	</div>
</div><!-- // end header -->

<div id="main">
	<div class="container">
		<div id="content-full" class="content">
			<h1>Workout & Programs</h1>
			<div class="image fl"><img src="images/programs/program1.jpg" alt="Article Image" width="315" height="308" /></div>	
			<p>If you want to get strong, you need to spend a few months training heavy. If you want to look like a bodybuilder, you need to do more sets and reps. Lose your gut? That means 12 weeks of circuit training. Well, life is too damn short. That&rsquo;s why we&rsquo;ve come up with a system that lets you develop strength, size, and definition — the &ldquo;perfect&rdquo; body— in a single all-encompassing workout. </p><h1><strong>The Perfect Program</strong></h1></p>
			<p><strong><strong>How It Works:</strong> </strong>Using the most time-efficient exercises (the squat, deadlift, and dip), our workout minimizes the overall number of moves. This will stimulate the muscles enough to grow without hurting their ability to recover. Each session emphasizes specific parts aimed at strength, muscle gain, and conditioning. Workouts begin with a heavy lift, then move on to fast-paced circuits for a big pump, and finish with a calorie-burning superset designed to leave you gassed.</p>
			<p><h1>&nbsp;</h1>
			<h1><strong>Directions</strong> </h1>
		  <p><strong><strong>Frequency:</strong> </strong>Perform each workout (1, 2, and 3) once per week, resting at least a day between each session.</p>
		  <p><strong><strong>Time needed:</strong> </strong>30-40 min.</p>
		  <p><strong>Do It:</strong> Complete all the sets for the first exercise in each workout before moving on. Perform the exercises marked &ldquo;a,&rdquo; &ldquo;b,&rdquo; and, sometimes, &ldquo;c&rdquo; in sequence, resting as directed between sets, until all prescribed sets are done. Use the heaviest weight possible for the first exercise. You can probably increase this load as your sets go on. The weight you choose for the 2a, 2b, and 2c exercises should be your 10-rep max (10RM), the heaviest load you can handle for 10 reps on the first set. Stick with that weight for all prescribed sets, doing as many reps as possible with that same weight. Perform all the exercises with explosive—but controlled—speed.</p>
		  <p><h2><strong>The Workouts:</strong></h2></p>
		  <table align="center" border="0" cellpadding="2" cellspacing="2" width="450">
		    <tbody>
		      <tr>
		        <td bgcolor="#CC99FF" colspan="4" height="6px"> </td>
	          </tr>
		      <tr>
		        <td align="center"><strong><strong><a href="http://www.mensfitness.com/fitness/workout-routines/build-your-perfect-body-routine">Workout 1</a></strong></strong></td>
		        <td align="center"><strong><strong><a href="http://www.mensfitness.com/fitness/workout-routines/build-your-perfect-body-routine?page=6">Workout 2</a></strong></strong></td>
		        <td align="center"><strong><strong><a href="http://www.mensfitness.com/fitness/workout-routines/build-your-perfect-body-routine?page=9">Workout 3</a></strong></strong></td>
	          </tr>
		      <tr>
		        <td bgcolor="#FF99CC" colspan="4" height="6px"> </td>
	          </tr>
	        </tbody>
	      </table>
		  <p>&nbsp;</p>
<h1>How Bodybilding Helps</h1>
<div class="image fr"><img src="images/programs/program2.jpg" alt="Article Image" width="305" height="320" /></div>	
			<p>When you think of your life, are you happy most days of the week? Read on, bodybuilding will bring more enjoyment to your life.			</p>
			<ul>
			  <li><strong>Bodybuilder's Are Selfish With Their Time:</strong> One common denominator among people who are overweight and frustrated is that they do things for everyone else in their life but never take time for themselves!
			    <p>But, as a bodybuilder, you are a little selfish with your time. You realize that you need time to workout to recharge your batteries and function on a high level in all areas of your daily life.</p>
		      </li>
			  <li><strong>Bodybuilders Acknowledge Their Accomplishments:</strong> There's a big difference between bragging and accepting compliments. As a bodybuilder, you are open to compliments and you are proud of your hard work, dedication and the positive changes you've made in your health and overall life.</li>
			  <li><strong>Bodybuilders Explore Life:</strong> Bodybuilders are always in search of ways to improve their health, their workouts and their life in general. By exploring new activities, bodybuilders meet new people and challenge their bodies through rock climbing, hiking, rappelling, trail running and adventure races. Constant exploration brings excitement to your days and something to look forward to.</li>
			  <li><strong>Bodybuilders Have Energy:</strong> Working out and eating right will give you more energy. And, when you look good you feel good and you are more likely to take part in new activities.</li>
			  <li><strong>Bodybuilding Get Right Back Up After A Setback:</strong> Life will throw you curve balls sometimes but, as a bodybuilder, you keep your eye on the ball and hit it out of the park. You don't let illness, weight gain, traffic, a stressful day or anything else get in your way. Instead, you stay on track no matter what comes your way.</li>
			  <li><strong>Bodybuilding Is A Diversion:</strong> Sometimes we need a distraction. If your mind is racing with thoughts about your ex, your boss, or the economy, bodybuilding will help you focus on something else, regroup and make it through your day with fewer worries.</li>
			</ul>

			<div id="contenter">
				<?php
				    require('form.html');
				    include('output.php');
				?>
			</div>
	</p>
		</div>
	</div>
</div>

<div id="footer">
	<div class="container">
		<ul class="menu fl">
			<li><a href="index.html" title="Home">Home</a></li>
			<li><a href="about.html" title="About">About</a></li>
			<li><a href="gallery.php" title="Gallery">Gallery</a></li>
			<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
		</ul>
		<p>&copy;  2018 Kiseliov Maxim</p>
	</div>
</div><!-- end footer -->
	
	
</body>
</html>