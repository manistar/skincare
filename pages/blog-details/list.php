<main class="main-content">

            <!--== Start Page Header Area Wrapper ==-->
            <nav aria-label="breadcrumb" class="breadcrumb-style1">
                <div class="container">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                    </ol>
                </div>
            </nav>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Blog Detail Area Wrapper ==-->
            <section class="section-space pb-0">
                <div class="container">
                    <div class="blog-detail">
                        <h3 class="blog-detail-title"><?=$blog_data['title'];?></h3>
                        <div class="blog-detail-category">
                            <a class="category" href="?p=blog">beauty</a>
                            <a class="category" data-bg-color="#957AFF" href="?p=blog">Fashion</a>
                        </div>
                        <img class="blog-detail-img mb-7 mb-lg-10" src="upload/blog/<?=$blog_data['upload_image'];?>" width="1170" height="1012" alt="Image">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-7">
                                        <ul class="blog-detail-meta">
                                            <!-- <li class="meta-admin"><img src="assets/images/blog/admin.webp" alt="Image"> Tomas Alva Addison</li> -->
                                            <li><?=$blog_data['date'];?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="blog-detail-social">
                                            <span>Share:</span>
                                            <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                            <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <p class="desc mt-4 mt-lg-7"><?=$blog_data['content'];?></p>
                                <!-- <p class="desc mb-6 mb-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p> -->
                            </div>
                        </div>
                        <!-- <img class="blog-detail-img" src="assets/images/blog/blog-detail2.webp" width="1170" height="700" alt="Image"> -->
                        <!-- <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <p class="desc mt-6 mt-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p>
                                <ul class="blog-detail-list">
                                    <li>• Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>• Massa odio sit velit sed purus quis dolor.</li>
                                    <li>• Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>• Proin sed in nunc purus. Non duis eu pretium dictumst</li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <blockquote class="blog-detail-blockquote mt-6 mt-lg-10 mb-6 mb-lg-10">
                                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris semper purus, at venenatis scelerisque nibh. Nisl sit convallis accumsan integer lorem. Nibh nunc in nulla quis pulvinar dictum. Eget nisi, praesent proin viverra.</p>
                                    <span class="user-name">BY Momen de tomas</span>
                                    <img class="quote-icon" src="assets/images/icons/quote1.webp" width="84" height="60" alt="Icon">
                                </blockquote>
                            </div>
                        </div> -->
                        <!-- <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <p class="desc mb-6 mb-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p>
                                <img class="blog-detail-img" src="assets/images/blog/blog-detail3.webp" width="1070" height="340" alt="Image">
                            </div>
                        </div> -->
                    </div>

                    <div class="section-space pb-0">
                        <!--== Start Product Category Item ==-->
                        <a href="product.html" class="product-banner-item">
                            <img src="upload/banner/ba.jpg" width="1170" height="200" alt="Image-HasTech">
                        </a>
                        <!--== End Product Category Item ==-->
                    </div>

                    <!-- <div class="row justify-content-between align-items-center pt-10 mt-4 section-space">
                        <div class="col-sm-6">
                            <a href="blog-details.html" class="blog-next-previous">
                                <div class="thumb">
                                    <span class="arrow">PREV</span>
                                    <img src="assets/images/blog/next-previous1.webp" width="93" height="80" alt="Image">
                                </div>
                                <div class="content">
                                    <h4 class="title">Lorem ipsum dolor amet, consectetur adipiscing.</h4>
                                    <h5 class="post-date">February 13, 2022</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="blog-details.html" class="blog-next-previous blog-next">
                                <div class="thumb">
                                    <span class="arrow">NEXT</span>
                                    <img src="assets/images/blog/next-previous2.webp" width="93" height="80" alt="Image">
                                </div>
                                <div class="content">
                                    <h4 class="title">Lorem ipsum dolor amet, consectetur adipiscing.</h4>
                                    <h5 class="post-date">February 13, 2022</h5>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    
                    <div class="blog-comment-form-wrap">
                    
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <h4 class="blog-comment-form-title">Comment</h4>
                                <div class="blog-comment-form-info">
                                    <div class="blog-comment-form-social">
                                        <span>Share:</span>
                                        <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                        <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                    </div>
                                   
                                    <select class="blog-comment-form-select">
                                        <option selected>Short By Newest</option>
                                        <option value="1">Best</option>
                                        <option value="2">Newest</option>
                                        <option value="3">Oldest</option>
                                    </select>
                                </div>

                                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <!--== Start Reviews Content Item ==-->
                            <?php
                            if ($comment_data->rowCount() > 0) {
                                foreach ($comment_data as $row) {
                                    ?>
                                    <div class="product-review-item">
                                        <div class="product-review-top">
                                            <div class="product-review-thumb">
                                                <img src="assets/images/blog/form1.webp" width="60px"
                                                    alt="Images">
                                            </div>
                                            <div class="product-review-content">
                                                <span class="product-review-name"><?= $row['fname']; ?></span>
                                                <!-- <span class="product-review-designation">Delveloper</span> -->
                                            </div>
                                        </div>
                                        <p class="desc"><?= $row['content']; ?></p>
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
                            <?=$c->create_form($blog_comment);?>
                            <input type="hidden" name="enter_message" value="">
                                <div id="custommessage"></div>
                                <input type="submit" style="width:100%;" class="btn btn-primary" value="submit">
                            </form>
                        </div>
                    </div>
                </div>

                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Blog Detail Area Wrapper ==-->

            <!--== Start Blog Area Wrapper ==-->
            <section class="section-space">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h2 class="title">Blog posts</h2>
                                <p>Applying makeup can be a form of self-care, allowing you to take a few moments for yourself each day. It's a chance to pamper your skin, indulge in some me-time, and unleash your creativity.</p>
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
                            <!--== End Blog Item ==-->
                        </div>
                        <!--  -->
                    </div>
                </div>
            </section>
            <!--== End Blog Area Wrapper ==-->

         

        </main>