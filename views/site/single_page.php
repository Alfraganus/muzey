
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown text-center"><?=$model->title?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
               <center>
                   <img style="height: 350px" class="img-fluid" src="/uploads/<?=$model?->media?->file_name?>" alt="">
               </center>
        </div>
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <p class="mb-4"><?=$model->content?></p>

            </div>

        </div>
    </div>
</div>


