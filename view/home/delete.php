<div class="container mt-4">
	<h1>Weet u zeker dat u de reservatie van <?= getCustomer($reservation['customer_id'])['name'] ?> wilt verwijderen?</h1>
	<form name="create" action="<?= URL ?>home/destroy/<?= $reservation['id'] ?>">
		<input type="submit" name="submit" value="Verwijder" class="btn btn-primary">
		<a href="<?= URL ?>home/index" class="btn btn-info">Nee</a>
	</form>
</div>