<?php

	include 'conn.php';
	include 'conf.php';
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Session</title>
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">Pelangi Travel and Tourism</div>
		<?php 
			include 'menu.php';
		?>
	</div>
	<div class="content"><div class="container">
	<?php
		if(!is_null(get('p')))
		{
			switch (get('p'))
			{
				case 'home': 
							inc('home');
							break;
				case 'sewa':
				
				switch (get('m')) 
				{
					case 'home':
								inc('tampilan/sewa/all');
								break;
					case 'add':
								inc('tampilan/sewa/add');
								break;
					case 'edit':
								inc('tampilan/sewa/edit');
								break;
					default:
								inc('tampilan/sewa/all');
								break;
				}
							break;
				default:
							inc('home');
							break;
			}
		}else
		{
			inc('home'); 
		} 
	?>
	</div></div>
</body>
</html>