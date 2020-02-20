<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Hasil Uji Dokumen
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
                    <div class="hidden">
                        <div class='row'>
                            <div class="col-md-12">
                                <table class='table'> 
                                    <tr>
                                        <td width='25%'>Status hasil uji dokumen</td>
                                        <td width='2%'>:</td>
                                        <td><?= $record->uji_docs[0]->status_uji ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal uji dokumen</td>
                                        <td>:</td>
                                        <td><?= $record->uji_docs[0]->tgl_uji->format('Y-m-d') ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal target</td>
                                        <td>:</td>
                                        <td><?= $record->uji_docs[0]->tgl_target->format('Y-m-d') ?></td>
                                    </tr>
                                </table>
                                
                                <h5>Discrepancies</h5>
                                <br>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='text-center'>
                                            <th width='5%'>No</th>
                                            <th>Discrepancy</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; foreach ($record->uji_docs[0]->uji_docs_discrepancies as $key => $val) { $no++; ?>
                                            <tr>
                                                <td class='text-center'><?= $no?></td>
                                                <td><?= $val->discrepancy ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php if($no == 0){?>
                                            <tr>
                                                <td colspan='2' align='center'>data tidak tersedia</td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
			<!--end::Form-->
		</div>
    </div>
</div>