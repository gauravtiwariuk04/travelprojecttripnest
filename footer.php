<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tripinest Footer</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* ---------- Reset & Base ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f4f7fa;
        }

        /* dummy content above footer */
        .dummy-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            text-align: center;
            color: #2c3e50;
        }
        .dummy-content h1 {
            font-size: 2.4rem;
            font-weight: 300;
            letter-spacing: 2px;
        }
        .dummy-content h1 span {
            font-weight: 700;
            color: #e67e22;
        }

        /* ---------- FLOATING SIDE ICONS ---------- */
        .floating-icon {
            position: fixed;
            bottom: 120px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }

        .floating-icon--left {
            left: 24px;
        }

        .floating-icon--right {
            right: 24px;
        }

        .floating-icon a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #fff;
            color: #fff;
            font-size: 1.6rem;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.18);
            transition: 0.3s ease;
            position: relative;
        }

        /* WhatsApp — left side */
        .floating-icon--left a {
            background: #25d366;
            color: #fff;
        }
        .floating-icon--left a:hover {
            transform: scale(1.10) translateY(-3px);
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.45);
        }

        /* Call — right side */
        .floating-icon--right a {
            background: #0077b6;
            color: #fff;
        }
        .floating-icon--right a:hover {
            transform: scale(1.10) translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 119, 182, 0.45);
        }

        /* small label / tooltip */
        .floating-icon a .tooltip {
            position: absolute;
            right: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.78);
            color: #fff;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 500;
            letter-spacing: 0.3px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: 0.25s ease;
        }

        .floating-icon--left a .tooltip {
            right: 70px;
            left: auto;
        }

        .floating-icon--right a .tooltip {
            left: 70px;
            right: auto;
        }

        .floating-icon a:hover .tooltip {
            opacity: 1;
        }

        /* small pulse ring (optional) */
        .floating-icon a .ring {
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 2px solid currentColor;
            opacity: 0.2;
            animation: pulse-ring 2s ease-in-out infinite;
        }

        .floating-icon--left a .ring {
            border-color: #25d366;
        }
        .floating-icon--right a .ring {
            border-color: #0077b6;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(1);
                opacity: 0.4;
            }
            100% {
                transform: scale(1.25);
                opacity: 0;
            }
        }

        /* ---------- FOOTER ---------- */
        .footer {
            background: linear-gradient(145deg, #0b1a2e, #122b44);
            color: #e8edf3;
            padding: 60px 40px 30px;
            border-top: 4px solid #e67e22;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 1fr 1.4fr 1.2fr;
            gap: 40px 30px;
        }

        /* ----- Section 1: Brand ----- */
        .footer-brand .brand-name {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 8px;
            color: #fff;
        }
        .footer-brand .brand-name span {
            color: #e67e22;
        }
        .footer-brand .tagline {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #b0c7db;
            margin-bottom: 18px;
            max-width: 320px;
        }
        .footer-brand .social-icons {
            display: flex;
            gap: 14px;
        }
        .footer-brand .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.07);
            color: #cbdae9;
            font-size: 1.1rem;
            transition: 0.3s ease;
            text-decoration: none;
        }
        .footer-brand .social-icons a:hover {
            background: #e67e22;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 6px 18px rgba(230, 126, 34, 0.35);
        }

        /* ----- Section 2: Quick Links ----- */
        .footer-links h4,
        .footer-packages h4,
        .footer-contact h4 {
            font-size: 1.15rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-links h4::after,
        .footer-packages h4::after,
        .footer-contact h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 36px;
            height: 3px;
            background: #e67e22;
            border-radius: 4px;
        }

        .footer-links ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .footer-links ul li a {
            color: #b0c7db;
            text-decoration: none;
            font-size: 0.95rem;
            transition: 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .footer-links ul li a i {
            font-size: 0.6rem;
            color: #e67e22;
            opacity: 0.7;
        }
        .footer-links ul li a:hover {
            color: #fff;
            transform: translateX(6px);
        }
        .footer-links ul li a:hover i {
            opacity: 1;
        }

        /* ----- Section 3: Packages (2 columns) ----- */
        .footer-packages .package-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 18px;
        }
        .footer-packages .package-grid a {
            color: #b0c7db;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.25s ease;
            padding: 4px 0;
            border-bottom: 1px solid transparent;
            display: inline-block;
        }
        .footer-packages .package-grid a:hover {
            color: #fff;
            border-bottom-color: #e67e22;
            transform: translateX(4px);
        }

        /* ----- Section 4: Contact ----- */
        .footer-contact .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 16px;
            font-size: 0.95rem;
            color: #b0c7db;
            line-height: 1.6;
        }
        .footer-contact .contact-item i {
            width: 20px;
            color: #e67e22;
            font-size: 1.05rem;
            margin-top: 3px;
        }
        .footer-contact .contact-item a {
            color: #b0c7db;
            text-decoration: none;
            transition: 0.25s ease;
        }
        .footer-contact .contact-item a:hover {
            color: #fff;
        }
        .footer-contact .contact-item .phone-group {
            display: flex;
            flex-wrap: wrap;
            gap: 4px 12px;
        }

        /* ----- Footer Bottom ----- */
        .footer-bottom {
            max-width: 1280px;
            margin: 40px auto 0;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.07);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px 20px;
            font-size: 0.85rem;
            color: #7f99b3;
        }
        .footer-bottom .legal-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .footer-bottom .legal-links a {
            color: #7f99b3;
            text-decoration: none;
            transition: 0.25s ease;
        }
        .footer-bottom .legal-links a:hover {
            color: #e67e22;
        }

        /* ---------- RESPONSIVE ---------- */

        /* Tablets & small laptops */
        @media (max-width: 1024px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
                gap: 36px 30px;
            }
            .footer-brand .tagline {
                max-width: 100%;
            }
        }

        /* Mobile L & below */
        @media (max-width: 680px) {
            .footer {
                padding: 40px 20px 24px;
            }
            .footer-container {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            .footer-brand .brand-name {
                font-size: 1.7rem;
            }
            .footer-links h4,
            .footer-packages h4,
            .footer-contact h4 {
                font-size: 1.05rem;
            }

            .footer-packages .package-grid {
                grid-template-columns: 1fr 1fr;
                gap: 6px 14px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Small phones */
        @media (max-width: 420px) {
            .footer-packages .package-grid {
                grid-template-columns: 1fr;
                gap: 4px;
            }
            .footer-contact .contact-item .phone-group {
                flex-direction: column;
                gap: 2px;
            }
            .footer-bottom .legal-links {
                gap: 12px;
            }

            /* adjust floating icons for small screens */
            .floating-icon {
                bottom: 90px;
            }
            .floating-icon--left {
                left: 12px;
            }
            .floating-icon--right {
                right: 12px;
            }
            .floating-icon a {
                width: 46px;
                height: 46px;
                font-size: 1.3rem;
            }
            .floating-icon a .tooltip {
                display: none;
            }
        }

        /* ---------- Utility for demo ---------- */
        .demo-note {
            background: #e67e2211;
            padding: 8px 18px;
            border-radius: 40px;
            font-size: 0.85rem;
            color: #e67e22;
            border: 1px solid #e67e2244;
        }
    </style>
</head>
<body>

   

    <!-- ========== FLOATING SIDE ICONS ========== -->

    <!-- LEFT: WhatsApp -->
    <div class="floating-icon floating-icon--left">
        <a href="https://wa.me/917225860129" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span class="tooltip">Chat on WhatsApp</span>
            <span class="ring"></span>
        </a>
    </div>

    <!-- RIGHT: Call -->
    <div class="floating-icon floating-icon--right">
        <a href="tel:+917225860129" aria-label="Call us">
            <i class="fas fa-phone"></i>
            <span class="tooltip">Call Now</span>
            <span class="ring"></span>
        </a>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer class="footer">

        <div class="footer-container">

            <!-- Section 1: Brand -->
            <div class="footer-brand">
                <div class="brand-name">Tripinest</div>
                <p class="tagline">
                    Your trusted travel partner for unforgettable journeys.
                    We curate premium holiday experiences across India and beyond
                    with personalized care and attention to every detail.
                </p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="X / Twitter"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>

            <!-- Section 2: Quick Links -->
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> About</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Package</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Service</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    <li><a href="privacey.php"><i class="fas fa-chevron-right"></i> Privacy</a></li>
                    <li><a href="termscondtion.php"><i class="fas fa-chevron-right"></i> Terms &amp; Conditions</a></li>
                </ul>
            </div>

            <!-- Section 3: Popular Packages (2 columns) -->
            <div class="footer-packages">
                <h4>Popular Packages</h4>
                <div class="package-grid">
                    <a href="#">Andaman &amp; Nicobar</a>
                    <a href="#">Kerala Backwaters</a>
                    <a href="#">Himachal Pradesh</a>
                    <a href="#">Rajasthan Heritage</a>
                    <a href="#">Goa Beaches</a>
                    <a href="#">Darjeeling Hills</a>
                    <a href="#">Kashmir Valley</a>
                    <a href="#">Tamil Nadu Temples</a>
                </div>
            </div>

            <!-- Section 4: Contact -->
            <div class="footer-contact">
                <h4>Contact Us</h4>

                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@tripinest.com">info@tripinest.com</a>
                </div>

                <div class="contact-item">
                    <i class="fas fa-location-dot"></i>
                    <span>54, Atal Vihar Colony, Abhanpur, Raipur 493661</span>
                </div>

                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div class="phone-group">
                        <a href="tel:+917225860129">7225860129</a>
                        <span style="color:#7f99b3;">/</span>
                        <a href="tel:+917222960129">7222960129</a>
                    </div>
                </div>

                <!-- small extra touch: working hours or cta -->
                <div style="margin-top:12px; font-size:0.85rem; color:#7f99b3; display:flex; align-items:center; gap:8px; flex-wrap:wrap;">
                    <i class="fas fa-clock" style="color:#e67e22;"></i>
                    <span>Mon–Sat 9:00 AM – 7:00 PM</span>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <span>&copy; 2026 <strong>Tripinest</strong>. All rights reserved.</span>
            <div class="legal-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookies</a>
                <span class="demo-note"><i class="fas fa-mobile-alt"></i> Fully Responsive</span>
            </div>
        </div>

    </footer>

</body>
</html>