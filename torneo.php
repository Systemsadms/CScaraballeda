<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 	<link href="style/style.css" rel="stylesheet" type="text/css">
 	<link rel="stylesheet" type="text/css" media="all" href="style/mediastyle.css">
 	<script type="text/javascript" src="style/ventanas.js"></script>	
	<title>CsCaraballeda</title>
	<style type="text/css">

			#contenedor{
				width: 100%;
				height: 100%;
				background-image: none;
				background-repeat: no-repeat;
				background-size: 100% 91%;
				margin: 0;
				padding: 0;
				position: relative;
				}		
		

				#torneo{	
				float: left;		
				width: 50%;
				height: auto;
				margin-top: 200px;
				padding: 0;
				text-align: center;
				}

			#bottonsubmit{
							color: black;
						}

		@media (max-width:880px){


				#torneo{	
				float: left;		
				width: 100%;
				height: auto;
				margin-top: 50px;
				}

								}

	</style>
</head>
<body>

	<!--Menu Smartphones-->
	<div id="menuSmart" class="hidden" style="width:100%; height:180px; position:relative; top:0; background-color:#272822;">
		<div id="bottonmenu">
			<input type=image src="img/botton2.jpg" height="100%" width="100%" onClick="menuJs()">	
		</div>

				<ul class="menuSmart" type="none" style="margin-top:0px;"> 
					<li class="elemento"><a class="amenusmart" href="index.html">HOME</a></li>
					<li class="elemento"><a class="amenusmart" href="noticias.php">NOTICIAS</a></a></li>
					<li class="elemento"><a class="amenusmart" href="torneo.php">TORNEO</a></li>
					<li class="elemento"><a class="amenusmart" href="inscripciones.php">INSCRIPCIONES</a></li>
					<li class="elemento"><a class="amenusmart" href="v.i.p.php">V.I.P</a></li>
				</ul>	
	</div>



<div id="contenedor">


	<div id="logo">
		<img src="img/logo.jpg" width="100%" height="100%">
	</div>

	<div id="torneo">	
								<h1 style="color:black;">Torneo</h1>		
								<p style="font-size:25px;">En los proximos dias abriremos esta seccion</p>
	</div>



	<!--Menu Desktop-->





	<nav style="width:100%; height:60px; position:absolute; bottom:0; background-color:black;">
				<ul class="ulmenu" type="none"> 
					<li class="limenuhome"><a href="index.html">HOME</a></li>
					<li class="limenu"><a href="noticias.php">NOTICIAS</a></li>
					<li class="limenu"><a href="torneo.php">TORNEO</a></li>
					<li class="limenu" style="background-color:yellow; color:black;"><a href="inscripciones.php" style="color:black;">
					INSCRIPCIONES</a></li>
					<li class="limenu"><a href="v.i.p.php">V.I.P</a></li>
				</ul>
	</nav>
</div><!----Fin de contenedor ---->