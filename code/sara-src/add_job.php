<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Epoka University - Add Job</title>

    <meta name="description" content="simple description for your site">
	<meta name="keywords" content="keyword1, keyword2">
	<meta name="author" content="Jobz">

<?php
  include('includes/master-header.php');
  include('includes/master-style.php');
?>
</head>
<body>



<!--== Job Page Content Start ==-->
<div id="page-content-wrap">
    <div class="blog-page-content-wrap section-padding">
	<form>
        <div class="container">
            <div class="row">
                <!-- Job content Area Start -->
                <div class="col-lg-10 m-auto">
                    <article class="single-blog-content-wrap">
                        <header class="article-head">
                            <div class="single-blog-thumb">
                                <img src="./assets/img/job-img.jpg" class="img-fluid" alt="Job">
                            </div>
                            <div class="single-blog-meta">
                                Job Title: <input type="text" name="jtitle" placeholder="Insert Job Title"></input>
                                
                            </div>
                        </header>
                        <section class="blog-details">
                            Job Description: <textarea name="jdesc" placeholder="Add decription..."></textarea>
                            
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    Skills Required: <textarea name="jskill" placeholder="Insert skills required"></textarea>
                                    
                                </div>
                                <div class="col-lg-6">
                                    Experience Required: <textarea name="jexp" placeholder="Insert experience required"></textarea>
                                </div>
                            </div>
                            
                        </section>
						<section class="blog-details">
						Company: <input type="jcomp" placeholder="Insert company"></Input>
						<div class="row">
                                <div class="col-lg-6">
                                    Contact phone: <input type="tel" name="jphone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required></input>
                                    								
                                </div>
                                <div class="col-lg-6">
                                    Contact email: <input type="jemail" name="email"></input>
                               </div>
                            </div>
						<input type="submit" name="submit"></input>
						<input type="reset" name="reset"></input>
						</section>
                        </article>
                </div>
                <!-- Job content Area End -->
            </div>
        </div>
		</form>
    </div>
</div>
<!--== Job Page Content End ==-->

<?php
            include('includes/master-footer.php');
    ?>
</body>
</html>
