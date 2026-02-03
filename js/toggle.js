document.addEventListener('DOMContentLoaded',()=>{
    const categoryList=document.querySelector('.category_list')
    const categoryTitle=document.querySelector('.category_title')
    const categoryTitleP=document.querySelector('.category_title p')
    const categoryLi=document.querySelectorAll('.category_list li')

    if(!categoryList || !categoryTitle || !categoryTitleP) return

    categoryTitle.addEventListener('click', ()=>{
        categoryList.classList.toggle('open')
    })

    categoryLi.forEach(li => {
        li.addEventListener('click', ()=>{
            categoryTitleP.textContent=li.textContent
            categoryTitleP.classList.add('selected')
            categoryList.classList.remove('open')
        })
    })
})
