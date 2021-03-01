<?php

// Inclusion des fichiers principaux
include_once 'functions/functions.php';
include_once 'config/config.php';
include_once 'config/db.php';
include_once 'inc/header.php';



include_once 'classes/users.php';
include_once 'classes/categories.php';
include_once 'classes/posts.php';

$allPost = Posts::getAllPosts();
$allCategories = Categories::getAllCategories();
$lastPost = Posts::getLastPost();

?>

        <div class="container">
            <div class="row">
            <div class="col-md-9">
                <div class="contentsection clear">
                    <div class="maincontent clear py-2 px-4">
                        <div class="samepost clear">
                        <h3 class="commentpost border-bottom border-secondary border-3 fw-bold fs-1 text-center">Votre publication ici</h3>
                            <div class="container">
                                <form id="contact-form" action="traitementPost.php" method="POST">
                                    <div class="controls ">   
                                        <div class="row mt-3 justify-content-center">
                                            <div class="col-md-6">
                                                <div class="form-group text-center"> 
                                                    <label class="col-form-label commentpost fw-bold fs-5">Veuillez choisir une catégorie :</label>
                                                    <select class="form-select border" aria-label="Default select example" name="category_id"> 
                                                        <option selected>Choisir une catégorie</option>
                                                            <?php
                                                            foreach($allCategories as $indexe => $cat): ?>
                                                            <option value="<?= $cat['id']; ?> "><?php echo $cat['name']; ?></option>
                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="row text-center justify-content-center">
                                            <label class="col-form-label commentpost fw-bold fs-5">Veuillez entrer un titre :</label>
                                            <div class="col-md-6">
                                                <input type="text" name="title" class="form-control border bordures" placeholder="Titre" >
                                            </div>
                                        </div>
                                        <div class="mb-3 visually-hidden">
                                            <input type="text" name="user_id"  value="<?php echo $_GET['id']; ?>">
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="form-group text-center"> 
                                                    <label for="" class=" fw-bold fs-5 mb-1 commentpost">Entrez votre publication</label> 
                                                    <textarea name="content" class="form-control border" placeholder="Entrez votre publication." rows=11 required="required" data-error="SVP, laissez une publication."></textarea> 
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3"> <button type="submit" class="btn butcom fw-bold">Publier</button> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                                    
                                            
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





