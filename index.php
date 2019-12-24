<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>HOME - cru-prototype</title>
	<?php include '_globals-top.php'; ?>
	<style type="text/css">
	.card {
		display: none;
	}
	</style>
</head>

<body>
	<main role="main">
		<div class="col-12">
			<div class="row">
				<div class="col-3 pt25">
					<div class="fauxnav">
						<h6><i class="fas fa-home" style="float:left;"></i>CP&amp;E / CRU Home</h6>
					</div>
				</div>
				<div class="col-9">
					<div class="header">
						<div class="row">
							<img width="100%" height="208px"
								alt="Claims Processing and Eligibility - CHAMPVA Regulatory Updates - CRU - VA|U.S. Department of Veterans Affairs"
								title="Claims Processing and Eligibility - CHAMPVA Regulatory Updates - CRU - VA|U.S. Department of Veterans Affairs"
								src="/dist/img/cru-banner.jpg">
							<nav class="drop-nav">
								<ul>
									<li>
										<a href="#">CRU Reports</a>
										<ul>
											<li><a href="#">Critical Access Hospital</a></li>
											<li><a href="dcs-landing-page.php">Deductible Cost Share</a></li>
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
											<li><a href="#">Critical Access Hospital</a></li>
											<li><a href="bc-landing-page.php">Deductible / Cost-Sharing</a>
											</li>
											<li><a href="#">Skilled Nursing Facilities</a></li>
											<li><a href="#">Sole Community Hospital</a></li>
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
									<li class="nav-item"><a href="" data-target="#mh" data-toggle="tab"
											class="nav-link">MH Beneficiary</a>
									</li>
									<li class="nav-item"><a href="" data-target="#ff" data-toggle="tab"
											class="nav-link">Future Feature</a>
									</li>
								</ul>
								<div id="tabsContent" class="tab-content">
									<br />
									<div id="ip" class="tab-pane fade active show">
										<div class="col-12">
											<h1>Initial
												Processing&nbsp;<small>|&nbsp;Please select a report from
													the dropdown.</small></h1>
											<hr />
											<?php include 'components/_dcs-dropdown.php'; ?>
										</div>
										<p>&nbsp;</p>
										<p>&nbsp;</p>
										<p>&nbsp;</p>

									</div>
									<div id="mh" class="tab-pane fade">
										<div class="">
											<h1>CHAMPVA Mental Health Beneficiary Lookup</h1>
											<h3>Search for Mental Health Beneficiaries&nbsp;|&nbsp;Either
												first or last name, or SSN are required.</h3>
											<hr />
											<div class="col-12">
												<div class="row">
													<div class="form-group">
														<h2>Beneficiary Lookup:</h2>
													</div>
												</div>
												<form action="family-cat-cap-accruals.php">
													<div class="row">
														<div class="col-5">
															<div class="form-group">
																<label for="beneln">Beneficiary Last
																	Name&nbsp;<span class="required">*
																		Required
																		if No
																		SSN</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="beneln" id="beneln"
																	placeholder="Enter Last Name">
															</div>
														</div>
														<div class="col-5">
															<div class="form-group">
																<label for="benessn">SSN&nbsp;<span
																		class="required">*
																		Required if No
																		Name</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="benessn" id="benessn"
																	placeholder="Enter Social Security Number">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-5">
															<div class="form-group">
																<label for="benefn">Beneficiary First
																	Name&nbsp;<span class="required">*
																		Required
																		if No
																		SSN</span></label>&nbsp;<input
																	class="form-control" type="text"
																	name="benefn" id="benefn"
																	placeholder="Enter First Name">
															</div>
														</div>
														<div class="col-5">
															<div class="form-group">
																<label for="beneid">ID
																	Number</label>&nbsp;<input
																	class="form-control" type="text"
																	name="beneid" id="beneid"
																	placeholder="Enter ID Number">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-5">
															<div class="form-group">
																<label for="benemn">Middle Name or
																	Initial</label>&nbsp;<input
																	class="form-control" type="text"
																	name="benemn" id="benemn"
																	placeholder="Enter Middle Name or Initial">
															</div>
														</div>
														<div class="col-5">
															<div class="form-group">
																<label
																	for="beneyear">Year</label>&nbsp;<input
																	class="form-control" type="text"
																	name="beneyear" id="beneyear"
																	placeholder="Enter Year">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-5">
															<div class="form-group">
																<input type="submit" value="Run"
																	class="btn btn-run mr10">

																&nbsp;<input type="reset" value="Reset"
																	class="btn btn-cancel mr10">
															</div>
														</div>
													</div>
												</form>
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
											<div class="col-4">

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
				</div>
			</div>
			<?php include 'components/_footer.php'; ?>
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