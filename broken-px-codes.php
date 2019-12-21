<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>cru-portal-prototype</title>
	<?php include '_globals-top.php'; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('table.table-sort').filterTable();
	});
	</script>
</head>

<body>
	<main role="main">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 pt25">
					<div class="fauxnav">
						<?php include '_sidebar.php'; ?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="row header">
						<?php include '_header.php'; ?>
						<div class="report-wrapper">
							<div class="h1">PX/DX Procedure Codes<div class="print-nav">
									<ul>
										<li>
											<small><a href="#">Print&nbsp;
													<i class="fas fa-print"></i></span></a>
											</small>
											<ul>
												<li><a href="#">.PDF</a></li>
												<li><a href="#">.CSV</a></li>
												<li><a href="#">.TXT</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<hr />
							<div class="row">
								<span class="fauxtab active">PX Codes</span>
								<span class="fauxtab">DX Codes</span>
							</div>
							<div class="row">
								<div class="col-md-8">
									<h1>Deductible/Cost-Sharing Waved Procedure codes | <small>Review and
											modify DCS PX Codes
											below.</small></h1>
								</div>
								<div class="col-md-4 right va-b">
									<button class="gray mr5">Deactivate</button>
									<button class="white mr5">Import</button>
									<button class="blue mr15">Add Code</button>
								</div>
							</div>
							<div class="col-md-12">
								<form>
									<div class="row float-right">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="active">
											<label class="custom-control-label" for="active">Active</label>
										</div>&nbsp;
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input"
												id="inactive">
											<label class="custom-control-label"
												for="inactive">Inactive</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="pending">
											<label class="custom-control-label"
												for="inactive">Pending</label>
										</div>
										<input type="text" class="daterange"
											placeholder="Date Range From"><input type="text"
											class="daterange" placeholder="Date Range To">
										<a class="label pt8 mr25" href="javascript:void()">Clear All <i
												class="fas fa-eraser"></i></a>
									</div>

								</form>
								<table class="table-sort">
									<thead>
										<tr>
											<th class="setwidth-checkbox" scope="col"></th>
											<th class="table-sort" scope="col">PX Code</th>
											<th class="table-sort" scope="col">Description</th>
											<th class="table-sort" scope="col">Status</th>
											<th class="table-sort" scope="col">Effective Date</th>
											<th class="table-sort" scope="col">Inactive Date</th>

											<th class="setwidth-1" scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="checkbox"></td>
											<td>002457Z</td>
											<td class="allcaps">BYPASS CEREBRAL VENT NASOPHARYNX AUTO TISS
												OPEN</td>
											<td>Active</td>
											<td>10/01/2020</td>
											<td>&nbsp;</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>5400124</td>
											<td class="allcaps">CHANGE MONITOR ELECTRODE PROD CONCEPT NAT/ART
												OP</td>
											<td>Pending</td>
											<td>01/01/2019</td>
											<td>&nbsp;</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>0025486</td>
											<td class="allcaps">CHANGE TRACTION APPARATUS HEAD</td>

											<td>&nbsp;</td>

											<td>&nbsp;</td>
											<td>Pending</td>
											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>845510Z</td>
											<td class="allcaps">TRANSFUSION EMBRYONIC STEM CELLS PERIPH VEIN
												OP</td>

											<td>Inactive</td>
											<td>10/2102017</td>
											<td>10/21/2018</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>6060224</td>
											<td class="allcaps">MEASUREMENT CENTRAL VERVOUS CONDUCTIVITY OPEN
											</td>

											<td>Active</td>
											<td>03/21/2018</td>
											<td>&nbsp;</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>9000548</td>
											<td class="allcaps">MAESUREMENT VENOUS FLOW CENTRAL OPEN</td>

											<td>Active</td>
											<td>10/01/2020</td>
											<td>&nbsp;</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>5W8541Z</td>
											<td class="allcaps">MEASUREMENT VENOUS FLOW PERIPHERAL OPEN</td>

											<td>&nbsp;</td>
											<td>&nbsp;</td>

											<td>Pending</td>
											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>8740W4Z</td>
											<td class="allcaps">OSTEOPATHIC TX HEAD ARTCULATORY RAISING FORCE
											</td>

											<td>Inactive</td>
											<td>11/13/2018</td>
											<td>01/01/2019</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>0155554</td>
											<td class="allcaps">OSTEOPATHIC TX THORACIC REGION FASCIAL
												RELEASE</td>

											<td>Inactive</td>
											<td>10/21/2015</td>
											<td>05/01/2017</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td><input type="checkbox"></td>
											<td>2W55021</td>
											<td class="allcaps">CHIROPRACTIC MANIPULATION HEAD INDIRECT
												VISCERAL</td>

											<td>Active</td>
											<td>09/01/2020</td>
											<td>&nbsp;</td>

											<td>
												<div class="dropleft" style="float:right;">
													<a class="dropleftbtn"><img
															src="/dist/img/left-slideout-btn.png" /></a>
													<div class="dropleft-content">
														<ul class="nobullet">
															<li><a class="edit" href="#"
																	data-toggle="modal"
																	data-target="#medEditModal">Edit PX
																	Code&nbsp;<i
																		class="fas fa-pen"></i></a>
															</li>
															<li><a class="history" href="#"
																	data-toggle="modal"
																	data-target="#medHistModal">View
																	History&nbsp;<i
																		class="fas fa-history"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
								<!-- <ul class="pagination pagination-small pull-right"> -->
								<!-- <li class="disabled"><a href="#">&#8656;</a></li> -->
								<!-- <li class="active"><a href="#">1</a></li> -->
								<!-- <li><a href="#">2</a></li> -->
								<!-- <li><a href="#">3</a></li> -->
								<!-- <li><a href="#">&#8658;</a></li> -->
								<!-- </ul> -->
								<div class="modal fade" id="medHistModal">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">View History nnnnnn</h4>
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												View History goes here...
												<h3 style="text-align:center;">View page from left
													navigation pane.</h3>
											</div>

										</div>
									</div>
								</div>
								<div class="modal fade" id="medEditModal">
									<div class="modal-dialog">
										<div class="modal-content">
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">Edit PX Code nnnnnn</h4>
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												Edit PX Code goes here...
												<h4>View page from left navigation page.</h4>
											</div>
											<!-- Modal footer -->
											<div class="modal-footer-left">
												<button type="button"
													class="btn btn-save mr10">Save</button>&nbsp;<button
													type="button" class="btn btn-cancel"
													data-dismiss="modal">Cancel</button>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<?php include '_footer.php'; ?>
			</div>
		</div>
	</main>
	<?php include '_globals-bottom.php'; ?>
	<script type="text/javascript" src="dist/js/cru-components/jquery.filtertable.min.js"></script>
	<script type="text/javascript" src="dist/js/cru-components/tablesort.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('table.table-sort').tablesort();
	});
	</script>