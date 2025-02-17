<?php 
	$page = "dasboard.php";
	$p = "dasboard";

	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		switch($p)
		{
			case "slidshow":
				$page = "slidshow.php";
				break;
			case "products":
				$page = "products.php";
				break;
			case "category":
				$page = "category.php";
				break;
			case "brand":
				$page = "brand.php";
				break;
			case "page":
				$page = "page.php";
				break;
			case "user":
				$page = "user.php";
				break;
			case "settings":
				$page = "setting.php";
				break;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<?php include "includes/head.php" ?>

<body>
	<div class="wrapper">

		<!-- Navbar -->
		 <?php include "includes/nav.php" ?>

		<div class="main">
			
			<!-- Header -->
			 <?php include "includes/header.php" ?>

			 <!-- Dasboard -->
			<?php include $page ?>

			<!-- Footer -->
			 <?php include "includes/footer.php" ?>
		</div>
	</div>

	<?php include "includes/foot.php" ?>

</body>

</html>