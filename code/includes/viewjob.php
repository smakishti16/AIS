						<table class="table table-striped mt-3" style="display:none">
											<thead>
												<tr>
														<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">Company</th>
													<th scope="col">Description</th>
													<th scope="col">Skills required</th>
													<th scope="col">Experience needed</th>
													<th scope="col">Phone Contact</th>			
													<th scope="col">Email Contact</th>
												
												
												</tr>
											</thead>
											<tbody>
												<?php 
$sql = "SELECT job_comp,job_title,job_desc,job_skills,job_exp,job_ph,job_email from jobs";
											$query = $db -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0){
										
										foreach($results as $result){	?>		
						  <tr>
	                        <td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->job_title);?></td>
							<td><?php echo htmlentities($result->job_company);?></td>
					        <td><?php echo htmlentities($result->job_desc);?></td>
						    <td><?php echo htmlentities($result->job_skill);?></td>
						    <td><?php echo htmlentities($result->job_exp);?></td>
							<td><?php echo htmlentities($result->job_ph);?></td>
							<td><?php echo htmlentities($result->job_email);?></td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
											</tbody>
										</table>
										
											<button class="btn btn-primary" onclick="myFunction2()" id="myBtn2" >View All</button>
										
										
							
<script>

function myFunction2() {
	var dots = document.getElementsByClassName("table table-striped mt-3")[0];
 
  var btnText = document.getElementById("mBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline-table";
    btnText.innerHTML = "View Less"; 

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View All"; 

  }
}

</script>
		