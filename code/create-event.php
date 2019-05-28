<?php
		
		if(isset($_POST['dergo'])){
							// receive all input values from the form
							$name=$_POST['name'];
							$loc=$_POST['loc'];
							$dt=$_POST['dt'];
							$tm=$_POST['tm'];
							$desc= $_POST['desc'];
							$tck= $_POST['tck'];
						
				

$sql="INSERT INTO events (event_title,event_description,event_location,event_time,event_date,event_ticket) 
VALUES (:name,:desc,:loc,:tm,:dt,:tck)";

				$query = $db->prepare($sql);
				$query->bindParam(':name',$name,PDO::PARAM_STR);
				$query->bindParam(':loc',$loc,PDO::PARAM_STR);
				$query->bindParam(':dt',$dt,PDO::PARAM_STR);
				$query->bindParam(':tm',$tm,PDO::PARAM_STR);
				$query->bindParam(':desc',$desc,PDO::PARAM_STR);
				$query->bindParam(':tck',$tck,PDO::PARAM_STR);
				$query->execute();

				$lastInsertId=$db->lastInsertId();

				if($lastInsertId){
							echo "<script>alert('Successfully Created');</script>";
				}else {
								echo "<script>alert('Invalid Detail!Try Again');</script>";
				}
		}
?>								

								<div class="card">
									<div class="card-header">
										<div class="card-title">Create Event</div>
									</div>
								<div class="card-body">
						<form method="post">
						
				
											<div class="form-group">
											<label for="name">Event Title</label>
											<input type="text" class="form-control" name="name" placeholder="Enter Event Title">
											</div>
									
											<div class="form-group">
											<label for="loc">Location</label>
											<input type="text" class="form-control" name="loc" placeholder="Enter Location">
											</div>
											
											<div class="form-group">
											<label for="dt">Date</label>
											<input type="date" class="form-control" name="dt" placeholder="Enter  Date">
											</div>
											
											<div class="form-group">
											<label for="tm">Time</label>
											<input type="time" class="form-control" name="tm" placeholder="Enter Time">
											</div>
											
											
											<div class="form-group">
											<label for="desc"> Description</label>
											<textarea class="form-control" id="comment" rows="5" name="desc"> </textarea>
											</div>
											
										<div class="form-group">
											<label for="tck">Ticket Information</label>
											<textarea class="form-control" id="comment" rows="5" name="tck"> </textarea>
											</div>
																					<div class="form-group">
										<label for="exampleFormControlFile1">Poster</label>
												<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
											</div>
										
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success" type="submit" name="dergo">Submit</button>
											<button class="btn btn-danger" type="reset">Cancel</button>
										</div>
									</form>
																	</div>



