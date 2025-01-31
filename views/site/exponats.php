<!-- Courses Start -->

<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Eksponatlar</h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>


<div class="container-xxl py-6">
    <div class="container">

        <div class="row g-4 justify-content-center">
            <?php foreach ($exponats as $exponat): ?>
                <?php $exponatInfo = $exponat->contentInfos[0] ?? null; ?>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-light overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <h5 class="mb-3 mt-3"><?= $exponatInfo->title ?? "" ?></h5>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" style="width: 100%;height: 330px" src="/uploads/<?= $exponat->media->file_name ?>" alt="">

                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Courses End -->

