<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Add new room type</h3>
					</div>
					<div class="col-md-12">
						<?php echo form_open('admin/rooms/save'); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Name</label>
										<input type="text" name="txtName" class="form-control form-control-alternative" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-control-label">Rent</label>
										<input type="number" name="numRent" class="form-control form-control-alternative" placeholder="Rent per day">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label">Description</label>
										<textarea name="txtareaDesc" class="form-control form-control-alternative"cols="30" rows="10" placeholder="Description"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label class="form-control-label">Adults</label>
									<input type="number" name="numAdults" class="form-control form-control-alternative" placeholder="Capacity of adults">
								</div>
								<div class="col-md-3">
									<label class="form-control-label">Childs</label>
									<input type="number" name="numChilds" class="form-control form-control-alternative" placeholder="Capacity of childs">
								</div>
								<div class="col-md-3">
									<label class="form-control-label">Room Size (in square foot)</label>
									<input type="number" name="numSize" class="form-control form-control-alternative" placeholder="Room Size">
								</div>
								<div class="col-md-3">
									<label class="form-control-label">Bed Type</label>
									<select name="cmbBed" class="form-control form-control-alternative">
										<?php foreach($beds->result() as $bed) : ?>
											<option value="<?php echo $bed->id; ?>"><?php echo $bed->name; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group" style="margin-top: 10px;">
										<input type="submit" class="btn btn-primary" value="Save">
									</div>
								</div>
							</div>
			            <?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>