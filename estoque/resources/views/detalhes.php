<html>
	<head>
		<link rel="stylesheet" href="/css/app.css">
		<title>Inventory control</title>
	</head>
	<body>
		<h1>Product Detail | <?= $p->nome ?></h1>
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Value</th>
				<th>Description</th>
				<th>Quantity</th>
			</tr>

			<tr>
				<td><?= $p->nome ?></td>
				<td><?= $p->valor ?></td>
				<td><?= $p->descricao ?></td>
				<td><?= $p->quantidade ?></td>
			</tr>			


		</table>
	</body>
</html>