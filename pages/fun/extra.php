<p class="food-detail"><label>Booked Status: <?php echo $row['booking_status']; ?></label></p>
			
			<p class="food-detail"><label>Choose booking status:</label></p>
            <select name='booking_status' id='booking_status'>
            <option value="Accepted">Accepted</option>
            <option value="Denied">Denied</option>
           </select>
  
		 <form action="updatebooking.php" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <th> <input type="submit" name="save" class="btn btn-danger" value="Update"></th>
        </form>
		</tr><br>