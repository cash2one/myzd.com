<?php
$menu = $this->getPageMenu();
$curView = Yii::app()->request->getParam('view');
?>
<style>.w20{width:20%;} .mt-60{margin-top:-50px;}

.nav-pills>li{width:20%;}.nav-pills>li+li{margin-left:0px;}
.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus{border-bottom:none!important;border:1px solid #19eae5;color:#5ebfb8;border-top-left-radius:20px;border-top-right-radius:20px;background-color:#fff;font-size:18px;text-align:center;height:50px;line-height:39px;}
.nav-pills>li>a, .nav-pills>li>a:focus{border-top-left-radius:20px;border-top-right-radius:20px;background-color:#fff;height:50px;font-size:18px;text-align:center;line-height:40px;}
.nav-pills>li>a:hover{color: #5ebfb8;}
</style>

<div class="hidden-xs">
    <ul class="nav nav-pills ">
        <?php
        foreach ($menu as $key => $menuItem) {
            if (($this->action->id == 'contactus') && ($key == 'contactus')) {
                echo '<li class="active">' . CHtml::link('' . $menuItem['label'], $menuItem['url'], array('class' => '')) . '</li>';
            } else 
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
<div class="visible-xs">
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

