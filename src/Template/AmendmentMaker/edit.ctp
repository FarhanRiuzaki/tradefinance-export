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
<style>
.table th, .table td {
    padding: 0.75rem;
    vertical-align: middle;
    border-top: 1px solid #ccc;
}
</style>

<!-- MODAL VIEW -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data MT 707 - <?= $maker->m_20 ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class='table tablemt707'>

        </table>
      </div>
    </div>
  </div>
</div>


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
            <?php 
            $myTemplates = [
                'inputContainer' => '<div>{{content}}</div>',
            ];
            $this->Form->templates($myTemplates);
            ?>
			<!--begin::Form-->
			<?= $this->Form->create($maker,['class'=>'kt-form','type'=>'file', 'id' =>'form-submit']) ?>
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first" style='color: black'>
                    
                        <h5>>View Data</h5>
                        <table class='table'>
                            <tr>
                                <td width='5%'></td>    
                                <td width='25%'>MT 707</td>    
                                <td><button class='btn btn-outline-primary viewmt707' type='button'>View</button></td>    
                            </tr>
                        </table>
                        <h5>>Data MT700</h5>
                        
                        <table width='100%' class='table table-striped'>
                            <tr style='vertical-align: middle'>
                                <td width='5%' class='text-center'>27</td>
                                <td width='40%'>Sequence of Total</td>
                                <td  width='5%' class='text-right'>: </td>
                                <td width='50%'>
                                    <?= $this->Form->control('m_27',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>40A</td>
                                <td>Form of Credit Documentary</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_40A',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>20</td>
                                <td>Documentary Credit Number</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_20',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>23</td>
                                <td>Reference to Pre-Advice</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_23',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>31C</td>
                                <td>Date of Issue</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_31C',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>40E</td>
                                <td>Applicable Rules</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_40E',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>31D</td>
                                <td>Date and Place of Expiry</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_31D',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>51a</td>
                                <td>Aplicant Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_51a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>50</td>
                                <td>Aplicant</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_50',[
                                        'class' =>'form-control',
                                        'label' => false,
                                        'type'  => 'textarea'
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>59</td>
                                <td>Beneficiary</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_59',[
                                        'class' =>'form-control',
                                        'label' => false,
                                        'type'  => 'textarea'

                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>32B</td>
                                <td>Currency Code, Amount</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_32B',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39A</td>
                                <td>Percentage Credit Amount Tolerance</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_39A',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39B</td>
                                <td>Maximum Credit Amount</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_39B',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39C</td>
                                <td>Additional Amounts Covered</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_39C',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>41a</td>
                                <td>Available With... By... </td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_41a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42a</td>
                                <td>Drawee</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_42a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42M</td>
                                <td>Mixed Payment Details</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_42M',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42P</td>
                                <td>Negotiation/Deferred Payment Details</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_42P',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>43P</td>
                                <td>Partial Shipments</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_43P',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>43T</td>
                                <td>Transhipment</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_43T',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44A</td>
                                <td>Place of Taking in Charge/Dispatch From... /Palce of Receipt</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44A',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44E</td>
                                <td>Port of Loading/Airport of Departure</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44E',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44F</td>
                                <td>Port of Discharge/Airport of Destination</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44F',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44B</td>
                                <td>Place of Final Destination/For Transportation to... /Place of Delivery</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44B',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44C</td>
                                <td>Latest Date of Shipment</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44C',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44D</td>
                                <td>Shipment Period</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_44D',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>45A</td>
                                <td>Description of Goods</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_45A',[
                                        'class' =>'form-control',
                                        'label' => false,    
                                        'type'  => 'textarea'

                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>46A</td>
                                <td>Documents Required</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_46A',[
                                        'class'=>'form-control',
                                        'label' => false,
                                        'type'  => 'textarea'
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>47A</td>
                                <td>Additional Conditions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_47A',[
                                        'class'=>'form-control',
                                        'label' => false,
                                        'type'  => 'textarea'
                                        ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49G</td>
                                <td>Special Payment Conditions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_49G',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49H</td>
                                <td>Special Payment Conditions For Receiving Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_49H',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>71D</td>
                                <td>Charges</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_71D',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>48</td>
                                <td>Period for Presentation</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_48',[
                                        'class'=>'form-control',
                                        'label' => false,
                                        'type'  => 'textarea'
                                        ]); ?>  
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49</td>
                                <td>Confirmation Instructions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_49',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>58a</td>
                                <td>Requested Confirmation Party</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_58a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>53a</td>
                                <td>Reimbursing Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_53a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>78</td>
                                <td>Instructions to the Paying/Accepting/Negotiating Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_78',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>57a</td>
                                <td>Second Advising Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_57a',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>72Z</td>
                                <td>Sender to Receiver information</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?= $this->Form->control('m_72Z',[
                                        'class'=>'form-control',
                                        'label' => false,
                                    ]); ?>
                                </td>
                            </tr>
                        </table>
                        
                        <br>
                        <h5>>Data tambahan</h5>
                        <br>
                        <table class='table table-striped'>
                            <tr style='vertical-align: middle'>
                                <td width='5%' class='text-center'></td>
                                <td width='40%'>No CIF</td>
                                <td  width='5%' class='text-right'>: </td>
                                <td width='50%'>
                                    <div class="row">
                                        <div class='col-md-6'>
                                            <?= $this->Form->control('t_CIF',[
                                                'class'=>'form-control',
                                                'label' => false,
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>Cabang</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_branch',[
                                                'class'     =>'form-control',
                                                'label'     => false,
                                                'options'   => $branch,
                                                'empty'     => 'Pilih Cabang'
                                            ]); ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_branch_name',[
                                                'class'=>'form-control',
                                                'label' => false,
                                                'readonly'
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>No Telepon</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_tlp',[
                                                'class'=>'form-control',
                                                'label' => false,
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>NPWP</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_npwp',[
                                                'class'=>'form-control',
                                                'label' => false,
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>Tujuan L/C</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_lc_purpose',[
                                                'class'     =>'form-control',
                                                'label'     => false,
                                                'options'   => [
                                                    'L/C Luar Neger'            =>'L/C Luar Neger', 
                                                    'L/C Dalam Negeri (SKBDN)'  =>'L/C Dalam Negeri (SKBDN)'
                                                    ]
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>Jenis L/C</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_lc_type',[
                                                'class'     =>'form-control',
                                                'label'     => false,
                                                'options'   => [
                                                    'Sight L/C'         => 'Sight L/C', 
                                                    'Usance L/C'        => 'Usance L/C', 
                                                    'Acceptance L/C'    => 'Acceptance L/C', 
                                                    'Negotiation L/C'   => 'Negotiation L/C'
                                                ]
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>Jenis Fasilitas</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_facility_type',[
                                                'class'     =>'form-control',
                                                'label'     => false,
                                                'options'   => [
                                                    'Collection'    => 'Collection', 
                                                    'NWE'           => 'NWE' 
                                                ]
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <br>
                        <h5>>No Rekening</h5>
                        <br>

                        <table class='table table-striped'>
                            <tr style='vertical-align: middle'>
                                <td width='5%' class='text-center'></td>
                                <td width='40%'>Setoran Jaminan</td>
                                <td  width='5%' class='text-right'>: </td>
                                <td width='50%'>
                                    <div class="row">
                                        <div class='col-md-6'>
                                            <?= $this->Form->control('t_deposit',[
                                                'class'=>'form-control',
                                                'label' => false,
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr style='vertical-align: middle'>
                                <td class='text-center'></td>
                                <td>Sumber dana pembayaran biaya advis</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?= $this->Form->control('t_advis',[
                                                'class'=>'form-control',
                                                'label' => false,
                                            ]); ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <br>
                        <h5>>Keterangan Notification Letter</h5>
                        <br>
                        <div class='row'>
                            <div class='col-md-12'>
                                <?= $this->Form->control('t_note',[
                                    'class' =>'form-control',
                                    'label' => false,
                                    'type'  => 'textarea'
                                ]); ?>
                            </div>
                        </div>
                        
                        <br>
                        <table width='100%'>
                            <tr>
                                <td width='20%'>
                                    <h5>>Notification Letter</h5>
                                </td>
                                <td>
                                    <button type='button' class='btn btn-outline-success clickLN'>generate</button>
                                </td>
                            </tr>
                            <tr>
                                <td width='20%'>
                                    <h5>>Advice Charging</h5>
                                </td>
                                <td>
                                    <button type='button' class='btn btn-outline-success'>generate</button>
                                </td>
                            </tr>
                        </table>

                        <br>
                        <h5>Note</h5>
                        <br>
                        <div class='row'>
                            <div class='col-md-12'>
                                <?= $this->Form->control('note',[
                                    'class' =>'form-control',
                                    'label' => false,
                                    'type'  => 'textarea',
                                    'readonly'
                                ]); ?>
                            </div>
                        </div>
                        <input type="hidden" id='status' name='status' value='0'>
		            </div>
	            </div>
	            <div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-12">
                                <?php if($maker->status != 2): ?>
                                    <button type="submit" class="btn btn-warning">Save</button>
                                <?php endif; ?>
                                <button type="button" class="btn btn-primary submit">Submit</button>
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
        $('.clickLN').on('click', function () {  
            var url = "<?= $this->Url->build(['action' => 'notificationLetters']) . '/' . $maker->id; ?>";
            window.open(url);
        });
        $('#t-branch').select2();
        $('#t-branch').on('select2:select', function (e) {
            data        = $(this).select2('data');
            branch      = data[0].text;

            branch_name = branch.substring(5);
            $('#t-branch-name').val(branch_name);
            
        });                            
        $('.hide').hide();

        $('#user-group-id').on('change', function(){
            var grup = $(this).val();
            if(grup == 2){
                $('.hide').show();
            }else{
                $('.hide').hide();
            }

        });

        $('.submit').on('click', function(){
            validate    = true;
            branch      = $('#t-branch').val();
            cif         = $('#t-cif').val();
            tlp         = $('#t-tlp').val();
            npwp        = $('#t-npwp').val();
            deposit     = $('#t-deposit').val();
            advis       = $('#t-advis').val();
            
            if(!advis){
                validate = false;
                msg      = 'Harap masukan no rekening Sumber dana pembayaran biaya advis';   
            }
            if(!deposit){
                validate = false;
                msg      = 'Harap masukan no rekening Setoran Jaminan';   
            }
            if(!npwp){
                validate = false;
                msg      = 'Harap masukan NPWP';   
            }
            if(!tlp){
                validate = false;
                msg      = 'Harap masukan NO Telepon';   
            }
            if(!branch){
                validate = false;
                msg      = 'Harap pilih cabang';   
            }
            if(!cif){
                validate = false;
                msg      = 'Harap masukan NO CIF';   
            }
            

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
                $('#status').val(1);

                if(validate){
                    $('#form-submit').submit();
                }else{
                    swal.fire('Oops', msg, 'error');
                }

                // Swal.fire(
                // 'Berhasil!',
                // 'data berhasil di submit',
                // 'success'
                // )
            }
            });
        });

        $('.viewmt707').on('click', function () {  
            lc = '<?= $maker->m_20?>';
            $('.tablemt707').empty();

            $.ajax({
                url: '<?= $this->Url->build(["controller" => "Apis", "action" => "mt707"])?>',
                dataType: 'JSON',
                type: 'GET',
                data: {
                    lc:lc
                },
                success: function (e) {  
                    data = e.data;

                    html    = "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>20</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C20        
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>21</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C21        
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>23</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C23        
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>52A</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C52A        
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>31c</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C31C   
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>30</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C30
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>26E</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C26E
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>59</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C59
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>31E</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C31E
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>32B</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C32B
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>33B</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C33B
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>34B</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C34B
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>39A</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C39A
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>39B</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C39B
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>39C</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C39C
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44A</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44A
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44E</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44E
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44F</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44F
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44B</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44B
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44C</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44C
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>44D</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C44D
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>79</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C79
                            +   "</td>"
                            + "</tr>"
                            + "<tr style='vertical-align: middle'>"
                            +   "<td width='5%' class='text-center'>72</td>"
                            +   "<td  width='5%' class='text-right'>: </td>"
                            +   "<td width='50%'>"
                            +   data.C72
                            +   "</td>"
                            + "</tr>"
                            ;
                    $('.tablemt707').append(html);
                    $('#exampleModalLong').modal('show');
                    // console.log(e);
                    
                },
                error: function (e) {  
                    console.log(e);
                    
                }
            });
            

        })
    </script>
<?php $this->end();?>