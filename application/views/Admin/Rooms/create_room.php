<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Add new room</h3>
					</div>
					<div class="col-md-12">
						<?php echo form_open('admin/rooms/save_room'); ?>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label">Start</label>
										<input type="number" required name="txtStart" class="form-control form-control-alternative" placeholder="Start From">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label">End</label>
										<input type="number" required name="txtEnd" class="form-control form-control-alternative" placeholder="End To">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label">Room Type</label>
										<select name="cmbRoomType" class="form-control form-control-alternative">
											<?php foreach($types->result() as $type) : ?>
												<option value="<?php echo $type->id; ?>"><?php echo $type->name; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Description (if needed)</label>
										<textarea name="txtareaDesc" class="form-control form-control-alternative" cols="30" rows="10"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Save">
							</div>
			            <?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>