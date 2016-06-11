<?php $this->load->view('header-template');?>
<body>
<!-- Page container -->
 	<div class="page-container">
	<?php $this->load->view('sidebar-template-personal');?>
	<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3>Penugasan</h3>
				</div>
			</div>
		<!-- /sidebar -->
<a href="<?php echo base_url();?>penugasan/penugasan_detail_add" class="btn btn-xs">Add</a>
<div id="grid" style="width: 100%; height: 400px;"></div>
</body>
<script type="text/javascript">	
$(function () {    
    $('#grid').w2grid({ 
        name: 'grid', 
		recid: 'personnel_id',
        show: { 
            toolbar: true,
            footer: true,
           // toolbarAdd: true,
            toolbarDelete: true,
           // toolbarSave: true,
            toolbarEdit: true,
			selectColumn: true
        },
		
        searches: [                
            { field: 'personnel_id', caption: 'ID', type: 'text' },
            { field: 'assignment_type', caption: 'Alasan', type: 'text' },
            
        ],
        columns: [                
            { field: 'personnel_id', caption: 'ID', size: '100px', sortable: true, attr: 'align=center' },
            { field: 'assignment_type', caption: 'Alasan', size: '30%', sortable: true },
			{ field: 'start_date', caption: 'Tanggal Masuk', size: '30%', sortable: true },
			{ field: 'end_date', caption: 'Tanggal Selesai', size: '30%', sortable: true },
           // { field: 'opsidelete', caption: 'Opsi Delete', size: '5%', sortable: true },
			//{ field: 'opsiupdate', caption: 'Opsi Update', size: '5%', sortable: true },
        ],
        onAdd: function (event) {
           // w2ui['form'].url = 'pegawai/add_pegawai';
		   //w2alert('<?php echo base_url();?>pegawai/add_pegawai');
			//w2popup.load({ url: '<?php echo base_url();?>pegawai/add_pegawai' });
			//w2ui['layout'].url = '<?php echo base_url();?>pegawai/add_pegawai';
			//w2ui['layout'].refresh();
		//w2popup.load({ url: '<?php echo base_url();?>pegawai/add_pegawai' });
        },
        onEdit: function (event) {
            w2alert('edit');
        },
        onDelete: function (event) {
            console.log('delete has default behaviour');
        },
        onSubmit: function (event) {
            w2alert('save');
        }
    });    
	 w2ui['grid'].load('<?php echo base_url();?>penugasan/get_all_penugasan_detail_json/10000006');
	 //w2ui['grid'].select(10000004);
	 
});
</script>
 
</div>
</div>
</html>	