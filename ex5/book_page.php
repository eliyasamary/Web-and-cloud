<?php 
    include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?>
<?php 
	$prodId = $_GET["bookId"];
	$query 	= "SELECT * FROM tbl_91_books where id=" . $prodId;
	$result = mysqli_query($connection, $query);
	if($result) {
		$row 	= mysqli_fetch_assoc($result);
	}
	else die("DB query failed.");
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">  
		<title>Bookstore</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Bitter&family=Handlee&family=Mochiy+Pop+One&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	    <div class="container">
		<?php 
		echo '<h1 class="book-title">' . $row["name"] .'</h1>';
		echo '<h3 class="book-details"><b>By:</b> ' . $row["author"] .'</h3>';
		echo '<h3 class="book-details"><b>Category:</b> ' . $row["category"] .'</h3>';
		echo '<h3 class="book-details"><b>Price:</b> ' . $row["price"] .'</h3>';
		$img = $row["img_url"];
		if(!$img) $img = "images/default.jpg";
		echo '<img class="book-img" src="' . $img . '">';
		echo '<p class="book-desc">' . $row["desc"] .'</p>';
		?> 
		<a href="books_list.php" class="go-back">Go Back</a>
	
		<?php 
			mysqli_free_result($result);
		?>
	    </div>
	</body>
</html>
<?php
mysqli_close($connection);
?>