<?php

// Read JSON file
$json = file_get_contents('db.json');

//Decode JSON
$json_data = json_decode($json,true);



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>InmediativeTest</title>

	<link rel="stylesheet" href="assets/css/main.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-black">
		<a class="navbar-brand" href="#"><?php echo $json_data['title'] ?></a>
		<ul class="nav nav-pills">
			<li class='nav-item'><a class='nav-link' href="<?php echo $json_data['menu'][0]['href'] ?>"><?php echo $json_data['menu'][0]['title'] ?></a></li>
			<li class='nav-item'><a class='nav-link active' href="<?php echo $json_data['menu'][1]['href'] ?>"><?php echo $json_data['menu'][1]['title'] ?></a></li>
			<li class='nav-item'><a class='nav-link' href="<?php echo $json_data['menu'][2]['href'] ?>"><?php echo $json_data['menu'][2]['title'] ?></a></li>
			 <?php 
			
				/* foreach ($json_data['menu'] as $val){

					$link = $val["href"];
					$title = $val["title"];
				
					 echo "<li class='nav-item'><a class='nav-link' href='$link'>$title</a></li>";
						
				}	 */
			?>
		</ul>
	</nav>

	<br>

	<div class="container jumbotron-container">
		<div class="jumbotron">
			<div class="row">
   			<div class="col-sm-7">
	 				<h1 class="display-5"><?php echo $json_data['jumbotron']['title'] ?></h1>
						<hr class="my-4">
						<p><?php echo $json_data['jumbotron']['subtitle'] ?></p>
   			</div>
   			<div class="col-sm">
					<div class="rectangle"></div>
   			</div>
  			</div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-sm-7">
				<button type="button" class="btn btn-secondary download">Descarga</button>
			</div>
			<div class="col-sm-auto">
					
			</div>
		</div>
	</div>

<br>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h3><?php echo $json_data['box']['title'] ?></h3>
				<p class="box-text"><?php echo $json_data['box']['text'] ?></p>
			</div>
			<div class="col-sm">
				<h3>Moment</h3>

				<ul class="list-unstyled">	 
			<?php 
			
				foreach ($json_data['moment'] as $key){

					$list = $key;
				
					echo "<li class='nav-item'>$list</li>";

				}	
			?>
		</ul>

			</div>
			<div class="col-sm">
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-md-center">
			
			<div class="col-sm" id="slider">
				<h3>Screenshots</h3>

				<div class="card-deck">
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<?php 
				
						foreach (array_slice($json_data['slide'],0,7) as $slid){

							$imgs = $slid;
							$k = $k+1;
							$counter = $k;
							echo "<div class='card card-$counter'><img class='card-img-top' src='$imgs' alt='Card image cap'></div>";

						}	
					?>

					<!-- Next and previous buttons -->
  
  					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					
				</div>
			</div>	
		</div>
	</div>

<br>

<footer class="footer">
      <div class="container">
        <p class="mensaje">Gracias por tomarte este tiempo :)</p>
      </div>
    </footer>
	 
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>