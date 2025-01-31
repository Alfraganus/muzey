<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <?php use yii\helpers\Url;

        foreach ($slides as $slide): ?>
            <?php $contentInfo = $slide->contentInfos[0] ?? null; ?>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/uploads/<?= $slide->media->file_name ?>" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-4 text-light mb-5 animated slideInDown">
                                        <?= $contentInfo->title ?? "" ?>
                                    </h1>
                                    <a href="<?= Url::to(['single-page', 'id' => $slide->id]) ?>"
                                       class="btn btn-primary py-sm-3 px-sm-5">Batafsil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <?php foreach ($contacts as $slide): ?>
                <?php $contentInfo = $slide->contentInfos[0] ?? null; ?>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s" style="padding-right: 10px">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-car text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5>    <?= $contentInfo->title ?? "" ?> </h5>
                                <span><?= $contentInfo->description ?? "" ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="/uploads/<?= $aboutMuseum->media?->file_name??"" ?>"
                         alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6 mb-4"><?= $aboutMuseum->contentInfos[0]?->title??"" ?></h1>
                    <p><?= $aboutMuseum?->getShortDescription(50)??"" ?></p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5"
                               href="<?= Url::to(['single-page', 'id' => $aboutMuseum?->id??null]) ?>">Batafsil</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Courses Start -->
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-4">So'ngi Tadbirlar</h1>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($events as $event): ?>
                <?php $eventInfo = $event->contentInfos[0] ?? null; ?>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center pt-5 pt-0">
                                <a style="text-decoration: none;text-underline: none" href="<?= Url::to(['single-page', 'id' => $event->id]) ?>">
                                <h5 class="mb-3"><?= $eventInfo->title ?? "" ?></h5>
                                </a>

                                <p><?= $aboutMuseum->getShortDescription(25) ?></p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i
                                                class="fa fa-calendar-alt text-primary me-2"></i><?= date('d-m-Y', strtotime($event->created_on)) ?>
                                    </li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img style="height: 350px" class="img-fluid" src="/uploads/<?= $event->media->file_name ?>" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2"
                                       href="<?= Url::to(['single-page', 'id' => $event->id]) ?>">Batafsil</a>
                                </div>
                            </div>
                        </div>

                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Courses End -->


<!-- Team Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-4">Eksponatlar</h1>
        </div>
        <div class="row g-0 team-items">
            <?php foreach ($exponats as $exponat): ?>
                <?php $exponatInfo = $exponat->contentInfos[0] ?? null; ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img style="height: 250px; width: 100%" class="img-fluid"
                                 src="/uploads/<?= $exponat->media->file_name ?>" alt="">

                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2"><?= $exponatInfo->title ?? "" ?></h5>
                            <span><?= $exponatInfo->description ?? "" ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Team End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

