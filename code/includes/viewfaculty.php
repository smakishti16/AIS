
										<table class="table table-bordered table-bordered-bd-warning mt-4" style="display:none">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Name</th>
													<th scope="col">Surname</th>
													<th scope="col">Faculty</th>
													<th scope="col">Department</th>
													<th scope="col">Phone</th>
													<th scope="col">Email</th>			

												</tr>
											</thead>
											<tbody>
												<?php 
$sql = "SELECT fr_name,fr_surname,fr_fac,fr_dep,fr_phone,fr_email from faculty";
											$query = $db -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0){
										
										foreach($results as $result){	?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->fr_name);?></td>
							<td><?php echo htmlentities($result->fr_surname);?></td>
					        <td><?php echo htmlentities($result->fr_fac);?></td>
						    <td><?php echo htmlentities($result->fr_dep);?></td>
						    <td><?php echo htmlentities($result->fr_phone);?></td>
							<td><?php echo htmlentities($result->fr_email);?></td>
						   
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
											</tbody>
										</table>
											
										<button class="btn btn-primary"onclick="myFunction1()" id="mybtn1">View All</button>
										

<script>
function myFunction1() {
  var dots = document.getElementsByClassName("table table-bordered table-bordered-bd-warning mt-4")[0];
  var btnText = document.getElementById("mybtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline-table";
    btnText.innerHTML = "View Less"; 

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View All"; 

  }
}

</script>