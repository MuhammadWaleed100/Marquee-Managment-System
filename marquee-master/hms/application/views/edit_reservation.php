<div class="content-wrapper">
	<div class="page_container">
		<div class="box">
			<h3>Edit Resrvation</h3>
			<div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
				<div class="row">
					<div class="col-sm-3"></div>


					<form action="<?php echo base_url().'index.php/marquee/edit_reservation'.$cat_info[0]['Booking_id']?>" method="post" id="edit_reservation">
					<div class="form-group">
						<label>Select Event Category Name</label>
						      <?php
						      $connect = mysqli_connect('localhost','root','','arms');
						      $query=mysqli_query($connect,"select * from category");
						      echo "<select name='event_category'; id='event_category'; >";
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
						<input type="Date" name="Booking_date" id="booking_date" value="<?php echo $cat_info[0]['Booking_date']; ?>"><br>
						<label>Select Event Start Time</label>
						<input type="time" name="start_time" id="start_time" value="<?php echo $cat_info[0]['Start_Time']; ?>"><br>
						<label>Select Event End Time</label>
						<input type="time" name="end_time" id="end_time" value="<?php echo $cat_info[0]['End_Time']; ?>"><br>
						<label>Enter Expected Guests</label>
						<input type="number" name="guests" id="guests" value="<?php echo $cat_info[0]['Expected_Guest']; ?>"><br>
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Add</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
