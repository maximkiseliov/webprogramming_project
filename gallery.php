<!DOCTYPE html >
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
			<li class="active"><a href="gallery.php" title="Gallery">Gallery</a></li>
			<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
		</ul>
	</div>
</div><!-- end header -->

<div id="main">
	<div class="container">
		<div id="content-full" class="content">
            <h1>Fitness Gallery</h1>
            <div class="gallery">
				<?php
				// задаем путь до сканируемой папки с изображениями  
					$dir = 'images/gallery/';  
					// Cканируем содержимое директории
					  	$files = scandir($dir); 
					  /*scandir — Получает список файлов и каталогов, расположенных по указанному пути.
					   Возвращает array, содержащий имена файлов и каталогов, расположенных по пути, переданном в параметре  */
						// если нет ошибок при сканировании
					 	 if ($files !== false)  { 
						// Перебираем все файлы
						 	for ($i = 0; $i < count($files); $i++) {
							// Текущий каталог и родительский пропускаем 
								if (($files[$i] != ".") && ($files[$i] != "..")) { 
								// Получаем путь к картинке	
									$path = $dir.$files[$i];			
									echo "<a href='$path'><img src='$path' alt='images' class='image-list__img'/></a>"; 
								}
						}
					}
				?>
            </div>
	  </div>
	</div>
	<br>
</div><!-- end main -->



<div id="footer">
	<div class="container">
		<ul class="menu fl">
			<li><a href="index.html" title="Home">Home</a></li>
			<li><a href="about.html" title="About">About</a></li>
			<li class="active"><a href="gallery.php" title="Gallery">Gallery</a></li>
			<li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
		</ul>
		<p>&copy; 2018 Kiseliov Maxim </p>
	</div>
</div><!-- end footer -->
	
	
</body>
</html>