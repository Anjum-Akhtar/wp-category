jQuery(document).ready(function ($) {
    function openMediaUploader(buttonClass) {
        $('body').on('click', buttonClass, function (e) {
            e.preventDefault();
            var button = $(this);
            var imageField = button.prev('input');

            var customUploader = wp.media({
                title: 'Select Image',
                library: { type: 'image' },
                button: { text: 'Use this image' },
                multiple: false
            }).on('select', function () {
                var attachment = customUploader.state().get('selection').first().toJSON();
                imageField.val(attachment.url);
            }).open();
        });
    }

    openMediaUploader('.upload_image_button');
});
