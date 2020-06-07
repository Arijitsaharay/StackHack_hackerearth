
<?php include_once('connection.php'); ?>

<?php
	if(!isset($_GET['mode']) && $_GET['mode']!="edit" && !isset($_GET['user_id']) && empty($_GET['user_id'])){
		/*header('Location:index.php');*/
		header('Location:event_details.php');
		exit();
	}
?>

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
	<h3><u>Update Form</u></h3>
	<form name="" action="allfunction2.php" method="post">
		<table border="1">
	<?php 
			$sql = "SELECT *, count(*) as usercount FROM event_table where user_id='".$_GET['user_id']."'";
			$result = $conn->query($sql);
			?>
			<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
			<?php
			while($row = $result->fetch_assoc()){
				if($row['usercount']<=0){
					/*header('Location:index.php');*/
					header('Location:event_details.php');
					exit();
				}
				?>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>Phone Number: </td>
					<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
				</tr>
				<tr>
					<td>Registration Type: </td>
					<td><input type="text" name="r_type" value="<?php echo $row['r_type']; ?>"></td>
				</tr>
				<tr>
					<td>Event type: </td>
					<td><input type="text" name="event" value="<?php echo $row['event']; ?>"></td>
				</tr>
				<tr>
					<td>No. of tickets: </td>
					<td><input type="text" name="ticket" value="<?php echo $row['ticket']; ?>"></td>
				</tr>
				<tr>
					<td>Unique Id: </td>
					<td><input type="text" name="unique_id" value="<?php echo $row['unique_id']; ?>" readonly></td>
				</tr>
				<tr>
					<td>Seating Options: </td>
					<td><input type="text" name="seat" value="<?php echo $row['seat']; ?>"></td>
				</tr>
				<?php
			} 
		?>
			<tr>
				<td></td>
				<td><input type="submit" name="updatebn"></td>
			</tr>
		</table>
	</form>

</body>
</html>