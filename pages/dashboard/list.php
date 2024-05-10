<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-two-slider-area position-relative">
        <div class="swiper hero-two-slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-two-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-content">
                                    <div class="hero-two-slide-text-img"><img src="assets/images/slider/text-light.webp"
                                            width="427" height="232" alt="Image"></div>
                                    <h2 class="hero-two-slide-title">ANTI AGEING</h2>
                                    <p class="hero-two-slide-desc">Unlock the secrets to flawless beauty with our
                                        exclusive makeup collection. From captivating eyeshadow palettes to luscious
                                        lipsticks and radiant foundations, our curated range empowers you to express
                                        your unique style with confidence.</p>
                                    <div class="hero-two-slide-meta">
                                        <a class="btn btn-border-primary" href="?p=product">BUY NOW</a>
                                        <a class="ht-popup-video" data-fancybox data-type="iframe"
                                            href="https://player.vimeo.com/video/172601404?autoplay=1">
                                            <i class="fa fa-play icon"></i>
                                            <span>Play Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-thumb">
                                    <img src="assets/images/slider/slider3.webp" width="690" height="690" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-two-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-content">
                                    <div class="hero-two-slide-text-img"><img src="assets/images/slider/text-light.webp"
                                            width="427" height="232" alt="Image"></div>
                                    <h2 class="hero-two-slide-title">CLEAN FRESH</h2>
                                    <p class="hero-two-slide-desc">Indulge in the transformative power of makeup as you
                                        embark on a journey of self-discovery. Whether you're aiming for a natural
                                        everyday look or a glamorous evening ensemble, our versatile products cater to
                                        all occasions.</p>
                                    <div class="hero-two-slide-meta">
                                        <a class="btn btn-border-primary" href="?p=product">BUY NOW</a>
                                        <a class="ht-popup-video" data-fancybox data-type="iframe"
                                            href="https://player.vimeo.com/video/172601404?autoplay=1">
                                            <i class="fa fa-play icon"></i>
                                            <span>Play Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="hero-two-slide-thumb">
                                    <img src="assets/images/slider/slider4.webp" width="690" height="690" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-two-slider-pagination"></div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <?php
                if ($banners->rowCount() > 0) {
                    foreach ($banners as $row) {
                        ?>
                        <div class="col-sm-6 col-lg-4">
                            <!--== Start Product Category Item ==-->
                            <a href="?p=shop" class="product-banner-item">
                            <img src="upload/banner/<?= $row['upload_images']; ?>" style="width: 350px; height: 370px !important;" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
    </section>

    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Products</h2>
                        <p class="m-0">"Indulge in the luxurious beauty of our cosmetics collection. From vibrant
                            lipsticks to radiant foundations, each product is crafted to enhance your natural allure.
                            Elevate your everyday routine and unleash your inner glow with our premium cosmetics line."
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                <?php
                if ($product->rowCount() > 0) {
                    foreach ($product as $row) {
                        ?>
                        <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="?p=product-details&ID=<?= $row['ID'] ?>">
                                    <img src="upload/products/<?= $row['upload_image']; ?>" style="width: 350px; height: 400px !important;" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new">new</span>
                                </div>
                                <div class="product-info">
                                    <div class="product-rating"></div>
                                    <h4 class="title"><a href="?p=product-details&ID=<?= $row['ID'] ?>"><?= $row['title']; ?></a></h4>
                                    <div class="prices">
                                        <span class="price"><?= $row['price']; ?>gh</span>
                                        <span class="price-old"><?= $row['old_price']; ?>gh</span>
                                    </div>
                                    <div class="product-action">
                                        <button type="button" class="product-action-btn action-btn-cart">
                                            <a href="?p=payment"><span>Buy Now</span></a>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view"
                                            data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand fa-lg"></i> <!-- Adjusted icon size -->
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?"
                                                class="envelope-link">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <button type="button" class="product-action-btn action-btn-quick-view"
                                            data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand fa-lg"></i> <!-- Adjusted icon size -->
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a
                                                href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?">
                                                <i class="fa fa-envelope envelope-icon"></i> <!-- Adjusted icon size -->
                                            </a>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== End Product Area Wrapper ==-->

    <!--== End Product Area Wrapper ==-->




    <!--== Start Product Banner Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Your Ultimate Shopping Destination</h2>
                        <p class="m-0">"Transform Your Look with [Ecommerce Website Name]: Your Destination for
                            Makeovers! Discover the latest trends in cosmetics, skincare, and beauty tools to unleash
                            your true beauty potential. From bold makeup palettes to rejuvenating skincare routines,
                            embark on a journey of self-expression and confidence. Elevate your style, enhance your
                            features, and embrace your unique beauty with us!"</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                <?php
                if ($product_video->rowCount() > 0) {
                    foreach ($product_video as $row) {
                        ?>
                        <div class="col-6 col-lg-4 mb-4 mb-sm-10">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="?p=video_product-details&ID=<?= $row['ID'] ?>">
                                        <div
                                            style="position: relative; overflow: hidden; width: 100%; padding-top: 56.25%; height: 450px;">
                                            <video autoplay muted loop
                                                style="position: absolute; top: 0; left: 0; width: 100%;">
                                                <source src="upload/products/video/<?= $row['upload_video']; ?>"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                        <span class="flag-new">new</span>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <div class="product-action">
                                        <!-- <button type="button" class="product-action-btn action-btn-quick-view"
                                            data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button> -->
                                        <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a
                                                href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?">
                                                <i class="fa fa-envelope envelope-icon"></i>
                                            </a>
                                        </button>
                                    </div>
                                    <div class="product-action-bottom">
                                        <button type="button" class="product-action-btn action-btn-quick-view"
                                            data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a
                                                href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?">
                                                <i class="fa fa-envelope envelope-icon"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
    </section>




    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="section-space pt-0">
        <div class="container">
            <div class="swiper brand-logo-slider-container">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="assets/images/brand-logo/1.webp" width="155" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="assets/images/brand-logo/2.webp" width="241" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="assets/images/brand-logo/3.webp" width="147" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                    <div class="swiper-slide brand-logo-item">
                        <!--== Start Brand Logo Item ==-->
                        <img src="assets/images/brand-logo/4.webp" width="196" height="110" alt="Image-HasTech">
                        <!--== End Brand Logo Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Blog posts</h2>
                        <p>Applying makeup can be a form of self-care, allowing you to take a few moments for yourself
                            each day. It's a chance to pamper your skin, indulge in some me-time, and unleash your
                            creativity.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n9">
                <?php 
                if ($blog->rowCount() > 0) {
                    foreach ($blog as $row) {
                        ?>
                        <div class="col-sm-6 col-lg-4 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="?p=blog-details&ID=<?=$row['ID'];?>" class="thumb">
                                <img src="upload/blog/<?= $row['upload_image']; ?>" style="width: 350px; height: 370px !important;" alt="Image-HasTech">
                                </a>
                                <div class="content">
                                    <a class="post-category" href="?p=blog">beauty</a>
                                    <h4 class="title"><a href="?p=blog-details&ID=<?=$row['ID'];?>"><?= $row['title'] ?></a></h4>
                                    <ul class="meta">
                                        <li class="author-info"><span>By:</span> <a href="?p=blog"><?= $row['fname'] ?></a></li>
                                        <li class="post-date"><?= $row['date'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
        <div class="sec