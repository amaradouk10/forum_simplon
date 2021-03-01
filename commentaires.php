<?php

// Inclusion des fichiers principaux
include_once 'functions/functions.php';
include_once 'config/config.php';
include_once 'config/db.php';
include_once 'inc/header.php';




include_once 'classes/users.php';
include_once 'classes/categories.php';
include_once 'classes/posts.php';
include_once 'classes/comments.php';
include_once 'classes/format.php';

$allPost = Posts::getAllPosts();
$allCategories = Categories::getAllCategories();
$lastPost = Posts::getLastPost();
$allComments = Comments::getAllComments($_GET['id']);

?>




<div class="container">
            <div class="row">
            <div class="col-md-9">
                <div class="contentsection clear">
                    <div class="maincontent clear py-2 px-4">
                        <div class="samepost clear">
                            <h3 class="commentpost border-bottom bordure border-1 fw-bold fs-3">Tous les commentaires</h3>
                            <?php
                                foreach($allComments as $indexe => $coms): ?>	            
                                    <h6 class="fw-bold"><?= format::formatdate($coms['date']); ?> Par <a href="#" ><?= $coms['firstname']; ?></a></h6>
                                    <p class="fst-italic"><?= $coms['content']; ?></</p>
                                    <hr>
                            <?php endforeach; ?>
                            <form action="traitementcom.php" method="POST" >
                                <div class="mb-3 visually-hidden">
                                    <input type="text" name="post_id" class="" value="<?=$_GET['id'];?>">
                                    <input type="text" name="user_id" class="" value="2">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label fs-3 fw-bold commentpost">Commenter ici :</label>
                                    
                                    <textarea  name="content" class="form-control border " placeholder="Entrez votre commentaire." rows=5 required="required" data-error="SVP, laissez une publication."></textarea> 
                                </div>
                                <button type="submit" class="btn butcom fw-bold">Submit</button>
                            </form>
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
