$('.navbar__toggle').click(function(e) {
    e.preventDefault();
    $('.navbar').toggleClass('is-open');
})

const loader = document.querySelector('.loader');

window.addEventListener('load', () => {

    loader.classList.add('fondu-out');

})

