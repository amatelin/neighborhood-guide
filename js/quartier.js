var datas = [
	{
		name:'Bons Plans',
		infos: [
			{
				name: 'La Distillerie',
				stars: 0,
				desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
				url: 'resto',
				lat: 45.514738,
				lng: -73.565611
			},
			{
				name: 'Le Rouge',
				stars: 3,
				desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
				url: 'resto',
				lat: 45.414738,
				lng: -73.465611
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
				url: 'resto',
				lat: 45.514738,
				lng: -73.565611
			},
			{
				name: 'Plaisir de Moules',
				stars: 1,
				desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
				url: 'resto',
				lat: 45.533838,
				lng: -73.565611
			},
			{
				name: 'Satisfaction',
				stars: 1,
				desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
				url: 'resto',
				lat: 45.495738,
				lng: -73.565511
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

// Display Map
$(function() {

    // Panel config
	var top = false,
		dist = '107px',
        fromtop = '97%',
        step = 2,
        current_panel = ''

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

    // Display marker for some places
	function showMarker(places) {
        closeMarker()

		places.forEach(function(place) {
			//Add Marker
			var marker = new google.maps.Marker({
				position: (new google.maps.LatLng(place.lat, place.lng)),
				map: map,
				title: place.name
			})

            markers.push(marker)

			var contentString = "<div><h5 style='white-space:nowrap'>" + place.name + "</h5></div>"

			var infowindow = new google.maps.InfoWindow({
				content: contentString
			})

			google.maps.event.addListener(marker, 'mouseover', function() {
				infowindow.open(map, marker)
			})

			google.maps.event.addListener(marker, 'mouseout', function() {
				infowindow.close()
			})

			google.maps.event.addListener(marker, 'click', function() {
				var elem = $('.item').find('[name="' + this.title + '"]')
				if (elem.height() == '0') {
					elem.height('auto')
				} else {
					elem.height('0')
				}
			})

		})
	}

    // Attach info to item
    function attachInfo() {
    	$('.item').click(function() {
    		var elem = $(this).children('.mask').first()
    		if (elem.height() == '0') {
    			elem.height('auto')
    		} else {
    			elem.height('0')
    		}
    	})
    	$('.pagination').children().click(function() {
            renderPanel(current_panel, parseInt($(this).children().html()))
    	})
    }

    // Change DOM panel
    function renderPanel(brut, page) {
            current_panel = brut
            --page
            var category = {}
            category.name = brut.name
            category.nb = brut.infos.length / step
            category.page = page
            category.infos = []
            for (var i = 0 ; (i + page * step) < brut.infos.length && i < step ; ++i) {
                category.infos.push(brut.infos[i + page * step])
            }
			var html = template(category)
			$('.panel').children('.panel-heading').children('span').html(category.name)
			$('.panel').children('.panel-body').html(html)
			$('.panel').first().css('display', 'block')
			attachInfo()
			showMarker(category.infos)
    }

    // Let's the map appear
	function showMap() {
		$('#map').css('top', top ? fromtop : dist)
		$('#map').find('.right').css('opacity', top ? '0' : '1')
		$('#map').find('.piti') .css('opacity', top ? '1' : '0')
		window.setTimeout(function() {top = !top}, 300)
		if(!top) {
            renderPanel(datas[0], 1)
		}
	}
	$('#showMap').click(function() { showMap() })
	$('#map').find('.mapbar').click(function() { showMap() })

	// Hide Panel
	$('.panel-heading').first().children('i').click(function() {
		$('.panel').first().css('display', 'none')
        closeMarker()
	})

	// Show Panel with info
	$('.dropdown-menu').children('li').click(function() {
		var search = $(this).children('a').html()
		for (var x in datas) {
			if (datas[x].name == search) {
                renderPanel(datas[x], 1)
				return
			}
		}
		console.log('Undefined items ' + search)
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
