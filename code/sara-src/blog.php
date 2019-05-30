<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Epoka University - Blog</title>

<meta name="description" content="simple description for your site">
<meta name="keywords" content="keyword1, keyword2">
<meta name="author" content="Jobz">


<?php
  include('includes/master-header.php');
  include('includes/master-style.php');
?>
</head>
<body>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="page-title-content">
                        <h1 class="h2">Blog Posts</h1>
                        <p>Lorem ipsum</p>
                        <a href="add_blog.php" class="btn btn-brand smooth-scroll">Add Blog Post</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Blog Page Content Start ==-->
    <div id="page-content-wrap">
        <div class="blog-page-content-wrap section-padding">
            <div class="container">
                <div class="row">
                    <!-- Blog content Area Start -->
                    <div class="col-lg-8">
                        <div class="blog-page-contant-start">
                            <div class="row">
                                
                                <!--== Single Blog Post start ==-->
                                <div class="col-lg-6 col-md-6">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="http://placehold.it/700x352" alt="Blog" class="img-fluid">
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="single-blog.php" class="author">
                                                    <div class="author-pic">
                                                        <img src="http://placehold.it/200x200" alt="Author">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5>Daney williams</h5>
                                                        <p>2 hours Ago</p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">
                                                    <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a href="single-blog.php">Recently we create a maassive project that will be a.....</a></h3>
                                            <p>This is a big project of our company, we are happy to completed this type projec which are
                                                get world famous award</p>
                                            <a href="single-blog.php" class="btn btn-brand">More</a>
                                        </div>
                                    </article>
                                </div>
                                <!--== Single Blog Post End ==-->

                                <!--== Single Blog Post start ==-->
                                <div class="col-lg-6 col-md-6">
                                    <article class="single-blog-post">
                                        <figure class="blog-thumb">
                                            <div class="blog-thumbnail">
                                                <img src="http://placehold.it/700x353" alt="Blog" class="img-fluid">
                                            </div>
                                            <figcaption class="blog-meta clearfix">
                                                <a href="single-blog.php" class="author">
                                                    <div class="author-pic">
                                                        <img src="http://placehold.it/200x200" alt="Author">
                                                    </div>
                                                    <div class="author-info">
                                                        <h5>Daney williams</h5>
                                                        <p>2 hours Ago</p>
                                                    </div>
                                                </a>
                                                <div class="like-comm pull-right">
                                                    <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                                    <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                </div>
                                            </figcaption>
                                        </figure>

                                        <div class="blog-content">
                                            <h3><a href="single-blog.php">Recently we create a maassive project that will be a.....</a></h3>
                                            <p>This is a big project of our company, we are happy to completed this type projec which are
                                                get world famous award</p>
                                            <a href="single-blog.php" class="btn btn-brand">More</a>
                                        </div>
                                    </article>
                                </div>
                                <!--== Single Blog Post End ==-->

                                                             
                            </div>

                            <!-- Pagination Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-wrap text-center">
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">50</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination End -->
                        </div>
                    </div>
                    <!-- Blog content Area End -->

                    <!-- Sidebar Area Start -->
                    <div class="col-lg-4 order-first order-lg-last">
                        
<div class="sidebar-area-wrap">
    <!-- Single Sidebar Start -->
    <div class="single-sidebar-wrap">
        <div class="brand-search-form">
            <form action="index.php">
                <input type="search" placeholder="Search...">
                <button type="button"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- Single Sidebar End -->

  
</div>
                    </div>
                    <!-- Sidebar Area End -->
                </div>
            </div>
        </div>
    </div>
    <!--== Blog Page Content End ==-->

    <?php
            include('includes/master-footer.php');
    ?>
</body>
</html>
