<?php
	$errMsg = "";
	$validate = true;

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$metaA = explode(":", $_POST['time']);
		$totalTimeA = $metaA[0] . $metaA[1];

		foreach (getAllReservations() as $row) {
			$metaB = explode(":", $row['start_time']);
			$totalTimeB = $metaB[0] . $metaB[1];
			
			$result = $totalTimeB - $totalTimeA;

			if ($result >= 0 && $result <= 100 || $result <= 0 && $result >= -100){
				$validate = false;
				$errMsg = "Die paard is dan al gereserveerd!";
				break;
			}
		}

		if ($validate == true){
			store($_POST['time'], $_POST['horse_id'], $_POST['customer_id']);
		}
	}
 ?>
<div class="container mt-4">
	<h1>Voeg uw reservatie toe</h1>
	<p class="text-danger"><?= $errMsg ?></p>
	<form name="create" method="POST">
		<div class="form-group">
			<label for="time">Reservatie tijd</label>
			<input type="time" name="time" required="required">
		</div>
		<div class="form-group">
			<label for="horse_id">Paard</label>
			<select name="horse_id" required="required">
				<?php foreach (getAllHorses() as $row) { ?>
					<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label for="customer_id">Klant</label>
			<select name="customer_id" required="required">
				<?php foreach (getAllCustomers() as $row) { ?>
					<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
		</div>
</div>