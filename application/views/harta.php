<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><b>Harta</b></h1>
    </div>
<style>
#map {
  height: 600px;
  width: 100%;
}
.info leaflet-control{
  color: red;
}
</style>
  <div class="row">

    <div id="map"></div>
  <!-- Replace the value of the key parameter with your own API key. -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  </div>


</div>



<script type="text/javascript" src="<?php echo base_url(); ?>assets/romania.js"></script>
<script type="text/javascript">

var ar = JSON.parse( '<?php echo json_encode($by_judet) ?>' );
	var map = L.map('map').setView([45.96, 25.00], 7);
	//map.locate({setView: false, maxZoom: 16});


	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/light-v9',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);

	
	// control that shows state info on hover
	var info = L.control();

	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
    if(props){
      
      if(ar[props.name.toUpperCase()]>0 && ar[props.name.toUpperCase()]<50){
        //this._div.innerHTML =  '<h1 style="color:blue">' + props.name + '</h4><br /> <h2 style="color:red">' + ar[props.name.toUpperCase()] + ' Infectii</h2>';
        this._div.innerHTML = "<div class='card text-white bg-warning mb-3' style='max-width: 18rem;'><div class='card-body'><h5 class='card-title'>"+props.name+"</h5><h6 class='card-text'>"+ar[props.name.toUpperCase()] + ' Infectati'+"</h6></div>";
      }else
			if(ar[props.name.toUpperCase()]>50){
        this._div.innerHTML = "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-body'><h5 class='card-title'>"+props.name+"</h5><h6 class='card-text'>"+ar[props.name.toUpperCase()] + ' Infectati'+"</h6></div>";

	  }else{
        //this._div.innerHTML = '<h1 style="color:blue">' + props.name + '</h4><br /> <h2 style="color:green">0 Infectii</h2>';
        this._div.innerHTML = "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-body'><h5 class='card-title'>"+props.name+"</h5><h6 class='card-text'>0 Infectati</h6></div>";
      }
    }
		
	};

	info.addTo(map);

	//map.on('click', function(){alert("You clicked the map");});

	// get color depending on population density value
	function getColor(d) {
		return d > 50 ? '#800026' :
				d > 40  ? '#BD0026' :
				d > 30  ? '#E31A1C' :
				d > 20  ? '#FC4E2A' :
				d > 10   ? '#FD8D3C' :
				d > 5   ? '#FEB24C' :
				d > 0   ? '#FED976' :
							'green';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(ar[feature.properties.name.toUpperCase()])
		};
	}

	function highlightFeature(e) {
		var layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
			layer.bringToFront();
		}

		info.update(layer.feature.properties);
	}

	var geojson;

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		map.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: highlightFeature
		});
	}

	geojson = L.geoJson(statesData, {
		style: style,
		onEachFeature: onEachFeature
	}).addTo(map);



	var legend = L.control({position: 'bottomright'});

	legend.onAdd = function (map) {

		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 10, 20, 30, 40, 50, 100, 1000],
			labels = [],
			from, to;

		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(
				'<i style="background:' + getColor(from + 1) + '"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	

	legend.addTo(map);

</script>
