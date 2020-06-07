<?php include_once('connection.php'); ?>
<!-- Unique id -->
<?php 
$unique_id=uniqid("event");
?>
<!-- USER -->
<?php
session_start();

if(isset($_SESSION['uid'])){
  include_once('dbclass.php');
  $db=new db;

  $res=$db->getUserData();
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
}
else{
  header("location:index.php");
  exit;
}
?>
<?php
$user_id=$_SESSION['uid'];

?>

   <!--  <table align="center" border="2">
    <tr>
      <th colspan=2>User Details</th>
    </tr>
    <tr>
      <td>User Id:</td>
      <td><?php echo $user_id;?></td>
    </tr>
    <tr>
      <td>Name:</td>
      <td><?php echo $row['name'];?></td>
    </tr>
    <tr>
      <td>Phone:</td>
      <td><?php echo $row['phone'];?></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><?php echo $row['email'];?></td>
    </tr>
  </table> -->





<!-- <?php
$id=$_SESSION['uid'];
$name=$row['name'];
$phone=$row['phone'];
$email=$row['email'];

?> -->

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
* {
  box-sizing: border-box;
  font-size: 20px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=phone], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 0px;
  background-color: #f2f2f2;
  padding: 50px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container" >
  <form name="" action="form2.php" method="post">
  <div class="row">
    <center><h1>Cultural Event</h1></center><br><br>
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Enter full name">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="text">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Enter your email">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phone">Phone Number</label>
    </div>
    <div class="col-75">
        <select name="phone">
        <option selected hidden value="">Country Code</option>
        <option value="+91">+91</option>
        <option value="+99">+99</option>
        <option value="+88">+88</option>
        <option value="+78">+78</option>
      </select>
      <input type="text" id="phone" name="phone" placeholder="Enter phone number">
    </div>
  </div>
  

  <div class="row">
    <div class="col-25">
      <label for="r_type">Registration Type</label>
    </div>
    <div class="col-75">
      <select id="r_type" name="r_type">
        <option value="self">Self</option>
        <option value="group">Group</option>
        <option value="corporate">Corporate</option>
        <option value="others">Others</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="event">Event Type</label>
    </div>
    <div class="col-75">
      <select id="event" name="event">
        <option value="music">Music Concert</option>
        <option value="dance">Dance Concert</option>
        <option value="art">Art Exibition</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="ticket">Number of Tickets<center> (Rs.250/ticket)</center></label>
    </div>
    <div class="col-75">
      <select id="ticket" name="ticket">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="unique_id">Unique Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="unique_id" name="unique_id" value="<?php echo $unique_id ?>" readonly="">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="seat">Seating Options</label>
    </div>
    <div class="col-75">
      <select id="seat" name="seat">
        <option value="front">Front</option>
        <option value="middle">Middle</option>
        <option value="balcony">Balcony</option>
        <option value="rear">Rear</option>
      </select>
    </div>
  </div>
  <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id ?>" readonly="">
   <!-- IMAGE -->
    <div class="row">
    <div class="col-25">
      <label for="text"><br><br><br><br> Upload Id Card</label>
    </div>
    <div class="col-75">
      
    
   <div id="container"> 
  <form method="post" action="upload_file.php" enctype="multipart/form-data">
  <input type="file" id="image" value="event" name="image" />
  <br>

  <div id="view-image">
   <h3 id="header">Preview Image</h3>
   
   <div id="preview-image">
   Image will be show right here
   </div>
   
  </div>

 </div>

 <script src="jquery-3.5.1.min.js"></script>
 <script>
   $(document).ready(function(){
   $('#image').change(function(){ 
       var data = new FormData() ; 
       data.append('file', $( '#image' )[0].files[0]) ; 
       $.ajax({
       url: 'upload_file.php',
       type: 'POST',
       data: data,
       processData: false,
       contentType: false,
        beforeSend: function(){
         $('#preview-image').html('Loading...');
        },
        success: function(data){ 
         // alert(data);            
                   $('#preview-image').html('<img  src="'+data+'" style="width:100%"/>');  
       
        }
       });
      return false;
   });
  });

 </script>
 </div>
  </div>
  

  <!-- <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div> -->
  <div class="row">
    <input type="submit" name="registrationbn" value="Get Tickets">
  </div>
  </form>


</body>
</html>

<!-- IMAGE DATA -->

<!-- <!doctype html>
<html> -->
<style>

 *{margin:0px; padding:0px;}
 #container{width:50%; padding:2%; box-shadow:0px 0px 10px #; margin:10px auto;}
 #image1{width:96% ; padding:2%; border:1px dashed green;}
 #header{background:#405570; color:white;text-align:center; padding:2%;}
 #view-image{border-radius:5px; overflow:hidden;align-content: center;}
 #preview-image{padding:1%; border:1px solid #efefef; width: 490px; height:100%;}
</style>

<!-- <body>

 <div id="container"> 
  <form method="post" action="upload_file.php" enctype="multipart/form-data">
  <input type="file" id="image" />
  </form>
  <br>

  <div id="view-image">
   <h3 id="header">Preview Image</h3>
   
   <div id="preview-image">
   image will show right here
   </div>
   
  </div>

 </div> -->

 <!--script src="jquery-3.5.1.min.js"></script>
 <script>
   $(document).ready(function(){
   $('#image').change(function(){ 
       var data = new FormData() ; 
       data.append('file', $( '#image' )[0].files[0]) ; 
       $.ajax({
       url: 'upload_file.php',
       type: 'POST',
       data: data,
       processData: false,
       contentType: false,
        beforeSend: function(){
         $('#preview-image').html('Loading...');
        },
        success: function(data){ 
         // alert(data);            
                   $('#preview-image').html('<img  src="'+data+'" style="width:100%"/>');  
       
        }
       });
      return false;
   });
  });

 </script-->
      
<!-- </body>
</html> -->

<!-- <img src="2.png">
 --><!-- CONNECTION -->