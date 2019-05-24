<div class="container mt-4">
	<h1>Bewerk u ras tot een superras.</h1>
	<form name="create" method="POST" action="<?= URL ?>race/update/<?= $race['id'] ?>">
		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" name="name" value="<?= $race['name'] ?>" required="required">
		</div>
		<div class="form-group">
			<label for="height">Schofthoogte</label>
			<input type="text" name="height" value="<?= $race['height'] ?>" required="required">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Bewerk">
		</div>
	</form>
</div>