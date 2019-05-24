<div class="container mt-4">
	<h1>Weet u zeker dat u <?= $horse['name'] ?> wilt vernietigen?</h1>
	<form name="create" action="<?= URL ?>horse/destroy/<?= $horse['id'] ?>">
		<input type="submit" name="submit" value="Verwijder" class="btn btn-primary">
		<a href="<?= URL ?>horse/index" class="btn btn-info">Nee</a>
	</form>
</div>