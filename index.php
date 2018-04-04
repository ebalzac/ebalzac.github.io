<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Balzac</title>
    <link rel="stylesheet" type="text/css" href="../Teinte/tei2html.css" />
  </head>
  <body>
      <article id="article">
        <h1><a href="http://honoredebalzac.github.io/">Balzac</a> sur GitHub</h1>
        <p>Œuvre complète de Balzac en XML/TEI, disponible sur GitHub, cette page est générée automatiquement pour accéder à toute la collection dans différents formats : lecture (epub, mobi), recherche (markdown, iramuteq), sources XML/TEI.</p>
        <?php
include_once( dirname(dirname(__FILE__))."/Teinte/Build.php" );
$base = new Teinte_Build (
  array(
    "sqlite" => "balzac.sqlite",
    "formats" => "epub, kindle, html, iramuteq, markdown",
  )
);
$base->table();
        ?>
      </article>
    <script src="../Teinte/Sortable.js">//</script>
  </body>
</html>
