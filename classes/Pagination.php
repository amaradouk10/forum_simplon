<?php
class Pagination
{

    static function allPage()
    {


        global $db;
        // On se connecte à là base de données


        $sql = 'SELECT * FROM `posts` ORDER BY `id` DESC;';

        // On prépare la requête
        $query = $db->prepare($sql);

        // On exécute
        $query->execute();

        // On récupère les valeurs dans un tableau associatif
        $publications = $query->fetchAll(PDO::FETCH_ASSOC);

        // On détermine sur quelle page on se trouve
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $currentPage = (int) strip_tags($_GET['page']);
        } else {
            $currentPage = 1;
        }

        $sql = 'SELECT COUNT(*) AS nb_articles FROM `posts`;';

        // On prépare la requête
        $query = $db->prepare($sql);

        // On exécute
        $query->execute();

        // On récupère le nombre d'articles
        $result = $query->fetch();

        $nbArticles = (int) $result['nb_articles'];

        // On détermine le nombre d'articles par page
        $parPage = 5;

        // On calcule le nombre de pages total
        $pages = ceil($nbArticles / $parPage);

        //  On calcule le nombre de pages total
        $pages = ceil($nbArticles / $parPage);

        // Calcul du 1er article de la page
        $premier = ($currentPage * $parPage) - $parPage;

        $sql = 'SELECT * FROM `posts` ORDER BY `id` DESC LIMIT :premier, :parpage;';

        // On prépare la requête
        $query = $db->prepare($sql);

        $query->bindValue(':premier', $premier, PDO::PARAM_INT);
        $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

        // On exécute
        $query->execute();

        // On récupère les valeurs dans un tableau associatif
        $articles = $query->fetchAll(PDO::FETCH_ASSOC);

    }
}


<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item disabled bg bg-warning" <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a class="page-link" href="./?page=<?= $currentPage - 1 ?>" tabindex="-1" aria-disabled="true">Précédent</a>
        </li>
        <?php for ($page = 1; $page <= $pages; $page++) : ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item" <?= ($currentPage == $page) ? "active" : "" ?>"><a class="page-link" <?= $page ?> href="./?page=<?= $page ?>">1</a></li>
        <?php endfor ?>
        <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
        <li class="page-item" <?= ($currentPage == $pages) ? "disabled" : "" ?>"><a class="page-link" href="/?page=<?= $currentPage + 1 ?>">Suivant</a></li>
    </ul>
</nav>