<?php
$user = $this->getCurrentUser();
$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
$urlSettings = $this->createUrl('user/changePassword');
$urlBack = $this->createUrl('booking/feedback');
$menus = array(
    'bookinglist' => array('url' => $urlBookingList, 'label' => '我的预约单'),
    'settings' => array('url' => $urlSettings, 'label' => '账号设置'),
    'back' => array('url' => $urlBack, 'label' => '问题反馈'),
);
?>
<div class="login-menu mb20">
    <a href="<?php echo $urlBookingList; ?>">
        <div class="personalcenter">
            <div class="row">
                <div class="col-sm-5">
                    <img class="pull-right" src="<?php echo $urlResImage; ?>user/user.png"/>
                </div>
                <div class="col-sm-7">
                    <h4>你好！</h4>
                    <div><?php echo $user->username; ?></div>
                </div>
            </div>
        </div>
    </a>
    <div class="mt10 border-green">
        <ul>
            <?php
            foreach ($menus as $key => $value) {
                if ($key == $pageActive) {
                    echo '<li><a class="' . $key . ' active" href="' . $value['url'] . '"><span class="icon-img"></span>' . $value['label'] . '</a></li>';
                } else {
                    echo '<li><a class="' . $key . '" href="' . $value['url'] . '"><span class="icon-img"></span>' . $value['label'] . '</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</div>