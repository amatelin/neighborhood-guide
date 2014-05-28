
var datas = [
    {
        name:'Restaurant',
        infos: [
            {
                name: 'Au Petit Bigorneau',
                stars: 3,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
            {
                name: 'Plaisir de Moules',
                stars: 1,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
        ]

    },
    {
        name:'Café',
        infos: [
            {
                name: 'Café Salé',
                stars: 4,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
            {
                name: 'Patisserie Laurent Foutrey',
                stars: 3,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
            {
                name: 'Guimauve & Chocolat',
                stars: 4,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
        ]

    }

]


// Display Infos
$(function() {
    // Handlerbar
    Handlebars.registerHelper('times', function(n, block) {
        var accum = ''
        for(var i = 0 ; i < n ; ++i)
            accum += block.fn(i)
        return accum
    })
    var source   = $('#item-template').html()
    var template = Handlebars.compile(source)

    // Hide Panel
    $('.panel-heading').first().children('i').click(function() {
        $('.panel').first().css('display', 'none')
    })

    // Show Panel with info
    $('.dropdown-menu').children('li').click(function() {
        var search = $(this).children('a').html()
        for (var x in datas) {
            if (datas[x].name == search) {
                var html = template(datas[x])
                $('.panel').children('.panel-heading').children('span').html(datas[x].name)
                $('.panel').children('.panel-body').html(html)
                $('.panel').css('display', 'block')
                return
            }
        }
        console.log('Undefined items ' + search)
    })

})

// Display Map
$(function() {
    var top = false

    $('#map').find('.mapbar').click(function() {
        $('#map').css('top', top ? '100%' : '64px')
        $('#map').find('.right').css('opacity', top ? '0' : '1')
        top = !top
        $('.panel').first().css('display', 'none')
    })
})
