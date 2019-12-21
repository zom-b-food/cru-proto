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
							<div class="h1">Health Administration Center Post-Processing Report |
								<small>TT26477</small>
								<div class="print-nav">
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
								<div class="row">
									<div class="col-1 label">DUZ:</div>
									<div class="col-3">123456</div>

								</div>
								<div class="row">
									<div class="col-1 label">Date:</div>
									<div class="col-3">01/20/2019</div>

								</div>
								<div class="row">
									<div class="col-1 label">Time:</div>
									<div class="col-3">1200 PST</div>

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
									<div class="col-2 label r">Sponsor:</div>
									<div class="col-2">Sponsor Name</div>
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
										<th scope="col" style="width:10%;">DX's/PX's/NDC's P/L</th>
										<th scope="col" style="width:8%;">Unt/Qty</th>
										<th scope="col" style="width:9%;">Total Chg</th>
										<th scope="col" style="width:9%;">Total AA</th>
										<th scope="col" style="width:9%;">Mcaid</th>
										<th scope="col" style="width:9%; white-space:nowrap;">OHI #1 PD</th>
										<th scope="col" style="width:9%; white-space:nowrap;">OHI #1 PR</th>
										<th scope="col"
											style="width:6%; border-right:none; padding-left:14px;">
											Deduct</th>
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
											Cst Share</th>
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
										<td colspan="12">&nbsp;</td>
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
										<td colspan="12">&nbsp;</td>
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
										<td colspan="12">&nbsp;</td>
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
										<td colspan="12">&nbsp;</td>
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
										<td colspan="12">&nbsp;</td>
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
										<td colspan="12">&nbsp;</td>
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
										<td class="fauxth">Totals:</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">223.00</td>
										<td class="fauxth">99.36</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth" style="border-right:none;">0.00</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">99.36</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
									</tr>
									<tr class="totals-second">
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth"></td>
										<td class="fauxth"></td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth" style="border-right:none;">0.00</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
										<td class="fauxth">&nbsp;</td>
									</tr>
								</tbody>
							</table>

							<hr class="cru-rule">
							<h3>Post Processing Report Information</h3>
							<hr />
							<table class="faux tight">
								<tbody>
									<tr>
										<td class="label setwidth-25">Total Charges Billed:</td>
										<td class="setwidth-5">233.00</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">CITI Maximum Reimbursement Rate:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Calculated Allowable Amount:</td>
										<td class="setwidth-5">99.36</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">MEDICAID Amount:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Applied to Deductible:</td>
										<td class="setwidth-5">0.00 </td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Amount Paid by TPL:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Cost Share Credited to Cat Cap:</td>
										<td class="setwidth-1">0.00 </td>
										<td class="setwidth-1 red left"> W</td>
										<td class="label setwidth-25">Amount Reversed from Deductible:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Paid by Other Insurance(s):</td>
										<td class="setwidth-5">N/A </td>
										<td class="setwidth-1 red"> </td>
										<td class="label setwidth-25">Amount Reversed from Cat Cap:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Patient Responsibility Amount:</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Amount Reduced from Previous Payment:
										</td>
										<td class="setwidth-5">N/A</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount Paid by Beneficiary to Vendor:
										</td>
										<td class="setwidth-5">0.00</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Last PDI Payment Difference:</td>
										<td class="setwidth-5">0.00</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr style="margin-top:7px;">
										<td class="label setwidth-25">Total Amount to be PAID on claim:</td>
										<td class="setwidth-5">99.36</td>
										<td class="setwidth-1 red"></td>
										<td class="label setwidth-25">Total Payment for Current PDI#
											201913691113664:</td>
										<td class="setwidth-5">99.36</td>
										<td class="setwidth-5">&nbsp;</td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount PAID to Vendor:</td>
										<td class="setwidth-5">20.38</td>
										<td class="setwidth-1 red"></td>
									</tr>
									<tr>
										<td class="label setwidth-25">Amount PAID to Beneficiary:</td>
										<td class="setwidth-5">99.36</td>
										<td class="setwidth-1 red"></td>
									</tr>
									<tr>
										<td colspan="6">&nbsp;</td>

									</tr>
									<tr>
										<td class="label setwidth-25">CHAMPVA Beneficiary Deductible 2009:
										</td>
										<td class="setwidth-5">0.00</td>
										<td class="setwidth-10">
										</td>
									</tr>
									<tr>
										<td class="label setwidth-25">CHAMPVA Family Deductible 2009:</td>
										<td class="setwidth-5">0.00</td>
									</tr>
									<tr>
										<td class="label setwidth-26">CHAMPVA Family Catastrophic Cap 2009:
										</td>
										<td class="setwidth-5">0.00</td>
									</tr>
								</tbody>
							</table>
							<hr />
							<p class="mt20">Actions for Claim:</p>
							<div class="row">
								<div class="col-1">&nbsp;</div>
								<div class="col-3">1) Explanation of Benefits</div>
								<div class="col-3">2) SNA CAPPS (Submitted Capps)</div>
							</div>
							<div class="row">
								<div class="col-1">&nbsp;</div>
								<div class="col-3">3) ClaimCheck (Complete)</div>
								<div class="col-3">4) EDI: MEDCOB</div>
							</div>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10"></div>
							</div>
							<div class="row mt20">
								<div class="col-2">Claim Reasons:</div>
								<div class="col-10">319 - CFR 17.272(B)(3) REQUIRES PROVIDER TO ACCEPT CHAMPVA
									ALLOWABLE AS FULL PAYMENT.</div>
							</div>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">322 - COST SHARE FOR CLAIM MAY NOT ALWAYS BE PATIENT
									LIABILITY; OHI / CAT CAP MAY IMPACT.</div>
							</div>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">356 - REMINDER - MAIL CLAIMS TO: CHAMPVA, PO Box 469064,
									DENVER, CO 80246-9064.</div>
							</div>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">371 - WHEN RESUBMITTING CLAIMS YOU MUST ATTACH THE CHAMPVA
									EOB FOR PROPER PROCESSING.</div>
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
	<?php include '_printbutton.php'; ?>
	<?php include '_globals-bottom.php'; ?>
</body>

</html>