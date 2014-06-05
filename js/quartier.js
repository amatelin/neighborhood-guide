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

    // Panel config
	var top = false,
		dist = '96px',
        fromtop = '96%',
        step = 2,
        current_panel = ''
        shadow_main_expanded = false
        shadow_expanded = false    

    // Default panel display
	$('nav').css('display','displayed');
	$('.navbar').css('opacity','1');

    // Google Maps
	var mapOptions = {
		center: new google.maps.LatLng(45.521624,-73.575468),
		zoom: 15,
		disableDefaultUI: true
	}
	var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions)
    var markers = []

	// Handlerbar
	Handlebars.registerHelper('times', function(n, block) {
		var accum = ''
		for(var i = 0 ; i < n ; ++i)
			accum += block.fn(i)
		return accum
	})
	Handlebars.registerHelper('page', function(n, p, block) {
		if (n == 1)
			return
		var accum = '<ul class="pagination">'
		for(var i = 0 ; i < n ; ++i)
			accum += block.fn({page: p, value: (i + 1)})
		return accum + '</ul>'
	})
	Handlebars.registerHelper('ifEq', function(v1, v2, block) {
        if (v1 == (v2 - 1))
		      return block.fn(this)
	})
	var source   = $('#item-template').html()
	var template = Handlebars.compile(source)

    // Close all Google Maps' marker
    function closeMarker() {
        markers.forEach(function(elem) {
            elem.setMap(null)
        })
        markers = []
    }

    function showMap() {
        $('#map').css('top', top ? fromtop : dist)
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

    function checkWindowWidth() {
        if(!top && (window.innerWidth < 690)) {
            $('#mapbar-title').html('LE PLATEAU <i class="fa fa-arrow-down fa-arrow-down-quartier"></i>')
        }
        if(top && (window.innerWidth < 690)) {
            $('#mapbar-title').html('<i class="fa fa-compass"></i> Map <span class="small">Click to toggle</span>')
        }
    }

    $('#showMap').click(function() {
        showMap()
        checkWindowWidth()
    })

    $('#map').find('.mapbar').click(function() {
        showMap()
        checkWindowWidth()
    })

    //480 x 320 support
    $('.shadow').click(function (){
        if((window.innerWidth < 321) && (window.innerHeight < 481)){
            $('.shadow').css('height', '47%')
            $('.shadow').css('overflow-y', 'auto')
            $('.viewer .shadow .fa-plus').css('display', 'none')
            $('.viewer .shadow .fa-minus').css('display', 'block')
            $('.shadow-main').css('height', '15%')
            $('.shadow-main').css('overflow-y', 'hidden')
            $('.viewer .shadow-main .fa-plus').css('display', 'block')
            $('.viewer .shadow-main .fa-minus').css('display', 'none') 
            if(shadow_expanded){
                $('.shadow').css('height', '15%')
                $('.shadow').css('overflow-y', 'hidden')
                $('.viewer .shadow .fa-plus').css('display', 'block')
                $('.viewer .shadow .fa-minus').css('display', 'none') 
            }
            shadow_expanded = !shadow_expanded   
        }
    })

    $('.shadow-main').click(function (){
        if((window.innerWidth < 321) && (window.innerHeight < 481)){
            $('.shadow').css('height', '15%')
            $('.shadow').css('overflow-y', 'hidden')
            $('.shadow-main').css('height', '47%')
            $('.viewer .shadow .fa-plus').css('display', 'block')
            $('.viewer .shadow .fa-minus').css('display', 'none')
            $('.shadow-main').css('overflow-y', 'auto')
            $('.viewer .shadow-main .fa-plus').css('display', 'none')
            $('.viewer .shadow-main .fa-minus').css('display', 'block')
            if(shadow_main_expanded){
                $('.shadow-main').css('height', '15%')
                $('.shadow-main').css('overflow-y', 'hidden')
                $('.viewer .shadow-main .fa-plus').css('display', 'block')
                $('.viewer .shadow-main .fa-minus').css('display', 'none')  
            }
            shadow_main_expanded = !shadow_main_expanded 
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
