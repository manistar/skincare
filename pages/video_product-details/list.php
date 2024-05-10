<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Product Detail</li>
                        </ol>
                        <h2 class="page-header-title">Product Detail</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing Single Product
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Details Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row product-details">
                <div class="col-lg-6">
                    <div class="product-details-thumb">
                        <div id="media-container">
                            <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 350px; ">
                                <source src="upload/products/video/<?= $product_relate['upload_video']; ?> "
                                    type="video/mp4">
                            </video>

                        </div>
                        <span class="flag-new">new</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <!--  -->
                        <h5 class="product-details-collection">Premioum collection</h5>
                        <h3 class="product-details-title"><?= $product_data['title'] ?></h3>
                        <!-- <div class="product-details-review">
                                    <button type="button" class="product-review-show">150 reviews</button>
                                </div> -->
                        <!--  -->

                        <!--  -->
                        <div class="product-details-qty-list">
                            <div class="qty-list-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="qtyList1"
                                    checked>
                                <label class="form-check-label" for="qtyList1"><?= $product_data['title'] ?>
                                    <b><?= $product_data['price'] ?>gh</b></label>
                            </div>

                            <!-- <div class="qty-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="qtyList2">
                                        <label class="form-check-label" for="qtyList2">25 ml bottol <b>$350.00</b> <span class="extra-offer">extra 25%</span></label>
                                    </div> -->
                        </div>
                        <!-- <div class="product-details-pro-qty">
                                    <div class="pro-qty">
                                        <input type="text" title="Quantity" value="01">
                                    </div>
                                </div> -->
                        <div class="product-details-shipping-cost">
                            <input class="form-check-input" type="checkbox" value="" id="ShippingCost" checked>
                            <label class="form-check-label" for="ShippingCost">Shipping from Spinyex Accra,
                                Ghana</label>
                        </div>
                        <div class="product-details-action">
                            <h4 class="price"><?= $product_data['price'] ?>gh</h4>
                            <div class="product-details-cart-wishlist">

                                <button type="button" class="btn-wishlist">
                                    <a href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20I'm%20about%20making%20this%20payment%20for%20<?= $product_data['title']; ?>%20"
                                        class="envelope-link"><i class="fa fa-envelope"></i>
                                    </a>
                                </button>
                                <button type="button" class="btn"><a href="?p=payment">Shop Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br /><br /><br />
            <div class="row">
                <div class="col-lg-7">
                    <div class="nav product-details-nav" id="product-details-nav-tab" role="tablist">
                        <button class="nav-link" id="specification-tab" data-bs-toggle="tab"
                            data-bs-target="#specification" type="button" role="tab" aria-controls="specification"
                            aria-selected="false">Specification</button>
                        <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                            type="button" role="tab" aria-controls="review" aria-selected="true">Review</button>
                    </div>
                    <div class="tab-content" id="product-details-nav-tabContent">
                        <div class="tab-pane" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                            <ul class="product-details-info-wrap">
                                <li><span>Weight</span>
                                    <p><?= $product_data['weight'] ?></p>
                                </li>
                                <li><span>Title</span>
                                    <p><?= $product_data['title'] ?></p>
                                </li>
                                <li><span>Price</span>
                                    <p><?= $product_data['price'] ?>gh</p>
                                </li>
                            </ul>

                            <p><?= $product_data['content'] ?></p>
                        </div>

                        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <!--== Start Reviews Content Item ==-->
                            <?php
                            if ($feedback->rowCount() > 0) {
                                foreach ($feedback as $row) {
                                    ?>
                                    <div class="product-review-item">
                                        <div class="product-review-top">
                                            <div class="product-review-thumb">
                                                <img src="upload/profile/<?= $row['profile_image']; ?>" width="60px"
                                                    alt="Images">
                                            </div>
                                            <div class="product-review-content">
                                                <span class="product-review-name"><?= $row['fname']; ?></span>
                                                <!-- <span class="product-review-designation">Delveloper</span> -->
                                            </div>
                                        </div>
                                        <p class="desc"><?= $row['feedback']; ?></p>
                                        <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                                    </div>
                                    <!--== End Reviews Content Item ==-->
                                    <?php
                                }
                            } else {
                                echo "No data found";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product-reviews-form-wrap">
                        <h4 class="product-form-title">Leave a replay</h4>
                        <div class="product-reviews-form">
                            <!-- <form action="#">
                                <div class="form-input-item">
                                    <textarea class="form-control" placeholder="Enter you feedback"></textarea>
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="text" placeholder="Full Name">
                                </div>
                                <div class="form-input-item">
                                    <input class="form-control" type="email" placeholder="Email Address">
                                </div>
                                <div class="form-input-item">
                                    <div class="form-ratings-item">
                                    </div>
                                </div>
                                <div class="form-input-item mb-0">
                                    <button type="submit" class="btn">SUBMIT</button>
                                </div>
                            </form> -->
                            <form action="passer" id="foo">
                                <?= $c->create_form($feed_back); ?>
                                <input type="hidden" name="send_feedback" value="">
                                <div id="custommessage"></div>
                                <input type="submit" style="width:100%;" class="btn btn-primary" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Details Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <div class="container">
        <!--== Start Product Category Item ==-->
        <a href="product.html" class="product-banner-item">
            <img src="assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
        </a>
        <!--== End Product Category Item ==-->
    </div>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="title">Related Products</h2>
                        <p class="m-0">"Indulge in the luxurious beauty of our cosmetics collection. From vibrant
                            lipsticks to radiant foundations, each product is crafted to enhance your natural allure.
                            Elevate your everyday routine and unleash your inner glow with our premium cosmetics line."
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-n10">
                <?php
                if ($product->rowCount() > 0) {
                    foreach ($product as $row) {
                        ?>
                        <div class="col-md-4 mb-10">
                            <!-- Start Product Item -->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="?p=product-details">
                                        <img src="upload/products/<?= $row['upload_image']; ?>" width="370" height="450"
                                            alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new">new</span>
                                </div>
                                <div class="product-info">
                                    <!-- Product Title -->
                                    <h4 class="title"><a href="?p=product-details"><?= $row['title']; ?></a></h4>
                                    <!-- Product Prices -->
                                    <div class="prices">
                                        <span class="price"><?= $row['price']; ?>gh</span>
                                        <span class="price-old"><?= $row['old_price']; ?>gh</span>
                                    </div>
                                    <!-- Product Actions -->
                                    <div class="product-action">
                                        <button type="button" class="product-action-btn action-btn-cart">
                                            <a href="?p=payment"><span>Buy Now</span></a>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-quick-view"
                                            data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?"
                                                class="envelope-link">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item -->
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

</main>