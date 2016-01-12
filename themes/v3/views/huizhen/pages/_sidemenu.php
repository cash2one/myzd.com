<div class="row hidden-xs">
    <div class="heading-u">
        <div class="text">国内会诊</div>
        <div class="divider"></div>
    </div>
    <ul class="nav nav-pills nav-stacked">
        <?php
        foreach ($menu as $menuItem) {
            if ($menuItem['active']) {
                echo '<li class="' . $menuItem['key'] . ' active"><a href="' . $menuItem['link'] . '"><i class="fa fa-chevron-right"></i>&nbsp;' . $menuItem['label'] . '</a></li>';
            } else {
                echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '"><i class="fa fa-chevron-right"></i>&nbsp;' . $menuItem['label'] . '</a></li>';
            }
        }
        ?>
    </ul>
</div>
<div class="row visible-xs">
    <div class="btn-group block">
        <button type="button" class="btn btn-default btn-success btn-lg btn-block dropdown-toggle" data-toggle="dropdown">
            <?php echo $this->getCurrentPageLabel(); ?> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-mobile" role="menu" style="width:100%;">
            <?php
            foreach ($menu as $menuItem) {
                if ($menuItem['active']) {
                    echo '<li class="' . $menuItem['key'] . ' selected active"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                } else {
                    echo '<li class="' . $menuItem['key'] . '"><a href="' . $menuItem['link'] . '">' . $menuItem['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>