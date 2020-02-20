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
			<?= $this->Form->create($maker,['class'=>'kt-form','type'=>'file', 'id'=>'form-submit']) ?>
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
                                    <?=$maker->m_27?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>40A</td>
                                <td>Form of Credit Documentary</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_40A?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>20</td>
                                <td>Documentary Credit Number</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_20?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>23</td>
                                <td>Reference to Pre-Advice</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_23?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>31C</td>
                                <td>Date of Issue</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_31C?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>40E</td>
                                <td>Applicable Rules</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_40E?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>31D</td>
                                <td>Date and Place of Expiry</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_31D?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>51a</td>
                                <td>Aplicant Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_51a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>50</td>
                                <td>Aplicant</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_50 ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>59</td>
                                <td>Beneficiary</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_59 ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>32B</td>
                                <td>Currency Code, Amount</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_32B?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39A</td>
                                <td>Percentage Credit Amount Tolerance</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_39A?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39B</td>
                                <td>Maximum Credit Amount</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_39B?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>39C</td>
                                <td>Additional Amounts Covered</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_39C?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>41a</td>
                                <td>Available With... By... </td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_41a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42a</td>
                                <td>Drawee</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_42a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42M</td>
                                <td>Mixed Payment Details</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_42M?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>42P</td>
                                <td>Negotiation/Deferred Payment Details</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_42P?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>43P</td>
                                <td>Partial Shipments</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_43P?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>43T</td>
                                <td>Transhipment</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_43T?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44A</td>
                                <td>Place of Taking in Charge/Dispatch From... /Palce of Receipt</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44A?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44E</td>
                                <td>Port of Loading/Airport of Departure</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44E?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44F</td>
                                <td>Port of Discharge/Airport of Destination</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44F?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44B</td>
                                <td>Place of Final Destination/For Transportation to... /Place of Delivery</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44B?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44C</td>
                                <td>Latest Date of Shipment</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44C?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>44D</td>
                                <td>Shipment Period</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_44D?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>45A</td>
                                <td>Description of Goods</td>
                                <td class='text-right'>: </td>
                                <td>
                                <?=$maker->m_45A ?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>46A</td>
                                <td>Documents Required</td>
                                <td class='text-right'>: </td>
                                <td>
                                <?=$maker->m_46A?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>47A</td>
                                <td>Additional Conditions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_47A?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49G</td>
                                <td>Special Payment Conditions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_49G?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49H</td>
                                <td>Special Payment Conditions For Receiving Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_49H?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>71D</td>
                                <td>Charges</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_71D?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>48</td>
                                <td>Period for Presentation</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_48?>  
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>49</td>
                                <td>Confirmation Instructions</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_49?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>58a</td>
                                <td>Requested Confirmation Party</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_58a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>53a</td>
                                <td>Reimbursing Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_53a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>78</td>
                                <td>Instructions to the Paying/Accepting/Negotiating Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_78?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>57a</td>
                                <td>Second Advising Bank</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_57a?>
                                </td>
                            </tr>
                            <tr>
                                <td class='text-center'>72Z</td>
                                <td>Sender to Receiver information</td>
                                <td class='text-right'>: </td>
                                <td>
                                    <?=$maker->m_72Z?>
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
                                            <?= $maker->t_CIF?>
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
                                        <?=$maker->t_branch?> - 
                                        <?=$maker->t_branch_name?>
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
                                            <?= $maker->t_tlp?>
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
                                            <?= $maker->t_npwp?>
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
                                        <?=$maker->t_lc_purpose?>
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
                                        <?=$maker->t_lc_type ?>
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
                                            <?=$maker->t_facility_type?>
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
                                            <?= $maker->t_deposit?>
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
                                            <?= $maker->t_advis?>
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
                                <?=$maker->t_note?>
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
                                    'type'  => 'textarea'
                                ]); ?>
                            </div>
                        </div>

                        <input type="hidden" name='status' id='status' value='1'>
		            </div>
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

        $('.reject').on('click', function(){
            validate    = true;
            note        = $('#note').val();
            
            if(!note){
                validate= false;
                msg     = 'harap masukan note terlebih dahulu';
            }
            
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

                if (validate) {
                    $('#form-submit').submit();
                }else{
                    Swal.fire(
                    'Oops!',
                    msg,
                    'error'
                    )
                }
            }
            });
        });

        $('.approve').on('click', function(){
            validate    = true;
            note        = $('#note').val();
            
            if(!note){
                validate= false;
                msg     = 'harap masukan note terlebih dahulu';
            }
            
            Swal.fire({
            title: 'Are you sure to Approve?',
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

                if (validate) {
                    $('#form-submit').submit();
                }else{
                    Swal.fire(
                    'Oops!',
                    msg,
                    'error'
                    )
                }
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