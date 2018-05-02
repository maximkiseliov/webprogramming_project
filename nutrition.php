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


<!DOCTYPE html >
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
</div><!-- end header -->

<div id="main">
	<div class="container">
		<div id="content-full" class="content">
			<h2>Nutrition articles & Information</h2>
			<div class="image fl"><img src="images/recepies/recipe.jpg" width="640" height="300"></div>	
			
<p> It's time to ditch the idea that healthy food should only induce a sigh and be tasteless. Let the Powerteam.com Healthy Recipe Database open your mind and stomach to more lip-smacking and muscle-fueling foods, while still helping you LOSE FAT or gain muscle.</p>        
            
<p> Whether you're looking for something easy to spice up a boring dish, new protein-infused breakfast ideas, a variety of delicious protein smoothies, or just want to look at delicious food pictures, our database of recipe listings has what you need for inspiring a healthy menu or new meal ideas. </p>
<p>&nbsp;</p>
           
            
 
            <div>
              <div class="intro">
                <div>
                  <div>
                    <h1 id="all2">HEALTHY RECIPES CATEGORIES</h1>
</div>
                  <div><a href="http://www.bodybuilding.com/fun/healthy-breakfast-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_breakfast.jpg" alt="Healthy Breakfast Recipes" title="Healthy Breakfast Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-lunch-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_lunch.jpg?v=2" alt="Healthy Lunch Recipes" title="Healthy Lunch Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-dinner-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_dinner.jpg" alt="Healthy Dinner Recipes" title="Healthy Dinner Recipes"></a>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-breakfast-recipes.html">BREAKFAST</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-lunch-recipes.html">LUNCH</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-dinner-recipes.html">DINNER</a></h3>
                    </div>
                  </div>
                   
                  <div><a href="http://www.bodybuilding.com/fun/healthy-chicken-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_poultry.jpg" alt="Healthy Chicken Recipes & Turkey" title="Healthy Chicken Recipes & Turkey"></a><a href="http://www.bodybuilding.com/fun/healthy-beef-pork-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_meat.jpg" alt="Healthy Beef & Pork Recipes" title="Healthy Beef & Pork Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-shrimp-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_seafood.jpg" alt="Healthy Shrimp Recipes & Fish" title="Healthy Shrimp Recipes & Fish"></a>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-chicken-recipes.html">CHICKEN &amp; TURKEY</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-beef-pork-recipes.html">BEEF &amp; PORK</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-shrimp-recipes.html">SEAFOOD</a></h3>
                    </div>
                  </div>
                  <div><a href="http://www.bodybuilding.com/fun/healthy-salad-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_salad.jpg" alt="Healthy Salad Recipes" title="Healthy Salad Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-smoothie-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_smoothie.jpg" alt="Healthy Smoothie Recipes & Protein Shakes" title="Healthy Smoothie Recipes & Protein Shakes"></a><a href="http://www.bodybuilding.com/fun/healthy-dessert-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_dessert.jpg" alt="Healthy Dessert Recipes" title="Healthy Dessert Recipes"></a>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-salad-recipes.html">SALADS</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-smoothie-recipes.html">SMOOTHIES &amp; SHAKES</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-dessert-recipes.html">DESSERT</a></h3>
                    </div>
                  </div>
                   
                  <div><a href="http://www.bodybuilding.com/fun/healthy-crock-pot-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_crockpot.jpg" alt="Healthy Crock-Pot Recipes" title="Healthy Crock-Pot Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-paleo-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_paleo.jpg" alt="Healthy Paleo Recipes" title="Healthy Paleo Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-vegetarian-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_vegetarian.jpg" alt="Healthy Vegetarian Recipes & Vegan" title="Healthy Vegetarian Recipes & Vegan"></a>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-crock-pot-recipes.html">CROCK POT</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-paleo-recipes.html">PALEO</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-vegetarian-recipes.html">VEGETARIAN &amp; VEGAN</a></h3>
                    </div>
                  </div>
                  <div><a href="http://www.bodybuilding.com/fun/healthy-gluten-free-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_gluten-free.jpg" alt="Healthy Gluten-Free Recipes" title="Healthy Gluten-Free Recipes"></a><a href="http://www.bodybuilding.com/fun/healthy-low-carb-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_low_carb.jpg" alt="Healthy Low-Carb Recipes" title="Healthy Low-Carb Recipes"></a><a href="http://www.bodybuilding.com/fun/other-healthy-recipes.html"><img src="http://www.bodybuilding.com/fun/images/2014/recipe-database-main-page_healthy_recipes.jpg" alt="Other Healthy Recipes" title="Other Healthy Recipes"></a>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-gluten-free-recipes.html">GLUTEN-FREE</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/healthy-low-carb-recipes.html">LOW-CARB</a></h3>
                    </div>
                  </div>
                  <div>
                    <div>
                      <h3><a href="http://www.bodybuilding.com/fun/other-healthy-recipes.html">OTHER HEALTHY RECIPES</a></h3>
                    </div>
                  </div>
            <h1 id="all">&nbsp;</h1>
					</div>
				</div>
			</div>

      <div id="contenter">
          <?php
              require('form.html');
              include('output.php');
          ?>
      </div>
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
		    <p>&copy;  2018 Kiseliov Maxim </p>
	     </div>
      </div><!-- end footer -->
	
	
</body>
</html>  
