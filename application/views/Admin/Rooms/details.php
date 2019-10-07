<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-stats mb-4 mb-xl-0">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Room Details</h3>
					</div>
					<div class="room-details">
						<div class="row" style="margin-bottom: 10px;">
							<div class="col-md-3">
								<b>Name:</b>
							</div>
							<div class="col-md-9">
								<?php echo $room['name']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<b>Description:</b>
							</div>
							<div class="col-md-9">
								<?php echo $room['description']; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<b>Size:</b>
							</div>
							<div class="col-md-9">
								<?php echo $room['size']; ?> squre feet
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<b>Capacity:</b>
							</div>
							<div class="col-md-9">
								<?php echo $room['adult']; ?> adults and <?php echo $room['child']; ?> childs
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<b>Bed Type:</b>
							</div>
							<div class="col-md-9">
								<?php foreach($bed->result() as $b) : ?>
									<?php echo ($room['bed_type_id'] == $b->id) ? $b->name : '' ?>
								<?php endforeach; ?>
							</div>
						</div>						
					</div>
				</div>
				<div class="single-room-links" style="display: inline-flex;">
					<?php $attr = array('style' => 'margin-right: 10px;'); echo form_open('admin/rooms', $attr); ?>
						<input type="submit" class="btn btn-primary btn-sm" value="Back">
					<?php echo form_close(); ?>
					<?php echo form_open('admin/rooms/edit', $attr); ?>
						<input type="hidden" name="hdnId" value="<?php echo $room['id']; ?>">
						<input type="submit" name="btnDelete" class="btn btn-warning btn-sm" value="Edit">
					<?php echo form_close(); ?>
					<?php echo form_open('admin/rooms/delete'); ?>
						<input type="hidden" name="hdnId" value="<?php echo $room['id']; ?>">
						<input type="submit" name="btnDelete" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure?');">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>