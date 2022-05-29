<?php

    session_start();
    if(isset($_SESSION["email"]))
    {
         // Vai alla home
         header("Location: homes.php");
         exit;
    }
    // Verifica l'esistenza di dati POST
    if(isset($_POST["email"]) && isset($_POST["password"]))
    {
        // Connetti al database
        $conn = mysqli_connect("localhost", "root", "", "web");
        // Cerca utenti con quelle credenziali
        $query = "SELECT * FROM users WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
        $res = mysqli_query($conn, $query);
        // Verifica la correttezza delle credenziali
        if(mysqli_num_rows($res) > 0)
        {
            // Imposta la variabile di sessione
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["nome"] = $_POST["nome"];
            $_SESSION["cognome"] = $_POST["cognome"];
            // Vai alla pagina home_db.php
            header("Location: homes.php");
            exit;
        }
        else
        {
            // Flag di errore
            $errore = true;
        }
    }

?>
<html>
<head>
    <title>Login</title>
<link rel='stylesheet' href="stile/accesso.css?v=<?php echo time(); ?>">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
</head>
<body>
<header>
    <h1>Accedi alla tua area personale</h1>
</header>
<?php
            // Verifica la presenza di errori
            if(isset($errore))
            {
                echo "<p class='errore'>";
                echo "Credenziali non valide.";
                echo "</p>";
            }
        ?>
<main>
    <img src="images/sfondo.png ">
    <div id='login' ></div>
    <form name='login' method='post'>
        <h1>Login</h1>
    <p>
        <label>email <input type='text' name='email'></label>
    </p>
    <p>
         <label>password <input type='password' name='password'></label>
    </p>
    <p>
         <label>&nbsp;<input type='submit'></label>
        </p>
    <p class="registrati">
    Non hai ancora un account?<a href="registrazione.php">Registrati</a></p>
    
    </form>
</main>
</body>
</html>

