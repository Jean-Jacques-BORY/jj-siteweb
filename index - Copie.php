<!DOCTYPE html>
<html>
    <head>
        
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link href="assets/css/bootstrap.css" rel="stylesheet">
        <title>Mon super site</title>
    </head>
 
    <body>
	
	<div id="main_bloc_page">
    
    <!-- L'en-tête -->
	<?php include("includes/entete.php"); ?>
    <div id="bloc_page">
	<!-- barre aside -->
	<aside id="main_aside">
	<h3>Les bonnes adresses</h3>
                  <ul>
                       <li><a href="#">L’office du tourisme</a></li>
                       <li><a href="#">Hôtels et hébèrgements</a></li>
                       <li><a href="#">Visite guidée</a></li>
                       <li><a href="#">Bars et restaurants</a></li>
                  </ul>
	
	
	
	</aside>
	
	<div id="bloc_section">
    <!-- Le menu -->
    
    <?php include("includes/menus.php"); ?>
    
    <!-- Le corps -->
        
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
    </div>
    
    </div>
    
    
    </div>
	<!-- Le pied de page -->
	<?php include('includes/footer.php'); ?>
    </body>
</html>