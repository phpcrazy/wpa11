<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo Config::config('site_title'); ?></title>
	<?php echo HTML::style('css/bootstrap.css'); ?>
	<?php echo HTML::style('css/style.css'); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($members as $member) : ?>
						<tr>
							<td><?php echo $member['id']; ?></td>
							<td><?php echo $member['name']; ?></td>
							<td><?php echo $member['address']; ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>		
			</div>		
		</div>
	</div>
</body>
</html>