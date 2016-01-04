<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mr-form',
    'htmlOptions' => array('class' => 'form-horizontal'),
    'enableAjaxValidation' => true,
    'action' => $this->createUrl('test/filemeta'),
    'enableClientValidation' => false,
        ));
?>
<input type="hidden" name='userid' value="1" />
<input name='filemetas[20][fid]' type='hidden' value='20'/>
<input name='filemetas[20][dateTaken]' type='text' value='2015-05-01' class='form-control'/>

<input name='filemetas[24][fid]' type='hidden' value='24'/>
<input name='filemetas[24][dateTaken]' type='text' value='2015-05-01' class='form-control'/>

<input name='filemetas[25][fid]' type='hidden' value='25'/>
<input name='filemetas[25][desc]' type='text' value='2015-05-01' class='form-control'/>

<?php
for ($i = 35; $i < 40; $i++) {
    $fid = $i;
    echo '<div class="form-group">'
    . "<input name='filemetas[$fid][fid]' type='hidden' value='$fid'/>"
    . "<input name='filemetas[$fid][dateTaken]' type='text' value='2015-05-01' class='form-control'/>"
    . "<textarea name='filemetas[$fid][desc]' type='text' class='form-control'>desc-$fid</textarea>"
    . "</div>";
}
?>

<input id = "btnSubmit" type = "button" value = "submit" />


<?php $this->endWidget();
?>

<script>
    $(document).ready(function () {
    $("#btnSubmit").click(function (e) {
    e.preventDefault();
            var $form = $("#mr-form");
            var filemetas = new Array({25:'25', value:"{fid:25, dateTaken:2015-04-02}"}, {key:'26', value:"{fid:25, desc:'some desc.'}"});
            console.log(filemetas);
                    $.ajax({
                    type: 'post',
                            url: $form.attr("action"),
                            //data: $form.serialize(),
                            data:{"userid":1, filemetas},
                            dataType: "json",
                            // jsonp: "$callback",
                            success: function (data) {

                            },
                            error: function (data) {

                            },
                            complete: function (data) {
                            console.log(data);
                            }
                    });
            });
    });
</script>