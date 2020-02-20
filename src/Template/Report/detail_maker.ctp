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
						Daftar Rekening
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
					<div class="row">
                        <div class="col-md-3">No CIF</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_CIF ?>' readonly>
                        </div>
                        <div class='col-md-3' align='right'><h4>Data MT</h4></div>
                        <div class="col-md-3">
                            <button class='btn btn-primary btn-block'>MT 700</button>
                        </div>
                    </div>
                    <br>
					<div class="row">
                        <div class="col-md-3">Cabang</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_branch ?> - <?= $record->t_branch_name ?>' readonly>
                        </div>
                        <div class="col-md-3 offset-3">
                            <button class='btn btn-primary btn-block'>MT 701</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">NO Tlp</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_tlp ?>' readonly>
                        </div>
                        <div class="col-md-3 offset-3">
                            <button class='btn btn-primary btn-block'>MT 707</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">NPWP</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_npwp ?>' readonly>
                        </div>
                        <div class="col-md-3 offset-3">
                            <button class='btn btn-primary btn-block'>MT 708</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Tujuan L/C</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_lc_purpose ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Jenis L/C</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_lc_type ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Jenis Fasilitas</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->t_facility_type ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Amount</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= substr($record->m_32B, 3) ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Currency</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= substr($record->m_32B,0, 3) ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <h5>List SOR</h5>
                    <div class='row'>
                        <div class="col-md-12 table-responsive">
                            <table class='table table-bordered dataTable'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>No</th>
                                        <th>No SOR</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Status L/C & SKBDN</th>
                                        <th>Status SOR</th>
                                    </tr>
                                </thead>
                                <tbody class='hovertable'>
                                    <?php $no = 0; foreach($record->upload_doc as $key => $val): $no++;
                                    $amnt_mkr   = substr($record->m_32B, 3);
                                    $amnt_mkr   = (float) $amnt_mkr;
                                    $amount     = $val->amount;
                                    ?>
                                        <tr class='clickTr'>
                                            <td><?= $no ?></td>
                                            <td><?= $val->no_sor?></td>
                                            <td><?= number_format($val->amount, 2)?></td>
                                            <td><?= $val->currency?></td>
                                            <td>
                                            <?php if($amnt_mkr < $amount){
                                                echo 'Under drawn';
                                            } ?>
                                            <?php if($amnt_mkr == $amount){
                                                echo 'Ok';
                                            }  ?>
                                            <?php if($amnt_mkr > $amount){
                                                echo 'Over Drawn';
                                            }  ?>
                                            </td>
                                            <td>
                                                <input type="hidden" value='<?= $val->id?>'>
                                                <?php if($val->status_sor == 0){
                                                    echo 'Sent by counter';
                                                } ?>
                                                <?php if($val->status_sor == 1){
                                                    echo 'Advis / Amend done';
                                                } ?>
                                                <?php if($val->status_sor == 3){
                                                    echo 'Rejected by trade';
                                                } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
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

        $('.clickTr').on('click', function () {  
            id  = $(this).closest('tr').find("input").val();
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id;
            location.href = url;

            
        });
    </script>
<?php $this->end();?>