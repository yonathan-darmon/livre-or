<nav>
    <ul>

        <?php
        if (!isset($_SESSION['login'])) {
            echo "<li><a href='../index.php'>Accueil</a></li>";
            echo "<li><a href='connexion.php'>Connexion</a></li>";
        }
        ?>
        <li><a href="livre-or.php">Le livre d'or</a></li>
        <li><a href="https://github.com/yonathan-darmon/livre-or">Contact</a></li>
        <?php
        if (isset($_SESSION['login'])) {
            echo "  <li><a href='profil.php'>Mes informations</a></li>";

            $deco = "<form action='#' method='post' id='deco'><input type='submit' name='deco' value='deconnexion'></form>";


        } else {
            echo "";
        }
        ?>

    </ul>
    <?php
    if (isset($deco)) {
        echo $deco;
    }
    ?>

</nav>
