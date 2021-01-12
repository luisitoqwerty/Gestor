<?php 
session_start();

if (isset($_SESSION['usuario'])) {
	include "header.php";
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<div class="jumbotron">
				
					<hr class="my-4">
					<p><img src="../img/logo.png" class="img-thumbnail" width="300px" /></p>
					
				</div>


			</div>
		</div>
	</div>

	<?php
	include "footer.php"; 
} else {
	header("location:../index.php");
}
?>