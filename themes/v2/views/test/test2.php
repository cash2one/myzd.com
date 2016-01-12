<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/chosen/chosen.min.css" />
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Example of Bootstrap Button JavaScript Plugin</h2>
            <h3>Control state</h3>
            <p><button id="fat-btn" type="submit" data-loading-text="loading..." data-complete-text="complete" class="btn btn-primary">Loading State</button></p>
            <h3>Single toggle</h3>
            <p><button class="btn btn-primary" data-toggle="button">Single Toggle</button></p>
            <h3>Checkbox</h3>
            <p><div class="btn-group" data-toggle="buttons-checkbox">
                <button class="btn btn-primary">Left</button>
                <button class="btn btn-primary">Middle</button>
                <button class="btn btn-primary">Right</button>
            </div></p>
            <h3>Radio</h3>
            <p><div class="btn-group" data-toggle="buttons-radio">
                <button class="btn btn-primary">Left</button>
                <button class="btn btn-primary">Middle</button>
                <button class="btn btn-primary">Right</button>
            </div></p>
        </div>
    </div>
</div>
<div class="container">
    <select data-placeholder="选择" style="width:350px;" multiple class="chosen-select">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
    </select>
    
</div>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/chosen/chosen.jquery.min.js', CClientScript::POS_END); ?>
<script>
    $(document).ready(function(){
        $("button[type='submit']").click(function () {
            var btn = $(this)
            btn.button('loading')
            $.ajax().always(function () {
                btn.button('complete')
            });
  
        });
        
        $(".chosen-select").chosen();
    });
</script>