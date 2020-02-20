<?php
    $this->start('sub_header_toolbar');
?>
    <?php if($this->Acl->check(['action'=>'transaction']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'transaction']);?>/<?= $record['upload_doc_id']?>" class="btn btn-warning">
            <i class="la la-angle-double-left"></i> Kembali
        </a>
    <?php endif;?>
<?php
    $this->end();
?>
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Transaksi
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
			<?= $this->Form->create($record,['class'=>'kt-form','type'=>'file', 'id' => 'form-submit']) ?>
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">            
                        <div class='row'>
                            <div class="col-md-4"><b>Komisi Collection</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>view</button></div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class="col-md-4"><b>Biaya pengiriman dokumen</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>view</button></div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class="col-md-4"><b>Settlement hasil ekspor</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>view</button></div>
                        </div>
		            </div>
                    <div class="hidden">
                        <h5>Transaksi Lainnya</h5>
                        <br>
                        <div class='row'>
                            <div class="col-md-12">
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='text-center'>
                                            <th width='5%'>No</th>
                                            <th>No Rek</th>
                                            <th>D/C</th>
                                            <th>Currency</th>
                                            <th>Branch</th>
                                            <th>Cost Center</th>
                                            <th>Reff No.</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $no = 0; foreach($record->transactions_details as $key => $val): $no++; ?>
                                            <tr>
                                                <td class='text-center'><?= $no?></td>
                                                <td><?= $val->no_rek?></td>
                                                <td><?= $val->d_c?></td>
                                                <td><?= $val->currency?></td>
                                                <td><?= $val->branch?></td>
                                                <td><?= $val->cost_center?></td>
                                                <td><?= $val->reff_no?></td>
                                                <td><?= $val->note?></td>
                                            </tr>
                                       <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-4"><b>Memo transaksi lainnya</b></div>
                        <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>View</button></div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-4"><b>Notes</b></div>
                        <div class="col-md-12"><?php echo $this->Form->textarea('note', ['class' => 'form-control','id'=>'note']); ?></div>
                    </div>

                    <!-- status -->
                    <input type="hidden" name='status' id='status'>
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
                                <button type="button" class="btn btn-warning reject">Reject</button>
                                <button type="button" class="btn btn-primary approve">Approve</button>
							</div>
						</div>
					</div>
				</div>
			<?=$this->Form->end();?>
			<!--end::Form-->
		</div>
    </div>
</div>


<?php $this->start('script');?>
    <script>
       $('.reject').on('click', function(){
            validate    = true;
            note        = $('#note').val();
            
            if(!note){
                validate= false;
                msg     = 'harap masukan note terlebih dahulu';
            }
            
            if (validate) {
                Swal.fire({
                title: 'Are you sure to Reject?',
                text: "You won't be able to revert this!",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
                }).then((result) => {
                    if (result.value) {
                        $('#status').val('2');
                        $('#form-submit').submit();          
                    }
                });
            }else{
                Swal.fire(
                'Oops!',
                msg,
                'error'
                )
            }
        });

        $('.approve').on('click', function(){
            validate    = true;
            note        = $('#note').val();
            
            if(!note){
                validate= false;
                msg     = 'harap masukan note terlebih dahulu';
            }
            
            if (validate) {
                Swal.fire({
                title: 'Are you sure to Reject?',
                text: "You won't be able to revert this!",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
                }).then((result) => {
                    if (result.value) {
                        $('#status').val('3');
                        $('#form-submit').submit();          
                    }
                });
            }else{
                Swal.fire(
                'Oops!',
                msg,
                'error'
                )
            }
        });
    </script>
<?php $this->end();?>