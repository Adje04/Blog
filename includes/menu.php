<header class="menu-bar">
    <table>
        <tr>
            <td>Blog</td>
            <td>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="/Blog/index.php" class="<?= (!isset($_GET["page"]) ?
                                                                "menu-active" : ""); ?> nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Blog/pages/articles.php?page=articles" class="<?= (isset($_GET["page"])
                                                                                    && $_GET["page"] == "articles" ? "menu-active" : ""); ?> nav-link active" aria-current="page">Articles</a>
                    </li>

                    <?php
            if (!isset($_COOKIE['username'])) {
            ?>
                  <li class="nav-item">
                        <a href="/Blog/pages/inscription.php?page=inscription" class="<?= (isset($_GET["page"])
                                                                                            && $_GET["page"] == "inscription" ? "menu-active" : ""); ?> nav-link active" aria-current="page">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Blog/pages/connexion.php?page=connexion" class="<?= (isset($_GET["page"])
                                                                                        && $_GET["page"] == "connexion" ? "menu-active" : ""); ?> nav-link active" aria-current="page">Connexion</a>
                    </li>
            <?php
            }
            ?>
                  
                </ul>
            </td>
            <?php
            if (isset($_COOKIE['username'])) {
            ?>
                <td>
                    <?= $_COOKIE['username']; ?> <a href="/Blog/processing/logout.php">Se deconnecter</a>
                </td>
            <?php
            }
            ?>
        </tr>
    </table>
</header>


  