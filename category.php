<?php

// Inclusion des fichiers principaux
include_once 'functions/functions.php';
include_once 'config/config.php';
include_once 'config/db.php';
include_once 'inc/header.php';



include_once 'classes/users.php';
include_once 'classes/categories.php';
include_once 'classes/Posts.php';
include_once 'classes/comments.php';
include_once 'classes/format.php';


$postBy = Posts::getPostsBy($_GET['id']);
$allCategories = Categories::getAllCategories();
$lastPost = Posts::getLastPost();


?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="contentsection clear">
                <div class="maincontent clear py-2 px-4">
                    <div class="samepost clear">


                        <?php

                        foreach ($postBy as $index => $cpost) : ?>



                            <a href="">
                                <h3 class="fs-5 mb-3 p-2 fw-bold"><?= $cpost['title'] ?></h3>
                            </a>
                            <h6 class="fw-bold"><?= format::formatdate($cpost['date']); ?> Par <a href="#"><?= $cpost['firstname'] . ' ' . $cpost['lastname']; ?></a></h6>
                            <p class="fs-6 lh-2 "><?= format::textshorten($cpost['content']); ?></p>
                            <button type="button" class="btn btn-outline-warning float-end"><a href="post.php?id=<?= $cpost['id']; ?>" class="text-decoration-none fs-6">Voir plus</a></button>
                        <?php endforeach; ?>
                            <?php
                        if(count($postBy)==0){
                                echo "<h2>Aucune publication disponible pour cette catégorie</h2>"; 
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once 'inc/sideBar.php';
        ?>
    </div>
</div>

<?php

include_once 'inc/footer.php';
?>