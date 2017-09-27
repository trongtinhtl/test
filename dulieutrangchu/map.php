<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title></title>
  <script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding :0;
    }
    .map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
<div id='map_geo' class='map'> </div>
<script>
L.mapbox.accessToken = 'pk.eyJ1IjoiZHVjdmluaCIsImEiOiJjaXpvN2Vlem4wM2w4Mndscmt5bHN5cGhjIn0.NjkMjUn3BGdfnPx_F9cU0w';
var geojson = [
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.7740225 ,10.67234316]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Nhà Bè</b>',
      'marker-symbol': 'star'
    }
  },
   {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.8682639,10.60536511]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Tam Thôn Hiệp</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.7982261,10.48993272]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Vàm Sát</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.7906735,10.75482174]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Cát Lái</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.7312788,10.49398384]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Vàm Cỏ</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.8672342,10.44874456]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Cửa Đồng Tranh</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [106.9412483,10.47364218]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Cửa Ngã Bảy</b>'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [107.0023595,10.50419277]
    },
     properties: {
      'marker-color': '#3bb2d0',
       'description' : '<b>Trạm Cửa Cái Mép</b>'
    }
  },
];

var mapGeo = L.mapbox.map('map_geo', 'mapbox.streets')
  .setView([10.770141,106.689444], 10);

var myLayer = L.mapbox.featureLayer().setGeoJSON(geojson).addTo(mapGeo);
</script>
</body>
</html>