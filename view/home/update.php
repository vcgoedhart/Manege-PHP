<div class="container mt-4">
	<h1>Voeg uw reservatie toe</h1>
	<form name="create" method="POST" action="<?= URL ?>home/update/<?= $reservation['id'] ?>">
		<div class="form-group">
			<label for="time">Reservatie tijd</label>
			<input type="time" name="time" required="required" value="<?= $reservation["start_time"] ?>">
		</div>
		<div class="form-group">
			<label for="horse_id">Paard</label>
			<select name="horse_id" required="required">
				<?php foreach (getAllHorses() as $row) { ?>
					<?php 
						if (getHorse($reservation['horse_id'])['id'] == $row['id']){
							$selected = "selected"; 
						} else {
							$selected = ""; 
						} 
					 ?>
					<option <?= $selected ?> value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="customer_id">Klant</label>
			<select name="customer_id" required="required">
				<?php foreach (getAllCustomers() as $row) { ?>
					<?php 
						if (getCustomer($reservation['customer_id'])['id'] == $row['id']){
							$selected = "selected"; 
						} else {
							$selected = ""; 
						} 
					 ?>
					<option <?= $selected ?> value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
		</div>
</div>