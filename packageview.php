<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour Package - Wanderlust</title>

    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

    <style>
        /* ───────────── RESET & BASE ───────────── */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fc;
            color: #1e2a3a;
            line-height: 1.6;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ───────────── HEADER (250px) ───────────── */
        .main-header {
            height: 250px;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.30)),
                url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1400&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            border-radius: 0 0 32px 32px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .main-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #f97316, #fbbf24, #f97316);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%,
            100% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 100% 0%;
            }
        }

        .header-content {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .header-content .badge {
            display: inline-block;
            background: rgba(249, 115, 22, 0.9);
            color: #fff;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 4px 18px;
            border-radius: 50px;
            margin-bottom: 10px;
        }

        .header-content h1 {
            font-size: 2.6rem;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            letter-spacing: -0.5px;
        }

        .header-content .sub-head {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            font-size: 1rem;
            margin-top: 4px;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .header-content .sub-head .home-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: #fff;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(6px);
            padding: 4px 16px 4px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 400;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.10);
        }

        .header-content .sub-head .home-link i {
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .header-content .sub-head .home-link:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .header-content .sub-head .home-link:hover i {
            transform: translateY(-2px) scale(1.1);
            animation: bounce-icon 0.8s ease-in-out infinite;
        }

        @keyframes bounce-icon {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-4px);
            }
        }

        /* ───────────── TOUR INFO BANNER ───────────── */
        .tour-info-banner {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 24px 48px;
            background: #fff;
            padding: 18px 32px;
            border-radius: 60px;
            margin: -30px auto 30px;
            max-width: 780px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(249, 115, 22, 0.15);
            position: relative;
            z-index: 5;
        }

        .tour-info-banner .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #1e2a3a;
        }

        .tour-info-banner .info-item i {
            color: #f97316;
            font-size: 1.1rem;
            width: 22px;
            text-align: center;
            animation: bounce-icon 2s ease-in-out infinite;
        }

        .tour-info-banner .info-item:nth-child(2) i {
            animation-delay: 0.3s;
        }
        .tour-info-banner .info-item:nth-child(3) i {
            animation-delay: 0.6s;
        }

        .tour-info-banner .info-item strong {
            font-weight: 700;
            color: #0b1a2b;
        }

        /* ───────────── MAIN FLEX: Description + Image ───────────── */
        .main-flex {
            display: flex;
            gap: 40px;
            align-items: stretch;
            margin: 20px 0 50px;
        }

        .main-flex .desc-box {
            flex: 1.1;
            background: #fff;
            padding: 32px 36px;
            border-radius: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            border: 1px solid #eef2f7;
            transition: transform 0.3s ease;
        }

        .main-flex .desc-box:hover {
            transform: translateY(-4px);
        }

        .main-flex .desc-box h2 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 14px;
            color: #0b1a2b;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .main-flex .desc-box h2 i {
            color: #f97316;
            font-size: 1.4rem;
            animation: bounce-icon 2.4s ease-in-out infinite;
        }

        .main-flex .desc-box p {
            color: #3d4e62;
            font-weight: 400;
            font-size: 0.98rem;
            line-height: 1.8;
        }

        .main-flex .desc-box .highlight-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px 20px;
            margin-top: 16px;
            list-style: none;
        }

        .main-flex .desc-box .highlight-list li {
            font-size: 0.9rem;
            color: #1e2a3a;
            font-weight: 500;
        }

        .main-flex .desc-box .highlight-list li i {
            color: #f97316;
            margin-right: 8px;
            animation: bounce-icon 2.8s ease-in-out infinite;
        }

        .main-flex .image-box {
            flex: 1;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            border: 1px solid #eef2f7;
            min-height: 240px;
            background: #dce3ed;
            transition: transform 0.3s ease;
        }

        .main-flex .image-box:hover {
            transform: scale(1.01);
        }

        .main-flex .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* ───────────── ITINERARY DAY-WISE (No Accordion) ───────────── */
        .itinerary-booking-flex {
            display: flex;
            gap: 40px;
            margin: 50px 0 60px;
            align-items: stretch;
        }

        .itinerary-box {
            flex: 1.3;
            background: #fff;
            border-radius: 24px;
            padding: 28px 30px 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            border: 1px solid #eef2f7;
        }

        .itinerary-box h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: #0b1a2b;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .itinerary-box h2 i {
            color: #f97316;
            animation: bounce-icon 2.2s ease-in-out infinite;
        }

        /* ─── Day Cards ─── */
        .day-card {
            display: flex;
            gap: 16px;
            padding: 18px 16px;
            border-radius: 16px;
            background: #fafbfc;
            border: 1px solid #eef2f7;
            margin-bottom: 14px;
            transition: all 0.3s ease;
            opacity: 0;
            /* will be animated in */;
        }

        .day-card:last-child {
            margin-bottom: 0;
        }

        .day-card:hover {
            transform: translateX(6px);
            border-color: #f97316;
            box-shadow: 0 4px 16px rgba(249, 115, 22, 0.08);
            background: #fff;
        }

        .day-card .day-number {
            flex-shrink: 0;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f97316, #fb923c);
            color: #fff;
            font-weight: 700;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.25);
            transition: transform 0.3s ease;
        }

        .day-card:hover .day-number {
            transform: scale(1.08) rotate(-4deg);
        }

        .day-card .day-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .day-card .day-content .day-title {
            font-weight: 700;
            font-size: 1rem;
            color: #0b1a2b;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .day-card .day-content .day-title i {
            color: #f97316;
            font-size: 0.85rem;
            opacity: 0.7;
        }

        .day-card .day-content .day-desc {
            font-size: 0.9rem;
            color: #3d4e62;
            line-height: 1.6;
            margin-top: 2px;
        }

        /* Animation classes for day cards */
        .day-card.animate-fadeInUp {
            animation: fadeInUp 0.7s ease forwards;
        }

        .day-card.animate-fadeInDown {
            animation: fadeInDown 0.7s ease forwards;
        }

        .day-card.animate-fadeInLeft {
            animation: fadeInLeft 0.7s ease forwards;
        }

        .day-card.animate-fadeInRight {
            animation: fadeInRight 0.7s ease forwards;
        }

        .day-card.animate-fadeIn {
            animation: fadeIn 0.7s ease forwards;
        }

        /* delays */
        .day-card.delay-1 {
            animation-delay: 0.1s;
        }
        .day-card.delay-2 {
            animation-delay: 0.25s;
        }
        .day-card.delay-3 {
            animation-delay: 0.4s;
        }
        .day-card.delay-4 {
            animation-delay: 0.55s;
        }
        .day-card.delay-5 {
            animation-delay: 0.7s;
        }

        /* ─── BOOKING FORM ─── */
        .booking-box {
            flex: 1;
            background: #fff;
            border-radius: 24px;
            padding: 28px 30px 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            border: 1px solid #eef2f7;
            display: flex;
            flex-direction: column;
        }

        .booking-box h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #0b1a2b;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .booking-box h2 i {
            color: #f97316;
            animation: bounce-icon 2.6s ease-in-out infinite;
        }

        .booking-box .form-group {
            margin-bottom: 16px;
        }

        .booking-box .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.85rem;
            color: #1e2a3a;
            margin-bottom: 4px;
        }

        .booking-box .form-group label i {
            color: #f97316;
            margin-right: 6px;
            width: 18px;
        }

        .booking-box .form-group input,
        .booking-box .form-group select,
        .booking-box .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #eef2f7;
            border-radius: 14px;
            font-family: 'Poppins', sans-serif;
            font-size: 0.9rem;
            transition: border 0.3s, box-shadow 0.3s;
            background: #fafbfc;
            color: #1e2a3a;
        }

        .booking-box .form-group input:focus,
        .booking-box .form-group select:focus,
        .booking-box .form-group textarea:focus {
            outline: none;
            border-color: #f97316;
            box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.10);
            background: #fff;
        }

        .booking-box .form-group textarea {
            resize: vertical;
            min-height: 70px;
        }

        .booking-box .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            background: #25D366;
            color: #fff;
            font-weight: 700;
            font-size: 1rem;
            padding: 14px 20px;
            border: none;
            border-radius: 60px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 6px;
            font-family: 'Poppins', sans-serif;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.30);
        }

        .booking-box .btn-whatsapp:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: 0 8px 28px rgba(37, 211, 102, 0.40);
            background: #20b85c;
        }

        .booking-box .btn-whatsapp i {
            font-size: 1.3rem;
            animation: bounce-icon 2s ease-in-out infinite;
        }

        /* ───────────── ACTIVITIES ───────────── */
        .activities-section {
            margin: 60px 0 50px;
            text-align: center;
        }

        .activities-section h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0b1a2b;
            margin-bottom: 8px;
        }

        .activities-section .sub {
            color: #6a7b8c;
            font-weight: 400;
            margin-bottom: 32px;
        }

        .activities-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px 50px;
        }

        .activity-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: #1e2a3a;
            font-size: 0.95rem;
        }

        .activity-item .icon-wrap {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            color: #f97316;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            border: 2px solid #fef3e8;
            transition: all 0.3s ease;
            animation: bounce 2.4s ease-in-out infinite;
        }

        .activity-item .icon-wrap i {
            transition: transform 0.3s ease;
        }

        .activity-item:hover .icon-wrap {
            background: #f97316;
            border-color: #f97316;
            transform: scale(1.08);
        }

        .activity-item:hover .icon-wrap i {
            color: #fff;
            transform: scale(1.1);
        }

        .activity-item:nth-child(1) .icon-wrap {
            animation-delay: 0s;
        }
        .activity-item:nth-child(2) .icon-wrap {
            animation-delay: 0.3s;
        }
        .activity-item:nth-child(3) .icon-wrap {
            animation-delay: 0.6s;
        }
        .activity-item:nth-child(4) .icon-wrap {
            animation-delay: 0.9s;
        }
        .activity-item:nth-child(5) .icon-wrap {
            animation-delay: 1.2s;
        }
        .activity-item:nth-child(6) .icon-wrap {
            animation-delay: 1.5s;
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-12px);
            }
        }

        /* ═══════════════════════════════════════════════
           TESTIMONIALS — SLIDER VERSION
           ═══════════════════════════════════════════════ */
        .testimonials-section {
            margin: 50px 0 60px;
            background: #fff;
            border-radius: 32px;
            padding: 40px 30px 48px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
            border: 1px solid #eef2f7;
            text-align: center;
        }

        .testimonials-section h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #0b1a2b;
            margin-bottom: 4px;
        }

        .testimonials-section .sub {
            color: #6a7b8c;
            margin-bottom: 6px;
        }

        /* ── LIVE USER COUNTER ── */
        .live-counter {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: #fef3e8;
            border: 2px solid #f97316;
            padding: 10px 28px;
            border-radius: 60px;
            margin: 8px auto 32px;
            font-size: 1.05rem;
            font-weight: 600;
            color: #1e2a3a;
            box-shadow: 0 4px 16px rgba(249, 115, 22, 0.12);
            animation: pulse-glow 2.4s ease-in-out infinite;
        }

        @keyframes pulse-glow {
            0%,
            100% {
                box-shadow: 0 4px 16px rgba(249, 115, 22, 0.12);
            }
            50% {
                box-shadow: 0 4px 28px rgba(249, 115, 22, 0.25);
            }
        }

        .live-counter .counter-icon {
            font-size: 1.4rem;
            color: #f97316;
            animation: bounce-dot 1.6s ease-in-out infinite;
        }

        @keyframes bounce-dot {
            0%,
            100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.25);
            }
        }

        .live-counter .counter-number {
            font-size: 1.6rem;
            font-weight: 800;
            color: #f97316;
            min-width: 48px;
            display: inline-block;
            text-align: center;
            font-variant-numeric: tabular-nums;
        }

        .live-counter .counter-label {
            font-weight: 400;
            color: #3d4e62;
        }

        /* ── SLIDER WRAPPER ── */
        .slider-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            margin-top: 12px;
            padding: 0 8px;
        }

        .slider-track {
            display: flex;
            gap: 24px;
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform;
        }

        .slider-card {
            flex: 0 0 calc((100% - 48px) / 3);
            background: #fafbfc;
            border-radius: 20px;
            padding: 24px 20px 22px;
            border: 1px solid #eef2f7;
            text-align: left;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .slider-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.06);
            border-color: #f97316;
        }

        .slider-card .stars {
            color: #fbbf24;
            font-size: 0.95rem;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .slider-card blockquote {
            font-size: 0.92rem;
            font-weight: 400;
            color: #2d3f52;
            line-height: 1.7;
            font-style: italic;
            margin-bottom: 14px;
        }

        .slider-card .author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .slider-card .author .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #f97316;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .slider-card .author .name {
            font-weight: 600;
            color: #0b1a2b;
            font-size: 0.9rem;
        }

        .slider-card .author .role {
            font-size: 0.75rem;
            color: #8a9aa8;
        }

        /* ── SLIDER CONTROLS ── */
        .slider-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-top: 28px;
            flex-wrap: wrap;
        }

        .slider-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 2px solid #eef2f7;
            background: #fff;
            color: #1e2a3a;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .slider-btn:hover {
            background: #f97316;
            border-color: #f97316;
            color: #fff;
            transform: scale(1.06);
            box-shadow: 0 4px 16px rgba(249, 115, 22, 0.25);
        }

        .slider-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }

        .slider-btn:disabled:hover {
            background: #fff;
            border-color: #eef2f7;
            color: #1e2a3a;
        }

        .slider-dots {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: none;
            background: #dce3ed;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0;
        }

        .slider-dot.active {
            background: #f97316;
            transform: scale(1.2);
            box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.15);
        }

        .slider-dot:hover:not(.active) {
            background: #b8c4d4;
        }

        /* ═══════════════════════════════════════════════
           ANIMATIONS (from user's code)
           ═══════════════════════════════════════════════ */
        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 40px, 0);
                transform: translate3d(0, 40px, 0);
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
                -webkit-transform: translate3d(0, 40px, 0);
                transform: translate3d(0, 40px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -40px, 0);
                transform: translate3d(0, -40px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -40px, 0);
                transform: translate3d(0, -40px, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-40px, 0, 0);
                transform: translate3d(-40px, 0, 0);
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
                -webkit-transform: translate3d(-40px, 0, 0);
                transform: translate3d(-40px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(40px, 0, 0);
                transform: translate3d(40px, 0, 0);
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
                -webkit-transform: translate3d(40px, 0, 0);
                transform: translate3d(40px, 0, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

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

        /* ────────────────────────────────────────────────────────────
           RESPONSIVE
           ──────────────────────────────────────────────────────────── */
        @media (max-width: 1024px) {
            .main-flex {
                gap: 28px;
            }
            .itinerary-booking-flex {
                gap: 28px;
            }
            .tour-info-banner {
                gap: 16px 30px;
                padding: 16px 24px;
                border-radius: 40px;
                max-width: 92%;
            }

            .slider-card {
                flex: 0 0 calc((100% - 24px) / 2);
            }
        }

        @media (max-width: 820px) {
            .main-flex {
                flex-direction: column;
            }
            .main-flex .image-box {
                min-height: 200px;
                max-height: 320px;
            }
            .itinerary-booking-flex {
                flex-direction: column;
            }
            .header-content h1 {
                font-size: 2rem;
            }
            .tour-info-banner {
                flex-wrap: wrap;
                gap: 12px 24px;
                padding: 14px 20px;
                border-radius: 32px;
                margin-top: -24px;
            }
            .tour-info-banner .info-item {
                font-size: 0.8rem;
            }

            .slider-card {
                flex: 0 0 calc((100% - 24px) / 2);
            }

            .header-content .sub-head .home-link {
                font-size: 0.7rem;
                padding: 3px 12px 3px 10px;
            }
        }

        @media (max-width: 600px) {
            .main-header {
                height: 200px;
                border-radius: 0 0 20px 20px;
            }
            .header-content h1 {
                font-size: 1.5rem;
            }
            .header-content .badge {
                font-size: 0.6rem;
                padding: 3px 14px;
            }
            .header-content .sub-head {
                font-size: 0.8rem;
                gap: 8px;
            }
            .header-content .sub-head .home-link {
                font-size: 0.65rem;
                padding: 2px 10px 2px 8px;
            }
            .header-content .sub-head .home-link i {
                font-size: 0.75rem;
            }

            .tour-info-banner {
                flex-direction: column;
                align-items: center;
                gap: 6px;
                padding: 14px 18px;
                border-radius: 24px;
                max-width: 96%;
                margin-top: -18px;
            }
            .tour-info-banner .info-item {
                font-size: 0.75rem;
            }

            .main-flex .desc-box {
                padding: 22px 18px;
            }
            .main-flex .desc-box h2 {
                font-size: 1.3rem;
            }
            .main-flex .desc-box p {
                font-size: 0.9rem;
            }

            .itinerary-box,
            .booking-box {
                padding: 20px 16px 24px;
            }
            .itinerary-box h2,
            .booking-box h2 {
                font-size: 1.2rem;
            }

            /* Day cards mobile */
            .day-card {
                padding: 14px 12px;
                gap: 12px;
            }
            .day-card .day-number {
                width: 40px;
                height: 40px;
                font-size: 0.75rem;
            }
            .day-card .day-content .day-title {
                font-size: 0.9rem;
            }
            .day-card .day-content .day-desc {
                font-size: 0.82rem;
            }

            .booking-box .form-group input,
            .booking-box .form-group select,
            .booking-box .form-group textarea {
                padding: 10px 14px;
                font-size: 0.85rem;
            }
            .booking-box .btn-whatsapp {
                font-size: 0.9rem;
                padding: 12px 16px;
            }

            .activities-grid {
                gap: 20px 30px;
            }
            .activity-item .icon-wrap {
                width: 64px;
                height: 64px;
                font-size: 1.6rem;
            }
            .activity-item {
                font-size: 0.8rem;
            }

            .testimonials-section {
                padding: 28px 16px 34px;
            }
            .testimonials-section h2 {
                font-size: 1.4rem;
            }

            .live-counter {
                font-size: 0.85rem;
                padding: 8px 18px;
                gap: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .live-counter .counter-number {
                font-size: 1.3rem;
                min-width: 36px;
            }
            .live-counter .counter-icon {
                font-size: 1.1rem;
            }

            .slider-card {
                flex: 0 0 100%;
            }

            .slider-card blockquote {
                font-size: 0.85rem;
            }
            .slider-card .stars {
                font-size: 0.85rem;
            }
            .slider-card .author .avatar {
                width: 38px;
                height: 38px;
                font-size: 0.85rem;
            }
            .slider-card .author .name {
                font-size: 0.85rem;
            }
            .slider-card .author .role {
                font-size: 0.7rem;
            }

            .slider-btn {
                width: 38px;
                height: 38px;
                font-size: 0.85rem;
            }
            .slider-dot {
                width: 10px;
                height: 10px;
            }
            .slider-controls {
                gap: 14px;
                margin-top: 20px;
            }
        }

        @media (max-width: 440px) {
            .main-header {
                height: 170px;
            }
            .header-content h1 {
                font-size: 1.2rem;
            }
            .header-content .badge {
                font-size: 0.5rem;
                padding: 2px 10px;
            }
            .header-content .sub-head {
                font-size: 0.7rem;
                gap: 6px;
            }
            .header-content .sub-head .home-link {
                font-size: 0.55rem;
                padding: 2px 8px 2px 6px;
                gap: 4px;
            }
            .header-content .sub-head .home-link i {
                font-size: 0.65rem;
            }

            .tour-info-banner .info-item {
                font-size: 0.7rem;
            }
            .tour-info-banner .info-item i {
                font-size: 0.9rem;
                width: 18px;
            }
            .main-flex .desc-box h2 {
                font-size: 1.1rem;
            }
            .main-flex .desc-box {
                padding: 16px 14px;
            }
            .itinerary-box,
            .booking-box {
                padding: 16px 12px 20px;
            }

            .day-card {
                padding: 12px 10px;
                gap: 10px;
            }
            .day-card .day-number {
                width: 34px;
                height: 34px;
                font-size: 0.7rem;
            }
            .day-card .day-content .day-title {
                font-size: 0.82rem;
            }
            .day-card .day-content .day-desc {
                font-size: 0.75rem;
            }

            .activities-grid {
                gap: 14px 18px;
            }
            .activity-item .icon-wrap {
                width: 52px;
                height: 52px;
                font-size: 1.3rem;
            }
            .live-counter {
                font-size: 0.75rem;
                padding: 6px 14px;
            }
            .live-counter .counter-number {
                font-size: 1.1rem;
                min-width: 30px;
            }

            .slider-card {
                padding: 16px 14px 18px;
            }
            .slider-card blockquote {
                font-size: 0.8rem;
            }
        }

        /* extra small tweaks */
        @media (max-width: 360px) {
            .header-content h1 {
                font-size: 1rem;
            }
            .header-content .sub-head {
                font-size: 0.65rem;
            }
            .day-card .day-content .day-title {
                font-size: 0.75rem;
            }
            .day-card .day-content .day-desc {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>

    <!-- ═══════════════ HEADER (250px) ═══════════════ -->
    <header class="main-header">
        <div class="header-content">
            <span class="badge"><i class="fas fa-star" style="margin-right:4px;"></i> Featured Tour</span>
            <h1>✨ Kerala Backwater Escape</h1>
            <p class="sub-head">
                🌴 5 Days · 4 Nights · Nature &amp; Culture
                <a href="#" class="home-link" onclick="event.preventDefault(); window.location.href='/'">
                    <i class="fas fa-home"></i> Home
                </a>
            </p>
        </div>
    </header>

    <div class="container">

        <!-- ═══════════════ TOUR INFO BANNER ═══════════════ -->
        <div class="tour-info-banner">
            <span class="info-item"><i class="fas fa-tag"></i> <strong>Price (₹):</strong> ₹24,999</span>
            <span class="info-item"><i class="fas fa-calendar-alt"></i> <strong>Duration (days):</strong> 5</span>
            <span class="info-item"><i class="fas fa-map-pin"></i> <strong>Location:</strong> Kerala, India</span>
        </div>

        <!-- ═══════════════ MAIN FLEX: Description + Image ═══════════════ -->
        <div class="main-flex">
            <div class="desc-box">
                <h2><i class="fas fa-align-left"></i> Description</h2>
                <p>
                    Embark on a soulful journey through the serene backwaters, lush hill stations,
                    and vibrant culture of Kerala — God's Own Country. This 5-day escape takes you
                    from the houseboats of Alleppey to the spice-scented hills of Munnar.
                </p>
                <ul class="highlight-list">
                    <li><i class="fas fa-check-circle"></i> Houseboat stay with meals</li>
                    <li><i class="fas fa-check-circle"></i> Tea plantation trek</li>
                    <li><i class="fas fa-check-circle"></i> Kathakali performance</li>
                    <li><i class="fas fa-check-circle"></i> Ayurveda spa session</li>
                </ul>
            </div>
            <div class="image-box">
                <img src="https://images.unsplash.com/photo-1593693397690-362cb9666fc2?w=800&q=80" alt="Kerala Backwater" loading="lazy" />
            </div>
        </div>

        <!-- ═══════════════ ITINERARY (DAY-WISE) + BOOKING ═══════════════ -->
        <div class="itinerary-booking-flex">

            <!-- ─── ITINERARY DAY-WISE (No Accordion) ─── -->
            <div class="itinerary-box">
                <h2><i class="fas fa-route"></i> Itinerary</h2>

                <!-- Day 1 -->
                <div class="day-card animate-fadeInUp delay-1" id="day1">
                    <div class="day-number">1</div>
                    <div class="day-content">
                        <div class="day-title"><i class="fas fa-ship"></i> Arrival &amp; Houseboat</div>
                        <div class="day-desc">Arrive at Cochin, drive to Alleppey. Board a traditional houseboat and glide through the palm-fringed backwaters. Overnight stay on the houseboat.</div>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="day-card animate-fadeInUp delay-2" id="day2">
                    <div class="day-number">2</div>
                    <div class="day-content">
                        <div class="day-title"><i class="fas fa-mountain"></i> Munnar Hills</div>
                        <div class="day-desc">Drive to Munnar (4 hrs). En route, visit waterfalls and spice gardens. Check in to a hill-view resort. Evening walk through tea plantations.</div>
                    </div>
                </div>

                <!-- Day 3 -->
                <div class="day-card animate-fadeInUp delay-3" id="day3">
                    <div class="day-number">3</div>
                    <div class="day-content">
                        <div class="day-title"><i class="fas fa-leaf"></i> Tea Museum &amp; Eravikulam</div>
                        <div class="day-desc">Visit the Tea Museum to learn about tea processing. Afternoon safari at Eravikulam National Park — spot the endangered Nilgiri Tahr.</div>
                    </div>
                </div>

                <!-- Day 4 -->
                <div class="day-card animate-fadeInUp delay-4" id="day4">
                    <div class="day-number">4</div>
                    <div class="day-content">
                        <div class="day-title"><i class="fas fa-tree"></i> Thekkady &amp; Spice Tour</div>
                        <div class="day-desc">Drive to Thekkady. Explore the Periyar Wildlife Sanctuary by boat. Evening spice plantation walk and a Kathakali dance performance.</div>
                    </div>
                </div>

                <!-- Day 5 -->
                <div class="day-card animate-fadeInUp delay-5" id="day5">
                    <div class="day-number">5</div>
                    <div class="day-content">
                        <div class="day-title"><i class="fas fa-spa"></i> Departure</div>
                        <div class="day-desc">Morning Ayurveda spa session. Transfer to Cochin airport / railway station with wonderful memories.</div>
                    </div>
                </div>

            </div>

            <!-- ─── BOOKING FORM ─── -->
            <div class="booking-box">
                <h2><i class="fas fa-book-open"></i> Book Now</h2>

                <form id="bookingForm">
                    <div class="form-group">
                        <label><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" id="fullName" placeholder="e.g. Rahul Sharma" required />
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-phone"></i> Phone Number</label>
                        <input type="tel" id="phone" placeholder="+91 98765 43210" required />
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-calendar-check"></i> Travel Date</label>
                        <input type="date" id="travelDate" required />
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-users"></i> Travelers</label>
                        <select id="travelers">
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-comment"></i> Special Requests</label>
                        <textarea id="requests" placeholder="Any dietary needs, room preferences..."></textarea>
                    </div>

                    <button type="button" class="btn-whatsapp" onclick="sendWhatsApp()">
                        <i class="fab fa-whatsapp"></i> Send Booking via WhatsApp
                    </button>
                </form>
            </div>
        </div>

        <!-- ═══════════════ ACTIVITIES ═══════════════ -->
        <section class="activities-section">
            <h2>🏄 Activities &amp; Experiences</h2>
            <p class="sub">What makes this tour extraordinary</p>
            <div class="activities-grid">
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-ship"></i></div>
                    <span>Houseboat Cruise</span>
                </div>
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-mountain"></i></div>
                    <span>Tea Trek</span>
                </div>
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-spa"></i></div>
                    <span>Ayurveda Spa</span>
                </div>
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-paw"></i></div>
                    <span>Wildlife Safari</span>
                </div>
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-drum"></i></div>
                    <span>Kathakali Show</span>
                </div>
                <div class="activity-item">
                    <div class="icon-wrap"><i class="fas fa-utensils"></i></div>
                    <span>Local Cuisine</span>
                </div>
            </div>
        </section>

        <!-- ═══════════════ TESTIMONIALS — SLIDER ═══════════════ -->
        <section class="testimonials-section">
            <h2>❤️ What Travelers Say</h2>
            <p class="sub">Real reviews from our guests</p>

            <div class="live-counter">
                <span class="counter-icon"><i class="fas fa-circle"></i></span>
                <span class="counter-label">👀</span>
                <span class="counter-number" id="liveCount">0</span>
                <span class="counter-label">people are viewing this tour right now</span>
            </div>

            <div class="slider-wrapper" id="testimonialSlider">
                <div class="slider-track" id="sliderTrack">

                    <div class="slider-card">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <blockquote>“An absolutely magical experience! The houseboat stay was the highlight. Every detail was perfectly arranged.”</blockquote>
                        <div class="author">
                            <div class="avatar">SM</div>
                            <div>
                                <div class="name">Sunita Mehta</div>
                                <div class="role">Mumbai, India</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <blockquote>“Munnar's tea gardens are breathtaking. The guide was knowledgeable and the pace was just right. Highly recommend!”</blockquote>
                        <div class="author">
                            <div class="avatar">JR</div>
                            <div>
                                <div class="name">James Rodriguez</div>
                                <div class="role">London, UK</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <blockquote>“From the backwaters to the hills, Kerala is a dream. The food, the people, the culture — everything was flawless.”</blockquote>
                        <div class="author">
                            <div class="avatar">PL</div>
                            <div>
                                <div class="name">Priya Lakshmi</div>
                                <div class="role">Singapore</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <blockquote>“Excellent value for money. The Kathakali show and spice tour were unique experiences we'll never forget.”</blockquote>
                        <div class="author">
                            <div class="avatar">AK</div>
                            <div>
                                <div class="name">Amit Kumar</div>
                                <div class="role">Delhi, India</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-card">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <blockquote>“The Ayurveda spa and the houseboat cruise were the best parts. Already planning to come back with my family!”</blockquote>
                        <div class="author">
                            <div class="avatar">SN</div>
                            <div>
                                <div class="name">Sarah Nguyen</div>
                                <div class="role">Sydney, Australia</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slider-controls">
                <button class="slider-btn" id="prevBtn" aria-label="Previous">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div class="slider-dots" id="sliderDots"></div>
                <button class="slider-btn" id="nextBtn" aria-label="Next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

        </section>

    </div>
    <!-- end container -->

    <!-- ═══════════════ JAVASCRIPT ═══════════════ -->
    <script>
        // ─── WHATSAPP BOOKING ───
        function sendWhatsApp() {
            const name = document.getElementById('fullName').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const date = document.getElementById('travelDate').value;
            const travelers = document.getElementById('travelers').value;
            const requests = document.getElementById('requests').value.trim();

            if (!name || !phone || !date) {
                alert('⚠️ Please fill in Name, Phone, and Travel Date.');
                return;
            }
            if (phone.length < 10) {
                alert('⚠️ Please enter a valid phone number.');
                return;
            }

            const message =
                `🛖 *Kerala Backwater Escape Booking*%0A` +
                `👤 Name: ${encodeURIComponent(name)}%0A` +
                `📞 Phone: ${encodeURIComponent(phone)}%0A` +
                `📅 Travel Date: ${encodeURIComponent(date)}%0A` +
                `🧑‍🤝‍🧑 Travelers: ${encodeURIComponent(travelers)}%0A` +
                `📝 Requests: ${encodeURIComponent(requests || 'None')}`;

            const url = `https://wa.me/919999999999?text=${message}`;
            window.open(url, '_blank');
        }

        // ─── LIVE USER COUNTER ───
        const liveCountEl = document.getElementById('liveCount');
        let currentCount = 0;
        const targetBase = 18;
        let target = targetBase;
        let counterInterval;

        function updateCounter() {
            const variation = Math.floor(Math.random() * 25) - 6;
            target = Math.max(8, targetBase + variation);

            const start = currentCount;
            const end = target;
            const duration = 1200;
            const startTime = performance.now();

            function animateStep(now) {
                const elapsed = now - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                const value = Math.round(start + (end - start) * eased);
                liveCountEl.textContent = value;
                currentCount = value;

                if (progress < 1) {
                    requestAnimationFrame(animateStep);
                } else {
                    liveCountEl.textContent = end;
                    currentCount = end;
                    clearTimeout(counterInterval);
                    counterInterval = setTimeout(() => {
                        updateCounter();
                    }, 3000 + Math.random() * 2500);
                }
            }
            requestAnimationFrame(animateStep);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('travelDate');
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate() + 3).padStart(2, '0');
            dateInput.value = `${yyyy}-${mm}-${dd}`;

            currentCount = 12 + Math.floor(Math.random() * 10);
            liveCountEl.textContent = currentCount;
            setTimeout(() => {
                updateCounter();
            }, 800);

            initSlider();

            // ─── Re-run animations on scroll (Intersection Observer) ───
            const dayCards = document.querySelectorAll('.day-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const card = entry.target;
                        // Re-trigger animation by removing and re-adding class
                        const animClass = Array.from(card.classList).find(c => c.startsWith('animate-'));
                        if (animClass) {
                            card.classList.remove(animClass);
                            // Force reflow
                            void card.offsetWidth;
                            card.classList.add(animClass);
                        }
                        observer.unobserve(card);
                    }
                });
            }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });

            dayCards.forEach(card => observer.observe(card));

            // ─── Home link: prevent default and redirect ───
            const homeLink = document.querySelector('.home-link');
            if (homeLink) {
                homeLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.location.href = '/';
                });
            }
        });

        // ═══════════════════════════════════════════════
        //  TESTIMONIAL SLIDER
        // ═══════════════════════════════════════════════
        function initSlider() {
            const track = document.getElementById('sliderTrack');
            const cards = track.querySelectorAll('.slider-card');
            const totalCards = cards.length;
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsContainer = document.getElementById('sliderDots');

            let currentSlide = 0;
            let cardsPerView = getCardsPerView();
            let slideWidth = 0;
            let gap = 24;
            let autoSlideTimer = null;
            let isHovering = false;

            function buildDots() {
                dotsContainer.innerHTML = '';
                const totalSlides = Math.max(1, totalCards - cardsPerView + 1);
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'slider-dot' + (i === 0 ? ' active' : '');
                    dot.setAttribute('data-index', i);
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }
            }

            function getCardsPerView() {
                const w = window.innerWidth;
                if (w < 600) return 1;
                if (w < 1024) return 2;
                return 3;
            }

            function calcSlideWidth() {
                const wrapper = document.getElementById('testimonialSlider');
                const wrapperWidth = wrapper.clientWidth;
                gap = 24;
                const totalGap = (cardsPerView - 1) * gap;
                slideWidth = (wrapperWidth - totalGap) / cardsPerView;
                return slideWidth + gap;
            }

            function updateSlider(animate = true) {
                const totalSlides = Math.max(1, totalCards - cardsPerView + 1);
                if (currentSlide >= totalSlides) {
                    currentSlide = totalSlides - 1;
                }
                if (currentSlide < 0) currentSlide = 0;

                const offset = currentSlide * (slideWidth + gap);
                track.style.transition = animate ? 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)' : 'none';
                track.style.transform = `translateX(-${offset}px)`;

                const dots = dotsContainer.querySelectorAll('.slider-dot');
                dots.forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === currentSlide);
                });

                prevBtn.disabled = currentSlide === 0;
                nextBtn.disabled = currentSlide >= totalSlides - 1;

                resetAutoSlide();
            }

            function goToSlide(index) {
                const totalSlides = Math.max(1, totalCards - cardsPerView + 1);
                if (index < 0) index = 0;
                if (index >= totalSlides) index = totalSlides - 1;
                if (index === currentSlide) return;
                currentSlide = index;
                updateSlider(true);
            }

            function nextSlide() {
                const totalSlides = Math.max(1, totalCards - cardsPerView + 1);
                if (currentSlide < totalSlides - 1) {
                    goToSlide(currentSlide + 1);
                }
            }

            function prevSlide() {
                if (currentSlide > 0) {
                    goToSlide(currentSlide - 1);
                }
            }

            function resetAutoSlide() {
                if (autoSlideTimer) {
                    clearInterval(autoSlideTimer);
                    autoSlideTimer = null;
                }
                if (!isHovering && totalCards > cardsPerView) {
                    autoSlideTimer = setInterval(() => {
                        const totalSlides = Math.max(1, totalCards - cardsPerView + 1);
                        if (currentSlide >= totalSlides - 1) {
                            goToSlide(0);
                        } else {
                            nextSlide();
                        }
                    }, 5000);
                }
            }

            let resizeTimeout = null;

            function handleResize() {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    const newCardsPerView = getCardsPerView();
                    if (newCardsPerView !== cardsPerView) {
                        cardsPerView = newCardsPerView;
                        currentSlide = 0;
                        buildDots();
                        calcSlideWidth();
                        updateSlider(false);
                    } else {
                        calcSlideWidth();
                        updateSlider(false);
                    }
                }, 200);
            }

            const sliderWrapper = document.getElementById('testimonialSlider');
            sliderWrapper.addEventListener('mouseenter', () => {
                isHovering = true;
                if (autoSlideTimer) {
                    clearInterval(autoSlideTimer);
                    autoSlideTimer = null;
                }
            });
            sliderWrapper.addEventListener('mouseleave', () => {
                isHovering = false;
                resetAutoSlide();
            });

            cardsPerView = getCardsPerView();
            buildDots();
            calcSlideWidth();
            updateSlider(false);

            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
            window.addEventListener('resize', handleResize);

            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });

            let touchStartX = 0;
            let touchEndX = 0;
            sliderWrapper.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });
            sliderWrapper.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 40) {
                    if (diff > 0) nextSlide();
                    else prevSlide();
                }
            }, { passive: true });

            window.__slider = {
                goToSlide,
                nextSlide,
                prevSlide,
                currentSlide: () => currentSlide,
                cardsPerView: () => cardsPerView,
            };
        }
    </script>

</body>
</html>