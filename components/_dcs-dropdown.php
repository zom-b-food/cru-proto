<div class="col-4">
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
	<div class="col-6">
		<form action="/dcs/claimdump.php">
			<div class="row">
				<div class="form-group">
					<label for="cn1">Claim #:</label><input class="form-control" type="text" name="cn1" id="cn1"
						placeholder="Enter Claim Number">
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Run" class="btn btn-run mr10">

				&nbsp;<input type="reset" value="Reset" class="btn btn-cancel mr10">
			</div>
		</form>
	</div>
</div>
<div class="ccd card">
	<div class="col-6">
		<form action="/dcs/ccd.php">
			<div class="row">
				<div class="form-group">
					<label for="cn2">Claim #:</label><input class="form-control" type="text" name="cn2" id="cn2"
						placeholder="Enter Claim Number">
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Run" class="btn btn-run mr10">

				&nbsp;<input type="reset" value="Reset" class="btn btn-cancel mr10">
			</div>
		</form>
	</div>
</div>
<div class="ppr card">
	<div class="col-6">
		<form action="/dcs/post-processing-report.php">
			<div class="row">
				<div class="form-group">
					<label for="cn3">Claim #:</label><input class="form-control" type="text" name="cn3" id="cn3"
						placeholder="Enter Claim Number">
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Run" class="btn btn-run mr10">

				&nbsp;<input type="reset" value="Reset" class="btn btn-cancel mr10">
			</div>
		</form>
	</div>
</div>
<div class="fcc card">
	<div class="col-12">
		<div class="row">
			<div class="form-group">
				<h2>Beneficiary Lookup:</h2>
			</div>
		</div>
		<form action="/dcs/family-cat-cap-accruals.php">
			<div class="row">
				<div class="col-5">
					<div class="form-group">
						<label for="beneln">Beneficiary Last
							Name&nbsp;<span class="required">* Required
								if No
								SSN</span></label>&nbsp;<input class="form-control" type="text" name="beneln"
							id="beneln" placeholder="Enter Last Name">
					</div>
				</div>
				<div class="col-5">
					<div class="form-group">
						<label for="benessn">SSN&nbsp;<span class="required">*
								Required if No
								Name</span></label>&nbsp;<input class="form-control" type="text" name="benessn"
							id="benessn" placeholder="Enter Social Security Number">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-5">
					<div class="form-group">
						<label for="benefn">Beneficiary First
							Name&nbsp;<span class="required">* Required
								if No
								SSN</span></label>&nbsp;<input class="form-control" type="text" name="benefn"
							id="benefn" placeholder="Enter First Name">
					</div>
				</div>
				<div class="col-5">
					<div class="form-group">
						<label for="beneid">ID Number</label>&nbsp;<input class="form-control" type="text"
							name="beneid" id="beneid" placeholder="Enter ID Number">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-5">
					<div class="form-group">
						<label for="benemn">Middle Name or
							Initial</label>&nbsp;<input class="form-control" type="text" name="benemn"
							id="benemn" placeholder="Enter Middle Name or Initial">
					</div>
				</div>
				<div class="col-5">
					<div class="form-group">
						<label for="beneyear">Year</label>&nbsp;<input class="form-control" type="text"
							name="beneyear" id="beneyear" placeholder="Enter Year">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-5">
					<div class="form-group">
						<input type="submit" value="Run" class="btn btn-run mr10">

						&nbsp;<input type="reset" value="Reset" class="btn btn-cancel mr10">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="waiver card">
	<div class="col-6">
		<form action="/dcs/waiver.php">
			<div class="row">
				<div class="form-group">
					<label for="datefrom">Date Range
						From:</label>&nbsp;<input type="text" class="daterange" name="datefrom" id="datefrom"
						placeholder="Date Range From"><br /><br /><label>Date
						Range
						To:</label for="dateto">&nbsp;<input type="text" class="daterange" name="dateto"
						id="dateto" placeholder="Date Range To">
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<label for="ohiinfo">Include OHI Information?
					</label>&nbsp;<input type="radio" name="ohiinfo" id="ohiinfo" value="y">&nbsp;Yes&nbsp;|&nbsp;
					<input type="radio" name="ohiinfo" id="ohiinfo" value="n">&nbsp;No
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Run" class="btn btn-run mr10">

				&nbsp;<input type="reset" value="Reset" class="btn btn-cancel mr10">
			</div>
		</form>
	</div>
</div>