<?php
require "../bdd.php";

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Lucas LETT</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="icon" href="../images/favicon-32x32.png" />

	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="../common-css/bootstrap.css" rel="stylesheet">
	
	<link href="../common-css/ionicons.css" rel="stylesheet">
	
	<link href="../style/styles.css" rel="stylesheet">
	
	<link href="../style/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<section class="intro-section">
		<div class="container" >
		
			
			
		
		
			<div class="intro">
				<div class="row">
				
					<div class="col-sm-8 col-md-4 col-lg-3">
						<div class="profile-img margin-b-30"><img src="../images/photoCV.jpg" alt=""></div>
					</div><!-- col-sm-8 -->
					
					<div class="col-sm-10 col-md-5 col-lg-6">		
							<h2><b>Lucas LETT</b></h2>
							<h4 class="font-yellow">Étudiant en informatique</h4>
							<ul class="information margin-tb-30">
								<li><b class="font-yellow">EMAIL</b> : lucas.lett@laposte.net</li>
								<li><b class="font-yellow">TÉLÉPHONE</b> : 07.81.69.91.56</li>
								<li><b class="font-yellow">MOBILITÉ</b> : Permis B</li>
							</ul>
							<ul class="social-icons">
								<li><a href="https://www.linkedin.com/in/lucas-lett/"><i class="ion-social-linkedin"></i></a></li>
								<li><a href="https://www.facebook.com/lucas.lett.3"><i class="ion-social-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/achencraft/"><i class="ion-social-instagram"></i></a></li>
								<li><a href="https://twitter.com/achencraft"><i class="ion-social-twitter"></i></a></li>
							</ul>
					</div><!-- col-sm-8 -->
					
                    <div class="col-sm-10 col-md-3 col-lg-3">
                        <a class="downlad-btn" href="../CV.php">Téléchargez mon CV</a>
                        <br>
                        <a class="downlad-btn" href="../index.php">Retour à l'accueil</a>
					</div><!-- col-lg-2 -->
			
				</div><!-- row -->
			
			</div><!-- intro -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
    <section class="portfolio-section section">
        <div class="container">

            <h3> GESTION DES PROJETS&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="new.php">&#9998;</a> </h3>

            <div class="portfolioContainer  margin-b-50">

            <?php
                $sql = 'SELECT * FROM portfolio';
                $req = $pdo->query($sql);
                while($row = $req->fetch())
                {
                    ?>
                    <div class="p-item boite <?php echo $row["TYPE"] ?>">
                        <a href="edit.php?id=<?php echo $row["ID"] ?>">
                            <img src="../images/portfolio/<?php echo $row["ID"] ?>/<?php echo $row["APERCU"] ?>" alt="<?php echo $row["NOM"] ?>">
                            <div class="legende"><?php echo $row["NOM"] ?></div>
                        </a>
                    </div>

                    <?php
                }
                $req->closeCursor();
            ?>  
            </div>
        </div>
    </section>


	
	
	<footer style="    z-index: 1; bottom: 0px; position: fixed;  left: 0;  right: 0;" >
		<p class="copyright">
		<a href=""><img style="height:30px; width:30px;" src="../images/settings.png"></a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>
	
	
	<!-- SCRIPTS -->
	
	<script src="../common-js/jquery-3.2.1.min.js"></script>
	
	<script src="../common-js/tether.min.js"></script>
	
	<script src="../common-js/bootstrap.js"></script>
	
	<script src="../common-js/isotope.pkgd.min.js"></script>
	
	<script src="../common-js/jquery.waypoints.min.js"></script>
	
	<script src="../common-js/progressbar.min.js"></script>
	
	<script src="../common-js/jquery.fluidbox.min.js"></script>
	
	<script src="../common-js/scripts.js"></script>
	
</body>
</html>