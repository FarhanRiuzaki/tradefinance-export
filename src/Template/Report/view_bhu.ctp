<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Balasan Hasil Uji dari nasabah
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
                    <div class='row'>
                        <div class='col-12'>
                            <table class='table table-bordered'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>No</th>
                                        <th>Dokumen</th>
                                        <th>Keterangan</th>
                                        <th width='10%'>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; foreach ($record->uji_docs[0]->uji_docs_file as $key => $val) { $no++; ?>
                                        <tr>
                                            <td class='text-center'><?= $no?></td>
                                            <td><?= $val->doc_name ?></td>
                                            <td><?= $val->note ?></td>
                                            <td align='center'><?= $this->Html->Link('View', '/'. $val->file_dir . $val->file, ['class' => 'btn btn-outline-warning', 'target' => '_blank']);?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if($no == 0): ?>
                                        <tr>
                                            <td colspan='4' align='center'>Data tidak tersedia</td>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> 
			<!--end::Form-->
		</div>
    </div>
</div>