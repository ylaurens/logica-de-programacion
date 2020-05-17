
<?php include("includes/header.php") ?>

<div class="container p-4">
	<div class= "row">
		<div class="col-md-4">
			<div class="card card-body">
				<form action="calcular.php" method="POST">
					<div class="form-group">
						<input type "text" name="dato" class="form-control" placeholder="Inserte el dato a calcular" autofocus>
					</div>
					<input type="submit" class="btn btn-succses btn-block" name="calcular"value="Calcular">
				</form>
			</div>
		</div>
	</div>
</div>


<?php include("includes/footer.php") ?>