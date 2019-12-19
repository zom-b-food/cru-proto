<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>cru-portal-prototype</title>
	<?php include '_globals-top.php'; ?>

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
						
							<h1>Health Administration Center Post-Processing Report | <small>TT26477</small>
								<div class="print-nav">
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
							</h1>
							<hr />
							<div class="col-12">
								<div class="row">
									<div class="col-1 label">DUZ:</div>
									<div class="col-3">123456</div>
									<div class="col-1 label"></div>
									<div class="col-3"></div>
									<div class="col-1">&nbsp;</div>
									<div class="col-3">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-1 label">Date:</div>
									<div class="col-3">01/20/2019</div>
									<div class="col-1 label"></div>
									<div class="col-3"></div>
									<div class="col-1">&nbsp;</div>
									<div class="col-3">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-1 label">Time:</div>
									<div class="col-3">1200 PST</div>
									<div class="col-1 label"></div>
									<div class="col-3"></div>
									<div class="col-1">&nbsp;</div>
									<div class="col-3">&nbsp;</div>
								</div>
							</div>
							<hr class="cru-rule">
							<div class="col-12">
								<div class="row">
									<div class="col-2 label r">PDI:</div>
									<div class="col-2">nnnnnnnnnnnnn</div>
									<div class="col-1 label r">BATCH:</div>
									<div class="col-3">xxxx-oooooo</div>
									<div class="col-2 label r">Claim #:</div>
									<div class="col-2">TT26477</div>
								</div>
								<div class="row">
									<div class="col-2 label r">EIN:</div>
									<div class="col-2">xxxxxxxxx</div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
									<div class="col-2 label r">Status:</div>
									<div class="col-2">Complete</div>
								</div>
								<div class="row">
									<div class="col-2 label r">Program:</div>
									<div class="col-2">CHAMPVA</div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
								</div>
								<div class="row">
									<div class="col-2 label r">Vendor:</div>
									<div class="col-2">Vendor Name</div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
									<div class="col-2 label r">Type:</div>
									<div class="col-2">Outpatient</div>
								</div>
								<div class="row">
									<div class="col-2 label r">Pay Prov?:</div>
									<div class="col-2">YES</div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
									<div class="col-2 label r">Ser/Admin Dates:</div>
									<div class="col-2">MMM DD, YYYY</div>
								</div>
								<div class="row">
									<div class="col-2 label r">Sponsors:</div>
									<div class="col-2">Sponsors Name</div>
									<div class="col-2 label"></div>
									<div class="col-2"> </div>
									<div class="col-2 label r">Comp.Date</div>
									<div class="col-2">MMM DD, YYYY</div>
								</div>
								<div class="row">
									<div class="col-2 label r">Bene:</div>
									<div class="col-2">Beneficiary Name</div>
									<div class="col-2 label"></div>
									<div class="col-2"></div>
									<div class="col-2 label r">POS:</div>
									<div class="col-2">DOCTOR'S oFFICE</div>
								</div>
								<div class="row">
									<div class="col-2 label r">Bene Sex:</div>
									<div class="col-2">F</div>
									<div class="col-1 label r">Bene DOB:</div>
									<div class="col-3">MM/DD/YYYY</div>
									<div class="col-2 label r">PL ZIP:</div>
									<div class="col-2"></div>
								</div>
							</div>
							<hr />
							<h3><i class="fas fa-caret-right"></i>&nbsp;Charges &amp; Payments</h3>
							<hr />
							<table class="table-cru tight">
								<thead class="thead-cru">
									<tr class="first">
										<th scope="col" style="width:10%;">DX/PX/NDC P/L</th>
										<th scope="col" style="width:8%;">Unt/Qty</th>
										<th scope="col" style="width:9%;">Total Chg</th>
										<th scope="col" style="width:9%;">Total AA</th>
										<th scope="col" style="width:9%;">Medicaid</th>
										<th scope="col" style="width:9%; white-space:nowrap;">OHI #1 PD</th>
										<th scope="col" style="width:9%; white-space:nowrap;">OHI #1 PR</th>
										<th scope="col"
											style="width:6%; border-right:none; padding-left:14px;">
											Deductible</th>
										<th scope="col" style="width:1%;"></th>
										<th scope="col" style="width:9%;">Payments</th>
										<th scope="col" style="width:3%;">AI</th>
										<th scope="col" style="width:28%;">Reason</th>

									</tr>
									<tr class="second">
										<th scope="col"></th>
										<th scope="col">AlwUnt</th>
										<th scope="col">Chg/Unt</th>
										<th scope="col">AA/Unt</th>
										<th scope="col"></th>
										<th scope="col">Addl OHI</th>
										<th scope="col">OHI PR Bal</th>
										<th scope="col"
											style="border-right:none; padding-left:14px; white-space:nowrap;">
											Cost Share</th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>V70.0</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="w">W</td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>V76.0</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="w">W</td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>244.9</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="w"></td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>578.0</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="w"></td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>99396</td>
										<td>1</td>
										<td>200.00</td>
										<td>91.88</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w"></td>
										<td>91.88</td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td>200.00</td>
										<td>91.88</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w">W</td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>36415</td>
										<td>1</td>
										<td>8.00</td>
										<td>3.00</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w"></td>
										<td>3.00</td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td>8.00</td>
										<td>3.00</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w"></td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td>81000</td>
										<td>1</td>
										<td>15.00</td>
										<td>4.48</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w"></td>
										<td>4.48</td>
										<td>AC</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td>15.00</td>
										<td>4.48</td>
										<td></td>
										<td></td>
										<td></td>
										<td>0.00</td>
										<td class="w"></td>
										<td></td>
										<td>AC</td>
										<td></td>
									</tr>

									<tr class="totals-first">
										<th scope="col">Totals:</th>
										<th scope="col"></th>
										<th scope="col">223.00</th>
										<th scope="col">99.36</th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col" style="border-right:none;">0.00</th>
										<th scope="col"></th>
										<th scope="col">99.36</th>
										<th scope="col"></th>
										<th scope="col"></th>
									</tr>
									<tr class="totals-second">
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col">223.00</th>
										<th scope="col">99.36</th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col" style="border-right:none;">0.00</th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
									</tr>
								</tbody>
							</table>

							<hr class="cru-rule">
							<table class="faux tight">
								<tbody>
									<tr>
										<td class="label setwidth-25">Total Charges Billed:</td>
										<td class="setwidth-5">$223.00</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">CITI Maximum Reimbursement Rate:</td>
										<td class="setwidth-5">N/A</td>
										<td class="label setwidth-25">CHAMPVA Beneficiary Deductible 2019:
										</td>
										<td class="setwidth-5">$0.00</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Calculated Allowable Amount:</td>
										<td class="setwidth-5">$99.36</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">MEDICAID Amount:</td>
										<td class="setwidth-5">N/A</td>
										<td class="label setwidth-25">CHAMPVA Family Deductible 2019:</td>
										<td class="setwidth-5">$0.00</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Applied to Deductible:</td>
										<td class="setwidth-5">$0.00 </td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Amount Paid by TPL:</td>
										<td class="setwidth-5">N/A</td>
										<td class="label setwidth-26">CHAMPVA Family Catastrophic Cap 2019:
										</td>
										<td class="setwidth-5">$0.00</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Cost Share Credited to Cat. Cap:</td>
										<td class="setwidth-5">$0.00 </td>
										<td class="setwidth-1 red"> W</td>
										<td class="label setwidth-25">Amount Reversed from Deductible:</td>
										<td class="setwidth-5">N/A</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Paid by Other Health Insurance:
										</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Amount Reversed from Cat. Cap:</td>
										<td class="setwidth-5">N/A</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Patient Responsibility Amount:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Amount Reduced from Previous Payment:
										</td>
										<td class="setwidth-5">N/A</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Paid by Beneficiary by Vendor:
										</td>
										<td class="setwidth-5">$0.00</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Last PDI Payment Difference:</td>
										<td class="setwidth-5">$0.00</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Total Amount to be PAID on claim:</td>
										<td class="setwidth-5">$99.36</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Total Payment for PDI#20191111111111:
										</td>
										<td class="setwidth-5">$99.36</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount PAID to Vendor:</td>
										<td class="setwidth-5">$99.36</td>
										<td class="setwidth-1 red"></td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount PAID to Beneficiary:</td>
										<td class="setwidth-5">$0.00</td>
										<td class="setwidth-1 red"></td>
									</tr>
								</tbody>
							</table>
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
</body>

</html>