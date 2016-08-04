<style>
    .modal-header{background-color: #19aea5;color: #fff;padding: 5px;}
    .modal-header img{margin-bottom: 5px;display: inline-block;}
    .close{color: #fff;opacity:1;}
    .close:hover, .close:focus {color: #fff;text-decoration: none;cursor: pointer;filter: alpha(opacity=70);opacity: .7;}
    .modal .form-horizontal .date input{width: 45%;display: inline-block;}
    .modal .form-horizontal .btn{display: block;}
    .datepicker-dropdown{z-index: 9999!important;}
    .bookingform .uploadcase .case-item{margin: 0 auto;}
    .bookingform .uploadcase .case-item .add{overflow: hidden;background-color: #fff;color: #ddd;border: 1px dashed #e4e4e4;text-align: center;width: 80px;height: 80px;margin: 0 auto;}
    .bookingform .uploadcase .case-item .add{vertical-align: middle;font-size: 40px;padding-top: 5px;}
    .bookingform .uploadcase .case-item .add:hover{color: #19aea5;border-color: #19aea5;}
    .bookingform .uploadcase .case-item .add input[type=file]{width: 80px;height: 80px;position: absolute;top: 0px;margin: 0;opacity: 0;-ms-filter: 'alpha(opacity=0)';}
    .bookingform .uploadcase .case-item .delete{text-align: center;margin-top: 10px;}
    .bookingform .uploadcase .case-item .delete>a{color: #00f;}
    .color-red{color: #f00;}
    .bookinginfo{padding-right: 20px;}
    .bookinginfo dd,.bookinginfo dt{margin-top: 20px;letter-spacing: 2px;}
</style>
<div class="modal fade" role="dialog" id="bookingModal" aria-labelledby="bookingModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title"><img src="http://static.mingyizhudao.com/147012932956422"/>&nbsp;快速预约单</h2>
            </div>
            <div class="modal-body pb40">
                <div class="bookingform">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">姓名<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <input class="form-control" maxlength="45" name="BookingForm[name]" id="BookingForm_name" type="text">
                                <div class="errorMessage" id="BookingForm_name_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">身份证<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <input class="form-control" maxlength="18" name="BookingForm[name]" id="BookingForm_name" type="text">
                                <div class="errorMessage" id="BookingForm_name_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="padright0 col-sm-3 col-md-3 control-label">联系方式<span class="color-red">*</span>:</label>
                            <div class="col-sm-8 controls">
                                <div class="input-group">
                                    <input class="form-control" maxlength="11" name="BookingForm[mobile]" id="BookingForm_mobile" type="text">  
                                    <div id="btn-sendSmsCode" class="btn input-group-addon  btn-verifycode">获取验证码</div>
                                </div>
                                <div class="errorMessage" id="BookingForm_mobile_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">验证码<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <input class="form-control" maxlength="6" name="BookingForm[verify_code]" id="BookingForm_verify_code" type="text">
                                <div class="errorMessage" id="BookingForm_verify_code_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">意向就诊日期<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <div class="date">
                                    <input class="form-control datepicker" data-date-format="yyyy-mm-dd" maxlength="18" name="BookingForm[date]" id="BookingForm_date" type="text" placeholder="点击设置日期" readonly>
                                    <span>-</span>
                                    <input class="form-control datepicker" data-date-format="yyyy-mm-dd" maxlength="18" name="BookingForm[date]" id="BookingForm_date" type="text" placeholder="点击设置日期" readonly>
                                </div>

                                <div class="errorMessage" id="BookingForm_date_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">期望就诊城市<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option value="1" selected>北京</option>
                                    <option value="73">上海</option>
                                    <optgroup label="江苏">
                                        <option value="74">南京</option>
                                        <option value="75">无锡</option>
                                        <option value="76">徐州</option>
                                        <option value="77">常州</option>
                                        <option value="78">苏州</option>
                                        <option value="79">南通</option>
                                        <option value="80">连云港</option>
                                        <option value="81">淮安</option>
                                        <option value="82">盐城</option>
                                        <option value="83">扬州</option>
                                        <option value="84">镇江</option>
                                    </optgroup>
                                    <optgroup label="浙江">
                                        <option value="87">杭州</option>
                                        <option value="88">宁波</option>
                                        <option value="89">温州</option>
                                        <option value="90">嘉兴</option>
                                        <option value="91">湖州</option>
                                        <option value="93">金华</option>
                                        <option value="94">衢州</option>
                                        <option value="95">舟山</option>
                                        <option value="97">丽水</option>
                                    </optgroup>
                                    <optgroup label="广东">
                                        <option value="200">广州</option>
                                    </optgroup>
                                </select>
                                <div class="errorMessage" id="BookingForm_city_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">确认疾病<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <input class="form-control" maxlength="6" name="BookingForm[disease]" id="BookingForm_disease" type="text" placeholder="未确诊可以不填">
                                <div class="errorMessage" id="BookingForm_disease_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-3 control-label">病情描述<span class="color-red">*</span>:</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3" placeholder="至少10个字以上..."></textarea>
                                <div class="errorMessage" id="BookingForm_disease_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                *为了专家更好地诊断，我们建议您上传完整清晰的检查报告和影像资料（最多3张）
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="uploadcase">
                                <div class="col-sm-4">
                                    <div class="case-item">
                                        <div>
                                            <a href="javascript:;">
                                                <div class="add">
                                                    +<input id="fileupload" type="file" name="file" multiple>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="delete"><a href="javascript:;" >添加</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4">
                                <span class="btn btn-yes btn-lg">提 交</span>
                            </div>
                        </div>
                    </form>
                </div>
                <h3 class="text-center color-green">预约成功!</h3>
                <dl class="dl-horizontal bookinginfo">
                    <dt>姓名:</dt><dd class="pt20">哈哈哈</dd>
                    <dt>身份证:</dt><dd>888888888888888888</dd>
                    <dt>联系方式:</dt><dd>88888888888</dd>
                    <dt>意向就诊日期:</dt><dd>2222年22月22日-3333年33月33日</dd>
                    <dt>希望就诊城市:</dt><dd>上海</dd>
                    <dt>确诊疾病:</dt><dd>口腔智齿</dd>
                    <dt>病情描述:</dt><dd>哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</dd>
                    <dt>病例资料:</dt>
                    <dd>
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?php echo $urlResImage; ?>icons/ic_wx.jpg"/>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo $urlResImage; ?>icons/ic_wx.jpg"/>
                            </div>
                            <div class="col-sm-4">
                                <img src="<?php echo $urlResImage; ?>icons/ic_wx.jpg"/>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $(document).ready(function () {
        $(".bookingform .datepicker").datepicker({
            startDate: "+0d",
            todayBtn: true,
            autoclose: true,
            maxView: 2,
            format: "yyyy-mm-dd",
            language: "zh-CN"
        });
    });
</script>