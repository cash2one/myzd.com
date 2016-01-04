<?php
$urlSearch = $this->createAbsoluteUrl('test/ajaxUserSearch');
?>

<form id='searchForm'>
    <label>name:</label>
    <input name='name' value=''>
    <label>mobile:</label>
    <input name='mobile' value=''>
    <label>hospital:</label>
    <input name='hpName' value=''>
    <button id='btnSearch' type='button'>搜索</button>
</form>

<script>
    $(document).ready(function () {
        var domForm = $("#searchForm");
        var requestUrl = "<?php echo $urlSearch; ?>";
        $("#btnSearch").click(function () {
            var searchUrl = requestUrl + '?role=2';
            var formData = new FormData();
            var index = 1;
            domForm.find("input").each(function () {
                // trim
                var value = $.trim($(this).val());
                if (value !== '') {
                    searchUrl += '&' + $(this).attr('name') + '=' + value;
                }
                /*
                 if (value !== '') {
                 if (index == 1) {
                 searchUrl += '?' + $(this).attr('name') + '=' + value;
                 } else {
                 searchUrl += '&' + $(this).attr('name') + '=' + value;
                 }
                 index++;
                 
                 console.log($(this).val());
                 }
                 */

                //formData.appendData($(this).attr('name'), $(this).val());
            });
            //return false;
            $.ajax({
                type: 'get',
                dataType: "json",
                url: searchUrl,
                // jsonp: "$callback",

                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    alert(data);
                }
            });
        });
    });
</script>