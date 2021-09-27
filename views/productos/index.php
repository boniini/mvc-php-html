<!DOCTYPE html> <!-- Versión de HTML -->
<html>
	<head>
	
		<title>Productos</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h1>Listado de Productos</h1>
		
		<table border="1">
			
			<tr>
				<th>#</th>
				<th>Categoria id</th>
				<th>Nombre</th>
				<th>Precio compra</th>
				<th>Precio venta</th>
				<th>Codigo</th>
				<th>Fecha vencimiento</th>
				<th>Cantidad</th>
				<th>Stock minimo</th>
				<th>imagen</th>
			</tr>
			
			<?php foreach($estudiantes as $p){ ?>
				<tr>
					<td><?php echo $p->producto_id ?></td>
					<td><?php echo $p->Categoria_id?></td>
					<td><?php echo $p->Nombre?></td>
					<td><?php echo $p->Precio_compra?></td>
					<td><?php echo $p->Precio_venta?></td>
					<td><?php echo $p->Codigo?></td>
					<td><?php echo $p->Fecha_vencimiento?></td>
					<td><?php echo $p->Cantidad?></td>
					<td><?php echo $p->Stock_minimo?></td>
					<td><?php echo $p->imagen?></td>
				</tr>
			<?php } ?>
			
		</table> 
		
	</body>
	
</html>