
					<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" style="display:none">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Title</th>
													<th scope="col">Description</th>
													<th scope="col">Location</th>
													<th scope="col">Date</th>
													<th scope="col">Time</th>
													<th scope="col">Ticket Information</th>
													<th scope="col">Status</th>
												</tr>
											</thead>
											<tbody>
												<?php 
$sql = "SELECT event_title,event_description,event_location,event_time,event_date,event_ticket from events";
											$query = $db -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0){
										
										foreach($results as $result){	?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->event_title);?></td>
							<td><?php echo htmlentities($result->event_description);?></td>
							<td><?php echo htmlentities($result->event_location);?></td>
							<td><?php echo htmlentities($result->event_date);?></td>
							<td><?php echo htmlentities($result->event_time);?></td>
							<td><?php echo htmlentities($result->event_ticket);?></td>
						    <td>OK</td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
											</tbody>
										</table>
										</table>
										
										<button class="btn btn-info" onclick="myFunction4()" id="myBtn15">My events</button>
										
<script>
function myFunction4() {
var dots = document.getElementsByClassName("table table-bordered table-head-bg-info table-bordered-bd-info mt-4")[0];
  var btnText = document.getElementById("myBtn15");

  if (dots.style.display === "none") {
    dots.style.display = "inline-table";
    btnText.innerHTML = "View Less"; 

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View All"; 

  }
}

</script>
		