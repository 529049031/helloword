/**
 * @param
 * @param id 触发上传的元素的id
 * @param file_type 文件类型
 * @param file_source 文件来源
 * @param uploadCallBack 上传成功执行的回调函数
 * @note ajax上传文件
 */
function uploadFile(id,_token) {
    var button = $('#' + id);
    var url = '/admin/upload';
    new AjaxUpload(button, {
        action: url,
        name: 'upfile',
        data: {_token:_token},
        onSubmit: function (file, ext) {
            // loading('upload_loading', '上传中，请等待...');//upload_loading为随意起的一个loading弹框的id号
        },
        onComplete: function (file, response) {
            $('#'+id).prev('div').find('.tp1').attr('src','/'+response);
        }
    });
}