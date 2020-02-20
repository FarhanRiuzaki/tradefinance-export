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
                                'readonly'

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
                                'readonly',
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
                                'readonly',
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; foreach ($record->uji_docs_discrepancies as $key => $val) { $no++; ?>
                                            <tr>
                                                <td class='text-center'><?= $no?></td>
                                                <td><?= $val->discrepancy ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
			<?=$this->Form->end();?>
			<!--end::Form-->
		</div>
    </div>
</div>

<?php $this->start('script');?>
    <script>    
    </script>
<?php $this->end();?>