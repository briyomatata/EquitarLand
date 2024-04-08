const observer = new IntersectionObserver((entries) =>
{
    entries.forEach((entry) => {

        if (entry.isIntersecting)
        {
            entry.target.classList.add('show');
        }

        else
        {
            entry.target.classList.remove('show');
        }
        
    });
});

const hiddenElements = document.querySelectorAll('.hidden');

hiddenElements.forEach((el)=>observer.observe(el));


let menus = document.querySelector('#menu-icon');
let headerlink = document.querySelector('.header-link');


menus.onclick = () =>
{
    menus.classList.toggle('bx-x');
    headerlink.classList.toggle('active');
}


window.onscroll = () =>
{
    menus.classList.remove('bx-x');
    headerlink.classList.remove('active');
}