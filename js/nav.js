document.addEventListener('DOMContentLoaded',()=>{

    const mainMenu=document.querySelectorAll('#mainmenu_list>li>a')
    const headerWrap=document.querySelector('#header_wrap')

    if(!mainMenu.length || !headerWrap) return;

    let selectedMenu=null;

    for(const item of mainMenu){
        item.addEventListener('mouseenter', showSubMenu)
    }

    // mouseenter 이벤트를 #mainmenu_list > li > a에 붙였기 때문에

    // 마우스를 올린 <a> 태그가 바로 this가 됩니다.

    // 따라서 이 순간 selectedMenu가 현재 메뉴(a 태그)와 연결되는 거예요.

    headerWrap.addEventListener('mouseleave', hideSubMenu)

    function showSubMenu(){
        if(selectedMenu!==null && selectedMenu!==this){
            selectedMenu.parentElement.classList.remove('selected')
            gsap.set(selectedMenu.nextElementSibling, {opacity:0, display:'none'})
        }

        if(selectedMenu!==this){
            selectedMenu=this;
            selectedMenu.parentElement.classList.add('selected')

            gsap.set(this.nextElementSibling, {display:'block'})
            gsap.to(this.nextElementSibling, {opacity:1, duration:0.5, ease:'power1.out'})
        }

    }

    function hideSubMenu(){
        gsap.to(headerWrap, {height:64, duration:0.5, ease:'power1.out'})

        if(selectedMenu){
            selectedMenu.parentElement.classList.remove('selected')
        }

        gsap.set(selectedMenu.nextElementSibling, {opacity:0, display:'none'})

        selectedMenu=null
    }
})