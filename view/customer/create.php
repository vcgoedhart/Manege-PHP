<div class="container mt-4">
	<h1>Voeg uw klant toe</h1>
	<form name="create" method="POST" action="<?= URL ?>customer/store">
		<div class="form-group">
			<label for="name">Naam</label>
			<input type="text" name="name" required="required">
		</div>
		<div class="form-group">
			<label for="adres">Address</label>
			<input type="text" name="adres" required="required">
		</div>
		<div class="form-group">
			<label for="postal_code">Postcode</label>
			<input type="text" name="postal_code" required="required">
		</div>
		<div class="form-group">
			<label for="town">Stad</label>
			<input type="text" name="town" required="required">
		</div>
		<div class="form-group">
			<label for="phone">Telefoon</label>
			<input type="text" name="phone" required="required">
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" name="email" required="required">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="submit" value="Toevoegen">
		</div>
	</form>
</div>