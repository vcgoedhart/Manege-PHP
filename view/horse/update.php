<div class="container mt-4">
	<h1>Bewerk uw paard tot een een super paard.</h1>
	<form name="create" method="POST" action="<?= URL ?>horse/update/<?= $horse['id'] ?>">
		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" name="name" value="<?= $horse['name'] ?>" required="required">
		</div>
		<div class="form-group">
			<label for="age">Leeftijd</label>
			<input type="text" name="age" value="<?= $horse['age'] ?>" required="required">
		</div>
		<div class="form-group">
			<label for="race">Ras</label>
			<select name="race" required="required">
				<?php foreach (getAllRaces() as $row) { ?>
					<?php 
						if ($horse['race_id'] == $row['id']){
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
	</form>
</div>