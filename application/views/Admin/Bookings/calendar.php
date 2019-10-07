<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">Booking Calendar</h3>
					</div>
					<div class="col-md-12">
						<div class="calendar-wrapper">
							<div style="width: 20%; height:5px; float: left; margin-bottom: 10px; font-size: .8em;">
								Room Name
							</div>
							<?php for($i = 0; $i < sizeof($dates); $i++) : ?>
								<div style="border: 1px solid #DDD; font-size: .6em; width: calc(2.5% - 2px); float: left; margin-right: 2px;">
									<?php
										echo substr($dates[$i], 0, 2);
									?>
								</div>
							<?php endfor; ?>
							<br>
							<?php foreach($rooms->result() as $room) : ?>
							<div class="single-row">
								<div style="width: 20%; height:5px; float: left; margin-bottom: 10px; font-size: .8em;">
									<?php echo $room->name; ?>
								</div>
								<?php for($day = 0; $day < sizeof($dates); $day++) : ?>
									<div class="single-day" style="border: 1px solid #DDD; width: calc(2.5% - 2px); height:15px; float: left; margin-right: 2px; margin-bottom: 10px;">
									</div>
								<?php endfor; ?>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				
			</div>
		</div>
	</div>

	<!-- <div class="calendar-wrapper">
		<?php //for($i = 0; $i < sizeof($dates); $i++) : ?>
			<div style="border: 1px solid #DDD; font-size: .8em; width: calc(2.5% - 2px); float: left;">
				<?php
					//echo substr($dates[$i], 0, 2);
				?>
				<br>
				<?php
					//echo substr($dates[$i], 3, 3);
				?>
				<br>
				<?php
					//echo substr($dates[$i], 9, 2);
				?>
				<br>
				<?php
					//echo substr($dates[$i], 12, 3);
				?>
			</div>
		<?php //endfor; ?>
	</div> -->