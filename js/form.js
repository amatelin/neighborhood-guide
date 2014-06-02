
var json_input = {
    "2": [
        {
            name: "Name",
            placeholder: "Taper nom",
            type: "text"
        },
        {
            name: "Description",
            placeholder: "Taper descr",
            type: "textarea"
        }
    ],
    "4": [
        {
            name: "Name",
            placeholder: "Taper nom",
            type: "text"
        },
        {
            name: "Description",
            placeholder: "Taper descr",
            type: "textarea"
        },
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
        if (!elems)
            return

        var result = ''

        elems.forEach(function(input) {
            result += template[input.type](input)
        })

        $('#box').html(result)

    }

    $('#selectbasic').change(updateForm)

    if (window.location.hash) {
        $('#selectbasic').val(window.location.hash.substring(1))
        updateForm()
    }

})
