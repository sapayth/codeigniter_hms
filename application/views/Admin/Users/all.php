<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Show Users</h3>
					</div>
					<div class="col-md-12">
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Name</th>
									<th scope="col">Email</th>
									<th scope="col">Role</th>
									<th scope="col">Update/Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($users->result() as $user) : ?>
									<tr>
										<th><?php echo $user->name; ?></th>
										<td><?php echo $user->email; ?></td>
										<td><?php echo $user->role; ?></td>
										<td>
											<!-- style="float:left; margin-right:10px;" -->
											<?php
												$attr = array('style' => 'float:left; margin-right:10px;');
												echo form_open('admin/users/edit', $attr);
											?>
												<input type="hidden" name="hdnId" value="<?php echo $user->id; ?>">
												<input type="submit" name="btnUpdate" class="btn btn-primary btn-sm" value="Update">
											<?php echo form_close(); ?>
											<?php echo form_open('admin/users/delete'); ?>
												<input type="hidden" name="hdnId" value="<?php echo $user->id; ?>">
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