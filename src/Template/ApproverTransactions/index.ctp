
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
            $viewUrl = $this->Url->build(['action'=>'view'])."/";
            if($this->Acl->check(['action'=>'view']) == false){
                $viewUrl = "";
            }
        ?>
        jQuery(document).ready(function() {
            var deleteUrl = "<?=$deleteUrl;?>";
            var editUrl = "<?=$editUrl;?>";
            var viewUrl = "<?=$viewUrl;?>";
            var no = 0;
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
                            if(t.status == 1){
                                if(editUrl != ""){
                                    return '<a class="btn btn-success btn-icon" href="'+editUrl+id+'" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="la la-edit"></span></a>\n ';
                                }
                            }
                            if(t.status == 2 || t.status == 3){
                                if(viewUrl != ""){
                                    return '<a class="btn btn-success btn-icon" href="'+viewUrl+id+'" data-toggle="tooltip" data-placement="bottom" title="Proses"><span class="flaticon-list"></span></a>\n ';
                                }
                            }
                        },
                        responsivePriority: -1

                    },
                    { 
                        "title": "No Account", 
                        "name": "Maker.no_reg", 
                        "targets": no++,
                        "data" : 'no_reg'
                    },
                    { 
                        "title": "Jenis", 
                        "name": "Maker.t_lc_type", 
                        "targets": no++,
                        "data" : 't_lc_type'
                    },
                    { 
                        "title": "No L/C & SKBDN", 
                        "name": "Maker.no_lc", 
                        "targets": no++,
                        "data" : 'no_lc'
                    },
                    { 
                        "title": "CIF No", 
                        "name": "Maker.t_CIF", 
                        "targets": no++,
                        "data" : 't_CIF'
                    },
                    { 
                        "title": "Cabang", 
                        "name": "Maker.t_branch", 
                        "targets": no++,
                        "data" : 't_branch'
                    },
                    { 
                        "title": "Beneficiary", 
                        "name": "Maker.m_59", 
                        "targets": no++,
                        "data" : 'm_59'
                    },
                    { 
                        "title": "Currency", 
                        "name": "Maker.m_32B", 
                        "targets": no++,
                        "data" : 'm_32B',
                        render: function (e) {  
                            return e.substring(0,3)
                        }
                    },
                    { 
                        "title": "Ammount", 
                        "name": "Maker.m_32B", 
                        "targets": no++,
                        "data" : 'm_32B',
                        render: function(e) {
                            return e.substring(3)
                        }
                    },
                    { 
                        "title": "ID", 
                        "name": "Maker.id", 
                        "targets": no++,
                        "data" : 'id',
                    },
                ],
                "order": [[ 9, "DESC" ]]
            }
            DatatableRemoteAjaxDemo.init("",options,"<?=$this->request->getParam('_csrfToken');?>")
        });
    </script>
<?php $this->end();?>