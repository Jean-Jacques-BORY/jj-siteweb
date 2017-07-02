<!DOCTYPE html>
<html>
  <head>
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body >
  
  



  
  
  
    <?php include("includes/entete.php"); ?>	 
	<!-- <div class="container-fluid"> -->
		<!-- <nav class="navbar navbar-default navbar-fixed-top" id="menu"> -->
			
			<!-- </div><!-- /.container-fluid -->
    <!-- <div class="container-fluid" > -->
	  <!-- <div class="row" style="margin-top:80px;"> -->
	   <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
        <!-- <section> -->
          <?php /* ICI, débutera la pseudo-frame */
$dir_pages = "pages/"; // On définit tout d'abord dans une variable le dossier contenant les fichiers corps. Ici, le dossier pages
 
if ( isset($_GET['page']) && !empty($_GET['page']) ) // Si il existe la variable $_GET['page'] passé par l'url
{
    if ( is_file( $dir_pages . $_GET['page'] . '.php' ) ) // Si la page demandé existe en tant que fichier PHP dans notre dossier
    {
        include_once $dir_pages . $_GET['page'] . '.php'; // On inclut le fichier
    }
    else // Sinon
    {
        include_once $dir_pages . 'accueil.php'; // On lui indique que la page demandé n'existe pas
    }
}
else // Sinon, si aucune page particulière n'a été demandé, et donc qu'il n'existe de pas de $_GET['page']
{
    include_once $dir_pages . 'accueil.php'; // Alors on inclut la page d'accueil
}
?>
        <!-- </section> -->
		 <!-- </div> -->
      <!-- </div> -->
     <!-- </div> -->
	<!-- </nav> -->
	<?php include('includes/footer.php'); ?>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
</body>
</html>