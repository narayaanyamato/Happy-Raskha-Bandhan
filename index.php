


<!----made with love--->


<?php 
session_start();


if(!isset($_SESSION['name']))
{
   echo '<script>window.open("intro.php")</script>';


}

else
{
 
 
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"> 
	<link rel="shortcut icon" href="https://media.tenor.com/images/cdb2774f7588f51c85a6e533776377da/tenor.gif" type="image/x-icon">  
	<title>Happy RAskabandan...Rakhi Festiva</title>
	<meta  content="">
	<META NAME="Description" CONTENT="Raksha Bandhan - Rakhi or raksha bandhan is a holy festival of india. Rakhi is a festival of faith and love between brother and sister, this page provides you the detailed information about rakhi, raksha bandhan and rakhi festival.">
    <META NAME="Keywords" CONTENT="raksha bandhan, rakhi, rakhi festival">
    <link rel="stylesheet" type="text/css" href="css/min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/type.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
   <style type="text/css">
   	    .typewriter {
    font-family: Courier, monospace;
  display: inline-block;
  border: 2px solid gold;
  width: 100%;
  height:auto;
text-align: center;
  border-radius: 7px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3)
}

.typewriter h1
{
	text-align: center;
	color: yellow;
	border-bottom: 1px dotted white;
}

@media screen and (min-width:770px)
{

	.typewriter-text
	{
		font-size: 30px;
		line-height:35px;
	}


}

.typewriter-text {
    display: inline-block;
    overflow: hidden;
    letter-spacing: 2px;
  animation: typing 20s steps(20, end), blink .7s step-end ;
  animation-iteration-count: infinite;
  text-align:center;
     color: white;
   text-transform: capitalize;
    white-space: nowrap;
    font-size: 15px;
    font-weight: 400;
    border-right: 1px solid orange;
    box-sizing: border-box;
}

@keyframes typing {
    0% { 
        width: 0% 
    }
    25% { 
        width: 50% 
    }

    50%{
      width: 100%;
    }

    75%{
      width:50% ;
    }

    100%{
      width: 0%;
    }
}

@keyframes blink {
    from, to { 
        border-color: transparent 
    }
    50% { 
        border-color: orange; 
    }
}
   </style>
</head>
<body>


	<!---side bar--->
	<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close&times;</button>
  <a href="../chat/index.php" class="w3-bar-item w3-button" >Chat</a>
  <a href="https://api.whatsapp.com/send?phone=7847869140 " class="w3-bar-item w3-button">Share on Whatsapp<img src="http://cdn.breathecast.com/data/images/full/27286/whatsapp-logo.png" width="40px" height="40px"></a>
  <a href="#" class="w3-bar-item w3-button" data-toggle="modal" data-target="#myModal">Contact</a>
   </div>
   <div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
  </div>
</div>

	<div class="top">

		<h1><div class="heart"><?php echo $_SESSION['name']; ?>..</div>Wishes You and Your Family A very Happy Raksha Bandhan.</h1>
		
	</div>

	<div class="container-fluid">
		<div class="row" style="background: url('https://i.pinimg.com/originals/d0/a9/34/d0a934971223fccf672834e9c2d90756.jpg'); background-size: 100% 100%;">
			<div class="col-md-12 header" >
				<img src="http://4.bp.blogspot.com/-5BTHq8qYbIw/UhMJ_FGROKI/AAAAAAAAEtk/r8vBwIesSug/s1600/hindi-raksha-bandhan.gif" width="100%" height="auto"  alt="Raksha Bandhan">
			</div>
			
		</div>
		
	</div>

	<div class="container-fluid bg_hack">
		<div class="row" style="background:rgb(0, 0, 0,0.5);">
			<h3>Actual meaning of RAKHI..</h3>
			<div class="col-md-12">
				<div class="img_tag">
					<!--<img src="http://1.bp.blogspot.com/-jreI8K5za2U/Ug86xb9ZPmI/AAAAAAAAAnM/jt7f3KK1N7E/s1600/To_My_Younger_Brother-Rakhi-542_big.gif" alt="Happy Raksha Bandhan">-->

					   <h2><span>R-</span><small>Re-affirming love and affection</small></h2>
					   <h2><span>A-</span><small>A-prayer for long life</small></h2>
					   <h2><span>K-</span><small>Keeping memories alive</small></h2>
					   <h2><span>H-</span> <small>Happiness and Laughter</small></h2>
					   <h2><span>I-</span><small>Innumerable shared stories</small></h2>
					
				</div>


			</div>

			
		</div>
		
	</div>

  <audio controls autoplay loop hidden=""> 
        <source src="GFG.ogg" type="audio/ogg"> 
        <source src="audio/WhatsApp Audio 2021-08-15 at 3.42.21 PM.mpeg" type="audio/mpeg"> 
    </audio> 

	<div class="container-fluid">
		<div class="row quote">
			<div class="col-md-6">
				-<img src="http://1.bp.blogspot.com/-jreI8K5za2U/Ug86xb9ZPmI/AAAAAAAAAnM/jt7f3KK1N7E/s1600/To_My_Younger_Brother-Rakhi-542_big.gif" alt="Happy Raksha Bandhan">
			</div>

			<div class="col-md-6">
				
				<h4 class="Anime">`As we grew up, my brothers acted like they didn't care, but I always knew they looked out for me and were there!...`</h4>
			</div>
			
		</div>
		
	</div>

	<!---auto type-->
  
   <div class="typewriter">
   	<h1>Happy RAskabandan...Rakhi Festiva</h1>
    <div class="typewriter-text">May your Wishes Come true <br> and May each of Your days<br> be filed with joy and Smiles <br>too!..
    	<br>
    <img src="https://www.starpng.com/public/uploads/preview/raksha-bandhan-rakhi-png-21564745484rc1o6gs7v4.png" width="200px" height="100px">
    </div>
</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
		<img src="https://1.bp.blogspot.com/-y1iDEgxUg0I/XyYL4N5w6RI/AAAAAAAAAG0/X1oG4MrBlC0OMpSxypDgGTkV3P1gwlungCLcBGAsYHQ/s640/AgitatedEuphoricDuiker-small.gif" width="100%" height="50%">
	</div>

			
		</div>
		
	</div>

	

<!-- Contact.. -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Any Query..</h4>
      </div>
      <div class="modal-body">
         <form class="mt-3" name="contact" method="post" onsubmit="return(check());">
     <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputNme" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone">Phone</label>
    <input type="text" class="form-control"  id="exampleInputPhone" maxlength="10" name="phone" placeholder="Phone">
  </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Subject</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="subject" rows="3" placeholder="Type some Message.."></textarea>
  </div>


  <button type="submit" name="sub" class="btn btn-primary mb-3">Send</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>


<!---chat-->

<a href="chat/index.php"><img class="chat" title="For Live Chat... " src="https://i.pinimg.com/originals/52/84/9c/52849c75541790285574ae7a581bf60f.png" width="60px" height="60px"></a>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

<div class=" footer">
	<h3>CopyRight  Alllright Reserverd..  || <a href="https://drive.google.com/drive/u/0/my-drive" title="Pic of Desiner"> --++'_'++--</a></h3>
	
</div>
			
		</div>
		
	</div>
	
</div>

<script src="https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js"></script>

</body>
</html>

<?php  } ?>



<?php 



 if (isset($_POST['sub'])) {
	// code...
	 $con=mysqli_connect("localhost","root","","chat_info");

  if(!$con)
  {
    die("connection fsailed..". mysqli_connect_error());
  }


  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sub=$_POST['subject'];

  

  $sql="INSERT INTO `contact`(`id`, `name`, `email`, `phone`, `sub`) VALUES (null,'$name','$email','$phone','$sub')";

 if(mysqli_query($con,$sql))
  {
 	
 	echo "<script>
  swal('Thank you...!', 'Heres some text','success',{
        tilte:'Thank you contact with us..',
        text:' MSG SENT SUCESSFULLY..',
        
  });
  </script>";
 }

 else
 {

 	echo '<script>alert("Som thing Wrong...");</script>';
 }


}



?>