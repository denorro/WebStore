<!DOCTYPE html>
<html>
	<?php include 'partials/scripts_styles.php' ?>
	<body>
		<?php include 'partials/nav_bar.php' ?>
		<div class="container">
			<div class="page-header">
				<?php
					$brand = $_GET['brand'];
					$connection = mysqli_connect("localhost:3306", "root", "admin", "shopping")
				  	or die ( "Please check connection!");				  
				  	$query = "select item_code, item_name, description, imagename, price from products where brand_name = '$brand'";				  
				  	$results = mysqli_query($connection, $query) or die(mysql_error());
					$rowcount= mysqli_num_rows($results);
					if($rowcount >= 1){
				?>
  				<h1><?= $brand ?> Products <small>1 - <?= $rowcount ?> Products</small></h1>
  				<?php }else{?>
  					<h1>No Products</h1>
  				<?php } ?>
			</div>
			<div class="row">
			<?php				  
				  $x = 1;
				  while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){
				  	
				  	extract($row);
					  
				  	$productImgName = $imagename;
					$productName = $item_name;
					$productCode = $item_code;
					$productPrice = $price;					
				  	
				  	if($x <= 3){
				  		$x = $x + 1;
						
			?>
								<div class="col-sm-3">
									<div class="thumbnail">				
										<a href="itemdetails.php?item_code=<?=$productCode?>">
											<img src="<?= $productImgName ?>" alt="<?= $productName ?>" class="img-responsive">				
										</a>
										<div class="caption">
											<a href="itemdetails.php?item_code=<?=$productCode?>">
												<h4><?= $productName ?></h4>		
											</a>											
											<p>$<?= $productPrice ?></p>
										</div>
									</div>	
								</div>	
							
					<?php
					}
					else{
						?>
						<div class="col-sm-3">
									<div class="thumbnail">				
										<a href="itemdetails.php?item_code=<?=$productCode?>">
											<img src="<?= $productImgName ?>" alt="<?= $productName ?>" class="img-responsive">				
										</a>
										<div class="caption">
											<a href="itemdetails.php?item_code=<?=$productCode?>">
												<h4><?= $productName ?></h4>		
											</a>
											<p>$<?= $productPrice ?></p>
										</div>
									</div>	
								</div>	
						</div>
						<div class="row">
						<?php
						$x = 1;
					}
				}
			?>			
		</div>
	</body>
</html>