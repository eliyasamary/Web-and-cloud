<?php 
	include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">  
		<title>Bookstore</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bitter&family=Handlee&family=Mochiy+Pop+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Zeyada&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/script.js"></script>
	</head>
	<body>
	    <div class="container">
		<h1 class="title">Welcome to my Bookstore !</h1>
		<h2 class="title"><i>"You are wherever your thoughts are,<br> make sure your thoughts are where you want to be"</i></h2>
		<h3 class="title">-Nachman of Breslov</h3>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
				Categories
			</button>
			<ul id="categories" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="./books_list.php">All</a></li>
			</ul>
		</div>
		<?php 
			if(!empty($_GET["category"])){
				echo '<h5 class="title">' . $_GET["category"] . ':</h5>';
				$query 	= "SELECT * FROM tbl_91_books WHERE category = '" . $_GET["category"] . "'";
			}
			else {
				echo '<h5 class="title"><b>All Categories:</b></h5>';
				$query 	= "SELECT * FROM tbl_91_books order by name";
			}
			$result = mysqli_query($connection, $query);
			if(!$result) {
				die("DB query failed.");
			}

			echo '<div class="row">';
			while($row = mysqli_fetch_assoc($result)) {
				$img = $row["img_url"];
				if(!$img)$img = "images/default.png";
				echo '<div class="col">';
				echo    '<div class="card book-card">';
				echo    	'<a href="book_page.php?bookId=' . $row["id"] . '">';
				echo 			'<img class="book-img" src="' . $img . '" class="card-img-top">';
				echo   			'<h5 class="card-title">' . $row["name"] . '</h5>';
				echo		'</a>';
				echo '</div></div>';
			}
			echo '</div>';
		?>

		
		<?php
			mysqli_free_result($result);
		?>
	    </div>
	</body>
</html>
<?php
mysqli_close($connection);
?>