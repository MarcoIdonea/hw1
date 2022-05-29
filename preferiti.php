<?php 
session_start(); 
?> 
<!DOCTYPE html> 
<html lang="it">
      <head> 
      <meta charset="UTF-8"> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
      <link href="stile/api.css?v=<?php echo time();?>" rel="stylesheet"/> 
      <script src="script/preferiti.js?v=<?php echo time();?>" defer="true"></script> 

      </head> 
      <body> 
      <h1>Discover News</h1> 
      <h3>Benvenuto/a <?php echo $_SESSION["email"];; ?> </h3> 
      <h1>Ecco i tuoi articoli preferiti:</h1>
      <nav> 
            <a id="barra_in_alto" href="logout.php">Logout</a> 
            <a id="barra_in_alto" href="homes.php">Home</a> 
      </nav> 

      <article id="album-view">

</article>
</body>

</html>