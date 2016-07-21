<?php
/**
 * $data
 */
//$diseaseId = $data['disease']->id;
//$urlHospitals = $this->createUrl("/api/list", array('model'=>'hospital', 'disease'=>$diseaseId));
if (isset($data->disease) === false):
    ?>
    <div class="container">
        <h3>暂无此疾病信息</h3>
    </div>
    <?php
else:
    Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . "/css/disease.css");
    $urlResImage = Yii::app()->theme->baseUrl . "/images/";
    $diseaseId = $data->disease->id;
    $expertteams = $data->expertteams;
    $urlDoctors = $this->createUrl("/api/list", array('model' => 'doctor', 'disease' => $diseaseId));
    $urlQuickbook = $this->createUrl('/booking/quickbook');
    $urlBooking = $this->createUrl('booking/create', array('ajax' => 1));

    $disName = $data->disease->name;
    $disDesc = '';
    if (isset($data->disease->desc)) {
        $disDesc = $data->disease->desc;
    }
    $this->pageTitle = "治疗".$disName."哪家医院最好,治疗".$disName."哪个医生最好,专家名医排行_名医主刀网";
    $this->htmlMetaKeywords = $disName."治疗,".$disName."症状,".$disName."名医";
    $this->htmlMetaDescription = mb_strlen($disDesc) > 120 ? mb_substr($disDesc, 0, 120, 'utf-8') : $disDesc;
    ?>
    <div class="container pb40">
        <div>
            <div id="dis-name" class="dis-title border-left"><span><?php echo $disName; ?></span></div>
            <div class="dis-desc mt10"><?php echo $disDesc; ?></div>
        </div>
        <div id="expertteam" class="rec-team">
            <?php
            for ($i = 0; $i < count($expertteams); $i++) {
                if ($i == 0) {
                    echo '<div class="dis-title">推荐专家团队</div>';
                }
                ?>
                <div class="border-gray mt20"><div class="mt35 mb35">
                        <div class="media">
                            <div class="pull-left media-middle">
                                <img class="media-object" src="<?php echo $expertteams[$i]->leader->imageUrl; ?>" alt="">
                                <div class="mt10 text-center pl20">
                                    <span class="btn btn-booking" data-toggle="modal" data-target="#bookingEteamModal<?php echo $expertteams[$i]->id; ?>">预 约</span>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="media-header">
                                    <div class="docname mt10">
                                        <span class="pr20"><?php echo $expertteams[$i]->leader->name; ?></span>
                                        <span class="text15 text-gray"><?php echo $expertteams[$i]->leader->mTitle; ?> | <?php echo $expertteams[$i]->leader->aTitle; ?></span>
                                    </div>
                                </div>
                                <div class="mt10"><?php echo $expertteams[$i]->hospital; ?> &nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $expertteams[$i]->leader->hpDept; ?></div>
                                <div class="edesc mt10"><?php echo $expertteams[$i]->desc; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="rec-doc pb40">
            <div class="dis-title">推荐相关名医<span class="more-doctor pull-right"><a href="<?php echo $this->createUrl('doctor/search', array('disease' => $data->disease->id)); ?>">更多医生>></a></span></div>
            <div class="divider"></div>
            <div class="loading loading02"></div>
            <div class="row doclist">

            </div>
        </div>
        <?php //$this->renderPartial("//booking/_modalQuickBook");  ?>
        <?php //$this->renderPartial("//booking/_modalBooking"); ?>
        <?php $this->renderPartial("//booking/formModal"); ?>
        <style>
            .modal .modal-title{text-align: center;}
            .modal .modal-header a>img{width: 100px;}
        </style>
        <?php for ($i = 0; $i < count($expertteams); $i++) { ?>
            <div class="bookingModal modal fade " role="dialog" id="bookingEteamModal<?php echo $expertteams[$i]->id; ?>" aria-labelledby="bookingEteamModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">预约单</h4>
                        </div>
                        <div class="modal-body">
                            <div class="block-center">
                                <div class="booking-form">
                                    <?php $this->Widget("BookingWidget", array('tid' => $expertteams[$i]->id)); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer hide">
                            <div class="row">
                                <button type="button" class="col-sm-2 col-sm-offset-7 btn btn-blue">提&nbsp;交</button>

                                <button type="button" class="ml20 col-sm-2 btn btn-default" data-dismiss="modal">关&nbsp;闭</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->    
            <!-- /. Modal 手术直通车 -->
        <?php } ?>
        <script>
            $(document).ready(function () {
                setDoctor();
                $('.rec-hospital .bxslider').bxSlider({
                    slideMargin: 20,
                    controls: true
                });
                $(".slide-next").click(function () {
                    $(this).parents(".hpitem").find(".bx-next").trigger("click");
                });
                //绑定model
                var bookingModal = $("#bookingModal");
                $(".btn[data-target=#bookingModal]").click(function (ev) {
                    ev.preventDefault();
                    var dataUrl = $(this).attr("data-url");
                    bookingModal.find("#quickbook-frame").attr("src", dataUrl);
                });
            });
            function setDoctor() {
                var urlDoctors = "<?php echo $urlDoctors; ?>";
                urlDoctors += '&pagesize=9&page=1';
                // show loading gif.
                $(".rec-doc .loading").show();
                $.ajax({
                    url: urlDoctors,
                    success: function (data) {
                        setDoctorsHtml(data.doctors);
                    },
                    complete: function () {
                        // hide loading gif.
                        $(".rec-doc .loading").hide();
                    }
                });
            }

            function setDoctorsHtml($doctors) {
                var innerHtml = '';
                if ($doctors) {
                    $docNum = $doctors.length > 9 ? 9 : $doctors.length;
                    for ($j = 0; $j < $docNum; $j++) {
                        $doctor = $doctors[$j];
                        $docdesc = $doctor.desc ? $doctor.desc : "";
                        $descshort = $docdesc.substr(0, 16) + "...";
                        $aTitle = $doctor.aTitle ? " | " + $doctor.aTitle : "";
                        $hpDept = $doctor.hpDept ? $doctor.hpDept : "";
                        bookingBtn = '<span class="btn btn-disabled">预 约</span>';
                        if ($doctor.isContracted == '1') {
                            bookingBtn = '<span class="btn btn-booking" data-url="<?php echo $urlBooking; ?>&did=' + $doctor.id + '" data-docid="' + $doctor.id + '" data-docname="' + $doctor.docName + '" data-dochospital="' + $doctor.hospital + '" data-docdept="' + $hpDept + '" data-toggle="modal" data-target="#bookingModal">预 约</span>';
                        }
                        innerHtml +=
                                '<div class="mt30 col-md-4 col-sm-6"><div class="docinfo"><div><img src="' +
                                $doctor.imageUrl + '"/></div><div class="text-center"><span class="docname">' +
                                $doctor.name + '</span>&nbsp;&nbsp;<span class="doctitle">' +
                                $doctor.mTitle +
                                $aTitle + '</span></div><div class="text-center"><span>' +
                                $hpDept + '</span></div><div class="text-center"><span>' +
                                $doctor.hpName + '</span></div><div class="dashed"></div><div class="docdesc"><span class="long">擅长:</span><div class="desc-content" data-toggle="tooltip" data-placement="bottom" title="' +
                                $docdesc + '">' +
                                $descshort + '</div></div><div class="text-center mt10 mb5" style="min-height:32px;">' +
                                bookingBtn +
                                '</div></div></div>';
                    }
                }
                $(".rec-doc .doclist").html(innerHtml);

                //绑定model
                var bookingModal = $("#bookingModal");
                $(".btn[data-target=#bookingModal]").click(function (ev) {
                    ev.preventDefault();
                    var dataUrl = $(this).attr("data-url");
                    bookingModal.find("#quickbook-frame").attr("src", dataUrl);
                });

                $('[data-toggle="tooltip"]').tooltip();
            }
        </script>
    </div>
<?php endif; ?>