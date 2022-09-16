<?php
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"> 
            <title>Marine Chillaud | Portfolio</title>
            <link rel="stylesheet" href="./CSS/style.css">
        </head>

        <body>
            <header id='header'>
                <a href='index.ph'><img id='logo' src='' alt='MC Logo'></a>
                <nav>
                    <a href='index.php'>Accueil</a>
                    <a href='projets.php'>Projets</a>
                </nav>
                    <h1>Marine Chillaud</h1>
                    <h2>Apprentie codeuse</h2>
            </header>

            <section id='presentation'>
                <h3>1. Qui suis-je ?</h3>
                    <p>Ajouter description</p>
                    <img src='' alt='profil'>
            </section>

            <section id='projets'>
                <h3>2. Quelques projets</h3>
                    <section class='projet_gauche'>
                        <h4>Titre du projet</h4>
                            <p>Ajouter description</p>
                            <img src='' alt='projet 1'>
                    </section>
                    <section class='projet_droit'>
                        <h4>Titre du projet</h4>
                            <p>Ajouter description</p>
                            <img src='' alt='projet 2'>
                    </section>
                    <section class='projet_gauche'>
                        <h4>Titre du projet</h4>
                            <p>Ajouter description</p>
                            <img src='' alt='projet 3'>
                    </section>      
            </section>        
        </body>

        <footer>
            <section>
                <img src='./CSS/IMG/profil.jpg' alt='logo'>
            </section>

            <section>
                <h3>Me contacter</h3>
                    <form method='get'>
                        <label for='email'>Entrez votre email</label>
                        <input type='email' placeholder='email'>
                        <label for='message'>Tapez votre message</label>
                        <input type='text' placeholder='tapez votre message'>
                        <input type='submit' value='Envoyer'>
                    </form>
            </section>

            <section>
                <h3>Autre</h3>
                    <ul>
                        <li><a href='./CSS/IMG/CV_Chillaud_Marine.pdf'>CV</a></li>
                        <li>linkedin</li>
                        <li>Github</li>
                    </ul>
            </section>
        </footer>
    </html>