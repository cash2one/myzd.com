<?php 
$this->show_header = 0;
$this->show_footer = 0;
?>
<script type="text/javascript">
    $(document).ready(function () {
        var dlUrl = '<?php echo $dlUrl; ?>';
        var u = navigator.userAgent, app = navigator.appVersion;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Linux') > -1; //android终端或者uc浏览器
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        console.log(isiOS);
        if (isAndroid) {
            location.href = dlUrl;
        } else if (isiOS) {
            location.href = dlUrl;
        } else {
            location.href = dlUrl;
        }
    });
</script>