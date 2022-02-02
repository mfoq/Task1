<?php 

	require_once "data.php" ;

	$id =$_GET['id'] ;

	function userName($user){
			$arr=explode('/',$user ) ;
			$userName=$arr[count($arr)-1];
		    return $userName;
		}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Trainee Page</title>
</head>
<body>

	<div class="back"></div>

	<div class="trainee-info">

		<img src="<?php echo $data[$id]['image']?>">
		<h3 class="name"><?php echo $data[$id]['name']?> </h3>
		<h5 class="uname">@<?php echo userName($data[$id]['github_account'])?> </h5>

		<button>Copy Account Link</button>

		<div class="testimonials">
			<div class="one">
				<h6>7</h6>
				<p>Project Completed</p>
			</div>
			<div class="one">
				<h6>5</h6>
			<p>Happy Clients</p>
			</div>
			<div class="one">
				<h6>20</h6>
				<p>Positive Reviews</p>
			</div>
		</div>

		<ul class="contact">
			<li><a href="#"> About Me </a></li>
			<li><a href="#"> Portfolio </a></li>
			<li><a href="#"> Connections </a></li>
			<li><a href="#"> My Blog </a></li>
		</ul>

	</div>
</body>
</html>