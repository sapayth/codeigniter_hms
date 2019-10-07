<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Book Now</h3>
					</div>
					<div class="card-body">
					<?php // echo validation_errors(); ?>
						<div class="row">
			              <?php echo form_open('admin/bookings/book_room'); ?>
			                <div class="pl-lg-4">
			                  <div class="row align-items-center">
			                    <div class="col-md-6">
			                      <div class="form-group">
			                        <label class="form-control-label">Check In</label>
					                <div class="form-group">
							            <div class="input-group input-group-alternative">
							                <div class="input-group-prepend">
							                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							                </div>
							                <input data-provide="datepicker" class="form-control datepicker" placeholder="Check In Date" type="text" name="txtCheckIn" value="<?php echo set_value('txtCheckIn'); ?>">
							            </div>
							            <?php echo form_error('txtCheckIn', '<small class="text-danger">', '</small>'); ?>
							        </div>
			                      </div>
			                    </div>
			                    <div class="col-md-6">
			                      <div class="form-group">
			                        <label class="form-control-label">Check Out</label>
					                <div class="form-group">
							            <div class="input-group input-group-alternative">
							                <div class="input-group-prepend">
							                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							                </div>
							                <input data-provide="datepicker" class="form-control datepicker" placeholder="Checkout date" type="text" name="txtCheckOut" value="<?php echo set_value('txtCheckOut'); ?>" >
							            </div>
							            <?php echo form_error('txtCheckOut', '<small class="text-danger">', '</small>'); ?>
							        </div>
			                      </div>
			                    </div>
			                    <div class="col-md-6">
			                      <div class="form-group">
			                        <label class="form-control-label">Accomodation Type</label>
			                        <select name="cmbRoom" class="form-control">
			                        	<?php foreach($rooms->result() as $room) : ?>
											<option value="<?php echo $room->id; ?>" <?php echo set_select('cmbRoom',  $room->id); ?>><?php echo $room->name; ?></option>
			                        	<?php endforeach; ?>
			                        </select>
			                      </div>
			                    </div>
			                    <div class="col-md-3">
			                      <div class="form-group">
			                        <label class="form-control-label">Adults</label>
			                        <select name="cmbAdults" class="form-control">
			                        	<option value="1">1</option>
			                        	<option value="2">2</option>
			                        	<option value="3">3</option>
			                        	<option value="4">4</option>
			                        	<option value="5">5</option>
			                        	<option value="6">6</option>
			                        	<option value="7">7</option>
			                        	<option value="8">8</option>
			                        </select>
			                      </div>
			                    </div>
			                    <div class="col-md-3">
			                      <div class="form-group">
			                      	<label class="form-control-label">Children</label>
			                        <select name="cmbChilds" class="form-control">
			                        	<option value="0">0</option>
			                        	<option value="1">1</option>
			                        	<option value="2">2</option>
			                        	<option value="3">3</option>
			                        	<option value="4">4</option>
			                        	<option value="5">5</option>
			                        	<option value="6">6</option>
			                        	<option value="7">7</option>
			                        	<option value="8">8</option>
			                        </select>
			                      </div>
			                    </div>
			                    <div class="col-md-12">
			                    	<input type="submit" class="btn btn-primary" value="Search">
			                    </div>
			                  </div>
			                </div>                
			              <?php echo form_close(); ?>
			            </div>
			            <div class="result">
			            	<?php if(isset($result_rs)) : ?>
			            		<table class="table table-hover table-bordered">
									  <thead>
									    <tr>
									      <th scope="col">Room No.</th>
									      <th scope="col">Rent</th>
									      <th scope="col">Book</th>
									    </tr>
									  </thead>
									  <tbody>
						            	<?php foreach($result_rs->result() as $r) : ?>
											<tr>
												<th><?php echo $r->name; ?></th>
												<td><?php echo $r->id; ?></td>
												<td>Otto</td>
											</tr>
						            	<?php endforeach; ?>
									  </tbody>
									</table>
				            <?php endif; ?>
			            </div>
		            </div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script>
		( function($) {
			$(document).ready(function() {
				$('.datepicker').datepicker({
					startDate: '0',
					autoclose: true
				});
			});
		}) ( jQuery );	
	</script>