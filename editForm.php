
<?php include_once('connection.php'); ?>

<?php
	if(!isset($_GET['mode']) && $_GET['mode']!="edit" && !isset($_GET['user_id']) && empty($_GET['user_id'])){
		/*header('Location:index.php');*/
		header('Location:user_details.php');
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
	<form name="" action="allfunction.php" method="post">
		<table border="1">
	<?php 
			$sql = "SELECT *, count(*) as usercount FROM user where user_id='".$_GET['user_id']."'";
			$result = $conn->query($sql);
			?>
			<input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">
			<?php
			while($row = $result->fetch_assoc()){
				if($row['usercount']<=0){
					/*header('Location:index.php');*/
					header('Location:user.php');
					exit();
				}
				?>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="u_name" value="<?php echo $row['u_name']; ?>"></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="password" value="<?php echo $row['password']; ?>"></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>
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