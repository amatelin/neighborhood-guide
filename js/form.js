
var json_input = {
    "theatre": [
        {
            name: "Place",
            type: "select",
            options: ["0 - 50", "50 - 75", "75 - 100", "100+"]
        }
    ],
    "cafe": [
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

    function updateForm(obj) {
        var elems = json_input[$('#selectbasic').val()]

        var result = $('#input-before').html()

        if (elems) {
            elems.forEach(function(input) {
                result += template[input.type](input)
            })
        }

        result += $('#input-after').html()

        $('#box').html(result)

        // Update inner content
        if (!obj)
            return

        // Fill form with query-value
        for (var x in obj) {
            $('#box').find('[name=' + x + ']').val(obj[x])
        }

    }

    $('#selectbasic').change(updateForm)

    if (window.location.hash) {
        $('#selectbasic').val(window.location.hash.substring(1))

        function queryObj() {
            var result = {}, keyValuePairs = location.search.slice(1).split('&')

            keyValuePairs.forEach(function(keyValuePair) {
                keyValuePair = keyValuePair.split('=')
                result[keyValuePair[0]] = keyValuePair[1] || ''
            })

            return result
        }

        updateForm(queryObj())
    }

})
