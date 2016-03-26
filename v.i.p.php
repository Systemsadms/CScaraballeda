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
		

				#loginusuario{	
				float: left;		
				width: 50%;
				height: 80%;
				margin-top: 120px;
				padding: 0;
				text-align: center;
				}

			#bottonsubmit{
							color: black;
						}
			.inputc::-moz-placeholder {
						    color:black;
					}

		@media (max-width:880px){


				#loginusuario{	
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

	<div id="loginusuario">
		<form>		
								<h1 style="color:black;">Login de usuario</h1>		
								<input style="color:black;" class="inputc" type="text" placeholder="Usuario" size="50px"></input>
								<br>
								<input style="color:black;" class="inputc" type="password" placeholder="Contraseña" size="50px"></input>
								<br>
								<input  id="bottonsubmit"  type="submit" value="Ingresar"></input>
		</form>
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