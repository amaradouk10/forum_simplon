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
include_once 'classes/Message.php';

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

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">                        
                                    <h2 class="commentpost fw-bold p-3 fst-italic"><u> Contactez Nous</u></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="contact-form" class="form" action="traitementMess.php" method="POST" role="form">
                                        <div class="mb-3 visually-hidden">
                                            <input type="text" name="user_id"  value="<?php echo $_GET['id']; ?>">
                                        </div>                           
                                        <div class="form-group mt-4">
                                            <input type="email" class="form-control formc border"  name="mail" placeholder="Entrez votre Email" tabindex="2" required>
                                        </div>                            
                                        <div class="form-group mt-4">
                                            <input type="text" class="form-control formc border"  name="objet_mess" placeholder="Objet" tabindex="3">
                                        </div>                            
                                        <div class="form-group mt-4">
                                            <textarea rows="11" cols="50" name="contenu" class="form-control formc border"  placeholder="Votre message..." tabindex="4" required></textarea>                                 
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-start-order fw-bold">Envoyer Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                           