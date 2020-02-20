<?php
    $this->start('sub_header_toolbar');
?>
    <?php if($this->Acl->check(['action'=>'index']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'index']);?>" class="btn btn-warning">
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
						Hasil Uji Dokumen
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
			<?= $this->Form->create($record,['class'=>'kt-form','type'=>'file', 'id' => 'form-submit']) ?>
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">
                    
                        <?php
                            echo $this->Form->control('status_uji',[
                                'class'         =>'form-control m-input',
                                'templateVars'  => [
                                    'colsize'       => 'col-lg-4 col-xl-3',
                                ],
                                'label'         => [
                                    'class'         => 'col-lg-4 col-xl-2 col-form-label',
                                    'text'          =>'Status hasil uji dokumen'
                                ],
                                'readonly',
                            ]);
                            echo $this->Form->control('tgl_uji',[
                                'class'         =>'form-control m-input',
                                'templateVars'  => [
                                    'colsize'       => 'col-lg-4 col-xl-3',
                                ],
                                'label'         => [
                                    'class'         => 'col-lg-4 col-xl-2 col-form-label',
                                    'text'          =>'Tanggal uji dokumen'
                                ],
                                'required',
                                'type'          => 'text',
                                'value'         => $record->tgl_uji->format('d-m-Y')
                            ]);
                            echo $this->Form->control('tgl_target',[
                                'class'         =>'form-control m-input',
                                'templateVars'  => [
                                    'colsize'       => 'col-lg-4 col-xl-3',
                                ],
                                'label'         => [
                                    'class'         => 'col-lg-4 col-xl-2 col-form-label',
                                    'text'          =>'Tanggal target'
                                ],
                                'required',
                                'type'          => 'text',
                                'value'         => $record->tgl_target->format('d-m-Y')
                            ]);
                            
                        ?>
                        <div class='row'>
                            <div class="col-md-4"><b>Dokumen</b></div>
                            <div class="col-md-3"><button type='button' class='btn btn-outline-brand'>View</button></div>
                        </div>
		            </div>
                    <div class="hidden">
                        <h5>Discrepancies</h5>
                        <br>
                        <div class='row'>
                            <div class="col-md-12">
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='text-center'>
                                            <th width='5%'>No</th>
                                            <th>Discrepancy</th>
                                            <th width='10%'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; foreach ($record->uji_docs_discrepancies as $key => $val) { $no++; ?>
                                            <tr>
                                                <td class='text-center'><?= $no?></td>
                                                <td><?= $val->discrepancy ?></td>
                                                <td class='text-center'>
                                                    <input type="hidden" name="delete[<?= $no ?>]" value='<?= $val->id?>'>
                                                    <button class='btn btn-outline-danger delFile btn-icon'><span class='fa fa-times'></span></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
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
        // $('.hidden').hide();
        $('#amount').number(true, 2);
        $('#tgl-uji, #tgl-target').datepicker({
            format: 'dd-mm-yyyy',
            orientation: 'bottom',
            autoclose: true,
            todayHighlight: true
        });

        $('#status-uji').on('change', function(){
            var val = $(this).val();

            if(val != 'Non-comply presentation'){
                // reset no
                no = 0;
                $('tbody').empty();                
            }

        });

        no          = parseInt("<?= $no?>");
        count       = 0;

        $('.addFile').on('click', function () {  
            no++;
            count++;
            html = "<tr>"
                + "<td class='text-center'>"+ no +"</td>"
                + "<td><textarea data-name='note' name='uji_docs_discrepancies["+count+"][discrepancy]' class='form-control discrepancy'></textarea></td>"
                + "<td class='text-center'><button class='btn btn-outline-danger delFile btn-icon'><span class='fa fa-times'></span></button></td>"
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

            validateData = parseInt("<?= $no?>");
            $("tbody tr").each(function() {
                quantity1 = $(this).find("textarea").val();
                if(quantity1){
                    validateData++;
                }
            }); 
            
            validate    = true;
            if(status_uji == 'Non-comply presentation'){
                if(validateData < no){
                    msg         = "Lengkapi data discrepancy: " + (no - validateData);
                    validate    = false;    
                }
                if(no == 0){
                    msg         = "Tambahkan minimal 1 discrepancy.";
                    validate    = false;  
                    $('.addFile').trigger('click');  
                }
            }
            if(!tgl_uji){
                msg         = "Masukan Tanggal uji.";
                validate    = false;  
            }
            if(!tgl_target){
                msg         = "Masukan Tanggal target.";
                validate    = false;  
            }
            
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