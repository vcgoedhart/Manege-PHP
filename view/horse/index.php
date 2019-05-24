<div class="container">
	<table class="table m-0">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Naam</th>
				<th scope="col">Leeftijd</th>
				<th scope="col">Ras</th>
				<th scope="col">Sprongsport bevoegdheid</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($horses as $row) { ?>
				<tr>
					<td><?= $row['name'] ?></td>
					<td><?= $row['age'] ?></td>
					<td><?= getRace($row['race_id'])['name'] ?></td>
					<td>
						<?php 
							if (getRace($row['race_id'])['height'] <= 147.5){
								echo "Niet bevoegd";
							} else {
								echo "Bevoegd";
							}
						 ?>						
					</td>
					<td>
						<a href="<?= URL ?>horse/edit/<?= $row['id'] ?>" class="btn btn-warning"><i class="text-light fas fa-edit"></i></a>
						<a href="<?= URL ?>horse/delete/<?= $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="<?= URL ?>horse/create" class="btn btn-success">Voeg een paard toe</a>
</div>
