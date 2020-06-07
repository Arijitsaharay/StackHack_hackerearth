<!DOCTYPE>
<html>
<br><br><br>
<head>
	<title>My Tickets</title>
	
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="stylesheet" type="text/css" href="css/main2.css">

    <!-- Title Page-->
    <title>Register Forms</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<style type="text/css">
	background-image: url('img/img-01.png');
</style>

<body>
<?php
echo '<body style="background-color:#901688; font-size:20px;">;';
session_start();
	if(isset($_SESSION['uid'])){
		include_once('dbclass.php');
		$db=new db;

		$res=$db->getOrder();
		
		echo "<h1 align='center'>My Tickets</h1><br/>";
        echo "<h2 align='center'>Last updated ticket and other ticket data will be shown below</h2><br/>";
		echo "<table align='center' border=1>";
		echo "<center><tr><th>Name</th><th>Email</th><th>Phone</th><th>Registration Type</th><th>Event Type</th><th>Number of Tickets</th><th>Unique Id</th><th>Seating Options</th></tr></center>";

		while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){

		echo "<tr>";
  		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['name']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['email']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['phone']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['r_type']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['event']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['ticket']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['unique_id']."</td>";
		echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['seat']."</td>";
		/*echo "<td>".$row['image']."</td>"*/
		$name = $row['name'];
		$email=$row['email'];
		$phone =$row['phone'];
		$r_type =$row['r_type'];
		$event =$row['event'];
		$ticket =$row['ticket'];
		$unique_id =$row['unique_id'];
		$seat =$row['seat'];
		$image =$row['image'];
		}
		echo "</table>";
		?>
       
		<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ticket Booking Info</h2>
                    <form method="POST">
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Name</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $name ?>"readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Email</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $email ?>"readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Phone</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $phone ?>"readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Registration Type</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $r_type ?>"readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Event Name</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $event ?>"readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Number Of Tickets</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $ticket ?>"readonly>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-group">
                        	<label class="input--style-2">Unique Ticket Id</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $unique_id ?>"readonly>
                                </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Seating Options</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $seat ?>"readonly>
                                </div>
                            </div>
                            <!-- <div class="col-2">
                                <div class="input-group">
                        	<label class="input--style-2">Id Card Image</label>
                            <input class="input--style-2" type="text" placeholder="Name" name="name"value="<?php echo $image ?>"readonly>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
<?php
	}
	else{
		header("location:index.php");
		exit;
	}	
?>	

<!-- <input type="text"  value="<?php echo $name ?>"readonly> -->

</body>
</html>