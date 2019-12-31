<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>cru-portal-prototype</title>
	<?php include '../_globals-top.php'; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('table.table-sort').filterTable();
	});
	</script>
</head>

<body>
	<main role="main">
		<div class="col-12">
			<div class="row">
				<div class="col-3 pt25">
					<div class="fauxnav">
						<?php include '../components/_sidebar.php'; ?>
					</div>
				</div>
				<div class="col-9">
					<div class="row header">
						<?php include '../components/_header.php'; ?>
						<div class="row mt15">
							<small>
								<a class="btn btn-back" role="button" href="/bc/bc-landing-page.php"
									tabindex=1>&nbsp;
									<i class="fas fa-angle-left"></i>&nbsp;BeneCalc Home
								</a>
							</small>
						</div>
						<div class="report-wrapper">
							<div class="h1">PX / DX Codes<div class="print-nav">
									<ul>
										<li>
											<small>
												<a href="#" data-toggle="modal"
													data-target="#print">Print&nbsp;<i
														class="fas fa-print"></i></a></small>
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
								<div class="col-8">
									<h1>Deductible/Cost-Sharing Waved Procedure codes | <small>Review and
											modify DCS PX Codes
											below.</small></h1>
								</div>
								<div class="col-4 right va-b">
									<button class="gray mr5">Deactivate</button>
									<button class="white mr5">Import</button>
									<button class="brand mr15">Add Code</button>
								</div>
							</div>
							<div class="col-12">
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
											<label class="custom-control-label" for="pending">Pending</label>
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
											<th scope="col"><input type="checkbox" id="checkall"
													class="checkbox">
											</th>
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
											<td><input type="checkbox" name="pxcode" id="zero"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="one"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="two"
													class="checkbox"></td>
											<td>0025486</td>
											<td class="allcaps">CHANGE TRACTION APPARATUS HEAD</td>
											<td>Pending</td>
											<td>&nbsp;</td>
											<td></td>
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
											<td><input type="checkbox" name="pxcode" id="three"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="four"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="five"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="six"
													class="checkbox"></td>
											<td>5W8541Z</td>
											<td class="allcaps">MEASUREMENT VENOUS FLOW PERIPHERAL OPEN</td>
											<td>Pending</td>
											<td>&nbsp;</td>
											<td></td>
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
											<td><input type="checkbox" name="pxcode" id="seven"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="eight"
													class="checkbox"></td>
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
											<td><input type="checkbox" name="pxcode" id="nine"
													class="checkbox"></td>
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
											<!-- Modal Header -->
											<div class="modal-header">
												<h4 class="modal-title">PX Code 99396 Change History</h4>
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
											</div>
											<!-- Modal body -->
											<div class="modal-body">
												<div class="row">
													<div class="col-3">
														<label class="pl60">Change Made</label>
													</div>
													<div class="col-2">
														<label>User DUZ-INIT</label>
													</div>
													<div class="col-2">
														<label>Activation</label>
													</div>
													<div class="col-2">
														<label>Effective Date</label>
													</div>
													<div class="col-3">
														<label>Inactive Date</label>
													</div>
												</div>
												<hr class="short" />
												<div class="row">
													<div class="col-3">
														JAN 1, 2018 @ 12:00
													</div>
													<div class="col-2">
														123456-ABC
													</div>
													<div class="col-2">
														Activate
													</div>
													<div class="col-2">
														01/01/2018
													</div>
													<div class="col-3">
													</div>
												</div>
												<hr />
												<div class="row">
													<div class="col-3">
														OCT 10, 2018 @ 12:45
													</div>
													<div class="col-2">
														767676-BBC
													</div>
													<div class="col-2">
														Inactivate
													</div>
													<div class="col-2">
														01/01/2018
													</div>
													<div class="col-3">
														12/31/2018
													</div>
												</div>
												<div class="row">
													<div class="col-12 pl30 pt8">
														Code set to inactive due to new regulatory
														compliance.
														This service is
														no longer considered preventative. Claim not
														exempt from Deductible or Cost
														Share waivers until
														further notice
														from the Centers for Medicare and Medicaide.
													</div>
												</div>
												<hr />
												<div class="row">
													<div class="col-3">
														JUN 1, 2019 @ 2:32
													</div>
													<div class="col-2">
														998989-XYZ
													</div>
													<div class="col-2">
														Activate
													</div>
													<div class="col-2">
														07/01/2019
													</div>
													<div class="col-3">
													</div>
												</div>
												<div class="row">
													<div class="col-12 pl30 pt8">
														Congressional mandate OXK-3210-7 declares this
														code as
														preventative for at least the next five years
														(2024). Code reactivated.
													</div>
												</div>
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
												<form>
													<div class="row">
														<div class="col">
															<label for="ed">Effective Date <span
																	class="red">*</span></label>
															<input type="text" class="form-control"
																id="ed" placeholder="01/01/2019"
																name="ed">
														</div>
														<div class="col">
															<label for="ind">Inctive Date </label>
															<input type="text" class="form-control"
																id="ind" placeholder="Enter Date"
																name="ind">
														</div>
													</div>
													<div class="row">
														<div class="col">
															<label for "comment"
																style="margin-top:.5rem;">Comment <span
																	class="red">*</span></label>
															<textarea rows="4" cols="30"
																class="form-control" id="comment"
																placeholder="Enter Comment"
																name="comment"></textarea>
														</div>
													</div>
												</form>
											</div>
											<!-- Modal footer -->
											<div class="modal-footer-left">
												<button type="button"
													class="btn btn-save mr10">Save</button>&nbsp;<button
													type="button"
													class="btn btn-success mr10">Approve</button><button
													type="button" class="btn btn-cancel mr10"
													style="float:right;"
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
			<?php include '../components/_footer.php'; ?>
		</div>
	</main>
	<?php include '../components/_printbutton.php'; ?>
	<?php include '../_globals-bottom.php'; ?>
	<script type="text/javascript" src="/dist/js/cru-components/jquery.filtertable.min.js"></script>
	<script type="text/javascript" src="/dist/js/cru-components/tablesort.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('table.table-sort').tablesort();
		// Check or Uncheck All checkboxes
		$("#checkall").change(function() {
			var checked = $(this).is(':checked');
			if (checked) {
				$(".checkbox").each(function() {
					$(this).prop("checked", true);
				});
			} else {
				$(".checkbox").each(function() {
					$(this).prop("checked", false);
				});
			}
		});
		// Changing state of CheckAll checkbox 
		$(".checkbox").click(function() {
			if ($(".checkbox").length == $(".checkbox:checked").length) {
				$("#checkall").prop("checked", true);
			} else {
				$("#checkall").removeAttr("checked");
			}
		});
	});
	</script>
</body>

</html>