<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Denorro's Webstore</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="allitemslist.php">All Products</a></li>
          <li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          		Brands <span class="caret"></span>
          	</a>
          	<ul class="dropdown-menu">
          		<li><a href="brands.php?brand=Apple">Apple</a></li>
          		<li><a href="brands.php?brand=Asus">Asus</a></li>
          		<li><a href="brands.php?brand=Dell">Dell</a></li>
          		<li><a href="brands.php?brand=HP">HP</a></li>
          		<li><a href="brands.php?brand=Lenovo">Lenovo</a></li>
          		<li><a href="brands.php?brand=Micromax">Micromax</a></li>
          		<li><a href="brands.php?brand=Microsoft">Microsoft</a></li>
          		<li><a href="brands.php?brand=Sony">Sony</a></li>
          		<li><a href="brands.php?brand=Toshiba">Toshiba</a></li>
          	</ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">   
        	<?php
        		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        			$name = $_SESSION['name'];
        	?>
    				<li><a href="#"><?= $name ?></a></li>
          			<li><a href="db/logout.php">Log Out</a></li>
          	<?php
				}else{
			?>
    				<li><a href="signin.php">Login</a></li>
          			<li><a href="signup.php">Sign up</a></li>
			<?php }	?>       
          <li>
          	<a href="cart.php">
          		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
			</a>
          </li> 
          <li>
          	<a href="#">
          		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</a>
          </li> 
          <li>
          	<a href="contact_us.php">
          		<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
			</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>