<?php
$this->Html->css([
    'dist/vendors/custom/datatables/datatables.bundle.css'
], ['block' => 'cssPageVendors', 'pathPrefix' => '/assets/']);
$this->Html->script([
    'dist/vendors/custom/datatables/datatables.bundle.js'
], ['block' => 'jsPageVendors', 'pathPrefix' => '/assets/']);
?>
<style>
/* Define the hover highlight color for the table row */
.hovertable tr:hover {
        background-color: #fbaa00;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Durasi Pengerjaan SOR
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
					<table class='table table-bordered'>
                        <thead>
                            <tr class='text-center'>
                                <th width='5%'>NO</th>
                                <th>Proses</th>
                                <th>Time Start</th>
                                <th>Durasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='text-center'>
                                <td>1</td>
                                <td align='left'>Advis - Maker</td>
                                <td><?= $record->maker->created->format('d-m-Y H:is') ?></td>
                                <td></td>
                                <td><?php if($record->maker){ echo 'done'; }else{ echo 'on progress'; }?></td>
                            </tr>
                            <tr class='text-center'>
                                <td>2</td>
                                <td align='left'>Advis - Approver</td>
                                <?php if($record->maker->approve_status == '1'):?>
                                    <td><?= $record->maker->approve_date->format('d-m-Y H:i:s') ?></td>
                                    <td></td>
                                    <td>done</td>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>3</td>
                                <td align='left'>Advis Amend - Maker</td>
                                <?php if($record->maker->amend_status == '1'):?>
                                    <td><?= $record->maker->amend_date->format('d-m-Y H:i:s') ?></td>
                                    <td></td>
                                    <td>done</td>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>4</td>
                                <td align='left'>Advis Amend - Approver</td>
                                <?php if($record->maker->amend_approve_status == '1'):?>
                                    <td><?= $record->maker->amend_approve_date->format('d-m-Y H:i:s') ?></td>
                                    <td></td>
                                    <td>done</td>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>5</td>
                                <td align='left'>Upload Document - Counter</td>
                                <td><?= $record->created->format('d-m-Y H:i:s')?></td>
                                <td></td>
                                <td>done</td>
                            </tr>
                            <tr class='text-center'>
                                <td>6</td>
                                <td align='left'>Uji Dokumen - Maker</td>
                                <?php if($record->uji_docs):?>
                                    <td><?= $record->uji_docs[0]->created->format('d-m-Y H:i:s') ?></td>
                                    <td></td>
                                    <td>done</td>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>7</td>
                                <td align='left'>Uji Dokumen - Approver</td>
                                <?php if($record->uji_docs):?>
                                    <?php $no = 0; if($record->uji_docs[0]->status == '2' || $record->uji_docs[0]->status == '3'): $no++;?>
                                        <td><?= $record->uji_docs[0]->approve_date->format('d-m-Y H:i:s') ?></td>
                                        <td></td>
                                        <td>done</td>
                                    <?php endif; ?>
                                    <?php if($no ==0 ): ?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                    <?php endif;?>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>8</td>
                                <td align='left'>Transaksi - Maker</td>
                                <?php if($record->transactions):?>
                                    <td><?= $record->uji_docs[0]->created->format('d-m-Y H:i:s') ?></td>
                                    <td></td>
                                    <td>done</td>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>
                            <tr class='text-center'>
                                <td>9</td>
                                <td align='left'>Transasksi Approver</td>
                                <?php if($record->transactions):?>
                                    <?php $no = 0; if($record->transactions[0]->status == '2' || $record->transactions[0]->status == '3'): $no++;?>
                                        <td><?= $record->transactions[0]->tgl_approve_trx->format('d-m-Y H:i:s') ?></td>
                                        <td></td>
                                        <td>done</td>
                                    <?php endif; ?>
                                    <?php if($no ==0 ): ?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                    <?php endif;?>
                                <?php else:?>
                                    <td></td>
                                    <td></td>
                                    <td>on progress</td>
                                <?php endif; ?>
                            </tr>

                        </tbody>
                    </table>
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
    </script>
<?php $this->end();?>