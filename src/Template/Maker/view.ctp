<?php
    $this->start('sub_header_toolbar');
?>
    <?php if($this->Acl->check(['action'=>'index']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'addview']);?>" class="btn btn-warning">
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
				<div class="kt-portlet__body">
					<div class="kt-section kt-section--first" style='color: black'>
                    
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
                                <?=$maker->note?>
                            </div>
                        </div>
		            </div>
	            </div>
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
</script>
<?php $this->end();?>
