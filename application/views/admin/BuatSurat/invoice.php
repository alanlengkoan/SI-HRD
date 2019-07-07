<div class="box-forms">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-md-6">
				<input type="text" name="jenissurat" value="<?php echo $this->uri->segment(3); ?>" hidden>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Invoice for</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="pengirim">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Price</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="harga">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Project</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="projek">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Due date</label>
			<div class="col-md-6">
				<input type="date" class="input-sm form-control" name="tanggal">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Description</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="deskripsi">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
