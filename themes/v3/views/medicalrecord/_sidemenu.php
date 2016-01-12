<div class="row hidden-xs">
    <div class="heading-u">
        <div class="text">我的病历</div>
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