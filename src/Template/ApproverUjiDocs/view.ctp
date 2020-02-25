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
            $editUrl      = $this->Url->build(['action'=>'edit'])."/";
            if($this->Acl->check(['action'=>'edit']) == false){
                $editUrl = "";
            }
            $viewUrl = $this->Url->build(['action'=>'viewsor'])."/";
            if($this->Acl->check(['action'=>'viewsor']) == false){
                $viewUrl = "";
            }
        ?>
        jQuery(document).ready(function() {
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
                        width: '8%',
                        data : "id",
                        render:function(id, e, t, n) {
                            var left = "";
                            var right = "";
                            
                            if(t.status_sor  != '2' && t.status_sor  != '3'){
                                if(editUrl != ""){
                                    left = '<a class="btn btn-success btn-icon" href="'+editUrl+t.uji_docs[0].id+'"><i class="la la-edit"></i></a>\n ';
                                }
                            }
                            if(viewUrl != ""){
                                right = '<a class="btn btn-warning btn-icon" href="'+viewUrl+t.uji_docs[0].id+'"><i class="la la-search-plus"></i></a>\n ';
                            }
                            if(left != "" && right != ""){
                                return '<div class="row">'
                                        + '<div class="col-6">'
                                        + left
                                        + '</div>'
                                        + '<div class="col-6">'  
                                        + right
                                        + '</div>'
                                        '</div>';
                            }
                            return "-";
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
                    { 
                        "title": "Status SOR", 
                        "name": "UploadDoc.status_sor", 
                        "targets": no++,
                        "data" : 'status_sor',
                        render:function(status) {
                            if(status == 0){
                                return 'Sent by Maker'
                            }
                            if(status == 2){
                                return 'Rejected by approver'
                            }
                            if(status == 3){
                                return 'Approved'
                            }
                            return '-'
                        },
                    },
                ],
                "order": [[ 1, "ASC" ]]
            }
            DatatableRemoteAjaxDemo.init("",options,"<?=$this->request->getParam('_csrfToken');?>")
        });
    </script>
<?php $this->end();?>