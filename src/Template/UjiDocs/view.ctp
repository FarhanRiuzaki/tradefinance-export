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
            $deleteUrl    = $this->Url->build(['action'=>'delete'])."/";
            if($this->Acl->check(['action'=>'delete']) == false){
                $deleteUrl = "";
            }
            $editUrl      = $this->Url->build(['action'=>'edit'])."/";
            if($this->Acl->check(['action'=>'edit']) == false){
                $editUrl = "";
            }
            $addUrl      = $this->Url->build(['action'=>'add'])."/";
            if($this->Acl->check(['action'=>'add']) == false){
                $addUrl = "";
            }
            $viewUrl = $this->Url->build(['action'=>'viewsor'])."/";
            if($this->Acl->check(['action'=>'viewsor']) == false){
                $viewUrl = "";
            }
        ?>
        jQuery(document).ready(function() {
            var deleteUrl = "<?=$deleteUrl;?>";
            var editUrl = "<?=$editUrl;?>";
            var addUrl  = "<?=$addUrl;?>";
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
                            console.log(t);
                            var listLink = "";
                            // if(deleteUrl != ""){
                            //     listLink += '<a class="dropdown-item btn-delete-on-table" href="'+deleteUrl+id+'"><i class="la la-delete	la-trash"></i> Delete</a>\n ';
                            // }
                            if(t.uji_docs.length == 0){
                                if(addUrl != ""){
                                    listLink += '<a class="dropdown-item" href="'+addUrl+id+'"><i class="la la-edit"></i> Edit</a>\n ';
                                }
                            }else{
                                if(t.status_sor == '2'){
                                    if(editUrl != ""){
                                        listLink += '<a class="dropdown-item" href="'+editUrl+t.uji_docs[0].id+'"><i class="la la-edit"></i> Edit</a>\n ';
                                    }
                                }
                                if(viewUrl != ""){
                                    listLink += '<a class="dropdown-item" href="'+viewUrl+t.uji_docs[0].id+'"><i class="la la-search-plus"></i> View</a>\n ';
                                }
                            }
                            if(listLink != ""){
                                return'\n<span class="dropdown">\n'
                                + '\n<a href="#" class="btn btn-sm btn-primary btn-icon btn-icon-md\n'
                                + '" data-toggle="dropdown"'
                                + 'aria-expanded="true">\n<i class="la la-reorder"></i>\n'               
                                +'</a>\n'
                                +'<div class="dropdown-menu">\n '+listLink+'                    </div>\n</span>\n';
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
                            if(status == 1){
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