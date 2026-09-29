<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tripinest - Contact Us</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

</head>
<body>

<?php include 'header.php'; ?>

<!-- ===== HEADER ===== -->
<header class="main-header animate fadeInDown one" id="headerAnim">
    <div class="header-content">
        <h1><i class="fas fa-plane-departure"></i> Tripinest</h1>
        <p>Let's explore the world together</p>
    </div>
</header>

<!-- ===== CONTACT SECTION ===== -->
<section class="contact-section">

    <!-- LEFT: Contact Info -->
    <div class="contact-info animate fadeInLeft two" id="infoAnim">
        <h2><i class="fas fa-address-card"></i> Get in Touch</h2>
        <div class="sub-head">We'd love to hear from you — reach out anytime!</div>

        <div class="info-item">
            <div class="icon-wrap"><i class="fas fa-phone-alt"></i></div>
            <div class="text">
                <h4>Phone</h4>
                <p>
                    <a href="tel:+917225860129">+91 7225860129</a> /
                    <a href="tel:+917222960129">+91 7222960129</a>
                </p>
            </div>
        </div>

        <div class="info-item">
            <div class="icon-wrap"><i class="fas fa-envelope"></i></div>
            <div class="text">
                <h4>Email</h4>
                <p><a href="mailto:info@tripinest.com">info@tripinest.com</a></p>
            </div>
        </div>

        <div class="info-item">
            <div class="icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
            <div class="text">
                <h4>Address</h4>
                <p>54, Atal Vihar Colony, Abhanpur, Raipur 493661</p>
            </div>
        </div>

        <div class="info-item">
            <div class="icon-wrap"><i class="fas fa-clock"></i></div>
            <div class="text">
                <h4>Working Hours</h4>
                <p>Mon – Fri: 9:00 AM – 8:00 PM</p>
            </div>
        </div>
    </div>

    <!-- RIGHT: Contact Form -->
    <div class="contact-form-wrap animate fadeInRight three" id="formAnim">
        <h2><i class="fas fa-paper-plane"></i> Send a Message</h2>
        <div class="sub-head">Fill the form &amp; we'll reply via WhatsApp</div>

        <form id="contactForm" onsubmit="sendToWhatsApp(event)">
            <div class="form-group">
                <label for="fullName"><i class="fas fa-user"></i> Full Name</label>
                <input type="text" id="fullName" placeholder="Your full name" required />
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                <input type="email" id="email" placeholder="you@example.com" required />
            </div>

            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                <input type="tel" id="phone" placeholder="+91 72258 60129" required />
            </div>

            <div class="form-group">
                <label for="message"><i class="fas fa-comment-dots"></i> Message</label>
                <textarea id="message" placeholder="Write your message here…" required></textarea>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fab fa-whatsapp"></i> Send via WhatsApp
            </button>
        </form>
    </div>

</section>

<!-- ===== GOOGLE MAP ===== -->
<section class="map-section">
    <div class="map-wrapper animate fadeInUp four" id="mapAnim">
        <iframe
            src="https://maps.google.com/maps?q=54,+Atal+Vihar+Colony,+Abhanpur,+Raipur+493661&t=&z=15&ie=UTF8&iwloc=&output=embed"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Google Map - Atal Vihar Colony Location"
        ></iframe>
    </div>
</section>

<!-- ===== BOTTOM TRAVEL FAMILY BG ===== -->


<?php include 'footer.php'; ?>

<!-- ===== JAVASCRIPT ===== -->
<script>
    /**
     * Sends form data to WhatsApp via the official API.
     * Uses the primary contact number: +91 7225860129
     */
    function sendToWhatsApp(event) {
        event.preventDefault();

        const name = document.getElementById('fullName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const message = document.getElementById('message').value.trim();

        if (!name || !email || !phone || !message) {
            alert('⚠️ Please fill in all fields before sending.');
            return;
        }

        const whatsappNumber = '917225860129';
        const text = `Hello Tripinest!%0A%0A` +
            `👤 Name: ${encodeURIComponent(name)}%0A` +
            `📧 Email: ${encodeURIComponent(email)}%0A` +
            `📱 Phone: ${encodeURIComponent(phone)}%0A` +
            `💬 Message: ${encodeURIComponent(message)}%0A%0A` +
            `🌍 Let's plan an adventure! ✈️`;

        const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${text}`;
        window.open(url, '_blank');
    }

    // ============================================================
    //  SCROLL-TRIGGERED ANIMATIONS (Intersection Observer)
    // ============================================================
    (function() {
        'use strict';

        const animatedElements = document.querySelectorAll('.animate');
        if (!animatedElements.length) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -20px 0px'
        });

        animatedElements.forEach(el => observer.observe(el));

        // Fallback for elements already in view on load
        setTimeout(() => {
            animatedElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const winHeight = window.innerHeight || document.documentElement.clientHeight;
                if (rect.top < winHeight - 50 && rect.bottom > 0) {
                    el.classList.add('is-visible');
                }
            });
        }, 100);

        // Re-check on resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                animatedElements.forEach(el => {
                    const rect = el.getBoundingClientRect();
                    const winHeight = window.innerHeight || document.documentElement.clientHeight;
                    if (rect.top < winHeight - 50 && rect.bottom > 0 && !el.classList.contains('is-visible')) {
                        el.classList.add('is-visible');
                    }
                });
            }, 200);
        });

    })();
</script>

</body>
</html>