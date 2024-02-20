<?php include("view/header.php"); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>News Articles</h1>

            <?php
            $articles = [
                [
                    'title' => 'Article Title 1',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nunc id aliquet ultrices, nisl lectus tincidunt nunc, ac luctus nunc nunc in nunc.',
                    'link' => '#'
                ],
                [
                    'title' => 'Article Title 2',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nunc id aliquet ultrices, nisl lectus tincidunt nunc, ac luctus nunc nunc in nunc.',
                    'link' => '#'
                ],
                [
                    'title' => 'Article Title 3',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nunc id aliquet ultrices, nisl lectus tincidunt nunc, ac luctus nunc nunc in nunc.',
                    'link' => '#'
                ],
                // Add more articles here...
            ];
            ?>

            <?php foreach ($articles as $article): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article['title']; ?></h5>
                        <p class="card-text"><?php echo $article['content']; ?></p>
                        <a href="<?php echo $article['link']; ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include("view/footer.php"); ?>