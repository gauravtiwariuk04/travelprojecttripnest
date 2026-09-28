<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terms & Conditions | Tripinest</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* ===== RESET & BASE ===== */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fc;
            color: #1a1a2e;
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* ===== HEADER (full width) ===== */
        .site-header {
            height: 250px;
            width: 100%;
            background: linear-gradient(135deg, rgba(10, 10, 30, 0.65), rgba(0, 40, 80, 0.75)),
                url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center center / cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        /* Animated overlay shimmer */
        .site-header::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 40%, rgba(255, 255, 255, 0.06) 0%, transparent 60%);
            animation: shimmerRotate 18s linear infinite;
            pointer-events: none;
        }

        @keyframes shimmerRotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .header-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
            padding: 0 24px;
            animation: fadeSlideDown 1.2s ease forwards;
        }

        .header-content h1 {
            font-size: 3.2rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            margin-bottom: 6px;
        }

        .header-content h1 i {
            margin-right: 12px;
            color: #ffd700;
        }

        .header-content p {
            font-size: 1.2rem;
            font-weight: 300;
            letter-spacing: 4px;
            text-transform: uppercase;
            opacity: 0.9;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.4);
        }

        @keyframes fadeSlideDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== BREADCRUMB (full width) ===== */
        .breadcrumb-wrap {
            background: #fff;
            padding: 14px 24px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.04);
            border-bottom: 1px solid #e9edf4;
            width: 100%;
        }

        .breadcrumb-wrap .container {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.95rem;
            color: #5a6a7a;
            flex-wrap: wrap;
            width: 100%;
            padding: 0;
        }

        .breadcrumb-wrap a {
            color: #0a4b78;
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb-wrap a:hover {
            color: #ff6b35;
        }

        .breadcrumb-wrap .separator {
            color: #b0c0d0;
        }

        .breadcrumb-wrap .current {
            color: #1a1a2e;
            font-weight: 600;
        }

        /* ===== CONTAINER (full width, no max-width) ===== */
        .container {
            width: 100%;
            padding: 0 24px;
            margin: 0 auto;
        }

        /* ===== MAIN CONTENT (full width) ===== */
        .main-content {
            padding: 50px 0 70px;
            width: 100%;
            background: #f8f9fc;
        }

        .terms-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 50px 55px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(2px);
            transition: box-shadow 0.4s ease, transform 0.4s ease;
            animation: fadeUp 1s ease forwards;
            width: 100%;
        }

        .terms-card:hover {
            box-shadow: 0 20px 60px rgba(0, 20, 50, 0.12);
            transform: translateY(-4px);
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .terms-card h2 {
            font-size: 2.2rem;
            color: #0a2a44;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .terms-card h2 i {
            color: #ff6b35;
            font-size: 2rem;
        }

        .terms-card .sub-title {
            color: #5a6a7a;
            font-size: 1.05rem;
            margin-bottom: 32px;
            border-left: 4px solid #ff6b35;
            padding-left: 18px;
            background: #f8faff;
            border-radius: 0 12px 12px 0;
        }

        /* ===== TERMS SECTIONS ===== */
        .terms-section {
            margin-bottom: 38px;
            padding-bottom: 30px;
            border-bottom: 1px solid #eef2f8;
            transition: all 0.3s ease;
        }

        .terms-section:last-of-type {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .terms-section h3 {
            font-size: 1.5rem;
            color: #0a2a44;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: color 0.3s;
        }

        .terms-section h3 i {
            color: #ff6b35;
            font-size: 1.3rem;
            width: 32px;
            text-align: center;
            transition: transform 0.3s ease, color 0.3s;
        }

        .terms-section:hover h3 i {
            transform: scale(1.2) rotate(-6deg);
            color: #e85d2c;
        }

        .terms-section p,
        .terms-section li {
            color: #2d3e56;
            font-size: 1.02rem;
        }

        .terms-section ul {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .terms-section ul li {
            padding: 8px 0 8px 34px;
            position: relative;
            transition: all 0.3s ease;
            border-radius: 8px;
            padding-right: 10px;
        }

        .terms-section ul li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 6px;
            top: 9px;
            color: #ff6b35;
            font-size: 1rem;
            transition: transform 0.3s ease, color 0.3s;
        }

        .terms-section ul li:hover {
            background: #f5f9ff;
            padding-left: 44px;
            transform: translateX(6px);
        }

        .terms-section ul li:hover::before {
            transform: scale(1.3);
            color: #e85d2c;
        }

        /* ===== CONTACT INFO BOXES (in-page) ===== */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .contact-item {
            background: #f8faff;
            padding: 18px 22px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            gap: 16px;
            border: 1px solid #e9edf4;
            transition: all 0.35s ease;
            cursor: default;
        }

        .contact-item:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 12px 28px rgba(255, 107, 53, 0.12);
            border-color: #ff6b35;
            background: #ffffff;
        }

        .contact-item .icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #ff6b35, #e85d2c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.2rem;
            flex-shrink: 0;
            transition: transform 0.4s ease;
        }

        .contact-item:hover .icon {
            transform: rotateY(360deg);
        }

        .contact-item .info {
            display: flex;
            flex-direction: column;
        }

        .contact-item .info .label {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #8a9aaa;
            font-weight: 600;
        }

        .contact-item .info .value {
            font-weight: 600;
            color: #0a2a44;
            font-size: 1rem;
        }

        .contact-item .info .value a {
            color: #0a2a44;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-item .info .value a:hover {
            color: #ff6b35;
        }

        /* ===== SERVICE TAGS ===== */
        .service-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 16px;
        }

        .service-tag {
            background: linear-gradient(135deg, #fff6f0, #ffede6);
            padding: 8px 22px;
            border-radius: 40px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #0a2a44;
            border: 1px solid rgba(255, 107, 53, 0.2);
            transition: all 0.35s ease;
            cursor: default;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .service-tag i {
            color: #ff6b35;
            font-size: 0.85rem;
        }

        .service-tag:hover {
            transform: translateY(-4px) scale(1.04);
            background: linear-gradient(135deg, #ff6b35, #e85d2c);
            color: #fff;
            border-color: #ff6b35;
            box-shadow: 0 8px 24px rgba(255, 107, 53, 0.3);
        }

        .service-tag:hover i {
            color: #fff;
        }

        /* ===== BACK TO TOP ===== */
        .back-top {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            padding: 12px 32px;
            background: linear-gradient(135deg, #0a2a44, #1a3a5a);
            color: #fff;
            border: none;
            border-radius: 40px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.35s ease;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(10, 42, 68, 0.25);
        }

        .back-top i {
            transition: transform 0.3s ease;
        }

        .back-top:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 32px rgba(10, 42, 68, 0.35);
            background: linear-gradient(135deg, #ff6b35, #e85d2c);
        }

        .back-top:hover i {
            transform: translateY(-4px);
        }

        /* ============================================================ */
        /* ===== FIX: Force footer contact colours ===== */
        /* This prevents the footer contact section from changing colour */
        /* regardless of what styles footer.php may try to apply.     */
        /* ============================================================ */

        /* Target any footer element, and inside it any element with "contact" in the class */
        footer,
        .site-footer,
        [class*="footer"] {
            /* Ensure the footer contact text stays white on dark background */
            color: #d4dce6;
        }

        footer .contact-info,
        footer .contact-details,
        footer .footer-contact,
        footer [class*="contact"],
        .site-footer .contact-info,
        .site-footer .contact-details,
        .site-footer .footer-contact,
        .site-footer [class*="contact"] {
            color: #ffffff !important;
        }

        footer .contact-info a,
        footer .contact-details a,
        footer .footer-contact a,
        footer [class*="contact"] a,
        .site-footer .contact-info a,
        .site-footer .contact-details a,
        .site-footer .footer-contact a,
        .site-footer [class*="contact"] a {
            color: #ffffff !important;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer .contact-info a:hover,
        footer .contact-details a:hover,
        footer .footer-contact a:hover,
        footer [class*="contact"] a:hover,
        .site-footer .contact-info a:hover,
        .site-footer .contact-details a:hover,
        .site-footer .footer-contact a:hover,
        .site-footer [class*="contact"] a:hover {
            color: #ffd700 !important;
        }

        /* Footer labels (EMAIL, CONTACT, ADDRESS) – keep them a bit lighter */
        footer .contact-label,
        footer .contact-info .label,
        footer .contact-details .label,
        footer .footer-contact .label,
        footer [class*="contact"] .label,
        .site-footer .contact-label,
        .site-footer .contact-info .label,
        .site-footer .contact-details .label,
        .site-footer .footer-contact .label,
        .site-footer [class*="contact"] .label {
            color: #aac0d4 !important;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-size: 0.75rem;
        }

        /* Also handle any direct child text nodes that might be inside contact containers */
        footer .contact-info *,
        footer .contact-details *,
        footer .footer-contact *,
        footer [class*="contact"] *,
        .site-footer .contact-info *,
        .site-footer .contact-details *,
        .site-footer .footer-contact *,
        .site-footer [class*="contact"] * {
            /* Let the specific rules above handle colours, but ensure nothing overrides */
            color: inherit;
        }

        /* ============================================================ */
        /* ===== RESPONSIVE – MEDIA QUERIES (full width adjusted) ===== */
        /* ============================================================ */

        /* --- Large screens (desktops) --- */
        @media (max-width: 1200px) {
            .terms-card {
                padding: 40px 38px;
            }
        }

        /* --- Medium screens (tablets, small laptops) --- */
        @media (max-width: 992px) {
            .header-content h1 {
                font-size: 2.6rem;
            }
            .header-content p {
                font-size: 1rem;
                letter-spacing: 2px;
            }
            .terms-card {
                padding: 34px 30px;
            }
            .terms-card h2 {
                font-size: 1.9rem;
            }
            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* --- Small tablets & large phones --- */
        @media (max-width: 768px) {
            .site-header {
                height: 200px;
            }
            .header-content h1 {
                font-size: 2rem;
            }
            .header-content h1 i {
                margin-right: 8px;
            }
            .header-content p {
                font-size: 0.85rem;
                letter-spacing: 2px;
            }

            .breadcrumb-wrap {
                padding: 14px 16px;
            }
            .breadcrumb-wrap .container {
                font-size: 0.85rem;
                gap: 6px;
            }

            .main-content {
                padding: 30px 0 50px;
            }

            .container {
                padding: 0 16px;
            }

            .terms-card {
                padding: 26px 20px;
                border-radius: 18px;
            }

            .terms-card h2 {
                font-size: 1.6rem;
                flex-wrap: wrap;
            }
            .terms-card h2 i {
                font-size: 1.5rem;
            }
            .terms-card .sub-title {
                font-size: 0.95rem;
                padding-left: 14px;
            }

            .terms-section h3 {
                font-size: 1.25rem;
            }
            .terms-section h3 i {
                font-size: 1.1rem;
                width: 26px;
            }
            .terms-section p,
            .terms-section li {
                font-size: 0.95rem;
            }
            .terms-section ul li {
                padding: 6px 0 6px 30px;
            }
            .terms-section ul li::before {
                left: 4px;
                top: 7px;
                font-size: 0.9rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }

            .contact-item {
                padding: 14px 18px;
            }
            .contact-item .icon {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            .contact-item .info .value {
                font-size: 0.9rem;
            }

            .service-tags {
                gap: 8px;
            }
            .service-tag {
                padding: 6px 16px;
                font-size: 0.8rem;
            }

            .back-top {
                padding: 10px 24px;
                font-size: 0.9rem;
                width: 100%;
                justify-content: center;
            }
        }

        /* --- Phones (small) --- */
        @media (max-width: 480px) {
            .site-header {
                height: 170px;
            }
            .header-content h1 {
                font-size: 1.5rem;
                letter-spacing: 1px;
            }
            .header-content h1 i {
                font-size: 1.2rem;
            }
            .header-content p {
                font-size: 0.7rem;
                letter-spacing: 1px;
            }

            .container {
                padding: 0 12px;
            }

            .terms-card {
                padding: 20px 14px;
                border-radius: 14px;
            }

            .terms-card h2 {
                font-size: 1.3rem;
                gap: 8px;
            }
            .terms-card h2 i {
                font-size: 1.2rem;
            }
            .terms-card .sub-title {
                font-size: 0.85rem;
                padding-left: 10px;
                margin-bottom: 22px;
            }

            .terms-section {
                margin-bottom: 24px;
                padding-bottom: 20px;
            }
            .terms-section h3 {
                font-size: 1.1rem;
                gap: 8px;
            }
            .terms-section h3 i {
                font-size: 0.95rem;
                width: 22px;
            }
            .terms-section p,
            .terms-section li {
                font-size: 0.88rem;
            }
            .terms-section ul li {
                padding: 5px 0 5px 26px;
            }
            .terms-section ul li::before {
                left: 2px;
                top: 6px;
                font-size: 0.8rem;
            }
            .terms-section ul li:hover {
                padding-left: 32px;
            }

            .contact-item .info .label {
                font-size: 0.65rem;
            }
            .contact-item .info .value {
                font-size: 0.8rem;
            }

            .service-tag {
                font-size: 0.7rem;
                padding: 4px 12px;
            }
            .service-tag i {
                font-size: 0.7rem;
            }

            .back-top {
                font-size: 0.8rem;
                padding: 8px 16px;
            }
        }

        /* --- Extra small devices (very narrow) --- */
        @media (max-width: 360px) {
            .header-content h1 {
                font-size: 1.2rem;
            }
            .header-content p {
                font-size: 0.6rem;
                letter-spacing: 0.5px;
            }
            .terms-card h2 {
                font-size: 1.1rem;
            }
            .terms-section h3 {
                font-size: 0.95rem;
            }
            .terms-section p,
            .terms-section li {
                font-size: 0.8rem;
            }
            .contact-item {
                padding: 10px 14px;
            }
            .contact-item .icon {
                width: 34px;
                height: 34px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-- ===== HEADER ===== -->
    <header class="site-header">
        <div class="header-content">
            <h1><i class="fas fa-globe-asia"></i> Tripinest</h1>
            <p>Terms &amp; Conditions</p>
        </div>
    </header>

    <!-- ===== BREADCRUMB (full width) ===== -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <span class="separator">/</span>
            <a href="#">Travel</a>
            <span class="separator">/</span>
            <span class="current">Terms &amp; Conditions</span>
        </div>
    </div>

    <!-- ===== MAIN (full width) ===== -->
    <main class="main-content">
        <div class="container">

            <div class="terms-card">

                <h2><i class="fas fa-file-contract"></i> Terms &amp; Conditions</h2>
                <div class="sub-title">
                    <i class="fas fa-calendar-check" style="margin-right:10px;color:#ff6b35;"></i>
                    Last updated: August 4, 2026 &nbsp;·&nbsp; <i class="fas fa-clock" style="margin-right:6px;color:#ff6b35;"></i> Effective immediately
                </div>

                <!-- Section 1 -->
                <div class="terms-section">
                    <h3><i class="fas fa-briefcase"></i> 1. Travel Services</h3>
                    <p>
                        Tripinest provides premium travel packages for both <strong>International</strong> and
                        <strong>National Domestic</strong> destinations. All bookings are subject to availability
                        and confirmation by our partners.
                    </p>
                    <div class="service-tags">
                        <span class="service-tag"><i class="fas fa-plane"></i> International</span>
                        <span class="service-tag"><i class="fas fa-flag"></i> Domestic</span>
                        <span class="service-tag"><i class="fas fa-hotel"></i> Hotel Stays</span>
                        <span class="service-tag"><i class="fas fa-umbrella-beach"></i> Holiday Packages</span>
                        <span class="service-tag"><i class="fas fa-car"></i> Transfers</span>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="terms-section">
                    <h3><i class="fas fa-scroll"></i> 2. Booking &amp; Payment</h3>
                    <p>
                        A non-refundable deposit is required at the time of booking. Full payment must be completed
                        at least 15 days prior to departure. We accept all major credit/debit cards and bank transfers.
                    </p>
                    <ul>
                        <li>Deposit amount: 30% of total package cost</li>
                        <li>Final payment due: 15 days before travel</li>
                        <li>Cancellation charges apply as per policy</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="terms-section">
                    <h3><i class="fas fa-undo-alt"></i> 3. Cancellation &amp; Refund</h3>
                    <p>
                        Cancellations must be made in writing. Refunds are processed based on the time of cancellation:
                    </p>
                    <ul>
                        <li><strong>30+ days</strong> before departure: 75% refund (excluding deposit)</li>
                        <li><strong>15–29 days</strong> before departure: 50% refund</li>
                        <li><strong>7–14 days</strong> before departure: 25% refund</li>
                        <li><strong>Less than 7 days</strong>: No refund</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div class="terms-section">
                    <h3><i class="fas fa-user-shield"></i> 4. Liability &amp; Insurance</h3>
                    <p>
                        Tripinest acts as an intermediary and is not liable for delays, injuries, or losses caused
                        by third-party providers. We strongly recommend purchasing comprehensive travel insurance
                        prior to your journey.
                    </p>
                </div>

                <!-- Section 5 -->
                <div class="terms-section">
                    <h3><i class="fas fa-gavel"></i> 5. Governing Law</h3>
                    <p>
                        These terms are governed by the laws of India. Any disputes shall be subject to the exclusive
                        jurisdiction of the courts in Raipur, Chhattisgarh.
                    </p>
                </div>

                <!-- ===== CONTACT INFO (in-page) ===== -->
                <div style="margin-top:20px;padding-top:30px;border-top:2px dashed #e9edf4;">
                    <h3 style="font-size:1.4rem;color:#0a2a44;display:flex;align-items:center;gap:12px;margin-bottom:18px;">
                        <i class="fas fa-headset" style="color:#ff6b35;"></i> Get in Touch
                    </h3>

                    <div class="contact-grid">
                        <!-- Email -->
                        <div class="contact-item">
                            <div class="icon"><i class="fas fa-envelope"></i></div>
                            <div class="info">
                                <span class="label">Email</span>
                                <span class="value"><a href="mailto:info@tripinest.com">info@tripinest.com</a></span>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="contact-item">
                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="info">
                                <span class="label">Contact</span>
                                <span class="value">
                                    <a href="tel:+917225860129">7225860129</a> /
                                    <a href="tel:+917222960129">7222960129</a>
                                </span>
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="contact-item">
                            <div class="icon"><i class="fas fa-location-dot"></i></div>
                            <div class="info">
                                <span class="label">Address</span>
                                <span class="value">54, Atal Vihar Colony, Abhanpur, Raipur 493661</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back to Top -->
                <a href="#" class="back-top">
                    <i class="fas fa-arrow-up"></i> Back to Top
                </a>

            </div>
            <!-- end terms-card -->

        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>