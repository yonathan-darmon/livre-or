<nav>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="#">Le livre d'or</a></li>
        <li><a href="#">Contact</a></li>
        <?php
        if (isset($_SESSION['login'])) {
            echo "<li><a href='#'>Ajout d'un commentaire</a></li>";
        } else {
            echo "";
        }
        ?>
    </ul>

</nav>

