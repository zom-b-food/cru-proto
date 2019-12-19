<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>cru-portal-prototype</title>
	<?php include '_globals-top.php'; ?>
	<style type="text/css">
	.card {
		display: none;
	}
	</style>
</head>

<body>
	<main role="main">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3 pt25">
					<div class="fauxnav">
						<h6><i class="fas fa-star" style="float:left;"></i>CP&amp;E / CRU Home</h6>
					</div>
				</div>
				<div class="col-md-9">
					<div class="header">
						<div class="row">
							<img width="100%" height="203px" alt="Cru Banner"
								src="/dist/img/cru-banner-index.jpg">
							<nav class="drop-nav">
								<ul>
									<li>
										<a href="#">CRU Reports</a>
										<ul>
											<li><a href="#">Critical Access Hospital</a></li>
											<li><a href="landing-page.php">Deductible Cost Share</a></li>
											<li><a href="#">Home Health Care</a></li>
											<li><a href="#">Skilled Nursing Facility</a></li>
											<li><a href="#">Sole Community Hospital</a></li>

										</ul>
									</li>
									<li>
										<a href="#">Queues</a>
										<ul>
											<li><a href="#">Subnav Item</a></li>
											<li><a href="#">Subnav Item</a></li>
											<li><a href="#">Subnav Item</a></li>
										</ul>
									</li>
									<li>
										<a href="#">CRU BeneCalc Factors</a>
										<ul>
											<li><a href="#">Subnav Item</a></li>
											<li><a href="#">Subnav Item</a></li>
											<li><a href="#">Subnav Item</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
						<div class="row">
							<div class="tab-header">
								<ul id="tabs" class="nav nav-tabs">
									<li class="nav-item"><a href="" data-target="#ip" data-toggle="tab"
											class="nav-link active">Initial Processing</a>
									</li>
									<li class="nav-item"><a href="" data-target="#mental" data-toggle="tab"
											class="nav-link">MH Beneficiary</a>
									</li>
									<li class="nav-item"><a href="" data-target="#ff" data-toggle="tab"
											class="nav-link">Future Feature</a>
									</li>
								</ul>
								<div id="tabsContent" class="tab-content">
									<br />
									<div id="ip" class="tab-pane fade active show">
										<div class="col-md-12">
											<h1>Initial
												Processing&nbsp;<small>|&nbsp;Please select a report from
													the dropdown.</small></h1>
											<hr />
											<div class="col-md-4">
												<div class="form-group"><label>Please select a
														report:</label>
													<select id="first" class="form-control">
														<option>Choose Report</option>
														<option value="claimdump">Claim Dump</option>
														<option value="ccd">Comprehensive Claim Dump
														</option>
														<option value="fcc">Family Cat Cap Accruals
														</option>
														<option value="ppr">Post Processing Report
														</option>
														<option value="waiver">Waiver Accumulator
															Report</option>
													</select>
												</div>
											</div>
											<div class="claimdump card">
												<div class="col-md-6">
													<div class="row">
														<div class="form-group">
															<label>Claim #:</label><input
																class="form-control" type="text"
																name="fname"
																placeholder="Enter Claim Number">
														</div>
													</div>
													<div class="row">
														<a href="claimdump.php" class="btn btn-run mr10"
															id="claimdump">
															Run
														</a>&nbsp;<button type="button"
															class="btn btn-cancel mr10">Reset</button>
													</div>
												</div>
											</div>
											<div class="ccd card">
												<div class="col-md-6">
													<div class="row">
														<div class="form-group">
															<label>Claim #:</label><input
																class="form-control" type="text"
																name="fname"
																placeholder="Enter Claim Number">
														</div>
													</div>
													<div class="row">
														<a href="ccd.php" class="btn btn-run mr10"
															id="ccd">Run</a>&nbsp;<button type="button"
															class="btn btn-cancel mr10">Reset</button>
													</div>
												</div>
											</div>
											<div class="ppr card">
												<div class="col-md-6">
													<div class="row">
														<div class="form-group">
															<label>Claim #:</label><input
																class="form-control" type="text"
																name="fname"
																placeholder="Enter Claim Number">
														</div>
													</div>
													<div class="row">
														<a href="post-processing-report.php"
															class="btn btn-run mr10"
															id="post-processing-report">Run</a>&nbsp;<button
															type="button"
															class="btn btn-cancel mr10">Reset</button>
													</div>
												</div>
											</div>
											<div class="fcc card">
												<div class="col-md-12">
													<div class="row">
														<div class="form-group">
															<h2>Beneficiary Lookup:</h2>
														</div>
													</div>
													<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label>Beneficiary Last
																	Name&nbsp;<span class="required">*
																		Required if No
																		SSN</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="lname"
																	placeholder="Enter Last Name">
															</div>
														</div>
														<div class="col-md-5">
															<div class="form-group">
																<label>SSN&nbsp;<span class="required">*
																		Required if No
																		Name</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="ssn"
																	placeholder="Enter Social Security Number">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label>Beneficiary First
																	Name&nbsp;<span class="required">*
																		Required if No
																		SSN</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="fname"
																	placeholder="Enter First Name">
															</div>
														</div>
														<div class="col-md-5">
															<div class="form-group">
																<label>ID
																	Number</label>&nbsp;<input
																	class="form-control" type="text"
																	name="idnumber"
																	placeholder="Enter ID Number">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label>Middle Name or
																	Initial</label>&nbsp;<input
																	class="form-control" type="text"
																	name="mname"
																	placeholder="Enter Middle Name or Initial">
															</div>
														</div>
														<div class="col-md-5">
															<div class="form-group">
																<label>Year</label>&nbsp;<input
																	class="form-control" type="text"
																	name="year"
																	placeholder="Enter Year">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-4">
															<a href="family-cat-cap-accruals.php"
																class="btn btn-run mr10"
																id="fcca">Run</a>&nbsp;<button
																type="button"
																class="btn btn-cancel mr10">Reset</button>
														</div>
													</div>
												</div>
											</div>
											<div class="waiver card">
												<div class="col-md-6">
													<div class="row">
														<div class="form-group">
															<label>Date Range
																From:</label>&nbsp;<input type="text"
																class="daterange"
																placeholder="Date Range From"><br /><br /><label>Date
																Range
																To:</label>&nbsp;<input type="text"
																class="daterange"
																placeholder="Date Range To">
														</div>
													</div>
													<div class="row">
														<div class="form-group">
															<label>Include OHI Information?
															</label>&nbsp;<input type="radio"
																name="ohi-info"
																value="y">&nbsp;Yes&nbsp;|&nbsp;
															<input type="radio" name="ohi-info"
																value="n">&nbsp;No
														</div>
													</div>
													<div class="row">
														<a href="waiver.php" class="btn btn-run mr10"
															id="waiver">Run</a>&nbsp;<button
															type="button"
															class="btn btn-cancel mr10">Reset</button>
													</div>
												</div>
											</div>
										</div>
										<p>&nbsp;</p>
										<p>&nbsp;</p>
										<p>&nbsp;</p>

									</div>
									<div id="mental" class="tab-pane fade">
										<div class="">
											<h1>CHAMPVA Mental Health Beneficiary Lookup</h1>
											<h3>Search for Mental Health Beneficiaries&nbsp;|&nbsp;Either
												first or last name, or SSN are required.</h3>
											<hr />
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label>Beneficiary Last
															Name&nbsp;<span class="required">*
																Required if No
																SSN</span></label>&nbsp;<input
															class="form-control" type="text" name="lname"
															placeholder="Enter Last Name">
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label>SSN&nbsp;<span class="required">*
																Required if No
																Name</span></label>&nbsp;<input
															class="form-control" type="text" name="ssn"
															placeholder="Enter Social Security Number">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label>Beneficiary First
															Name&nbsp;<span class="required">*
																Required if No
																SSN</span></label>&nbsp;<input
															class="form-control" type="text" name="fname"
															placeholder="Enter First Name">
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label>ID
															Number</label>&nbsp;<input
															class="form-control" type="text"
															name="idnumber"
															placeholder="Enter ID Number">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label>Middle Name or
															Initial</label>&nbsp;<input
															class="form-control" type="text" name="mname"
															placeholder="Enter Middle Name or Initial">
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label>Year</label>&nbsp;<input
															class="form-control" type="text" name="year"
															placeholder="Enter Year">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<a href="family-cat-cap-accruals.php"
														class="btn btn-run mr10"
														id="fcca">Run</a>&nbsp;<button type="button"
														class="btn btn-cancel mr10">Reset</button>
												</div>
											</div>
											<p>&nbsp;</p>
											<p>&nbsp;</p>
											<p>&nbsp;</p>
										</div>
									</div>
									<div id="ff" class="tab-pane fade">
										<div class="card fullwidth">
											<br>
											<h1>Future Feature</h1>
											<br>
											<div class="col-md-4">

											</div>
											<p>&nbsp;</p>
											<p>&nbsp;</p>
											<p>&nbsp;</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br class="clear" />
					<div class="row">

					</div>

				</div>
			</div>
			<div class="row">
				<?php include '_footer.php'; ?>
			</div>
		</div>
	</main>
	<?php include '_globals-bottom.php'; ?>
	<script>
	$(document).ready(function() {
		$("#first").change(function() {
			$(this).find("option:selected").each(function() {
				if ($(this).attr("value") == "claimdump") {
					$(".card").not(".claimdump").hide();
					$(".claimdump").show();
				} else if ($(this).attr("value") == "ccd") {
					$(".card").not(".ccd").hide();
					$(".ccd").show();
				} else if ($(this).attr("value") == "ppr") {
					$(".card").not(".ppr").hide();
					$(".ppr").show();
				} else if ($(this).attr("value") == "fcc") {
					$(".card").not(".fcc").hide();
					$(".fcc").show();
				} else if ($(this).attr("value") == "waiver") {
					$(".card").not(".waiver").hide();
					$(".waiver").show();
				} else {
					$(".card").hide();
				}
			});
		}).change();
	});
	</script>
</body>

</html>