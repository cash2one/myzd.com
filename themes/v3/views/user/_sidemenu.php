<div class="row hidden-xs">
    <?php
    if ($this->getCurrentUser() !== null) {
        echo '<div class="pull-right text-muted" style="padding: 8px;">你好！&nbsp;' . $this->getCurrentUser()->getUsername() . '</div>';
    }
    ?>
    <div class="heading-u">
        <div class="text">我的账户</div>
        <div class="divider"></div>
    </div>
    <ul class="nav nav-pills nav-stacked">
        <?php
        foreach ($menu as $key => $menuItem) {
            echo '<li class="' . $key . ' ' . $menuItem['active'] . '"><a href="' . $menuItem['link'] . '"><i class="fa fa-chevron-right"></i>&nbsp;' . $menuItem['label'] . '</a></li>';
        }
        ?>
    </ul>
</div>