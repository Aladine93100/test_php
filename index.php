<!doctype html>

<html>

<head lang="en">

	<meta charset="utf-8">

	<title>Titre de la page</title>

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/app.css"/>

</head>

<body>

	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">SICSTI</a>


			</div>

		</div>

	</div>

	<div class="container">
		<?php for ($j = 1; $j <= 3; $j++): ?>
		<div class="row">
			<?php for ($i = 1; $i <=4; $i++): ?>
			<article class="col-xs-3 work">
				<img src="http://lorempicsum.com/futurama/220/135/1" <? $i ?> alt="/"><br>
				<strong>video</strong><br>
				<em>description</em>
			</article>
		<?php endfor; ?>
	    
	    </div>
		
		<div class="row row-details"></div>
		<?php endfor; ?>

		</div>

		<div class="col-xs-4">
			<h2>Projet</h2>
			<p><em>Titre</em></p>
			<p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</p>

		</div>

	</div>

<!-- 		<div class="col-xs-3">
			<img src="http://lorempicsum.com/futurama/220/135/1" alt=""/>
			<img src="http://lorempicsum.com/futurama/220/135/2" alt=""/>
			<img src="http://lorempicsum.com/futurama/220/135/3" alt=""/>	
		</div>
 -->


</body>

</html>
