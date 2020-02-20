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
						<?=$titlesubModule;?>
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
					<div class="row">
                        <div class="col-md-3">Branch</div>
                        <div class="col-md-3">
                            <select name="branch" id="branch" class='form-control'>
                                <?php foreach($arrayBranch as $key => $val): ?>
                                    <option value="<?= $val['id']?>"><?= $val['value']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Date</div>
                        <div class='col-md-6'>
                            <div class="input-group input-daterange">
                                <input type="text" class="form-control" id='start' autocomplete='off'>
                                <div class="input-group-prepend"><span class="input-group-text">To</span></div>
                                <input type="text" class="form-control" id='end' autocomplete='off'>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-3 offset-3">
                            <button type='button' class='btn btn-primary search'>Search</button>
                            <button type='button' class='btn btn-warning reset'>Reset</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class='row'>
                        <div class="col-md-12 table-responsive">
                            <table class='table table-bordered dataTable'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>No</th>
                                        <th>No Account</th>
                                        <th>Jenis</th>
                                        <th>No L/C & SKBDN</th>
                                        <th>CIF No</th>
                                        <th>Cabang</th>
                                        <th>Beneficiary</th>
                                        <th>Currency</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class='hovertable'>
                                    <?php $no = 0; foreach($maker as $key => $val): $no++;?>
                                        <tr class='clickTr'>
                                            <td><?= $no ?></td>
                                            <td><?= $val->no_reg?></td>
                                            <td><?= $val->t_lc_type?></td>
                                            <td><?= $val->no_lc ?></td>
                                            <td><?= $val->t_CIF  ?></td>
                                            <td><?= $val->t_branch  ?></td>
                                            <td><?= $val->m_59  ?></td>
                                            <td><?= substr($val->m_32B,0,3) ?></td>
                                            <td><?= substr($val->m_32B, 3)  ?></td>
                                            <td>
                                                <input type="hidden" value='<?= $val->id?>'>
                                                <?php if($val->status == 1): ?>
                                                    Send by maker
                                                <?php elseif($val->status == 2): ?>
                                                    Rejected by approver
                                                <?php elseif($val->status == 3): ?>
                                                    Approved
                                                <?php else: ?>
                                                    Save
                                                <?php endif; ?>
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
        branch  = "<?= $branch_search?>";
        start   = "<?= $start?>";
        end     = "<?= $end?>";
        
        if(branch){
            $("#branch").val(branch);
            $("#start").val(start);
            $("#end").val(end);
        }
        $('.dataTable').dataTable({
            'paging': false
        });

        $('#branch').select2();

        $('.input-daterange').datepicker({
            format: 'yyyy-mm-dd',
            orientation: 'bottom auto',
            todayHighlight: 'true',
            autoclose: 'true'
        });

        $('.search').on('click', function () {  
            branch  = $('#branch').val();
            start   = $('#start').val();
            end     = $('#end').val();

            // set url
            url     = "<?= $this->Url->build(['action' => 'index'])?>?branch=" + branch + "&start=" + start + "&end=" + end;

            if(!start && !end){
                swal.fire('Oops', 'masukab tanggal terlebih dahulu', 'error');
            }else{
                location.href = url;

            }
        });

        $('.clickTr').on('click', function () {  
            id  = $(this).closest('tr').find("input").val();
            url = "<?= $this->Url->build(['action' => 'detailMaker']) ?>/" + id;
            location.href = url;
            
        });

        $('.reset').on('click', function () {  
            url = "<?= $this->Url->build(['action'=>'index'])?>";
            location.href = url;

        });
    </script>
<?php $this->end();?>