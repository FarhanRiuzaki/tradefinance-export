<?php if($maker): ?>
    <style>
.justify{
    text-align: justify;
}
</style>
<div class='row'>
    <div class='col-md-3'>
        <?php $image = $this->Utilities->generateUrlAsset(null,$defaultAppSettings['App.Logo']); ?>
        <img style="max-height:120px;max-width:100%;" class="" alt="Logo" src="<?=$image?>" />
    </div>
</div>
<div class='container' style='font-size: 14px'>
    <div class='row'>
        <div class='col-12' align='center'>
            <h2>O R I G I N A L</h2>
            <h2>NOTIFICATION OF DOCUMENTARY CREDIT</h2>
            <br>
        </div>
    </div>
    <div class='row'>
        <div class='col-6'>
            <table style='width: 100%'>
                <tr>
                    <td width='25%'>DATE</td>
                    <td width='2%'>:</td>
                    <td><?= date('M d, Y')?></td>
                </tr>
                <tr>
                    <td width='25%'>REF. NO.</td>
                    <td width='2%'>:</td>
                    <td><?= $maker->no_reg?></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <div class='row'>
        <div class='col-6'>
            TO: <br>
            BENEFICIARY: <br>
            <?= $maker->m_59  ?>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-12'>

        <!-- PROSES CONVERT INT TO DATE -->
        <?php
        if($maker->m_31C){
            $unixTimestamp  = $this->Utilities->convertToDate($maker->m_31C);
            $issue          = date('M d, Y', strtotime($unixTimestamp));
        }

        if($maker->m_44C){
            $unixTimestamp  = $this->Utilities->convertToDate($maker->m_44C);
            $last           = date('M d, Y', strtotime($unixTimestamp));
        }

        if($maker->m_31D){
            $unixTimestamp  = $this->Utilities->convertToDate($maker->m_31D);
            $exp            = date('M d, Y', strtotime($unixTimestamp));
        }

        ?>
            <table width='100%'>
                <tr>
                    <td width='50%' rowspan='5'>
                    ISSUING BANK: <br>
                    <?= $maker->m_42a?>    
                    </td>
                    <td width='20%'>L/C NO</td>
                    <td width='2%'>:</td>
                    <td><?= $maker->no_lc?></td>
                </tr>
                <tr>
                    <td>AMOUNT</td>
                    <td>:</td>
                    <td><?= $maker->m_32B?></td>
                </tr>
                <tr>
                    <td>DATE OF ISSUE</td>
                    <td>:</td>
                    <td><?= $issue?></td>
                </tr>
                <tr>
                    <td>LATEST SHIPMENT</td>
                    <td>:</td>
                    <td><?= $last?></td>
                </tr>
                <tr>
                    <td>EXPIRY DATE</td>
                    <td>:</td>
                    <td><?= $exp?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-12 justify'>
            DEAR SIR, <br><br>
            WE HAVE BEEN INFORMED BY THE ABOVE-MENTIONED ISSUING BANK THAT THE ABOVE-MENTIONED DOCUMENTARY CREDIT HAS BEEN ISSUED IN YOUR FAVOUR. <br> 
            PLEASE FIND ENCLOSED THE ADVICE INTENDED FOR YOU. <br><br>
            CHECK THE CREDIT TERMS AND CONDITIONS CAREFULLY. IN THE EVENT YOU DO NOT AGREE WITH THE TERMS AND CONDITIONS. OR IF YOU FEEL UNABLE TO COMPLY WITH ANY OF THOSE TERMS AND CONDITIONS. KINDLY ARRANGE AN AMENDMENT OF THE CREDIT THROUGH YOUR CONTRACTING PARTY (THE APPLICANT). <br><br>
            THIS NOTIFICATION AND THE ENCLOSED ADVICE ARE SENT TO YOU WITHOUT ANY ENGAGEMENT ON OUR PART. <br><br>
            WE HAVE NO RESPONSIBILITY FOR ANY ERRORS, OMISSIONS AND DELAYS IN THE TRANMISSION. <br> <br>
            BEING OUR ADVISING COMMISION, WE WILL DEBIT YOUR ACCOUNT FOR [ ] AND [ ] <br><br>
            THIS ADVICE IN SUBJECT TO UNIFORM CUSTOMS AND PRACTICE FOR DOCUMENTARY CREDITS 2007 REVISION. INTERNATIONAL CHAMBER OF COMMERCE PUBLICATION NO 600.
            <br><br>
        </div>
        <div class='col-12' align='center'>
            <h2>PT BANK MEGA Tbk,</h2>
            <br>
            <br>
            <br>
            <br>
            <div class='col-4'>
                <hr style='height: 2px; color: black;border: none; background-color: black'>
            </div>
        </div>
    </div>

</div>
<?php else: ?>
<style>
.justify{
    text-align: justify;
}
</style>
<div class='row'>
    <div class='col-md-3'>
        <?php $image = $this->Utilities->generateUrlAsset(null,$defaultAppSettings['App.Logo']); ?>
        <img style="max-height:120px;max-width:100%;" class="" alt="Logo" src="<?=$image?>" />
    </div>
</div>
<div class='container' style='font-size: 14px'>
    <div class='row'>
        <div class='col-12' align='center'>
            <h2>O R I G I N A L</h2>
            <h2>NOTIFICATION OF DOCUMENTARY CREDIT</h2>
            <br>
        </div>
    </div>
    <div class='row'>
        <div class='col-6'>
            <table style='width: 100%'>
                <tr>
                    <td width='25%'>DATE</td>
                    <td width='2%'>:</td>
                    <td><?= date('M d, Y')?></td>
                </tr>
                <tr>
                    <td width='25%'>REF. NO.</td>
                    <td width='2%'>:</td>
                    <td><?= $data->LC_CODE?></td>
                </tr>
            </table>
        </div>
    </div>
    <br><br>
    <div class='row'>
        <div class='col-6'>
            TO: <br>
            BENEFICIARY: <br>
            <?= $data->C59  ?>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-12'>

        <!-- PROSES CONVERT INT TO DATE -->
        <?php
        if($data->C31C){
            $unixTimestamp  = $this->Utilities->convertToDate($data->C31C);
            $issue          = date('M d, Y', strtotime($unixTimestamp));
        }

        if($data->C44C){
            $unixTimestamp  = $this->Utilities->convertToDate($data->C44C);
            $last           = date('M d, Y', strtotime($unixTimestamp));
        }

        if($data->C31D){
            $unixTimestamp  = $this->Utilities->convertToDate($data->C31D);
            $exp            = date('M d, Y', strtotime($unixTimestamp));
        }

        ?>
            <table width='100%'>
                <tr>
                    <td width='50%' rowspan='5'>
                    ISSUING BANK: <br>
                    <?= $data->C42A?>    
                    </td>
                    <td width='20%'>L/C NO</td>
                    <td width='2%'>:</td>
                    <td><?= $data->LC_CODE?></td>
                </tr>
                <tr>
                    <td>AMOUNT</td>
                    <td>:</td>
                    <td><?= $data->C32B?></td>
                </tr>
                <tr>
                    <td>DATE OF ISSUE</td>
                    <td>:</td>
                    <td><?= $issue?></td>
                </tr>
                <tr>
                    <td>LATEST SHIPMENT</td>
                    <td>:</td>
                    <td><?= $last?></td>
                </tr>
                <tr>
                    <td>EXPIRY DATE</td>
                    <td>:</td>
                    <td><?= $exp?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class='row'>
        <div class='col-12 justify'>
            DEAR SIR, <br><br>
            WE HAVE BEEN INFORMED BY THE ABOVE-MENTIONED ISSUING BANK THAT THE ABOVE-MENTIONED DOCUMENTARY CREDIT HAS BEEN ISSUED IN YOUR FAVOUR. <br> 
            PLEASE FIND ENCLOSED THE ADVICE INTENDED FOR YOU. <br><br>
            CHECK THE CREDIT TERMS AND CONDITIONS CAREFULLY. IN THE EVENT YOU DO NOT AGREE WITH THE TERMS AND CONDITIONS. OR IF YOU FEEL UNABLE TO COMPLY WITH ANY OF THOSE TERMS AND CONDITIONS. KINDLY ARRANGE AN AMENDMENT OF THE CREDIT THROUGH YOUR CONTRACTING PARTY (THE APPLICANT). <br><br>
            THIS NOTIFICATION AND THE ENCLOSED ADVICE ARE SENT TO YOU WITHOUT ANY ENGAGEMENT ON OUR PART. <br><br>
            WE HAVE NO RESPONSIBILITY FOR ANY ERRORS, OMISSIONS AND DELAYS IN THE TRANMISSION. <br> <br>
            BEING OUR ADVISING COMMISION, WE WILL DEBIT YOUR ACCOUNT FOR [ ] AND [ ] <br><br>
            THIS ADVICE IN SUBJECT TO UNIFORM CUSTOMS AND PRACTICE FOR DOCUMENTARY CREDITS 2007 REVISION. INTERNATIONAL CHAMBER OF COMMERCE PUBLICATION NO 600.
            <br><br>
        </div>
        <div class='col-12' align='center'>
            <h2>PT BANK MEGA Tbk,</h2>
            <br>
            <br>
            <br>
            <br>
            <div class='col-4'>
                <hr style='height: 2px; color: black;border: none; background-color: black'>
            </div>
        </div>
    </div>

</div>
<?php endif; ?>
