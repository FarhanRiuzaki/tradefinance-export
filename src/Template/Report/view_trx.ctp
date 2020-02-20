<?php
$this->Html->css([
    'dist/vendors/custom/datatables/datatables.bundle.css'
], ['block' => 'cssPageVendors', 'pathPrefix' => '/assets/']);
$this->Html->script([
    'dist/vendors/custom/datatables/datatables.bundle.js'
], ['block' => 'jsPageVendors', 'pathPrefix' => '/assets/']);
?>
<style>
/* Define the hover highlight color for the table row */
.hovertable tr:hover {
        background-color: #fbaa00;
}
</style>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class='table table-bordered'>
            <thead>
                <tr class='text-center'>
                    <th width='5%'>No</th>
                    <th>No Rek</th>
                    <th>D/C</th>
                    <th>Currency</th>
                    <th>Branch</th>
                    <th>Cost Center</th>
                    <th>Reff No.</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody class='detailTransaksi'>

            </tbody>
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
						Transaksi
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
                    <!-- <h5>Daftar Dokumen</h5> -->
                    <!-- <br> -->
                    <div class='row'>
                        <div class="col-md-12">
                            <table class='table table-bordered dataTable'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>No</th>
                                        <th>Jenis Transaksi</th>
                                        <th>No Nota</th>
                                        <th>Tanggal Input Trs</th>
                                        <th>Tanggal Approve Trs</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody class='hovertable'>
                                <?php $no=0; foreach($record->transactions  as $key => $val): $no++; ?>
                                    <tr class='clickTr'>
                                        <td align='center'><?= $no ?></td>
                                        <td><?= $val->jenis_trx ?></td>
                                        <td><?= $val->no_nota ?></td>
                                        <td><?= $val->tgl_input_trx->format('Y-m-d') ?></td>
                                        <td><?= $val->tgl_approve_trx == null ? '-' : $val->tgl_approve_trx->format('Y-m-d') ?></td>
                                        <td>
                                            <input type="hidden" value='<?= $val->id?>'>
                                            <?php if($val->status == 1): ?>
                                                Send by maker
                                            <?php elseif($val->status == 2): ?>
                                                Rejected by approver
                                            <?php elseif($val->status == 3): ?>
                                                Approved
                                            <?php else: ?>
                                                Save
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
	            </div>
			<!--end::Form-->
		</div>
    </div>
</div>

<?php $this->start('script');?>
    <script>
        $('.dataTable').dataTable({
            'paging': false
        });

        $('.clickTr').on('click', function () {  
            $('tbody.detailTransaksi').empty(); 
            id  = $(this).closest('tr').find("input").val();
            $.ajax({
                url: "<?= $this->Url->build(['action' => 'getDetailTrx', 'controller' => 'Apis'])?>",
                dataType: 'JSON',
                data: {id:id},
                success: function (e) {  
                    data    = e.record;
                    
                    if(data.length > 0){
                        no = 0;
                        $.each(data, function (k, v) {  
                            no++;
                            html = "<tr>"
                                + "<td>"+ no + "</td>"
                                + "<td>"+ v.no_rek +  "</td>"
                                + "<td>"+ v.d_c +  "</td>"
                                + "<td>"+ v.currency +  "</td>"
                                + "<td>"+ v.branch +  "</td>"
                                + "<td>"+ v.cost_center + "</td>"
                                + "<td>"+ v.reff_no +   "</td>"
                                + "<td>"+ v.note + "</td>"
                                + "</tr>";
                            $('tbody.detailTransaksi').append(html); 
    
                        });
                        $('#exampleModal').modal('show');
                    }else{
                        swal.fire('Oops', 'Data detail transaksi tidak tersedia', 'info');
                    }
                },
                error: function (e) {  
                    console.log(e);
                }
            });

        });
    </script>
<?php $this->end();?>