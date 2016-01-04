/*
 * jQuery File Upload Plugin JS Example 8.9.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global $, window */

$(function () {
    //  'use strict';

    // Initialize the jQuery File Upload widget:
    $('form.fileupload').fileupload({          
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},       
        url: $(this).attr("action"),        
        //url:$(this).html(),
        dataType: 'json',
        limitConcurrentUploads:5,
        limitMultiFileUploadSize:1,
        //maxNumberOfFiles:6,
        autoUpload:true,
        // paramName:"image_uploads[]",
        /* formData:[{
            name:'ajax',
            value:1
        }],
        */
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize:10000000, //10MB
        disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator && navigator.userAgent),
        imageMaxWidth: 4096,
        imageMaxHeight: 4096,
        //imageMinWidth:undefined,
        //imageMinHeight:undefined,
        //  disableImageResize:true,
        //imageQuality:100,
        imageCrop: false, // Force cropped images
    //imageType:'image/jpg'
    //  previewThumbnail:true        
    //always: function (e, data){},
    });

    
});
