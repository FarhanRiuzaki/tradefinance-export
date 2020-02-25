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
						Revisi SOR
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
			<?= $this->Form->create($uploadDoc,['class'=>'kt-form','type'=>'file', 'id' => 'form-submit']) ?>
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first">
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
                                'required',
                                'type' => 'text'
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
                                        <th width='25%'>Revisi</th>
                                        <th width='10%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; foreach($uploadDoc->upload_doc_file  as $key => $val): $no++; ?>
                                    <tr>
                                        <td align='center'><?= $no ?></td>
                                        <td><?= $val->file_name ?></td>
                                        <td><?= $val->note ?></td>
                                        <td>
                                        <input type="file" name='upload_doc_file[<?= $val->id ?>][file]' class='form-control file'>
                                        <input type="hidden" name='upload_doc_file[<?= $val->id ?>][id]' value='<?= $val->id ?>'>
                                        </td>
                                        <td class='text-center'><?= $this->Html->Link('View', '/'. $val->file_dir . $val->file, ['class' => 'btn btn-outline-warning', 'target' => '_blank']);?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
                                <button type="submit" class="btn btn-primary submit">Submit</button>
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
    $('#amount').number(true, 2);
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
    </script>
<?php $this->end();?>