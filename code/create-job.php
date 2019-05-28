<?php
		
		if(isset($_POST['der'])){
							// receive all input values from the form
							$comp=$_POST['comp'];
							$name=$_POST['name'];
							$desc=$_POST['desc'];
							$skill=$_POST['skill'];
							$exp= $_POST['exp'];
							$phone= $_POST['phone'];
						   $email= $_POST['email'];
						
$sql="INSERT INTO jobs (job_comp,job_title,job_desc,job_skills,job_exp,job_ph,job_email)
VALUES (:comp,:name,:desc,:skill,:exp,:phone,:email)";

				$query = $db->prepare($sql);
				$query->bindParam(':comp',$comp,PDO::PARAM_STR);
				$query->bindParam(':name',$name,PDO::PARAM_STR);
				$query->bindParam(':desc',$desc,PDO::PARAM_STR);
				$query->bindParam(':skill',$skill,PDO::PARAM_STR);
				$query->bindParam(':exp',$exp,PDO::PARAM_STR);
				$query->bindParam(':phone',$phone,PDO::PARAM_STR);
				$query->bindParam(':email',$email,PDO::PARAM_STR);
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
										<div class="card-title">Add a Job Post</div>
									</div>
								<div class="card-body">
						<form method="post">
						
				
											<div class="form-group">
											<label for="name">Job Title</label>
											<input type="text" class="form-control" name="name" placeholder="Enter Job Title">
											</div>
									
											<div class="form-group">
											<label for="comp">Company</label>
											<input type="text" class="form-control" name="comp" placeholder="Enter Company">
											</div>
											
											
											<div class="form-group">
											<label for="desc">General Description</label>
											<textarea class="form-control" id="comment" rows="5" name="desc"> </textarea>
											</div>
											
										<div class="form-group">
											<label for="skill">Skills Required</label>
											<textarea class="form-control" id="comment" rows="5" name="skill"> </textarea>
											</div>
										
											
					             	<div class="form-group">
												<label for="exampleFormControlSelect1">Experience</label>
												<select class="form-control"   name="exp" id="exampleFormControlSelect1">
													<option value="1 year">1 year</option>
													<option value="2 year">2 years</option>
													<option value="3 years">3 years</option>
													<option value="4 years">4 years</option>
													
													
												</select>
										</div>
										
											
										
										
										<div class="form-group">
											<label for="phone">Contact </label>
											<input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
											
										</div>
											
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" name="email" placeholder="Enter Contact Email">
											
										</div>
										
									
									
	
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success" type="submit" name="der">Submit</button>
											<button class="btn btn-danger" type="reset">Cancel</button>
										</div>
									</form>
																	</div>



