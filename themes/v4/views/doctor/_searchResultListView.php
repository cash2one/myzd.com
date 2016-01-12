<?php $url = $this->createUrl('doctor/view', array('id' => $data->id)); ?>
<?php
$listId = $this->getListId();
$urlDP = '';
if ($data->getDoctorAvatar() === null) {
    $urlDP = $this->createUrl('doctor/loadAvatar');
} else {
    $urlDP = $this->createUrl('doctor/loadAvatar', array('uid' => $data->getDoctorAvatar()->getUID()));
}
$hospital = $data->getDoctorHospital();

$hName = '';
if (isset($hospital)) {
    $hName = $hospital->getShortName();
}
?>

<div class="row result-row">
    <div class="col-sm-6 col-md-5 cell cell-l">
        <div class="cell-inner">
            <div class="media">
                <div class="avatar">
                    <img class="media-object img-responsive" src="<?php echo $urlDP; ?>" alt="">
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <?php
                        if (in_array($data->id, $listId)) {
                            echo '<a class="nostyle dr-name" target="_blank" href="' . $url . '">';
                        } else {
                            echo '<a class="nostyle dr-name">';
                        }
                        ?>

                        <?php echo $data->fullname; ?></a><span class="label label-info dr-title"><?php echo $data->getTitleDisplay(); ?></span>
                    </div>
                    <div class="hospital"><?php echo ($hName . '&nbsp;' . $data->faculty); ?></div>
                    <div class="link-profile hidden-xs">
                        <?php
                        if (in_array($data->id, $listId)) {
                            echo '<a class="btn btn-warning btn-block"  target="_blank" href="' . $url . '">';
                        } else {
                            echo '<a class="btn btn-warning btn-block disabled">';
                        }
                        ?>
                        个人主页</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-7 cell cell-r">
        <div class="cell-inner noborder">
            <div class="expertise passage">
                <span class="strong">擅长：</span><?php echo $data->expertise; ?>
            </div>
        </div>
        <div class="visible-xs mt10"><a class="btn btn-warning btn-lg btn-block"  target="_blank" href="<?php echo $url;?>">个人主页</a></div>
    </div>
    <div class="clearfix"></div>
</div>