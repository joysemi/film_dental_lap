// 모바일 리다이렉션
let ua = window.navigator.userAgent.toLowerCase();

// 특정 모바일/태블릿 기기(아이폰, 안드로이드, 아이패드 등) 감지
if(/iphone/.test(ua) || /android/.test(ua) || /opera/.test(ua) || /bada/.test(ua) || /ipad/.test(ua) || /windows ce/.test(ua)) {
    window.location.href = "http://mygumi8113.dothome.co.kr/film_dental_lap/mobile";
} else {
    // PC 환경일 경우, 창 크기 변경 이벤트 리스너 추가 (반응형 대응)
    window.addEventListener('resize', function() {
        let deviceWidth = window.innerWidth;
        if(deviceWidth <= 768) {
            window.location.href = "http://mygumi8113.dothome.co.kr/film_dental_lap/mobile";
        }
    });
}
