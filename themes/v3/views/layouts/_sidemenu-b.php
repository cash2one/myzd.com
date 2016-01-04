<?php
/*
 * $activeTab
 */
?>
<div id="sidemenu-b" class="col-sm-3">
    <div class="panel panel-success mt20">
        <div class="panel-heading"><h3 class="panel-title">账户设置</h3></div>
        <div class="panel-body">
            <div class="row">
                <ul class="nav nav-stacked nav-link noborder">
                    <li role="presentation" id="tab-profile" class="hide"><a href="<?php echo $this->createUrl('user/account'); ?>" xdata-toggle="tab">我的信息</a></li>
                    <li role="presentation" id="tab-password" class="active"><a href="<?php echo $this->createUrl('user/account'); ?>" xdata-toggle="tab">修改密码</a></li>
                </ul>	
            </div>
        </div>
    </div>
</div>