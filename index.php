<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">

		body, html{ 
			margin: 0;
			height: 100%;
			width: 100%;
			background-color: black;
			color: white;
		}


		h1{
			text-align: center;			
		}

		#content{
			width: 100%;
			height: 100%;
			margin: 0 auto;			
			text-align: center;
		}

				#imagen{
					float: left;
					background-color: white;
					height: 100%;
					width: 500px;				
					background-image:url('img/folleto.jpg');
					background-size:100%;
					background-repeat: no-repeat;

				}

				#texto{
					padding: 2em;
				}
				
				#formulario{
					width: 400px;
					background-color: blue;
					float: left;
					margin-left: 2em;					
					
				}
				td{
					margin-bottom: 1em;
				}

				
	</style>
</head>
<body>

<div id="content">



	<div id="imagen"></div>		
	

	<div id="texto">

		<h1>Bienvenidos a nuestro web site oficial</h1>

		<h2>El dia lunes 8 de Febrero, inauguraremos oficialmente nuestro web site. Aqui usted podra encontrar informacion del torneo, numeritos, arbitros, contenido multimedia, resultados, calendarios, eventos, inscripciones, entre otras informacion de interes softbolistico de alto rendimiento.... </h2>

			
			<br>
			<h3>Contactanos si desea mas informacion.</h3>



				<?php
						if(isset($_POST['btn_enviar']))
						{
							echo "se envio su Mensaje";
						} 
				?>
				
			<br>
			<form method="post" action="#">
						<table width="250" align="center">
							<tr>
								<td align="left"><label>Nombre</label></td>
							  <td><input type="text"></td>
							</tr>
							<tr>
								<td align="left"><label>Email</label></td>
							  <td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td align="left"><label>Telefono</label></td>
							  <td><input type="text"></td>
							</tr>
							<tr>
								<td align="left"><label>Asunto</label></td>
							  <td><input type="text"></td>
							</tr>													
						</table>
                        <table align="center">
                        	<tr>
								<td align="left"><label>SuMensaje</label></td>
							  <td><textarea></textarea></td>
							</tr>	
                            </table>
                            
                             <table align="center">
                        	<tr>
								<td align="left"><input type="submit" name="btn_enviar" value="Enviar Mensaje"></td>
							
							</tr>	
                            </table>
				
			</form>	
	</div>
</div>

</body>
</html>