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
						Upload dokumen balasan hasil uji dokumen dari nasabah
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
			<?= $this->Form->create($record,['class'=>'kt-form','type'=>'file', 'id' => 'form-submit']) ?>
				<div class="kt-portlet__body">
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
                                <button type="button" class="btn btn-primary submit">Save</button>
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
        uji_doc_id  = "<?= $this->request->pass[0]?>";
        no          = 0;
        files_cek   = 0;
        count       = 0;
        $('.addFile').on('click', function () {  
            no++;
            count++;
            no_sor      = $('#no-sor').val();

            dokumen     = 'Balasan hasil uji doc ' + count;
            html = "<tr>"
                + "<td align='center'>"+ no +"</td>"
                + "<td><input type='hidden' data-name='id' name='uji_docs_file["+count+"][uji_doc_id]' class='form-control' value='"+ uji_doc_id +"'><input data-name='doc_name' name='uji_docs_file["+count+"][doc_name]' class='form-control' value='"+ dokumen +"'></td>"
                + "<td><input data-name='note' name='uji_docs_file["+count+"][note]' class='form-control'></td>"
                + "<td><input data-name='file' type='file' name='uji_docs_file["+count+"][file]' class='form-control file'></td>"
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

        $('body').on('click', '.submit', function () {  
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