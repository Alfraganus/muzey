<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\modules\admin\service\ContentService;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
$adresses  =  ContentService::getContentType(ContentService::CONTENT_TYPE_FLIAL,true,'uz',7,'asc');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="/img/logo.jpg">
</head>
<body>
<?php $this->beginBody() ?>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-12 px-5 text-center">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-exclamation-triangle text-primary me-2"></small>
               <center> <small>Diqqat! sayt test holatida ishlamoqda!</small></center>
            </div>
        </div>

    </div>
</div>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="/" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="/img/logo.jpg" alt="Icon">
<!--        <h1 class="m-0 text-primary">O'lkashunoslik Muzeyi</h1>-->
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
            <a href="/" class="nav-item nav-link <?= Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? 'active' : '' ?>">Bosh sahifa</a>
            <a href="<?= Url::to(['about-museum']) ?>" class="nav-item nav-link <?= Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'about-museum' ? 'active' : '' ?>">Muzey haqida</a>
            <a href="<?= Url::to(['eksponatlar']) ?>" class="nav-item nav-link <?= Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'eksponatlar' ? 'active' : '' ?>">Eksponatlar</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle <?= Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'single-page' ? 'active' : '' ?>" data-bs-toggle="dropdown">Filiallar</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <?php foreach ($adresses as $address): ?>
                        <?php $addressInfo = $address->contentInfos[0] ?? null; ?>
                        <a href="<?= Url::to(['single-page', 'id' => $address->id]) ?>" class="dropdown-item"><?= $addressInfo->title ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <a href="<?= Url::to(['contact']) ?>" class="nav-item nav-link <?= Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'contact' ? 'active' : '' ?>">Bog'lanish</a>
        </div>

    </div>
</nav>
<!-- Navbar End -->


<?= $content ?>

<!-- Footer Start -->
<div class="container-fluid footer bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h5 class="text-light mb-4">Manzil</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Andijon shahar, Abdurauf Fitrat koʻchasi 259-uy</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+998 74 225 18 23 </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+998 74 225 41 07</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@andijanmuseum.uz</p>
            </div>

            <div class="col-lg-6 col-md-6">
                <h5 class="text-light mb-4">Sahifalar</h5>
                <a class="btn btn-link" href="/">Bosh sahifa</a>
                <a href="<?=Url::to(['about-museum'])?>" class="btn btn-link">Muzey haqida</a>
                <a href="<?=Url::to(['eksponatlar'])?>" class="btn btn-link">Eksponatlar</a>
                <a href="<?=Url::to(['contact'])?>" class="btn btn-link">Bog'lanish</a>
            </div>

        </div>
    </div>

<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
