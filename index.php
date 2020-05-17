
<?php include("includes/header.php") ?>

<div class="container">
	<section class="main row">
		<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<h6>  Inserte un numero para calcular sus multiplos y la sumatoria de ellos </h6>
			<!-- Boton Numero-->
			<form action="calcular.php" method="POST">
				<div class="form-group">
					<input type "text" name="dato" class="form-control" placeholder="Inserte un numero" autofocus>
					</div>
					<input type="submit" class="btn btn-secondary btn-block" name="multiplo"value="multiplo">
			</form>
			
			<h6>  Inserte un string  para quitar los espacios, -  y _ </h6>
			<!-- Boton para quitar - _ " "-->
			<form action="calcular.php" method="POST">
				<div class="form-group">
					<input type "text" name="dato" class="form-control" placeholder="Inserte un string" autofocus>
				</div>
				<input type="submit" class="btn btn-secondary btn-block" name="guion"value="guion">
			</form>
			<h6>  Inserte un string  para colocar en reversa las palabras mayores a 5 letras</h6>
			<!-- Boton reversa -->
			<form action="calcular.php" method="POST">
				<div class="form-group">
					<input type "text" name="dato" class="form-control" placeholder="Inserte un string" autofocus>
				</div>
					<input type="submit" class="btn btn-secondary btn-block" name="reversa"value="reversa">
			</form>
		</article>
	</section>
</div>

<?php include("includes/footer.php") ?>