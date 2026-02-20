document.addEventListener('DOMContentLoaded', function() {
    // 스페셜 임상사례 슬라이드
    const specialCaseElement = document.querySelector(".special_case_swiper");
    if (!specialCaseElement) return;
    
    const specialCaseSwiper = new Swiper(".special_case_swiper", {
        slidesPerView: 1.5, 
        spaceBetween: 20, 
        pagination: {
            el: ".special-case-swiper-pagination",
            clickable: true, 
        },
        breakpoints: {
            400: {
                slidesPerView: 1.7,
                spaceBetween: 17,
            },
            500: {
                slidesPerView: 1.8,
                spaceBetween: 15,
            },
            568: {
                slidesPerView: 2,
                spaceBetween: 18,
            },
            640: {
                slidesPerView: 2.5,
                spaceBetween: 18,
            },
            768: {
                slidesPerView: 2.8,
                spaceBetween: 20,
            }
        }
    });
    
    // Before & After 슬라이드
    const beforeAfterElement = document.querySelector(".before_after_swiper");
    if (!beforeAfterElement) return;
    
    const beforeAfterSwiper = new Swiper(".before_after_swiper", {
        slidesPerView: 1, 
        spaceBetween: 20, 
        pagination: {
            el: ".before-after-swiper-pagination",
            clickable: true, 
        },
        breakpoints: {
            // 가로 모드 (landscape) - 모바일 가로모드는 보통 568px 이상
            568: {
                slidesPerView: 2, 
                spaceBetween: 15, 
            },
            768: {
                slidesPerView: 2, 
                spaceBetween: 15, 
            }
        }
    });
});
