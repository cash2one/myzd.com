/*
 需要在每个file-holder里添加id，值与隐藏的input[name='fileId']值相同
 */
var urlLoadFiles = "ajaxLoadFiles";
var urlUpdateFileMeta = "ajaxUpdateFileMeta";
var urlDeleteFile = "deleteFile";
// api for updating filemeta.
var urlFileMeta = "test/filemeta";

$(document).ready(function () {
    //定义存储Dictionary
    var fileMetaList = new Dictionary();
    //定义控制date change时没有改变就执行的开关
    var $dateSwitch = false;

    initFiles();

    function initFiles() {
        $("form.fileupload").each(function () {
            var domForm = $(this);
            var reportType = domForm.find("input[name='MRFile[report_type]']").val();
            var mrid = domForm.find("input[name='id']").val();
            var requestUrl = urlLoadFiles + '?id=' + mrid + '&tmpl=1&rt=' + reportType;
            console.log(requestUrl);
            $.ajax({
                type: 'get',
                dataType: "json",
                url: requestUrl,
                // url: urlLoadFiles + "&rt=" + reportType,
                beforeSend: function () {
                    $(".loading").show();
                },
                success: function (data) {
                    data.init = true; //indicate its initial loading.      
                    domForm.find(".files").html(tmpl("template-download", data));
                    myhzBindFileActionEvents(domForm.find(".files .file-holder"));
                },
                complete: function () {
                    $(".loading").hide();
                }
            });
        });
    }



//提交更新fileMetaList里的内容
    $("#submit").click(function () {
        var keys = fileMetaList.Keys();
        updateArray = setUpdateList(keys);
        fileMetaList.Clear();
        updateFileAjax(updateArray);
    });

//addList
    function fileMetaListAdd($fid, $key, $content) {
        var dic = new Dictionary();
        dic.Add($key, $content);
        if (fileMetaList.ContainsKey($fid)) {
            $k = fileMetaList.Item($fid).Keys()[0];
            if ($key !== $k) {
                $val = fileMetaList.Item($fid).Item($k);
                dic.Add($k, $val);
                fileMetaList.Remove($fid);
            }
            fileMetaList.Remove($fid);
            fileMetaList.Add($fid, dic);
        } else {
            fileMetaList.Add($fid, dic);
        }

    }
    //removeList
    function fileMetaListRemove($fid, $key) {
        fileMetaList.Item($fid).Remove($key);
        if (fileMetaList.ContainsKey($fid)) {
            if (!fileMetaList.Item($fid).ContainsKey("desc") && !fileMetaList.Item($fid).ContainsKey("dateTaken")) {
                fileMetaList.Remove($fid);
            }
        }
    }

    function myhzBindFileActionEvents($domFH) {
        // initialzie datepicker object.
        $domFH.find(".datepicker").datepicker({
            //	startDate: "+1d",
            endDate: "+0d",
            todayBtn: true,
            autoclose: true,
            maxView: 2,
            format: "yyyy-mm-dd",
            language: "zh-CN"
        });

        // popup lightbox on click event.
        $domFH.find(".gallery-image-controls>.control-popup").click(function (e) {
            e.preventDefault();
            // $(this).parents(".gallery").find(".gallery-cell .control-popup").colorbox({
            $(this).colorbox({
                //$(this).colorbox({		
                overlayClose: false,
                caption: function () {
                    return "\u76f8\u5173\u63cf\u8ff0：" + $(this).parents(".file-holder").find("textarea[name='fileDesc']").val();
                }, //相关描述
                date: function () {
                    return "\u65e5\u671f：" + $(this).parents(".file-holder").find("input[name='fileDate']").val();
                }, //日期
                rel: "img-data",
                transition: "none",
                width: "90%",
                height: "100%",
                onComplete: function () {
                    wheelzoom(document.querySelector("#colorbox .cboxPhoto"));
                },
                onClosed: function () {
                    $(this).colorbox.remove();
                }
            });

        });

        // 日期聚焦、失焦事件
        $domFH.find(".datepicker").focus(function () {
            $dateSwitch = false;
        }).blur(function () {
            $dateSwitch = true;
        }).change(function () {
            if ($dateSwitch) {
                $dateSwitch = false;
                $fid = $domFH.find("input[name='fileId']").val();
                fileMetaListAdd($fid, "dateTaken", 1);
                if (fileMetaList.ContainsKey($fid)) {
                    if (fileMetaList.Item($fid).ContainsKey("dateTaken")) {
                        var keys = fileMetaList.Keys();
                        updateArray = setUpdateList(keys);
                        fileMetaListRemove($fid, "dateTaken");
                        updateFileAjax(updateArray);
                    }
                }
            }
        });


        //修改描述addList、deleteList
        $domFH.find(".gallery-image-desc").focus(function () {
            $fid = $domFH.find("input[name='fileId']").val();
            $desc = $domFH.find("textarea[name='fileDesc']").val();
            fileMetaListAdd($fid, "desc", $desc);
        }).blur(function () {
            $fid = $domFH.find("input[name='fileId']").val();
            $desc = $domFH.find("textarea[name='fileDesc']").val();
            if ($desc != fileMetaList.Item($fid).Item("desc")) {
                var keys = new Array($fid);
                updateArray = setUpdateList(keys);
                fileMetaListRemove($fid, "desc");
                updateFileAjax(updateArray);
            } else {
                fileMetaListRemove($fid, "desc");
            }

        });
    }



    //updateFileAjax
    function updateFileAjax(updateArray) {
        var jsonData = {filemetas: updateArray};
        console.log(jsonData);
        $.ajax({
            //url: "_ajaxPostBack.php",
            url: urlFileMeta,
            data: jsonData,
            type: 'post',
            dataType: 'json',
            //processData: false, 
            //contentType: false,
            beforeSend: function () {
                if (updateArray.length == 1) {
                    $id = "#" + updateArray[0].fid;
                    $($id).find(".loading").show();
                } else {
                    $("submit").button("loading");
                }
            },
            success: function (data) {

            },
            error: function () {

            },
            complete: function () {
                if (updateArray.length == 1) {
                    $(".loading").hide();
                } else {
                    $("submit").button("reset");
                }
            }

        });
    }

//setUpdateList
    function setUpdateList(keys) {
        var updateArray = new Array();
        for (var x in keys) {
            var fileData = new Array();
            $key = keys[x];
            $id = "#" + $key;
            if (fileMetaList.Item($key).ContainsKey("desc") && fileMetaList.Item($key).ContainsKey("dateTaken")) {
                $desc = $($id).find("textarea[name='fileDesc']").val();
                $dateTaken = $($id).find("input[name='fileDate']").val();
                updateArray[updateArray.length] = {fid: $key, desc: $desc, dateTaken: $dateTaken};
            } else if (fileMetaList.Item($key).ContainsKey("dateTaken")) {
                $dateTaken = $($id).find("input[name='fileDate']").val();
                updateArray[updateArray.length] = {fid: $key, dateTaken: $dateTaken};
            } else if (fileMetaList.Item($key).ContainsKey("desc")) {
                $desc = $($id).find("textarea[name='fileDesc']").val();
                updateArray[updateArray.length] = {fid: $key, desc: $desc};
            }
        }
        return updateArray;
    }
//end



    function myhzUpdateFileMetaData($domBtn) {
        $domBtn.button("loading");
        var $nextStep = $domBtn.attr("data-next-step");
        var $mrid = $domBtn.parent().find("input[name='mrId']").val();
        var $data = new FormData();
        if ($nextStep) {
            $data.append('next_step', $nextStep);
        }
        $data.append("id", $mrid);  //filterMedicalRecordContext.

        $(".file-holder").each(function () {
            var $fid = $(this).find("input[name='fileId']").val();
            var $fdate = $(this).find("input[name='fileDate']").val();
            var $fdesc = $(this).find("textarea[name='fileDesc']").val();
            $data.append("MRFile[" + $fid + "][id]", $fid);
            $data.append("MRFile[" + $fid + "][date_taken]", $fdate);
            $data.append("MRFile[" + $fid + "][description]", $fdesc);
        });

        $.ajax({
            url: urlUpdateFileMeta,
            data: $data,
            type: 'post',
            processData: false,
            contentType: false,
            beforesend: function () {
            },
            success: function (response) {
                if (response.status === true) {
                    if (response.urlNext) {
                        window.location = response.urlNext;
                    }
                    // if($domBtn.attr("data-next-step")==="3"){}
                    else {
                        $domBtn.button("reset");
                        myhzShowModalAlert("上传病历", "<i class='fa fa-check'></i>&nbsp;保存成功！", null, false);
                    }
                }
            },
            error: function (response) {
                $domBtn.button("reset");
            },
            complete: function (response) {
                // $domBtn.button("reset");
            }

        });
    }


    function deleteFile($id) {
        var $domInputId = $(".files .file-holder").find("input[value='" + $id + "']");
        if ($domInputId !== undefined) {
            var $domFH = $domInputId.parents(".file-holder");
            var $domBtn = $domFH.find(".btn-delete");
            $domBtn.attr("disabled", true);  //disable the button first.
            var $mrid = $domFH.find("input[name='mrId']").val();
            var $fid = $domFH.find("input[name='fileId']").val();
            var $data = new FormData();
            $data.append("id", $mrid);
            $data.append("fid", $fid);

            $.ajax({
                url: urlDeleteFile,
                data: $data,
                type: 'post',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $domFH.find(".loading").show();
                },
                success: function (response) {
                    if (response.status === "true") {
                        $domFH.remove();
                    } else {
                        console.log(response);
                    }
                },
                error: function (response) {
                    console.log(response);
                },
                complete: function () {
                    $domFH.find(".loading").hide();
                    $domBtn.attr("disabled", false); //enable the button
                }

            });
        }
        return false;
    }


});