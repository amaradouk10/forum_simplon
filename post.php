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

$allPost = Posts::getAllPosts();
$allCategories = Categories::getAllCategories();
$lastPost = Posts::getLastPost();
$onePost = Posts::getOnePost($_GET['id']);
$postComments = Comments::getPostComments($_GET['id']);

?>
        <div class="container">
            <div class="row">
            <div class="col-md-9">
                <div class="contentsection clear">
                    <div class="maincontent clear py-2 px-4">
                        <div class="samepost clear">
                            
                            
                            <a href="#"><h3 class=""><?= $onePost['title']; ?></h3></a>
			                <h6 class="fw-bold"><?= format::formatdate($onePost['date']); ?>  Par  <a href="#"><?= $onePost['firstname'] .' '. $onePost['lastname']; ?></a></h6>
			                <p><?= $onePost['content']; ?></p>
                           

                        </div>
                        <div class=" clear">
                            <h3 class="commentpost border-bottom border-secondary border-3 fw-bold fs-1">Commentaires</h3>
                                <?php
                                    foreach($postComments as $indexe => $comments): ?>	            
                                        <h6 class="forcolor fw-bold" ><?= format::formatdate($comments['date']); ?> Par <a href="#" ><?= $comments['firstname']; ?></a></h6>
                                        <p><?= $comments['content']; ?></</p>
                                        <hr >
                                <?php endforeach; ?>
                                <a class="" href="commentaires.php?id=<?= $_GET['id']; ?>">
                                    <button class="btn bouton " type="button" >
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        <span class="fw-bold">Tous les commentaires...</span>
                                    </button>
                                </a>
                        </div>
                    </div>
                </div>
                
            </div>
            

                
                <?php
                    include_once 'inc/sideBar.php';
                ?>
                </div>
            </div>
                
            

        </div>
    </div>
    <?php
        include_once 'inc/footer.php';
    ?>