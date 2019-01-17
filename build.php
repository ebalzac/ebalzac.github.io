<?php
/**
 * Génère les formats détachés et le site statique basique
 * utilisation : php build.php
 */
set_time_limit(-1);
include( dirname(dirname(__FILE__))."/Teinte-ebalzac/Build.php" );
$build = new Teinte_Build (
  array(
    "sets" => array(
      "Furne corrigé" => array(
        "glob" => '../FC/*.xml',
        "publisher" => 'eBalzac',
        "source" => "http://ebalzac.github.io/FC/%s.xml",
      ),
      "Furne" => array(
        "glob" => '../F/*.xml',
        "publisher" => 'eBalzac',
        "source" => "http://ebalzac.github.io/F/%s.xml",
                     ),
      "Versions antérieures" => array(
        "glob" => '../CH-autres/*.xml',
        "publisher" => 'eBalzac',
        "source" => "http://ebalzac.github.io/CH-autres/%s.xml",
                     ),
      "Œuvres de jeunesse" => array(
        "glob" => '../oeuvresjeunesse/*.xml',
        "publisher" => 'eBalzac',
        "source" => "http://ebalzac.github.io/oeuvresjeunesse/%s.xml",
                     ),
    ),
    "sqlite" => "balzac.sqlite",
    "formats" => "html",
    //ne plus ajouter le format epub sous peine d'écraser tous les fichiers FC transformés manuellement
    //"formats" => "article, epub, kindle, html, iramuteq, markdown",
  )
);
$build->sets( );
ob_start();
include( 'index.php' );
$html = ob_get_contents();
ob_end_clean();
file_put_contents( "index.html", $html );

?>
