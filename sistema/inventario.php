<?php
	require '../php/conexionbd.php';
	$alert = '';
	session_start();
	if (empty($_SESSION['active'])) {
		header('location: ../');
	}
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8"> 
	<title>Control de Ventas</title>
	<link rel="icon" href="../images/clipboard.png">
	<link rel="stylesheet" href="../styles/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
	<div>
		<ul>
		  <li>
		  	<a href="index.php" class="">Ver</a>
		  </li>
		  <li>
		  	<a href="inventario.php" class="active">Inventario</a>
		  </li>
		  <?php
		 	if ($_SESSION['roleus'] == 'admin') {
				print "<li><a href=\"registrar.php\" class=\"\">Registrar</a></li>
					<li>
						<a href=\"modificar.php\" class=\"\">Modificar</a>
					</li>
					<li>
						<a href=\"eliminar.php\" class=\"\">Eliminar</a>
					</li>";
			} 
		  ?>
		  <li style="float:right">
		  	<a href="../php/salir.php" class="sesion">Cerrar sesión</a>
		  </li>
		</ul>
	</div>
	<div style="text-align: center; color: #3f51b5;">
		<u><h2>Productos en Inventario</h2></u>	
	</div>
	<div>
		<table style="width:100%; text-align: center;">
			<thead>
				<tr>
					<th>Num. Registro</th>
				    <th>Descripción de producto</th>
				    <th>Precio por unidad</th>
					<th>Costo por unidad</th>
				    <th>Existencias</th>
					<th>Ultima actualizacion</th>
				</tr>
			</thead>
			<?php
				$sql="SELECT * FROM inventario";
				$result=mysqli_query($conn,$sql);

				while ($inventario=mysqli_fetch_array($result)) {
			?>
			<tbody>
				<tr>
					<td><?php echo $inventario['id'];?></td>
					<td><?php echo $inventario['producto'];?></td>
					<td><?php echo $inventario['precio'];?></td>
					<td><?php echo $inventario['precio_compra'];?></td>
					<td><?php echo $inventario['existencias'];?></td>
					<td><?php echo $inventario['fecha_actualizacion'];?></td>
				</tr>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>