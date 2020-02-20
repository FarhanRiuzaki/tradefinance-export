<?php
    $this->start('sub_header_toolbar');
?>
    <?php if($this->Acl->check(['action'=>'index']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'index']);?>" class="btn btn-warning">
            <i class="la la-angle-double-left"></i> Kembali
        </a>
    <?php endif;?>
    <?php if($this->Acl->check(['action'=>'add']) == true):?>
        <a href="<?=$this->Url->build(['action'=>'add']);?>/<?= $this->request->pass[0]?>" class="btn btn-success ">
            <i class="la la-plus-circle"></i> Add Transaksi
        </a>
    <?php endif;?>
<?php
    $this->end();
?>

<?=$this->element('widget/datatable');?>
<?php $this->start('script');?>
    <script>
        <?php
            $addUrl = $this->Url->build(['action'=>'add'])."/";
            if($this->Acl->check(['action'=>'add']) == false){
                $addUrl = "";
            }
            $editUrl      = $this->Url->build(['action'=>'edit'])."/";
            if($this->Acl->check(['action'=>'edit']) == false){
                $editUrl = "";
            }
            $viewUrl = $this->Url->build(['action'=>'viewTransaction'])."/";
            if($this->Acl->check(['action'=>'viewTransaction']) == false){
                $viewUrl = "";
            }
        ?>
        jQuery(document).ready(function() {
            var addUrl = "<?=$addUrl;?>";
            var editUrl = "<?=$editUrl;?>";
            var viewUrl = "<?=$viewUrl;?>";
            no = 0;
            var options = {
                "columnDefs": [
                    { 
                        "title": "#", 
                        "name": "#", 
                        "targets": no++,
                        "orderable" : !1,
                        "searchable" : !1,
                        "className": "text-center",
                        width: '5%',
                        data : "id",
                        render:function(id, e, t, n) {
                            var listLink = "";

                            if(t.status == 1 || t.status == 3){
                                if(viewUrl != ""){
                                    listLink += '<div class="col"><a class="btn btn-primary btn-icon" href="'+viewUrl+id+'" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-search"></span></a></div>\n ';
                                }
                            }
                            if(t.status == 2){
                                if(editUrl != ""){
                                    listLink += '<div class="col"><a class="btn btn-success btn-icon" href="'+editUrl+id+'" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="la la-edit"></span></a></div>\n ';
                                }
                            }
                            return "<div class='row'>"+listLink+"</div>";
                        },
                        responsivePriority: -1

                    },
                    { 
                        "title": "Jenis Transaksi", 
                        "name": "Transactions.jenis_trx", 
                        "targets": no++,
                        "data" : 'jenis_trx'
                    },
                    { 
                        "title": "No Nota", 
                        "name": "Transactions.no_nota", 
                        "targets": no++,
                        "data" : 'no_nota',
                    },
                    { 
                        "title": "Tgl Input Trs", 
                        "name": "Transactions.tgl_input_trx", 
                        "targets": no++,
                        "data" : 'tgl_input_trx',
                        render:function(created) {
                            return Utils.dateIndonesia(created,true,false)
                        }
                    },
                    { 
                        "title": "Tgl Approve Trs", 
                        "name": "Transactions.tgl_approve_trx", 
                        "targets": no++,
                        "data" : 'tgl_approve_trx',
                        render:function(created) {
                            if(created){
                                return Utils.dateIndonesia(created,true,false)
                            }else{
                                return '-';
                            }
                        }
                    },
                    { 
                        "title": "Status", 
                        "name": "Transactions.status", 
                        "targets": no++,
                        "data" : 'status',
                        render:function(e) {
                            if(e == 1){
                                return 'Sent by maker'
                            }else if(e == 2){
                                return 'Rejected by approver'
                            }else if(e == 3){
                                return 'Approved'
                            }else{
                                return 'save'
                            }
                        }
                    },
                ],
                "order": [[ 1, "ASC" ]]
            }
            DatatableRemoteAjaxDemo.init("",options,"<?=$this->request->getParam('_csrfToken');?>")
        });
    </script>
<?php $this->end();?>