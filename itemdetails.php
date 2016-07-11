<!DOCTYPE html>
<html>
	<?php include 'partials/scripts_styles.php'	?>
	<body>
		<?php include 'partials/nav_bar.php' ?>
		<div class="container">
			<?php include 'partials/alerts.php' ?>
			<?php
			$item_code = $_GET['item_code'];
			$connection = mysqli_connect("localhost:3306", "root", "admin", "shopping") or die("Please check connection!");
			
			$query = "select * from products where item_code = '$item_code'";
			$featureQuery = "select * from productfeatures where item_code = '$item_code'";
			
			$results = mysqli_query($connection, $query) or die(mysql_error());
			$featureResults = mysqli_query($connection, $featureQuery) or die(mysql_error());
			
			$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
			$featureRow = mysqli_fetch_array($featureResults, MYSQLI_ASSOC);
			
			extract($row);
			extract($featureRow);
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<?= $item_name ?>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<img class="img-responsive" src="<?= $imagename ?>" alt="<?= $item_name ?>" />
						</div>
						<div class="col-sm-6">
							<h3>$<?= $price ?></h3>
							<h3>Description: </h3>
							<h3>
								<?= $description ?>
							</h3>
							<button class="btn btn-lg btn-primary">Buy Now</button>
							<a  href="db/add_to_cart.php?item_code=<?= $item_code ?>" 
								class="btn btn-lg btn-primary">Add To Cart
							</a>
						</div>
					</div>
					<br>
					<div class="row">
						<h2 class="text-center">Specifications</h2>
						<hr>
						<div class="col-sm-12">
							<h3><?= $feature1 ?></h3>
							<h3><?= $feature2 ?></h3>
							<h3><?= $feature3 ?></h3>
							<h3><?= $feature4 ?></h3>
							<h3><?= $feature5 ?></h3>
							<h3><?= $feature6 ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>