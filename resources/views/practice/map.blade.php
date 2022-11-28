<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script type="module" src="{{ asset('/js/index.js') }}"></script>
  </head>
  <body>
    <h2>湯屋なう　まっぷ</h2>
    <!-- 地図を表示する領域 -->
    <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN1uJPk6plDR5p1hBU71qlX46RGSXngXc&callback=initMap&v=weekly"
      defer
    ></script>
  </body>
</html>