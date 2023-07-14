<?php 
	include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }

	$projId = $_GET["projectId"];
	$query 	= "SELECT * FROM protfolio_EliyaSamary WHERE id=" . $projId;
	$result = mysqli_query($connection, $query);
	if($result) {
		$row = mysqli_fetch_assoc($result);
	}
	else die("DB query failed.");
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="css/main.css?ver=1.2.1" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body class="bg-light" id="top">
    <div class="page-content">
      <div class="container">
        <div class="resume-container">
          <div class="shadow-1-strong bg-white my-5" id="intro">
            <div class="dark-bg-sec text-white">
              <div class="centered">
                <?php
                echo '<img class="img-front" src="' . $row["url"] .'"/>';
                ?>
              </div>
            </div>
          </div>
          <div class="shadow-1-strong bg-white my-5 p-5" id="about">
            <div class="about-section">
              <div class="row">
                <div class="col">
                  <h2 class="h2 fw-light mb-4">Project Description</h2>
                  <?php
                    echo  '<p class="desc-p">' . $row["desc"] . '</p>';
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="shadow-1-strong bg-white my-5 p-5 centered">
              <div class="row">
                <div class="col">
                  <?php
                    echo  '<img class="img-desc shadow-1-strong" src="' . $row["desc-img"] .'"/>';
                    echo  '<a href="' . $row["github"] . '"><h2 class="link">Github</h2></a>';
                  ?>
                </div>
              </div>
          </div>
        </div>
        <div class="centered">
          <a class="btn btn-info btn-lg shadow-sm mt-1" href="index.php"><h2>Go Back</h2></a>
        </div>
      </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/eliya.samary/" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/eliyasamary/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/eliyasamary" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="text-small">
          <div class="mb-1"><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department" target="_blank">תואר ראשון בהנדסת תוכנה בשנקר</a></div>
          <div class="mb-1">&copy; Material Resume. All rights reserved.</div>
          <div>Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
        </div>
      </div>
    </footer>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
    <?php
			mysqli_free_result($result);
		?>
  </body>
</html>
<?php
mysqli_close($connection);
?>