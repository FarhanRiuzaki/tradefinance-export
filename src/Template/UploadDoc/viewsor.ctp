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
                                        <th width='10%'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=0; foreach($uploadDoc->upload_doc_file  as $key => $val): $no++; ?>
                                    <tr>
                                        <td align='center'><?= $no ?></td>
                                        <td><?= $val->file_name ?></td>
                                        <td><?= $val->note ?></td>
                                        <td class='text-center'>
                                        <!-- <?php $image = '/'. $val->file_dir . $val->file;?>
                                        <img src="<?= $image ?>"  height="50px"> -->
                                        <?= $this->Html->Link('View', '/'. $val->file_dir . $val->file, ['class' => 'btn btn-outline-warning', 'target' => '_blank']);?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
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
    </script>
<?php $this->end();?>