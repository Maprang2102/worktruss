import './bootstrap';

$('.service-img').on('click', function(){
    $("[id^='btn-service']").removeClass('active')
    var num = '#btn-service' + $('.carousel-indicators button.active').attr('data-bs-slide-to');
    $(num).toggleClass('active');

    $("[id^='btn-mb-service']").removeClass('active')
    var num = '#btn-mb-service' + $('.carousel-indicators.mb button.active').attr('data-bs-slide-to');
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

var lightboxInlineIframe1 = GLightbox({
    selector: '.glightbox1',
    loop: true
});

var lightboxInlineIframe2 = GLightbox({
    selector: '.glightbox2',
    loop: true
});

var lightboxInlineIframe3 = GLightbox({
    selector: '.glightbox3',
    loop: true
});

var lightboxInlineIframe4 = GLightbox({
    selector: '.glightbox4',
    loop: true
});