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
						<?=$titlesubModule;?>
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
			<?= $this->Form->create($uploadDoc,['class'=>'kt-form','type'=>'file', 'id' => 'form-submit']) ?>
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">
                        <input type="hidden" name='maker_id' value='<?= $this->request->pass[0]?>'>
                        <?php
                            echo $this->Form->control('no_sor',[
                                'class'=>'form-control m-input',
                                'templateVars' => [
                                    'colsize' => 'col-lg-4 col-xl-3',
                                ],
                                'label' => [
                                    'class'=> 'col-lg-3 col-xl-2 col-form-label',
                                    'text'=>'No SOR'
                                ],
                                'value' => $code,
                                'readonly'
                            ]);
                            echo $this->Form->control('amount',[
                                'class'=>'form-control m-input',
                                'templateVars' => [
                                    'colsize' => 'col-lg-4 col-xl-3',
                                ],
                                'label' => [
                                    'class'=> 'col-lg-3 col-xl-2 col-form-label',
                                    'text'=>'Amount'
                                ],
                                'required'
                            ]);
                            echo $this->Form->control('currency',[
                                'class'=>'form-control m-input',
                                'templateVars' => [
                                    'colsize' => 'col-lg-4 col-xl-3',
                                ],
                                'label' => [
                                    'class'=> 'col-lg-3 col-xl-2 col-form-label',
                                    'text'=>'Currency'
                                ],
                                'value' => substr($maker->m_32B, 0, 3),
                                'readonly'
                            ]);
                        ?>

		            </div>
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
                                        <th width='25%'>Upload</th>
                                        <th width='10%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <button type='button' class='btn btn-success addFile'>Tambah</button>
                        </div>
                    </div>
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
                                <button type="button" class="btn btn-primary submit">Submit</button>
								<button type="reset" class="btn btn-warning">Reset</button>
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
        $('.hide').hide();
        $('#amount').number(true, 2);

        $('#user-group-id').on('change', function(){
            var grup = $(this).val();
            if(grup == 2){
                $('.hide').show();
            }else{
                $('.hide').hide();
            }

        });

        no          = 0;
        files_cek   = 0;
        count       = 0;
        $('.addFile').on('click', function () {  
            no++;
            count++;
            html = "<tr>"
                + "<td>"+ no +"</td>"
                + "<td><input data-name='file_name' name='upload_doc_file["+count+"][file_name]' class='form-control'></td>"
                + "<td><input data-name='note' name='upload_doc_file["+count+"][note]' class='form-control'></td>"
                + "<td><input data-name='file' type='file' name='upload_doc_file["+count+"][file]' class='form-control file'></td>"
                + "<td class='text-center'><button class='btn btn-outline-danger delFile btn-icon'><span class='fa fa-times'></span></button></td>"
                + "</tr>";
            $('tbody').append(html);
            
        });

        //delete file upload
        $('body').on('click', '.delFile', function () {  
            $(this).closest('tr').remove(); 
            
            // reset nomer cuy
            $('tbody tr').each(function(i){            
                $($(this).find('td')[0]).html(i+1);          
            }); 

            no--;
            files_cek - 1;

        });

        // validasi file upload
        $('body').on('change', '.file', function () {  
            file_name   = this.files[0].name;
            size        = this.files[0].size / 1024;
            limit       = 1024;
            validExtensions = ["pdf", "jpg"];

            extension   = file_name.substr( (file_name.lastIndexOf('.') + 1) );
            
            change_name = file_name.split('.').shift() + '' + parseInt(Math.random() * 10000) + '.' + extension;
            // set         = $(this).val().replace(file_name, change_name);
            // $(this).val(set);
            // console.log();
            
            this.files[0].name = change_name;

            valid = true;
            if(validExtensions.indexOf(extension) == -1){
                swal.fire('Oops', 'file harus berektensi: jpg, pdf', 'info');
                $(this).val('');
                valid = false;
            }

            if(size > limit){
                swal.fire('Oops', 'file harus berukuran kurang dari 1MB', 'info');
                $(this).val('');
                valid = false;
            }

            if(valid){
                files_cek++;
            }
            
        })

        amount_maker    = "<?= substr($maker->m_32B, 3)?>";
        $('body').on('click', '.submit', function () {  
            amount      = $('#amount').val();
            validate    = true;
            if(files_cek < no){
                msg         = "Pilih Upload file: " + (no - files_cek);
                validate    = false;    
            }
            if(no == 0){
                msg         = "Tambahkan dokumen terlebih dahulu.";
                validate    = false;  
                $('.addFile').trigger('click');  
            }
            if(parseFloat(amount) > parseFloat(amount_maker)){
                msg         = "Total amount SOR melebihi amount L/C.";
                validate    = false;
            }
            if(!amount){
                msg         = "Masukan amount terlebih dahulu";
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
                }
                });
            }else{
                swal.fire('Oops', msg, 'error');
            }
            
        })
    </script>
<?php $this->end();?>