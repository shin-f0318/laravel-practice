
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
    // マップの中心を設定
    center: { lat: 35.6811673, lng: 139.7670516 },
    // マップの初期倍率
    zoom: 7,
    // マップの種類
    mapTypeId: "roadmap",
  });

// クリック動作
google.maps.event.addListener(map, 'click', event => clickListener(event, map));

}

// ピン
function clickListener(event, map) {
  // 緯度取得
  const lat = event.latLng.lat();
  // htmlへ変数の送信
  document.getElementById('id_ido').innerHTML = lat ;

  // 経度の取得
  const lng = event.latLng.lng();
  // htmlへ変数の送信
  document.getElementById('id_keido').innerHTML = lng ;

  // ピンの設置
  const marker = new google.maps.Marker({
    position: {lat, lng},
    map
  });

}

// // 住所へ変換
// function geocode() {
//   const geocoder = new google.maps.Geocoder();

  
// }



window.initMap = initMap;