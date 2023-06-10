/* This code is adding an event listener to the `DOMContentLoaded` event, which fires when the initial
HTML document has been completely loaded and parsed. */
document.addEventListener('DOMContentLoaded', () => {
    Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0).forEach(el => {
        el.addEventListener('click', () => {
            el.classList.toggle('is-active');
            document.getElementById(el.dataset.target).classList.toggle('is-active');
        });
    });
});

