window.addEventListener('load', function()
{
    const scrollPosition = localStorage.getItem('scrollPosition');
    if (scrollPosition !== null) {
        window.scrollTo(0, parseInt(scrollPosition, 10));
        localStorage.removeItem('scrollPosition');
    }
});

window.addEventListener('beforeunload', function()
{
    localStorage.setItem('scrollPosition', window.scrollY);
});