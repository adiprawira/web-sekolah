<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Guru & Karyawan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->


<div class="contact">

    <!-- Contact Info -->

    <div class="contact_info_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Data Guru & Karyawan</h2><br>
                </div>
                <!-- Team Item -->

                <?php foreach ($guru as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 team_col">
                        <div class="team_item">
                            <div class="team_image"><img src="<?= base_url('foto_guru/' . $value->foto_guru); ?>" alt=""></div>
                            <div class="team_body">
                                <div class="team_title"><a href="#"><?= $value->nip ?></a></div>
                                <div class="team_title"><a href="#"><?= $value->nama_guru ?></a></div>
                                <div class="team_subtitle"><?= $value->tempat_lahir ?>, <?= $value->tgl_lahir ?> </div>
                                <div class="team_subtitle"><?= $value->nama_mapel ?> </div>
                                <div class="team_subtitle"><?= $value->pendidikan ?> </div>
                                <div class="social_list">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<!-- Newsletter -->

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