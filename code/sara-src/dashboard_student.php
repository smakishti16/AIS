<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])== 0){
	header('location:index.php');
}
else{?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
       <title>My Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 
		$un=$_SESSION['login'];
		$sql = "SELECT * FROM student WHERE st_fullname=:un";
		$query = $db-> prepare($sql);
	    $query -> bindParam(':un',$un, PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ); 
								
		$cnt=1;
				
		if($query->rowCount() > 0){
			
			foreach($results as $result){ ?>
<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10">
		<?php echo "<h1>Welcome to dashboard </h1>" .$_SESSION['login_name'];
		
		?>
		</div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading"><a href="./index.php">Go to blog</a> <i class="fa fa-link fa-1x"></i></div>
			<div class="panel-heading"><a href="./logout.php">Log Out</a> <i class="fa fa-link fa-1x"></i></div>
           
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Blog Posts</strong></span>2</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Job Posts</strong></span>0</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Event Posts</strong></span>0</li>
          </ul> 
               
                   
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#profile">Profile</a></li>
                <li><a data-toggle="tab" href="#myblog">My Blog Posts</a></li>
                <li><a data-toggle="tab" href="#myjob">My Job Posts</a></li>
				<li><a data-toggle="tab" href="#myevent">My Event Posts</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <hr>
                  <form class="form" action="#" method="post" id="editForm">
				  <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="epoka_id"><h4>Epoka ID</h4></label>
                              <input type="text" class="form-control" name="epoka_id">
							  <?php echo htmlentities($result->epoka_id);?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="fname"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="fname">
							  <?php echo htmlentities($result->st_fullname);?>
                          </div>
                      </div>
                                
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gender"><h4>Gender</h4></label>
                              <input class="form-radio-input" type="radio" name="optionsRadios" value="M">
												<span class="form-radio-sign">Male</span>
								<input class="form-radio-input" type="radio" name="optionsRadios" value="F">
												<span class="form-radio-sign">Female</span>
                          </div>
                      </div>
                    <div class="form-group">
                          <div class="col-xs-6">
                             <label for="dob"><h4>Birthday</h4></label>
                              <input type="date" class="form-control" name="dob">
							  <?php echo htmlentities($result->st_dob);?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email">
							  <?php echo htmlentities($result->st_email);?>
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="rDate"><h4>Registration Date</h4></label>
                              <input type="date" class="form-control">
							  <?php echo htmlentities($result->st_rDate);?>
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="gDate"><h4>Graduation Date</h4></label>
                              <input type="date" class="form-control">
							  <?php echo htmlentities($result->st_gDate);?>
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="fos"><h4>Field of study</h4></label>
                              <input type="text" class="form-control">
							  <?php echo htmlentities($result->st_fos);?>
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="company"><h4>Company</h4></label>
                              <input type="text" class="form-control">
							  <?php echo htmlentities($result->st_company);?>
                          </div>
                      </div>
					   <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="job_pos"><h4>Job Position</h4></label>
                              <input type="text" class="form-control">
							  <?php echo htmlentities($result->st_job);?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="location"><h4>Location</h4></label>
                              <input type="text" class="form-control">
							  <?php echo htmlentities($result->st_location);?>
                          </div>
                      </div>
					  
                  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                     
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="myblog">
                              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="myjob">

              </div>
               
              </div><!--/tab-pane-->
			               <div class="tab-pane" id="myevent">
            		
               	
                  
                            </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                        
		<?php }} ?>                              
<script type="text/javascript">
$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
</body>
</html>
<?php } ?>