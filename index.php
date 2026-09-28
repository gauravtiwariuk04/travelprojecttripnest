<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Tripnest Travel – Discover Sikkim, Experience Peace</title>
      <!-- Font Awesome 6 (free) -->
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      />
      <!-- Google Fonts -->
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap"
         rel="stylesheet"
      />
      <!-- Tailwind CSS CDN -->
      <script src="https://cdn.tailwindcss.com"></script>
      <!-- Google Fonts: Montserrat (for gallery & testimonials) -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap"
         rel="stylesheet"
      />
      <!-- FontAwesome for Icons (gallery & testimonials) -->
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      />
      <style>
         /* ===== GLOBAL RESET & BASE ===== */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
         }
         body {
            font-family: "Poppins", "Montserrat", "Roboto", sans-serif;
            color: #1a1a1a;
            line-height: 1.6;
            background: linear-gradient(
               135deg,
               #f0fff4,
               #dcfce7,
               #bbf7d0,
               #86efac,
               #4ade80,
               #22c55e,
               #16a34a,
               #15803d,
               #166534,
               #14532d
            );
            overflow-x: hidden;
         }
         a {
            text-decoration: none;
            color: inherit;
         }
         a:hover {
            text-decoration: none;
         }
         img {
            max-width: 100%;
            height: auto;
            display: block;
         }
         ul {
            list-style: none;
         }
         .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
         }
         .flex {
            display: flex;
         }
         .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
         }
         .flex-between {
            display: flex;
            align-items: center;
            justify-content: space-between;
         }
         .flex-col {
            display: flex;
            flex-direction: column;
         }
         .text-center {
            text-align: center;
         }
         .relative {
            position: relative;
         }
         .absolute {
            position: absolute;
         }

         /* ===== COLOR VARIABLES ===== */
         :root {
            --primary-green: #085a16;
            --primary-green-hover: #2f6f22;
            --primary-orange: #ec8000;
            --primary-orange-hover: #d16f00;
            --light-teal: #e1f3f3;
            --border-teal: #a6c3c3;
            --text-dark: #1a1a1a;
            --text-light: #555;
            --white: #ffffff;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
         }

         /* ===== ANIMATION: FADE IN ON SCROLL ===== */
         .fade-section {
            opacity: 0;
            transform: translateY(30px);
            transition:
               opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1),
               transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
         }
         .fade-section.visible {
            opacity: 1;
            transform: translateY(0);
         }

         /* ===== NEW ANIMATION CLASSES (from second file) ===== */
         .animate {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
         }

         /* Delays */
         .one {
            animation-delay: 0.5s;
         }
         .two {
            animation-delay: 1.5s;
         }
         .three {
            animation-delay: 2.5s;
         }
         .four {
            animation-delay: 3.5s;
         }
         .five {
            animation-delay: 4.5s;
         }
         .six {
            animation-delay: 5.5s;
         }
         .seven {
            animation-delay: 6.5s;
         }
         .eight {
            animation-delay: 7.5s;
         }

         /* FADE IN UP */
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

         /* FADE IN DOWN */
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

         /* FADE IN LEFT */
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

         /* FADE IN RIGHT */
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

         /* FADE IN */
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

         /* FADE IN UP BIG */
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

         /* FADE IN DOWN BIG */
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

         /* FADE IN LEFT BIG */
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

         /* FADE IN RIGHT BIG */
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

         /* ===== HEADINGS (standardized) ===== */
         .section-heading {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
         }
         .section-heading .shadow-text {
            display: block;
            font-size: 64px;
            font-weight: 800;
            color: rgba(8, 90, 22, 0.06);
            line-height: 1;
            margin-bottom: -20px;
            letter-spacing: 2px;
            text-transform: uppercase;
         }
         .section-heading h2 {
            font-size: 38px;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 14px;
            position: relative;
         }
         .section-heading p {
            font-size: 16px;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
         }

         /* Reduced vertical gaps between sections */
         section {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
         }
         .about-section,
         .destination-section,
         .travel-section,
         .packages-section,
         .plan-hero-section,
         .plan-destinations-section,
         .faq-section,
         .newsletter-section {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
         }

         /* ===== TOP BAR ===== */
         .top-bar {
            background: var(--primary-green);
            color: #fff;
            padding: 8px 0;
            font-size: 14px;
         }
         .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
         }
         .top-bar-left {
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
         }
         .top-bar-left li {
            display: flex;
            align-items: center;
            gap: 8px;
         }
         .top-bar-left li i {
            font-size: 14px;
            opacity: 0.9;
         }
         .top-bar-left li a {
            color: #fff;
         }
         .top-bar-right {
            display: flex;
            gap: 12px;
         }
         .top-bar-right a {
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.15);
            transition: 0.3s;
            font-size: 14px;
         }
         .top-bar-right a:hover {
            background: rgba(255, 255, 255, 0.3);
         }

         /* ===== HEADER / NAV ===== */
         .main-header {
            background: #fff;
            padding: 12px 0;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            position: sticky;
            top: 0;
            z-index: 1000;
         }
         .main-header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
         }
         .logo img {
            max-height: 70px;
            width: auto;
         }
         .nav-menu {
            display: flex;
            align-items: center;
            gap: 28px;
         }
         .nav-menu a {
            font-size: 15px;
            font-weight: 500;
            color: #222;
            transition: 0.3s;
            position: relative;
         }
         .nav-menu a:hover,
         .nav-menu a.active {
            color: var(--primary-green);
         }
         .nav-menu a.active::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary-green);
            border-radius: 2px;
         }
         .btn-plan-trip {
            background: var(--primary-orange);
            color: #fff !important;
            padding: 10px 24px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
            border: none;
            cursor: pointer;
         }
         .btn-plan-trip:hover {
            background: #d16f00;
            color: #fff;
         }
         .btn-plan-trip i {
            font-size: 12px;
         }
         .hamburger {
            display: none;
            font-size: 24px;
            color: var(--primary-green);
            background: none;
            border: none;
            cursor: pointer;
         }

         /* ===== HERO SECTION WITH CAROUSEL ===== */
         .hero {
            position: relative;
            min-height: 700px;
            overflow: hidden;
            color: #fff;
         }

         /* Carousel container */
         .hero-carousel {
            position: absolute;
            inset: 0;
            z-index: 0;
         }

         .hero-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1.2s ease-in-out, transform 1.2s ease-in-out;
            transform: scale(1.05);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
         }

         .hero-slide.active {
            opacity: 1;
            transform: scale(1);
            z-index: 2;
         }

         /* Individual slides with different images */
         .hero-slide:nth-child(1) {
            background-image: url("https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop");
         }
         .hero-slide:nth-child(2) {
            background-image: url("https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop");
         }
         .hero-slide:nth-child(3) {
            background-image: url("https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop");
         }
         .hero-slide:nth-child(4) {
            background-image: url("https://images.unsplash.com/photo-1544735716-392fe2489ffa?q=80&w=2070&auto=format&fit=crop");
         }

         /* Dark overlay for readability */
         .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
            pointer-events: none;
         }

         .hero-content {
            position: relative;
            z-index: 5;
            max-width: 720px;
         }

         .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 18px;
            border-radius: 40px;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(4px);
         }
         .hero-badge i {
            color: var(--primary-orange);
            font-size: 12px;
         }
         .hero h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.15;
            margin-bottom: 24px;
         }
         .hero h1 span {
            color: var(--primary-orange);
         }
         .hero p {
            font-size: 17px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 560px;
            margin-bottom: 36px;
            line-height: 1.7;
         }
         .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
         }
         .btn-primary {
            background: var(--primary-orange);
            color: #fff;
            padding: 14px 34px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
            border: 2px solid var(--primary-orange);
            display: inline-block;
            cursor: pointer;
         }
         .btn-primary:hover {
            background: transparent;
            color: var(--primary-orange);
         }
         .btn-outline {
            background: transparent;
            color: #fff;
            padding: 14px 34px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
            border: 2px solid rgba(255, 255, 255, 0.5);
            display: inline-block;
            cursor: pointer;
         }
         .btn-outline:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.1);
         }

         /* Carousel dots */
         .hero-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 12px;
         }
         .hero-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: 0.3s;
            border: none;
            padding: 0;
         }
         .hero-dot.active {
            background: var(--primary-orange);
            transform: scale(1.2);
            box-shadow: 0 0 12px rgba(236, 128, 0, 0.6);
         }
         .hero-dot:hover {
            background: rgba(255, 255, 255, 0.8);
         }

         /* Bouncing icon animation */
         @keyframes bounceIcon {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
         }
         .bounce-icon {
            animation: bounceIcon 2s infinite ease-in-out;
         }

         /* ===== ABOUT SECTION ===== */
         .about-section {
            padding: 40px 0;
            background: #f5faf5;
         }
         .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
         }
         .about-heading .shadow-text {
            display: block;
            font-size: 64px;
            font-weight: 800;
            color: rgba(8, 90, 22, 0.06);
            line-height: 1;
            margin-bottom: -20px;
            letter-spacing: 2px;
            text-transform: uppercase;
         }
         .about-heading h2 {
            font-size: 38px;
            font-weight: 700;
            color: var(--primary-green);
            margin-bottom: 16px;
            position: relative;
         }
         .about-heading p {
            font-size: 16px;
            color: var(--text-light);
            max-width: 480px;
            line-height: 1.8;
         }
         .about-counters {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 32px;
         }
         .counter-item {
            background: #fff;
            padding: 24px 20px;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            text-align: center;
            transition: 0.3s;
            border: 1px solid #e8f0e8;
         }
         .counter-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
         }
         .counter-item .counter-title {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 500;
            margin-bottom: 8px;
         }
         .counter-item .counter-number {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-green);
         }
         .counter-item .counter-number .suffix {
            font-size: 18px;
            font-weight: 500;
         }
         .about-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
         }
         .about-images img {
            border-radius: 16px;
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
         }
         .about-images .img-large {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
         }
         .about-images .img-small {
            grid-column: 2 / 3;
            grid-row: 1 / 2;
         }
         .about-images .img-small2 {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
         }

         /* ===== DESTINATIONS ===== */
         .destination-section {
            width: 100%;
            padding: 40px 3.1% 50px;
            overflow: hidden;
            background-image: url("https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop");
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
         }
         .destination-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(255, 255, 255, 0.82);
            z-index: 0;
            pointer-events: none;
         }
         .destination-section > * {
            position: relative;
            z-index: 2;
         }
         .destination-heading {
            position: relative;
            text-align: center;
            margin-bottom: 35px;
         }
         .background-title {
            position: absolute;
            top: -35px;
            left: 50%;
            transform: translateX(-50%);
            font-size: clamp(60px, 8vw, 115px);
            font-weight: 700;
            color: rgba(240, 240, 240, 0.85);
            line-height: 1;
            z-index: 0;
            white-space: nowrap;
            pointer-events: none;
         }
         .destination-heading h2 {
            position: relative;
            z-index: 2;
            font-size: clamp(30px, 3vw, 38px);
            font-weight: 600;
            margin-bottom: 35px;
         }
         .destination-heading p {
            position: relative;
            z-index: 2;
            max-width: 850px;
            margin: 0 auto;
            font-size: 17px;
            line-height: 1.55;
            font-weight: 400;
            color: #1a1a1a;
         }
         .destination-grid {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
         }
         .destination-column {
            display: flex;
            flex-direction: column;
            gap: 10px;
         }
         .destination-card {
            position: relative;
            width: 100%;
            height: 375px;
            overflow: hidden;
            border-radius: 21px;
            background: #ddd;
            isolation: isolate;
         }
         .card-gangtok {
            height: 452px;
         }
         .card-zuluk {
            height: 302px;
         }
         .destination-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
         }
         .destination-card:hover img {
            transform: scale(1.06);
         }
         .card-overlay {
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(
               to top,
               rgba(0, 0, 0, 0.72) 0%,
               rgba(0, 0, 0, 0.25) 42%,
               rgba(0, 0, 0, 0) 72%
            );
         }
         .arrow-btn {
            position: absolute;
            top: 11px;
            right: 11px;
            width: 47px;
            height: 47px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #111;
            text-decoration: none;
            z-index: 5;
            transition:
               transform 0.3s ease,
               background 0.3s ease;
         }
         .arrow-btn i {
            font-size: 17px;
            transform: rotate(-45deg);
            transition: transform 0.3s ease;
         }
         .destination-card:hover .arrow-btn {
            transform: scale(1.08);
         }
         .destination-card:hover .arrow-btn i {
            transform: rotate(0deg);
         }
         .card-content {
            position: absolute;
            left: 21px;
            right: 20px;
            bottom: 20px;
            z-index: 3;
            color: #ffffff;
         }
         .card-content h3 {
            font-size: clamp(26px, 2.2vw, 32px);
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 7px;
         }
         .card-content p {
            font-size: 15px;
            line-height: 1.5;
            font-weight: 400;
            margin: 0;
            max-width: 100%;
         }
         @media (max-width: 1100px) {
            .destination-section {
               padding-left: 25px;
               padding-right: 25px;
            }
            .destination-grid {
               gap: 10px;
            }
            .destination-card {
               height: 350px;
            }
            .card-gangtok {
               height: 430px;
            }
            .card-zuluk {
               height: 270px;
            }
            .card-content {
               left: 18px;
               right: 18px;
               bottom: 18px;
            }
            .card-content h3 {
               font-size: 27px;
            }
            .card-content p {
               font-size: 14px;
            }
            .arrow-btn {
               width: 44px;
               height: 44px;
            }
         }
         @media (max-width: 768px) {
            .destination-section {
               padding: 30px 20px 50px;
            }
            .destination-heading {
               margin-bottom: 25px;
            }
            .background-title {
               top: -15px;
               font-size: 70px;
            }
            .destination-heading h2 {
               font-size: 30px;
               margin-bottom: 20px;
            }
            .destination-heading p {
               font-size: 15px;
               line-height: 1.6;
            }
            .desktop-break {
               display: none;
            }
            .destination-grid {
               grid-template-columns: repeat(2, 1fr);
               gap: 12px;
            }
            .destination-column {
               gap: 12px;
            }
            .destination-card,
            .card-gangtok,
            .card-zuluk {
               height: 350px;
            }
            .card-content h3 {
               font-size: 25px;
            }
            .card-content p {
               font-size: 14px;
            }
         }
         @media (max-width: 576px) {
            .destination-section {
               padding: 25px 15px 45px;
            }
            .destination-heading {
               margin-bottom: 20px;
            }
            .background-title {
               top: -5px;
               font-size: 45px;
            }
            .destination-heading h2 {
               font-size: 26px;
               margin-bottom: 18px;
            }
            .destination-heading p {
               font-size: 14px;
               line-height: 1.55;
            }
            .destination-grid {
               grid-template-columns: 1fr;
               gap: 12px;
            }
            .destination-column {
               gap: 12px;
            }
            .destination-card,
            .card-gangtok,
            .card-zuluk {
               height: 360px;
            }
            .arrow-btn {
               width: 45px;
               height: 45px;
               top: 10px;
               right: 10px;
            }
            .card-content {
               left: 18px;
               right: 18px;
               bottom: 18px;
            }
            .card-content h3 {
               font-size: 26px;
            }
            .card-content p {
               font-size: 14px;
               line-height: 1.5;
            }
         }
         @media (max-width: 380px) {
            .destination-section {
               padding-left: 12px;
               padding-right: 12px;
            }
            .background-title {
               font-size: 38px;
            }
            .destination-heading h2 {
               font-size: 23px;
            }
            .destination-heading p {
               font-size: 13px;
            }
            .destination-card,
            .card-gangtok,
            .card-zuluk {
               height: 330px;
            }
            .card-content h3 {
               font-size: 23px;
            }
            .card-content p {
               font-size: 13px;
            }
         }

         /* ===== CHOOSE US / TRUSTED PARTNER ===== */
         .travel-section {
            width: 100%;
            padding: 20px 2.6% 50px;
            position: relative;
            overflow: hidden;
            background: #f2f7fb;
         }
         .travel-section .background-text {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 105px;
            font-weight: 700;
            color: rgba(180, 188, 195, 0.17);
            white-space: nowrap;
            pointer-events: none;
            z-index: 0;
         }
         .travel-section .travel-heading {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 40px;
         }
         .travel-section .travel-heading h1 {
            font-size: 35px;
            line-height: 1.3;
            font-weight: 700;
            margin-bottom: 40px;
         }
         .travel-section .travel-heading p {
            font-size: 18px;
            line-height: 1.55;
            font-weight: 500;
            color: #172534;
         }
         .travel-section .travel-grid {
            width: 100%;
            max-width: 1400px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 12px;
            align-items: stretch;
         }
         .travel-section .left-column,
         .travel-section .right-column {
            display: flex;
            flex-direction: column;
            gap: 12px;
         }
         .travel-section .center-column {
            width: 100%;
            height: 705px;
            overflow: hidden;
            border-radius: 22px;
         }
         .travel-section .center-column img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform 0.5s ease;
         }
         .travel-section .center-column:hover img {
            transform: scale(1.03);
         }
         .travel-section .info-card {
            width: 100%;
            min-height: 232px;
            background: #edffff;
            border: 1px solid #c6dfe2;
            border-radius: 22px;
            padding: 28px 23px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transition: all 0.3s ease;
         }
         .travel-section .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
         }
         .travel-section .icon-box {
            width: 68px;
            height: 68px;
            border-radius: 50%;
            background: #00a33f;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 21px;
         }
         .travel-section .icon-box i {
            color: white;
            font-size: 28px;
         }
         .travel-section .info-card h2 {
            font-size: 23px;
            line-height: 1.3;
            font-weight: 700;
            margin-bottom: 10px;
         }
         .travel-section .info-card p {
            font-size: 17px;
            line-height: 1.45;
            color: #263849;
            font-weight: 400;
         }
         .travel-section .side-image {
            width: 100%;
            height: 217px;
            overflow: hidden;
            border-radius: 22px;
         }
         .travel-section .side-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform 0.5s ease;
         }
         .travel-section .side-image:hover img {
            transform: scale(1.04);
         }
         .travel-section .top-image {
            height: 217px;
         }

         /* ===== PACKAGES ===== */
         .packages-section {
            padding: 40px 0;
            background: #fff;
         }
         .packages-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
         }
         .package-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: 0.4s;
            border: 1px solid #eef5ee;
         }
         .package-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
         }
         .package-card .pkg-img {
            height: 200px;
            overflow: hidden;
            position: relative;
         }
         .package-card .pkg-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
         }
         .package-card:hover .pkg-img img {
            transform: scale(1.08);
         }
         .package-card .pkg-duration {
            position: absolute;
            bottom: 12px;
            left: 12px;
            background: rgba(8, 90, 22, 0.85);
            color: #fff;
            padding: 4px 14px;
            border-radius: 40px;
            font-size: 12px;
            font-weight: 500;
         }
         .package-card .pkg-body {
            padding: 20px 20px 24px;
         }
         .package-card .pkg-body h3 {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 12px;
         }
         .package-card .pkg-body ul {
            margin-bottom: 16px;
         }
         .package-card .pkg-body ul li {
            font-size: 13px;
            color: var(--text-light);
            padding: 4px 0;
            display: flex;
            align-items: flex-start;
            gap: 8px;
         }
         .package-card .pkg-body ul li i {
            color: var(--primary-orange);
            font-size: 10px;
            margin-top: 5px;
         }
         .package-card .pkg-price {
            font-size: 14px;
            color: var(--text-light);
            margin-bottom: 16px;
         }
         .package-card .pkg-price strong {
            font-size: 18px;
            color: var(--primary-green);
         }
         .package-card .pkg-actions {
            display: flex;
            gap: 10px;
            align-items: center;
         }
         .package-card .pkg-actions .call-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--primary-green);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: 0.3s;
            flex-shrink: 0;
         }
         .package-card .pkg-actions .call-btn:hover {
            background: var(--primary-orange);
         }
         .package-card .pkg-actions .view-btn {
            flex: 1;
            background: var(--primary-green);
            color: #fff;
            padding: 10px 16px;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            transition: 0.3s;
            display: block;
         }
         .package-card .pkg-actions .view-btn:hover {
            background: var(--primary-orange);
         }

         /* ===== PLAN HERO ===== */
         .plan-hero-section {
            background-color: #f3f4f6;
            padding: 40px 20px;
            font-family: "Inter", sans-serif;
            color: #111827;
            background-image: url("https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop");
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
         }
         .plan-hero-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(243, 244, 246, 0.88);
            z-index: 0;
            pointer-events: none;
         }
         .plan-hero-section > * {
            position: relative;
            z-index: 2;
         }
         .plan-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 40px;
            align-items: flex-start;
         }
         .plan-hero-left {
            flex: 1;
         }
         .plan-hero-title {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: #000;
            line-height: 1.2;
            margin-bottom: 16px;
         }
         .plan-hero-subtitle {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 32px;
            max-width: 480px;
         }
         .plan-feature-cards {
            display: flex;
            flex-direction: column;
            gap: 16px;
         }
         .plan-feature-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 18px;
            display: flex;
            align-items: center;
            gap: 16px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
         }
         .plan-icon-box {
            width: 44px;
            height: 44px;
            background-color: #0b572a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.1rem;
            flex-shrink: 0;
         }
         .plan-feature-text h3 {
            font-size: 1rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
         }
         .plan-feature-text p {
            font-size: 0.85rem;
            color: #6b7280;
         }
         .plan-hero-right {
            flex: 1.1;
            background-color: #e6f4f1;
            padding: 32px;
            border-radius: 16px;
         }
         .plan-booking-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
         }
         .plan-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
         }
         .plan-form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
         }
         .plan-form-group.full-width {
            grid-column: span 2;
         }
         .plan-form-group label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #1f2937;
         }
         .plan-form-group input,
         .plan-form-group select,
         .plan-form-group textarea {
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            background-color: #ffffff;
            font-family: inherit;
            font-size: 0.85rem;
            color: #374151;
            outline: none;
         }
         .plan-form-group input::placeholder,
         .plan-form-group textarea::placeholder {
            color: #9ca3af;
         }
         .plan-form-group input:focus,
         .plan-form-group select:focus,
         .plan-form-group textarea:focus {
            border-color: #0b572a;
         }
         .plan-form-group textarea {
            resize: vertical;
         }
         .plan-select-wrapper {
            position: relative;
         }
         .plan-select-wrapper select {
            appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
         }
         .plan-select-wrapper::after {
            content: "\f107";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: #6b7280;
            font-size: 0.85rem;
         }
         .plan-submit-btn {
            background-color: #0b572a;
            color: #ffffff;
            padding: 14px;
            border: none;
            border-radius: 24px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 10px;
            font-family: inherit;
         }
         .plan-submit-btn:hover {
            background-color: #08421f;
         }

         /* ===== SEASONAL DESTINATIONS ===== */
         .plan-destinations-section {
            padding: 40px 20px;
            background-color: #ffffff;
            font-family: "Inter", sans-serif;
         }
         .plan-destinations-container {
            max-width: 1200px;
            margin: 0 auto;
         }
         .plan-section-header {
            position: relative;
            text-align: center;
            margin-bottom: 30px;
         }
         .plan-bg-watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -80%);
            font-size: 4rem;
            font-weight: 900;
            color: rgba(229, 231, 235, 0.4);
            letter-spacing: 0.1em;
            z-index: 0;
            pointer-events: none;
         }
         .plan-section-title {
            position: relative;
            font-size: 1.8rem;
            font-weight: 800;
            color: #111827;
            z-index: 1;
            margin-bottom: 12px;
         }
         .plan-section-subtitle {
            position: relative;
            color: #4b5563;
            font-size: 0.9rem;
            max-width: 600px;
            margin: 0 auto;
            z-index: 1;
         }
         .plan-destinations-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 20px;
            grid-auto-rows: 240px;
         }
         .plan-destination-card {
            position: relative;
            border-radius: 16px;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #ffffff;
         }
         .plan-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
               180deg,
               rgba(0, 0, 0, 0) 20%,
               rgba(0, 0, 0, 0.85) 100%
            );
            z-index: 1;
         }
         .plan-action-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ffffff;
            color: #111827;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            transform: rotate(-45deg);
            z-index: 2;
            transition: transform 0.2s ease;
         }
         .plan-destination-card:hover .plan-action-btn {
            transform: rotate(0deg);
         }
         .plan-card-content {
            position: relative;
            z-index: 2;
         }
         .plan-card-content h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 6px;
         }
         .plan-card-content p {
            font-size: 0.8rem;
            color: #e5e7eb;
            line-height: 1.4;
         }
         .plan-darjeeling {
            grid-column: span 6;
            grid-row: span 1;
         }
         .plan-north-sikkim {
            grid-column: span 6;
            grid-row: span 2;
         }
         .plan-gangtok {
            grid-column: span 3;
            grid-row: span 1;
         }
         .plan-namchi {
            grid-column: span 3;
            grid-row: span 1;
         }

         @media (max-width: 992px) {
            .plan-hero-container {
               flex-direction: column;
            }
            .plan-hero-right {
               width: 100%;
            }
            .plan-bg-watermark {
               font-size: 3rem;
            }
            .plan-darjeeling {
               grid-column: span 12;
            }
            .plan-gangtok {
               grid-column: span 6;
            }
            .plan-namchi {
               grid-column: span 6;
            }
            .plan-north-sikkim {
               grid-column: span 12;
               grid-row: span 1;
            }
         }
         @media (max-width: 600px) {
            .plan-hero-section,
            .plan-destinations-section {
               padding: 30px 16px;
            }
            .plan-hero-title {
               font-size: 1.75rem;
            }
            .plan-form-grid {
               grid-template-columns: 1fr;
            }
            .plan-form-group.full-width {
               grid-column: span 1;
            }
            .plan-destinations-grid {
               grid-template-columns: 1fr;
               grid-auto-rows: 260px;
            }
            .plan-darjeeling,
            .plan-gangtok,
            .plan-namchi,
            .plan-north-sikkim {
               grid-column: span 1;
               grid-row: span 1;
            }
            .plan-bg-watermark {
               font-size: 2.2rem;
            }
         }

         /* ===== GALLERY ===== */
         .gallery-section {
            background-image: url("https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=2070&auto=format&fit=crop");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            position: relative;
            padding: 48px 16px 64px;
         }
         .gallery-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(243, 245, 248, 0.75);
            z-index: 0;
            pointer-events: none;
         }
         .gallery-section > * {
            position: relative;
            z-index: 2;
         }
         .watermark-container {
            position: relative;
         }
         .watermark-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -65%);
            font-size: clamp(3rem, 12vw, 8.5rem);
            font-weight: 900;
            letter-spacing: 0.15em;
            color: rgba(210, 218, 226, 0.45);
            white-space: nowrap;
            user-select: none;
            z-index: 0;
            pointer-events: none;
         }
         .gallery-card {
            transition:
               transform 0.35s cubic-bezier(0.25, 1, 0.5, 1),
               box-shadow 0.35s ease;
            border-radius: 20px;
            overflow: hidden;
         }
         .gallery-card:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 16px 30px rgba(0, 0, 0, 0.12);
         }
         .gallery-card img {
            transition: transform 0.5s ease;
         }
         .gallery-card:hover img {
            transform: scale(1.06);
         }
         .modal-backdrop {
            background-color: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(8px);
            transition: opacity 0.3s ease;
         }
         .btn-green {
            background-color: #0b6623;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
         }
         .btn-green:hover {
            background-color: #084c1a;
            box-shadow: 0 8px 20px rgba(11, 102, 35, 0.35);
            transform: translateY(-2px);
         }
         .btn-green:active {
            transform: translateY(0);
         }
         .spinner {
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #ffffff;
            width: 20px;
            height: 20px;
            animation: spin 0.8s linear infinite;
         }
         @keyframes spin {
            0% {
               transform: rotate(0deg);
            }
            100% {
               transform: rotate(360deg);
            }
         }

         /* ===== TESTIMONIALS ===== */
         .testimonial-card {
            background-color: #e4f4f3;
            border-radius: 20px;
            padding: 1.75rem 1.5rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition:
               transform 0.3s cubic-bezier(0.25, 1, 0.5, 1),
               box-shadow 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
         }
         .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.06);
         }
         .btn-green-pill {
            background-color: #0b6623;
            color: #ffffff;
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            border-radius: 9999px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.6rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 12px rgba(11, 102, 35, 0.2);
            border: none;
            cursor: pointer;
         }
         .btn-green-pill:hover {
            background-color: #084c1a;
            box-shadow: 0 8px 20px rgba(11, 102, 35, 0.35);
            transform: translateY(-2px);
         }
         .star-gold {
            color: #ff9800;
         }

         /* ===== FAQ ===== */
         .faq-section {
            padding: 50px 20px;
            background: linear-gradient(
               135deg,
               #063d0f 0%,
               #0a5a1a 18%,
               #0f7a26 36%,
               #149b32 54%,
               #19b83e 72%,
               #1fd44a 88%,
               #25e857 100%
            );
            position: relative;
            overflow: hidden;
            font-family: "Poppins", "Montserrat", sans-serif;
         }
         .faq-section::before {
            content: "";
            position: absolute;
            top: -30%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(
               circle,
               rgba(255, 255, 255, 0.12) 0%,
               transparent 70%
            );
            border-radius: 50%;
            pointer-events: none;
         }
         .faq-section::after {
            content: "";
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(
               circle,
               rgba(255, 200, 0, 0.1) 0%,
               transparent 70%
            );
            border-radius: 50%;
            pointer-events: none;
         }
         .faq-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
         }
         .faq-header {
            text-align: center;
            margin-bottom: 40px;
         }
         .faq-header h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 14px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
         }
         .faq-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.05rem;
            max-width: 600px;
            margin: 0 auto;
         }
         .faq-item {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            margin-bottom: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
            border-left: 5px solid transparent;
         }
         .faq-item:hover {
            transform: translateX(6px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.18);
            border-left-color: #ff9800;
         }
         .faq-item.active {
            border-left-color: #ff9800;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.18);
         }
         .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.05rem;
            color: #0a2e0f;
            transition:
               background 0.3s ease,
               color 0.3s ease;
            user-select: none;
            gap: 16px;
         }
         .faq-question:hover {
            background: rgba(11, 102, 35, 0.06);
            color: #0b6623;
         }
         .faq-item.active .faq-question {
            background: rgba(11, 102, 35, 0.08);
            color: #0b6623;
         }
         .faq-question i {
            font-size: 1rem;
            color: #0b6623;
            transition:
               transform 0.4s cubic-bezier(0.25, 1, 0.5, 1),
               color 0.3s ease;
            flex-shrink: 0;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(11, 102, 35, 0.1);
         }
         .faq-item.active .faq-question i {
            transform: rotate(180deg);
            background: #0b6623;
            color: #ffffff;
         }
         .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition:
               max-height 0.5s cubic-bezier(0.25, 1, 0.5, 1),
               padding 0.4s ease;
            padding: 0 24px;
            color: #444;
            font-size: 0.95rem;
            line-height: 1.75;
         }
         .faq-item.active .faq-answer {
            max-height: 300px;
            padding: 0 24px 22px 24px;
         }
         .faq-answer p {
            margin: 0;
         }
         @media (max-width: 768px) {
            .faq-section {
               padding: 40px 16px;
            }
            .faq-header h2 {
               font-size: 1.7rem;
            }
            .faq-header p {
               font-size: 0.95rem;
            }
            .faq-question {
               padding: 16px 18px;
               font-size: 0.95rem;
            }
            .faq-answer {
               padding: 0 18px;
               font-size: 0.9rem;
            }
            .faq-item.active .faq-answer {
               padding: 0 18px 18px 18px;
            }
         }
         @media (max-width: 480px) {
            .faq-header h2 {
               font-size: 1.4rem;
            }
            .faq-question {
               padding: 14px 16px;
               font-size: 0.88rem;
            }
            .faq-answer {
               padding: 0 16px;
               font-size: 0.85rem;
            }
            .faq-item.active .faq-answer {
               padding: 0 16px 16px 16px;
            }
         }

         /* ===== NEWSLETTER ===== */
         .newsletter-section {
            padding: 40px 0;
            background: var(--primary-green);
            color: #fff;
            text-align: center;
         }
         .newsletter-section .shadow-text {
            display: block;
            font-size: 64px;
            font-weight: 800;
            color: rgba(255, 255, 255, 0.06);
            line-height: 1;
            margin-bottom: -20px;
            letter-spacing: 3px;
            text-transform: uppercase;
         }
         .newsletter-section h2 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 16px;
         }
         .newsletter-section p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
            max-width: 560px;
            margin: 0 auto 32px;
            line-height: 1.8;
         }
         .newsletter-form {
            max-width: 520px;
            margin: 0 auto;
            position: relative;
         }
         .newsletter-form input[type="email"] {
            width: 100%;
            padding: 16px 140px 16px 24px;
            border-radius: 100px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
         }
         .newsletter-form input[type="email"]::placeholder {
            color: rgba(255, 255, 255, 0.6);
         }
         .newsletter-form input[type="email"]:focus {
            border-color: var(--primary-orange);
            background: rgba(255, 255, 255, 0.15);
         }
         .newsletter-form input[type="submit"] {
            position: absolute;
            right: 4px;
            top: 4px;
            bottom: 4px;
            background: var(--primary-orange);
            color: #fff;
            border: none;
            border-radius: 100px;
            padding: 0 32px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
         }
         .newsletter-form input[type="submit"]:hover {
            background: #d16f00;
         }

         /* ===== FOOTER ===== */
         .footer {
            background: #0a2e0f;
            color: rgba(255, 255, 255, 0.8);
            padding: 50px 0 0;
         }
         .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
            gap: 40px;
            padding-bottom: 50px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
         }
         .footer-brand img {
            max-height: 70px;
            margin-bottom: 16px;
         }
         .footer-brand p {
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.7);
         }
         .footer-social {
            display: flex;
            gap: 12px;
         }
         .footer-social a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 15px;
            transition: 0.3s;
         }
         .footer-social a:hover {
            background: var(--primary-orange);
            transform: translateY(-3px);
         }
         .footer h4 {
            color: #fff;
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 20px;
         }
         .footer-links li {
            margin-bottom: 10px;
         }
         .footer-links li a {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            transition: 0.3s;
         }
         .footer-links li a:hover {
            color: var(--primary-orange);
            padding-left: 4px;
         }
         .footer-contact li {
            display: flex;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
         }
         .footer-contact li i {
            color: var(--primary-orange);
            font-size: 16px;
            margin-top: 3px;
            flex-shrink: 0;
         }
         .footer-contact li a {
            color: rgba(255, 255, 255, 0.7);
         }
         .footer-contact li a:hover {
            color: var(--primary-orange);
         }
         .footer-bottom {
            padding: 24px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
            flex-wrap: wrap;
            gap: 12px;
         }
         .footer-bottom a {
            color: var(--primary-orange);
         }

         /* ===== FLOATING WHATSAPP ===== */
         .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
         }
         .whatsapp-main {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #25d366;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            box-shadow: 0 4px 16px rgba(37, 211, 102, 0.4);
            cursor: pointer;
            transition: 0.3s;
            border: none;
         }
         .whatsapp-main:hover {
            transform: scale(1.08);
         }
         .whatsapp-sub {
            display: flex;
            flex-direction: column;
            gap: 8px;
         }
         .whatsapp-sub a {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
         }
         .whatsapp-sub a:hover {
            transform: scale(1.1);
         }
         .whatsapp-sub a.call-btn {
            background: #1038ea;
         }
         .whatsapp-sub a.wa-btn {
            background: #48c857;
         }

         /* ===== RESPONSIVE ===== */
         @media (max-width: 1024px) {
            .hero h1 {
               font-size: 40px;
            }
            .about-grid {
               grid-template-columns: 1fr;
               gap: 40px;
            }
            .packages-grid {
               grid-template-columns: repeat(2, 1fr);
            }
            .footer-grid {
               grid-template-columns: 1fr 1fr;
            }
            .section-heading .shadow-text {
               font-size: 56px;
            }
            .about-heading .shadow-text {
               font-size: 48px;
            }
            .newsletter-section .shadow-text {
               font-size: 48px;
            }
            .nav-menu {
               display: none;
            }
            .hamburger {
               display: block;
            }
            .travel-section .travel-heading {
               margin-bottom: 30px;
            }
            .travel-section .travel-heading h1 {
               font-size: 32px;
               margin-bottom: 30px;
            }
            .travel-section .travel-heading p {
               font-size: 16px;
            }
            .travel-section .travel-grid {
               gap: 10px;
            }
            .travel-section .center-column {
               height: 650px;
            }
            .travel-section .info-card {
               min-height: 210px;
               padding: 22px 20px;
            }
            .travel-section .info-card h2 {
               font-size: 20px;
            }
            .travel-section .info-card p {
               font-size: 15px;
            }
            .travel-section .icon-box {
               width: 62px;
               height: 62px;
            }
         }
         @media (max-width: 991px) {
            .travel-section {
               padding: 20px 25px 50px;
            }
            .travel-section .background-text {
               font-size: 75px;
            }
            .travel-section .travel-heading h1 {
               font-size: 30px;
            }
            .travel-section .travel-heading p {
               font-size: 16px;
            }
            .travel-section .desktop-break {
               display: none;
            }
            .travel-section .travel-grid {
               grid-template-columns: 1fr 1fr;
               gap: 15px;
            }
            .travel-section .center-column {
               grid-column: 1 / -1;
               grid-row: 1;
               height: 450px;
            }
            .travel-section .left-column {
               grid-column: 1;
               grid-row: 2;
            }
            .travel-section .right-column {
               grid-column: 2;
               grid-row: 2;
            }
            .travel-section .info-card {
               min-height: 220px;
            }
            .travel-section .side-image {
               height: 220px;
            }
         }
         @media (max-width: 767px) {
            .top-bar .container {
               flex-direction: column;
               gap: 8px;
               text-align: center;
            }
            .top-bar-left {
               justify-content: center;
               gap: 12px;
               font-size: 12px;
            }
            .top-bar-right {
               justify-content: center;
            }
            .main-header .container {
               flex-wrap: wrap;
               gap: 12px;
            }
            .logo img {
               max-height: 50px;
            }
            .btn-plan-trip {
               padding: 8px 18px;
               font-size: 12px;
            }
            .hero {
               min-height: 600px;
            }
            .hero h1 {
               font-size: 30px;
            }
            .hero p {
               font-size: 15px;
            }
            .hero-buttons {
               flex-direction: column;
            }
            .btn-primary,
            .btn-outline {
               width: 100%;
               text-align: center;
            }
            .packages-grid {
               grid-template-columns: 1fr;
            }
            .footer-grid {
               grid-template-columns: 1fr;
               gap: 30px;
            }
            .footer-bottom {
               flex-direction: column;
               text-align: center;
            }
            .section-heading .shadow-text {
               font-size: 40px;
            }
            .about-heading .shadow-text {
               font-size: 36px;
            }
            .newsletter-section .shadow-text {
               font-size: 36px;
            }
            .section-heading h2 {
               font-size: 28px;
            }
            .about-heading h2 {
               font-size: 28px;
            }
            .newsletter-section h2 {
               font-size: 26px;
            }
            .about-counters {
               grid-template-columns: 1fr 1fr;
            }
            .about-images {
               grid-template-columns: 1fr;
            }
            .about-images .img-large {
               grid-column: 1 / 2;
               grid-row: auto;
            }
            .about-images .img-small,
            .about-images .img-small2 {
               grid-column: 1 / 2;
               grid-row: auto;
            }
            .choose-image-grid {
               grid-template-columns: 1fr;
            }
            .choose-image-grid .img-wide {
               grid-column: 1 / 2;
            }
            .newsletter-form input[type="email"] {
               padding: 14px 120px 14px 18px;
               font-size: 14px;
            }
            .newsletter-form input[type="submit"] {
               padding: 0 22px;
               font-size: 13px;
            }
            .whatsapp-float {
               bottom: 16px;
               right: 16px;
            }
            .whatsapp-main {
               width: 50px;
               height: 50px;
               font-size: 24px;
            }
            .whatsapp-sub a {
               width: 42px;
               height: 42px;
               font-size: 17px;
            }
            .travel-section {
               padding: 20px 16px 45px;
            }
            .travel-section .background-text {
               font-size: 52px;
               top: 0;
               opacity: 0.7;
            }
            .travel-section .travel-heading {
               margin-bottom: 25px;
               padding: 0 5px;
            }
            .travel-section .travel-heading h1 {
               font-size: 27px;
               margin-bottom: 20px;
            }
            .travel-section .travel-heading p {
               font-size: 15px;
               line-height: 1.6;
            }
            .travel-section .travel-grid {
               display: flex;
               flex-direction: column;
               gap: 12px;
            }
            .travel-section .center-column {
               order: 1;
               width: 100%;
               height: 430px;
               border-radius: 18px;
            }
            .travel-section .left-column {
               order: 2;
               display: flex;
               flex-direction: column;
               gap: 12px;
            }
            .travel-section .right-column {
               order: 3;
               display: flex;
               flex-direction: column;
               gap: 12px;
            }
            .travel-section .info-card {
               min-height: auto;
               padding: 25px 20px;
               border-radius: 18px;
            }
            .travel-section .icon-box {
               width: 60px;
               height: 60px;
               margin-bottom: 18px;
            }
            .travel-section .icon-box i {
               font-size: 25px;
            }
            .travel-section .info-card h2 {
               font-size: 20px;
               margin-bottom: 8px;
            }
            .travel-section .info-card p {
               font-size: 15px;
               line-height: 1.55;
            }
            .travel-section .side-image,
            .travel-section .top-image {
               height: 230px;
               border-radius: 18px;
            }
         }
         @media (max-width: 480px) {
            .travel-section {
               padding-left: 12px;
               padding-right: 12px;
            }
            .travel-section .background-text {
               font-size: 40px;
            }
            .travel-section .travel-heading h1 {
               font-size: 23px;
               margin-bottom: 20px;
            }
            .travel-section .travel-heading p {
               font-size: 14px;
            }
            .travel-section .center-column {
               height: 350px;
               border-radius: 16px;
            }
            .travel-section .info-card {
               padding: 22px 18px;
               border-radius: 16px;
            }
            .travel-section .icon-box {
               width: 55px;
               height: 55px;
               margin-bottom: 15px;
            }
            .travel-section .icon-box i {
               font-size: 23px;
            }
            .travel-section .info-card h2 {
               font-size: 18px;
            }
            .travel-section .info-card p {
               font-size: 14px;
            }
            .travel-section .side-image,
            .travel-section .top-image {
               height: 200px;
               border-radius: 16px;
            }
            .hero-dots {
               bottom: 20px;
            }
            .hero-dot {
               width: 10px;
               height: 10px;
            }
         }
         @media (max-width: 360px) {
            .travel-section .travel-heading h1 {
               font-size: 21px;
            }
            .travel-section .travel-heading p {
               font-size: 13px;
            }
            .travel-section .center-column {
               height: 300px;
            }
            .travel-section .info-card h2 {
               font-size: 17px;
            }
            .travel-section .info-card p {
               font-size: 13px;
            }
         }
      </style>
      <!-- Font Awesome Icons for Plan Section -->
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      />
      <!-- Google Fonts Inter for Plan Section -->
      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
         rel="stylesheet"
      />
   </head>
   <body>
      <?php include 'header.php'; ?>

      <!-- ===== HERO WITH AUTOMATIC CAROUSEL ===== -->
      <section
         class="hero fade-section animate fadeInUp"
      >
         <!-- Automatic Carousel -->
         <div class="hero-carousel">
            <div class="hero-slide active" style="background-image: url('image/sikkimall.jfif');"></div>
            <div class="hero-slide" style="background-image: url('image/TawangMonastery-ArunachalPradesh-1.jpg');"></div>
            <div class="hero-slide" style="background-image: url('image/shimlaall.jfif');"></div>
            <div class="hero-slide" style="background-image: url('image/images.jpg');"></div>
         </div>

         <!-- Dark overlay already via .hero::before -->

         <!-- Hero Content -->
   <div
   class="container"
   style="
      position: relative;
      z-index: 5;
      min-height: 700px;
      display: flex;
      align-items: center;
      color: white;
   "
>
   <div class="hero-content" style="color: white;">
      <div class="hero-badge" style="color: white;">
         <i class="fas fa-compact-disc bounce-icon" style="color: white;"></i>
         premium travel experiences
      </div>

      <h1 style="color: white;">
         Discover the World's<br />
         <span style="color: white;">Hidden</span> Wonders
      </h1>

      <p style="color: white;">
         Curated journeys through the breathtaking landscapes, rich
         cultures and hidden gems of Northeast India. From Himalayan
         valleys to serene villages — your unforgettable journey begins
         here.
      </p>

      <div class="hero-buttons">
         <a href="#" class="btn-primary" style="color: white;">
            Explore Destinations
         </a>

         <a href="#" class="btn-outline" style="color: white;">
            Our Story
         </a>
      </div>
   </div>
</div>

         <!-- Carousel Dots -->
         <div class="hero-dots">
            <button class="hero-dot active" data-index="0" aria-label="Slide 1"></button>
            <button class="hero-dot" data-index="1" aria-label="Slide 2"></button>
            <button class="hero-dot" data-index="2" aria-label="Slide 3"></button>
            <button class="hero-dot" data-index="3" aria-label="Slide 4"></button>
         </div>
      </section>

      <!-- ===== ABOUT ===== -->
      <section class="about-section fade-section animate fadeInUp one">
         <div class="container">
            <div class="about-grid">
               <div class="about-heading">
                  <span class="shadow-text">ABOUT US</span>
                  <h2>Trusted By Travelers</h2>
                  <p>
                     Thousands of tourists trust us to turn their dream trips
                     into reality. With years of local experience and a passion
                     for excellence, we deliver seamless travel experiences
                     across the Sikkim.
                  </p>
                  <div class="about-counters">
                     <div class="counter-item">
                        <div class="counter-title">Happy Travelers</div>
                        <div class="counter-number">
                           50,000<span class="suffix">+</span>
                        </div>
                     </div>
                     <div class="counter-item">
                        <div class="counter-title">Destinations</div>
                        <div class="counter-number">
                           20<span class="suffix">+</span>
                        </div>
                     </div>
                     <div class="counter-item">
                        <div class="counter-title">Google Rating</div>
                        <div class="counter-number">
                           5.0 <span class="suffix">★★★★★</span>
                        </div>
                     </div>
                     <div class="counter-item">
                        <div class="counter-title">Travel Support</div>
                        <div class="counter-number">
                           24<span class="suffix">/7</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="about-images">
                  <img
                     class="img-large"
                     src="image/Amarkantak.jfif"
                     alt="Travel"
                  />
                  <img
                     class="img-small"
                     src="image/Jagdalpur.jfif"
                     alt="Travel"
                  />
                  <img
                     class="img-small2"
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM.jpeg"
                     alt="Travel"
                  />
               </div>
            </div>
         </div>
      </section>

      <!-- ===== DESTINATIONS ===== -->
      <section class="destination-section fade-section animate fadeInUp two">
         <div class="destination-heading">
            <div class="background-title">DESTINATION</div>
            <h2>Featured Destinations</h2>
            <p>
               Handpicked travel experiences to the most iconic, breathtaking,
               and exciting <br class="desktop-break" />
               locations. Choose your next adventure and start making memories
               today.
            </p>
         </div>
         <div class="destination-grid">
            <!-- Column 1 -->
            <div class="destination-column">
               <div class="destination-card card-large">
                  <img
                     src="image/ajsjjsbfj.jfif"
                     alt="Nathula"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Manali</h3>
                     <p>
                        The Nathula, located at 14700 ft, at Indo-China border
                        is one day tour from Gangtok.
                     </p>
                  </div>
               </div>
               <div class="destination-card card-large">
                  <img
                     src="image/Amarkantak.jfif"
                     alt="Buddha Park"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Amarkantak</h3>
                     <p>
                        The Buddha Park Tour in Sikkim is a peaceful day
                        excursion featuring a majestic Buddha statue, landscaped
                        gardens, and scenic Himalayan views.
                     </p>
                  </div>
               </div>
            </div>
            <!-- Column 2 -->
            <div class="destination-column">
               <div class="destination-card card-gangtok">
                  <img
                     src="image/andman).jfif"
                     alt="Gangtok"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Andman</h3>
                     <p>
                        The Gangtok Tour in Sikkim is a scenic 3-days journey
                        featuring monasteries, mountain views, local markets,
                        and popular attractions.
                     </p>
                  </div>
               </div>
               <div class="destination-card card-zuluk">
                  <img
                     src="image/Anuranachal.jpg"
                     alt="Zuluk"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Zuluk</h3>
                     <p>
                        Zuluk or Dzuluk is a Himalayan hamlet that is situated
                        in East Sikkim of the lower Himalayas at an altitude of
                        10,100 feet above sea level.
                     </p>
                  </div>
               </div>
            </div>
            <!-- Column 3 -->
            <div class="destination-column">
               <div class="destination-card card-large">
                  <img
                     src="image/Darjeeling.jfif"
                     alt="Lachung"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Darjeeling</h3>
                     <p>
                        The Lachung Tour in Sikkim is a scenic 3-days Himalayan
                        journey featuring waterfalls, snow-capped mountains,
                        monasteries, and the beautiful Yumthang Valley & Zero
                        Point.
                     </p>
                  </div>
               </div>
               <div class="destination-card card-large">
                  <img
                     src="image/Jagdalpur.jfif"
                     alt="Gurudongmar Lake"
                  />
                  <div class="card-overlay"></div>
                  <a href="#" class="arrow-btn"
                     ><i class="fa-solid fa-arrow-right"></i
                  ></a>
                  <div class="card-content">
                     <h3>Jagdalpur</h3>
                     <p>
                        Gurudongmar Lake is one of the highest freshwater lakes
                        present in the world.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ===== CHOOSE US / TRUSTED PARTNER ===== -->
      <section class="travel-section fade-section animate fadeInUp three">
         <!-- Background Text -->
         <div class="background-text">CHOOSE US</div>
         <!-- Heading -->
         <div class="travel-heading">
            <h1>Your Trusted Travel Partner</h1>
            <p>
               At Tripnest Travel, we make your travel dreams a reality with
               personalized services, <br class="desktop-break" />
               unbeatable prices, and unforgettable experiences.
            </p>
         </div>
         <!-- Main Grid -->
         <div class="travel-grid">
            <!-- LEFT COLUMN -->
            <div class="left-column">
               <!-- Card 1 -->
               <div class="info-card">
                  <div class="icon-box"><i class="fa-solid fa-map bounce-icon"></i></div>
                  <h2>Expertly Curated Packages</h2>
                  <p>
                     Carefully designed itineraries tailored to your
                     preferences.
                  </p>
               </div>
               <!-- Card 2 -->
               <div class="info-card">
                  <div class="icon-box">
                     <i class="fa-solid fa-headset bounce-icon"></i>
                  </div>
                  <h2>24/7 Customer Support</h2>
                  <p>
                     We’re here to assist you at every step of your journey,
                     anytime and anywhere you need us.
                  </p>
               </div>
               <!-- Left Image -->
               <div class="side-image">
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.49%20PM%20(1).jpeg"
                     alt="Travel Planning"
                  />
               </div>
            </div>
            <!-- CENTER COLUMN -->
            <div class="center-column">
               <img
                  src="image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM%20(1).jpeg"
                  alt="Travel Destination"
               />
            </div>
            <!-- RIGHT COLUMN -->
            <div class="right-column">
               <!-- Right Image -->
               <div class="side-image top-image">
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.47%20PM.jpeg"
                     alt="Travel Team"
                  />
               </div>
               <!-- Card 3 -->
               <div class="info-card">
                  <div class="icon-box"><i class="fa-solid fa-laptop bounce-icon"></i></div>
                  <h2>Hassle-Free Booking</h2>
                  <p>
                     Easy and secure booking process, giving you peace of mind.
                  </p>
               </div>
               <!-- Card 4 -->
               <div class="info-card">
                  <div class="icon-box">
                     <i class="fa-solid fa-user-tie bounce-icon"></i>
                  </div>
                  <h2>Travel Guide Included</h2>
                  <p>
                     Explore confidently with expert local guidance throughout
                     your journey.
                  </p>
               </div>
            </div>
         </div>
      </section>

      <!-- ===== PACKAGES ===== -->
      <section class="packages-section fade-section animate fadeInUp four">
         <div class="container">
            <div class="section-heading">
               <span class="shadow-text">PACKAGES</span>
               <h2>Find Your Perfect Trip</h2>
               <p>
                  From serene village escapes to thrilling city adventures, we
                  offer a range of expertly curated travel packages tailored to
                  your preferences and budget.
               </p>
            </div>
            <div class="packages-grid">
               <!-- Package 1 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="image/sikkim.avif"
                        alt="North & East Sikkim"
                     />
                     <span class="pkg-duration">6 Nights / 7 Days</span>
                  </div>
                  <div class="pkg-body">
                     <h3>North & East Sikkim</h3>
                     <ul>
                        <li><i class="fas fa-dot-circle"></i> NJP to NJP</li>
                        <li>
                           <i class="fas fa-dot-circle"></i> Gangtok, Nathula,
                           Lachung, Zero Point
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> All transport, food
                           and lodge Includes
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹18,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- Package 2 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="https://sikkimsundari.in/wp-content/uploads/2026/07/5.png"
                        alt="Darjeeling & Tinchuley"
                     />
                     <span class="pkg-duration">3 Nights / 4 Days</span>
                  </div>
                  <div class="pkg-body">
                     <h3>Darjeeling & Tinchuley</h3>
                     <ul>
                        <li><i class="fas fa-dot-circle"></i> NJP to NJP</li>
                        <li>
                           <i class="fas fa-dot-circle"></i> Tinchuley,
                           Darjeeling, Tiger Hill, Batasia Loop
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> All transport, food
                           and lodging Includes
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹8,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- Package 3 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="https://sikkimsundari.in/wp-content/uploads/2026/07/ChatGPT-Image-Jul-15-2026-05_14_21-PM.png"
                        alt="Pelling & Namchi"
                     />
                     <span class="pkg-duration">3 Nights / 4 Days</span>
                  </div>
                  <div class="pkg-body">
                     <h3>Pelling & Namchi</h3>
                     <ul>
                        <li><i class="fas fa-dot-circle"></i> NJP to NJP</li>
                        <li>
                           <i class="fas fa-dot-circle"></i> Pelling, Ravangla,
                           Namcchi,
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> All transport, food
                           and lodging Includes
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹8,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- Package 4 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="https://sikkimsundari.in/wp-content/uploads/2026/07/4.png"
                        alt="Silk Route"
                     />
                     <span class="pkg-duration">3 Nights / 4 Days</span>
                  </div>
                  <div class="pkg-body">
                     <h3>Silk Route</h3>
                     <ul>
                        <li><i class="fas fa-dot-circle"></i> NJP to NJP</li>
                        <li>
                           <i class="fas fa-dot-circle"></i> Zigzag Road,
                           Nathang Valley, old baba mandir
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> All transport, food
                           and lodging Includes
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹8,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- Package 5 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="https://sikkimsundari.in/wp-content/uploads/2026/07/5.png"
                        alt="Gangtok With Darjeeling"
                     />
                     <span class="pkg-duration">6 Days & 5 Nights</span>
                  </div>
                  <div class="pkg-body">
                     <h3>Gangtok With Darjeeling</h3>
                     <ul>
                        <li>
                           <i class="fas fa-dot-circle"></i> 2 Nights Gangtok
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> 2 Nights Darjeeling
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> All transport, food
                           and lodging includes
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹12,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- Package 6 -->
               <div class="package-card">
                  <div class="pkg-img">
                     <img
                        src="https://sikkimsundari.in/wp-content/uploads/2026/07/6.png"
                        alt="North Sikkim with Pelling"
                     />
                     <span class="pkg-duration">9 Days & 8 Nights</span>
                  </div>
                  <div class="pkg-body">
                     <h3>North Sikkim with Pelling</h3>
                     <ul>
                        <li>
                           <i class="fas fa-dot-circle"></i> 3 Nights Gangtok
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> 3 Nights North
                           Sikkim
                        </li>
                        <li>
                           <i class="fas fa-dot-circle"></i> 2 Nights Pelling
                        </li>
                     </ul>
                     <div class="pkg-price">
                        Starting from <strong>₹18,000</strong>/Person
                     </div>
                     <div class="pkg-actions">
                        <a href="tel:+918293954554" class="call-btn"
                           ><i class="fas fa-phone-alt"></i
                        ></a>
                        <a href="#" class="view-btn">View Details</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ===== PLAN YOUR DREAM TRIP ===== -->
      <section class="plan-hero-section fade-section animate fadeInUp five">
         <div class="plan-hero-container">
            <!-- Left Column: Info & Features -->
            <div class="plan-hero-left">
               <h1 class="plan-hero-title">
                  PLAN YOUR DREAM<br />TRIP WITH US
               </h1>
               <p class="plan-hero-subtitle">
                  Discover personalized travel plans, handpicked destinations,
                  and exclusive packages tailored just for you.
               </p>
               <div class="plan-feature-cards">
                  <div class="plan-feature-card">
                     <div class="plan-icon-box">
                        <i class="fa-solid fa-hotel bounce-icon"></i>
                     </div>
                     <div class="plan-feature-text">
                        <h3>Hotel & Homestay</h3>
                        <p>
                           Discover cozy stays, experience warm hospitality, and
                           create unforgettable memories.
                        </p>
                     </div>
                  </div>
                  <div class="plan-feature-card">
                     <div class="plan-icon-box">
                        <i class="fa-solid fa-car bounce-icon"></i>
                     </div>
                     <div class="plan-feature-text">
                        <h3>Taxi Rental</h3>
                        <p>
                           Book reliable taxis, enjoy comfortable rides, and
                           travel with complete peace of mind.
                        </p>
                     </div>
                  </div>
                  <div class="plan-feature-card">
                     <div class="plan-icon-box">
                        <i class="fa-solid fa-location-dot bounce-icon"></i>
                     </div>
                     <div class="plan-feature-text">
                        <h3>Tour Packages</h3>
                        <p>
                           Experience amazing destinations with carefully
                           planned tours and seamless travel arrangements.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Right Column: Booking Form -->
            <div class="plan-hero-right">
               <form class="plan-booking-form">
                  <div class="plan-form-grid">
                     <div class="plan-form-group">
                        <label for="fullname">Full Name</label>
                        <input
                           type="text"
                           id="fullname"
                           placeholder="Enter your Full name"
                        />
                     </div>
                     <div class="plan-form-group">
                        <label for="email">Email</label>
                        <input
                           type="email"
                           id="email"
                           placeholder="your@email.com"
                        />
                     </div>
                     <div class="plan-form-group">
                        <label for="phone">Contact Number</label>
                        <input
                           type="tel"
                           id="phone"
                           placeholder="Enter your Phone Number"
                        />
                     </div>
                     <div class="plan-form-group">
                        <label for="destination">Destination</label>
                        <input
                           type="text"
                           id="destination"
                           placeholder="Enter your dream destination (e.g."
                        />
                     </div>
                     <div class="plan-form-group">
                        <label for="style">Discover Your Travel Style</label>
                        <div class="plan-select-wrapper">
                           <select id="style">
                              <option value="" disabled selected hidden>
                                 e.g., Adventure, Relaxation
                              </option>
                              <option value="adventure">Adventure</option>
                              <option value="relaxation">Relaxation</option>
                              <option value="cultural">Cultural</option>
                           </select>
                        </div>
                     </div>
                     <div class="plan-form-group">
                        <label for="season">Travel Season</label>
                        <div class="plan-select-wrapper">
                           <select id="season">
                              <option value="" disabled selected hidden>
                                 e.g., Summer, Winter, Spring
                              </option>
                              <option value="summer">Summer</option>
                              <option value="winter">Winter</option>
                              <option value="spring">Spring</option>
                              <option value="autumn">Autumn</option>
                           </select>
                        </div>
                     </div>
                     <div class="plan-form-group full-width">
                        <label for="notes">Additional Information</label>
                        <textarea
                           id="notes"
                           rows="4"
                           placeholder="Enter any additional notes or preferences here..."
                        ></textarea>
                     </div>
                  </div>
                  <button type="submit" class="plan-submit-btn">
                     Find My Perfect Trip &rarr;
                  </button>
               </form>
            </div>
         </div>
      </section>

      <!-- ===== SEASONAL DESTINATIONS ===== -->
      <section
         class="plan-destinations-section fade-section animate fadeInUp six"
      >
         <div class="plan-destinations-container">
            <div class="plan-section-header">
               <h2 class="plan-bg-watermark">SEASONAL</h2>
               <h2 class="plan-section-title">Travel For The Best Seasons</h2>
               <p class="plan-section-subtitle">
                  Explore unforgettable destinations, perfectly timed to capture
                  the unique beauty and experiences each season has to offer.
               </p>
            </div>
            <div class="plan-destinations-grid">
               <!-- Darjeeling Tour -->
               <div
                  class="plan-destination-card plan-darjeeling"
                  style="
                     background-image: url(&quot;image/mainpaat.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Mainpaat</h3>
                     <p>
                        Explore Darjeeling's breathtaking Valleys, Tea Gardens,
                        snow-capped mountains and vibrant culture on an
                        unforgettable journey.
                     </p>
                  </div>
               </div>
               <!-- Gangtok Tour -->
               <div
                  class="plan-destination-card plan-gangtok"
                  style="
                     background-image: url(&quot;image/munar.jifi.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Gangtok Tour</h3>
                     <p>
                        Monasteries, Waterfalls, vibrant culture, and local
                        cuisine.
                     </p>
                  </div>
               </div>
               <!-- Namchi Char Dham -->
               <div
                  class="plan-destination-card plan-namchi"
                  style="
                     background-image: url(&quot;image/Rishop.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Rishop</h3>
                     <p>Sacred journey to Sikkim's four holy shrines.</p>
                  </div>
               </div>
               <!-- North Sikkim -->
               <div
                  class="plan-destination-card plan-north-sikkim"
                  style="
                     background-image: url(&quot;image/Neil%20Island.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Neil Island</h3>
                     <p>
                        North Sikkim tour offers world's highest lake, snow
                        valleys, natural waterfalls, Rhododendron sanctuary and
                        serene village experiences for every traveller.
                     </p>
                  </div>
               </div>
               <!-- Extra Darjeeling card -->
               <div
                  class="plan-destination-card plan-darjeeling"
                  style="
                     background-image: url(&quot;image/north_bangal.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Bengal</h3>
                     <p>
                        Explore Darjeeling's breathtaking Valleys, Tea Gardens,
                        snow-capped mountains and vibrant culture on an
                        unforgettable journey.
                     </p>
                  </div>
               </div>
               <!-- Extra Gangtok card -->
               <div
                  class="plan-destination-card plan-gangtok"
                  style="
                     background-image: url(&quot;image/Panchmarhi.jfif?q=80&w=600&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Panchmarhi</h3>
                     <p>
                        Monasteries, Waterfalls, vibrant culture, and local
                        cuisine.
                     </p>
                  </div>
               </div>
               <!-- Extra Gangtok card -->
               <div
                  class="plan-destination-card plan-gangtok"
                  style="
                     background-image: url(&quot;image/Darjeeling5.jfif&quot;);
                  "
               >
                  <div class="plan-card-overlay"></div>
                  <button class="plan-action-btn" aria-label="Explore">
                     <i class="fa-solid fa-arrow-right"></i>
                  </button>
                  <div class="plan-card-content">
                     <h3>Darjling</h3>
                     <p>
                        Monasteries, Waterfalls, vibrant culture, and local
                        cuisine.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ===== GALLERY ===== -->
      <section
         class="gallery-section min-h-screen flex flex-col justify-between pt-12 pb-16 px-4 sm:px-6 lg:px-12 fade-section animate fadeInUp seven"
      >
         <header
            class="text-center watermark-container mb-10 max-w-4xl mx-auto"
         >
            <!-- Background Watermark Text -->
            <div class="watermark-text" aria-hidden="true">GALLERY</div>

            <!-- Main Title & Subtitle -->
            <div class="relative z-10 pt-4">
               <h1
                  class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-wide text-gray-900 uppercase mb-3"
               >
                  Our Travel Memories
               </h1>
               <p
                  class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-medium leading-relaxed px-2"
               >
                  Explore unforgettable journeys, breathtaking destinations, and
                  cherished travel moments.
               </p>
            </div>
         </header>

         <main class="max-w-7xl mx-auto w-full mb-12">
            <div
               id="galleryGrid"
               class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6"
            >
               <!-- Card 1 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.43%20PM%20(1).jpeg', 'Frozen High-Altitude Himalayan Lake')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.43%20PM%20(1).jpeg"
                     alt="High altitude frozen lake in Sikkim"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 2 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.43%20PM.jpeg', 'Char Dham Lord Shiva Statue Temple Complex')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.43%20PM.jpeg"
                     alt="Shiva Statue Temple Complex"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 3 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.44%20PM%20(1).jpeg', 'Darjeeling Himalayan Railway Toy Train')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.44%20PM%20(1).jpeg"
                     alt="Toy train passing mountain railway tracks"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                    
                  </div>
               </div>

               <!-- Card 4 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.44%20PM.jpeg', 'Lush Himalayan Alpine Valley')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.44%20PM.jpeg"
                     alt="Lush green mountain valley"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 5 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.47%20PM.jpeg', 'Snowy Mountain Reflection in Glacial Lake')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.47%20PM.jpeg"
                     alt="Snow-covered mountain peak reflected in lake"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 6 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.49%20PM%20(1).jpeg', 'Decorated Himalayan Yak beside Glacial Lake')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.49%20PM%20(1).jpeg"
                     alt="Yak with colorful saddle beside turquoise lake"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 7 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM%20(1).jpeg', 'Turquoise Alpine Lake Surrounded by Snow Peaks')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM%20(1).jpeg"
                     alt="Turquoise lake among mountain ridges"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                     
                  </div>
               </div>

               <!-- Card 8 -->
               <div
                  class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3]"
                  onclick="openLightbox('image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM.jpeg', 'Buddha Statue at Ravangla Park')"
               >
                  <img
                     src="image/WhatsApp%20Image%202026-08-11%20at%206.35.50%20PM.jpeg"
                     alt="Golden Buddha Park statue in gardens"
                     class="w-full h-full object-cover rounded-[20px]"
                     loading="lazy"
                  />
                  <div
                     class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4"
                  >
                    
                  </div>
               </div>
            </div>
         </main>

         <div class="text-center my-4">
            <button
               id="loadMoreBtn"
               onclick="loadMoreImages()"
               class="btn-green text-white text-sm sm:text-base font-semibold px-8 py-3 rounded-full shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 inline-flex items-center gap-2"
            >
               <span id="btnText">Load More</span>
               <div id="btnSpinner" class="spinner hidden"></div>
            </button>
         </div>

         <div
            id="lightbox"
            class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 modal-backdrop"
            onclick="closeLightboxOnBackdrop(event)"
         >
            <div
               class="relative max-w-4xl w-full bg-black/40 rounded-2xl p-2 sm:p-4 overflow-hidden shadow-2xl flex flex-col items-center"
            >
               <!-- Close Button -->
               <button
                  onclick="closeLightbox()"
                  class="absolute top-4 right-4 text-white bg-black/50 hover:bg-black/80 rounded-full w-10 h-10 flex items-center justify-center transition focus:outline-none z-10"
                  aria-label="Close modal"
               >
                  <i class="fa-solid fa-xmark text-xl"></i>
               </button>

               <!-- Lightbox Image -->
               <div
                  class="w-full max-h-[80vh] flex items-center justify-center overflow-hidden rounded-xl"
               >
                  <img
                     id="lightboxImg"
                     src=""
                     alt="Full size view"
                     class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl shadow-lg"
                  />
               </div>

               <!-- Caption -->
               <div
                  id="lightboxCaption"
                  class="mt-3 text-white text-center font-medium text-base tracking-wide px-4"
               ></div>
            </div>
         </div>
      </section>

      <!-- ===== TESTIMONIALS ===== -->
      <section
         class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 flex flex-col justify-center items-center bg-[#f7f9fc] fade-section animate fadeInUp eight"
      >
         <!-- Header with Watermark -->
         <header
            class="text-center watermark-container mb-10 md:mb-14 max-w-4xl mx-auto w-full"
         >
            <div class="watermark-text" aria-hidden="true">TESTIMONIAL</div>

            <div class="relative z-10 pt-2">
               <h1
                  class="text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 mb-3"
               >
                  What Our Client Say
               </h1>
               <p
                  class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-medium leading-relaxed px-2"
               >
                  Hear What Our Happy Travelers Have to Say About Their
                  Unforgettable Journeys and Seamless Experiences With us!
               </p>
            </div>
         </header>

         <!-- Main Grid Section -->
         <main class="max-w-7xl mx-auto w-full">
            <div
               class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7 items-start"
            >
               <!-- COLUMN 1 -->
               <div class="flex flex-col gap-6 lg:gap-7">
                  <!-- Card 1: Priyansh Pandey -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           Good budget travel agency<br />Had a great trip with
                           them.
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop"
                           alt="Priyansh Pandey"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Priyansh Pandey
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Family Traveler, India
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- Card 2: Harish Mohite -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           We just loved sikkim specially La chung - Nathu la
                           pass n zero point. Amazing N mesmerizing view 😍
                           point in la chung.
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop"
                           alt="Harish Mohite"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Harish Mohite
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Couple Traveller, India
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- COLUMN 2 (Middle Column with CTA button on top) -->
               <div class="flex flex-col gap-6 lg:gap-7">
                  <!-- View All Testimonials Button (Middle Column Header) -->
                  <div class="text-center my-1 lg:-mt-1">
                     <button
                        onclick="handleViewAll()"
                        class="btn-green-pill text-sm sm:text-base"
                     >
                        <span>View All Testimonial</span>
                        <i class="fa-solid fa-circle-arrow-right text-lg"></i>
                     </button>
                  </div>

                  <!-- Card 3: Kumar Gaurav -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           We had an excellent experience with Arjun during our
                           Sikkim tour.
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop"
                           alt="Kumar Gaurav"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Kumar Gaurav
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Family Traveler, India
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- Card 4: Hiral Jakharia -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           The car is always clean and shining, and Arjun is a
                           vibe for your drive.
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=200&auto=format&fit=crop"
                           alt="Hiral Jakharia"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Hiral Jakharia
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Family Traveler, India
                           </p>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- COLUMN 3 -->
               <div
                  class="flex flex-col gap-6 lg:gap-7 md:col-span-2 lg:col-span-1"
               >
                  <!-- Card 5: Akanksha Patel -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           Everything from planning to execution was smooth and
                           well-organized. Actually we booked 2nd time... so
                           much fun...!!!
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop"
                           alt="Akanksha Patel"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Akanksha Patel
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Adventure Enthusiast, India
                           </p>
                        </div>
                     </div>
                  </div>

                  <!-- Card 6: Haripriya S -->
                  <div class="testimonial-card">
                     <div>
                        <div
                           class="flex items-center gap-1 star-gold text-sm sm:text-base mb-3"
                        >
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                           <i class="fa-solid fa-star"></i>
                        </div>
                        <p
                           class="text-gray-700 text-sm sm:text-[15px] font-normal leading-relaxed mb-6"
                        >
                           Our 9-day girls-only trip to Sikkim was an incredible
                           experience, and a major reason behind its success was
                           our cab pilot.
                        </p>
                     </div>
                     <div class="flex items-center gap-3">
                        <img
                           src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop"
                           alt="Haripriya S"
                           class="w-12 h-12 rounded-full object-cover border-2 border-white shadow-sm"
                        />
                        <div>
                           <h3
                              class="font-bold text-gray-900 text-sm sm:text-base leading-tight"
                           >
                              Haripriya S
                           </h3>
                           <p class="text-xs text-gray-500 font-medium mt-0.5">
                              Group Traveler, India
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>

         <!-- Interactive Toast Notification Modal -->
         <div
            id="toast"
            class="fixed bottom-6 right-6 bg-gray-900 text-white px-5 py-3 rounded-xl shadow-2xl transition-all duration-300 opacity-0 translate-y-4 pointer-events-none flex items-center gap-3 z-50"
         >
            <i class="fa-solid fa-circle-check text-green-400 text-lg"></i>
            <span id="toastMsg" class="text-sm font-medium"
               >Redirecting to all testimonials...</span
            >
         </div>
      </section>

      <!-- ===== FAQ ===== -->
      <section class="faq-section fade-section animate fadeInUp one">
         <div class="faq-container">
            <div class="faq-header">
               <h2>Frequently Asked Questions</h2>
               <p>
                  Find answers to the most common questions about our tours,
                  bookings, and travel services.
               </p>
            </div>

            <div class="faq-list">
               <!-- FAQ 1 -->
               <div class="faq-item active">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >1. How do I book a tour package with Tripnest
                        Travel?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Booking with us is simple. You can call us directly at
                        +91 8293954554, WhatsApp us, or fill out the "Plan Your
                        Trip" form on our website. Our travel experts will get
                        back to you within 24 hours with a customized itinerary
                        and quote.
                     </p>
                  </div>
               </div>

               <!-- FAQ 2 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span>2. What is the best time to visit Sikkim?</span>
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Sikkim can be visited year-round. March to May (spring)
                        and October to December (autumn) offer clear skies and
                        pleasant weather. For snow lovers, December to February
                        is ideal. Monsoon (June–September) brings lush greenery
                        but occasional landslides.
                     </p>
                  </div>
               </div>

               <!-- FAQ 3 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >3. Do I need a permit to visit North Sikkim and
                        Nathula?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Yes, Indian nationals need an Inner Line Permit (ILP)
                        for North Sikkim, Nathula, and other protected areas. We
                        handle all permit arrangements for our guests as part of
                        the package. Foreign nationals require a Protected Area
                        Permit (PAP), which we also assist with.
                     </p>
                  </div>
               </div>

               <!-- FAQ 4 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span>4. What is included in your tour packages?</span>
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Our standard packages include accommodation, daily
                        breakfast and dinner, all transfers by private vehicle,
                        sightseeing as per itinerary, permits, and driver
                        allowances. Flights/train tickets, lunch, entry fees,
                        and personal expenses are generally not included unless
                        specified.
                     </p>
                  </div>
               </div>

               <!-- FAQ 5 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span>5. Are your packages customizable?</span>
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Absolutely! Every itinerary can be tailored to your
                        dates, budget, and interests. Whether you want a relaxed
                        family trip, an adventurous trek, or a honeymoon
                        special, we will design the perfect journey for you.
                     </p>
                  </div>
               </div>

               <!-- FAQ 6 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >6. What is your cancellation and refund policy?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Cancellations made 30 days before departure receive a
                        full refund minus a small processing fee. 15–29 days
                        prior: 50% refund. Less than 15 days: no refund.
                        However, we always try to accommodate date changes
                        whenever possible.
                     </p>
                  </div>
               </div>

               <!-- FAQ 7 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >7. Is it safe to travel to Sikkim with children and
                        seniors?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Yes, Sikkim is very safe and family-friendly. We
                        customize the pace and altitude exposure for children
                        and elderly travelers. For high-altitude areas like
                        Gurudongmar, we recommend consulting a doctor first.
                     </p>
                  </div>
               </div>

               <!-- FAQ 8 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span>8. What kind of vehicles do you provide?</span>
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        We provide well-maintained, comfortable vehicles
                        including Swift Dzire, Innova, Xylo, and Tempo
                        Traveller, depending on group size and terrain. All our
                        drivers are experienced local professionals who know the
                        mountain roads well.
                     </p>
                  </div>
               </div>

               <!-- FAQ 9 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >9. Do you arrange airport/railway station
                        pickups?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        Yes, we provide pickup and drop services from NJP
                        Railway Station, Bagdogra Airport, and Gangtok Helipad
                        as part of most packages. Just share your arrival
                        details with us in advance.
                     </p>
                  </div>
               </div>

               <!-- FAQ 10 -->
               <div class="faq-item">
                  <div class="faq-question" onclick="toggleFaq(this)">
                     <span
                        >10. How can I contact you for urgent assistance during
                        my trip?</span
                     >
                     <i class="fas fa-chevron-down"></i>
                  </div>
                  <div class="faq-answer">
                     <p>
                        We offer 24/7 live support. You can reach us anytime at
                        +91 8293954554 or +91 9883019971. Our team is always
                        just a call away to ensure your journey remains smooth
                        and stress-free.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- ===== FOOTER ===== -->
    <?php include 'footer.php'; ?>

      <!-- ===== FLOATING WHATSAPP ===== -->
     

      <script>
         // ===== HERO CAROUSEL (AUTOMATIC) =====
         (function() {
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.hero-dot');
            let currentSlide = 0;
            const totalSlides = slides.length;
            let slideInterval;

            function goToSlide(index) {
               // Remove active from all slides and dots
               slides.forEach(s => s.classList.remove('active'));
               dots.forEach(d => d.classList.remove('active'));

               // Add active to current
               slides[index].classList.add('active');
               if (dots[index]) dots[index].classList.add('active');
               currentSlide = index;
            }

            function nextSlide() {
               const next = (currentSlide + 1) % totalSlides;
               goToSlide(next);
            }

            function startAutoPlay() {
               if (slideInterval) clearInterval(slideInterval);
               slideInterval = setInterval(nextSlide, 5000); // 5 seconds
            }

            // Dot click handlers
            dots.forEach((dot, idx) => {
               dot.addEventListener('click', () => {
                  goToSlide(idx);
                  startAutoPlay(); // reset timer on manual navigation
               });
            });

            // Start autoplay
            startAutoPlay();

            // Pause on hover (optional)
            const heroSection = document.querySelector('.hero');
            heroSection.addEventListener('mouseenter', () => {
               if (slideInterval) clearInterval(slideInterval);
            });
            heroSection.addEventListener('mouseleave', startAutoPlay);
         })();

         // Intersection Observer for fade-in effect on all sections
         const fadeSections = document.querySelectorAll(".fade-section");
         const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
         };
         const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
               if (entry.isIntersecting) {
                  entry.target.classList.add("visible");
                  observer.unobserve(entry.target);
               }
            });
         }, observerOptions);
         fadeSections.forEach((section) => observer.observe(section));

         // Additional Unsplash travel photo collection for dynamic "Load More" functionality
         const extraImages = [
            {
               url: "https://images.unsplash.com/photo-1548013146-72479768bada?q=80&w=800&auto=format&fit=crop",
               fullUrl:
                  "https://images.unsplash.com/photo-1548013146-72479768bada?q=80&w=1200&auto=format&fit=crop",
               title: "Taj Mahal at Sunrise, Agra",
            },
            {
               url: "https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?q=80&w=800&auto=format&fit=crop",
               fullUrl:
                  "https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?q=80&w=1200&auto=format&fit=crop",
               title: "Sunset at Goa Tropical Coastline",
            },
            {
               url: "https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?q=80&w=800&auto=format&fit=crop",
               fullUrl:
                  "https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?q=80&w=1200&auto=format&fit=crop",
               title: "Emerald Kerala Backwaters Houseboat",
            },
            {
               url: "https://images.unsplash.com/photo-1524492412937-b28074a5d7da?q=80&w=800&auto=format&fit=crop",
               fullUrl:
                  "https://images.unsplash.com/photo-1524492412937-b28074a5d7da?q=80&w=1200&auto=format&fit=crop",
               title: "Majestic Palace Architecture",
            },
         ];

         let hasLoadedExtra = false;

         // Load More functionality simulation
         function loadMoreImages() {
            const btnText = document.getElementById("btnText");
            const btnSpinner = document.getElementById("btnSpinner");
            const loadBtn = document.getElementById("loadMoreBtn");

            if (hasLoadedExtra) {
               window.scrollTo({ top: 0, behavior: "smooth" });
               return;
            }

            btnText.textContent = "Loading...";
            btnSpinner.classList.remove("hidden");
            loadBtn.disabled = true;

            setTimeout(() => {
               const grid = document.getElementById("galleryGrid");

               extraImages.forEach((imgData) => {
                  const cardHtml = `
            <div class="gallery-card cursor-pointer bg-white shadow-sm relative group aspect-[4/3] animate-fade-in"
                 onclick="openLightbox('${imgData.fullUrl}', '${imgData.title}')">
              <img src="${imgData.url}" 
                   alt="${imgData.title}" 
                   class="w-full h-full object-cover rounded-[20px]"
                   loading="lazy">
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[20px] flex items-end p-4">
                <p class="text-white text-sm font-semibold tracking-wide">${imgData.title}</p>
              </div>
            </div>
          `;
                  grid.insertAdjacentHTML("beforeend", cardHtml);
               });

               hasLoadedExtra = true;
               btnText.textContent = "Back To Top";
               btnSpinner.classList.add("hidden");
               loadBtn.disabled = false;
            }, 700);
         }

         // Lightbox Modal functions
         function openLightbox(imageUrl, title) {
            const modal = document.getElementById("lightbox");
            const lightboxImg = document.getElementById("lightboxImg");
            const lightboxCaption = document.getElementById("lightboxCaption");

            lightboxImg.src = imageUrl;
            lightboxCaption.textContent = title;

            modal.classList.remove("hidden");
            document.body.style.overflow = "hidden";
         }

         function closeLightbox() {
            const modal = document.getElementById("lightbox");
            modal.classList.add("hidden");
            document.body.style.overflow = "";
         }

         function closeLightboxOnBackdrop(event) {
            if (event.target.id === "lightbox") {
               closeLightbox();
            }
         }

         document.addEventListener("keydown", function (e) {
            if (e.key === "Escape") {
               closeLightbox();
            }
         });

         // Testimonial "View All" toast
         function handleViewAll() {
            const toast = document.getElementById("toast");
            toast.classList.remove(
               "opacity-0",
               "translate-y-4",
               "pointer-events-none",
            );

            setTimeout(() => {
               toast.classList.add(
                  "opacity-0",
                  "translate-y-4",
                  "pointer-events-none",
               );
            }, 3000);
         }

         // FAQ Accordion toggle
         function toggleFaq(element) {
            const item = element.parentElement;
            const isActive = item.classList.contains("active");

            document.querySelectorAll(".faq-item").forEach((faq) => {
               faq.classList.remove("active");
            });

            if (!isActive) {
               item.classList.add("active");
            }
         }
      </script>
   </body>
</html>