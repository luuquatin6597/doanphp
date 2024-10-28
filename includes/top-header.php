<?php
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container-fluid">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<?php if (strlen($_SESSION['login']) == 0) { ?>
						<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
					<?php } else { ?>
						<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
						<li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
					<?php } ?>
				</ul>
			</div>

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="track-orders.php" class="dropdown-toggle"><span class="key">Track Order</b></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>