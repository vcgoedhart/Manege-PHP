<div class="container mt-4">
	<h1>Weet u zeker dat u <?= $race['name'] ?> wilt verwijderen?</h1>
	<form name="create" action="<?= URL ?>race/destroy/<?= $race['id'] ?>">
		<input type="submit" name="submit" value="Verwijder" class="btn btn-primary">
		<a href="<?= URL ?>race/index" class="btn btn-info">Nee</a>
	</form>
</div>