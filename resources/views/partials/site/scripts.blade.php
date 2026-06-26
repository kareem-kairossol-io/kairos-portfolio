<script>
    const mainHeader = document.querySelector('.main-header');
    const menuToggle = document.getElementById('menuToggle');
    const navOverlay = document.getElementById('navOverlay');
    const navLinks = document.querySelectorAll('.nav-mobile a');

    function syncHeaderAnchorOffset() {
        if (!mainHeader) {
            return;
        }

        const headerHeight = Math.ceil(mainHeader.getBoundingClientRect().height);
        document.documentElement.style.setProperty('--header-anchor-offset', `${headerHeight}px`);
    }

    function updateHeaderScrollState() {
        if (!mainHeader) {
            return;
        }

        mainHeader.classList.toggle('scrolled', window.scrollY >= 100);
    }

    function observeFadeInSection(section, threshold = 0.18) {
        if (!section) {
            return;
        }

        const observer = new IntersectionObserver(function (entries, innerObserver) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    section.classList.add('animate-in');
                    innerObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: threshold
        });

        observer.observe(section);
    }

    syncHeaderAnchorOffset();
    updateHeaderScrollState();
    window.addEventListener('resize', syncHeaderAnchorOffset);
    window.addEventListener('scroll', updateHeaderScrollState);

    [
        '.warning-section',
        '.our-services',
        '.crm-solutions',
        '.we-offer-support',
        '.faq-section',
        '.final-contact-cta',
        '.who-we-are',
        '.founder-section',
        '.mission-vision-section',
        '.contact-section',
    ].forEach(function (selector) {
        observeFadeInSection(document.querySelector(selector));
    });

    observeFadeInSection(document.querySelector('.site-footer'), 0.08);

    if (menuToggle && navOverlay) {
        menuToggle.addEventListener('click', function () {
            menuToggle.classList.toggle('active');
            navOverlay.classList.toggle('hidden');
            navOverlay.classList.toggle('show');
        });

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                menuToggle.classList.remove('active');
                navOverlay.classList.add('hidden');
                navOverlay.classList.remove('show');
            });
        });

        navOverlay.addEventListener('click', function (event) {
            if (event.target === navOverlay) {
                menuToggle.classList.remove('active');
                navOverlay.classList.add('hidden');
                navOverlay.classList.remove('show');
            }
        });
    }

    document.querySelectorAll('.faq-question').forEach(function (button) {
        button.addEventListener('click', function () {
            const item = button.closest('.faq-item');
            const isOpen = item.classList.contains('open');

            document.querySelectorAll('.faq-item.open').forEach(function (openItem) {
                openItem.classList.remove('open');
                openItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                item.classList.add('open');
                button.setAttribute('aria-expanded', 'true');
            }
        });
    });

    const footerBackTop = document.getElementById('footerBackTop');
    if (footerBackTop) {
        footerBackTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
</script>
