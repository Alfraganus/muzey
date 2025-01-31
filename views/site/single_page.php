<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4"><?=$model->title?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>

<div class="container-xxl">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">

                <p class="mb-5"><?=$model->content?></p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
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