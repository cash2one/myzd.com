<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/xiumi-fix.css" />
<?php $menu = $this->loadPageMenu();?> 
<div class="row">
    <div  id="sidemenu" class="col-sm-3 hidden-xs pos-fixed">
        <div class="row">
            <div class="heading-u">
                <div class="text">特色推荐</div>
                <div class="divider"></div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <?php
                foreach ($menu as $menuItem) {				
                    echo '<li class="' . $menuItem['key'] . ' ' . $menuItem['active'] . '"><a href="' . $menuItem['link'] . '"><i class="fa fa-chevron-right"></i>&nbsp;' . $menuItem['label'] . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-sm-9  col-sm-offset-3">        
        <div id="article-content" class="tn-article-section container pb50">
			<?php $this->renderPartial('pages/'.$this->current_page);?>
        </div><!-- End #article-content -->
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        myhzBindFloatingSideMenu();
    });
</script>