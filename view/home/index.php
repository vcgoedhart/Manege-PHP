<div class="container">
	<table class="table m-0">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Klant</th>
				<th scope="col">Paard</th>
				<th scope="col">Ras</th>
				<th scope="col">Start tijd</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody> 
			<?php foreach ($reservations as $row) { ?>
				<tr>
					<td><a href="<?= URL ?>customer/index"><?= getCustomer($row['customer_id'])['name'] ?></a></td>
					<td><?= getHorse($row['horse_id'])['name'] ?></td>
					<td><?= getRace(getHorse($row['horse_id'])['race_id'])['name'] ?></td>
					<td><?= $row["start_time"] ?></td>
					<td>
						<a href="<?= URL ?>home/edit/<?= $row['id'] ?>" class="btn btn-warning"><i class="text-light fas fa-edit"></i></a>
						<a href="<?= URL ?>home/delete/<?= $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="<?= URL ?>home/create" class="btn btn-success">Voeg een reservatie toe</a>
</div>
