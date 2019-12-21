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
						<?php include '_sidebar.php'; ?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="header">
						<div class="row">
							<img width="100%" height="208px" alt="Cru Banner" src="/dist/img/cru-banner.jpg">
							<div class="report-wrapper">
								<h1 style="text-align:center;">Deductible / Cost Share Reporting</h1>
								<hr />
								<div class="col-md-4">
									<div class="form-group"><label for="first">Please select a report:</label>
										<select id="first" class="form-control" tabindex=1>
											<option>Choose Report</option>
											<option value="claimdump">Claim Dump</option>
											<option value="ccd">Comprehensive Claim Dump</option>
											<option value="fcc">Family Cat Cap Accruals</option>
											<option value="ppr">Post Processing Report</option>
											<option value="waiver">Waiver Accumulator Report</option>
										</select>
									</div>
								</div>
								<div class="claimdump card">
									<div class="col-md-6">
										<form action="claimdump.php">
											<div class="row">
												<div class="form-group">
													<label for="cn1">Claim #:</label><input
														class="form-control" type="text" name="cn1"
														id="cn1" placeholder="Enter Claim Number">
												</div>
											</div>
											<div class="row">
												<input type="submit" value="Run" class="btn btn-run mr10">

												&nbsp;<input type="reset" value="Reset"
													class="btn btn-cancel mr10">
											</div>
										</form>
									</div>
								</div>
								<div class="ccd card">
									<div class="col-md-6">
										<form action="ccd.php">
											<div class="row">
												<div class="form-group">
													<label for="cn2">Claim #:</label><input
														class="form-control" type="text" name="cn2"
														id="cn2" placeholder="Enter Claim Number">
												</div>
											</div>
											<div class="row">
												<input type="submit" value="Run" class="btn btn-run mr10">

												&nbsp;<input type="reset" value="Reset"
													class="btn btn-cancel mr10">
											</div>
										</form>
									</div>
								</div>
								<div class="ppr card">
									<div class="col-md-6">
										<form action="post-processing-report.php">
											<div class="row">
												<div class="form-group">
													<label for="cn3">Claim #:</label><input
														class="form-control" type="text" name="cn3"
														id="cn3" placeholder="Enter Claim Number">
												</div>
											</div>
											<div class="row">
												<input type="submit" value="Run" class="btn btn-run mr10">

												&nbsp;<input type="reset" value="Reset"
													class="btn btn-cancel mr10">
											</div>
										</form>
									</div>
								</div>
								<div class="fcc card">
									<div class="col-md-12">
										<div class="row">
											<div class="form-group">
												<h2>Beneficiary Lookup:</h2>
											</div>
										</div>
										<form action="family-cat-cap-accruals.php">
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="beneln">Beneficiary Last
															Name&nbsp;<span class="required">* Required
																if No
																SSN</span></label>&nbsp;<input
															class="form-control" type="text"
															name="beneln" id="beneln"
															placeholder="Enter Last Name">
													</div>
												</div>
												<div class="col-md-5">
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
												<div class="col-md-5">
													<div class="form-group">
														<label for="benefn">Beneficiary First
															Name&nbsp;<span class="required">* Required
																if No
																SSN</span></label>&nbsp;<input
															class="form-control" type="text"
															name="benefn" id="benefn"
															placeholder="Enter First Name">
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label for="beneid">ID Number</label>&nbsp;<input
															class="form-control" type="text"
															name="beneid" id="beneid"
															placeholder="Enter ID Number">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-5">
													<div class="form-group">
														<label for="benemn">Middle Name or
															Initial</label>&nbsp;<input
															class="form-control" type="text"
															name="benemn" id="benemn"
															placeholder="Enter Middle Name or Initial">
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label for="beneyear">Year</label>&nbsp;<input
															class="form-control" type="text"
															name="beneyear" id="beneyear"
															placeholder="Enter Year">
													</div>
												</div>
											</div>
											<div class="row">
												<input type="submit" value="Run" class="btn btn-run mr10">

												&nbsp;<input type="reset" value="Reset"
													class="btn btn-cancel mr10">
											</div>
										</form>
									</div>

								</div>
								<div class="waiver card">
									<div class="col-md-6">
										<form action="waiver.php">
											<div class="row">
												<div class="form-group">
													<label for="datefrom">Date Range
														From:</label>&nbsp;<input type="text"
														class="daterange" name="datefrom" id="datefrom"
														placeholder="Date Range From"><br /><br /><label>Date
														Range
														To:</label for="dateto">&nbsp;<input type="text"
														class="daterange" name="dateto" id="dateto"
														placeholder="Date Range To">
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<label for="ohiinfo">Include OHI Information?
													</label>&nbsp;<input type="radio" name="ohiinfo"
														id="ohiinfo" value="y">&nbsp;Yes&nbsp;|&nbsp;
													<input type="radio" name="ohiinfo" id="ohiinfo"
														value="n">&nbsp;No
												</div>
											</div>
											<div class="row">
												<input type="submit" value="Run" class="btn btn-run mr10">

												&nbsp;<input type="reset" value="Reset"
													class="btn btn-cancel mr10">
											</div>
										</form>
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