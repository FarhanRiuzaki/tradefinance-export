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
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Data SOR
					</h3>
				</div>
			</div>
            
			<!--begin::Form-->
				<div class="kt-portlet__body">
					<div class="row">
                        <div class="col-md-3">No sor</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= $record->no_sor ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Amount</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= number_format($record->amount) ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Currency</div>
                        <div class="col-md-3">
                            <input type="text" class='form-control' value='<?= substr($record->currency,0, 3) ?>' readonly>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class='row'>
                        <div class='col-md-3'>Dokumen</div>
                        <div class='col-md-3'><button class='btn btn-primary doc'>View</button></div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-3'>Hasil uji dokumen</div>
                        <div class='col-md-3'><button class='btn btn-primary hud'>View</button></div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-3'>Balasan hasil uji dari nasabah</div>
                        <div class='col-md-3'><button class='btn btn-primary bhu'>View</button></div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-md-3'>Transaksi</div>
                        <div class='col-md-3'><button class='btn btn-primary trx'>View</button></div>
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

        // doc : dokumen
        // hud : hasil uji dokumen
        // bhu : balasan hasil uji dari nasabah
        // trx : transaksi

        id  = "<?= $record->id ?>";
        $('.doc').on('click', function () {  
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id + '?view=doc';
            location.href = url;

        });

        $('.hud').on('click', function () {  
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id + '?view=hud';
            location.href = url;

        });

        $('.bhu').on('click', function () {  
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id + '?view=bhu';
            location.href = url;

        });

        $('.trx').on('click', function () {  
            url = "<?= $this->Url->build(['action' => 'detailSor']) ?>/" + id + '?view=trx';
            location.href = url;

        });
    </script>
<?php $this->end();?>