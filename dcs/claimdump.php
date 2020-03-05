<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="cache-control" content="no-cache" />
	<title>Claim Dump - cru-prototype</title>
	<?php include '../_globals-top.php'; ?>
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
					<div class="row header">
						<?php include '../components/_header.php'; ?>
						<div class="row mt15">
							<small>
								<a class="btn btn-back" role="button" href="/dcs/dcs-landing-page.php"
									tabindex=1>&nbsp;
									<i class="fas fa-angle-left"></i>&nbsp;DCS Home
								</a>
							</small>
						</div>
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
							<hr class="cru" />
							<div class="col-12">
								<div class="row">
									<div class="col-1 label">EIN:</div>
									<div class="col-3">nnnnnnnnn </div>
								</div>
								<div class="row">
									<div class="col-1 label">Claim Number:</div>
									<div class="col-3">UBInnnn</div>
								</div>
								<div class="row">
									<div class="col-1 label">Claim Status:</div>
									<div class="col-3">COMPLETE</div>
								</div>
								<div class="row">
									<div class="col-1 label">Vendor ID</div>
									<div class="col-3">XXXXXX LLC</div>
								</div>
							</div>
							<br class="spacer" />
							<div class="col-12">
								<div class="claimdump">
									<div class="row">
										<div class="col-3">Vendorization Pointer</div>
										<div class="col-3">201811111111111*1*1</div>
										<div class="col-3">Vendor POA Exempt:</div>
										<div class="col-3">N</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Assignment of Benefits:
										</div>
										<div class="col-9">
											Yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											Type of Claim:
										</div>
										<div class="col-9">
											Outpatient
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Date of Service/Stmt From Date:
										</div>
										<div class="col-9">
											MON DD, YYYY
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Date Initially Received:
										</div>
										<div class="col-9">
											MMM DD, YYYY@10:06:05
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Date Determined Complete:
										</div>
										<div class="col-9">
											MMM DD, YYYY@10:12:11
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Sponsor:
										</div>
										<div class="col-9">
											EXAMPLE, SPONSER
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											Beneficiary Name:
										</div>
										<div class="col-9">
											EXAMPLE, beneficiary
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Claim Creation Date:
										</div>
										<div class="col-9">
											MMM DD YYYY@10:06:05
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Type of Processing Flag:
										</div>
										<div class="col-9">
											1
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											Amount to be paid on claim:
										</div>
										<div class="col-9">
											0
										</div>

									</div>
									<div class="row">
										<div class="col-3">
											amt applied to deductible:
										</div>
										<div class="col-1">
											0.00
										</div>
										<div class="col-1 red">W
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cost share amount:
										</div>
										<div class="col-1">
											0.00
										</div>
										<div class="col-1 red">W
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amount paid by other insurance:
										</div>
										<div class="col-9">
											7729.42
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt paid to vendor:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt paid to bene:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt applied to cat cap:
										</div>
										<div class="col-1">
											0.00
										</div>
										<div class="col-1 red">W
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											chv fam ded balance:
										</div>
										<div class="col-9">
											100
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											family ded met:
										</div>
										<div class="col-9">
											met
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											chv fam cat cap balance:
										</div>
										<div class="col-9">
											568.99
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											family cat cap met:
										</div>
										<div class="col-9">
											not met
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											9819.59
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											prior vendor pay amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											prior bene pay amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											initial processing user (duz):
										</div>
										<div class="col-3">
											last name,
										</div>
										<div class="col-3">
											frist name,
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											rejection reason:
										</div>
										<div class="col-9">
											356
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											rejection reason:
										</div>
										<div class="col-9">
											371
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											rejection reason:
										</div>
										<div class="col-9">
											139
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											from claim pointer:
										</div>
										<div class="col-9">
											tqknnnn
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											patient control Number:
										</div>
										<div class="col-9">
											nnnnn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi pr bal:
										</div>
										<div class="col-9">
											9819.59
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											Claim form sent:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											duplicate claim check:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											work related acc/ill:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											auto accident:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											other accident:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											employed:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											release of infor limit flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											other health insuranace flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claim signature flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											group health flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											medicaid flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											private/non-group flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											champva supplement flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											workers compensation flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											none checked flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											medicare flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											non-occupational injury flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											multi casual accident flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											addit. accident comments flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											wc details flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											indications of injury/accident:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											indications of other insurance:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											mccr review warranted:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											circumstances flag:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi eob:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											workmans comp amount:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											total charges billed:
										</div>
										<div class="col-9">
											17549.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											place of service:
										</div>
										<div class="col-9">
											asc
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											payments:
										</div>
										<div class="col-9">
											0.00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											calc allowable amt:
										</div>
										<div class="col-9">
											0.00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											calculation method used:
										</div>
										<div class="col-9">
											outpatient
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											date/time edited:
										</div>
										<div class="col-9">
											mmm dd, yyyy@06:23:22
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											editing user:
										</div>
										<div class="col-9">
											&nbsp;
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											year:
										</div>
										<div class="col-9">
											20nn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											individual deductible:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											family deductible:
										</div>
										<div class="col-9">
											50
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cat capp accrual:
										</div>
										<div class="col-9">
											507.27
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											eob date:
										</div>
										<div class="col-9">
											mon dd, yyyy
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											year:
										</div>
										<div class="col-9">
											20nn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											individual deductible:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											family deductible:
										</div>
										<div class="col-9">
											100
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cat capp accrual:
										</div>
										<div class="col-9">
											568.99
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											eob date:
										</div>
										<div class="col-9">
											mmm dd, yyyy
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											eob-claims:
										</div>
										<div class="col-9">
											ubi6147
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											eob-claims/prov:
										</div>
										<div class="col-9">
											ubi6147
										</div>
									</div>
									<br class="spacer" />
									<hr class="short" />
									<div class="row">
										<div class="col-3">
											outpatient diagnosis:
										</div>
										<div class="col-9">
											OTH INTERVERTEBRAL DISC DISPLACEMENT LUMBAR RGN
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outpatient diagnosis:
										</div>
										<div class="col-9">
											SPINAL STENOSIS LUMBOSACRAL REGION
										</div>
									</div>
									<hr class="short" />
									<br class="spacer" />
									<!-- 1------------------------------------------ -->
									<div class="row">
										<div class="col-3">
											outpatient service:
										</div>
										<div class="col-9">
											63056
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											charge for service:
										</div>
										<div class="col-9">
											9445.00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outpatient allowable amount:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck result:
										</div>
										<div class="col-9">
											non-c-n
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											completed claimcheck:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck sex conflict:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck cosmetic/unlisted:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck age conflict:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck experimental proc:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck obsolete proc:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck line origination:
										</div>
										<div class="col-9">
											org-c
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											ohi paid amt:
										</div>
										<div class="col-9">
											7729.41
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											1715.59
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi pr balance:
										</div>
										<div class="col-9">
											1715.99
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cost/unit:
										</div>
										<div class="col-9">
											9445.00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											# allowed units:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											calculated allowed amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											deductible amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cost share amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											payment amount:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											patient paid amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cat cap applied amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt pd to provider:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt pd to bene:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<br class="spacer" />
									<!-- 2------------------------------------------ -->
									<div class="row">
										<div class="col-3">
											outpatient service:
										</div>
										<div class="col-9">
											63047
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											charge for service:
										</div>
										<div class="col-9">
											8104.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outpatient allowable amount:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck result:
										</div>
										<div class="col-9">
											me-c-c
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											completed claimcheck:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck sex conflict:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck cosmetic/unlisted:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck age conflict:
										</div>
										<div class="col-9">
											00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck experimental proc:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck obsolete proc:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck output message:
										</div>
										<div class="col-9">
											63056
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claimcheck line origination:
										</div>
										<div class="col-9">
											org-c
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											ohi paid amt:
										</div>
										<div class="col-9">
											.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											8104
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi pr balance:
										</div>
										<div class="col-9">
											8104
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cost/unit:
										</div>
										<div class="col-9">
											8104.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											# allowed units:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											calculated allowed amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											deductible amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cost share amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											payment amount:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											patient paid amt:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cat cap applied amt:
										</div>
										<div class="col-1">
											0
										</div>
										<div class="col-1 red">
											w
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt pd to provider:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											amt pd to bene:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<hr class="cru-rule" />
									<!--   -------------------- end of 2 for eaches---------- -->
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											pdi number:
										</div>
										<div class="col-9">
											2018nnnnnnnnnnn
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											dupe code type:
										</div>
										<div class="col-9">
											procedure
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe code:
										</div>
										<div class="col-9">
											63056
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											rule j value:
										</div>
										<div class="col-9">
											1
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											duz of dupe review:
										</div>
										<div class="col-9">
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe recommendation:
										</div>
										<div class="col-9">
											accept
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											dupe code type:
										</div>
										<div class="col-9">
											procedure
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe code:
										</div>
										<div class="col-9">
											63047
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											rule j value:
										</div>
										<div class="col-9">
											2
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											duz of dupe review:
										</div>
										<div class="col-9">
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe recommendation:
										</div>
										<div class="col-9">
											accept
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											dupe code type:
										</div>
										<div class="col-9">
											diagnosis
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe code:
										</div>
										<div class="col-9">
											m51.26
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											rule j value:
										</div>
										<div class="col-9">
											1
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											dupe code type:
										</div>
										<div class="col-9">
											diagnosis
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											dupe code:
										</div>
										<div class="col-9">
											m48.07
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											rule j value:
										</div>
										<div class="col-9">
											2
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											coverage code (dx):
										</div>
										<div class="col-9">
											accept
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											file used:
										</div>
										<div class="col-9">
											jrules
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last test:
										</div>
										<div class="col-9">
											1
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last rule:
										</div>
										<div class="col-9">
											ohi rule
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last element:
										</div>
										<div class="col-9">
											-2
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outcome:
										</div>
										<div class="col-9">
											quit
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											coverage code (dx):
										</div>
										<div class="col-9">
											accept
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											file used:
										</div>
										<div class="col-9">
											jrules
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last test:
										</div>
										<div class="col-9">
											1
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last rule:
										</div>
										<div class="col-9">
											ohi rule
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last element:
										</div>
										<div class="col-9">
											-2
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outcome:
										</div>
										<div class="col-9">
											quit
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											coverage code (proc,dme):
										</div>
										<div class="col-9">
											reject
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ai reason (proc,dme):
										</div>
										<div class="col-9">
											196
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											file used:
										</div>
										<div class="col-9">
											jrules
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last test:
										</div>
										<div class="col-9">
											351
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last rule:
										</div>
										<div class="col-9">
											AMBULATORY SX CTR TYPE 2 AND PROCEDURE 09999 TO 70000
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last element:
										</div>
										<div class="col-9">
											-6
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outcome:
										</div>
										<div class="col-9">
											quit
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											coverage code (proc,dme):
										</div>
										<div class="col-9">
											reject
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ai reason (proc,dme):
										</div>
										<div class="col-9">
											196
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											file used:
										</div>
										<div class="col-9">
											jrules
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last test:
										</div>
										<div class="col-9">
											351
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last rule:
										</div>
										<div class="col-9">
											AMBULATORY SX CTR TYPE 2 AND PROCEDURE 09999 TO 70000
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last element:
										</div>
										<div class="col-9">
											-6
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outcome:
										</div>
										<div class="col-9">
											quit
										</div>
									</div>

									<hr class="cru-rule" />
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											remit-to name:
										</div>
										<div class="col-9">
											mmmmmmm
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											tax id #:
										</div>
										<div class="col-9">
											nnnnnnnnn
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											Provider address ln 1:
										</div>
										<div class="col-9">
											nnnn xxxxxxxxxxx
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											provider city:
										</div>
										<div class="col-9">
											xxxxxxxx
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											provider state:
										</div>
										<div class="col-9">
											xxxxxxxxxxxxx
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											provider zip:
										</div>
										<div class="col-9">
											nnnnn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											vendor facility type:
										</div>
										<div class="col-9">
											asf
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											vendor specialty:
										</div>
										<div class="col-9">
											ambulatory surgery
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											provider address ln 3:
										</div>
										<div class="col-9">
											nnnnnnnnn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											cmac class code:
										</div>
										<div class="col-9">
											PHYSICIAN
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-12">
											claim history:
										</div>
									</div>
									<hr class="cru-rule" />
									<div class="row">
										<div class="col-3">
											ein:
										</div>
										<div class="col-9">
											nnnnnnnnn
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claim number:
										</div>
										<div class="col-9">
											nnnnnnnnn
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											claim number history:
										</div>
										<div class="col-9">
											MMM DD, 2018@06:32:44
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											action queue history:
										</div>
										<div class="col-9">
											DUPLICATE CLAIM
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last setting duz history:
										</div>
										<div class="col-9">
											mmmmm, mmmmm mmm
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											claim number history:
										</div>
										<div class="col-9">
											MMM DD, 2018@10:12:07
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											action queue history:
										</div>
										<div class="col-9">
											DUPLICATE CLAIM
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											last setting duz history:
										</div>
										<div class="col-9">
											mmmmmmmmmmmmm,mmmmmmm m
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											claim number history:
										</div>
										<div class="col-9">
											TQKNNNN
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claim status history:
										</div>
										<div class="col-9">
											in process
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											vendor id hist:
										</div>
										<div class="col-9">
											mmmmmmm mmm
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											vendorization pointer history:
										</div>
										<div class="col-9">
											201811111111111*1*1
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											assign of benefits hist:
										</div>
										<div class="col-9">
											yes
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											type of claim hist:
										</div>
										<div class="col-9">
											outpatient
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											date of serv/admission hist:
										</div>
										<div class="col-9">
											MMM DD, YYYY
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											date initially received hist:
										</div>
										<div class="col-9">
											MMM DD, 2018@06:14:33
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											sponsor hist:
										</div>
										<div class="col-9">
											EXAMPLE, SPONSOR
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											beneficiary name:
										</div>
										<div class="col-9">
											EXAMPLE, BENEFICIARY
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi payment hist:
										</div>
										<div class="col-9">
											7729.42
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											9819.59
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											work related acc/ill hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											auto accident hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											other accident hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											employed hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											rel of info limit hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											other health insur hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claim form signiture hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											group health hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											medicaid hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											private/non-group hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											champva supplement hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											workers comp hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											none checked hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											medicare hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											non-occupational injury hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											multi causal accident hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											addit. accident comments hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											wc details hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											indicators of injury/acc hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											mccr review warr hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											circumstances hist:
										</div>
										<div class="col-9">
											no
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											last setting duz history:
										</div>
										<div class="col-9">
											mmmmm, mmmmm
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											total charges billed history:
										</div>
										<div class="col-9">
											17549.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											place of service history:
										</div>
										<div class="col-9">
											asc
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											payments history:
										</div>
										<div class="col-9">
											0
										</div>
									</div>
									<br class="spacer" />
									<hr class="short" />
									<div class="row">
										<div class="col-3">
											outpatient diagnosis hist:
										</div>
										<div class="col-9">
											OTH INTERVERTEBRAL DISC DISPLACEMENT LUMBAR RGN
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											outpatient diagnosis hist:
										</div>
										<div class="col-9">
											SPINAL STENOSIS LUMBOSACRAL REGION
										</div>
									</div>
									<hr class="short" />
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											outpatient service hist:
										</div>
										<div class="col-9">
											63056
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											charge for service hist:
										</div>
										<div class="col-9">
											9445.00
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											ohi paid amt:
										</div>
										<div class="col-9">
											7729.41
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											1715.59
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi pr balance:
										</div>
										<div class="col-9">
											1715.59
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											outpatient service hist:
										</div>
										<div class="col-9">
											63047
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											charge for service hist:
										</div>
										<div class="col-9">
											8104.01
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											ohi paid amt:
										</div>
										<div class="col-9">
											0.01
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi patient responsibility:
										</div>
										<div class="col-9">
											8104.00
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											ohi pr balance:
										</div>
										<div class="col-9">
											8104.00
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											LAST SETTING DUZ HISTORY:
										</div>
										<div class="col-9">
											mmmmm,mmmmm
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											LAST SETTING DUZ HISTORY:
										</div>
										<div class="col-9">
											last name, first name
										</div>
									</div>
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											payments HISTORY:
										</div>
										<div class="col-9">
											0.00
										</div>
									</div>
									<hr class="cru-rule" />
									<br class="spacer" />
									<div class="row">
										<div class="col-3">
											claim workflow
										</div>
										<div class="col-9">
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											claim number
										</div>
										<div class="col-9">
											UBI6147
										</div>
									</div>
									<br class="spacer" />
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:15:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											5
										</div>
										<div class="col-8">
											CHECK DATA EDIT STARTED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:15:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											88
										</div>
										<div class="col-8">
											start CHECK DATA screen
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:02
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											89
										</div>
										<div class="col-8">
											complete CHECK DATA screen
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											90
										</div>
										<div class="col-8">
											START QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											6
										</div>
										<div class="col-8">
											CHECK DATA EDIT completed
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											21
										</div>
										<div class="col-8">
											START DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											22
										</div>
										<div class="col-8">
											COMPLETE DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											23
										</div>
										<div class="col-8">
											START PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											24
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											25
										</div>
										<div class="col-8">
											START VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											26
										</div>
										<div class="col-8">
											COMPLETE VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											11
										</div>
										<div class="col-8">
											BENEFIT CALCULATION QUEUED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:16:03
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											91
										</div>
										<div class="col-8">
											COMPLETE QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:20:19
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											47
										</div>
										<div class="col-8">
											REMOVED FROM EOB QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:20:21
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											28
										</div>
										<div class="col-8">
											PUT IN TO AUDIT SUPPORT QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:22
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											110
										</div>
										<div class="col-8">
											START CLAIM EDIT UTILITY
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:22
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											112
										</div>
										<div class="col-8">
											START AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:22
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											113
										</div>
										<div class="col-8">
											COMPLETE AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:27
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											111
										</div>
										<div class="col-8">
											COMPLETE CLAIM EDIT UTILITY
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:27
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											88
										</div>
										<div class="col-8">
											START CHECK DATA SCREEN
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:31
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											89
										</div>
										<div class="col-8">
											COMPLETE CHECK DATA SCREEN
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											90
										</div>
										<div class="col-8">
											START QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											6
										</div>
										<div class="col-8">
											CHECK DATA EDIT COMPLETED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											21
										</div>
										<div class="col-8">
											START DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											22
										</div>
										<div class="col-8">
											COMPLETE DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											42
										</div>
										<div class="col-8">
											PUT IN TO DUPLICATE CLAIM QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											23
										</div>
										<div class="col-8">
											START PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											24
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											25
										</div>
										<div class="col-8">
											START VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											26
										</div>
										<div class="col-8">
											COMPLETE VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											11
										</div>
										<div class="col-8">
											BENEFIT CALCULATION QUEUED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											64
										</div>
										<div class="col-8">
											CHMFQ ARRAY DEFINED IN CHMG180C
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:23:32
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											91
										</div>
										<div class="col-8">
											COMPLETE QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											90
										</div>
										<div class="col-8">
											START QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											43
										</div>
										<div class="col-8">
											REMOVED FROM DUPLICATE CLAIM QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											6
										</div>
										<div class="col-8">
											CHECK DATA EDIT COMPLETED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											21
										</div>
										<div class="col-8">
											START DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											22
										</div>
										<div class="col-8">
											COMPLETE DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											23
										</div>
										<div class="col-8">
											START PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											24
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											25
										</div>
										<div class="col-8">
											START VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											26
										</div>
										<div class="col-8">
											COMPLETE VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											11
										</div>
										<div class="col-8">
											BENEFIT CALCULATION QUEUED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											12
										</div>
										<div class="col-8">
											BENEFIT CALCULATION STARTED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											92
										</div>
										<div class="col-8">
											SET INTO CLAIM CHECK BATCH
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											13
										</div>
										<div class="col-8">
											BASE AMOUNT CALCULATED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											112
										</div>
										<div class="col-8">
											START AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											116
										</div>
										<div class="col-8">
											START CREATION OF SERVICE LINES
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											118
										</div>
										<div class="col-8">
											START COST SHARE CAT CAP AND DED CALC - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											120
										</div>
										<div class="col-8">
											START OHI ADJUSTMENT - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											124
										</div>
										<div class="col-8">
											START PAY CALC - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											126
										</div>
										<div class="col-8">
											START PAYMENT ADJUSTMENT - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											128
										</div>
										<div class="col-8">
											START DISTRIB FROM LINE TO CLAIM/UNITS - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											130
										</div>
										<div class="col-8">
											START CAT CAP AND DED UPDATE - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:47
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											131
										</div>
										<div class="col-8">
											COMPLETE CAT CAP AND DED UPDATE - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:48
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											46
										</div>
										<div class="col-8">
											PUT IN TO EOB QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:48
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											15
										</div>
										<div class="col-8">
											BENEFIT CALCULATION COMPLETE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:48
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											7
										</div>
										<div class="col-8">
											MCCR CHECK INITIATED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:48
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											27
										</div>
										<div class="col-8">
											COMPLETE MCCR CHECK
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Aug 06, 2018@06:32:48
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											91
										</div>
										<div class="col-8">
											COMPLETE QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->







									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:01
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											36
										</div>
										<div class="col-8">
											PUT IN TO REOPEN QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:05
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											5
										</div>
										<div class="col-8">
											CHECK DATA EDIT STARTED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:05
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											88
										</div>
										<div class="col-8">
											START CHECK DATA SCREEN
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:06
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											110
										</div>
										<div class="col-8">
											START CLAIM EDIT UTILITY
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:06
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											112
										</div>
										<div class="col-8">
											START AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:06:06
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											113
										</div>
										<div class="col-8">
											COMPLETE AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:07:58
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											111
										</div>
										<div class="col-8">
											COMPLETE CLAIM EDIT UTILITY
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:15
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											89
										</div>
										<div class="col-8">
											COMPLETE CHECK DATA SCREEN
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											90
										</div>
										<div class="col-8">
											START QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											6
										</div>
										<div class="col-8">
											CHECK DATA EDIT COMPLETED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											21
										</div>
										<div class="col-8">
											START DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											22
										</div>
										<div class="col-8">
											COMPLETE DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											42
										</div>
										<div class="col-8">
											PUT IN TO DUPLICATE CLAIM QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											23
										</div>
										<div class="col-8">
											START PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											24
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											25
										</div>
										<div class="col-8">
											START VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											26
										</div>
										<div class="col-8">
											COMPLETE VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											11
										</div>
										<div class="col-8">
											BENEFIT CALCULATION QUEUED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											64
										</div>
										<div class="col-8">
											CHMFQ ARRAY DEFINED IN CHMG180C
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:17
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											91
										</div>
										<div class="col-8">
											COMPLETE QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:10:40
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											67
										</div>
										<div class="col-8">
											ROUTINE CHMG180B HAS BEEN RUN
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											90
										</div>
										<div class="col-8">
											START QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											43
										</div>
										<div class="col-8">
											REMOVED FROM DUPLICATE CLAIM QUEUE
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											6
										</div>
										<div class="col-8">
											CHECK DATA EDIT COMPLETED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											21
										</div>
										<div class="col-8">
											START DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											22
										</div>
										<div class="col-8">
											COMPLETE DUPLICATE CLAIM CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											23
										</div>
										<div class="col-8">
											START PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											24
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											25
										</div>
										<div class="col-8">
											COMPLETE PENDING CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											26
										</div>
										<div class="col-8">
											COMPLETE VENDORIZATION CHECK DATA
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											11
										</div>
										<div class="col-8">
											BENEFIT CALCULATION QUEUED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											12
										</div>
										<div class="col-8">
											BENEFIT CALCULATION STARTED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											92
										</div>
										<div class="col-8">
											SET INTO CLAIM CHECK BATCH
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											13
										</div>
										<div class="col-8">
											BASE AMOUNT CALCULATED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											112
										</div>
										<div class="col-8">
											START AUTO DISTRIBUTION
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											114
										</div>
										<div class="col-8">
											START BACK OUT FOR REOPEN - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											116
										</div>
										<div class="col-8">
											START CREATION OF SERVICE LINES
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											118
										</div>
										<div class="col-8">
											START COST SHARE CAT CAP AND DED CALC - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:10
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											120
										</div>
										<div class="col-8">
											START OHI ADJUSTMENT - BENE CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->




									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:11
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											7
										</div>
										<div class="col-8">
											MCCR CHECK INITIATED
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:11
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											27
										</div>
										<div class="col-8">
											COMPLETE MCCR CHECK
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:12:11
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											91
										</div>
										<div class="col-8">
											COMPLETE QUEUING OF CHECK DATA AND BENEFIT CALC
										</div>
									</div>
									<!--   -------------------- end ---------- -->
									<!--   -------------------- start ---------- -->
									<div class="row">
										<div class="col-3">
											Sep 28, 2018@10:14:51
										</div>
										<div class="col-1">
											--
										</div>
										<div class="col-8">
											LAST NAME, FIRST NAME
										</div>
									</div>
									<div class="row">
										<div class="col-3">
											&nbsp;
										</div>
										<div class="col-1">
											67
										</div>
										<div class="col-8">
											ROUTINE CHMG180B HAS BEEN RUN
										</div>
									</div>
									<!--   -------------------- end ---------- -->

								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<?php include '../components/_footer.php'; ?>
		</div>
	</main>
	<?php include '../components/_printbutton.php'; ?>
	<?php include '../_globals-bottom.php'; ?>
</body>

</html>