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

<?=$this->element('widget/datatable');?>
<?php $this->start('script');?>
    <script>
        <?php
            $transactionUrl = $this->Url->build(['action'=>'transaction'])."/";
            if($this->Acl->check(['action'=>'transaction']) == false){
                $transactionUrl = "";
            }
        ?>
        jQuery(document).ready(function() {
            var transactionUrl = "<?=$transactionUrl;?>";
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

                            return'<a class="btn btn-warning btn-icon" href="'+transactionUrl+id+'" data-toggle="tooltip" data-placement="bottom" title="transaksi"><i class="flaticon-coins"></i></a>';
                        },
                        responsivePriority: -1

                    },
                    { 
                        "title": "No SOR", 
                        "name": "UploadDoc.no_sor", 
                        "targets": no++,
                        "data" : 'no_sor'
                    },
                    { 
                        "title": "Amount", 
                        "name": "UploadDoc.amount", 
                        "targets": no++,
                        "data" : 'amount',
                        render: function (e) {  
                            return $.number(e, 2);
                        }
                    },
                    { 
                        "title": "Currency", 
                        "name": "UploadDoc.currency", 
                        "targets": no++,
                        "data" : 'currency'
                    },
                    { 
                        "title": "Status L/C & SKBDN", 
                        "name": "UploadDoc.status_lc", 
                        "targets": no++,
                        "data" : 'status_lc',
                        render:function(id, e, t,n) {
                            amount_maker    = t.maker.m_32B;
                            amnt_mkr        = parseFloat(amount_maker.substring(3));
                            amount          = parseFloat(t.amount);
                            
                            if(amnt_mkr < amount){
                                return 'Under drawn';
                            }

                            if(amnt_mkr == amount){
                                return 'Ok';
                            }  

                            if(amnt_mkr > amount){
                                return 'Over Drawn';
                            }  
                            
                        },
                    },
                ],
                "order": [[ 1, "ASC" ]]
            }
            DatatableRemoteAjaxDemo.init("",options,"<?=$this->request->getParam('_csrfToken');?>")
        });
    </script>
<?php $this->end();?>