
<!-- Header Start -->
<div class="container-fluid bg-dark p-0 mb-5">
    <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <h1 class="display-4 text-light mb-5 text-center">O'lkashunoslik muzeyi rasmiy veb sahifasi</h1>
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
                <?php   foreach ($slides as $slide): ?>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="/uploads/<?= $slide->media->file_name ?>" alt="">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<!--                <p><span class="text-primary me-2">#</span>Welcome To Zoofari</p>-->
                <h1 class="display-5 mb-4"><?= $aboutMuseum->contentInfos[0]?->title??"" ?></h1>
                <p class="mb-4">  <?= $aboutMuseum?->getShortDescription(50)??"" ?></p>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Музей дастлаб 1934 йилда ташкил этилган </h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Музейда 1 та филиал ва 4 бўлимлар фаолият юритади</h5>
                <h5 class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Музей фондларида 156 мингдан зиёд ноёб тарихий xужжатлар сақланмоқда</h5>
                <a class="btn btn-primary py-3 px-5 mt-3" href="">Batafsil</a>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="/uploads/<?= $aboutMuseum->media?->file_name??"" ?>" alt="">
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
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fa fa-building fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                <p class="text-white mb-0">Fliallar</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                <p class="text-white mb-0">Bo'limlar</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                <p class="text-white mb-0">Eksponatlar</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12345</h1>
                <p class="text-white mb-0">Tashrif buyuruvchilar</p>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->



<!-- Animal Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h1 class="display-5 mb-0"> <span class="text-primary">Eksponatlar</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Ko'proq</a>
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
                                <img style="height: 350px;width: 600px" class="img-fluid" src="/uploads/<?= $exponat->media->file_name ?>" alt="">
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
                <h1 class="display-5 mb-0">Tadbirlar <span class="text-primary"></span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="">Batafsil</a>
            </div>
        </div>
        <div class="row g-4">
            <?php $i = 0; foreach ($events as $event): $i++ ?>
                <?php $eventInfo = $event->contentInfos[0] ?? null; ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="membership-item position-relative" style="height: 400px;">
                        <img class="img-fluid" src="/uploads/<?= $event->media->file_name ?>" alt="">
                        <h1 class="display-1"><?=$i?></h1>
                        <h5 class="text-white mb-3"><?= $eventInfo->title ?? "" ?></h5>

                        <a class="btn btn-outline-light px-4 mt-3" href="">Batafsil</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!--          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                          <div class="membership-item position-relative">
                              <img class="img-fluid" src="img/animal-lg-2.jpg" alt="">
                              <h1 class="display-1">02</h1>
                              <h4 class="text-white mb-3">Standard</h4>
                              <h3 class="text-primary mb-4">$149.00</h3>
                              <p><i class="fa fa-check text-primary me-3"></i>15% discount</p>
                              <p><i class="fa fa-check text-primary me-3"></i>4 adult and 4 child</p>
                              <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                              <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                          <div class="membership-item position-relative">
                              <img class="img-fluid" src="img/animal-lg-3.jpg" alt="">
                              <h1 class="display-1">03</h1>
                              <h4 class="text-white mb-3">Premium</h4>
                              <h3 class="text-primary mb-4">$199.00</h3>
                              <p><i class="fa fa-check text-primary me-3"></i>20% discount</p>
                              <p><i class="fa fa-check text-primary me-3"></i>6 adult and 6 child</p>
                              <p><i class="fa fa-check text-primary me-3"></i>Free animal exhibition</p>
                              <a class="btn btn-outline-light px-4 mt-3" href="">Get Started</a>
                          </div>
                      </div>-->
        </div>
    </div>
</div>
<!-- Membership End -->


<!-- Visiting Hours Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">Ish vaqtlari</h1>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span>Monday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Tuesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Wednesday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Thursday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Friday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Saturday</span>
                        <span>9:00AM - 6:00PM</span>
                    </li>
                    <li class="list-group-item">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 text-white mb-5">Manzil</h1>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Office</td>
                        <td>123 Street, New York, USA</td>
                    </tr>
                    <tr>
                        <td>Zoo</td>
                        <td>123 Street, New York, USA</td>
                    </tr>
                    <tr>
                        <td>Ticket</td>
                        <td>
                            <p class="mb-2">+012 345 6789</p>
                            <p class="mb-0">ticket@example.com</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Support</td>
                        <td>
                            <p class="mb-2">+012 345 6789</p>
                            <p class="mb-0">support@example.com</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->


