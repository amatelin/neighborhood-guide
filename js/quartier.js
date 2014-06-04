var datas = [
    {
        name:'Bons Plans',
        infos: [
            {
                name: 'La Distillerie',
                stars: 0,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
            {
                name: 'Le Rouge',
                stars: 3,
                desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
                url: 'resto'
            },
        ]

    },
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

function attachInfo() {
    $('.item').click(function() {
        var elem = $(this).children('.mask').first()
        if (elem.height() == '0') {
            elem.height('auto')
        } else {
            elem.height('0')
        }
    })
}

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
                attachInfo()
                return
            }
        }
        console.log('Undefined items ' + search)
    })


    $('nav').css('display','displayed');
    $('.navbar').css('opacity','1');
})

// Display Map
$(function() {

    var top = false,
        dist = '107px'   

        function showMap() {
            $('#map').css('top', top ? '97%' : dist)
            $('#map').find('.right').css('opacity', top ? '0' : '1')
            $('#map').find('.piti') .css('opacity', top ? '1' : '0')
            window.setTimeout(function() {top = !top}, 300)
            if(!top){
                var source   = $('#item-template').html()
                var template = Handlebars.compile(source)
                var html = template(datas[0])
                $('.panel').children('.panel-heading').children('span').html(datas[0].name)
                $('.panel').children('.panel-body').html(html)
                $('.panel').first().css('display', 'block')
                attachInfo()
            }
        }

    $('#showMap').click(function() {
        showMap()
    })

    $('#map').find('.mapbar').click(function() {
        showMap()
        if(!top && (window.innerWidth < 690)){
            $('#mapbar-title').html('LE PLATEAU <i class="fa fa-arrow-down"></i>')
        }
        if(top && (window.innerWidth < 690)){
            $('#mapbar-title').html('<i class="fa fa-compass"></i> Map <span class="small">Click to toggle</span>')
        }
    })

    /* Display Map on hover
    $('#map').mouseenter(function() {
        if (top) {
            return
        }
        showMap()
    })//*/
})

// Masonry
$(function() {
    /*
    $('.shadow-main').first().masonry({
        columnWidth: 200,
        itemSelector: '.place'
    })//*/
})
