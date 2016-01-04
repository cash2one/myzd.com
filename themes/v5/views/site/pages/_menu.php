<?php
$menu = $this->getPageMenu();
$curView = Yii::app()->request->getParam('view');
?>

<div class="row hidden-xs">
    <ul class="nav nav-pills nav-stacked">
        <?php
        foreach ($menu as $key => $menuItem) {
//            if (($this->action->id == 'contactus') && ($key == 'contactus')) {
//                echo '<li class="active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
//            } else 
            if (($this->action->id == 'enquiry') && ($key == 'enquiry')) {
                echo '<li class="active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
            } else if ($key == $curView) {
                echo '<li class="active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
            } else {
                echo '<li>' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
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
                if (($this->action->id == 'contactus') && ($key == 'contactus')) {
                    echo '<li class="selected">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                } else if ($key == $curView) {
                    echo '<li class="selected">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                } else {
                    echo '<li>' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
                }
            }
            ?>
        </ul>
    </div>
</div>