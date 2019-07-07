<!-- Javascript -->
		<script src="<?=assets_url()?>vendor/jquery/jquery.min.js"></script>
		<script src="<?=assets_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=assets_url()?>vendor/pace/pace.min.js"></script>
		<script src="<?=assets_url()?>vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
		<script src="<?=assets_url()?>vendor/jquery-ui/jquery-ui.min.js"></script>
		<script src="<?=assets_url()?>vendor/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
		<script src="<?=assets_url()?>vendor/hideshowpassword/hideShowPassword.min.js"></script>
		<script src="<?=assets_url()?>vendor/switchery/switchery.min.js"></script>
		<script src="<?=assets_url()?>scripts/klorofilpro-common.js"></script>
		<script src="<?=assets_url()?>vendor/datatables/js-main/jquery.dataTables.min.js"></script>
		<script src="<?=assets_url()?>vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js"></script>
		<script src="<?=assets_url()?>vendor/datatables-colreorder/dataTables.colReorder.js"></script>
		<script src="<?=assets_url()?>vendor/datatables-tabletools/js/dataTables.tableTools.js"></script>
		<script src="<?=assets_url()?>scripts/klorofilpro-common.js"></script>
		<!-- DEMO PANEL -->
		<!-- for demo purpose only, you should remove it on your project directory -->
		<script type="text/javascript">
		var toggleDemoPanel = function(e)
		{
			e.preventDefault();
			var panel = document.getElementById('demo-panel');
			if (panel.className) panel.className = '';
			else panel.className = 'active';
		}
		// fix each iframe src when back button is clicked
		$(function()
		{
			$('iframe').each(function()
			{
				this.src = this.src;
			});
		});
		</script>
		<script>
		$(function()
		{
			// datatable column with reorder extension
			$('#datatable-column-reorder').dataTable(
			{
				pagingType: "full_numbers",
				sDom: "RC" +
					"t" +
					"<'row'<'col-sm-6'i><'col-sm-6'p>>",
				colReorder: true,
			});
			// datatable with column filter enabled
			var dtTable = $('#datatable-column-filter').DataTable(
			{ // use DataTable, not dataTable
				sDom: // redefine sDom without lengthChange and default search box
					"t" +
					"<'row'<'col-sm-6'i><'col-sm-6'p>>"
			});
			$('#datatable-column-filter thead .row-filter th').each(function()
			{
				$(this).html('<input type="text" class="form-control input-sm" placeholder="Search...">');
			});
			$('#datatable-column-filter .row-filter input').on('keyup change', function()
			{
				dtTable
					.column($(this).parent().index() + ':visible')
					.search(this.value)
					.draw();
			});
			// datatable with paging options and live search
			$('#featured-datatable').dataTable(
			{
				sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
			});
			// datatable with export feature
			var exportTable = $('#datatable-data-export').DataTable(
			{
				sDom: "T<'clearfix'>" +
					"<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
					"t" +
					"<'row'<'col-sm-6'i><'col-sm-6'p>>",
				"tableTools":
				{
					"sSwfPath": "<?=assets_url()?>vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
				}
			});
			// datatable with scrolling
			$('#datatable-basic-scrolling').dataTable(
			{
				scrollY: "300px",
				scrollCollapse: true,
				paging: false
			});
		});
		</script>
		<script>
		function pilih_surat() {
			var myselect = document.getElementById("jenissurat");
			var jns = document.getElementById("jenissurat").value;


			switch (myselect.options[myselect.selectedIndex].value){
				case "INV":
					window.open("<?php echo base_url('admin/BuatSurat/');?>"+jns,'_self',false);
					break;
				case "SPK01":
					window.open("<?php echo base_url('admin/BuatSurat/');?>"+jns,'_self',false);
					break;
				case "SPK02":
					window.open("<?php echo base_url('admin/BuatSurat/');?>"+jns,'_self',false);
					break;
			}
		}
		</script>

		<!-- untuk memilih edit surat -->
		<script>
		function pilih_edit_surat() {
			var myselect = document.getElementById("jenissurat");
			var jns = document.getElementById("jenissurat").value;


			switch (myselect.options[myselect.selectedIndex].value){
				case "INV":
					window.open("<?php echo base_url('admin/EditTemplate/');?>"+jns,'_self',false);
					break;
				case "SPK01":
					window.open("<?php echo base_url('admin/EditTemplate/');?>"+jns,'_self',false);
					break;
				case "SPK02":
					window.open("<?php echo base_url('admin/EditTemplate/');?>"+jns,'_self',false);
					break;
			}
		}
		</script>
		
		<script>
		$(function()
		{
			/*-----------------------------------/
			/*	DATE PICKER
			/*----------------------------------*/
			$('.inline-datepicker').datepicker(
			{
				todayHighlight: true
			});
		});
		</script>
	</body>
</html>