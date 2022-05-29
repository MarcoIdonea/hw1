<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="stile/profilo_personale.css?v=<?php echo time();?>" rel="stylesheet"/>
<script src="script/pagina_personale.js?v=<?php echo time();?>" defer="true"></script>
</head>
<body>
<h1>Discover News</h1>
<h3>Benvenuto/a <?php echo $_SESSION["email"]; ?> </h3>
<nav>
      <a id="barra_in_alto" href="logout.php">Logout</a> 
      <a id="barra_in_alto" href="preferiti.php">Preferiti</a> 
</nav>
<img src="images/giornale.png" />

<h2>Scopri tutto quello che vuoi su:</h2>
<nav id="category">
    <a id="categorie" href="sport.php">Sport</a>
    <a id="categorie" href="tecnology.php">Tecnologia</a>
    <a id="categorie" href="science.php">Scienza</a>
    <a id="categorie" href="business.php">Business</a>
    <a id="categorie" href="health.php">Health</a>
    <a id="categorie" href="general.php">Notizie generali</a>
    <a id="categorie" href="entertainment.php">Intrattenimento</a>
    <a id="categorie" href="bbc.php">Principali titoli BBC News</a>


</nav>





</body>
</html>