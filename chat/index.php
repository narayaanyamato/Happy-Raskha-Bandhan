


<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/th (1).jfif">
	<meta charset="utf-8">
      <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
	<title> Friends together....</title>
	 <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
     
       
        <style type="text/css">
        	body
        	{
        		background: url('img/restaurant-bookings.jpg');
        		background-size: 100% 100%;
        		background-repeat: no-repeat;
        		background-attachment: fixed;
        	}
        </style>
</head>
<body onload= "ajax(); ">


	<div class="container" style="margin-top: 100px;" >
		<div class="row">
			<div class="col-md-12">
				<div class="chat-box">
					<h3 class="text-center">Let's Chat(Made With Love...)</h3>
             
					   <div id="chat">
					   	
					   </div>
                   
					<form class="form" method="post"  style="margin-top: 40px;">
                 
                 <input type="text" name="name" placeholder="From/Name of user..">

                 <input type="text" name="msg" placeholder="Typle some msg...">
                 
                 <center>
                 	<input type="submit" name="sub" value="Send">
                 	<input type="submit" name="clear" onclick="error();" value="Clear Chat">
                 </center>
					
				</form>

       
				</div>
			
    
  
				
			</div>
			
		</div>
		
	</div>

 <script src="script.js"></script>
</body>
</html>


<?php


if (isset($_POST['sub']))
 {
      
   $conn=mysqli_connect("localhost","root","","chat_info");
if(!$conn)
  {
  die("connection failed.." .mysqli_connect_error());
  }
  
   $name=$_POST['name'];
   $msg=$_POST['msg'];

    date_default_timezone_set('Asia/Kolkata');
    $ts=date('y-m-d h:ia');

    $sql="INSERT INTO `chat`(`id`, `uname`, `msg`, `ts`) VALUES (null,'$name','$msg','$ts')";

    if (mysqli_query($conn,$sql))
     {
    	
    	 echo "<audio src = 'noti.mp3' hidden = 'true' autoplay = 'true' /></audio>";
    }

    else
    {
    	echo "<script>alert('Message not sent..');</script>";
    }


                     
   }   







?>


