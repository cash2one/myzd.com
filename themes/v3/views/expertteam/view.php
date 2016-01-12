<div class="row">
    <?php
    /**
     * @var team refer to IExpertTeam.php
     */
    $teamId = $team->teamId;
    $urlQuickBook = $this->createUrl('booking/quickbook', array('type' => 3, "tid" => $teamId));
    $this->renderPartial("pages/" . $team->teamCode, array("team" => $team));
    ?>
    <div class="col-sm-3">
        <div class="booking row">
            <div class="fixed-booking">
                <div class="booking-title"><h4>手术直通车</h4></div>
                <div class="booking-form">
                    <iframe id="quickbook-frame" width="302" height="630px" name="quickbook-form" class="block" frameborder="0" scrolling="no" seamless src="<?php echo $urlQuickBook; ?>" style="margin:0 auto;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>