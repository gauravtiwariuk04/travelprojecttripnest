<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | Tripinest</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet" />

    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        /* ---------- RESET & BASE ---------- */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0b2b4a;
            --primary-light: #1a4b6d;
            --accent: #f5a623;
            --accent-light: #ffc857;
            --accent-glow: rgba(245, 166, 35, 0.35);
            --text-light: #f0f4fa;
            --text-dark: #1a1a2e;
            --text-muted: #4a4a6a;
            --card-bg: rgba(255, 255, 255, 0.92);
            --shadow: 0 20px 60px rgba(11, 43, 74, 0.18);
            --radius: 18px;
            --transition: 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f6f9fe;
            color: var(--text-dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* ---------- UTILITY ---------- */
        .container {
            width: 100%;
            padding: 0 24px;
        }

        .section-padding {
            padding: 60px 0 80px;
        }

        /* ---------- 250px HEADER with BG IMAGE ---------- */
        .hero-header {
            height: 250px;
            min-height: 250px;
            width: 100%;
            background: linear-gradient(135deg, rgba(11, 43, 74, 0.82) 0%, rgba(26, 75, 109, 0.70) 100%),
                url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=1600&q=80') center center / cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            animation: heroFadeIn 1s ease forwards;
        }

        /* subtle animated overlay shimmer */
        .hero-header::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 30% 40%, rgba(245, 166, 35, 0.10) 0%, transparent 70%);
            pointer-events: none;
            animation: shimmerPulse 6s ease-in-out infinite alternate;
        }

        @keyframes shimmerPulse {
            0% {
                opacity: 0.3;
                transform: scale(1);
            }
            100% {
                opacity: 0.9;
                transform: scale(1.2);
            }
        }

        @keyframes heroFadeIn {
            0% {
                opacity: 0;
                transform: scale(1.02);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 0 20px;
            animation: slideUpFade 0.9s ease 0.2s both;
        }

        @keyframes slideUpFade {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content h1 {
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.30);
            margin-bottom: 6px;
        }

        .hero-content .brand-tag {
            font-size: clamp(0.95rem, 1.4vw, 1.3rem);
            font-weight: 400;
            opacity: 0.95;
            letter-spacing: 4px;
            text-transform: uppercase;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(4px);
            display: inline-block;
            padding: 4px 24px;
            border-radius: 40px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            margin-top: 4px;
        }

        .hero-content .brand-tag i {
            color: var(--accent);
            margin-right: 8px;
        }

        /* floating badge – small animated accent */
        .hero-badge {
            position: absolute;
            bottom: 16px;
            right: 24px;
            z-index: 3;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            padding: 6px 18px 6px 14px;
            border-radius: 40px;
            font-size: 0.7rem;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            gap: 8px;
            animation: floatBadge 3s ease-in-out infinite;
            letter-spacing: 0.5px;
        }

        .hero-badge i {
            color: var(--accent);
            font-size: 0.8rem;
        }

        @keyframes floatBadge {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-6px);
            }
        }

        /* ---------- BREADCRUMB (full width) ---------- */
        .breadcrumb-wrap {
            background: rgba(255, 255, 255, 0.70);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid rgba(11, 43, 74, 0.06);
            padding: 12px 24px;
            width: 100%;
            margin-top: -1px;
        }

        .breadcrumb-wrap .container {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.85rem;
            color: var(--text-muted);
            flex-wrap: wrap;
            padding: 0;
        }

        .breadcrumb-wrap a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .breadcrumb-wrap a:hover {
            color: var(--accent);
        }

        .breadcrumb-wrap .sep {
            color: #bbb;
            font-weight: 300;
        }

        /* ---------- MAIN CONTENT (Privacy Policy) - FULL WIDTH ---------- */
        .policy-wrapper {
            background: #fff;
            border-radius: 0;
            box-shadow: var(--shadow);
            padding: 48px 48px 56px;
            margin: 0;
            width: 100%;
            position: relative;
            overflow: hidden;
            transition: box-shadow var(--transition), transform var(--transition);
        }

        .policy-wrapper:hover {
            box-shadow: 0 30px 80px rgba(11, 43, 74, 0.20);
            transform: translateY(-2px);
        }

        /* decorative top line */
        .policy-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light), var(--accent));
            background-size: 200% 100%;
            animation: gradientMove 4s ease-in-out infinite alternate;
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 0%;
            }
            100% {
                background-position: 100% 0%;
            }
        }

        /* inner content max-width for readability */
        .policy-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .policy-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .policy-header .icon-circle {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.6rem;
            flex-shrink: 0;
            box-shadow: 0 8px 24px rgba(11, 43, 74, 0.25);
            transition: transform var(--transition), box-shadow var(--transition);
        }

        .policy-header .icon-circle:hover {
            transform: scale(1.06) rotate(-4deg);
            box-shadow: 0 12px 32px rgba(11, 43, 74, 0.35);
        }

        .policy-header h2 {
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.02em;
        }

        .policy-header .last-updated {
            margin-left: auto;
            font-size: 0.8rem;
            color: var(--text-muted);
            background: #f0f4fa;
            padding: 4px 16px;
            border-radius: 30px;
            font-weight: 500;
        }

        /* policy sections */
        .policy-section {
            margin-top: 36px;
            padding-top: 28px;
            border-top: 1px solid rgba(11, 43, 74, 0.06);
            opacity: 0;
            transform: translateY(30px);
            animation: sectionReveal 0.7s ease forwards;
        }

        .policy-section:nth-of-type(1) {
            animation-delay: 0.05s;
        }
        .policy-section:nth-of-type(2) {
            animation-delay: 0.12s;
        }
        .policy-section:nth-of-type(3) {
            animation-delay: 0.19s;
        }
        .policy-section:nth-of-type(4) {
            animation-delay: 0.26s;
        }
        .policy-section:nth-of-type(5) {
            animation-delay: 0.33s;
        }
        .policy-section:nth-of-type(6) {
            animation-delay: 0.40s;
        }
        .policy-section:nth-of-type(7) {
            animation-delay: 0.47s;
        }

        @keyframes sectionReveal {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .policy-section h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .policy-section h3 i {
            color: var(--accent);
            font-size: 1.2rem;
            width: 28px;
            text-align: center;
            transition: transform var(--transition), color var(--transition);
        }

        .policy-section:hover h3 i {
            transform: scale(1.2) rotate(6deg);
            color: var(--accent-light);
        }

        .policy-section p {
            color: var(--text-muted);
            margin-bottom: 10px;
            font-size: 1rem;
            line-height: 1.8;
        }

        .policy-section ul {
            list-style: none;
            padding: 0;
            margin: 12px 0 4px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .policy-section ul li {
            padding-left: 28px;
            position: relative;
            color: var(--text-muted);
            font-size: 0.98rem;
            transition: color var(--transition), transform var(--transition);
        }

        .policy-section ul li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
            color: var(--accent);
            font-size: 1rem;
            transition: transform var(--transition);
        }

        .policy-section ul li:hover {
            color: var(--primary);
            transform: translateX(6px);
        }

        .policy-section ul li:hover::before {
            transform: scale(1.2) rotate(6deg);
        }

        /* ---------- CONTACT CARD (full width inside) ---------- */
        .contact-highlight {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: var(--radius);
            padding: 32px 36px;
            margin-top: 40px;
            color: #fff;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px 32px;
            box-shadow: 0 16px 40px rgba(11, 43, 74, 0.25);
            transition: transform var(--transition), box-shadow var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .contact-highlight:hover {
            transform: scale(1.01) translateY(-3px);
            box-shadow: 0 24px 56px rgba(11, 43, 74, 0.35);
        }

        .contact-highlight .item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .contact-highlight .item i {
            font-size: 1.4rem;
            color: var(--accent);
            width: 36px;
            text-align: center;
            transition: transform var(--transition);
        }

        .contact-highlight .item:hover i {
            transform: scale(1.2) rotate(-6deg);
        }

        .contact-highlight .item .label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.7;
            font-weight: 400;
        }

        .contact-highlight .item .value {
            font-weight: 600;
            font-size: 1rem;
            word-break: break-word;
        }

        .contact-highlight .item .value a {
            color: #fff;
            text-decoration: none;
            border-bottom: 1px dotted rgba(255, 255, 255, 0.30);
            transition: border-color var(--transition), color var(--transition);
        }

        .contact-highlight .item .value a:hover {
            color: var(--accent);
            border-color: var(--accent);
        }

        /* ---------- RESPONSIVE ---------- */

        @media (max-width: 1024px) {
            .policy-wrapper {
                padding: 36px 32px 44px;
            }
            .contact-highlight {
                grid-template-columns: 1fr 1fr;
                padding: 28px 24px;
            }
            .policy-inner {
                padding: 0 16px;
            }
        }

        @media (max-width: 768px) {
            .hero-header {
                height: 220px;
                min-height: 220px;
            }
            .hero-content h1 {
                font-size: 1.8rem;
            }
            .hero-content .brand-tag {
                font-size: 0.75rem;
                padding: 2px 16px;
                letter-spacing: 2px;
            }
            .hero-badge {
                display: none;
            }

            .breadcrumb-wrap {
                padding: 12px 16px;
            }

            .policy-wrapper {
                padding: 28px 16px 36px;
                border-radius: 0;
            }
            .policy-inner {
                padding: 0 8px;
            }
            .policy-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            .policy-header .last-updated {
                margin-left: 0;
            }
            .policy-header .icon-circle {
                width: 48px;
                height: 48px;
                font-size: 1.2rem;
            }
            .policy-section h3 {
                font-size: 1.1rem;
            }
            .policy-section ul li {
                font-size: 0.92rem;
                padding-left: 24px;
            }

            .contact-highlight {
                grid-template-columns: 1fr;
                gap: 16px;
                padding: 24px 20px;
            }
            .contact-highlight .item .value {
                font-size: 0.92rem;
            }
        }

        @media (max-width: 480px) {
            .hero-header {
                height: 190px;
                min-height: 190px;
            }
            .hero-content h1 {
                font-size: 1.5rem;
            }
            .hero-content .brand-tag {
                font-size: 0.65rem;
                padding: 2px 12px;
                letter-spacing: 1px;
            }

            .breadcrumb-wrap {
                padding: 10px 12px;
            }
            .breadcrumb-wrap .container {
                font-size: 0.75rem;
                gap: 6px;
            }
            .breadcrumb-wrap .container a {
                font-size: 0.75rem;
            }

            .policy-wrapper {
                padding: 20px 12px 28px;
            }
            .policy-inner {
                padding: 0 4px;
            }
            .policy-section {
                margin-top: 24px;
                padding-top: 20px;
            }
            .policy-section h3 {
                font-size: 1rem;
            }
            .contact-highlight {
                padding: 18px 14px;
                gap: 12px;
            }
            .contact-highlight .item {
                gap: 10px;
            }
            .contact-highlight .item i {
                font-size: 1.1rem;
                width: 28px;
            }
        }

        /* ---------- SCROLL ANIMATION (extra polish) ---------- */
        .fade-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* small decorative pulse on policy wrapper */
        .policy-wrapper .deco-dot {
            position: absolute;
            border-radius: 50%;
            background: var(--accent);
            opacity: 0.06;
            pointer-events: none;
        }

        .deco-dot.d1 {
            width: 200px;
            height: 200px;
            top: -60px;
            right: -60px;
        }
        .deco-dot.d2 {
            width: 140px;
            height: 140px;
            bottom: -40px;
            left: -40px;
            background: var(--primary);
        }

        /* smooth hover on whole policy sections */
        .policy-section {
            transition: background var(--transition), padding-left var(--transition);
            border-radius: 8px;
            padding: 4px 8px 4px 4px;
        }

        .policy-section:hover {
            background: rgba(245, 166, 35, 0.03);
            padding-left: 12px;
        }
    </style>
</head>

<body>
 <?php include 'header.php'; ?>
    <!-- ====== 250px HEADER with BG IMAGE ====== -->
    <header class="hero-header">
        <div class="hero-content">
            <h1>Privacy Policy</h1>
            <div class="brand-tag">
                <i class="fas fa-globe-asia"></i> Tripinest &bull; Travel Beyond Boundaries
            </div>
        </div>
        <!-- floating badge -->
        <div class="hero-badge">
            <i class="fas fa-shield-alt"></i> Your Data &bull; Our Priority
        </div>
    </header>

    <!-- ====== BREADCRUMB (full width) ====== -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <span class="sep">/</span>
            <span>Privacy Policy</span>
        </div>
    </div>

    <!-- ====== MAIN CONTENT (full width) ====== -->
    <main class="section-padding" style="padding:0;">

        <div class="policy-wrapper">
            <!-- decorative dots -->
            <div class="deco-dot d1"></div>
            <div class="deco-dot d2"></div>

            <div class="policy-inner">

                <!-- header -->
                <div class="policy-header">
                    <div class="icon-circle">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h2>Privacy Policy</h2>
                    <span class="last-updated"><i class="far fa-calendar-alt"></i> Updated: August 2026</span>
                </div>

                <!-- intro -->
                <p style="font-size:1.05rem; color:var(--text-dark); font-weight:400; margin-bottom:8px;">
                    At <strong>Tripinest</strong>, we value your trust and are committed to protecting your privacy.
                    This policy outlines how we collect, use, and safeguard your personal information when you book
                    our <strong>international</strong> and <strong>domestic travel packages</strong>.
                </p>

                <!-- sections -->
                <div class="policy-section">
                    <h3><i class="fas fa-database"></i> Information We Collect</h3>
                    <p>We collect information to provide you with the best travel experience. This includes:</p>
                    <ul>
                        <li><strong>Personal Details:</strong> Name, email, phone number, date of birth, and passport information for international bookings.</li>
                        <li><strong>Travel Preferences:</strong> Destinations, package choices, accommodation preferences, and special requests.</li>
                        <li><strong>Payment Information:</strong> Securely processed via our payment partners – we never store your full card details.</li>
                        <li><strong>Usage Data:</strong> How you interact with our website to improve your experience.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-upload"></i> How We Use Your Information</h3>
                    <p>Your data helps us deliver exceptional service. We use it to:</p>
                    <ul>
                        <li><strong>Book &amp; manage</strong> your domestic and international travel packages.</li>
                        <li><strong>Send updates</strong> about your itinerary, flight changes, and travel alerts.</li>
                        <li><strong>Personalize offers</strong> based on your travel history and preferences.</li>
                        <li><strong>Improve our services</strong> through analytics and feedback.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-shield-virus"></i> Data Security</h3>
                    <p>
                        We implement industry-standard security measures to protect your information.
                        All data transmitted between your browser and our servers is encrypted using SSL/TLS.
                        Access to personal data is restricted to authorized personnel only.
                    </p>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-cookie-bite"></i> Cookies</h3>
                    <p>
                        We use cookies to enhance your browsing experience, remember your preferences,
                        and analyze site traffic. You can control cookie settings in your browser.
                        By continuing to use our site, you consent to our use of cookies.
                    </p>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-link"></i> Third-Party Links</h3>
                    <p>
                        Our website may contain links to partner airlines, hotels, and payment gateways.
                        We are not responsible for the privacy practices of these third parties.
                        We encourage you to review their policies before providing any personal data.
                    </p>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-history"></i> Changes to This Policy</h3>
                    <p>
                        We may update this privacy policy from time to time. Any changes will be posted on this page
                        with an updated revision date. We recommend checking this page periodically to stay informed.
                    </p>
                </div>

                <div class="policy-section">
                    <h3><i class="fas fa-phone-alt"></i> Contact Us</h3>
                    <p>
                        If you have any questions, concerns, or requests regarding your personal data,
                        please reach out to us. We are here to help.
                    </p>
                </div>

                <!-- ====== CONTACT CARD ====== -->
                <div class="contact-highlight">
                    <div class="item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <div class="label">Email</div>
                            <div class="value"><a href="mailto:info@tripinest.com">info@tripinest.com</a></div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fas fa-map-pin"></i>
                        <div>
                            <div class="label">Address</div>
                            <div class="value">54, Atal Vihar Colony, Abhanpur, Raipur 493661</div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <div class="label">Contact</div>
                            <div class="value">
                                <a href="tel:+917225860129">7225860129</a> / <a href="tel:+917222960129">7222960129</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <i class="fas fa-plane-departure"></i>
                        <div>
                            <div class="label">Travel Services</div>
                            <div class="value">International &amp; Domestic Packages</div>
                        </div>
                    </div>
                </div>

                <!-- small note -->
                <p style="margin-top:28px; font-size:0.85rem; color:var(--text-muted); text-align:center; border-top:1px solid rgba(11,43,74,0.06); padding-top:20px;">
                    <i class="fas fa-heart" style="color:var(--accent);"></i>
                    Tripinest &bull; Your journey, our commitment.
                </p>

            </div>
            <!-- /.policy-inner -->

        </div>
        <!-- /.policy-wrapper -->

    </main>
 <?php include 'footer.php'; ?>
    <!-- ====== SCROLL REVEAL ====== -->
    <script>
        (function() {
            'use strict';

            const faders = document.querySelectorAll('.fade-on-scroll');
            if (faders.length) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                        }
                    });
                }, { threshold: 0.20, rootMargin: '0px 0px -40px 0px' });

                faders.forEach(el => observer.observe(el));
            }

            console.log('✈️ Tripinest — Privacy Policy loaded with care.');
        })();
    </script>

</body>
</html>