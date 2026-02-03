document.addEventListener('DOMContentLoaded', () => {
    const menuIcon = document.querySelector('.mobilemenu_icon');
    const closeBtn = document.querySelector('.mobileclose_btn');
    const mobileMenu = document.querySelector('#mobilemenu');
    const body = document.querySelector('body');
    
    if (!menuIcon || !closeBtn || !mobileMenu || !body) return;
    
    let grayLayer = document.querySelector('#mobile_graylayer');
    if (!grayLayer) {
        grayLayer = document.createElement('div');
        grayLayer.id = 'mobile_graylayer';
        body.appendChild(grayLayer);
    }

    // 메뉴 열기
    menuIcon.addEventListener('click', (e) => {
        e.preventDefault();
        mobileMenu.classList.add('open');
        grayLayer.style.display = 'block';
        body.style.overflow = 'hidden';
    });

    // 메뉴 닫기
    closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        mobileMenu.classList.remove('open');
        grayLayer.style.display = 'none';
        body.style.overflow = 'auto';
    });
    
    // 그레이 레이어 클릭 시 메뉴 닫기
    grayLayer.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        grayLayer.style.display = 'none';
        body.style.overflow = 'auto';
    });
});