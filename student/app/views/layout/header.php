  <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo site_title(); ?></title>
	<?php echo HTML::style('css/bootstrap.css'); ?>
	<?php echo HTML::style('css/style.css'); ?>
</head>
<body>
	<div class="container">
		<div id="header" class="row">
			<div class="span5">
  				<h3><?php echo site_title(); ?></h3>
  			</div>
  			<div id="search_box" class="span7">
  				<form id="search-form" 
  				class="form-search" method="get" 
  				action="<?php echo base_url(); ?>/index.php">
  					<input type="text" class="input-medium search-query" name="q">
  					<button type="submit" class="btn">Search</button>
  				</form>
  			</div>
		</div> <!-- end of header -->
		<div id="menu" class="row">
			<div class="span12">
				<div class="navbar">
					<div class="navbar-inner">
						<a class="brand" href="#">SIS</a>
						<ul class="nav">
							<li><a href="<?php echo base_url(); ?>/mongo">Home</a></li>
							<li><a href="<?php echo base_url(); ?>/mongo/all-students">All Students</a></li>
							<li><a href="<?php echo base_url(); ?>/mongo/php-foundation">PHP Foundation</a></li>
							<li><a href="<?php echo base_url(); ?>/mongo/php-advanced">PHP Advanced</a></li>
							<li><a href="<?php echo base_url(); ?>/mongo/web-professional-advanced">WPA</a></li>

						</ul>
					</div>
				</div>
			</div>
	</div> <!-- end of menu -->	