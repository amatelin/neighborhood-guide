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
				url: 'resto'
			},
			{
				name: 'Plaisir de Moules',
				stars: 1,
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
	$('.pagination').children().click(function() {

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
				attachInfo(datas[x].name)
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

	function showMarker(type) {
		var mapOptions = {
			center: new google.maps.LatLng(45.521624,-73.575468),
			zoom: 15,
			disableDefaultUI: true
		}

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions)

		type.forEarch(function(place) {
		    var coord = new google.maps.LatLng(place.lat, place.lng)
			//Add Marker
			var marker = new google.maps.Marker({
				position: coord,
				map: map,
				title: place.name
			})

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


	function showMap() {
		$('#map').css('top', top ? '97%' : dist)
		$('#map').find('.right').css('opacity', top ? '0' : '1')
		$('#map').find('.piti') .css('opacity', top ? '1' : '0')
		window.setTimeout(function() {top = !top}, 300)
		if(!top) {
			var source   = $('#item-template').html()
			var template = Handlebars.compile(source)
			var html = template(datas[0])
			$('.panel').children('.panel-heading').children('span').html(datas[0].name)
			$('.panel').children('.panel-body').html(html)
			$('.panel').first().css('display', 'block')
			attachInfo()
			showMarker(datas[0])
		}
	}

	$('#showMap').click(function() {
		showMap()
	})

	$('#map').find('.mapbar').click(function() {
		showMap()
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
