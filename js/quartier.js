var datas = {
	'LE PLATEAU': {
		desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		coord: {
			lat: 45.521624,
			lng: -73.575468
		},
		places: [
			{
				name:'Bons Plans',
				color: 'FE6256',
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
				color: '56FE62',
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
				color: '56FE62',
				infos: [
					{
						name: 'Café Salé',
						stars: 4,
						desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
						url: 'resto',
						lat: 45.514748,
						lng: -73.575611
					},
					{
						name: 'Patisserie Laurent Foutrey',
						stars: 3,
						desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
						url: 'resto',
						lat: 45.514230,
						lng: -73.165671
					},
					{
						name: 'Guimauve & Chocolat',
						stars: 4,
						desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
						url: 'resto',
						lat: 45.514638,
						lng: -73.164661
					},
				]
			}

		]
	},
	'WESTMOUNT': {
		desc: 'Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		coord: {
			lat: 46.521624,
			lng: -74.575468
		},
		places: [
			{
				name:'Bons Plans',
				color: 'FE6256',
				infos: [
					{
						name: 'L\'Alchimie',
						stars: 0,
						desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
						url: 'resto',
						lat: 46.514738,
						lng: -74.566611
					}
				]
			},
			{
				name: 'Shop',
				color: 'FE6256',
				infos: [

				]
			}
		]
	},
	'COTE ST-LUC': {
		desc: 'Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
		coord: {
			lat: 42.521624,
			lng: -72.575468
		},
		places: [
			{
				name:'Bons Plans',
				color: 'FE6256',
				infos: [
					{
						name: 'Dralaga',
						stars: 0,
						desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
						url: 'resto',
						lat: 42.514738,
						lng: -72.566611
					}
				]
			}
		]
	}
}

//var current_place = 'LE PLATEAU'
var current_place = document.location.hash.substring(1) || 'LE PLATEAU'

// Display Map
$(function() {

    $('body').on('touchmove', function(e) {

        target = e.target;

        parent = $(e.target).closest('div');

        // check if the parent is a scroll window by class //
        if ($(parent).hasClass('scroll')){
            // ignore as we want the scroll to happen
        } else {
            e.preventDefault();
        }
    });

	$(document).on('touchmove', function(e) {
	    if (!$(e.target).parents('.scroll')[0]) {
	        e.preventDefault();
	    }
	});

    // Panel config
	var top = false,
		dist = '88px',
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
		center: new google.maps.LatLng(datas[current_place].coord.lat, datas[current_place].coord.lng),
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
	// TODO: Refactor and prefix by item_
	var source   = $('#item-template').html()
	var template = Handlebars.compile(source)

	var place_template = Handlebars.compile($('#place-template').html())

    // Close all Google Maps' marker
    function closeMarker() {
        markers.forEach(function(elem) {
            elem.setMap(null)
        })
        markers = []
    }

    // Display marker for some places
	function showMarker(places, page, color) {
        closeMarker()
		var i = page * step
		places.forEach(function(place) {
			++i
			//Add Marker
			var marker = new google.maps.Marker({
				position: (new google.maps.LatLng(place.lat, place.lng)),
				map: map,
				title: place.name,
				icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=' + i + '|' + color + '|000000'
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
				$('.item').children('.mask').height('0')
				var elem = $('.item').find('[name="' + this.title + '"]')
				$('.panel').first().css('display', 'block')
				elem.height('auto')
				/*
				if (elem.height() == '0') {
					elem.height('auto')
				} else {
					elem.height('0')
				}//*/
				var latLng = this.getPosition() // returns LatLng object
				map.setCenter({lat:latLng.lat() + 0.002, lng:latLng.lng()}) // setCenter takes a LatLng object
			})

		})
	}

	// Show the list of places for the current quartier
	function showCurrentListing() {
		var html = place_template(datas[current_place])
		$('#listing').html(html)
		attachMarker()
	}

	// Attach marker to li in #listing
	function attachMarker() {
		// Li inner place
		$('.place').children('ul').children('li').click(function() {
			var name = $(this).children('a').first().attr('name')
			var parentname = $(this).parent().parent().children('a').first().attr('name')
			showMap()
			var page = 1
			// Show the good panel
			for (var x in datas[current_place].places) {
				if (datas[current_place].places[x].name == parentname) {
					for (var i = 0 ; i < datas[current_place].places[x].infos.length ; ++i) {
						if (datas[current_place].places[x].infos[i].name == name) {
							page = Math.floor(i / step) + 1
						}
					}
					break
				}
			}
			renderPanel(datas[current_place].places[x], page)
			// Center to marker
			markers.forEach(function(marker) {
				if (marker.title == name) {
					var latLng = marker.getPosition()
					map.setCenter(latLng)
				}
			})

			// Open infos
			var elem = $('.item').children('.mask[name="' + name + '"]').first()
    		elem.height('auto')
		})

		// Li outer
		$('.place').children('a[name]').click(function() {
			var name = $(this).attr('name')
			showMap()
			// Show the good panel
			for (var x in datas[current_place].places) {
				if (datas[current_place].places[x].name == name) {
					break
				}
			}
			renderPanel(datas[current_place].places[x], 1)
		})

	}
	attachMarker()

    // Attach info to item
    function attachInfo() {
    	$('.item').click(function() {
    		var elem = $(this).children('.mask').first()
    		if (elem.height() == '0') {
				$('.item').children('.mask').height('0')
    			elem.height('auto')
				markers.forEach(function(marker) {
					if (marker.title == elem.attr('name')) {
						var latLng = marker.getPosition()
						map.setCenter({lat:latLng.lat() + 0.002, lng:latLng.lng()})
					}
				})
    		} else {
    			elem.height('0')
    		}
    	})
    	$('.pagination').children().click(function() {
            renderPanel(current_panel, parseInt($(this).children().html()))
    	})
    }

    function checkWindowWidth() {
        if(!top && (window.innerWidth < 690)) {
            $('#mapbar-title').html('LE PLATEAU <i class="fa fa-arrow-down fa-arrow-down-quartier"></i>')
        }
        if(top && (window.innerWidth < 690)) {
            $('#mapbar-title').html('<i class="fa fa-compass"></i> Map <span class="small">Click to toggle</span>')
        }
    }

    //480 x 320 support
    $('.shadow').click(function (){
        var min_shadow = '10%'
            max_shadow = '70%'
        if((window.innerWidth < 401)){
            if((window.innerWidth < 321)){
                min_shadow = '15%'
                max_shadow = '47%'
            }
            $('.shadow').css('height', max_shadow)
            $('.shadow').css('overflow-y', 'auto')
            $('.viewer .shadow .fa-plus').css('display', 'none')
            $('.viewer .shadow .fa-minus').css('display', 'block')
            $('.shadow-main').css('height', min_shadow)
            $('.shadow-main').css('overflow-y', 'hidden')
            $('.viewer .shadow-main .fa-plus').css('display', 'block')
            $('.viewer .shadow-main .fa-minus').css('display', 'none')
            if(shadow_expanded){
                $('.shadow').css('height', min_shadow)
                $('.shadow').scrollTop(0)
                $('.shadow').css('overflow-y', 'hidden')
                $('.viewer .shadow .fa-plus').css('display', 'block')
                $('.viewer .shadow .fa-minus').css('display', 'none')
            }
            shadow_expanded = !shadow_expanded
        }
    })

    $('.shadow-main').click(function (){
        var min_shadow = '10%'
            max_shadow = '70%'
        if((window.innerWidth < 401)){
            if((window.innerWidth < 321)){
                min_shadow = '15%'
                max_shadow = '47%'
            }
            $('.shadow').css('height', min_shadow)
            $('.shadow').css('overflow-y', 'hidden')
            $('.shadow-main').css('height', max_shadow)
            $('.shadow-main').css('overflow-y', 'auto')
            $('.viewer .shadow .fa-plus').css('display', 'block')
            $('.viewer .shadow .fa-minus').css('display', 'none')
            $('.viewer .shadow-main .fa-plus').css('display', 'none')
            $('.viewer .shadow-main .fa-minus').css('display', 'block')
            if(shadow_main_expanded){
                $('.shadow-main').css('height', min_shadow)
                $('.shadow-main').scrollTop(0)
                $('.shadow-main').css('overflow-y', 'hidden')
                $('.viewer .shadow-main .fa-plus').css('display', 'block')
                $('.viewer .shadow-main .fa-minus').css('display', 'none')
            }
            shadow_main_expanded = !shadow_main_expanded
        }
    })

		$(window).resize(function () {
			if((window.matchMedia("(min-height: 640px)").matches) && (window.matchMedia("(min-width: 400px)").matches)){
				$('.iphone-toggle').css('display', 'none')
				$('.shadow, .shadow-main').css({"height": "auto", "overflow": "auto"})
			}
			if(window.matchMedia("(max-width: 660px)").matches) {
				$('.shadow-main').css('height', '37%')
				$('.shadow').css('height', '36%')
			}
			if((window.matchMedia("(max-height: 640px)").matches) && (window.matchMedia("(max-width: 400px)").matches)) {
				$('.viewer .shadow .fa-plus, .viewer .shadow-main .fa-plus').css('display', 'block')
				$('.shadow-main').css('height', '10%')
				$('.shadow').css('height', '10%')
			}
		})

    /* Display Map on hover
    $('#map').mouseenter(function() {
        if (top) {
            return
        }
        showMap()
    })//*/

    // Change DOM panel
    function renderPanel(brut, page) {
            current_panel = brut
            --page
            var category = {}
            category.name = brut.name
            category.nb = Math.ceil(brut.infos.length / step)
            category.page = page
            category.infos = []
            for (var i = 0 ; (i + page * step) < brut.infos.length && i < step ; ++i) {
				var obj = brut.infos[i + page * step]
				obj.number = i + page * step + 1
                category.infos.push(obj)
            }
			var html = template(category)
			$('.panel').children('.panel-heading').children('span').html(category.name)
			$('.panel').children('.panel-body').html(html)
			$('.panel').first().css('display', 'block')
			attachInfo()
			showMarker(category.infos, page, brut.color)
    }

    // Let's the map appear
	function showMap() {
		$('#map').css('top', top ? fromtop : dist)
		$('#map').find('.right').css('opacity', top ? '0' : '1')
		$('#map').find('.piti') .css('opacity', top ? '1' : '0')
		window.setTimeout(function() {top = !top}, 300)
        checkWindowWidth()
		if(!top) {
            renderPanel(datas[current_place].places[0], 1)
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

	// Hide Panel
	$('.panel-heading').first().children('i').click(function() {
		$('.panel').first().css('display', 'none')
        //closeMarker()
	})

	// Show Panel with info
	$('.dropdown-menu').children('li').click(function() {
		var search = $(this).children('a').html()
		for (var x in datas[current_place].places) {
			if (datas[current_place].places[x].name == search) {
                renderPanel(datas[current_place].places[x], 1)
				return
			}
		}
		console.log('Undefined items ' + search)
	})

	// Update on anchor
	$('.goto.prev').click(function(e) {
		e.preventDefault()
		e.stopPropagation()
		document.location.hash = $(this).attr('href')
	})
	$('.goto.next').click(function(e) {
		e.preventDefault()
		e.stopPropagation()
		document.location.hash = $(this).attr('href')
	})
	function getFromAnchor() {
		current_place = document.location.hash.substring(1) || current_place || 'LE PLATEAU'
		map.setCenter(new google.maps.LatLng(datas[current_place].coord.lat, datas[current_place].coord.lng))
		renderPanel(datas[current_place].places[0], 1)
		showCurrentListing()
		$('#overview').html(datas[current_place].desc)
		var names = Object.keys(datas)
		var i = names.indexOf(current_place) + names.length
		var next = names[(i + 1) % names.length]
		var prev = names[(i - 1) % names.length]
		$('.goto.prev').attr('href', '#' + prev)
		$('.goto.next').attr('href', '#' + next)
		$('.goto.name').html(current_place)
		$('.goto.prev.name').html(prev)
		$('.goto.next.name').html(next)
	}
	window.onhashchange = getFromAnchor
	getFromAnchor()

})

// Masonry
$(function() {
	/*
	$('.shadow-main').first().masonry({
		columnWidth: 200,
		itemSelector: '.place'
	})//*/
})
