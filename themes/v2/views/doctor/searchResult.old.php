<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php $listId = $this->getListId(); ?>
<style>
    #search-result .summary{display:none;}
</style>
<div id="search-result">
    <h3 class="heading">专家</h3>
    <div class="divider"></div>
    <?php
    if (isset($dataProvider) && $dataProvider->getData()) {

        $this->widget('EListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_searchResultListView',
            'ajaxUpdate' => true,
            // 'afterAjaxUpdate' => $afterAjaxUpdate,
            //'beforeAjaxUpdate'=>'',
            //   'sortableAttributes' => array(
            //    )
            //'template' => ' <div id="items-wrapper" class="clearfix">{items}</div> {pager}',
            'pagerCssClass' => 'pager-wrapper pull-right',
        ));
    } else {
        echo '<h3 class="alert alert-info text-center">没有搜索结果</h3>';
    }
    ?>

</div>