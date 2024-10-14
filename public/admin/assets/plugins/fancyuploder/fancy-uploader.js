$(function () {
    //fancyfileuplod
    $('#demo').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
});

$('#images').FancyFileUpload({
    params: {
        action: 'fileuploader'
    },
    maxfilesize: 1000000
});
