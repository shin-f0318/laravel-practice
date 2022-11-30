<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/map.css') }}">
    <script type="module" src="{{ asset('/js/index.js') }}"></script>
  </head>
  <body>
    <h2>湯屋なう　まっぷ</h2>
      <div class="head-title">Google Maps APIを使ったサンプル。</div>
      <p>地図座標位置の取得 地図上でクリックで座標・住所の取得</p>
      <table style="width:100%;border:0">
        <tr style="background-color:#dddddd">
        <th style="width:20%">項目</th>
        <th>情報</th></tr>
        <tr><td>緯度</td><td id="id_ido"></td></tr>
        <tr><td>経度</td><td id="id_keido"></td></tr>
        <tr><td>住所</td><td id="id_address"></td></tr>
      </table>
      <!-- 地図を表示する領域 -->
      <div id="map"></div>

      <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5cSPmc6sAeGf0bqSACuc-bntOcFx9Eow&callback=initMap&v=weekly"
        async
        defer
      ></script>
  </body>
</html>