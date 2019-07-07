<div class="box-forms">
	<div class="form-horizontal">
		<div class="form-group">
			<div class="col-md-6">
				<input type="text" name="jenissurat" value="<?php echo $this->uri->segment(3); ?>" hidden>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Pemohon</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="pemohon">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Jabatan Pemohon</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="jabatan">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Perusahaan</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="perusahaan">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Pesanan</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="pesanan">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Alamat</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="alamat">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Waktu Kerja</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="waktu">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Harga</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="harga">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Bank</label>
			<div class="col-md-10">
				<select name="bank" class="form-control">
					<option value="btpn">BTPN</option>
					<option value="bri">BRI</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">No Rekening</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="rekening">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Pemilik</label>
			<div class="col-md-6">
				<input type="text" class="form-control" value="" name="pemilik">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>
