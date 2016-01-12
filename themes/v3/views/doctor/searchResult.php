<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php $listId = $this->getListId(); ?>

<style>
    #search-result .summary{display:none;}
</style>
<div id="search-result">
    <h3 class="heading">专家</h3>
    <div class="divider"></div>
    <?php
    if (emptyArray($models) === false) {
        foreach ($models as $model) {
            $this->renderPartial('_searchResultListView',array('data'=>$model));
        }
    } else {
        echo '<h3 class="alert alert-info text-center">没有搜索结果</h3>';
    }
    ?>
</div>