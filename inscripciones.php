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
		

				#inscripciones{	
				float: left;		
				width: 50%;
				height: 80%;
				margin-top: 30px;
				padding: 0;
				text-align: center;
				}

			#bottonsubmit{
							color: black;
						}
			.inputc{
						color:black;
						}
			.inputc::-moz-placeholder {
						    color:black;
					}


		@media (max-width:880px){


				#inscripciones{	
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


	

	<div id="inscripciones">





<?php
			if ( isset ($_POST["email"]))
			{

			$email		=	$_POST['email'];
			$equipo		=	$_POST['equipo'];
			$gerente	=	$_POST['gerente'];
			$gerenteTlf	=	$_POST['gerenteTlf'];
			$manager	=	$_POST['manager'];
			$managerTlf	=	$_POST['managerTlf'];


				$para = 'cscaraballeda@hotmail.com';
				$asunto = "Nuevo Registro de Equipo";
				$desde = $_POST["email"];				
				$mensaje =
				"Email:" . $email . "<br><br>".
				"Equipo:" . $equipo . "<br><br>".
				"Gerente:" . $gerente . "<br><br>".
				"GerenteTlf:" . $gerenteTlf . "<br><br>".
				"Manager:" . $manager . "<br><br>".
				"ManagerTlf:" . $managerTlf . "<br><br>"	
				;
				 
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["email"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "<font color='#FF0000'><p align='center'>Su pre-inscripcion ha sido completada, verificaremos sus datos para completar su inscripcion ...</p></font>";	
			
				
			}
			
?>




		<form method="POST" action="#" style="color:black;">		
								<h1 style="color:black;">Ficha Tecnica</h1>		
								<input class="inputc" type="text" name="email" placeholder="Correo electronico" size="50px"></input>
								<br>
								<input class="inputc" type="text" name="equipo" placeholder="Nombre del equipo" size="50px"></input>
								<br>
								<input class="inputc" type="text" name="gerente" placeholder="Gerente" size="50px"></input>
								<br>
								<input class="inputc" type="text" name="gerenteTlf" placeholder="Telefono del gerente" size="50px"></input>
								<br>
								<input class="inputc" type="text" name="manager" placeholder="Manager" size="50px"></input>
								<br>
								<input class="inputc" type="text" name="managerTlf" placeholder="Telefono del manager" size="50px"></input>
								<br>
								<input  id="bottonsubmit"  type="submit" name="bt_enviar" value="Inscribirse"></input>
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