<script>
    const mainHeader = document.querySelector('.main-header');
    const menuToggle = document.getElementById('menuToggle');
    const navOverlay = document.getElementById('navOverlay');
    const navLinks = document.querySelectorAll('.nav-mobile a');
    const pageBody = document.body;

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

    function setMobileMenuState(isOpen) {
        if (!menuToggle || !navOverlay) {
            return;
        }

        menuToggle.classList.toggle('active', isOpen);
        navOverlay.classList.toggle('hidden', !isOpen);
        navOverlay.classList.toggle('show', isOpen);
        menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        pageBody.classList.toggle('menu-open', isOpen);
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
            setMobileMenuState(navOverlay.classList.contains('hidden'));
        });

        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                setMobileMenuState(false);
            });
        });

        navOverlay.addEventListener('click', function (event) {
            if (event.target === navOverlay) {
                setMobileMenuState(false);
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
