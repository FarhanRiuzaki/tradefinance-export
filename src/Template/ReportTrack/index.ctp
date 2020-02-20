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
.br{
    margin-bottom: 5px;
}
</style>
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						<?=$titlesubModule;?>
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
					<div class="row br">
                        <div class="col-md-3">Inquiry No L/C</div>
                        <div class="col-md-3">
                            <select name="lc" id="lc" class='form-control select_lc'>
                            </select>
                        </div>
                    </div>
                    <div class='col-md-12'>
                        <hr>
                    </div>
                    <?php if($record): ?>

                    <br>
                    <div class="row br">
                        <div class="col-md-3">No CIF</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='no_cif' readonly value='<?= $record['t_CIF'] ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Cabang</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='cabang' readonly value='<?= $record['t_branch'] ?> - <?= $record['t_branch_name'] ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">No Tlp</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='no_tlp' readonly value='<?= $record['t_tlp'] ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">NPWP</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='npwp' readonly value='<?= $record['t_npwp'] ?>' >
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Tujuan L/C</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='tujuan_lc' readonly value='<?= $record['t_lc_purpose'] ?>' >
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Jenis L/C</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='jenis_lc' readonly value='<?= $record['t_lc_type'] ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Jenis Fasilitas</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='jenis_fc' readonly value='<?= $record['t_facility_type'] ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Amount</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='amount' readonly value='<?= substr($record['m_32B'], 3) ?>'>
                        </div>
                    </div>
                    <div class="row br">
                        <div class="col-md-3">Currency</div>
                        <div class='col-md-6'>
                            <input type="text" class="form-control" id='currency' readonly value='<?= substr($record['m_32B'],0, 3) ?>'>
                        </div>
                    </div>
                    <br>
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
                    <?php endif; ?>
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

        $('.select_lc').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'masukan no LC',
            ajax: {
                dataType: 'json',
                url: "<?= $this->Url->build(['controller' => 'Apis', 'action' => 'getLc'])?>",
                data: function(params) {
                    return {
                    search: params.term
                    }
                },
                processResults: function (data, page) {
                return {
                    results: data.data
                };
                },
            }
        }).on("select2:select",function(e){
            result  = e.params.data;
            id      = result.id;
            url     = "<?= $this->Url->build(['action' => 'index']) ?>/index/" + id;
            location.href = url;
        });

        $('.clickTr').on('click', function () {  
            id  = $(this).closest('tr').find("input").val();
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id;
            location.href = url;
        });
    </script>
<?php $this->end();?>