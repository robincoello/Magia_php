(function (wysihtml5) {

    var nodeOptions = {
        nodeName: "I",
        toggle: true
    };

    wysihtml5.commands.italic = {
        exec: function (composer, command) {
            wysihtml5.commands.formatInline.exec(composer, command, nodeOptions);
        },

        state: function (composer, command) {
            return wysihtml5.commands.formatInline.state(composer, command, nodeOptions);
        }
    };

}(wysihtml5));
