// 네이버 지도 API 초기화
document.addEventListener('DOMContentLoaded', ()=>{
    const mapElement=document.getElementById('map');
    if(!mapElement || typeof naver === 'undefined' || !naver.maps) return;

    const map = new naver.maps.Map('map', {
        center: new naver.maps.LatLng(37.497942, 127.027621),
        zoom: 15
    });

    const marker = new naver.maps.Marker({
        position: new naver.maps.LatLng(37.497942, 127.027621),
        map: map
    });
});
