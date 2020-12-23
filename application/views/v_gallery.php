<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Gallery Foto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->


<div class="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Welcome To Gallery Foto</h2>
                    <div class="section_subtitle">
                    </div>
                </div>
            </div>
        </div>
        <div class="row about_row">
            <?php foreach ($gallery as $key => $value) { ?>

                <!-- About Item -->
                <div class="col-lg-4 about_col about_col_left">
                    <div class="about_item">
                        <div class="about_item_image"><img src="<?= base_url('sampul/' . $value->sampul) ?>" width="250px" height="180px"></div>
                        <div class="about_item_title"><a href="<?= base_url('home/detail_gallery/' . $value->id_gallery) ?>"><?= $value->nama_gallery ?></a></div>
                        <div class="about_item_text">
                            Jumlah : <?= $value->jml_foto ?> Foto
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</div>










<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/newsletter.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">
                </div>
            </div>
        </div>
    </div>
</div>