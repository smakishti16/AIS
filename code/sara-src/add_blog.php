<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Epoka University - Alumni Interactive System</title>

    <meta name="description" content="Bringing together Epoka graduates">
	<meta name="keywords" content="keyword1, keyword2">
	<meta name="author" content="Jobz">
	<link rel="stylesheet" href="assets/css/forms.css">

                  

<?php
  include('includes/master-header.php');
  include('includes/master-style.php');
?>

</head>
<body>
<form align="center" class="form-data">
  <div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
        <div class="container">
            <div class="row">
                <!-- Blog content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="http://placehold.it/1440x810" class="img-fluid" alt="Blog">
                            </div>
                            <div class="single-blog-meta">
                               Blog Title: <input type="text" name="title" placeholder="Insert Blog Title"/>
                            </div>
                        </header>
                        <section class="blog-details">
                            Blog Description: <textarea name="desc" placeholder="Add description..."></textarea>
                            
                        </section>  
<input type="submit" name="submit"/>
	<input type="reset" name="reset"/>						
                    </article>
                </div>
                <!-- Blog content Area End -->
	</div>
	</div>
	</div>
	</div>
	
  </form>
    <?php
            include('includes/master-footer.php');
    ?>
</body>
</html>