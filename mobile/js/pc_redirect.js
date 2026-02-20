// PC 리다이렉션 (데스크톱에서만: 모바일·태블릿 가로모드는 모바일 페이지 유지)
let ua = window.navigator.userAgent.toLowerCase();
let isMobile = /iphone|ipad|android|opera|bada|windows ce/.test(ua);

window.addEventListener('resize', function() {
    let deviceWidth = window.innerWidth;
    if (!isMobile && deviceWidth > 768) {
        window.location.href = "http://mygumi8113.dothome.co.kr/film_dental_lap";
    }
});
