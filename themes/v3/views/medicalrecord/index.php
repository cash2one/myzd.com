<style>#list-result-wrapper{position:relative;padding-bottom:80px;}#list-result-wrapper .pager-wrapper{position:absolute;bottom:0;right:0;}</style>
<?php
/* @var $this MedicalRecordController */
/* @var $dataProvider CActiveDataProvider */
$menu = $this->loadPageMenu();
?>
<div class="page-content">
    <div class="row">
        <div id="sidemenu" class="col-sm-3 xpos-fixed"> 
            <?php $this->renderPartial('_sidemenu', array('menu' => $menu)); ?>
        </div>
        <div id="main-content" class="col-2 col-sm-9 xcol-sm-offset-3">
            <section class="clearfix">
                <div class="heading-u">
                    <div class="text">查看所有病例</div>
                    <div class="divider"></div>
                </div>  
                <div id="list-result-wrapper" class="content clearfix">
                    <table class="table table-striped table-hover result">
                        <thead>
                            <tr>
                                <th>患者姓名</th>
                                <th>预约信息</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            /*
                              $this->widget('zii.widgets.CListView', array(
                              'dataProvider' => $dataProvider,
                              'itemView' => '_view',
                              ));
                             */
                            $this->widget('EListView', array(
                                'dataProvider' => $dataProvider,
                                'itemView' => '_view',
                                'ajaxUpdate' => true,
                                'template' => ' <div id="items-wrapper" class="clearfix">{items}</div> {pager}',
                                'pagerCssClass' => 'pager-wrapper pull-right',
                            ));
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </div>
</div>
