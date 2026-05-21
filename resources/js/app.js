import './bootstrap';

$('.service-img').on('click', function(){
    $("[id^='btn-service']").removeClass('active')
    var num = '#btn-service' + $('.carousel-indicators button.active').attr('data-bs-slide-to');
    $(num).toggleClass('active');
    
})

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    },
    {
        threshold: 0.2
    }
);

document.querySelectorAll('.animate-up').forEach((el) => {
    observer.observe(el);
});
