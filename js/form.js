
var json_input = {
    "2": [
        {
            name: "Place",
            type: "select",
            options: ["0 - 50", "50 - 75", "75 - 100", "100+"]
        }
    ],
    "4": [
        {
            name: "Etoile",
            type: "select",
            options: [0, 1, 2, 3, 4, 5]
        }
    ]
}

$(function() {

    var template = {
        text:     Handlebars.compile($('#input-text').html()),
        textarea: Handlebars.compile($('#input-textarea').html()),
        select:   Handlebars.compile($('#input-select').html())
    }

    function updateForm() {
        var elems = json_input[$('#selectbasic').val()]

        var result = $('#input-before').html()

        if (elems) {
            elems.forEach(function(input) {
                result += template[input.type](input)
            })
        }

        result += $('#input-after').html()

        $('#box').html(result)

    }

    $('#selectbasic').change(updateForm)

    if (window.location.hash) {
        $('#selectbasic').val(window.location.hash.substring(1))
        updateForm()
    }

})
