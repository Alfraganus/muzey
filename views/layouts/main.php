<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
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

</head>
<body>
<?php $this->beginBody() ?>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>



<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img src="/img/logo.jpg" style="width: 50px;height: 50px">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Бош сахифа</a>
          <!--  <a href="about.html" class="nav-item nav-link">About</a>
            <a href="courses.html" class="nav-item nav-link">Courses</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>-->
            </div>
        </div>
    </div>
</nav>

<?= $content ?>
<div class="container-fluid bg-dark text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h4 class="text-white mb-4">Bog'lanish</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Eski shahar Andijon </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+998 99 999 99 99</p>
            </div>

            <div class="col-lg-6 col-md-6">
                <h4 class="text-light mb-4">Sahifalar</h4>
                <a class="btn btn-link" href="">Bosh sahifa</a>

            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
