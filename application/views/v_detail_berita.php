<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Detail Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">

            <!-- Blog Content -->
            <div class="col-lg-8">
                <div class="blog_content">
                    <div class="blog_title"><?= $detail_berita->judul_berita ?></div>
                    <div class="blog_meta">
                        <ul>
                            <li>Post on <a href="#"><?= $detail_berita->tgl_berita ?></a></li>
                            <li>By <a href="#"><?= $detail_berita->nama_user ?></a></li>
                        </ul>
                    </div>
                    <div class="blog_image"><img src="<?= base_url('gambar_berita/' . $detail_berita->gambar_berita); ?>" alt=""></div>
                    <p><?= $detail_berita->isi_berita ?></p>
                    <div class="blog_images">
                        <div class="row">
                            <div class="col-lg-6 blog_images_col">
                                <div class="blog_image_small"><img src="images/blog_images_1.jpg" alt=""></div>
                            </div>
                            <div class="col-lg-6 blog_images_col">
                                <div class="blog_image_small"><img src="images/blog_images_2.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <p>But what is it like to be an 18-year-old and have the expectation set that you will talk during sex? I, for one, have never been part of a community with that expectation. Spending time at Antioch’s orientation, I thought about how that might change your sexual interactions for the rest of your life.</p>
                </div>
                <div class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    <div class="blog_tags">
                        <span>Tags: </span>
                        <ul>
                            <li><a href="#">Education</a>, </li>
                            <li><a href="#">Math</a>, </li>
                            <li><a href="#">Food</a>, </li>
                            <li><a href="#">Schools</a>, </li>
                            <li><a href="#">Religion</a>, </li>
                        </ul>
                    </div>
                    <div class="blog_social ml-lg-auto">
                        <span>Share: </span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Comments -->
                <div class="comments_container">

                </div>
            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">


                    <!-- Latest News -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Latest News</div>
                        <div class="sidebar_latest">

                            <!-- Latest Course -->
                            <?php foreach ($latets_berita as $key => $value) { ?>


                                <div class="latest d-flex flex-row align-items-start justify-content-start">
                                    <div class="latest_image">
                                        <div><img src="<?= base_url('gambar_berita/' . $value->gambar_berita) ?>" alt=""></div>
                                    </div>
                                    <div class="latest_content">
                                        <div class="latest_title"><a href="<?= base_url('home/detail_berita/' . $value->slug_berita) ?>"><?= $value->judul_berita ?>...</a></div>
                                        <div class="latest_price"><?= $value->tgl_berita ?></div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>



                </div>
            </div>
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