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
							<img width="100%" height="203px" alt="Cru Banner"
								src="/dist/img/cru-banner-index.jpg">
							<div class="report-wrapper">
								<h1 style="text-align:center;">Deductible / Cost Share Reporting</h1>
								<hr />
								<div class="col-md-4">
									<div class="form-group"><label>Please select a report:</label>
										<select id="first" class="form-control">
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
										<div class="row">
											<div class="form-group">
												<label>Claim #:</label><input class="form-control"
													type="text" name="fname"
													placeholder="Enter Claim Number">
											</div>
										</div>
										<div class="row">
											<a href="claimdump.php" class="btn btn-run mr10" id="claimdump">
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
												<label>Claim #:</label><input class="form-control"
													type="text" name="fname"
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
												<label>Claim #:</label><input class="form-control"
													type="text" name="fname"
													placeholder="Enter Claim Number">
											</div>
										</div>
										<div class="row">
											<a href="post-processing-report.php" class="btn btn-run mr10"
												id="post-processing-report">Run</a>&nbsp;<button
												type="button" class="btn btn-cancel mr10">Reset</button>
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
													<label>Beneficiary Last Name&nbsp;<span
															class="required">* Required if No
															SSN</span></label>&nbsp;<input
														class="form-control" type="text" name="lname"
														placeholder="Enter Last Name">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>SSN&nbsp;<span class="required">* Required if No
															Name</span></label>&nbsp;<input
														class="form-control" type="text" name="ssn"
														placeholder="Enter Social Security Number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Beneficiary First Name&nbsp;<span
															class="required">* Required if No
															SSN</span></label>&nbsp;<input
														class="form-control" type="text" name="fname"
														placeholder="Enter First Name">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>ID Number</label>&nbsp;<input
														class="form-control" type="text" name="idnumber"
														placeholder="Enter ID Number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Middle Name or Initial</label>&nbsp;<input
														class="form-control" type="text" name="mname"
														placeholder="Enter Middle Name or Initial">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>Year</label>&nbsp;<input class="form-control"
														type="text" name="year" placeholder="Enter Year">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4">
												<a href="family-cat-cap-accruals.php"
													class="btn btn-run mr10" id="fcca">Run</a>&nbsp;<button
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
												<label>Date Range From:</label>&nbsp;<input type="text"
													class="daterange"
													placeholder="Date Range From"><br /><br /><label>Date
													Range
													To:</label>&nbsp;<input type="text" class="daterange"
													placeholder="Date Range To">
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<label>Include OHI Information? </label>&nbsp;<input
													type="radio" name="ohi-info"
													value="y">&nbsp;Yes&nbsp;|&nbsp;
												<input type="radio" name="ohi-info" value="n">&nbsp;No
											</div>
										</div>
										<div class="row">
											<a href="waiver.php" class="btn btn-run mr10"
												id="waiver">Run</a>&nbsp;<button type="button"
												class="btn btn-cancel mr10">Reset</button>
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