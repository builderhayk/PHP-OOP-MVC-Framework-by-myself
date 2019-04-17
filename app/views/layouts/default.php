<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <?= $this->content('head'); ?>
    <title><?= $this->setSiteTitle('head'); ?></title>
</head>
<body>
<?php include "main_menu.php"; ?>
<div class="container-fluid" style="min-height:calc(100%-125px);">
    <div class="container">
        <?= $this->content('body'); ?>
    </div>
</div>


<script src="<?= PROOT ?>js/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?= PROOT ?>js/bootstrap.min.js"></script>


</body>
</html>