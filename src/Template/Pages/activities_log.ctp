
<div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    <?=$titlesubModule;?>
                </h3>
            </div>
        </div>
    <div class="kt-portlet__body">
        <div class="kt-list-timeline">
            <div class="kt-list-timeline__group">
                <div class="kt-list-timeline__heading">
                    Apps Logs
                </div>
                <div class="kt-list-timeline__items">
                <?php $a = 0;?>
                <?php foreach($auditLogs as $key => $log):?>
                    <?php 
                        if($a == 0){
                            $classes = "kt-list-timeline__badge--success";
                        }else if($a == 1){
                            $classes = "kt-list-timeline__badge--danger";
                        }else if($a == 2){
                            $classes = "kt-list-timeline__badge--warning";
                        }else if($a == 3){
                            $classes = "kt-list-timeline__badge--info";
                            $a = 0;
                        }
                    ?>
                    <div class="kt-list-timeline__item">
                        <span class="kt-list-timeline__badge <?=$classes;?>"></span>
                        <a href="#" class="kt-list-timeline__text"><?=$log['description'];?> by id : <?=$log['id'];?></a>
                        <span class="kt-list-timeline__time"><?=$log['time'];?></span>
                    </div>
                    <?php $a++;?>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>