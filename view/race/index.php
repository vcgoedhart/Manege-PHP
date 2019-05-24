<div class="container">
	<table class="table m-0">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Naam</th>
				<th scope="col">Schofthoogte</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($races as $row) { ?>
				<tr>
					<td><?= $row['name'] ?></td>
					<td><?= $row['height'] ?></td>
					<td>
						<a href="<?= URL ?>race/edit/<?= $row['id'] ?>" class="btn btn-warning"><i class="text-light fas fa-edit"></i></a>
						<a href="<?= URL ?>race/delete/<?= $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="<?= URL ?>race/create" class="btn btn-success">Voeg een ras toe</a>
</div>
