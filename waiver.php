<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>Waiver Accrual Report - cru-prototype</title>
	<?php include '_globals-top.php'; ?>
</head>

<body>
	<main role="main">
		<div class="col-12">
			<div class="row">
				<div class="col-3 pt25">
					<div class="fauxnav">
						<?php include '_sidebar.php'; ?>
					</div>
				</div>
				<div class="col-9">
					<div class="row header">
						<?php include '_header.php'; ?>
						<div class="row mt15">
							<small>
								<a class="btn btn-back" role="button" href="dcs-landing-page.php"
									tabindex=1>&nbsp;
									<i class="fas fa-angle-left"></i>&nbsp;DCS Home
								</a>
							</small>
						</div>
						<div class="report-wrapper">
							<div class="h1">Waiver Accumulator Report<div class="print-nav">
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
							<div class="col-12">
								Lorum Ipsem...
							</div>

						</div>
					</div>
				</div>
			</div>
			<?php include '_footer.php'; ?>
		</div>
	</main>

	<?php include '_printbutton.php'; ?>
	<?php include '_globals-bottom.php'; ?>
</body>

</html>