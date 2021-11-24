<nav>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="livre-or.php">Le livre d'or</a></li>
        <li><a href="https://github.com/yonathan-darmon/livre-or">Contact</a></li>
        <?php
        if (isset($_SESSION['login'])) {
            echo "<li><a href='#'>Ajout d'un commentaire</a></li>";
        } else {
            echo "";
        }
        ?>
    </ul>

</nav>

