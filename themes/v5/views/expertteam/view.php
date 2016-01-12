<?php
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/starDoc.css");
?>
<?php
/**
 * @var team refer to IExpertTeam.php
 */
$teamId = $team->teamId;
$urlQuickBook = $this->createUrl('booking/quickbook', array('type' => 3, "tid" => $teamId));
//$this->renderPartial("pages/" . $team->teamCode, array("team" => $team));
$urlBooking = $this->createUrl('booking/create', array('tid' => $teamId));
$baseUrlImage = Yii::app()->theme->baseUrl . "/images/";
//var_dump($team);
$teamLeader = $team->teamLeader;
$members = null;
if (isset($team->members)) {
    $members = $team->members;
}
?>
<div class="container">
    <div class="">
        <div class="col-md-9 col-sm-9">
            <div>
                <section class="row">
                    <div class="title">
                        <?php echo $team->teamName; ?>
                    </div>
                    <div class="group-bg">
                        <div class="row doc-img hidden-xs">
                            <div class="col-sm-2 col-sm-offset-1">
                                <?php
                                if (isset($members[2])) {
                                    echo '<img class="img100 pull-right mt21" src="' . $members[2]->imageUrl . '">';
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                if (isset($members[0])) {
                                    echo '<img class="img100 pull-right mt21" src="' . $members[0]->imageUrl . '">';
                                }
                                ?>
                            </div>
                            <div class="col-sm-2 nopadding">
                                <img class="img-center" src="<?php echo $teamLeader->imageUrl; ?>"/>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                if (isset($members[1])) {
                                    echo '<img class="img100 pull-right mt21" src="' . $members[1]->imageUrl . '">';
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <?php
                                if (isset($members[3])) {
                                    echo '<img class="img100 pull-right mt21" src="' . $members[3]->imageUrl . '">';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row doc-img visible-xs">
                            <div class="col-xs-12"><img class="img-center" src="<?php echo $teamLeader->imageUrl; ?>"/></div>
                        </div>
                    </div>
                </section>
                <section class="main pb20">		
                    <div><?php echo $team->desc ?></div>
                    <h3>擅长手术</h3>
                    <p>我们可诊断并治疗各种<?php echo $teamLeader->hpDeptName; ?>疾病，包括但不限于：</p>
                    <ul>
                        <?php
                        $disTag = $team->disTags;
                        for ($i = 0; $i < count($disTag); $i++) {
                            echo '<li>' . $disTag[$i] . '</li>';
                        }
                        ?>
                    </ul>
                    <h3>专家团队成员简介</h3>
                    <div class="media">
                        <div class="media-left media-middle col-sm-2 col-xs-3">
                            <img class="media-object" src="<?php echo $teamLeader->imageUrl; ?>" alt="">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading mb10"><?php echo $teamLeader->docName; ?>&nbsp;&nbsp;<span class="text15 expert-atitle"><?php echo $teamLeader->aTitle; ?>&nbsp;</span><span class="text15 expert-mtitle">&nbsp;<?php echo $teamLeader->mTitle; ?></span></h4>
                            <div class="expert-hospital"><?php echo $teamLeader->hpName; ?></div>
                            <div class="mb10 expert-faculty"><?php echo $teamLeader->hpDeptName; ?></div>
                            <div class="expert-desc"><?php echo $teamLeader->desc; ?></div>
                        </div>
                    </div>
                    <?php
                    if ($members && count($members) > 0) {
                        for ($i = 0; $i < count($members); $i++) {
                            $member = $members[$i];
                            ?>
                            <div class="media">
                                <div class="media-left media-middle col-sm-2 col-xs-3">
                                    <img class="media-object" src="<?php echo $member->imageUrl; ?>" alt="">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading mb10"><?php echo $member->docName; ?>&nbsp<span class="text15 expert-mtitle">&nbsp;<?php echo $member->mTitle; ?></span></h4>
                                    <div class="expert-hospital"><?php echo $member->hpName; ?></div>
                                    <div class="mb10 expert-faculty"><?php echo $member->hFaculty; ?></div>
                                    <div class="expert-desc"><?php echo $member->desc == "" ? "暂无医生介绍" : $member->desc; ?></div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </section>									
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="booking row">
                <div class="fixed-booking">
                    <div class="booking-title"><h4>手术直通车</h4></div>
                    <div class="booking-form">      
                        <?php $this->Widget("BookingWidget", array('tid' => $teamId)); ?>
                        <!--<iframe id="quickbook-frame" width="302" height="630px" name="quickbook-form" class="block" frameborder="0" scrolling="no" seamless src="<?php echo $urlQuickBook; ?>" style="margin:0 auto;"></iframe>-->
                        <!--<iframe id="quickbook-frame" width="302" height="630px" name="quickbook-form" class="block" frameborder="0" scrolling="no" seamless src="<?php echo $urlBooking; ?>" style="margin:0 auto;"></iframe>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>