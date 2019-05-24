<div class="container mt-4">
	<h1>Weet u zeker dat u <?= $customer['name'] ?> wilt verwijderen?</h1>
	<form name="create" action="<?= URL ?>customer/destroy/<?= $customer['id'] ?>">
		<input type="submit" name="submit" value="Verwijder" class="btn btn-primary">
		<a href="<?= URL ?>customer/index" class="btn btn-info">Nee</a>
	</form>
</div>