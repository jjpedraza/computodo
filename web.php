<?php
//  require("asset/config/config.php");
  ?>
<?php require("asset/config/functions.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta content="True" name="HandheldFriendly">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<meta name="description" content="Centro de Servicio autorizado, y Venta de productos informaticos">
		<meta name="keywords" content="Epson, Brother, Kaiser,Bixolon, Aspel">
		<meta name="author" content="Sistemas Equicsa S.A de C.V.">
		<title>COMPUTODO: Tu mejor opcion!</title>
		<script src='jquery.min.js' type='text/javascript'/></script>
		<!--Banners prinicpales-->
		<script type="text/javascript">//<![CDATA[
			$(function(){
				$('#slider div:gt(0)').hide();
				setInterval(function(){
				$('#slider div:first-child').fadeOut(0)
					.next('div').fadeIn(1000)
					.end().appendTo('#slider');}, 4000);
			});
			//]]>
		</script>
		<link href="estilo.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="web">
			<div id="top_content">
				<table width="100%"><tr>
					<td id="logo" valign="middle" align="center" width="40%">
						
						<img src="company/logo.png" id="pc">
						<img src="company/logo_movil.png" id="movil">
						
						
					</td>
					<?php
					$select_=$_GET['s'];
					?>
					<td
						<?php
							if ($select_=="inicio")
								{echo 'class="select"';}
							else {echo 'class="unselect"';}
						?>
						>
						<a href="?s=inicio">
							<img src="img/icon_home.fw.png" id="movil">
							<span id="pc">Inicio</span>
						</a> </td>
						<td valign="middle" align="center"
							<?php
								if ($select_=="productos")
									{echo 'class="select"';}
								else {echo 'class="unselect"';}
							?>
							>
							<a href="?s=productos">
								<img src="img/icon_productos.fw.png" id="movil">
								<span id="pc">Productos</span>
							</a> </td>
						</td>
						<td
							<?php
								if ($select_=="servicios")
									{echo 'class="select"';}
								else {echo 'class="unselect"';}
							?>
							>
							<a href="?s=servicios">
								<img src="img/icon_servicios.fw.png" id="movil">
								<span id="pc">Servicios</span>
							</a> </td>
						</td>
						<td
							<?php
								if ($select_=="ofertas")
									{echo 'class="select"';}
								else {echo 'class="unselect"';}
							?>
							>
							<a href="?s=ofertas">
								<img src="img/icon_ofertas.fw.png" id="movil">
								<span id="pc">Promociones</span>
							</a> </td>
						</td>
					</tr>
				</table>
			</div>
			<table width="100%" border='0' bgcolor="white">
				<tr>
					<td   valign="top">
						<table width="100%" border='0'>
							<tr>
								<td valign="middle" align="center" >
									<div id="centro"><br>
										Centro AUTORIZADO de servicio:<br>
										<img src="img/epson.png">
										<img src="img/brother.png">
										<img src="img/aspel.png">
										<img src="img/kaiser.png">
										<img src="img/bixolon.png">
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<?php
									if ($select_=="inicio")
									{
										echo '
											<div id="slider">
													<div><img src="img/banner/epson.jpg">  </div>
													<div><img src="img/banner/bixolon.png"> </div>
													<div><img src="img/banner/aspel.png"></div>
													<div><img src="img/banner/syscom.jpg"></div>
													<div><img src="img/banner/brother.jpg"></div>
													<div><img src="img/banner/acer.jpg"></div>
													<div><img src="img/banner/ms.jpg"></div>
													<div><img src="img/banner/hplap.jpg"></div>
										</div>';
										echo '
										<h1> SISTEMAS EQUICSA SA DE CV </h1>
									<p> Somos una empresa Tampique&ntilde;a dedicada Ventas y Soporte Tecnico autorizado en productos de las marcas EPSON, Brother, Mitzu, Kaiser y Bixolon. Atendemos garantias de las marcas mencionadas, sin embargo tambien recibidos otras marcas con costo en el servicio. </p>
									<p>Con mas de 36 a&ntilde;os como centro de servicio, desde 1980 nos da una amplia experiencia en la reparacion de tu equipo.</p>
								</div>
								';
								}
								if ($select_=="productos")
								{
								echo '
								<div id="productos">
										<h1>Contamos con una amplia gama de Productos para usted:</h1>
										<article>
													<img src="img/computadoras.png"
													<br>
													Computadoras de Escritorio
										</article>
										<article>
													<img src="img/laptops.png"
													<br>
													Laptops
										</article>
										<article>
													<img src="img/impresora_inyeccion.png"
													<br>
													Impresoras de Inyeccion de Tinta
																				</article>
										<article>
													<img src="img/impresora_laser.png"
													<br>
													Impresoras Laser a color y Negro
										</article>
										
										<article>
													<img src="img/impresora_miniprinter.png"
													<br>
													MiniPrinter para impresion de Tickets
										</article>
										
										<article>
													<img src="img/impresora_doblecarta.png"
													<br>
													Impresoras doble carta
										</article>
										
										<article>
													<img src="img/plotter.png"
													<br>
													Impresoras de gran formato
										</article>
										
										<article>
													<img src="img/vigilancia.png"
													<br>
													Camaras de Vigilancia
										</article>
										
										<article>
													<img src="img/consumibles.png"
													<br>
													Tintas, Cartuchos y Tonner
										</article>
										
										<article>
													<img src="img/bocinas.png"
													<br>
													Bocinas amplificadas KAISER
										</article>
										
										<article>
													<img src="img/proyector.png"
													<br>
													Proyectores de Video
										</article>
								</div>';
								}
								if ($select_=="servicios")
								{
								echo '
								<div id="servicios">
										<h1>Contactamos con equipo capacitado para atender: </h1>
										<article>
													<img src="img/reparacion_impresoras.png"
													<br>
													Reparacion de impresoras
										</article>
										<article>
													<img src="img/reparacion_computadoras.png"
													<br>
													Reparacion de Computadoras
										</article>
										<article>
													<img src="img/proyector.png"
													<br>
													Reparacion de Proyectores de Video
										</article>
								</div>';
								}
								if ($select_=="ofertas")
								{
								echo '
								<div id="ofertas">
										
										<p>Por el momento no tenemos promociones. </p>
										* Mandanos un mensaje para agregarte a nuestra lista de promociones.
								</div>';
								}
								?>
							</td>
						</tr>
					</table>
				</td>
				<td id="cotizar" valign="top">
					<div id="pc">
						<div id="cotizar1">
							<img src="img/chica2.png">
							
							<form action="cotiza.php" method="post" >
								

								<div>
									<label for="equipo">Que tipo de equipo: </label>
									<select id="equipo" name="equipo">
										<option value="IMPRESORAS" selected="">Impresoras</option>
										<option value="COMPUTADORAS">Computadoras</option>
										<option value="CAMARAS DE VIGILANCIA">Sistemas de Vigilancia</option>
										<option value="SOPORTE IMPRESORAS">Reparacion de Impresoras</option>
										<option value="SOPORTE COMPUTADORAS">Reparacion de Computadoras</option>
									</select>
								</div>
								<div>
									<label for="marca">La Marca:</label>
									<select id="marca" name="marca">
										<option value="EPSON" selected="">EPSON</option>
										<option value="BROTHER">BROTHER</option>
										<option value="KAISER">KAISER</option>
										<option value="otra">otra marca</option>
									</select>
								</div>

								<input type="hidden" name="subject" value=equipo+marca />

								<div>
									<label for="nombre">Tu Nombre: </label>
									<input type="text" id="nombre" name="nombre" required="">
								</div>
								<div>
									<label for="correo">Tu email: </label>
									<input type="mail" id="correo" name="correo" required="">
								</div>
								<div>
									<label for="tel">Tu Telefono: </label>
									<input type="text" id="tel" name="tel" required="">
								</div>
								<div>
									<label for="descripcion"><b>EN QUE TE PODEMOS AYUDAR?</b></label>
									<textarea id="descripcion" name="descripcion"></textarea>
								</div>
								<div>
									<input type="submit" value="Enviar">
								</div>
							</form>
							
						</div>
					</div>
				</td>
			</tr>
		</table>
		<div id="movil"><div id="cotizar_movil">
			<img src="img/chica.png">
			
			<form action="cotiza.php" method="post" >
				<div>
					<label for="equipo">Que tipo de equipo: </label>
					<select id="equipo" name="equipo">
						<option value="IMPRESORAS" selected="">Impresoras</option>
						<option value="COMPUTADORAS">Computadoras</option>
						<option value="CAMARAS DE VIGILANCIA">Sistemas de Vigilancia</option>
						<option value="SOPORTE IMPRESORAS">Reparacion de Impresoras</option>
						<option value="SOPORTE COMPUTADORAS">Reparacion de Computadoras</option>
					</select>
				</div>
				<div>
					<label for="marca">La Marca:</label>
					<select id="marca" name="marca">
						<option value="EPSON" selected="">EPSON</option>
						<option value="BROTHER">BROTHER</option>
						<option value="KAISER">KAISER</option>
						<option value="otra">otra marca</option>
					</select>
				</div>
				<div>
					<label for="nombre">Tu Nombre: </label>
					<input type="text" id="nombre" name="nombre" required="">
				</div>
				<div>
					<label for="correo">Tu email: </label>
					<input type="mail" id="correo" name="correo" required="">
				</div>
				<div>
					<label for="tel">Tu Telefono: </label>
					<input type="text" id="tel" name="tel" required="">
				</div>
				<div>
					<label for="descripcion"><b>EN QUE TE PODEMOS AYUDAR?</b></label>
					<textarea id="descripcion" name="descripcion"></textarea>
				</div>
				<div>
					<input type="submit" value="Enviar">
				</div>
			</form>
			
		</div>
	</div>
	<div id="footer">
		<div id="pc">
			<table>
				<tr>
					<td width="50%">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1846.4406126241213!2d-97.87124503237305!3d22.244584876085174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x398ee6f664e8f37f!2sCruz+G%C3%B3mez+Ricardo!5e0!3m2!1ses-419!2smx!4v1467648161495" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</td>
					<td>
						<p>Estamos ubicados en <b>Felipe Resendez No. 102</b>, Col. Lauro Aguirre, Tampico Tamaulipas. Mexico</p>
						<p>Telefonos:
						(833) <b>213 4003 Y 213 10 37<b></p>
						<p>Correo Electronico: gerencia@equicsa.com.mx
						</p>
						<br><a href="privacidad.pdf" tarjet="blank">Acuerdo de Privacidad</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="footer_movil">
		<div id="movil">
			<table>
				<tr>
					<td width="50%">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1846.4406126241213!2d-97.87124503237305!3d22.244584876085174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x398ee6f664e8f37f!2sCruz+G%C3%B3mez+Ricardo!5e0!3m2!1ses-419!2smx!4v1467648161495" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</td>
					<td>
						<p>Estamos ubicados en <b>Felipe Resendez No. 102</b>, Col. Lauro Aguirre, Tampico Tamaulipas. Mexico</p>
						<p>Telefonos:<br>
						833 213 4003 <br> 833 213 10 37<b></p>
						<p>Correo Electronico: gerencia@equicsa.com.mx
						</p>
						<br><a href="privacidad.pdf" tarjet="_blank">Acuerdo de Privacidad</a>
					</td>
				</tr>
			</table>
		</div>
		
		
	</div>
</div>
</body>
</html>