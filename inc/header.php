<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/accueil.css">
    <link rel="stylesheet" href="styles/bootstrap/css/jquery.lightbox-0.5.css">
    <title>Lacsoft DEV</title>
</head>

<body>

    <div class="container">
        <div class="headersection text-light">
            <div class="col-md-6 d-flex">
                <div class="col-sm-3">
                    <img class="img-fluid" src="images/pngegg.png" alt="">
                </div>
                <div class="col-md-3">
                    <h2>Lacsoft Developpement</h2>
                    <h4>Forum</h4>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light navsection ">
            <div class="container-fluid " id="sli">
                <a class="navbar-brand text-light fw-bold fs-4" href="#">Bienvenue !</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active fs-3 fw-bold border-end border-warning " aria-current="page" href="accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-3 fw-bold border-end border-warning " href="newPost.php?id=<?= $_GET['id']; ?>">Publication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-3 fw-bold border-end border-warning " href="contact.php?id=<?= $_GET['id']; ?>">suggestions</a>
                        </li>
                    </ul>
                    <form class="d-flex" id="searchForm" action="search.php" method="GET" name="moteurSubmit">
                        <input class="form-control me-2" type="search" placeholder="Entrez mot-clé" <input type="text" value="<?php if (isset($_GET['moteur'])) { echo htmlspecialchars($_GET['moteur']);
                                                                                                                                   
                                                                                                                                } ?>" name="moteur" id="moteur" />
                        <button class="btn btn-outline-light" type="submit" name="s">Recherche</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">

        <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
            <div class="carousel-inner slidersection mb-3">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="images/slideshow/01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/slideshow/02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/slideshow/03.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="images/slideshow/04.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    </div>