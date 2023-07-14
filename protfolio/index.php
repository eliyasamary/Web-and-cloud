<?php 
	include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }

    $query 	= "SELECT * FROM protfolio_EliyaSamary";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("DB query failed.");
    }
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliya Samary</title>
    <link rel="icon" href="images/icon.png">
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
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
          <h1 class="site-title mb-0">Eliya Samary</h1>
          <div class="site-nav"> 
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#about" title="About"><span class="menu-title">About</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#skills" title="Skills"><span class="menu-title">Skills</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#education" title="Education"><span class="menu-title">Education</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#portfolio" title="Portfolio"><span class="menu-title">Portfolio</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact" title="Contact"><span class="menu-title">Contact</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="resume-container">
  <div class="shadow-1-strong bg-white my-5" id="intro">
    <div class="bg-info text-white">
      <div class="cover bg-image"><img src="images/header-background.jpeg"/>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);backdrop-filter: blur(2px);">
          <div class="text-center p-5">
            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="images/me.jpeg" width="160" height="160"/></div>
            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1">Eliya Samary</h2>
                <p>Software Engineering Student</p>
              </div>
              <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                <nav role="navigation">
                  <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/eliya.samary/" target=”_blank” title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/eliyasamary/" target=”_blank” title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/eliyasamary" target=”_blank” title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="d-print-none"><a class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3" href="cv-eliya-samary.pdf" target=”_blank” data-aos="fade-right" data-aos-delay="700">Download CV</a><a class="btn btn-info btn-lg shadow-sm mt-1" href="#contact" data-aos="fade-left" data-aos-delay="700">Hire Me</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="about">
    <div class="about-section">
      <div class="row">
        <div class="col-md-6">
          <h2 class="h2 fw-light mb-4">About Me</h2>
          <p class="p-text">Software Engineer student, diligent, responsible and highly motivated to apply my knowledge to real-world projects, and I am eager to learn.  A quick learner, adaptable, and thrive in challenging environments.</p>
        </div>
        <div class="col-md-5 offset-lg-1">
          <div class="row mt-2">
            <h2 class="h2 fw-light mb-4">Bio</h2>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">25</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Email</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">eliysamaea@gmail.com</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Phone</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">054-6465319</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Address</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">Modiin, Israel</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
    <div class="skills-section">
      <h2 class="h2 fw-light mb-4">Professional Skills</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">HTML</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">CSS</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">JavaScript</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">PHP</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">C</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">C++</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">SQL</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">Photoshop</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar dark-bg" role="progressbar" data-aos="zoom-in-right" data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="Military">
    <div class="work-experience-section">
      <h2 class="h2 fw-light mb-4">Military Service</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-info dark-line" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">HR Officer in the Logistics Department <span class="text-muted h6">Central Command</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">August, 2020 - September, 2021</div>
            <div>Responsibility for a full command area, including planning and execution, and for managing human resources functions within the organization</div>
          </div>
        </div>
        <div class="timeline-card timeline-card-info dark-line" data-aos="fade-in" data-aos-delay="200">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Deputy commander of the headquarters company <span class="text-muted h6">“Egoz” Unit</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">February, 2020 - August, 2020</div>
            <div>Working under pressure, meeting requirements, and meeting deadlines. Provided logistical support during exercises, training events, and
              deployments, ensuring the smooth execution of operations</div>
          </div>
        </div>
        <div class="timeline-card timeline-card-info dark-line" data-aos="fade-in" data-aos-delay="400">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Logistics Officer <span class="text-muted h6">Paratroopers Brigade</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">January, 2019 - February, 2020</div>
            <div>Developing thinking methodologies for solving problems and implementing them in tasks. <strong> Receiving a certificate of excellence from the brigade commander</strong> </div>
          </div>
        </div>
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="400">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Logistics Officer <span class="text-muted h6">Ephraim Regional Division</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">July, 2018 - January, 2019</div>
            <div>Creating logistical support, analyzing, and drawing conclusions. Developed and implemented logistics plans, optimizing resources</div>
          </div>
        </div>
        <div class="timeline-card timeline-card-info" data-aos="fade-in" data-aos-delay="400">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">Logistics Officer <span class="text-muted h6">101st Paratrooper Battalion</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">October, 2017 - July, 2018</div>
            <div>Experience in leading complex tasks and forward planning. Overseeing and managing logistical operations to support mission success </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="education">
    <div class="education-section">
      <h2 class="h2 fw-light mb-4">Education</h2>
      <div class="timeline">
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="0">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">B.SC SOFTWARE ENGINEERING <span class="text-muted h6">Shenkar School of design and engineering</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">2021 - Present</div>
          </div>
        </div>
        <div class="timeline-card timeline-card-success" data-aos="fade-in" data-aos-delay="200">
          <div class="timeline-head px-4 pt-3">
            <div class="h5">High School Diploma <span class="text-muted h6">Ironi Bet Rabin High School</span></div>
          </div>
          <div class="timeline-body px-4 pb-4">
            <div class="text-muted text-small mb-3">20010 - 2016</div>
            <div>School Diploma grade - 99. I expanded my studies in: Theater - 5 units, and Biology - 5 units.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
    <div class="portfolio-section">
      <h2 class="h2 fw-light mb-4">Portfolio</h2>
      <?php
            while($row = mysqli_fetch_assoc($result)) {
                $img = $row["url"];
                $id = $row["id"];
                if(!$img)$img = "images/default.png";
                if($id % 2 == 1){
                  echo '<div class="row g-0">
                  <div class="col-md-6"><a href="project_page.php?projectId=' . $row["id"] . '" target="_blank">
                  <img class="img-fluid" src="' . $img . '" width="800" height="500"/></a></div>
                  <div class="col-md-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                  <div class="m-4 mt-md-2">';
                  echo    '<p class="text-teal text-small">' . $row["language"] . '</p>';
                  echo    '<h3>' . $row["name"] . '</h3>';
                  echo    '<p class="text-muted">' . $row["desc"] . '</p>';
                  echo '</div>
                      </div>
                      </div>';
                }
                else if($id % 2 == 0){
                  echo '<div class="row g-0 portfolio-reverse">
                  <div class="col-md-6 d-flex align-items-center flex-end" data-aos="fade-right" data-aos-delay="100">
                  <div class="m-4 mt-md-2 text-end">';
                  echo    '<p class="text-teal text-small">' . $row["language"] . '</p>';
                  echo    '<h3>' . $row["name"] . '</h3>';
                  echo    '<p class="text-muted">' . $row["desc"] . '</p>';
                  echo '</div>
                      </div>
                      <div class="col-md-6"><a href="project_page.php?projectId=' . $row["id"] . '" target="_blank">
                      <img class="img-fluid" src="' . $img . '" width="800" height="500"/></a></div>
                      </div>';
                }
              }
        ?>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
    <div class="contant-section">
      <h2 class="h2 fw-light text mb-4">Contact</h2>
      <div class="row mb-4">
        <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="mt-1">
            <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> 054-6465319</div>
            <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> eliysamaea@gmail.com</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4">Eliya Samary</div>
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