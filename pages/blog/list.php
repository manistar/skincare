<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1 mb-10">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="?p=blog">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>
    </nav>

    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row justify-content-between flex-xl-row-reverse">
                <div class="col-xl-8">

                    <div class="row">
                        <?php
                        if ($blog->rowCount() > 0) {
                            foreach ($blog as $row) {
                                ?>
                                <div class="col-sm-6 col-lg-4 col-xl-6 mb-8">
                                    <!--== Start Blog Item ==-->
                                    <div class="post-item">
                                        <a href="blog-details.html" class="thumb">
                                            <img src="upload/blog/<?= $row['upload_image'] ?>" width="370" height="320"
                                                alt="Image-HasTech">
                                        </a>
                                        <div class="content">
                                            <a class="post-category" href="?p=blog">beauty</a>
                                            <h4 class="title"><a href="blog-details.php"><?= $row['title'] ?></a></h4>
                                            <ul class="meta">
                                                <li class="author-info"><span>By:</span> <a
                                                        href="?p=blog"><?= $row['fname'] ?></a></li>
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
                        <!--  -->


                        <!-- Stop -->
                        <div class="col-12">
                            <ul class="pagination justify-content-center me-auto ms-auto mt-7 mb-8 mb-xl-0">
                                <li class="page-item">
                                    <a class="page-link previous" href="product.html" aria-label="Previous">
                                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="product.html">01</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">02</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">03</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">....</a></li>
                                <li class="page-item">
                                    <a class="page-link next" href="product.html" aria-label="Next">
                                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blog-sidebar-widget">
                        <div class="blog-search-widget">
                            <form action="#">
                                <input type="search" placeholder="Search Here">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- <div class="blog-widget">
                            <h4 class="blog-widget-title">Popular Categoris</h4>
                            <ul class="blog-widget-category">
                                <li><a href="blog.html">Accesasories <span>(6)</span></a></li>
                                <li><a href="blog.html">Computer <span>(4)</span></a></li>
                                <li><a href="blog.html">Covid-19 <span>(2)</span></a></li>
                                <li><a href="blog.html">Electronics <span>(12)</span></a></li>
                                <li><a href="blog.html">Furniture <span>(9)</span></a></li>
                            </ul>
                        </div> -->
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Recent Posts</h4>
                            <div class="blog-widget-post">
                                <?php
                                if ($product->rowCount() > 0) {
                                    foreach ($product as $row) {
                                        ?>
                                        <div class="blog-widget-single-post">
                                            <a href="product-details.php">
                                                <img src="upload/products/<?= $row['upload_image']; ?>" width="75" height="78"
                                                    alt="Images">
                                                <span class="title"><?= $row['title']; ?></span>
                                            </a>
                                            <span class="date"><?= $row['date']; ?></span>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "No data found";
                                }
                                ?>
                            </div>
                        </div>

                        <div class="blog-widget mb-0">
                            <h4 class="blog-widget-title">Popular Tags</h4>
                            <ul class="blog-widget-tags">
                                <li><a href="?p=blog">Beauty</a></li>
                                <li><a href="?p=blog">MakeupArtist</a></li>
                                <li><a href="?p=blog">Makeup</a></li>
                                <li><a href="?p=blog">Hair</a></li>
                                <li><a href="?p=blog">Nails</a></li>
                                <li><a href="?p=blog">Hairstyle</a></li>
                                <li><a href="?p=blog">Skincare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
</main>