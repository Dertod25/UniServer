<?php 
	if (isset($_POST['pounds'])) {
		$pounds = $_POST['pounds'];

		$lbToKg  = 0.453592;

		$kilograms = $pounds * $lbToKg;

	}

?>

<!-- <h1>
	<?php echo printf('Pounds in Kilograms:  %S',$kilograms); ?>	
</h1> -->


	<h2>Pounds to Kilograms converter</h2>

	<form class="form-inline" action="" method="post">
		<input class="form-control" type="number" name="pounds" required="">
		<button class="btn btn-default" type="submit"> To kilograms</button>
	</form>

<?php if(isset($_POST['pounds'])):?>

		<h3> 
		<?php echo $kilograms; ?> Kilograms in <?php echo $pounds ?> 
		Pounds</h3>

<?php endif; ?>
