document.addEventListener('DOMContentLoaded', function() {
    // 스페셜 임상사례 슬라이드
    const specialCaseSwiper = new Swiper(".special_case_swiper", {
        slidesPerView: 1.4, // 한 번에 2개씩 보여주기
        spaceBetween: 20, // 슬라이드 간 간격
        pagination: {
            el: ".special-case-swiper-pagination",
            clickable: true, // 도트 클릭 가능
        },
    });
    
    // Before & After 슬라이드
    const beforeAfterSwiper = new Swiper(".before_after_swiper", {
        slidesPerView: 1.4, // 한 번에 2개씩 보여주기
        spaceBetween: 20, // 슬라이드 간 간격
        pagination: {
            el: ".before-after-swiper-pagination",
            clickable: true, // 도트 클릭 가능
        },
    });
});
