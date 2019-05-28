
								<table class="table table-head-bg-success" style="display:none">
											<thead>
												<tr>
													<th scope="col">#</th>
													<th scope="col">Title</th>
													<th scope="col">Description</th>
												</tr>
											</thead>
											<tbody>
												<?php 
											$sql = "SELECT blog_title,blog_desc from blog";
											$query = $db -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0){
										
										foreach($results as $result){	?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->blog_title);?></td>
							<td><?php echo htmlentities($result->blog_desc);?></td>
					
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
											</tbody>
										</table>
										<button class="btn btn-primary" onclick="myFunction10()" id="btn20">View All</button>
<script>
function myFunction10() {
  var dots = document.getElementsByClassName("table table-head-bg-success")[0];
  var btnText = document.getElementById("btn20");

  if (dots.style.display === "none") {
    dots.style.display = "inline-table";
    btnText.innerHTML = "View Less"; 

  } else {
    dots.style.display = "none";
    btnText.innerHTML = "View All"; 

  }
}

</script>
		