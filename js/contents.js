window.addEventListener('load',()=>{
    
    beforeAfter()
    interiorSlide()
    contentsSlide()
  

})

function contentsSlide(){

    //반응형 함수
    function visualReset(){
        if(typeof ScrollTrigger !== 'undefined'){
            ScrollTrigger.refresh();
        }
    }
    window.addEventListener('resize', visualReset)

    const portfolioItem=document.querySelectorAll('.portfolio_item_list>li')
    const portfolioHover=document.querySelectorAll('.portfolio_item_list>li>a')

    //기공소 소개 애니메이션
    gsap.to('.about_us_txtbox', {x:0, opacity:1, duration:0.5, ease: 'power1.out', scrollTrigger: {
        trigger: '#about_us_wrap',
        start: 'top 65%',
        //markers: true,
    }})
    gsap.to('.about_us_img', {scale: 1, opacity: 1, duration:0.5, ease: "power1.out", scrollTrigger: {
        trigger: '#about_us_wrap',
        start: 'top 65%',
        //markers: true,
    }})

    // 포트폴리오 애니메이션 + a hover 효과      
    portfolioItem.forEach((item, index)=>{
        gsap.to(item, {y:0, opacity:1, delay:0.2*index, duration:0.5, ease:'power1.out', scrollTrigger:{
            trigger: '#portfolio_wrap',
            start: 'top 55%',
        }})
    })
    portfolioHover.forEach(icon=>{
        icon.addEventListener('mouseenter',()=>{
            gsap.to(icon, {scale: 1.04, duration: 0.3})
        })
        icon.addEventListener('mouseleave',()=>{
            gsap.to(icon, {scale: 1, duration: 0.3})
        })
    })

    // 기공소 강점 애니메이션
    gsap.from('.small_card', {y:-20, opacity:0, stagger:0.15, duration:0.6, ease:'power1.out',scrollTrigger:{
        trigger:'#results_card_container',
        start:'top 85%',
    }})

    gsap.from('.column_card_box', {x:100, opacity:0, duration:0.8, ease:'power2.out',scrollTrigger:{
        trigger:'#results_card_container',
        start:'top 70%',
    }})

    // 스폐셜 임상사례 애니메이션
    gsap.from('.special_case_item', {y:-20, opacity:0, stagger:0.1, duration:0.5, ease:'power1.out',scrollTrigger:{
        trigger:'#special_case_list_box',
        start:'top 80%',
        //markers: true,
    }})

    gsap.from('#before_after_container', {y:-20, opacity:0, duration:0.6, ease:'power2.out',scrollTrigger:{
        trigger:'#before_after_container',
        start:'top 85%',
    }})
}


//임상사례 비포애프터 슬라이드
function beforeAfter(){

  // HTML에서 슬라이드 데이터 읽기
  const slideListItems=document.querySelectorAll('.before_after_slide_list li');
  if(!slideListItems.length) return;

  const slides=Array.from(slideListItems).map((item)=>({
    before: item.dataset.before,
    after: item.dataset.after,
    title: item.dataset.title
  }));

  const beforeImg=document.getElementById('beforeImg');
  const afterImg=document.getElementById('afterImg');
  const caseTitle=document.getElementById('caseTitle');
  const currentPageNum=document.getElementById('currentPageNum');
  const totalPageNum=document.getElementById('totalPageNum');
  const btnPrev=document.querySelector('.btn_before_after_prev');
  const btnNext=document.querySelector('.btn_before_after_next');

  if(!beforeImg || !afterImg || !caseTitle || !currentPageNum || !totalPageNum || !btnPrev || !btnNext) return;

  let currentIndex=0;
  totalPageNum.textContent=slides.length;
   
  function updateSlide(){
    beforeImg.src=slides[currentIndex].before;
    afterImg.src=slides[currentIndex].after;
    caseTitle.textContent=slides[currentIndex].title;
    currentPageNum.textContent=(currentIndex + 1);
  }

  btnPrev.addEventListener('click', ()=>{
    currentIndex = (currentIndex - 1 + slides.length) % slides.length; //loop
    updateSlide();
  });

  btnNext.addEventListener('click', ()=>{
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlide();
  });

  updateSlide(); //초기실행

}


// 인테리어 swiper 슬라이드
function interiorSlide() {
    new Swiper('.interior_slide_container', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '#interior_next_btn',
            prevEl: '#interior_prev_btn',
        },
        breakpoints: {
            768: { slidesPerView: 1.2, spaceBetween: 24 },
            980: { slidesPerView: 1.4, spaceBetween: 30 },
            1100: { slidesPerView: 1.6, spaceBetween: 40 },
            1200: { slidesPerView: 1.7, spaceBetween: 44 },
            1300: { slidesPerView: 1.8, spaceBetween: 50 },
            1540: { slidesPerView: 2.4, spaceBetween: 50 },
        }
    });
}

