<script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/jquery.odometer.min.js"></script>
<script src="/assets/js/jquery.appear.js"></script>
<script src="/assets/js/gsap.js"></script>
<script src="/assets/js/ScrollTrigger.js"></script>
<script src="/assets/js/SplitText.js"></script>
<script src="/assets/js/gsap-animation.js"></script>
<script src="/assets/js/jquery.parallaxScroll.min.js"></script>
<script src="/assets/js/swiper-bundle.js"></script>
<script src="/assets/js/ajax-form.js"></script>
<script src="/assets/js/wow.min.js"></script>
<script src="/assets/js/aos.js"></script>
<script src="/assets/js/main.js"></script>
<script>
    const text = document.querySelector('.circle');
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
    const element = document.querySelectorAll('.circle span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 17 + "deg)"
    }
</script>
