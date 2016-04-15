<!--<div style="display:none;">
    <script type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ffec5a293424105cecf25d98670adc148' type='text/javascript'%3E%3C/script%3E"))</script>
</div>-->

<?php
$uid = '';
$uname = '';
if ($this->getCurrentUser() !== null) {
    $uid = $this->getCurrentUser()->getUid();
    $uname = $this->getCurrentUser()->getUsername();
}
$itemparam = '';
$itemid = '';
if (($this->action->controller->id == 'doctor') && ($this->action->id == 'view')) {
    $itemid = Yii::app()->request->getQuery('id', '');
    $itemparam = 'doctor';
}
if (($this->action->controller->id == 'hospital') && ($this->action->id == 'view')) {
    $itemid = Yii::app()->request->getQuery('id', '');
    $itemparam = 'hospital';
}
?>
<script language="javascript" type="text/javascript">
    NTKF_PARAM = {
        siteid: "kf_9138", //企业ID，必填，取值参见文档开始表
        settingid: "kf_9138_1451451713805", //缺省客服配置ID，必填，取值参见文档开始表
        uid: "<?php echo $uid ?>", //用户ID,未登录可以为空
        uname: "<?php echo $uname ?>", //用户名，未登录可以为空
        isvip: "", //是否为vip用户
        userlevel: "", //网站自定义会员级别
        itemid: '<?php echo $itemid ?>',
        itemparam: '<?php echo $itemparam ?>'
    }
</script>
<div id="xiaoneng" class="ask" onclick="NTKF.im_openInPageChat('kf_9138_1451451713805');"></div>
<style>
    .ask{z-index:100;cursor:pointer;position:fixed;bottom:39%;right:0px;width:45px;height:147px;background: url(http://s.qiao.baidu.com/style/754/121185754/1/iconbg.jpg);}   
</style>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9138" charset="utf-8"></script>
