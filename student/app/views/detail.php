<?php get_layout('layout/header'); ?>
<div id="content" class="row">
	<div class="span12">
		<?php if($students != null) : ?>
			<table class="table table-striped">
				<tr>
					<td>ID#</td>
					<td><?php echo $students['id']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $students['name']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $students['address']; ?></td>
				</tr>
				<tr>
					<td>Class</td>
					<td><?php echo $students['class_name']; ?></td>
				</tr>
				<tr>
					<td>Interest - Script</td>
					<td>
						<?php foreach($scripts as $script) : ?>
							<?php echo $script['name'] . ', '; ?>
						<?php endforeach; ?>
					</td>
				</tr>
				<tr>
					<td>Interest - Language</td>
					<td>
						<?php foreach($languages as $language) : ?>
							<?php echo $language['name'] . ', '; ?>
						<?php endforeach; ?>
					</td>
				</tr>
			</table>
			<h3>Experience</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name</th>
						<th>From</th>
						<th>To</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($experiences as $experience) : ?>
						<?php $i = 1; ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $experience['name']; ?></td>
							<td><?php echo $experience['from']; ?></td>
							<td><?php echo $experience['to']; ?></td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>

			</table>
		<?php else : ?>
			<h1>Not found</h1>
		<?php endif; ?>
	</div>
</div> <!-- end of content -->
<?php get_layout('layout/footer'); ?>