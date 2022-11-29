
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
  const lat = event.latLng.lat();
  const lng = event.latLng.lng();
  const marker = new google.maps.Marker({
    position: {lat, lng},
    map
  });

}

// 住所へ変換
function geocode() {
  const geocoder = new google.maps.Geocoder();
  
}



window.initMap = initMap;