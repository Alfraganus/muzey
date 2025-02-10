<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown text-center"><?php echo Yii::t('app', 'contact_title'); ?></h1>
        <nav aria-label="breadcrumb animated slideInDown">
        </nav>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d534.0037930165299!2d72.34664672246453!3d40.788814771131506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bceb5904cb819d%3A0x5b287339de1ec888!2sAndijon%20viloyat%20o%60lkashunoslik%20muzeyi!5e0!3m2!1sen!2s!4v1738320648351!5m2!1sen!2s"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4 text-center"><?php echo Yii::t('app', 'feedback_title'); ?></h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="name" placeholder="<?php echo Yii::t('app', 'placeholder_name'); ?>">
                                <label for="name"><?php echo Yii::t('app', 'label_name'); ?></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 bg-light" id="email" placeholder="<?php echo Yii::t('app', 'placeholder_email'); ?>">
                                <label for="email"><?php echo Yii::t('app', 'label_email'); ?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="<?php echo Yii::t('app', 'placeholder_subject'); ?>">
                                <label for="subject"><?php echo Yii::t('app', 'label_subject'); ?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 bg-light" placeholder="<?php echo Yii::t('app', 'placeholder_message'); ?>" id="message" style="height: 150px"></textarea>
                                <label for="message"><?php echo Yii::t('app', 'label_message'); ?></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" type="submit"><?php echo Yii::t('app', 'submit_button'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
