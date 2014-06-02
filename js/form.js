
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

    $('#selectbasic').change(function() {
        var elems = json_input[this.value]
        if (!elems)
            return

        var result = ''

        elems.forEach(function(input) {
            result += template[input.type](input)
        })

        $('#box').html(result)
    })
})
