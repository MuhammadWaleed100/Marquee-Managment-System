<div class="content-wrapper">
	<div class="page_container">
		<div class="box">

			<h3> Event Reservation (<?php echo sizeof($all_events); ?>)<a href="javascript:;" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">Add Event Reservation</a>
			</h3>
			<div style="padding-top:50px; padding-right:10px; padding-left:10px;">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover example">
						<thead>
							<tr>
								<th>#</th>
								<th>Event Type</th>
								<th>Package</th>
								<th>Hall Name</th>
								<th>Booking Date</th>
								<th>Event_start_Time</th>
								<th>Event_end_Time</th>
								<th>Expected Guests</th>

							</tr>
						</thead>
						<tbody>
							<?php 
							$i=1;
							foreach($all_events as $cat){
							
							
							?>
							<tr class="odd gradeX">
								<td><?php echo $i; ?></td>
								<td><?php $cate=$cat['event_caterogy'];$connect = mysqli_connect('localhost','root','','arms'); $query=mysqli_query($connect,"select * from category WHERE id='$cate' "); while ($row= mysqli_fetch_array($query)){$name=$row['name'];} echo $name;?></td>
								<td><?php $cate=$cat['package_id']; $connect = mysqli_connect('localhost','root','','arms'); $query=mysqli_query($connect,"select * from package WHERE Package_id='$cate' "); while ($row= mysqli_fetch_array($query)){$name=$row['Package_Name'];} echo $name;?></td>
								<td><?php $cate=$cat['Hall_id']; $connect = mysqli_connect('localhost','root','','arms'); $query=mysqli_query($connect,"select * from hall WHERE Hall_id='$cate' "); while ($row= mysqli_fetch_array($query)){$name=$row['Hall_Name'];} echo $name;?></td>
								<td><?php $cate=$cat['Booking_date']; echo $cate; ?></td>
								<td><?php $cate=$cat['Start_Time']; echo $cate; ?></td>
								<td><?php $cate=$cat['End_Time']; echo $cate; ?></td>
								<td><?php $cate=$cat['Expected_Guest']; echo $cate; ?></td>
								<td><a href="<?php echo base_url().'index.php/marquee/delete_reservation/'.$cat['Booking_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									<a href="<?php echo base_url().'index.php/marquee/edit_reservation/'.$cat['Booking_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> </a></td>
							</tr>
<?php  $i++;}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add New Reservation</h4>
			</div>
			<div class="modal-body">
				<form action=" <?php base_url().'index.php/marquee/reservation'?>" method="post" id="add_reservation">
					<div class="form-group">
						<label>Select Event Category Name</label>
						      <?php
						      $connect = mysqli_connect('localhost','root','','arms');
						      $query=mysqli_query($connect,"select * from category");
						      echo "<select name='event_category'; id='event_category';>";
						       while ($row= mysqli_fetch_array($query))
						       	{
						       		$name=$row['name'];
						       		echo "<option value='$name'>$name</option>";
						       		

						       	}
						       	echo "</select>";
						      ?>
						<br>
						<label>Select Package Name</label>
						      <?php
						      $connect = mysqli_connect('localhost','root','','arms');
						      $query=mysqli_query($connect,"select * from package");
						      echo "<select name='package'; id='package';>";
						       while ($row= mysqli_fetch_array($query))
						       	{
						       		$name=$row['Package_Name'];
						       		echo "<option value='$name'>$name</option>";
						       		

						       	}
						       	echo "</select>";
						      ?>
						<br>
						<label>Select Hall Name</label>
						      <?php
						      $connect = mysqli_connect('localhost','root','','arms');
						      $query=mysqli_query($connect,"select * from hall");
						      echo "<select name='hall'; id='hall';>";
						       while ($row= mysqli_fetch_array($query))
						       	{
						       		$name=$row['Hall_Name'];
						       		echo "<option value='$name'>$name</option>";
						       		

						       	}
						       	echo "</select>";
						      ?>
						<br>
						<label>Select Booking Date</label>
						<input type="Date" name="booking_date" id="booking_date"><br>
						<label>Select Event Start Time</label>
						<input type="time" name="start_time" id="start_time"><br>
						<label>Select Event End Time</label>
						<input type="time" name="end_time" id="end_time"><br>
						<label>Enter Expected Guests</label>
						<input type="number" name="guests" id="guests"><br>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Add</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
