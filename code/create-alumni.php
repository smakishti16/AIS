<?php
		
		if(isset($_POST['dergo'])){
							// receive all input values from the form
							$epid=$_POST['epokaid'];
							$name=$_POST['name'];
							$surname=$_POST['surname'];
							$dob= $_POST['dob'];
							$fos= $_POST['fos'];
							$r= $_POST['ry'];
							$g= $_POST['gy'];
							$gender=$_POST['optionsRadios'];
							$loc=$_POST['loc'];
							$comp= $_POST['comp'];
							$pos= $_POST['pos'];
							$email=$_POST['email'];
							
				

$sql="INSERT INTO student (st_name,st_surname,st_gender,dob,epoka_id,st_email,st_gDate,st_rDate,st_location,st_company,st_job,st_fos) 
VALUES (:name,:surname,:gender,:dob,:epid,:email,:g,:r,:loc,:comp,:pos,:fos)";

				$query = $db->prepare($sql);
				$query->bindParam(':name',$name,PDO::PARAM_STR);
				$query->bindParam(':surname',$surname,PDO::PARAM_STR);
				$query->bindParam(':gender',$gender,PDO::PARAM_STR);
				$query->bindParam(':dob',$dob,PDO::PARAM_STR);
				$query->bindParam(':epid',$epid,PDO::PARAM_STR);
				$query->bindParam(':email',$email,PDO::PARAM_STR);
				$query->bindParam(':g',$g,PDO::PARAM_STR);
				$query->bindParam(':r',$r,PDO::PARAM_STR);
				$query->bindParam(':loc',$loc,PDO::PARAM_STR);
				$query->bindParam(':comp',$comp,PDO::PARAM_STR);
				$query->bindParam(':pos',$pos,PDO::PARAM_STR);
				$query->bindParam(':fos',$fos,PDO::PARAM_STR);
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
										<div class="card-title">Create a new alumni profile in the system</div>
									</div>
								<div class="card-body">
						<form method="post">
						
						
											<div class="form-group">
											<label for="epokaid">Epoka ID</label>
											<input type="text" class="form-control" name="epokaid"  placeholder="Enter  Epoka ID">
										    </div>
											
											<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name" placeholder="Enter  Name">
											</div>
											
											<div class="form-group">
											<label for="surname">Surname</label>
											<input type="text" class="form-control" name="surname" placeholder="Enter Surname">
											</div>
											
											<div class="form-group">
											<label for="dob">Date of Birth</label>
											<input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth">
											</div>
											
											<div class="form-group">
											<label for="fos">Field of Study</label>
											<input type="text" class="form-control" name="fos" placeholder="Enter Field of Study">
											</div>
											
									       	<div class="form-group">
											<label for="ry">Registration Year</label>
											<input type="date" class="form-control" name="ry" placeholder="Enter Registration Year">
											</div>
											
											<div class="form-group">
											<label for="gy">Graduation Year</label>
											<input type="date" class="form-control" name="gy" placeholder="Enter Graduation Year">
											</div>
											
											
										<div class="form-check">
											<label>Gender</label><br/>
											<label class="form-radio-label">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="M"  checked="">
												<span class="form-radio-sign">Male</span>
											</label>
											
											<label class="form-radio-label ml-3">
												<input class="form-radio-input" type="radio" name="optionsRadios" value="F">
												<span class="form-radio-sign">Female</span>
											</label>
										</div>
										
										
										<div class="form-group">
											<label for="loc">Location</label>
											<input type="text" class="form-control" name="loc" placeholder="Enter Current Location">
											</div>
											
											
											<div class="form-group">
											<label for="comp">Company</label>
											<input type="text" class="form-control" name="comp" placeholder="Enter Company">
											</div>
											
											
											<div class="form-group">
											<label for="pos">Position</label>
											<input type="text" class="form-control" name="pos" placeholder="Enter Job Position">
											</div>
										
											
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" name="email" placeholder="Enter Epoka  Email">
											
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