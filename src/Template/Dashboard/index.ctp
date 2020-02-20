<style>
.hoverTable tbody tr:hover {
    background-color: #ffff99;
}
</style>
<div class="row">
    <div class="col-xl-12">
        <div class="kt-portlet  kt-portlet--height-fluid">
            <div class="kt-portlet__body">
                <h5><b>SELAMAT DATANG</b></h5>
                <br>
                <table>
                     <tr>
                        <td width="150px"><b>ANDA LOGIN SEBAGAI</b></td>
                        <td width="5px">:</td>
                        <td><?= strtoupper($userData->name) ?></td>
                    </tr>
                    <tr>
                        <td><b>USERNAME</b></td>
                        <td>:</td>
                        <td><?= strtoupper($userData->name) ?></td>
                    </tr>
                    <tr>
                        <td><b>EMAIL</b></td>
                        <td>:</td>
                        <td><?= strtoupper($userData->email) ?></td>
                    </tr>
                    <tr>
                        <td><b>GROUP</b></td>
                        <td>:</td>
                        <td><?= strtoupper($userData->user_group->name) ?></td>
                    </tr>
                    <!-- <tr>
                        <td width="150px">Anda terakhir logout pada</td>
                        <td width="5px">:</td>
                        <td><?= $userData->logout_time == null ? '-' : $this->utilities->indonesiaDateFormat($userData->logout_time->format('Y-m-d H:i:s'), true, true)?></td>
                    </tr> -->
                </table>
            </div>	
        </div>
    </div>
    <div class="col-xl-12">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon"><i class="flaticon-file"></i></span>
                    <h3 class="kt-portlet__head-title">List Approve Advice L/C </h3>
                </div>
            </div>
            <!-- <div class="kt-portlet__body"> -->
                <table class='table table-striped hoverTable'>
                    <thead>
                        <tr class='table-active text-center'>
                            <th>No</th>
                            <th>No Account</th>
                            <th>Jenis</th>
                            <th>No L/C</th>
                            <th>CIF No</th>
                            <th>Cabang</th>
                            <th>Beneficiary</th>
                            <th>Currency</th>
                            <th>Ammount</th>
                        </tr>
                    </thead>
                    <tbody class='table-hover'>
                        <?php 
                        $no = 0;
                        foreach($approveAdvice as $key => $val): 
                        $no++;
                        ?>
                            <tr class='clickable-row' data-href='<?= $this->Url->build(['action' => 'edit', 'controller' => 'Approver']) . '/' . $val->id?>'>
                                <td class='text-center'><?= $no ?></td>
                                <td><?= $val->no_reg ?></td>
                                <td class='text-center'><?= $val->t_lc_type ?></td>
                                <td><?= $val->no_lc ?></td>
                                <td><?= $val->t_CIF ?></td>
                                <td class='text-center'><?= $val->t_branch ?></td>
                                <td><?= substr($val->m_59, 0, 25) ?>... </td>
                                <td class='text-center'><?= substr($val->m_32B, 0, 3) ?></td>
                                <td class='text-right'><?= number_format((float) substr($val->m_32B, 3),2) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if($no == 0): ?>
                            <tr>
                                <td colspan='9' class='text-center'>data tidak tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <!-- </div>	 -->
        </div>
    </div>
    <div class="col-xl-12">
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon"><i class="flaticon-file"></i></span>
                    <h3 class="kt-portlet__head-title">List Approve Amend L/C </h3>
                </div>
            </div>
            <!-- <div class="kt-portlet__body"> -->
                <table class='table table-striped hoverTable'>
                    <thead>
                        <tr class='text-center' style='background-color: #08976d; color: white'>
                            <th>No</th>
                            <th>No Account</th>
                            <th>Jenis</th>
                            <th>No L/C</th>
                            <th>CIF No</th>
                            <th>Cabang</th>
                            <th>Beneficiary</th>
                            <th>Currency</th>
                            <th>Ammount</th>
                        </tr>
                    </thead>
                    <tbody class='table-hover'>
                        <?php 
                        $no = 0;
                        foreach($approveAmend as $key => $val): 
                        $no++;
                        ?>
                            <tr class='clickable-row' data-href='<?= $this->Url->build(['action' => 'edit', 'controller' => 'AmendmentApprover']) . '/' . $val->id?>'>
                                <td class='text-center'><?= $no ?></td>
                                <td><?= $val->no_reg ?></td>
                                <td class='text-center'><?= $val->t_lc_type ?></td>
                                <td><?= $val->no_lc ?></td>
                                <td><?= $val->t_CIF ?></td>
                                <td class='text-center'><?= $val->t_branch ?></td>
                                <td><?= substr($val->m_59, 0, 25) ?>... </td>
                                <td class='text-center'><?= substr($val->m_32B, 0, 3) ?></td>
                                <td class='text-right'><?= number_format((float) substr($val->m_32B, 3),2) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if($no == 0): ?>
                            <tr>
                                <td colspan='9' class='text-center'>data tidak tersedia</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <!-- </div>	 -->
        </div>
    </div>
    
</div>
<!--End::Main Portlet-->

<link rel="stylesheet" type="text/css" href="<?= $this->Url->assetUrl('/offline/dataTables.bootstrap4.min.css') ?>">
<?php $this->start('script'); ?>

<script type="text/javascript" language="javascript" src="<?= $this->Url->assetUrl('/offline/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" language="javascript" src="<?= $this->Url->assetUrl('/offline/dataTables.bootstrap4.min.js') ?>"></script>

<script>
    
$(document).ready(function($) {
    $('.datatable').DataTable({
        "language": {
            "emptyTable":     "Data Tidak Tersedia."
        }
    });

    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
<?php $this->end(); ?>
