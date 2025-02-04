<?php require('layout/header.php'); ?>
<?php require('layout/left-sidebar-long.php'); ?>
<?php require('layout/topnav.php'); ?>
<?php require('layout/left-sidebar-short.php'); ?>
						
<?php
if (isset($_SESSION['msg'])) {
	echo '<div class="section white-text" style="background: #f58627;">'.$_SESSION['msg'].'</div>';
	unset($_SESSION['msg']);
}
?>

<div class="section white-text center" style="background: #f58627; margin-top: 20px;">

	<h4>Dashboard</h4>
	
	<div class="row" style="padding: 50px;">
		<div class="col s12">

			<a class="dash-btn" href="food-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #ff7600, #f58627);">Foods</div></a>
			<a class="dash-btn" href="category-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #ff7600, #f58627);">Categories</div></a>
			<a class="dash-btn" href="order-list.php"><div class="sec white white-text" style="margin: 15px; padding: 40px;border: 2px solid white; border-radius: 20px; font-size: 20px; background: linear-gradient(to right, #ff7600, #f58627);">Orders</div></a>

		</div>

	</div>

</div>

<?php require('layout/about-modal.php'); ?>
<?php require('layout/footer.php'); ?>