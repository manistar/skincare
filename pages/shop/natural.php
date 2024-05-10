<!--== Start Product Area Wrapper ==-->
<section class="section-space">
    <div class="container">
        <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
        <?php
                if ($natural->rowCount() > 0) {
                    foreach ($natural as $row) {
                        ?>
            <div class="col-6 col-lg-4 mb-4 mb-sm-8">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <div class="product-thumb">
                        <a class="d-block" href="?p=product-details&ID=<?= $row['ID'] ?>">
                        <img src="upload/products/<?= $row['upload_image']; ?>" style="width: 350px; height: 370px !important;" alt="Image-HasTech">

                        </a>
                        <span class="flag-new">new</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart"><a href="?p=payment"> <span>Shop Now</span></a>
                               
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist">
                                            <a href="https://wa.me/233551468920/?text=Hi,%20I%20got%20your%20number%20from%20your%20website,%20how%20much%20is%20this%20<?= $row['title']; ?>%20product?"
                                                class="envelope-link">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </button>
                        </div>
                    </div>
                    <div class="product-info">
                       
                        <h4 class="title"><a href="?p=product-details&ID=<?= $row['ID'] ?>"><?=$row['title'];?></a></h4>
                        <div class="prices">
                            <span class="price"><?=$row['price'];?></span>
                            <span class="price-old"><?=$row['old_price'];?></span>
                        </div>
                    </div>
                    <div class="product-action-bottom">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>
                
                <!--== End prPduct Item ==-->
            </div>
            <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>


           
            <div class="col-12">
                <ul class="pagination justify-content-center me-auto ms-auto mt-5 mb-0 mb-sm-10">
                    <li class="page-item">
                        <a class="page-link previous" href="?p=shop&s=<?= $row['ID'] ?>" aria-label="Previous">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?p=shop">01</a></li>
                    <li class="page-item"><a class="page-link" href="?p=shop">02</a></li>
                    <li class="page-item"><a class="page-link" href="?p=shop">03</a></li>
                    <li class="page-item"><a class="page-link" href="?p=shop">....</a></li>
                    <li class="page-item">
                        <a class="page-link next" href="?p=shop" aria-label="Next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->