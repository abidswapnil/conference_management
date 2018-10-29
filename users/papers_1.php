<?php
 session_start();

 require 'config.php'; ?>

<!DOCTYPE html>
<html>
<style type="text/css">
     body
     {
     	background: #b3ddcf;
     	
     }
	h1
	{
		color:#444048;
		background:#4486ff;
		text-align: center;
		height: 50px;
		border: 1px solid grey;

	}
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table, td
    {
        border: 1px solid #8e8e8e;
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 0px;
	    padding-left: 25px;
	    text-align: left;
	    width:100%;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid #8e8e8e;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 70px;
	    padding-left: 44px;
	    text-align: center;
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
	.conference
	{
		width: 100%;
		height: 1px;
	    padding: 30px 0px;
	    padding-top: 10px;
	    text-align: center;
	    background-color: lightblue;
	}
	.choose
	{
		width: 100%;
		height: 1px;
	    padding: 30px 0px;
	    padding-top: 10px;
	    text-align: center;
	    background-color: lightblue;
	}
	.alert 
	{
	    padding: 20px;
	    background-color: #f44336;
	    color: white;
	    text-align: center;
    }
    .zero
    {
    	padding: 20px;
	    background-color: lightblue;
	    color: red;
	    text-align: center;

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

</style>
<head>
	<title>current conferences</title>
	<h1>My conferences</h1>

	<ul>
		  <li><a class="active" href="homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="http:/conference/uploads/currentconferences.php">Current Conferences</a></li>
		  <li><a href="myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="notifications.php">notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
		</ul><br><br>
</head>
<body>
	<form method="POST" action="">
		
<?php
            

			$num_papers = 0;
			//$conferences_id = array();
			$string = "";
			//$conference = $_SESSION['conferencename'];
			
            $con_id = $_SESSION['con_id'];

			$sql ="SELECT papers.* FROM papers WHERE papers.con_id ='$con_id'";

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;
				echo "<table><tr><th>Papers No.</th><th>link</th><th>conference</th><th>review (LAST)</th><th>comment (LAST)</th><th>reviewed by</th><th></th></tr>";
								

				while($row = $result->fetch_assoc())
				{
					$i++;
					
                    $papers_id[$i] = $row['papers_id'];
                    $conference = $row['conferencename'];
					$papers = $row['papers'];
					$review = $row['review'];
					$comment = $row['comment'];
					$reviewed_by = $row['reviewed_by'];

					//$papers = $row['papers'];
					//$_SESSION['papers']= $papers;
					if($review == NULL AND $comment == NULL AND $reviewed_by == NULL)
					{
						echo "<tr>"."<td>[".$i."]</td>"."<td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$conference."</td><td><span style='color:red;'>*still not reviewed</span></td><td><span style='color:red;'>*still not commented</span></td><td><span style='color:red;'>*empty</span></td><td><input style ='transform: translate(-10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='assign".$i."' value='assign reviewer'><br><br><input style ='transform: translate(-10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='show".$i."' value='show all review'></td></tr>";
					}
					else
					{
						echo "<tr>"."<td>[".$i."]</td>"."<td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$conference."</td><td>".$review."</td><td>".$comment."</td><td>".$reviewed_by."</td><td><input style ='transform: translate(-10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='assign".$i."' value='assign reviewer'><br><br><input style ='transform: translate(-10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='show".$i."' value='show all review'></td></tr>";
					}
					
					
																				
					
				}
				//header('location:http:/conference/uploads/currentconferences.php');
				//$string .= $_SESSION['papers'];
				echo "</table>";

				$num_papers =$i;
				

				
                

				
			}
			else
			{
				echo "<div style='text-align:center;'>";
				echo "<h3><span style='color:red;'>*no papers uploaded yet</span></h3>";
				echo "</div>";
			}
			for ($i=1; $i <= $num_papers ; $i++) 
			{ 
				$assign_btn = 'assign'.$i;
				$show_btn = 'show'.$i;

				if(isset($_POST[$assign_btn]))
				{
					$selected_id = $papers_id[$i];

					$sql= "SELECT papers.* FROM papers WHERE papers.papers_id='$selected_id'";

					$result = $conn->query($sql);

					if($result ->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							$id = $row['papers_id'];
							$papers = $row['papers'];
							$sub_date = $row['submission_date'];
							$sub_by = $row['submitted_by'];
						    $conference =$row['conferencename'];
						    $title = $row['title'];
						    //$author = $row['author'];
						    $email = $row['email'];
						    $abstract = $row['abstract'];

						    $_SESSION['papers_id'] = $id;
						    $_SESSION['papers'] = $papers;
						    $_SESSION['submission_date'] = $sub_date;
						    $_SESSION['submitted_by'] = $sub_by;
						    $_SESSION['conferencename'] = $conference;
						    $_SESSION['title'] = $title;
						    //$_SESSION['author'] = $author;
						    $_SESSION['email'] = $email;
						    $_SESSION['abstract'] = $abstract;

						    echo "<script>window.location.href='http:/conference/users/assign_reviewer.php'</script>";


						}
						/*echo "papers id: ".$id."<br>";
						echo "papers: ".$papers."<br>";
						echo "submission date: ".$sub_date."<br>";
						echo "submitted by: ".$sub_by."<br>";
						echo "conference name: ".$sub_by."<br>";
						echo "author: ".$author."<br>";
						echo "email: ".$email."<br>";
						echo "abstract: ".$abstract;*/
					}
				}
				if(isset($_POST[$show_btn]))
				{
					$selected_id = $papers_id[$i];

					$sql= "SELECT papers.* FROM papers WHERE papers.papers_id='$selected_id'";

					$result = $conn->query($sql);

					if($result ->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							$id = $row['papers_id'];
							$papers = $row['papers'];
							$sub_date = $row['submission_date'];
							$sub_by = $row['submitted_by'];
						    $conference =$row['conferencename'];
						    $title = $row['title'];
						    $author = $row['author'];
						    $email = $row['email'];
						    $abstract = $row['abstract'];

						    $_SESSION['papers_id'] = $id;
						    $_SESSION['papers'] = $papers;
						    $_SESSION['submission_date'] = $sub_date;
						    $_SESSION['submitted_by'] = $sub_by;
						    $_SESSION['conferencename'] = $conference;
						    $_SESSION['title'] = $title;
						    $_SESSION['author'] = $author;
						    $_SESSION['email'] = $email;
						    $_SESSION['abstract'] = $abstract;

						    echo "<script>window.location.href='http:/conference/users/show_all_review.php'</script>";
						    //echo "".$id;


						}
						/*echo "papers id: ".$id."<br>";
						echo "papers: ".$papers."<br>";
						echo "submission date: ".$sub_date."<br>";
						echo "submitted by: ".$sub_by."<br>";
						echo "conference name: ".$sub_by."<br>";
						echo "author: ".$author."<br>";
						echo "email: ".$email."<br>";
						echo "abstract: ".$abstract;*/
					}

				}
			}
		


?>

		

	</form>


</body>
</html>