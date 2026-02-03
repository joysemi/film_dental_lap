document.addEventListener('DOMContentLoaded',()=>{
    const quickMenu=document.querySelector('#quick_menu');
    const priceIcon=document.querySelector('.price_icon');
    const topIcon=document.querySelector('.top_icon');

    if(!quickMenu) return;

    let topPosition=window.innerHeight*0.7;

    window.addEventListener('scroll',slideQuickMenu);

    function slideQuickMenu(){
        let scrollHeight=window.pageYOffset;
        gsap.to(quickMenu,{top:scrollHeight+topPosition, duration:0.8, ease:'power1.out'})
    }

    function scrollToTop(){
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    if(priceIcon){
        priceIcon.style.cursor='pointer';
        priceIcon.addEventListener('click', ()=>{
            window.location.href='/film_dental_lap/contact_us/contact_us.php';
        });
    }

    if(topIcon){
        topIcon.style.cursor='pointer';
        topIcon.addEventListener('click', scrollToTop);
    }
})
