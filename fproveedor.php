<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<center><h1>FACTURACION</h1></center>
		</div>
		<div>
			<center><h2>PROVEEDOR</h2></center>
		</div>
		<div class="xxx">
			<form action ="guardarpro.php" method="post">
				<div class="form-group">
					<label for="">id_pro</label>
					<input type="text" class="form-control" name="id_pro">
				</div>
				<div class="form-group">
					<label for="">nombre</label>
					<input type="text" class="form-control" name="nombre">
				</div>

				<div class="form-group">
					<label for="">Descripcion</label>
					<input type="text" class="form-control" name="descripcion">
				</div>
				<div class="form-group">
					<label for="">telefono</label>
					<input type="text" class="form-control" name="telefono">
				</div>
				
				<button type="submit" class="btn btn-primary">Guardar</button>
				</form>
		</div>
		<div class="well">
			<center><h3>JHONATAN ANDRES MARTINEZ PEREZ</h3></center>
		</div>
	</div>
</body>
</html>