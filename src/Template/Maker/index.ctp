<?php
    $this->start('sub_header_toolbar');
?>
    <?php if($this->Acl->check(['action'=>'viewReject']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'viewReject']);?>" class="btn btn-danger">
            <i class="la la-list"></i> List L/C (Reject)
        </a>
    <?php endif;?>
   <?php if($this->Acl->check(['action'=>'addview']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'addview']);?>" class="btn btn-primary">
            <i class="la la-list"></i> List L/C
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
						Advise L/C & SKBDN
					</h3>
				</div>
			</div>
				<div class="kt-portlet__body">
                    <?= $this->Form->control('advise_lc',[
                        'class'=>'form-control m-input',
                        'templateVars' => [
                            'colsize' => 'col-lg-4 col-xl-3',
                        ],
                        'label' => [
                            'class'=> 'col-lg-3 col-xl-2 col-form-label',
                            'text'=>'Sumber Data'
                        ],
                        'options' => ['1'=> 'MT700/701/710/707', '2'=>'Dokumen'],
                        'empty' => 'pilih sumber data'
                    ]);?>
                    <div class='hidden'>
                        <?=  $this->Form->control('no_lc',[
                            'class'=>'form-control m-input',
                            'templateVars' => [
                                'colsize' => 'col-lg-4 col-xl-3',
                                'typeLine' => 'kt-checkbox-inline',
                                'labeltext' => 'Status User'
                            ],
                            'label' => [
                                'class'=> 'col-lg-3 col-xl-2 col-form-label',
                                'text'=>'Inquiry No L/C atau SKBDN'
                            ]
                        ]);?>
                        <button type='button' class='btn btn-outline-warning offset-3 search'>Search</button>
                        <br>
                        <hr>
                        <div class='row'>
                            <table class='table table-bordered'>
                                <thead>
                                    <tr class='text-center'>
                                        <th width='5%'>#</th>
                                        <!-- <th width='3%'>No</th> -->
                                        <th>NO LC</th>
                                        <th>Applicant</th>
                                        <!-- <th>Branch</th>
                                        <th>Nama Branch</th> -->
                                    </tr>
                                </thead>    
                                <tbody>
                                </tbody>   
                            </table>
                        </div>
                    </div>
	            </div>
	            <!-- <div class="kt-portlet__foot">
				</div> -->
		</div>
    </div>
</div>

<?php $this->start('script');?>
<script>

    function hides(e) { 
        $('.hidden').hide();

        // redirect to add
        url = '<?= $this->Url->build(["action" => "add"]);?>'

        con = e;
        if(con == 1){
            $('.hidden').show();
        }else if(con == 2){
            // $('.hidden').hide();
            window.location.href = url;
        }  
    };

    $(document).ready(function(){
        hides();   
    })
    
    $('#advise-lc').on('change', function () {  
        con = $(this).val();
        hides(con);   
    })

// SEARCH
    $('.search').on('click', function () {  
        $('tbody').empty();
        

        // url to api 'search'
        url     = "<?= $this->Url->build(['controller' => 'Apis', 'action' => 'search'])?>";
        
        // get input
        input   = $('#no-lc').val(); 

        if(!input){
            swal.fire('Oops', 'Masukan NO L/C atau SKBDN', 'error');
        }else{

            $.ajax({
                url: url,
                dataType: 'json',
                type: 'GET',
                data: {
                    input: input
                },
                success: function (e) {
                    data = e.data;
                    if(data.length == 0){
                        swal.fire('Info', 'Data tidak tersedia.', 'info');
                        html = '<tr>'
                        + "<td colspan='3' align='center'>Data tidak tersedia</td>"
                        + "</td>"
                        + "</tr>";
                    
                    $('tbody').append(html);
                    }else{
                    // APPEND TABLE
                        no = 0;
                        $.each(data, function (key, val) {  
                            no++;
                            html = '<tr>'
                                + "<td>" 
                                + "<button data-lc_code='"+ val.LC_CODE +"' type='button' class='btn btn-primary btn-icon edit'><span class='flaticon2-checkmark'></span></button>"
                                + "</td>"
                                // + "<td>" + no + "</td>"
                                + "<td>" + val.LC_CODE + "</td>"
                                + "<td>" + val.C50 + "</td>"
                                // + "<td>" + val.t_branch + "</td>"
                                // + "<td>" + val.t_branch_name + "</td>"
                                + "</tr>";
                            
                            $('tbody').append(html);
                        });
                    }
                },
                error: function (e) {  
                    swal.fire('Oops', 'Terjadi kesalahan', 'error');
                }
            });

        }

    });

// EDIT CLICK
    $('body').on('click', '.edit', function () {  
        lc_code  = $(this).data('lc_code');

        // to edit
        url = "<?= $this->Url->build(['action'=>'add'])?>" + '?lc_code=';
        window.location.href = url + lc_code;
    });

</script>
<?php $this->end(); ?>
