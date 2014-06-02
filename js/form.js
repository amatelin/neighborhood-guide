
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
    ]
}

$(function() {

    var source   = $('#input-text').html()
    var template = Handlebars.compile(source)
    var template = {
        text:     Handlebars.compile($('#input-text').html())
        textarea: Handlebars.compile($('#input-textaera').html())
    }


    $('#selectbasic').change(function() {
        var elems = json_input[this.value]

        var result = ''

        elems.forEach(function(input) {
            result += template[input.type](input)
        })

        console.log(result)
        $('#box').html(result)
    })
})
