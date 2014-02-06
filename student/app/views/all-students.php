<?php get_layout('layout/header'); ?>
	<div id="content" class="row">
		<div class="span12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Class Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach($students as $student) { ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $student['name']; ?></td>
							<td><?php echo $student['address']; ?></td>

							<td><?php
								if(isset($student['class'])) {
									echo $student['class'];
								} else {
									echo $student['class_name'];
								}
								?>
							</td>
							<td>
							<?php if(isset($student['_id'])) { ?>
								<a href="<?php echo base_url() . '/mongo/detail/' . $student[
							'_id']; ?>">Detail</a>
							<?php } else { ?>
								<a href="<?php echo base_url() . '/detail/' . $student[
							'id']; ?>">Detail</a>
							<?php } ?>
							
							</td>
						</tr>	

					<?php 
						$i++; 
					} 
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php get_layout('layout/footer'); ?>