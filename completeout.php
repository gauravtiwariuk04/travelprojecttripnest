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

    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f5f0;
            color: #2d2d2d;
        }

        /* ===== ANIMATION LIBRARY (unchanged) ===== */
        @import url(https://fonts.googleapis.com/css?family=Raleway);

        .animate {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            opacity: 0;
        }

        .one { -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s; }
        .two { -webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s; }
        .three { -webkit-animation-delay: 0.9s; -moz-animation-delay: 0.9s; animation-delay: 0.9s; }
        .four { -webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s; }
        .five { -webkit-animation-delay: 1.5s; -moz-animation-delay: 1.5s; animation-delay: 1.5s; }
        .six { -webkit-animation-delay: 1.8s; -moz-animation-delay: 1.8s; animation-delay: 1.8s; }
        .seven { -webkit-animation-delay: 2.1s; -moz-animation-delay: 2.1s; animation-delay: 2.1s; }
        .eight { -webkit-animation-delay: 2.4s; -moz-animation-delay: 2.4s; animation-delay: 2.4s; }

        .animate.is-visible { opacity: 1; }

        @-webkit-keyframes fadeInUp {
            from { opacity: 0; -webkit-transform: translate3d(0, 100%, 0); transform: translate3d(0, 100%, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; -webkit-transform: translate3d(0, 100%, 0); transform: translate3d(0, 100%, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInUp { -webkit-animation-name: fadeInUp; animation-name: fadeInUp; }

        @-webkit-keyframes fadeInDown {
            0% { opacity: 0; -webkit-transform: translate3d(0, -100%, 0); transform: translate3d(0, -100%, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInDown {
            0% { opacity: 0; -webkit-transform: translate3d(0, -100%, 0); transform: translate3d(0, -100%, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInDown { -webkit-animation-name: fadeInDown; animation-name: fadeInDown; }

        @-webkit-keyframes fadeInLeft {
            from { opacity: 0; -webkit-transform: translate3d(-100%, 0, 0); transform: translate3d(-100%, 0, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; -webkit-transform: translate3d(-100%, 0, 0); transform: translate3d(-100%, 0, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInLeft { -webkit-animation-name: fadeInLeft; animation-name: fadeInLeft; }

        @-webkit-keyframes fadeInRight {
            from { opacity: 0; -webkit-transform: translate3d(100%, 0, 0); transform: translate3d(100%, 0, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInRight {
            from { opacity: 0; -webkit-transform: translate3d(100%, 0, 0); transform: translate3d(100%, 0, 0); }
            to { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInRight { -webkit-animation-name: fadeInRight; animation-name: fadeInRight; }

        @-webkit-keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        .fadeIn { -webkit-animation-name: fadeIn; animation-name: fadeIn; }

        @-webkit-keyframes fadeInUpBig {
            0% { opacity: 0; -webkit-transform: translate3d(0, 2000px, 0); transform: translate3d(0, 2000px, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInUpBig {
            0% { opacity: 0; -webkit-transform: translate3d(0, 2000px, 0); transform: translate3d(0, 2000px, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInUpBig { -webkit-animation-name: fadeInUpBig; animation-name: fadeInUpBig; }

        @-webkit-keyframes fadeInDownBig {
            0% { opacity: 0; -webkit-transform: translate3d(0, -2000px, 0); transform: translate3d(0, -2000px, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInDownBig {
            0% { opacity: 0; -webkit-transform: translate3d(0, -2000px, 0); transform: translate3d(0, -2000px, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInDownBig { -webkit-animation-name: fadeInDownBig; animation-name: fadeInDownBig; }

        @-webkit-keyframes fadeInLeftBig {
            0% { opacity: 0; -webkit-transform: translate3d(-2000px, 0, 0); transform: translate3d(-2000px, 0, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInLeftBig {
            0% { opacity: 0; -webkit-transform: translate3d(-2000px, 0, 0); transform: translate3d(-2000px, 0, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInLeftBig { -webkit-animation-name: fadeInLeftBig; animation-name: fadeInLeftBig; }

        @-webkit-keyframes fadeInRightBig {
            0% { opacity: 0; -webkit-transform: translate3d(2000px, 0, 0); transform: translate3d(2000px, 0, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        @keyframes fadeInRightBig {
            0% { opacity: 0; -webkit-transform: translate3d(2000px, 0, 0); transform: translate3d(2000px, 0, 0); }
            100% { opacity: 1; -webkit-transform: none; transform: none; }
        }
        .fadeInRightBig { -webkit-animation-name: fadeInRightBig; animation-name: fadeInRightBig; }

        /* ===== HEADER (full‑width) ===== */
        .main-header {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, rgba(0,0,0,0.55), rgba(0,0,0,0.70)),
                url('image/munar.jifi.jfif') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .main-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #f7971e, #ffd200, #f7971e);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .header-content {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .header-content h1 {
            font-size: 3.2rem;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 8px 30px rgba(0,0,0,0.5);
            letter-spacing: 2px;
        }

        .header-content h1 i {
            color: #ffd700;
            margin-right: 12px;
            animation: bounceIcon 2s infinite;
        }

        .header-content p {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.9);
            font-weight: 300;
            margin-top: 6px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        @keyframes bounceIcon {
            0%, 100% { transform: translateY(0); }
            40% { transform: translateY(-8px); }
            60% { transform: translateY(-3px); }
            80% { transform: translateY(-6px); }
        }

        /* ===== CONTACT SECTION (full‑width) ===== */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            padding: 50px 30px 40px;  /* side padding for full‑width feel */
            gap: 40px;
            background: #f9f5f0;
        }

        .contact-info {
            flex: 1 1 40%;
            min-width: 280px;
            background: #ffffff;
            border-radius: 28px;
            padding: 40px 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.07), 0 8px 24px rgba(0,0,0,0.04);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #f7971e, #ffd200);
        }

        .contact-info:hover {
            transform: translateY(-6px);
            box-shadow: 0 30px 80px rgba(247,151,30,0.15), 0 10px 30px rgba(0,0,0,0.06);
        }

        .contact-info h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #1a1a2e;
        }

        .contact-info h2 i {
            color: #f7971e;
            margin-right: 10px;
        }

        .contact-info .sub-head {
            color: #888;
            font-size: 0.95rem;
            margin-bottom: 30px;
            font-weight: 300;
            border-left: 4px solid #f7971e;
            padding-left: 16px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            padding: 16px 0;
            border-bottom: 1px solid #f0ece8;
            transition: background 0.3s ease, padding-left 0.3s ease;
            border-radius: 12px;
            padding-left: 12px;
        }

        .info-item:hover {
            background: #fef9f2;
            padding-left: 20px;
            border-bottom-color: #f7971e;
        }

        .info-item .icon-wrap {
            width: 48px;
            height: 48px;
            min-width: 48px;
            background: linear-gradient(135deg, #fef3e0, #fde8cc);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #f7971e;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .info-item:hover .icon-wrap {
            transform: scale(1.1) rotate(-6deg);
            background: linear-gradient(135deg, #f7971e, #ffd200);
            color: #fff;
        }

        .info-item .icon-wrap i {
            animation: bounceIcon 2.4s infinite;
        }

        .info-item .text h4 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #aaa;
            font-weight: 600;
        }

        .info-item .text p {
            font-size: 1.05rem;
            font-weight: 500;
            color: #1a1a2e;
            margin-top: 2px;
        }

        .info-item .text p a {
            color: #1a1a2e;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-item .text p a:hover {
            color: #f7971e;
        }

        .contact-form-wrap {
            flex: 1 1 50%;
            min-width: 300px;
            background: #ffffff;
            border-radius: 28px;
            padding: 40px 35px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.07), 0 8px 24px rgba(0,0,0,0.04);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-form-wrap::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #ffd200, #f7971e);
        }

        .contact-form-wrap:hover {
            transform: translateY(-6px);
            box-shadow: 0 30px 80px rgba(247,151,30,0.15), 0 10px 30px rgba(0,0,0,0.06);
        }

        .contact-form-wrap h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 6px;
        }

        .contact-form-wrap h2 i {
            color: #f7971e;
            margin-right: 10px;
        }

        .contact-form-wrap .sub-head {
            color: #888;
            font-size: 0.95rem;
            margin-bottom: 28px;
            font-weight: 300;
            border-left: 4px solid #ffd200;
            padding-left: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }

        .form-group label i {
            color: #f7971e;
            margin-right: 6px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #f0ece8;
            border-radius: 16px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
            background: #fcfaf8;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #f7971e;
            box-shadow: 0 0 0 6px rgba(247,151,30,0.12);
            transform: scale(1.01);
            background: #fff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #bbb;
            font-weight: 300;
        }

        .btn-submit {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #f7971e, #ffd200);
            border: none;
            border-radius: 50px;
            font-family: 'Poppins', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a1a2e;
            cursor: pointer;
            transition: all 0.35s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            letter-spacing: 1px;
            box-shadow: 0 8px 28px rgba(247,151,30,0.3);
            position: relative;
            overflow: hidden;
        }

        .btn-submit::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
            transform: scale(0.5);
        }

        .btn-submit:hover {
            transform: translateY(-3px) scale(1.01);
            box-shadow: 0 16px 40px rgba(247,151,30,0.45);
            background: linear-gradient(135deg, #e88a10, #f5c800);
        }

        .btn-submit:hover::after {
            opacity: 1;
            transform: scale(1);
        }

        .btn-submit:active {
            transform: scale(0.96);
        }

        .btn-submit i {
            font-size: 1.2rem;
            animation: bounceIcon 2s infinite;
        }

        /* ===== GOOGLE MAP (full‑width) ===== */
        .map-section {
            width: 100%;
            padding: 0 30px 30px;
            background: #f9f5f0;
        }

        .map-wrapper {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
        }

        .map-wrapper:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 80px rgba(0,0,0,0.12);
        }

        .map-wrapper iframe {
            display: block;
            width: 100%;
            height: 380px;
            border: none;
            filter: grayscale(0.1) contrast(1.05);
            transition: filter 0.6s ease;
        }

        .map-wrapper:hover iframe {
            filter: grayscale(0) contrast(1);
        }

        /* ===== BOTTOM TRAVEL FAMILY BG (full‑width) ===== */
        .travel-family-bg {
            width: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.75)),
                url('https://images.unsplash.com/photo-1533105079780-92b9be482077?w=1600&q=80') center/cover fixed no-repeat;
            padding: 60px 30px;
            text-align: center;
            position: relative;
            border-top: 4px solid #ffd200;
            border-bottom: 4px solid #ffd200;
        }

        .travel-family-bg .overlay-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .travel-family-bg .overlay-content h2 {
            font-size: 2.8rem;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 4px 30px rgba(0,0,0,0.5);
        }

        .travel-family-bg .overlay-content h2 i {
            color: #ffd700;
            animation: bounceIcon 2.2s infinite;
        }

        .travel-family-bg .overlay-content p {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.85);
            font-weight: 300;
            margin-top: 12px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        .travel-family-bg .family-icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-top: 35px;
        }

        .travel-family-bg .family-icons .icon-card {
            background: rgba(255,255,255,0.10);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 22px 32px;
            border-radius: 60px;
            border: 1px solid rgba(255,255,255,0.15);
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: all 0.4s ease;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        }

        .travel-family-bg .family-icons .icon-card i {
            font-size: 1.8rem;
            color: #ffd700;
            animation: bounceIcon 2.6s infinite;
        }

        .travel-family-bg .family-icons .icon-card:hover {
            transform: translateY(-8px) scale(1.04);
            background: rgba(255,255,255,0.20);
            border-color: #ffd700;
            box-shadow: 0 16px 48px rgba(255,215,0,0.20);
        }

        .fade-hover {
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .fade-hover:hover {
            opacity: 0.92;
            transform: scale(1.01);
        }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f0ece8; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #f7971e, #ffd200); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #e88a10; }

        /* ============================================================
                   RESPONSIVE – keep full‑width with adjusted padding
                   ============================================================ */

        @media screen and (max-width: 1024px) {
            .contact-section { padding: 40px 20px; gap: 30px; }
            .contact-info, .contact-form-wrap { padding: 32px 28px; }
            .header-content h1 { font-size: 2.6rem; }
            .travel-family-bg .overlay-content h2 { font-size: 2.2rem; }
            .one { animation-delay: 0.2s; }
            .two { animation-delay: 0.4s; }
            .three { animation-delay: 0.6s; }
            .four { animation-delay: 0.8s; }
            .five { animation-delay: 1.0s; }
            .six { animation-delay: 1.2s; }
            .seven { animation-delay: 1.4s; }
            .eight { animation-delay: 1.6s; }
        }

        @media screen and (max-width: 768px) {
            .main-header { height: 200px; }
            .header-content h1 { font-size: 2.2rem; }
            .header-content p { font-size: 0.95rem; letter-spacing: 2px; }

            .contact-section {
                flex-direction: column;
                padding: 30px 16px;
                gap: 24px;
            }
            .contact-info, .contact-form-wrap {
                flex: 1 1 100%;
                min-width: 0;
                padding: 28px 22px;
            }
            .contact-info h2, .contact-form-wrap h2 { font-size: 1.5rem; }
            .info-item { padding: 12px 0; padding-left: 8px; }
            .info-item .icon-wrap { width: 42px; height: 42px; min-width: 42px; font-size: 1.1rem; }

            .map-section { padding: 0 16px 20px; }
            .map-wrapper iframe { height: 280px; }

            .travel-family-bg { padding: 40px 20px; }
            .travel-family-bg .overlay-content h2 { font-size: 1.8rem; }
            .travel-family-bg .overlay-content p { font-size: 1rem; padding: 0 10px; }
            .travel-family-bg .family-icons { gap: 20px; }
            .travel-family-bg .family-icons .icon-card { padding: 16px 24px; font-size: 0.95rem; }
            .travel-family-bg .family-icons .icon-card i { font-size: 1.4rem; }

            .btn-submit { font-size: 1rem; padding: 14px; }

            /* On tablets, fadeInLeft/Right become fadeInUp for better flow */
            .contact-info.animate.fadeInLeft,
            .contact-form-wrap.animate.fadeInRight {
                -webkit-animation-name: fadeInUp;
                animation-name: fadeInUp;
            }
            .one { animation-delay: 0.15s; }
            .two { animation-delay: 0.3s; }
            .three { animation-delay: 0.45s; }
            .four { animation-delay: 0.6s; }
            .five { animation-delay: 0.75s; }
            .six { animation-delay: 0.9s; }
            .seven { animation-delay: 1.05s; }
            .eight { animation-delay: 1.2s; }
        }

        @media screen and (max-width: 480px) {
            .main-header { height: 170px; }
            .header-content h1 { font-size: 1.6rem; }
            .header-content h1 i { margin-right: 6px; }
            .header-content p { font-size: 0.75rem; letter-spacing: 1.5px; }

            .contact-section { padding: 20px 12px; gap: 18px; }
            .contact-info, .contact-form-wrap { padding: 20px 16px; border-radius: 20px; }
            .contact-info h2, .contact-form-wrap h2 { font-size: 1.25rem; }
            .contact-info .sub-head, .contact-form-wrap .sub-head { font-size: 0.8rem; padding-left: 12px; margin-bottom: 18px; }

            .info-item { padding: 10px 0; padding-left: 4px; gap: 12px; }
            .info-item .icon-wrap { width: 36px; height: 36px; min-width: 36px; font-size: 0.95rem; }
            .info-item .text p { font-size: 0.9rem; }
            .info-item .text h4 { font-size: 0.7rem; }

            .form-group { margin-bottom: 14px; }
            .form-group input, .form-group textarea { padding: 12px 14px; font-size: 0.9rem; border-radius: 12px; }
            .form-group textarea { min-height: 90px; }

            .btn-submit { font-size: 0.9rem; padding: 13px; border-radius: 40px; gap: 8px; }
            .btn-submit i { font-size: 1rem; }

            .map-section { padding: 0 12px 16px; }
            .map-wrapper iframe { height: 200px; }

            .travel-family-bg { padding: 30px 14px; }
            .travel-family-bg .overlay-content h2 { font-size: 1.4rem; }
            .travel-family-bg .overlay-content p { font-size: 0.9rem; line-height: 1.6; }
            .travel-family-bg .family-icons { gap: 14px; flex-direction: column; align-items: center; }
            .travel-family-bg .family-icons .icon-card { width: 100%; max-width: 260px; justify-content: center; padding: 14px 20px; font-size: 0.9rem; border-radius: 40px; }
            .travel-family-bg .family-icons .icon-card i { font-size: 1.3rem; }

            /* Mobile: all animations become fadeInUp for consistency */
            .contact-info.animate.fadeInLeft,
            .contact-form-wrap.animate.fadeInRight,
            .map-wrapper.animate.fadeInUp,
            .travel-family-bg.animate.fadeInUp,
            .main-header.animate.fadeInDown {
                -webkit-animation-name: fadeInUp !important;
                animation-name: fadeInUp !important;
            }
            .one { animation-delay: 0.1s; }
            .two { animation-delay: 0.2s; }
            .three { animation-delay: 0.3s; }
            .four { animation-delay: 0.4s; }
            .five { animation-delay: 0.5s; }
            .six { animation-delay: 0.6s; }
            .seven { animation-delay: 0.7s; }
            .eight { animation-delay: 0.8s; }
        }

        @media screen and (max-width: 360px) {
            .header-content h1 { font-size: 1.3rem; }
            .contact-info, .contact-form-wrap { padding: 16px 12px; }
            .contact-info h2, .contact-form-wrap h2 { font-size: 1.1rem; }
            .info-item .text p { font-size: 0.8rem; }
            .form-group input, .form-group textarea { font-size: 0.8rem; padding: 10px 12px; }
            .btn-submit { font-size: 0.8rem; padding: 11px; }
            .map-wrapper iframe { height: 160px; }
            .one { animation-delay: 0.05s; }
            .two { animation-delay: 0.1s; }
            .three { animation-delay: 0.15s; }
            .four { animation-delay: 0.2s; }
            .five { animation-delay: 0.25s; }
            .six { animation-delay: 0.3s; }
            .seven { animation-delay: 0.35s; }
            .eight { animation-delay: 0.4s; }
        }

        @media screen and (max-height: 500px) and (orientation: landscape) {
            .main-header { height: 140px; }
            .header-content h1 { font-size: 1.4rem; }
            .header-content p { font-size: 0.7rem; letter-spacing: 1px; }
            .contact-section { padding: 20px 16px; gap: 16px; margin: 0; }
            .contact-info, .contact-form-wrap { padding: 16px 14px; }
            .contact-info h2, .contact-form-wrap h2 { font-size: 1.1rem; }
            .info-item { padding: 6px 0; }
            .info-item .icon-wrap { width: 30px; height: 30px; min-width: 30px; font-size: 0.8rem; }
            .info-item .text p { font-size: 0.8rem; }
            .form-group { margin-bottom: 10px; }
            .form-group input, .form-group textarea { padding: 8px 12px; font-size: 0.8rem; }
            .form-group textarea { min-height: 60px; }
            .btn-submit { font-size: 0.8rem; padding: 10px; }
            .map-section { padding: 0 16px 12px; }
            .map-wrapper iframe { height: 150px; }
            .travel-family-bg { padding: 20px 14px; }
            .travel-family-bg .overlay-content h2 { font-size: 1.2rem; }
            .travel-family-bg .overlay-content p { font-size: 0.8rem; }
            .travel-family-bg .family-icons .icon-card { padding: 10px 16px; font-size: 0.8rem; }
            .travel-family-bg .family-icons .icon-card i { font-size: 1.0rem; }
        }
    </style>
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