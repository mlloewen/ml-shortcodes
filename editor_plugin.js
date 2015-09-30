(function() {
    tinymce.PluginManager.add('custom_mce_button', function(editor, url) {
        editor.addButton('custom_mce_button', {
            text: 'CleanPSpan',
            icon: false,
            onclick: function() {
                var text = editor.getContent();
                editor.setContent('pre' + text + 'post');
            }
        });
    });


})();
