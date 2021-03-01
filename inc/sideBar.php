<div class="col-md-3">
    <div class="sidebar mt-0 mb-2 p-3">
        <div class="samesidebar mb-3">
            <h3 class="p-2 fw-bold">Derniers Posts</h3>
            <ul class="p-0 m-0 ">
                <li class="fs-6"><a href="post.php?id=<?= $lastPost['id']; ?>" class="text-decoration-none"><?= $lastPost['title']; ?></a></li>
            </ul>
        </div>
        <div class="samesidebar mb-3">
            <h3 class="p-2 fw-bold">Categories</h3>
            <ul class="p-0 m-0 ">

                <?php
                foreach ($allCategories as $indexe => $category) : ?>
                    <li class="fs-6"><a href="category.php?id=<?php echo $category['id'];?>"class=" text-decoration-none"><?= $category['name'] ?></a></li>
                <?php endforeach; ?>

            </ul>
        </div>
        <div class="samesidebar clear mb-3">
            <h3 class="p-2 fw-bold">Liens Utiles</h3>
            <ul class="p-0 m-0 ">
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">Google </a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">Bootstrap </a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">Youtube</a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">Grafikart </a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">stack overflow</a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">Codingame</a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">github</a></li>
                <li class="fs-6"><a target="_blank" href="#" class="text-decoration-none">w3school</a></li>
            </ul>
        </div>
    </div>
</div>
</div>