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

                        <input type="hidden" name='upload_doc_id' value='<?= $this->request->pass[0]?>'>
            
                        <div class='row'>
                            <div class="col-md-4"><b>Komisi Collection</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>generate</button></div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class="col-md-4"><b>Biaya pengiriman dokumen</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>generate</button></div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class="col-md-4"><b>Settlement hasil ekspor</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>generate</button></div>
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
                                            <th width='15px'>No</th>
                                            <th>No Rek</th>
                                            <th>D/C</th>
                                            <th>Currency</th>
                                            <th>Branch</th>
                                            <th>Cost Center</th>
                                            <th>Reff No.</th>
                                            <th>Keterangan</th>
                                            <th width='55px'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                                <button type='button' class='btn btn-success addFile'>Tambah</button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-4"><b>Draft checklist hasil uji dokumen</b></div>
                        <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>View</button></div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-4"><b>Draft notifikasi hasil uji dokumen</b></div>
                        <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>View</button></div>
                    </div>
                    

                    <!-- //status 1 sent by maker -->
                    <input type="hidden" name='status' value='1'>

	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
                                <button type="button" class="btn btn-primary submit">Submit</button>
								<!-- <button type="reset" class="btn btn-warning">Reset</button> -->
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
        arrayBranch = <?= json_encode($arrayBranch)?>;           

        no          = 0;
        count       = 0;

        $('.addFile').on('click', function () {  
            no++;
            count++;

            select  = "<select name='transactions_details["+ count +"][branch]' class='form-control'>";
            $.each(arrayBranch, function (k, v) {  
                select += "<option value='" + v.id + "'>" + v.value + "</option>";
            });
            select  += "</select>";


            html = "<tr>"
                + "<td align='center'>"+ no +"</td>"

                + "<td width='20%'><input type='text' data-name='note' name='transactions_details["+count+"][no_rek]' class='form-control'></input></td>"

                + "<td width='7%'><select name='transactions_details["+count+"][d_c]' class='form-control'><option value='D'>D</option><option value='C'>C</option></select></td>"

                + "<td width='8%'><select name='transactions_details["+count+"][currency]' class='form-control'><option value='IDR'>IDR</option><option value='USD'>USD</option><option value='AUD'>AUD</option><option value='SGD'>SGD</option><option value='NZD'>NZD</option><option value='EUR'>EUR</option><option value='GBP'>GBP</option><option value='JPY'>JPY</option><option value='CHF'>CHF</option><option value='CNY'>CNY</option></select></td>"

                + "<td>"+ select +"</td>"
                + "<td><input type='text' data-name='note' name='transactions_details["+count+"][cost_center]' class='form-control'></input></td>"
                + "<td><input type='text' data-name='note' name='transactions_details["+count+"][reff_no]' class='form-control'></input></td>"
                + "<td><input type='text' data-name='note' name='transactions_details["+count+"][note]' class='form-control'></input></td>"
                + "<td class='text-center' style='width: 15px'><button class='btn btn-danger delFile btn-icon'><span class='fa fa-times'></span></button></td>"
                + "</tr>";
            
            $('tbody').append(html);
            validateD = false;
            
        });

        //delete file upload
        $('body').on('click', '.delFile', function () {  
            $(this).closest('tr').remove(); 
            
            // reset nomer cuy
            $('tbody tr').each(function(i){            
                $($(this).find('td')[0]).html(i+1);          
            }); 

            no--;
        });

        $('body').on('click', '.submit', function () {  
            status_uji  = $('#status-uji').val();
            tgl_uji     = $('#tgl-uji').val();
            tgl_target  = $('#tgl-target').val();

            validateData = 0;
            $("tbody tr").each(function() {
                quantity1 = $(this).find("textarea").val();
                if(quantity1){
                    validateData++;
                }
            }); 
            
            validate    = true;
            // if(status_uji == 'Non-comply presentation'){
            //     if(validateData < no){
            //         msg         = "Lengkapi data discrepancy: " + (no - validateData);
            //         validate    = false;    
            //     }
            //     if(no == 0){
            //         msg         = "Tambahkan minimal 1 discrepancy.";
            //         validate    = false;  
            //         $('.addFile').trigger('click');  
            //     }
            // }
            
            if(validate){
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
                }).then((result) => {
                if (result.value) {
                    $('#form-submit').submit();
                    // alert('ok')
                }
                });
            }else{
                swal.fire('Oops', msg, 'error');
            }
            
        })
    </script>
<?php $this->end();?>