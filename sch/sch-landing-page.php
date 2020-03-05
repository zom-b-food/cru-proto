<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>Sole Community Hospital</title>
	<?php include '../_globals-top.php'; ?>
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
						<?php include '../components/_sidebar.php'; ?>
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
								<h1>Sole Community Hospital Reports</h1>
								<hr />
								<?php include '../components/_sch-dropdown.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include '../components/_footer.php'; ?>
		</div>
	</main>
	<?php include '../_globals-bottom.php'; ?>
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