<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-secondary shadow">
					<div class="card-header bg-white border-0">
						<h3 class="mb-0">All Rooms</h3>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
							    <tr>
							      <th scope="col">Room Name</th>
							      <th scope="col">Room Type</th>
							    </tr>
							</thead>
							<tbody>
								<?php foreach($rooms->result() as $room) : ?>
								    <tr>
								      <td><?php echo $room->name; ?></td>
								      <td><?php echo $room->type_id; ?></td>
								    </tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>