<!-- Courses Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown text-center">Eksponatlar</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>


<div class="container-xxl py-6">
    <div class="container">

        <div class="row g-4 justify-content-center">
            <?php foreach ($exponats as $exponat): ?>
                <?php $exponatInfo = $exponat->contentInfos[0] ?? null; ?>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12">
                        <a class="animal-item" href="/uploads/<?= $exponat->media->file_name ?>" data-lightbox="animal">
                            <div class="position-relative">
                                <center>
                                    <img style="height: 300px;width: 100%" class="img-fluid"
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
<!-- Courses End -->

