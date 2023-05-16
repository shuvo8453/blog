<?php

use App\controller\InformationController;
use App\controller\UserController;

require_once realpath(__DIR__ . '../../vendor/autoload.php');
require_once realpath(__DIR__ . '../../config.php');

UserController::authCheck();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    InformationController::update($_POST['name'], $_POST['email'] , $_POST['oldPassword'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/templatemo-xtra-blog.css" rel="stylesheet">
</head>
<body>
<?php require __DIR__ . '/layout/sidebar.php'; ?>
<div class="container-fluid">
    <main class="tm-main">
        <div class="row">
            <div class="col-6 tm-color-primary">
                <h5>name : <?= $name ?></h5>
            </div>
            <div class="col-6 tm-color-primary">
                <h5>email : <?= $email ?></h5>
            </div>
        </div>
        <div class="row tm-row tm-mb-120">
            <div class="col-12">
                <h2 class="tm-color-primary tm-post-title tm-mb-60">edit information</h2>
            </div>
            <div class="col-lg-7 tm-contact-left">
                <form method="POST" action="/view/user.php" class="mb-5 ml-auto mr-0 tm-contact-form">
                    <div class="form-group row mb-4">
                        <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Name</label>
                        <div class="col-sm-9">
                            <input class="form-control mr-0 ml-auto" name="name" id="name" type="text">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Email</label>
                        <div class="col-sm-9">
                            <input class="form-control mr-0 ml-auto" name="email" id="email" type="email">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Old
                            Password</label>
                        <div class="col-sm-9">
                            <input class="form-control mr-0 ml-auto" name="oldPassword" id="oldPassword" type="password">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">New
                            Password</label>
                        <div class="col-sm-9">
                            <input class="form-control mr-0 ml-auto" name="password" id="password" type="password">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col-12">
                            <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="row tm-row">
            <div class="col-md-6 col-12 tm-color-gray">
                Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
            </div>
            <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                Copyright 2020 Xtra Blog Company Co. Ltd.
            </div>
        </footer>
    </main>
</div>
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/templatemo-script.js"></script>
</body>
</html>