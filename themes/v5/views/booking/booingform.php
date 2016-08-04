<style>
    .modal-header{background-color: #19aea5;color: #fff;padding: 5px;}
    .modal-header img{margin-bottom: 5px;display: inline-block;}
    .close{color: #fff;opacity:1;}
    .close:hover, .close:focus {color: #fff;text-decoration: none;cursor: pointer;filter: alpha(opacity=70);opacity: .7;}
    .modal .form-horizontal .btn{display: block;}
    .datepicker-dropdown{z-index: 9999!important;}
    .bookingform .form-group a:hover{color: #19aea5;}
    .bookingform .uploadcase .case-item{margin: 0 auto;}
    .bookingform .uploadcase .case-item .add{overflow: hidden;background-color: #fff;color: #ddd;border: 1px dashed #e4e4e4;text-align: center;width: 80px;height: 80px;margin: 0 auto;}
    .bookingform .uploadcase .case-item .add{vertical-align: middle;font-size: 40px;padding-top: 5px;}
    .bookingform .uploadcase .case-item .add:hover{color: #19aea5;border-color: #19aea5;}
    .bookingform .uploadcase .case-item .add input[type=file]{width: 80px;height: 80px;position: absolute;top: 0px;margin: 0;opacity: 0;-ms-filter: 'alpha(opacity=0)';}
    .bookingform .uploadcase .case-item .delete{text-align: center;margin-top: 10px;}
    .bookingform .uploadcase .case-item .delete>a{color: #00f;}
    .mt6{margin-top: 6px;}
    .color-red{color: #f00;}
    .bookinginfo{padding-right: 20px;}
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
                    <form class="form-horizontal mt10 mb10">
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">就诊专家:</label>
                            <div class="col-sm-7">
                                <input class="form-control" maxlength="45" name="BookingForm[expertteam_id]" id="BookingForm_expertteam_id" type="hidden" value="1">
                                <div class="form-control-static">许建屏专家团队</div>
                                <div class="errorMessage" id="BookingForm_expertteam_id_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">就诊医院:</label>
                            <div class="col-sm-7">
                                <input class="form-control" maxlength="45" name="BookingForm[hopital_id]" id="BookingForm_hopital_id" type="hidden" value="1">
                                <div class="form-control-static">阜外心血管病医院</div>
                                <div class="errorMessage" id="BookingForm_hopital_id_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">姓名:</label>
                            <div class="col-sm-7">
                                <input class="form-control" maxlength="45" name="BookingForm[name]" id="BookingForm_name" type="text">
                                <div>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="" value="option1" checked> 姓名一1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="" value="option2"> 姓名一2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="" value="option3"> 姓名一3
                                    </label>
                                    <label class="pull-right mt6"><a href="#">其他>></a></label>
                                </div>
                                <div class="errorMessage" id="BookingForm_name_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">身份证:</label>
                            <div class="col-sm-7">
                                <input class="form-control" maxlength="18" name="BookingForm[name]" id="BookingForm_name" type="text">
                                <div class="errorMessage" id="BookingForm_name_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">确认疾病:</label>
                            <div class="col-sm-7">
                                <input class="form-control" maxlength="6" name="BookingForm[disease]" id="BookingForm_disease" type="text" placeholder="未确诊可以不填">
                                <div class="errorMessage" id="BookingForm_disease_em_" style="display:none"></div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 col-md-4 control-label">病情描述:</label>
                            <div class="col-sm-7">
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
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->