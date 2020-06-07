<?php
require "bdd.php";

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Lucas LETT</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="icon" href="images/favicon-32x32.png" />

	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">

	<link href="style/responsive.css" rel="stylesheet">
	
	<link href="style/styles.css" rel="stylesheet">
	

	
</head>
<body>

<div id="wrap">
	
<section class="intro-section">
		<div class="container" >
		
			
			
		
		
			<div class="intro">
				<div class="row">
				
					<div class="col-sm-8 col-md-4 col-lg-3">
						<div class="profile-img margin-b-30"><img src="images/photoCV.jpg" alt=""></div>
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
                        <a class="downlad-btn" href="CV.php">Téléchargez mon CV</a>
                        <a class="downlad-btn" href="index.php">Retour à l'accueil</a>
					</div><!-- col-lg-2 -->
			
				</div><!-- row -->
			
			</div><!-- intro -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	
	<section class="about-section section">
		<div class="container">


<?php

$projet_id = htmlspecialchars($_GET['id']);

if(isset($projet_id) && projet_existe($projet_id))
{
    $projet_id = $_GET['id'];
    
    $sql = 'SELECT * FROM portfolio WHERE ID = '.$projet_id;
	$req = $pdo->query($sql);
    $row = $req->fetch();        
    $req->closeCursor();

?>

    <h2><?php echo $row['NOM'] ?></h2><br>

    <div class="row">

        <div id="projet_pres" class="col-8" style="text-align:justify;">
			<?php echo htmlspecialchars_decode($row['DESCRIPTION']) ?>
			
			
        </div>

        <div class="col-4"> 

        <div class="slider" id="slider_maxi">
            <a  class="control_next">>></a>
            <a  class="control_prev"><</a>
            <ul>
				<?php
					for($i = 0; $i < $row['NOMBRE_IMAGE']; $i++)
					{
						?>
	
						<li onclick="show('images/portfolio/<?php echo $row['ID']?>/image_<?php echo $i?>.jpg')" style="background-image: url('images/portfolio/<?php echo $row['ID']?>/image_<?php echo $i?>.jpg')"></li>
	
						
						<?php
					}

				?>

                
			</ul>  

			

			<!-- Creates the bootstrap modal where the image will appear -->
			<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Visualisation</h4>
				</div>
				<div class="modal-body">
					<img src="" id="imagepreview" style="width: 100%; height: 100%;" >
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
			</div>
			

        </div>

        </div>


	</div>
	<!--
	<div class="row slider" id="slider_mini" style="width:100%;">


            <a  class="control_next">>></a>
            <a  class="control_prev"><</a>
            <ul>
				<?php
					for($i = 0; $i < $row['NOMBRE_IMAGE']; $i++)
					{
						?>
	
						<li onclick="show('images/portfolio/<?php echo $row['ID']?>/image_<?php echo $i?>.jpg')" style="background-image: url('images/portfolio/<?php echo $row['ID']?>/image_<?php echo $i?>.jpg')"></li>
	
						
						<?php
					}

				?>

                
			</ul>  
	</div>-->

	<br>
	<div class="liens" style="word-break: break-all;">
    <?php echo htmlspecialchars_decode($row['LIENS'] )?>
	</div>





<?php


}
else
{
    echo "Projet inconnu !";
}


?>



</div><!-- container -->
	</section><!-- experience-section -->

	
	
	<footer style=" bottom: 0px; position: absolute;  left: 0;  right: 0;" >
		<p class="copyright">
		<a href="admin/edit.php?id=<?php echo $projet_id ?>"><img style="height:25px; width:25px;" src="images/edit.png"></a>
		
		<a href="admin"><img style="height:30px; width:30px;" src="images/settings.png"></a>
		
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright ©<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>
	</footer>>

	
	
	<!-- SCRIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	

	</div>
</body>
</html>


<?php

function projet_existe($id)
{
    require "bdd.php";
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

    var slideCount = $('#slider_maxi ul li').length;
	var slideWidth = $('#slider_maxi ul li').width();
	var slideHeight = $('#slider_maxi ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider_maxi').css({ width: slideWidth, height: slideHeight });
	
	$('#slider_maxi ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider_maxi ul li:last-child').prependTo('#slider_maxi ul');

    function moveLeft() {
        $('#slider_maxi ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider_maxi ul li:last-child').prependTo('#slider_maxi ul');
            $('#slider_maxi ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider_maxi ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider_maxi ul li:first-child').appendTo('#slider_maxi ul');
            $('#slider_maxi ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
		moveLeft2();
    });

    $('a.control_next').click(function () {
        moveRight();
		moveRight2();
    });

	var slideCount2 = $('#slider_mini ul li').length;
	var slideWidth2 = $('#slider_mini ul li').width();
	var slideHeight2 = $('#slider_mini ul li').height();
	var sliderUlWidth2 = slideCount2 * slideWidth2;
	
	$('#slider_mini').css({ width: slideWidth2, height: slideHeight2 });
	
	$('#slider_mini ul').css({ width: sliderUlWidth2, marginLeft: - slideWidth2 });
	
    $('#slider_mini ul li:last-child').prependTo('#slider_mini ul');

    function moveLeft2() {
        $('#slider_mini ul').animate({
            left: + slideWidth2
        }, 200, function () {
            $('#slider_mini ul li:last-child').prependTo('#slider_mini ul');
            $('#slider_mini ul').css('left', '');
        });
    };

    function moveRight2() {
        $('#slider_mini ul').animate({
            left: - slideWidth2
        }, 200, function () {
            $('#slider_mini ul li:first-child').appendTo('#slider_mini ul');
            $('#slider_mini ul').css('left', '');
        });
    };

	function show(src)
	{
		$('#imagepreview').attr('src', src); // here asign the image to the modal when the user click the enlarge link
   		$('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function

	}


</script>