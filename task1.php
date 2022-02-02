<?php
	
	require_once "data.php";	

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
	<title>Trainess</title>
</head>
<body>

	<div class="container">	

			<?php 

				for ($i=0; $i < 10 ; $i++) {			

					echo '<div class="box">';
						echo '<img src="'. $data[$i]['image'] .'">';
						echo '<h3 class="name">' . $data[$i]['name'] . '</h3>';
						echo '<h5 class="uname">@'. userName($data[$i]['github_account']) .'</h5>';

						echo '<progress class="progBar" value="'.$data[$i]['progress'].'" max="100"></progress>';

						echo '<div class="testimonials">';
							echo '<div class="one">';
								echo '<h6>7</h6>';
								echo '<p>Project Completed</p>';
							echo '</div>';
							echo '<div class="one">';
								echo '<h6>5</h6>';
								echo '<p>Happy Clients</p>';
							echo '</div>';
							echo '<div class="one">';
								echo '<h6>20</h6>';
								echo '<p>Positive Reviews</p>';
							echo '</div>';
						echo '</div>';

						echo  "<a href ='moreInfo.php?id=$i' >" ."Show more"."</a>" ;

					echo '</div>';

					}

			?>
	</div>

</body>
</html>