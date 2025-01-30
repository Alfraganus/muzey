<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4 text-center"><?=$model->title?></h1>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">

                <p class="mb-5"><?=$model->content?></p>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" >
                    <img class="position-absolute w-100 h-100"
                         src="/uploads/<?=$model->media->file_name??""?>"
                         alt=""
                         style="height: 450px !important;width: 100% !important;"
                    >
                </div>
            </div>
        </div>
    </div>
</div>