<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tripinest – Travel Beyond Limits</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Fonts: Poppins + Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        /* ---------- RESET & BASE ---------- */
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
            font-family: 'Poppins', sans-serif;
            background: #f9f7f4;
            color: #1e1e2a;
            line-height: 1.6;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ---------- ANIMATION BASE (from provided CSS) ---------- */
        .animate {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        /* --- Delay classes --- */
        .one {
            -webkit-animation-delay: 0.5s;
            -moz-animation-delay: 0.5s;
            animation-delay: 0.5s;
        }
        .two {
            -webkit-animation-delay: 1.5s;
            -moz-animation-delay: 1.5s;
            animation-delay: 1.5s;
        }
        .three {
            -webkit-animation-delay: 2.5s;
            -moz-animation-delay: 2.5s;
            animation-delay: 2.5s;
        }
        .four {
            -webkit-animation-delay: 3.5s;
            -moz-animation-delay: 3.5s;
            animation-delay: 3.5s;
        }
        .five {
            -webkit-animation-delay: 4.5s;
            -moz-animation-delay: 4.5s;
            animation-delay: 4.5s;
        }
        .six {
            -webkit-animation-delay: 5.5s;
            -moz-animation-delay: 5.5s;
            animation-delay: 5.5s;
        }
        .seven {
            -webkit-animation-delay: 6.5s;
            -moz-animation-delay: 6.5s;
            animation-delay: 6.5s;
        }
        .eight {
            -webkit-animation-delay: 7.5s;
            -moz-animation-delay: 7.5s;
            animation-delay: 7.5s;
        }

        /* --- FADE IN UP --- */
        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        /* --- FADE IN DOWN --- */
        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }

        /* --- FADE IN LEFT --- */
        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        /* --- FADE IN RIGHT --- */
        @-webkit-keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }

        /* --- FADE IN --- */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
        }

        /* --- FADE IN UP BIG --- */
        @-webkit-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInUpBig {
            -webkit-animation-name: fadeInUpBig;
            animation-name: fadeInUpBig;
        }

        /* --- FADE IN DOWN BIG --- */
        @-webkit-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInDownBig {
            -webkit-animation-name: fadeInDownBig;
            animation-name: fadeInDownBig;
        }

        /* --- FADE IN LEFT BIG --- */
        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInLeftBig {
            -webkit-animation-name: fadeInLeftBig;
            animation-name: fadeInLeftBig;
        }

        /* --- FADE IN RIGHT BIG --- */
        @-webkit-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .fadeInRightBig {
            -webkit-animation-name: fadeInRightBig;
            animation-name: fadeInRightBig;
        }

        /* ---------- BOUNCE SOFT (custom) ---------- */
        @keyframes bounceSoft {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-12px);
            }
        }

        .bounce-icon {
            display: inline-block;
            animation: bounceSoft 2s infinite ease-in-out;
        }

        .bounce-icon:hover {
            animation-duration: 0.6s;
            color: #f39c12;
            transform: scale(1.15);
        }

        /* ---------- PULSE GLOW (custom) ---------- */
        @keyframes pulseGlow {
            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(243, 156, 18, 0.3);
            }
            50% {
                box-shadow: 0 0 0 18px rgba(243, 156, 18, 0);
            }
        }

        /* ---------- HEADER (250px) ---------- */
        .main-header {
            height: 250px;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.25) 100%),
                url('image/Darjeeling-toy-train-route.webp') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            border-bottom: 4px solid #f39c12;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .main-header::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 0;
        }

        .header-content {
            position: relative;
            z-index: 1;
            padding: 0 20px;
        }

        .header-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        .header-content h1 span {
            color: #f1c40f;
            display: inline-block;
        }

        .header-content p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.92);
            font-weight: 300;
            letter-spacing: 4px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
            margin-top: 6px;
        }

        /* ---------- ABOUT SECTION ---------- */
        .about-section {
            padding: 70px 0 50px;
            background: #fff;
        }

        .about-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1 1 48%;
        }

        .about-text .badge {
            display: inline-block;
            background: #f39c12;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 4px 16px;
            border-radius: 30px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .about-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 16px;
            color: #1e1e2a;
        }

        .about-text h2 span {
            color: #f39c12;
        }

        .about-text p {
            color: #555;
            font-weight: 300;
            font-size: 1.05rem;
            margin-bottom: 18px;
        }

        .about-text .features-list {
            display: flex;
            flex-wrap: wrap;
            gap: 18px 30px;
            margin-top: 10px;
        }

        .about-text .features-list li {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
            font-size: 0.98rem;
            color: #2d2d3f;
        }

        .about-text .features-list li i {
            color: #f39c12;
            font-size: 1.25rem;
            width: 28px;
            text-align: center;
        }

        .about-image {
            flex: 1 1 44%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .about-image:hover {
            transform: scale(1.01) translateY(-6px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.18);
        }

        .about-image img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .about-image:hover img {
            transform: scale(1.04);
        }

        /* ---------- WHY CHOOSE US (6 cards) ---------- */
        .why-section {
            padding: 70px 0 80px;
            background: #f9f7f4;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 700;
            color: #1e1e2a;
        }

        .section-title h2 span {
            color: #f39c12;
        }

        .section-title p {
            color: #666;
            font-weight: 300;
            font-size: 1.05rem;
            max-width: 580px;
            margin: 8px auto 0;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            background: #fff;
            padding: 34px 24px 30px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                box-shadow 0.4s ease,
                background 0.4s ease;
            border: 1px solid rgba(243, 156, 18, 0.08);
            cursor: default;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f39c12, #f1c40f);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        .card:hover::before {
            transform: scaleX(1);
        }

        .card:hover {
            transform: translateY(-14px) scale(1.01);
            box-shadow: 0 24px 60px rgba(243, 156, 18, 0.18);
            background: #ffffff;
            border-color: #f39c12;
        }

        .card .icon-wrap {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 78px;
            height: 78px;
            background: linear-gradient(145deg, #fef6e7, #fce9d0);
            border-radius: 50%;
            margin-bottom: 18px;
            font-size: 2.4rem;
            color: #f39c12;
            transition: background 0.4s ease, transform 0.4s ease, box-shadow 0.4s ease;
        }

        .card:hover .icon-wrap {
            background: #f39c12;
            color: #fff;
            transform: scale(1.08) rotate(-4deg);
            box-shadow: 0 12px 30px rgba(243, 156, 18, 0.35);
        }

        .card .icon-wrap i {
            transition: transform 0.5s ease;
        }

        .card:hover .icon-wrap i {
            transform: scale(1.15) rotate(4deg);
        }

        .card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #1e1e2a;
            transition: color 0.3s ease;
        }

        .card:hover h3 {
            color: #f39c12;
        }

        .card p {
            font-size: 0.95rem;
            color: #666;
            font-weight: 300;
            transition: color 0.3s ease;
        }

        .card:hover p {
            color: #444;
        }

        /* ---------- FOOTER ---------- */
        .footer-note {
            text-align: center;
            padding: 30px 0 20px;
            background: #1e1e2a;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 300;
            font-size: 0.9rem;
            letter-spacing: 1px;
            border-top: 3px solid #f39c12;
        }

        .footer-note strong {
            color: #f1c40f;
            font-weight: 500;
        }

        .anchor-offset {
            scroll-margin-top: 20px;
        }

        /* ---------- RESPONSIVE ---------- */
        @media screen and (max-width: 1024px) {
            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
            .about-wrapper {
                gap: 30px;
            }
            .header-content h1 {
                font-size: 3rem;
            }
        }

        @media screen and (max-width: 768px) {
            .main-header {
                height: 200px;
            }
            .header-content h1 {
                font-size: 2.4rem;
            }
            .header-content p {
                font-size: 1rem;
                letter-spacing: 2px;
            }
            .about-wrapper {
                flex-direction: column;
                gap: 30px;
            }
            .about-text {
                flex: 1 1 100%;
            }
            .about-image {
                flex: 1 1 100%;
            }
            .about-image img {
                height: 250px;
            }
            .about-text h2 {
                font-size: 2.2rem;
            }
            .section-title h2 {
                font-size: 2.2rem;
            }
            .cards-grid {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
            .card {
                padding: 26px 16px 24px;
            }
            .card .icon-wrap {
                width: 64px;
                height: 64px;
                font-size: 1.8rem;
            }
            .card h3 {
                font-size: 1.1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .main-header {
                height: 170px;
            }
            .header-content h1 {
                font-size: 1.9rem;
            }
            .header-content p {
                font-size: 0.8rem;
                letter-spacing: 1px;
            }
            .about-section {
                padding: 40px 0 30px;
            }
            .about-text h2 {
                font-size: 1.8rem;
            }
            .about-text p {
                font-size: 0.95rem;
            }
            .about-text .features-list {
                flex-direction: column;
                gap: 10px;
            }
            .about-image img {
                height: 200px;
            }
            .why-section {
                padding: 40px 0 50px;
            }
            .section-title h2 {
                font-size: 1.8rem;
            }
            .section-title p {
                font-size: 0.95rem;
            }
            .cards-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            .card {
                padding: 22px 16px 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .card .icon-wrap {
                width: 58px;
                height: 58px;
                font-size: 1.6rem;
            }
            .card h3 {
                font-size: 1.05rem;
            }
            .card p {
                font-size: 0.9rem;
            }
            .container {
                padding: 0 16px;
            }
        }

        @media screen and (max-width: 360px) {
            .header-content h1 {
                font-size: 1.6rem;
            }
            .header-content p {
                font-size: 0.7rem;
            }
            .about-text h2 {
                font-size: 1.5rem;
            }
        }

        /* ---------- UTILITY ---------- */
        .fade-hover {
            transition: opacity 0.35s ease, transform 0.35s ease;
        }
        .fade-hover:hover {
            opacity: 0.85;
            transform: scale(0.98);
        }

        /* card icon micro-interaction */
        .card .icon-wrap i {
            transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .card:hover .icon-wrap i {
            transform: scale(1.2) rotate(6deg);
        }

        .decor-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #f39c12;
            margin-right: 6px;
        }

        /* ---------- SCROLL-TRIGGER REVEAL (Intersection Observer) ---------- */
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-60px);
            transition: opacity 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(60px);
            transition: opacity 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.85);
            transition: opacity 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94),
                transform 0.9s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal-scale.visible {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- ===== HEADER ===== -->
    <header class="main-header">
        <div class="header-content animate fadeInDown one">
            <h1>
                <span>Tripinest</span>
            </h1>
            <p>Explore • Dream • Discover</p>
        </div>
    </header>

    <!-- ===== ABOUT SECTION ===== -->
    <section class="about-section anchor-offset" id="about">
        <div class="container">
            <div class="about-wrapper">
                <!-- Left: Text -->
                <div class="about-text reveal-left">
                    <span class="badge animate fadeIn two"><i class="fas fa-compass" style="margin-right:6px;"></i> since 2018</span>
                    <h2 class="animate fadeInUp three">
                        Your Gateway to <br /><span>Extraordinary</span> Travel
                    </h2>
                    <p class="animate fadeInUp four">
                        Also, we are a Travel facilitators offering customized nature nature stay and vacation plan letting our travellers to have a great holiday takeaway!! A must try for solace & nature loving Travellers!!
                    </p>
                    <ul class="features-list">
                        <li class="animate fadeInLeft five"><i class="fas fa-globe-americas bounce-icon"></i> 120+ destinations</li>
                        <li class="animate fadeInLeft six"><i class="fas fa-user-tie bounce-icon"></i> Expert local guides</li>
                        <li class="animate fadeInLeft seven"><i class="fas fa-shield-alt bounce-icon"></i> 24/7 support</li>
                        <li class="animate fadeInLeft eight"><i class="fas fa-heart bounce-icon" style="color:#e74c3c;"></i> 100% carbon offset</li>
                    </ul>
                </div>

                <!-- Right: Image -->
                <div class="about-image reveal-right">
                    <img
                    src="image/Darjeeling-toy-train-route.webp"
                    alt="Travel adventure"
                    loading="lazy"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US (6 cards) ===== -->
    <section class="why-section anchor-offset" id="why">
        <div class="container">
            <div class="section-title reveal">
                <h2 class="animate fadeInUp one">Why <span>Tripinest</span> ?</h2>
                <p class="animate fadeInUp two">We don't just plan trips — we craft memories. Here's why travelers love us.</p>
            </div>

            <div class="cards-grid">
                <!-- Card 1 -->
                <div class="card animate fadeInUp one reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-map-marked-alt bounce-icon"></i>
                    </div>
                    <h3>Curated Routes</h3>
                    <p>Hand-picked itineraries that blend iconic sights with hidden local gems.</p>
                </div>

                <!-- Card 2 -->
                <div class="card animate fadeInUp two reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-hotel bounce-icon"></i>
                    </div>
                    <h3>Premium Stays</h3>
                    <p>From boutique hotels to eco-lodges — comfort meets authenticity.</p>
                </div>

                <!-- Card 3 -->
                <div class="card animate fadeInUp three reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-utensils bounce-icon"></i>
                    </div>
                    <h3>Food Journeys</h3>
                    <p>Savory street food tours and farm-to-table dining experiences.</p>
                </div>

                <!-- Card 4 -->
                <div class="card animate fadeInUp four reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-hiking bounce-icon"></i>
                    </div>
                    <h3>Active Adventures</h3>
                    <p>Trekking, kayaking, safari — for souls that crave the wild.</p>
                </div>

                <!-- Card 5 -->
                <div class="card animate fadeInUp five reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-camera-retro bounce-icon"></i>
                    </div>
                    <h3>Photo Moments</h3>
                    <p>Golden-hour shoots and Instagram-worthy stops at every turn.</p>
                </div>

                <!-- Card 6 -->
                <div class="card animate fadeInUp six reveal-scale">
                    <div class="icon-wrap">
                        <i class="fas fa-hand-holding-heart bounce-icon"></i>
                    </div>
                    <h3>Responsible Travel</h3>
                    <p>Eco-conscious practices that protect the places we cherish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <?php include 'footer.php'; ?>

    <!-- ===== SCROLL REVEAL SCRIPT (Intersection Observer) ===== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Optionally unobserve after reveal for performance
                        // observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            revealElements.forEach(el => observer.observe(el));

            // Also ensure that any .animate elements that are already visible get their animations
            // (they already have animation classes, so they'll play on load)
        });
    </script>

</body>
</html>