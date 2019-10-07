<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Show Room Types</h3>
					</div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Name</th>
									<th scope="col">Description</th>
									<th scope="col">Update/Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($rooms->result() as $room) : ?>
									<tr>
										<th><?php echo $room->name; ?></th>
										<td><?php echo substr($room->description, 0, 20) . '...'; ?></td>
										<td>
											<?php
												$attr = array('style' => 'float:left; margin-right:10px;');
												echo form_open('admin/rooms/details', $attr);
											?>
												<input type="hidden" name="hdnId" value="<?php echo $room->id; ?>">
												<input type="submit" name="btnUpdate" class="btn btn-primary btn-sm" value="Details">
											<?php echo form_close(); ?>
											<?php
												$attr = array('style' => 'float:left; margin-right:10px;');
												echo form_open('admin/rooms/edit', $attr);
											?>
												<input type="hidden" name="hdnId" value="<?php echo $room->id; ?>">
												<input type="submit" name="btnUpdate" class="btn btn-primary btn-sm" value="Edit">
											<?php echo form_close(); ?>
											<?php echo form_open('admin/rooms/delete'); ?>
												<input type="hidden" name="hdnId" value="<?php echo $room->id; ?>">
												<input type="submit" name="btnDelete" class="btn btn-warning btn-sm" value="Delete" onclick="return confirm('Are you sure?');">
											<?php echo form_close(); ?>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>