
// * preview image action
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const preview = document.getElementById('photo_preview');
        preview.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

// * summernote action
$(document).ready(function() {
    // * Define function to open filemanager window
    let lfm = function(options, cb) {
        let route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = cb;
    };

    // * Define LFM summernote button
    let LFMButton = function(context) {
        let ui = $.summernote.ui;
        let button = ui.button({
            contents: '<i class="note-icon-picture"></i> ',
            tooltip: 'Insert image with filemanager',
            click: function() {
                lfm({type: 'image', prefix: '/filemanager'}, function(lfmItems, path) {
                    lfmItems.forEach(function (lfmItem) {
                        context.invoke('insertImage', lfmItem.url);
                    });
                });
            }
        });

        return button.render();
    };

    $('#content').summernote({
        height: 500, // Tinggi editor
        focus: true, // set focus to editable area after initializing summernote
        callbacks: {
            onInit: function() {
                $('.note-editable').css('color', 'black');
            }
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['paragraph']],
            ['popovers', ['lfm']],
            ['insert', ['link']],
            ['view', ['help']]
        ],
        popover: {
            image: [
                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
            link: [
                ['link', ['linkDialogShow', 'unlink']]
            ],
            table: [
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
            ],
            air: [
                ['color', ['color']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']]
            ]
        },
        buttons: {
            lfm: LFMButton
        },
    });
    
});