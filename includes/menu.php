<header class="menu-bar">
    <table>
        <tr>
            <td>Blog</td>
            <td>
                <ul>
                    <li>
                        <a href="/Blog/index.php" class="<?= (!isset($_GET["page"]) ?
                                                                "menu-active" : ""); ?>">Home</a>
                    </li>
                    <li>
                        <a href="/Blog/pages/articles.php?page=articles" class="<?= (isset($_GET["page"])
                                                                                    && $_GET["page"] == "articles" ? "menu-active" : ""); ?>">Articles</a>
                    </li>

                    <?php
            if (!isset($_COOKIE['username'])) {
            ?>
                  <li>
                        <a href="/Blog/pages/inscription.php?page=inscription" class="<?= (isset($_GET["page"])
                                                                                            && $_GET["page"] == "inscription" ? "menu-active" : ""); ?>">Inscription</a>
                    </li>
                    <li>
                        <a href="/Blog/pages/connexion.php?page=connexion" class="<?= (isset($_GET["page"])
                                                                                        && $_GET["page"] == "connexion" ? "menu-active" : ""); ?>">Connexion</a>
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