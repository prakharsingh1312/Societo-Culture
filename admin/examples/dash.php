<?php include("../../assets/php/functions.php");?>
<div class="container-fluid">
<!--

					<div class="row">
						<div class="col-xl-4 col-lg-12">
							<div class="card card-chart">
								<div class="card-header card-header-success">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-body">
									<h4 class="card-title">Daily Sales</h4>
									<p class="card-category">
										<span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> updated 4 minutes ago
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="card card-chart">
								<div class="card-header card-header-warning">
									<div class="ct-chart" id="websiteViewsChart"></div>
								</div>
								<div class="card-body">
									<h4 class="card-title">Email Subscriptions</h4>
									<p class="card-category">Last Campaign Performance</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> campaign sent 2 days ago
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="card card-chart">
								<div class="card-header card-header-danger">
									<div class="ct-chart" id="completedTasksChart"></div>
								</div>
								<div class="card-body">
									<h4 class="card-title">Completed Tasks</h4>
									<p class="card-category">Last Campaign Performance</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> campaign sent 2 days ago
									</div>
								</div>
							</div>
						</div>
					</div>
	
	
-->
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-warning card-header-icon">
									<div class="card-icon">
										<i class="material-icons">content_copy</i>
									</div>
									<p class="card-category">Pending Tasks</p>
<?php
	$query="SELECT count(*) from tasks_table WHERE task_status='0' AND user_id='".$_SESSION['user_id']."'";
	$sql=mysqli_query($dbconfig,$query);
	$row=mysqli_fetch_array($sql);
									echo"
													<h3 class='card-title'>".$row['count(*)']."
                    <small>task(s)</small>
                  </h3>
									";
?>
					
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons text-warning">warning</i>
										<a href="#pablo" class="warning-link">Complete Tasks Soon...</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-success card-header-icon">
									<div class="card-icon">
										<i class="material-icons">store</i>
									</div>
									<p class="card-category">Completed Tasks</p>
<?php
	$query="SELECT count(*) from tasks_table WHERE task_status='1' AND user_id='".$_SESSION['user_id']."'";
	$sql=mysqli_query($dbconfig,$query);
	$row=mysqli_fetch_array($sql);
									echo"
													<h3 class='card-title'>".$row['count(*)']."
                    <small>task(s)</small>
                  </h3>
									";
?>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Good Work !
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header card-header-danger card-header-icon">
									<div class="card-icon">
										<i class="material-icons">info_outline</i>
									</div>
									<p class="card-category">Score</p>
<?php
	$query="SELECT * from members_table WHERE mem_user_id='".$_SESSION['user_id']."'";
	$sql=mysqli_query($dbconfig,$query);
	$row=mysqli_fetch_array($sql);
									echo"
													<h3 class='card-title'>".$row['mem_score']."
                    <small>point(s)</small>
                  </h3>
									";
?>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Current Score
									</div>
								</div>
							</div>
						</div>
				
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header card-header-primary">
									<h4 class="card-title"></h4>
									<p class="card-category">
										<?php echo $_SESSION['soc_name']; ?>
									</p>
								</div>
								<div class="card-body table-responsive">
									<table class="table table-hover">
										<thead class="text-warning">
											<th>ID</th>
											<th>Name</th>
											<th>Score</th>
											<th>Department</th>
										</thead>
										<tbody>
											<?php echo show_members(); ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header card-header-tabs card-header-warning">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Tasks:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												
												<li class="nav-item">
													<a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> Completed
                            <div class="ripple-container"></div>
                          </a>
												
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> Pending
                            <div class="ripple-container"></div>
                          </a>
												
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="tab-content">
										
										<div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<?php $query="SELECT * from tasks_table where task_status=1 and user_id={$_SESSION['user_id']} and task_soc_id={$_SESSION['soc_id']}";
													$sql=mysqli_query($dbconfig,$query);
													while($row=mysqli_fetch_array($sql)){
														echo'<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign" disabled>
                                    <span class="check"></span>
                                  </span>
                                </label>
															
															</div>
														</td>
														<td>'.$row['task_desc'].'</td>
														<td class="td-actions text-right">
															
														
														</td>
													</tr>';}
													
												?>
												</tbody>
											</table>
										</div>
										<div class="tab-pane" id="settings">
											<table class="table">
												<tbody>
													<?php 
													
													$userid=$_SESSION['user_id'];
													$socid=$_SESSION['soc_id'];
													
													$query="SELECT * from tasks_table where task_status='0' and user_id='$userid' and task_soc_id='$socid'";
//													echo $query;
													$sql=mysqli_query($dbconfig,$query);
													while($row=mysqli_fetch_array($sql)){
														echo'<tr>
														<td>
															<div class="form-check">
																<label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" disabled>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
															
															</div>
														</td>
														<td>'.$row['task_desc'].'</td>
														<td class="td-actions text-right">
															
														
														</td>
													</tr>';}
													
												?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script>
				const x = new Date().getFullYear();
				let date = document.getElementById( 'date' );
				date.innerHTML = '&copy; ' + x + date.innerHTML;
			</script>
		</div>