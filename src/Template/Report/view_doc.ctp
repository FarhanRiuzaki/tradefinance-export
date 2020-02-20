<?php
$this->Html->css([
    'dist/vendors/custom/datatables/datatables.bundle.css'
], ['block' => 'cssPageVendors', 'pathPrefix' => '/assets/']);
$this->Html->script([
    'dist/vendors/custom/datatables/datatables.bundle.js'
], ['block' => 'jsPageVendors', 'pathPrefix' => '/assets/']);
?>
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Data SOR
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
                    <h5>Daftar Dokumen</h5>
                    <br>
                    <div class='row'>
                        <div class="col-md-12">
                            <table class='table table-bordered'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>No</th>
                                        <th width='30%'>Dokumen</th>
                                        <th width='30%'>Keterangan</th>
                                        <th width='10%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; foreach($record->upload_doc_file  as $key => $val): $no++; ?>
                                    <tr>
                                        <td align='center'><?= $no ?></td>
                                        <td><?= $val->file_name ?></td>
                                        <td><?= $val->note ?></td>
                                        <td class='text-center'><?= $this->Html->Link('View', '/'. $val->file_dir . $val->file, ['class' => 'btn btn-outline-warning', 'target' => '_blank']);?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
	            </div>
			<!--end::Form-->
		</div>
    </div>
</div>

<?php $this->start('script');?>
    <script>
        $('.dataTable').dataTable({
            'paging': false
        });
        id  = "<?= $record->id ?>";
        $('.btn1').on('click', function () {  
            url = "<?= $this->Url->build(['action' => 'viewDoc']) ?>/" + id;
            window.open(url);
        });
    </script>
<?php $this->end();?>