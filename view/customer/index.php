<div class="container">
	<table class="table m-0">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Naam</th>
				<th scope="col">Address</th>
				<th scope="col">Postcode</th>
				<th scope="col">Stad</th>
				<th scope="col">Telefoon nummer</th>
				<th scope="col">E-mail</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customers as $row) { ?>
				<tr>
					<td><?= $row['name'] ?></td>
					<td><?= $row['adres'] ?></td>
					<td><?= $row['postal_code'] ?></td>
					<td><?= $row['town'] ?></td>
					<td><?= $row['phone'] ?></td>
					<td><?= $row['email'] ?></td>
					<td>
						<a href="<?= URL ?>customer/edit/<?= $row['id'] ?>" class="btn btn-warning"><i class="text-light fas fa-edit"></i></a>
						<a href="<?= URL ?>customer/delete/<?= $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="<?= URL ?>customer/create" class="btn btn-success">Voeg een klant toe</a>
</div>
