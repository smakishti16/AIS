
					
										<table class="table table-hover" style="display:none">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">Surname</th>
													<th scope="col">Gender</th>
													<th scope="col">Date Of Birth</th>
													<th scope="col">Epoka ID</th>
													<th scope="col">Epoka Email</th>			
													<th scope="col">Registration Date</th>
													<th scope="col">Graduation Date</th>
													<th scope="col">Field Of Study</th>
													<th scope="col">Company</th>
													<th scope="col">Job Position</th>
													<th scope="col">Location</th>
												
														
												</tr>
											</thead>
											<tbody>
						<?php 
$sql = "SELECT st_name,st_surname,st_gender,dob,epoka_id,st_email,st_gDate,st_rDate,st_location,st_company,st_job,st_fos from student";
											$query = $db -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0){
										
										foreach($results as $result){	?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->st_name);?></td>
							<td><?php echo htmlentities($result->st_surname);?></td>
					        <td><?php echo htmlentities($result->st_gender);?></td>
						    <td><?php echo htmlentities($result->dob);?></td>
							 <td><?php echo htmlentities($result->epoka_id);?></td>
							 <td><?php echo htmlentities($result->st_email);?></td>
						     <td><?php echo htmlentities($result->st_rDate);?></td>
							 <td><?php echo htmlentities($result->st_gDate);?></td>
							 <td><?php echo htmlentities($result->st_fos);?></td>
							 <td><?php echo htmlentities($result->st_company);?></td>
							  <td><?php echo htmlentities($result->st_job);?></td>
							   <td><?php echo htmlentities($result->st_location);?></td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
											</tbody>
										</table>
										
									
										<button class="btn btn-primary" onclick="myFunction()" id="myBtn">View All</button>
<script>
function myFunction() {
  var dots = document.getElementsByClassName("table table-hover")[0];
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline-table";
    btnText.innerHTML = "View Less"; 

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View All"; 

  }
}

</script>
		