<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Login Page</title>
        <meta name="description" content="Page de Login // Projet CODEVSI 2024">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="css/login.css">
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    </head>
    <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <a href="https://codevsiimtatlantique.000webhostapp.com/Main/index%202.php">
                <button class="btn btn-primary principal" id="menu" type="button">Retour Page Principale</button>
            </a>
        </nav>
    </header>
    <body>
        <main class="main">
            <div class="block-heading">
                <div class="grand-rectangle">
                <h2 class="text-info" style="margin-top:30%"><strong><u>Page de Connexion</u></strong></h2>
                <form action="file_php/login.php" method="POST">
                    <section title="Login_box" style="margin-top:10px">
                        <label>Login</label>
                        <div>
                            <input type="text" name="login" placeholder="Identifiant"><br>
                        </div>
                    </section>
                    <section title="Password_box">
                        <label>Password</label>
                        <div>
                            <input type="password" name="password" placeholder="Mot de Passe"><br>
                        </div>           
                    </section>
                    <p class="error"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                    <section title="Button" class="envoyer">
                        <button type="submit" class="btn btn-secondary">Envoyer</button>
                    </section>
                </form>
                </div>
            </div>
            <footer class="page-footer foot" style="margin-top : -100px;">
                <div class="footer-copyright fin_page">
                    <p>© 2024 Projet Codevsi Groupe 110</p>
                </div>
            </footer>
    </body>

</html>