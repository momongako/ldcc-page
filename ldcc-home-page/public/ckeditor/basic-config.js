CKEDITOR.editorConfig = function( config ) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.removePlugins = 'easyimage, cloudservices';

    config.toolbar = [

        '/',
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-'] },
        { name: 'links', items: [ 'Link', 'Unlink'] },

        '/',

    ];

    config.filebrowserBrowseUrl = '/ckfinder/ckfinder.html';

    config.filebrowserImageBrowseUrl = '/ckfinder/ckfinder.html?type=Images';

    config.filebrowserFlashBrowseUrl = '/ckfinder/ckfinder.html?type=Flash';

    config.filebrowserUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

    config.filebrowserImageUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.filebrowserFlashUploadUrl = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
