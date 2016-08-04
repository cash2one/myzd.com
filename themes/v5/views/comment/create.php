<?php
Yii::app()->clientScript->registerCssFile("http://static.mingyizhudao.com/user100.min.css");

$urlResImage = Yii::app()->theme->baseUrl . "/images/";
$urlBookingList = $this->createUrl('booking/list');
$booking = $data->results->booking;
$urlConmmentView = $this->createUrl('comment/view', array('bookingId' => $booking->id));
?>
<div class="bg-green">
    <div class="container">
        <div class="user-crumbs">
            <a href="<?php echo Yii::app()->homeUrl; ?>">首页</a>
            >
            <a href="<?php echo $urlBookingList; ?>">个人中心</a>
            >
            <a>评价</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt40">
        <div class="col-sm-3">
            <?php $this->renderPartial('//user/_userMenu', array('pageActive' => 'bookinglist')); ?>
        </div>
        <div class="col-sm-9">
            <div class="user-header pl20">
                <div class="color-status">预约单：<?php echo $booking->refNo; ?></div>
                <div>
                    <h4 class="text-center color-green text20" >
                        <strong>请您对此次手术进行评价！</strong>
                    </h4>
                </div>
            </div>
            <div class="border-gray mt10 pt50 pl50 pr50 minh700">
                <div><span class="color-gray">主刀专家：</span><strong><?php echo $booking->expertName == null ? '无' : $booking->expertName; ?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="color-gray">确诊疾病：</span><strong><?php echo $booking->diseaseName; ?></strong></div>
                <div id="service" class="mt50 comment">
                    <div class="text16 color-25aea6 mb20"><i class="fa fa-play ml-20"></i><strong class="ml5">请您对我们服务进行星级评价:</strong></div>
                    <strong>治疗效果</strong><i data-fraction="1" class="fa fa-star active ml40 "></i><i data-fraction="2" class="fa fa-star active ml40 "></i><i data-fraction="3" class="fa fa-star active ml40 "></i><i data-fraction="4" class="fa fa-star active ml40 "></i><i data-fraction="5" class="fa fa-star active ml40 "></i><span class="fraction-text ml40 color-gray">5分</span>
                </div>
                <div id="post_operative" class="mt20 comment ">
                    <strong>医生态度</strong><i data-fraction="1" class="fa fa-star active ml40 "></i><i data-fraction="2" class="fa fa-star active ml40 "></i><i data-fraction="3" class="fa fa-star active ml40 "></i><i data-fraction="4" class="fa fa-star active ml40 "></i><i data-fraction="5" class="fa fa-star active ml40 "></i><span class="fraction-text ml40 color-gray">5分</span>
                </div>
                <div class="text16 color-25aea6 mt50"><i class="fa fa-play ml-20"></i><strong class="ml5">评价内容:</strong></div>
                <div>
                    <?php $this->renderPartial('_form', array('model' => $model, 'booking' => $booking)); ?>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade mt300" id="commentModal"  role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content review-modal">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div>
                    <h4 class="text-center color-green text20 mt40" >
                        <img src="http://static.mingyizhudao.com/146010469786484"> <strong>感谢您的评价！</strong>
                    </h4>
                </div>
                <div class="divide"></div>
                <div class="text16 mt20">让每一位患友通过名医主刀平台好看病、看好病，是我们永恒的宗旨。祝您早日康复！</div>
                <div class="text-center mt50"><a href="<?php echo $urlConmmentView; ?>"><div class="btn btn-yes w150p">查看我的评价</div></a></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        //修改评价分数
        $('.fa').mouseover(function () {
            var fraction = $(this).attr('data-fraction');
            $(this).parents('.comment').find('.fa').each(function () {
                var fra = $(this).attr('data-fraction');
                if (fra <= fraction) {
                    $(this).addClass('active');
                    $(this).addClass('fa-star');
                    $(this).removeClass('fa-star-o');
                } else {
                    $(this).removeClass('active');
                    $(this).removeClass('fa-star');
                    $(this).addClass('fa-star-o');
                }
            });
            $(this).parents('.comment').find('.fraction-text').text(fraction + '分');
        });
        $('#service .fa').mouseover(function () {
            var fraction = $(this).attr('data-fraction');
            $('#CommentForm_effect').val(fraction);
        });
        $('#post_operative .fa').mouseover(function () {
            var fraction = $(this).attr('data-fraction');
            $('#CommentForm_doctor_attitude').val(fraction);
        });
    });
</script>