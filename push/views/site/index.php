<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <h1 class="display-4 text-light mb-5 text-center"><?=Yii::t('app', 'Andijon viloyat tarixi va madaniyati davlat muzeyi');?></h1>
                <div class="d-flex align-items-center pt-4 animated slideInDown" style="margin-left: 50%">
                    <!--                        <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Batafsil</a>-->
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/Te9Eg4AV_Fo" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <!--                    <h6 class="text-white m-0 ms-4 d-none d-sm-block">Ko'rish</h6>-->
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <?php use yii\helpers\Url;

                foreach ($slides as $slide): ?>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="/uploads/<?= $slide->media->file_name ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-4"><?= $aboutMuseum->contentInfos[0]?->title ?? "" ?></h1>
                <p class="mb-4">  <?= $aboutMuseum?->getShortDescription(50) ?? "" ?></p>
                <?php foreach ($aboutMuseumFacts as $fact): ?>
                    <?php $factInfo = $fact->contentInfos[0] ?? null; ?>
                    <h6 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i><?= $factInfo?->title ?> </h6>
                <?php endforeach; ?>
                <a class="btn btn-primary py-3 px-5 mt-3" href="<?=Url::to(['single-page','id'=>$aboutMuseum?->id])?>"><?=Yii::t('app','Batafsil')?></a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="/uploads/<?= $aboutMuseum->media?->file_name ?? "" ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <?php foreach ($bannerFacts as $banner): ?>
                <?php $bannerInfo = $banner->contentInfos[0] ?? null; ?>
                <?= $bannerInfo->description ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Animal Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0"><span class="text-primary"><?=Yii::t('app','Eksponatlar')?></span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="/site/eksponatlar"><?=Yii::t('app','Ko\'proq')?></a>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($exponats as $exponat): ?>
                <?php $exponatInfo = $exponat->contentInfos[0] ?? null; ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12">
                        <a class="animal-item" href="/uploads/<?= $exponat->media->file_name ?>" data-lightbox="animal">
                            <div class="position-relative">
                                <center>
                                    <img style="height: 350px;width: 600px" class="img-fluid"
                                         src="/uploads/<?= $exponat->media->file_name ?>" alt="">
                                </center>
                                <div class="animal-text p-4">
                                    <h5 class="text-white mb-0"><?= $exponatInfo->title ?? "" ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Animal End -->


<!-- Membership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0"><?=Yii::t('app','Tadbirlar')?> <span class="text-primary"></span></h1>
            </div>

        </div>
        <div class="row g-4">
            <?php $i = 0;
            foreach ($events as $event): $i++ ?>
                <?php $eventInfo = $event->contentInfos[0] ?? null; ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative" style="height: 400px;">
                        <img class="img-fluid" src="/uploads/<?= $event->media->file_name ?>" alt="">
                        <h1 class="display-1"><?= $i ?></h1>
                        <h5 class="text-white mb-3"><?= $eventInfo->title ?? "" ?></h5>

                        <a class="btn btn-outline-light px-4 mt-3" href="<?=Url::to(['single-page','id'=>$event->id])?>"><?=Yii::t('app','Batafsil')?></a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Membership End -->


<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5"><?=Yii::t('app','Ish vaqtlari')?></h1>
                <ul class="list-group list-group-flush">
                    <?php foreach ($workTimes as $workTime): ?>
                    <?php $workTimeInfo = $workTime->contentInfos[0] ?? null; ?>
                    <li class="list-group-item">
                        <span><?= $workTimeInfo->title ?? "" ?></span>
                        <span><?= $workTimeInfo->description ?? "" ?></span>
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 text-white mb-5"><?=Yii::t('app','Manzil')?></h1>
                <table class="table">
                    <tbody>
                    <?php foreach ($adresses as $adress): ?>
                    <?php $adressInfo = $adress->contentInfos[0] ?? null; ?>
                    <tr>
                        <td><?= $adressInfo->title ?? "" ?></td>
                        <td><?= $adressInfo->description ?? "" ?></td>
                    </tr>
                    <?php endforeach; ?>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->


