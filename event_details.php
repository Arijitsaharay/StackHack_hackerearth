<?php include_once('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Crud Operation</title>
</head>
<style type="text/css">
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
	<!--<h3><u>Insert Form</u></h3>
	 <form name="" action="allfunction.php" method="post">
		<table border="1">
			<tr>
					<td>Username: </td>
					<td><input type="text" name="u_name"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="phone"></td>
				</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="registrationbn"></td>
			</tr>
		</table>
	</form>

	<hr> -->
	<h3><u>Event Data Lists </u></h3>
	<table border="1">
		<tr>
			<th>User Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Registration Type</th>
			<th>Event Type</th>
			<th>Number of Tickets</th>
			<th>Unique Id</th>
			<th>Seating Options</th>
			<th>Action</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM event_table";
			$result = $conn->query($sql);

			while($row = $result->fetch_assoc()){
				?>
				<tr>
					
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['r_type']; ?></td>
					<td><?php echo $row['event']; ?></td>
					<td><?php echo $row['ticket']; ?></td>
					<td><?php echo $row['unique_id']; ?></td>
					<td><?php echo $row['seat']; ?></td>
					
					<td><a href="editForm1.php?mode=edit&user_id=<?php echo $row['user_id']; ?>">Edit</a> | <a href="allfunction2.php?mode=delete&user_id=<?php echo $row['user_id']; ?>">Delete</a></td>
				</tr>
				<?php
			} 
		?>

	</table>


</body>
</html>





<!-- <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 -->

 