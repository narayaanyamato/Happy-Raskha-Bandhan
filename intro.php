




<!---made with love-->

<?php 
session_start()


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style type="text/css">
		*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
  font-size: 62,5%;
}

body {
  height: 100vh;
	width: 100%;
  background: url('https://www.itl.cat/pngfile/big/51-516897_3840x16003440x1440-ultrawide-quad-hd-anime-wallpaper-4k-hd.jpg'); /* fallback for old browsers */
  background: linear-gradient(to right,#2c5364, #203a43, #0f2027);
  background: url('https://www.itl.cat/pngfile/big/51-516897_3840x16003440x1440-ultrawide-quad-hd-anime-wallpaper-4k-hd.jpg');
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  color: #fff;
}

.form__label {
  font-family: 'Roboto', sans-serif;
  font-size: 1.2rem;
  margin-left: 2rem;
  margin-top: 0.7rem;
  display: block;
  transition: all 0.3s;
  transform: translateY(0rem);
}



.form__input {
  font-family: 'Roboto', sans-serif;
  color: #333;
  font-size: 1.2rem;
	margin: 0 auto;
  padding: 1.5rem 2rem;
  border-radius: 0.2rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 90%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;
}

.form__input:placeholder-shown + .form__label {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateY(-4rem);
  transform: translateY(-4rem);
}

	</style>
</head>
<body>
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<div class="form__group">
	<form method="post" onsubmit="return(tom())"  name="frm">
  <input type="text" class="form__input" name="name" id="name" placeholder="Enter Your Full Name.."  />
  <div id="name1"></div>
  <label for="name" class="form__label">Enter Your Full Name..</label>
    <button type="submit" name="sub" id="btn"><img src="https://pngimage.net/wp-content/uploads/2018/06/go-button-png-6.png" width="100px " height="50px"></button>

</form>
</div>

<script type="text/javascript">
	function tom(){

		//alert();

		if (document.frm.name.value=="") {
			alert("Enter your name..");
			return false;
		}

		else
		{
			if (document.frm.name.value.length<=2)
		 {
           alert(" user  name cant less then 2-latter..");
           return false;
		 }



		}
	}
</script>

</body>
</html>


<?php  


if (isset($_POST['sub'])) {
	// code...
	 $con=mysqli_connect("localhost","root","","chat_info");

  if(!$con)
  {
    die("connection fsailed..". mysqli_connect_error());
  }


  $name=$_POST['name'];

  $_SESSION['name']=$_POST['name'];

  $sql="INSERT INTO `user_1`(`id`, `name`) VALUES (null,'$name')";

 if(mysqli_query($con,$sql))
  {
 	
 	echo '<script>window.open("index.php")</script>';
 }


}



?>