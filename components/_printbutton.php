<div class="modal fade" id="print">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Print</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<p>Choose your format.</p>
				<form id="print" method="get" action="">
					<input class="radio-inline" type="radio" id="pdf" name="print" value="pdf">
					<label class="radio-inline" for="pdf">.PDF</label>
					<input class="radio-inline" type="radio" id="csv" name="print" value="csv">
					<label class="radio-inline" for="csv">.CSV</label>
					<input class="radio-inline" type="radio" id="txt" name="print" value="txt">
					<label class="radio-inline" for="txt">.TXT</label>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success">Print</button>&nbsp;&nbsp;
				<button type="button" class="btn btn-cancel" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>