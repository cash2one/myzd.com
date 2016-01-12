<?php
/**
 * @var $model IFaculty
 */
$fid = $model->getId();
$expertTeams = $model->expertTeams;   //明星团队
$doctors = $model->getDoctors();        //科室专家
$disLlst = $model->getDiseaseList();      //疾病热词
$urlQuickBook = $this->createUrl('booking/quickbook');
$teamLeaders = array();  //for temporary use only. to filter out team leaders under 科室专家.
?>
<div class="container row pb20">
    <div class="row">
        <div class="col-md-9 col-sm-8">
            <div class="row">
                <div class="mt40 mb10"><h3>明星专家团队</h3></div>
                <?php
                foreach ($expertTeams as $team):
                    $teamLeaders[] = $team->teamLeader->docName;
                    ?>
                    <div class="docGroup mt10 expert-border row" >
                        <a href="<?php echo $team->teamPageUrl; ?>">
                            <div class="img-group pad5 col-sm-1">
                                <?php
                                if (isset($team->members) && arrayNotEmpty($team->members)):
                                    foreach ($team->members as $member):
                                        echo "<img class='img55 mt6' src='" . $member->imageUrl . "'>";
                                    endforeach;
                                endif;
                                ?>

                            </div>
                        </a>
                        <div class="group-info col-sm-11">
                            <div class="media row">
                                <div class="media-left media-middle col-sm-2">
                                    <a href="<?php echo $team->teamPageUrl; ?>">
                                        <img class="expert-img100" src="<?php echo $team->teamLeader->imageUrl; ?>">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading text-bold">
                                        <h4>
                                            <a href="<?php echo $team->teamPageUrl; ?>"><?php echo $team->teamName; ?></a>
                                            <span class="btn btn-booking team-btn" data-url="<?php echo $urlQuickBook . "?type=3&tid=$team->teamId"; ?>" data-toggle="modal" data-target="#bookingModal">立即预约</span>
                                        </h4>
                                    </div>
                                    <div class="mb10">
                                        <sapn class="team-hospital"><?php echo $team->teamLeader->hospital; ?></sapn>
                                    </div>
                                    <div class="mb10">
                                        <sapn class="color-gray">擅长手术：</sapn>
                                        <?php
                                        foreach ($team->disTags as $dis):
                                            echo "<span class='dis'>" . $dis . "</span>";
                                        endforeach;
                                        ?>
                                    </div>
                                    <div class="text-line8">
                                        <span class="color-gray">团队简介：</span>
                                        <?php echo $team->desc; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- 科室专家 -->
            <div class="expert row">
                <div class="mt40 mb10"><h3>精选专家</h3></div>
                <div class="expert-content">

                    <?php
                    $limit = 4;
                    $counter = 1;

                    foreach ($doctors as $doctor):
                        if ($counter > $limit) {
                            break;
                        } else if (in_array($doctor->name, $teamLeaders) === false):
                            ?>
                            <div class="expert-info col-sm-3 pad5">
                                <div class="expert-border">
                                    <div class="mt10 mb5">
                                        <img class="expert-img100" src="<?php echo $doctor->getUrlImage(); ?>"/>
                                    </div>
                                    <div class="text-center">
                                        <div class="mb5"><?php echo "<span class='expert-name'>" . $doctor->getName() . "</span>&nbsp;<span class='expert-atitle'>" . $doctor->getAcademicTitle() . "</span>"; ?></div>
                                        <div class="text12"><?php echo "<span class='expert-faculty'>" . $doctor->getHospitalFaculty() . "</span><span class='expert-mtitle'>&nbsp;" . $doctor->getMedicalTitle() . "</span>"; ?></div>
                                        <div class="text12"><?php echo $doctor->getHospitalName(); ?></div>
                                    </div>
                                    <div class="btn btn-booking abs-btn" data-url="<?php echo $urlQuickBook . "?type=2&did=$doctor->id"; ?>" data-toggle="modal" data-target="#bookingModal">预&nbsp;&nbsp;约</div>
                                    <div class="dotted"></div>
                                    <div class="skills">
                                        <p class="pad5">擅长：<?php echo $doctor->getDescription() ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $counter++;
                        endif;
                    endforeach;
                    ?> 
                </div>
            </div>
        </div>
        <div class="booking col-md-3 col-sm-3">
            <div class="booking-title"><h4>手术直通车</h4></div>
            <div class="booking-form">
                <?php $this->Widget("QuickBookWidget", array('type' => 1, 'fid' => $fid)); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->renderPartial("//booking/_modalQuickBook"); ?>