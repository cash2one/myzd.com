
<form action="<?php echo $this->createUrl('api/create', array('model' => 'bookingfile')); ?>" class="form-horizontal MultiFile-intercepted" role="form" autocomplete="off" enctype="multipart/form-data" id="booking-form" method="post">
    <div><label>Username</label><input type="text" name="bookingFile[username]" value="11111111111" maxlength="11"></div>
    <div><label>Token</label><input type="text" name="bookingFile[token]" value="5871E9FC6E4167FB8A4E2576B08F477B"></div>
    <div><label>Booking ID</label><input type="text" name="bookingFile[booking_id]" value='<?php echo $bid; ?>' /></div>
    <input type="file" name="bookingFile[file_data]"/>
    <div>        
        <?php
        /*
          $this->widget('CMultiFileUpload', array(
          //  'model' => $model,
          'attribute' => 'files',
          'id' => "btn-addfiles",
          'name' => 'booking_file[file]',
          'accept' => 'jpg|gif|png',
          'options' => array(
          //'onFileSelect' => 'function(e, v, m){ alert("onFileSelect - "+v) }',
          //'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
          //'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
          // 'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
          // 'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
          // 'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
          ),
          'denied' => '请上传jpg、png、gif格式',
          'duplicate' => '该文件已被选择',
          'max' => 3, // max 10 files
          //'htmlOptions' => array(),
          'value' => '上传病历',
          'selected' => '已选文件',
          //'file'=>'文件'
          ));
         */
        ?>    
    </div>
    <div class="mt20 hide"><a id="btn-submit" type="button" class="btn btn-primary" value='提交'>提交</a></div>
    <div class="mt20"><input id="btn-submit" type="submit" class="btn btn-primary" value='提交'></div>
</form>

<script type="text/javascript">
    $(document).ready(function () {
    /*
     $("#btn-submit").click(function (e) {
     e.preventDefault();
     var domForm = $("#booking-form");
     var requestUrl = domForm.attr('action');
     var postData = domForm.serialize();
     $.ajax({
     type: 'post',
     url: requestUrl,
     data: postData,
     dataType: "json",
     // processData: false,
     //  contentType: "multipart/form-data",
     enctype: 'multipart/form-data',
     // jsonp: "$callback",
     success: function (data) {
     console.log("success");
     console.log(data);
     },
     error: function (data) {
     console.log("error");
     console.log(data);
     },
     complete: function (data) {
     
     }
     });
     
     });
     */
    });
</script>