(function () {
    tinymce.PluginManager.add('custom_mce_button', function (editor, url) {
        editor.addButton('custom_mce_button', {
            text: 'Clean',
            type: 'menubutton',
            icon: false,
            menu: [
                {
                    text: 'Span',
                    icon: false,
                    onclick: function () {
                        var text = editor.getContent(),
                        re = new RegExp(/<span>|<span\040[a-z|\d|\042|\072|\055|\075|\073|\040|\043]+>|&nbsp;|<\057span>/ig);
                        text = text.replace(re, "");
                        editor.setContent(text);
                    }
                },
                {
                    text: 'p',
                    icon: false,
                    onclick: function () {
                        var text = editor.getContent(),
                        re = new RegExp(/<p>|<p\040[a-z|\d|\042|\072|\055|\075|\073|\040|\043]+>|&nbsp;|<\057p>/ig);
                        text = text.replace(re, "");
                        editor.setContent(text);
                    }
                }
           ]
        });
    });
})();
