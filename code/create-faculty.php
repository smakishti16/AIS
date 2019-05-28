<?php
		
		if(isset($_POST['derg'])){
							// receive all input values from the form
							$name=$_POST['name'];
							$surname=$_POST['surname'];
							$fac= $_POST['fac'];
							$dep= $_POST['dep'];
							$phone= $_POST['phone'];
							$email=$_POST['email'];
							$user= $_POST['user'];
							$pass1= $_POST['pass1'];
							$pass1= $_POST['pass2'];
							
							if($pass1==$pass2){
								$pass=md5($_POST['pass1']); 
							}
							
				
$sql="INSERT INTO faculty (fr_name,fr_surname,fr_fac,fr_dep,fr_phone,fr_email,fr_username,fr_pass) 
										VALUES (:name,:surname,:fac,:dep,:phone,:email,:user,:pass)";

				$query = $db->prepare($sql);
				$query->bindParam(':name',$name,PDO::PARAM_STR);
				$query->bindParam(':surname',$surname,PDO::PARAM_STR);
				$query->bindParam(':fac',$fac,PDO::PARAM_STR);
				$query->bindParam(':dep',$dep,PDO::PARAM_STR);
				$query->bindParam(':phone',$phone,PDO::PARAM_STR);
				$query->bindParam(':email',$email,PDO::PARAM_STR);
				$query->bindParam(':user',$user,PDO::PARAM_STR);
				$query->bindParam(':pass',$pass,PDO::PARAM_STR);
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
										<div class="card-title">Create a new faculty representative in the system</div>
									</div>
								<div class="card-body">
						<form method="post">
						
				
											<div class="form-group">
											<label for="name">Name</label>
											<input type="text" class="form-control" name="name" placeholder="Enter  Name">
											</div>
											
											<div class="form-group">
											<label for="surname">Surname</label>
											<input type="text" class="form-control" name="surname" placeholder="Enter Surname">
											</div>
											
								
					             	<div class="form-group">
												<label for="exampleFormControlSelect1">Faculty</label>
												<select class="form-control"  name="fac" id="exampleFormControlSelect1">
													<option value="FEAS">FEAS</option>
													<option value="FAE">FAE</option>
													<option value="FLSS">FLSS</option>
												</select>
										</div>
										
										<div class="form-group">
												<label for="exampleFormControlSelect1">Department</label>
												<select class="form-control"  name="dep" id="exampleFormControlSelect1">
													<option value="CE">CE</option>
													<option value="ARCH">ARCH</option>
													<option value="CEN">CEN</option>
													<option value="ECO">ECO</option>
													<option value="BAF">BAF</option>
													<option value="BUS">BUS</option>
													<option value="PIR">PIR</option>
													<option value="LAW">LAW</option>
							
												</select>
											</div>

										<div class="form-group">
											<label for="phone">Contact</label>
											<input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
											
										</div>
											
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" class="form-control" name="email" placeholder="Enter Epoka Email">
											
										</div>
										
										<div class="form-group">
											<label for="user">Username</label>
											<input type="text" class="form-control" name="user" placeholder="Enter Username">
										</div>
										
										<div class="form-group">
											<label for="pass1">Password</label>
											<input type="password" class="form-control" name="pass1" placeholder="Enter Password">
										</div>
										
								    <div class="form-group">
											<label for="pass2">Confirm password</label>
											<input type="password" class="form-control" name="pass2" placeholder="Enter Password">
										</div>

								
								
											
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
											</div>
										</div>
										<div class="card-action">
											<button class="btn btn-success" type="submit" name="derg">Submit</button>
											<button class="btn btn-danger" type="reset">Cancel</button>
										</div>
									</form>
																	</div>



