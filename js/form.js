
var json_input = {
    "theatre": [
        {
            name: "Place",
            type: "select",
            options: ["0 - 50", "50 - 75", "75 - 100", "100+"]
        }
    ],
    "Café": [
        {
            name: "Etoile",
            type: "select",
            options: [1, 2, 3, 4, 5]
        }
    ],
    "Restaurant": [
        {
            name: "Tables",
            type: "select",
            options: [1, 2, 3, 4, 5]
        }
    ]
}

$(function() {

    // Start JSTREE
    $('#jstree')
        // listen for event
        .on('changed.jstree', function (e, data) {
            console.log(data.node.a_attr.href)
            updateForm()
        })
        .jstree({
            core: {
                themes: { icons: false },
                multiple: false,
            }
        })

    var template = {
        text:     Handlebars.compile($('#input-text').html()),
        textarea: Handlebars.compile($('#input-textarea').html()),
        select:   Handlebars.compile($('#input-select').html())
    }

    function updateForm(obj) {
        //var elems = json_input[$('#selectbasic').val()]
        var elems = json_input[$('.jstree-clicked').first().attr('href').substring(1)]

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
            $('#box').find('[name="' + x + '"]').val(obj[x])
        }

    }

    //$('#selectbasic').change(updateForm)

    if (window.location.hash) {
        //$('#selectbasic').val(window.location.hash.substring(1))
        $('a[href="' + window.location.hash + '"]').addClass('jstree-clicked')

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
