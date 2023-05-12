<?php

use App\controller\UserController;

require_once realpath(__DIR__ . '/vendor/autoload.php');
require_once realpath(__DIR__ . '/config.php');
$users = UserController::getUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="/view/asset/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="/view/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/view/asset/css/templatemo-xtra-blog.css" rel="stylesheet">
    <!--

    TemplateMo 553 Xtra Blog

    https://templatemo.com/tm-553-xtra-blog

    -->
</head>
<body>
    <?php include realpath('view/layout/sidebar.php'); ?>
    <div class="container-fluid">
        <main class="tm-main">
            <?php include realpath('view/layout/searchbar.php'); ?>
            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="view/asset/img/img-01.jpg" alt="Image" class="img-fluid">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>
                    </a>
                    <p class="tm-pt-30">
                        There is a clickable image with beautiful hover effect and active title link for each post item.
                        Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary">June 24, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by Admin Nat</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-60">
                        <div class=" tm-post-link-inner">
                            <img src="view/asset/img/img-02.jpg" alt="Image" class="img-fluid">
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Multi-purpose blog template</h2>
                    </a>
                    <p class="tm-pt-30">
                        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog</a>  is a multi-purpose HTML CSS template from TemplateMo website.
                        Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Creative . Design . Business</span>
                        <span class="tm-color-primary">June 16, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>48 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="view/asset/img/img-03.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">How can you apply Xtra Blog</h2>
                    </a>
                    <p class="tm-pt-30">
                        You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder.
                        You can also use this for your clients. Thank you for choosing us.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Music . Audio</span>
                        <span class="tm-color-primary">June 11, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>24 comments</span>
                        <span>by John Walker</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="view/asset/img/img-04.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">A little restriction to apply</h2>
                    </a>
                    <p class="tm-pt-30">
                        You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection
                        website. This is strongly prohibited as we worked hard for this template. Please contact TemplateMo for more information.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Artworks . Design</span>
                        <span class="tm-color-primary">June 4, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>72 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="view/asset/img/img-05.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Color hexa values of Xtra Blog</h2>
                    </a>
                    <p class="tm-pt-30">
                        If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.
                        <br>
                        Title #099 New #0CC <br>
                        <span class="tm-color-primary">Text #999 Line #CCC Next #0CC Prev #F0F0F0</span>
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Creative . Video . Audio</span>
                        <span class="tm-color-primary">May 31, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>84 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="view/post.php" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="view/asset/img/img-06.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Donec convallis varius risus</h2>
                    </a>
                    <p class="tm-pt-30">
                        Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor consectetur luctus.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Visual . Artworks</span>
                        <span class="tm-color-primary">June 16, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>96 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php include realpath('view/layout/footer.php'); ?>
        </main>
    </div>
<script src="/view/asset/js/jquery.min.js"></script>
<script src="/view/asset/js/templatemo-script.js"></script>
</body>
</html>
