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
							<div class="h1">Claim Dump<div class="print-nav">
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
									<div class="col-2 label r">PDI-DOC:</div>
									<div class="col-2">209nnnnnnnnnnn-</div>
									<div class="col-2 label r">Claim:</div>
									<div class="col-2">YH4nnnn</div>
									<div class="col-2 label r">Status:</div>
									<div class="col-2">Complete</div>
								</div>
								<div class="row">
									<div class="col-2 label r">SUB #:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label r">HAC Batch:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label r">Program:</div>
									<div class="col-2">CHAMPVA-EDI</div>
								</div>
								<div class="row">
									<div class="col-2 label r">EDI Partner:</div>
									<div class="col-2">OCR</div>
									<div class="col-2 label r">EDI Batch:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label r">CL Completed:</div>
									<div class="col-2">mm/dd/yyyy</div>
								</div>
							</div>
							<hr class="cru-rule" />
							<div class="card">
								<div class="row">
									<div class="col-2 label">Patient:</div>
									<div class="col-2">xxxxx, kkkkkkk b</div>
									<div class="col-2 label">Sex:</div>
									<div class="col-2">x</div>
									<div class="col-2 label">SSN:</div>
									<div class="col-2">nnn-nn-nnnn</div>
								</div>
								<div class="row">
									<div class="col-2 label">DOB:</div>
									<div class="col-2">mm/dd/yyyy</div>
									<div class="col-2 label">Age:</div>
									<div class="col-2">nn</div>
									<div class="col-2 label">Relationship:</div>
									<div class="col-2">Spouse</div>
								</div>
								<div class="row">
									<div class="col-2 label">Addr1:</div>
									<div class="col-2">nnn xxxxxxxxxx</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">ADDR2:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">City:</div>
									<div class="col-2">XXXXXXXXX</div>
									<div class="col-2 label">State:</div>
									<div class="col-2">XX</div>
									<div class="col-2 label">Zip:</div>
									<div class="col-2">nnnnn</div>
								</div>
								<div class="row">
									<div class="col-2 label">Deductible Paid YTD:</div>
									<div class="col-2">50.00 (Sat)</div>
									<div class="col-2 label">CAT CAP Paid YTD:</div>
									<div class="col-2">192.82</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-2 label">Type Service:</div>
									<div class="col-2"><span class="strong allcaps">outpatient</span></div>
									<div class="col-2 label">Type of Bill:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">PCN/PAN:</div>
									<div class="col-2">606-15</div>
								</div>
								<div class="row">
									<div class="col-2 label">DOS:</div>
									<div class="col-2">mm/dd/yyyy</div>
									<div class="col-2 label">Pay Provider:</div>
									<div class="col-2"><span class="allcaps">yes</span></div>
									<div class="col-2 label">MCCR Review:</div>
									<div class="col-2"><span class="allcaps">no</span></div>
								</div>
								<div class="row">
									<div class="col-2 label">POS:</div>
									<div class="col-2"><span class="allcaps">doctor's office</span></div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">OHI Type:</div>
									<div class="col-2"><span class="allcaps">no ohi</span></div>
									<div class="col-2 label">OHI Begin:</div>
									<div class="col-2">1/1/1998</div>
									<div class="col-2 label">OHI End:</div>
									<div class="col-2">9/30/2014</div>
								</div>
								<div class="row">
									<div class="col-2 label">OHI Name:</div>
									<div class="col-2"><span class="allcaps">no ohi</span></div>
									<div class="col-2 label">OHI Paymt:</div>
									<div class="col-2">0.00</div>
									<div class="col-2 label">Bene Paymt:</div>
									<div class="col-2">0.00</div>
								</div>
								<hr />
								<div class="row">
									<div class="col-2 label">Tax ID:</div>
									<div class="col-2">nnnnnnnnn-</div>
									<div class="col-2 label">Ven POA Exmpt:</div>
									<div class="col-2">N</div>
									<div class="col-2 label">CMAC:</div>
									<div class="col-2">1</div>
								</div>
								<div class="row">
									<div class="col-2 label">RT Ven:</div>
									<div class="col-2">xxxxxxxxxxx MED PA</div>
									<div class="col-2 label">PL Ven:</div>
									<div class="col-2">xxxxxxxxxxx MED PA</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">Phone:</div>
									<div class="col-2">xxxxxxxxxx</div>
									<div class="col-2 label">Phone:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">Addr1:</div>
									<div class="col-2">nnnn xxxxxxx S3NC</div>
									<div class="col-2 label">Addr1:</div>
									<div class="col-2">nnnn xxxxxxx S3NC</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">Addr2:</div>
									<div class="col-2">&nbsp;</div>
									<div class="col-2 label">Addr2:</div>
									<div class="col-2">@</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">City:</div>
									<div class="col-2">xxxxxxxxxxx</div>
									<div class="col-2 label">City:</div>
									<div class="col-2">xxxxxxxxxxx</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
								<div class="row">
									<div class="col-2 label">State:</div>
									<div class="col-2">xx</div>
									<div class="col-2 label">Zip:</div>
									<div class="col-2">xxxxx</div>
									<div class="col-2 label">&nbsp;</div>
									<div class="col-2">&nbsp;</div>
								</div>
							</div>

							<hr class="cru-divider" />
							<table class="table-border striped ccd">
								<thead>
									<tr>
										<th scope="col" style="width:10%;">Rev</th>
										<th scope="col" style="width:20%;">DX/PX/NDC-Mod</th>
										<th scope="col" style="width:60%;">Description</th>
										<th scope="col" style="width:10%;">CS/D Waived</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>V70.0</td>
										<td>Routine Medical Exam</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td></td>
										<td>272.4</td>
										<td>Hyperlipidemia nec/nos</td>
										<td>Y</td>
									</tr>
									<tr>
										<td></td>
										<td>244.9</td>
										<td>Hypothyroidism NOS</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>733.00</td>
										<td>Osteoperosis NOS</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>36415</td>
										<td>Routine Venipuncture</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>81000</td>
										<td>Urinalysis Nonauto w/scope</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>93000</td>
										<td>Electrocardiogram complete</td>
										<td>Y</td>
									</tr>
									<tr>
										<td></td>
										<td>99396</td>
										<td>Prev Visit Est Age 40-64</td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<p>&nbsp;</p>
							<table class="table-cru tight">
								<thead class="thead-cru">
									<tr class="first">
										<th scope="col" style="width:10%;">REV</th>
										<th scope="col" style="width:11%;">DX/PX/NDC-MOD</th>
										<th scope="col" style="width:10%;">UNT</th>
										<th scope="col" style="width:10%;">CHG/UNT</th>
										<th scope="col" style="width:10%;">A/A UNT</th>
										<th scope="col" style="width:15%;">TOTAL CHG</th>
										<th scope="col" style="width:10%; white-space:nowrap;">TOTAL A/A</th>
										<th scope="col" style="width:14%; white-space:nowrap;">TEST RMKS</th>
										<th scope="col" style="width:10%; padding-right:10px;">CS/D</th>
									</tr>
									<tr class="second">
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col">MCAID</th>
										<th scope="col">Pr-OHI-PD</th>
										<th scope="col">Pr-OHI-PR</th>
										<th scope="col">Addl OHI-PD</th>
										<th scope="col">OHI PR Bal</th>
										<th scope="col">Waived</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>272.4</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Acc</td>
										<td>Y</td>
									</tr>
									<tr>
										<td></td>
										<td>244.9</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Acc</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>733.00</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Acc</td>
										<td></td>
									</tr>
									<tr>
										<td>0</td>
										<td>36415</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td>8.00</td>
										<td>3.00</td>
										<td>Acc</td>
										<td></td>
									</tr>
									<tr>
										<td>0</td>
										<td>81000</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td>15.00</td>
										<td>4.68</td>
										<td>Acc</td>
										<td></td>
									</tr>
									<tr>
										<td>0</td>
										<td>93000</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td>65.00</td>
										<td>19.50</td>
										<td>Acc</td>
										<td>Y</td>
									</tr>
									<tr>
										<td>0</td>
										<td>99393</td>
										<td>1</td>
										<td></td>
										<td></td>
										<td>200.00</td>
										<td>0.00</td>
										<td>RE&nbsp;&nbsp;27</td>
										<td></td>
									</tr>

									<tr class="totals-first">
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
										<th scope="col">&nbsp;</th>
									</tr>
									<tr class="totals-second">
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col"></th>
										<th scope="col">288.00</th>
										<th scope="col">27.18</th>
										<th scope="col"></th>
										<th scope="col"></th>
									</tr>
								</tbody>
							</table>
							<!-- <hr class="cru-rule"> -->
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