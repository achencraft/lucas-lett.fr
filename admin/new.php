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

<div id="wrap">
	
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
	
	
	<section class="about-section section">
		<div class="container">

        <h3> NOUVEAU PROJET </h3>


    <form action="save_new.php" method="post" id="edit">

        <div class="row">
            <div class="col-4">
                NOM
            </div>

            <div class="col-8"> 
                <input name="NOM" type="text" size="50">
            </div>
        </div>
        <br>    

        <div class="row">
            <div class="col-4">
                TYPE
            </div>
                
            <div class="col-8"> 
                <input name="TYPE" type="text" size="50">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                APERCU
            </div>

            <div class="col-8"> 
                <input name="APERCU" type="text" size="50"> 
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                NOMBRE D'IMAGES
            </div>

            <div class="col-8"> 
                <input name="NBR" type="number">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                DESCRIPTION
            </div>

            <div class="col-8"> 
               <textarea name="DESCRIPTION" id="w3review" name="w3review" rows="4" cols="50"></textarea>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-4">
                LIENS
            </div>

            <div class="col-8"> 
               <textarea name="LIENS" id="w3review" name="w3review" rows="4" cols="50"></textarea>
            </div>
        </div>



    </form>


    <center><button type="submit" form="edit" value="Submit">Sauvegarder</button></center>


<br><br>



</div><!-- container -->
	</section><!-- experience-section -->

	
	
	<footer style=" bottom: 0px; position: absolute;  left: 0;  right: 0;" >
		<p class="copyright">
		<a href="index.php"><img style="height:30px; width:30px;" src="../images/settings.png"></a>
		
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>>

	
	
	<!-- SCRIPTS -->
	
	<script src="../common-js/jquery-3.2.1.min.js"></script>
	
	<script src="../common-js/tether.min.js"></script>
	
	<script src="../common-js/bootstrap.js"></script>
	
	<script src="../common-js/isotope.pkgd.min.js"></script>
	
	<script src="../common-js/jquery.waypoints.min.js"></script>
	
	<script src="../common-js/progressbar.min.js"></script>
	
	<script src="../common-js/jquery.fluidbox.min.js"></script>
	
	<script src="../common-js/scripts.js"></script>
	
    </div>
</body>
</html>


<?php

function projet_existe($id)
{
    require "../bdd.php";
    $sql = 'SELECT * FROM portfolio WHERE ID = '.$id;



	$req = $pdo->query($sql);
    $row = $req->fetch();
    
    if(!$row)
    {
        $req->closeCursor();
        return false;
    }
    
    $req->closeCursor();
    return true;
	
}

?>



<script>

var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });
</script>