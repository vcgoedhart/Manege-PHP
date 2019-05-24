<div class="container mt-4">
	<h1>Voeg een ras toe</h1>
	<form name="create" method="POST" action="<?= URL ?>race/store">
		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" name="name" required="required">
		</div>
		<div class="form-group">
			<label for="height">Schofthoogte</label>
			<input type="text" name="height" required="required">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
		</div>
	</form>
</div>