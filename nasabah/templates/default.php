<!doctype html>
<html class="fixed">
	<head>

		<!-- Head -->
		<?php require_once 'partials/_head.php'; ?>
		
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<?php require_once 'partials/_header.php'; ?>
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->

				<aside id="sidebar-left" class="sidebar-left">
				<?php require_once 'partials/_sidebarleft.php'; ?>
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<?php eval($content)?>
					<!-- end: page -->						
				</div>
				</section>
			</div>
				
			
		</section>

		<!-- Vendor -->
		<?php require_once 'partials/_scripts.php'; ?>
		
	</body>
</html>