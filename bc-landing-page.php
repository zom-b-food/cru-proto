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
		<div class="col-12">
			<div class="row">
				<div class="col-3 pt25">
					<div class="fauxnav">
						<?php include 'components/_sidebar.php'; ?>
					</div>
				</div>
				<div class="col-9">
					<div class="header">
						<div class="row">
							<img width="100%" height="208px"
								alt="Claims Processing and Eligibility - CHAMPVA Regulatory Updates - CRU - VA|U.S. Department of Veterans Affairs"
								title="Claims Processing and Eligibility - CHAMPVA Regulatory Updates - CRU - VA|U.S. Department of Veterans Affairs"
								src="/dist/img/cru-banner.jpg">
							<div class="report-wrapper">
								<h1>CRU BeneCalc Factors</h1>
								<hr />
								<?php include 'components/_bc-dropdown.php'; ?>
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
	$(function() {
		$("#px-dx-codes").on("click", function() {
			$("#report-container").load("px-codes.php");
		});
		$("#post-processing-report").on("click", function() {
			$("#report-container").load("post-processing-report.html");
		});
		$("#px-codes").on("click", function() {
			$("#report-container").load("/px-codes.html");
		});
		$("#edit-px-code").on("click", function() {
			$("#report-container").load("/edit-px-code.html");
		});
		$("#px-code-changehistory").on("click", function() {
			$("#report-container").load("px-code-changehistory.html");
		});
		$("#fcca").on("click", function() {
			$("#report-container").load("family-cat-cap-accruals.html");
		});
		$("#ccd").on("click", function() {
			$("#report-container").load("ccd-landing-page.html");
		});
		$("#claimdump").on("click", function() {
			$("#report-container").load("claimdump.html");
		});
		$("#waiver").on("click", function() {
			$("#report-container").load("waiver.html");
		});
	});
	</script>

</body>

</html>