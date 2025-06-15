$(document).ready(function() {
    // Mobile menu toggle
    $('.mobile-menu-button').click(function() {
        $('.mobile-menu').toggleClass('hidden');
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        const target = $(this.hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });

    // Animate elements on scroll
    function animateOnScroll() {
        $('.animate-fade-in').each(function() {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-fade-in');
            }
        });
    }

    // Initial check for elements in viewport
    animateOnScroll();

    // Check on scroll
    $(window).scroll(function() {
        animateOnScroll();
    });

    // Form validation
    $('form').submit(function(e) {
        let isValid = true;
        const email = $('#email').val();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email)) {
            $('#email').addClass('border-red-500');
            isValid = false;
        } else {
            $('#email').removeClass('border-red-500');
        }

        if (!isValid) {
            e.preventDefault();
        }
    });

    // Remove validation styling on input
    $('input, textarea').on('input', function() {
        $(this).removeClass('border-red-500');
    });

    // Add hover lift effect to service cards
    $('.service-card').addClass('hover-lift');

    // Parallax effect for hero section
    $(window).scroll(function() {
        const scroll = $(window).scrollTop();
        $('.hero-section').css({
            'background-position': 'center ' + (scroll * 0.5) + 'px'
        });
    });
}); 