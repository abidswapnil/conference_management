<?php 

session_start();
require 'config.php';

$username = $_SESSION['username'];
$_SESSION['username'] = $username;
$email = $_SESSION['email'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<style>
	body
	{
		background:#b3ddcf;
		
	}
	h1
	{
		color:#444048;
		background:#4486ff;
		text-align: center;
		height: 50px;

	}
	h2
	{
		color: #114072;
		transform: translate(0%,-10%);
	}
	button
	{
		transform: translate(1150%,-1303%);
	}
	img
	{
		height: 155px;
		width:200px;
		transform: translate(660%,-339.9%);
	}
	ul 
	{
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
    }
	li 
	{
	    float: left;
	    border-right:1px solid #bbb;
	}
	li:last-child 
	{
	    border-right: none;
	}
	li a 
	{
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}
	li a:hover:not(.active) 
	{
	    background-color:#72706f;
	}

	.active 
	{
	    background-color: #70b243;
	}
	.signout
	{
		transform: translate(95%,96%);

	}
	body
	{
       font-family: "Lato", sans-serif;
	}
	.sidenav 
	{
	    height: 100%;
	    width: 0;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color: #111;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 60px;
	    text-align:center;
	    background: rgb(0,0,0,0.8);
	}
	.sidenav a 
	{
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	    transition: 0.3s;

	}
	.sidenav a:hover{
	    color: #f1f1f1;
	}
	.sidenav .closebtn
	 {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 50px;
	}

	@media screen and (max-height: 450px) 
	{
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	.sidenav input[type = text],
	.sidenav input[type = date],
	.sidenav input[type = time]
	{
	    width: 50%;
	    height: 30px;
	    padding: 12px;
	    margin: 10px 0;
	    display: inline-block;
	    border-bottom: 3px solid #aaa;
	    box-sizing: content-box;
	    border: none;
	    background: #E8E8E8;
	    outline: none;
	    box-shadow: 0 0 10px 0 #31b1d8;
	    transition: .3s;
	    padding-right: 7px;
	    padding-left: 3px;
	    padding-bottom: 2px;
	    transform: translate(0%,190%);
	    transition-duration: 2s;

	}
	h3
	{
		color: #b7e2ba;
		font-size: 25px;
	}
	.sidenav input[type = submit]
	{
		transform: translate(0%,350%);
	}
	.success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;

    }

    .closebtn
	{
	    margin-left: 15px;
	    color: white;
	    font-weight: bold;
	    float: right;
	    font-size: 22px;
	    line-height: 20px;
	    cursor: pointer;
	    transition: 0.3s;
	}
	.closebtn:hover
	{
	    color: black;
	}
   .alert
   {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
   }
   .alert
   {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 95%;
	    transform: translate(0%,-925%);

   }
   .closebtn
   {
	    margin-left: 30px;
	    color: black
	    font-weight: bold;
	    float: right;
	    font-size: 30px;
	    line-height: 10px;
	    cursor: pointer;
	    transition: 0.3s;
	    transform: translate(10%,15%);
   }
   .closebtn:hover
   {
	    color: black;
   }
   .chatbox
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 500px;
	    width: 530px;
	    text-align: center;
	    transform: translate(150%,21%);
    }
    .messege
    {
    	padding: 20px;
    	padding-top: 50px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 30px;
	    width: 510px;
	    text-align: center;
	    transform: translate(155.5%,0%);

    }
    .messege input[type='text']
    {
    	width: 70%;
    	border-width: 1px;
    	box-sizing: border-box;
    	height: 35px;
    	text-align: center;
    }
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    transform: translate(0%,-925%);

    }
    .link
    {
    	text-align: left;
    }


	</style>
</head>
<body>
	<h1>Settings</h1>
	<form method="POST" action="">
		
		<ul>
		  <li><a class="active" href="homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="http:/conference/uploads/currentconferences.php">Current Conferences</a></li>
		  <li><a href="myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="notifications.php">Notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
		</ul>
		<div class="chatbox" style="overflow-y: scroll;">
			<h3 style="color: #3d3f3f;">Chat with admin<hr></h3>
			<p></p>

			
			<?php 

			if(isset($_POST['submit']))
			{
				if(isset($_POST['text']))
				{
					$text = $_POST['text'];

					if($text == NULL)
					{
						

					}
					else
					{
						//echo "<p style='text-align:right;'>".$text."</p>";

						$sql ="INSERT INTO chat (u_text,u_name,u_email) VALUES ('$text','$username','$email')";

						if($conn->query($sql) == TRUE)
						{
							 $id = "";
							  $last_id = $conn->insert_id;
							  //$_SESSION['last_id'] = $last_id;
							
								//echo "<p style='text-align:right;'>".$text."</p>";
							  $_SESSION['id'] = $last_id;
							  echo " ".$_SESSION['id'];

							  

						}
					}
				}
			}
			$sql ="SELECT chat.* FROM chat WHERE chat.u_name='$username' AND chat.u_email='$email'";

			$result = $conn->query($sql);

		    if($result->num_rows >0)
		    {
		    	//echo "<table><tr><th></th><th></th></tr>";
		    	while($row = $result->fetch_assoc())
		    	{
		    		$text_id = $row['text_id'];
		    		$u_text = $row['u_text'];
		    		$a_text = $row['a_text'];
		    		$_SESSION['text_id'] = $text_id;


                   

		    		 echo "<p style='text-align:right;'>".$u_text."</p>";

		    		 echo "<p style='text-align:left;'>".$a_text."</p>";
		    		
		    	}

		    	

		    	//echo "<script>window.location.href='http:/conference/users/chat.php';</script>";
		    }




		    ?>

		</div>
		<div class="messege" >

				<input type="text" name="text" placeholder="messege" >
			    <input style="background-color: #4CAF50; border: none; padding: 8px 16px; text-decoration: none; display: inline-block; font-size: 16px; margin: 2px 1px; cursor: pointer;" type="submit" name="submit" value="send"><br>
			    <p></p>
			</div>
		<script type="text/javascript">

			var close = document.getElementsByClassName("closebtn");
		    var i;

		    for (i = 0; i < close.length; i++) 
		    {
		    
			    close[i].onclick = function(){

			    var div = this.parentElement;

			    div.style.opacity = "0";
			    setTimeout(function(){ div.style.display = "none"; }, 600);
			    }
		    }

      </script>



	</form>


</body>
</html>