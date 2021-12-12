<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Error 404</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
		}
		body {
			background-image: url('imgFondo.jpg');
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container-404 {
			vertical-align: bottom;
			text-align: center;
			width: 100%;
			max-width: 450px;
			background: #fff;
			padding: 10px;
			box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
			border-radius: 7px;
			line-height: 1.7;
			color: #434343;
		}
		img{
			vertical-align: top;
			text-align: center;
			width: 100%;
			max-width: 300px;
			padding: 15px;
			border-radius: 5px;
			line-height: 1.7;
		}

		.boton {
			display: inline-block;
			margin-top: 15px;
			text-decoration: none;
			background: #1a84d3;
			color: #fff;
			padding: 10px 15px;
			border-radius: 5px;
			font-size: 15px;
		}
		#txt-dino{
			display: inline-block;
			margin-top: 10px;
			text-decoration: none;
			font-size: 16px;
			color: black;
		}
	</style>
</head>

<body>
	<div class="container-404">
		<h1>ERROR 404 X_X</h1>
		<p> PÁGINA NO DISPONIBLE. ¡¡¡LÁRGATE!!!
		</p>
		<a href="index.php" class="boton">
			LLÉGALE POR DONDE VENISTE
		</a>
		<img src="img404_dino.png">
		<p id="txt-dino">Cada vez que NO encuentras una página un Dinosaurio NO PUEDE tomar su CAFÉ </p>
	</div>

</body>

</html>