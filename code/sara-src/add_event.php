<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Epoka University - Events</title>

    <meta name="description" content="simple description for your site">
<meta name="keywords" content="keyword1, keyword2">
<meta name="author" content="Jobz">

<?php
  include('includes/master-header.php');
  include('includes/master-style.php');
?>
</head>
<body>
<form method="post">
<!--== Gallery Page Content Start ==-->
<section id="page-content-wrap">
    <div class="single-event-page-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-event-details">
                        <div class="event-thumbnails">
                            <div class="event-thumbnail-carousel owl-carousel">
                                <div class="event-thumb-item event-thumb-img-1">
                                    <div class="event-meta">
                                        Event Title: <input type="text" name="title" placeholder="Insert Event Title"></input>
                                        Location: <input type="text" name="location" placeholder="Insert Event Location"></input>
                                     </div>
                                </div>

                            
                            </div>
                         </div>
                        <h2>Enter Event Details</h2>
                        Event Date: <input type="date" name="date"></input><br>
						Event Time: <input type="time" name="time"></input>
                        <div class="event-schedul">
                            
						Event Description: <textarea name="desc" placeholder="Add description..."></textarea><br>
						Event Ticket Info: <input type="text" name="ticket" placeholder="Insert Ticket Info."></input>
                        </div>
                    </div>
                </div>
            </div>
			<input type="submit" name="submit"></input>
			<input type="reset" name="reset"></input>
        </div>
    </div>
</section>
<!--== Gallery Page Content End ==-->
</form>
<?php
            include('includes/master-footer.php');
    ?>
</body>
</html>
