<div class="container mt-4">
	<h1>Voeg een paard toe</h1>
	<form name="create" method="POST" action="<?= URL ?>horse/store">
		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" name="name" required="required">
		</div>
		<div class="form-group">
			<label for="age">Leeftijd</label>
			<input type="text" name="age" required="required">
		</div>
		<div class="form-group">
			<label for="race">Ras</label>
			<select name="race" required="required">
				<?php foreach (getAllRaces() as $row) { ?>
					<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
		</div>
	</form>
</div>