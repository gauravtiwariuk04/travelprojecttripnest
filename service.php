<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
  <title>Tripinest · Services · Auto Slider</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html, body {
      width: 100%;
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
      background: #f9f5f0;
      color: #2d2d2d;
    }

    /* ===== ANIMATION ===== */
    .animate {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      opacity: 0;
    }
    .one { -webkit-animation-delay: 0.2s; animation-delay: 0.2s; }
    .two { -webkit-animation-delay: 0.4s; animation-delay: 0.4s; }
    .three { -webkit-animation-delay: 0.6s; animation-delay: 0.6s; }
    .four { -webkit-animation-delay: 0.8s; animation-delay: 0.8s; }
    .animate.is-visible { opacity: 1; }

    @-webkit-keyframes fadeInUp {
      from { opacity:0; -webkit-transform: translate3d(0,60px,0); transform: translate3d(0,60px,0); }
      to { opacity:1; -webkit-transform: none; transform: none; }
    }
    @keyframes fadeInUp {
      from { opacity:0; transform: translate3d(0,60px,0); }
      to { opacity:1; transform: none; }
    }
    .fadeInUp { -webkit-animation-name: fadeInUp; animation-name: fadeInUp; }

    @-webkit-keyframes fadeInDown {
      0% { opacity:0; -webkit-transform: translate3d(0,-80px,0); transform: translate3d(0,-80px,0); }
      100% { opacity:1; -webkit-transform: none; transform: none; }
    }
    @keyframes fadeInDown {
      0% { opacity:0; transform: translate3d(0,-80px,0); }
      100% { opacity:1; transform: none; }
    }
    .fadeInDown { -webkit-animation-name: fadeInDown; animation-name: fadeInDown; }

    @keyframes bounceIcon {
      0%,100%{ transform: translateY(0); }
      40%{ transform: translateY(-8px); }
      60%{ transform: translateY(-3px); }
      80%{ transform: translateY(-6px); }
    }

    /* ===== HEADER ===== */
    .main-header {
      width: 100%;
      min-height: 260px;
      background: linear-gradient(135deg, rgba(0,0,0,0.55), rgba(0,0,0,0.70)),
                  url('image/Darjeeling.jfif') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
      padding: 40px 20px;
    }
    .main-header::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 5px;
      background: linear-gradient(90deg, #f7971e, #ffd200, #f7971e);
      background-size: 200% 100%;
      animation: shimmer 3s ease-in-out infinite;
    }
    @keyframes shimmer {
      0%,100%{ background-position: 0% 50%; }
      50%{ background-position: 100% 50%; }
    }
    .header-content { position: relative; z-index: 2; }
    .header-content h1 {
      font-size: 3.4rem; font-weight: 800; color: #fff;
      text-shadow: 0 8px 30px rgba(0,0,0,0.5);
      letter-spacing: 2px;
    }
    .header-content h1 i { color: #ffd700; margin-right: 12px; animation: bounceIcon 2s infinite; }
    .header-content p {
      font-size: 1.1rem; color: rgba(255,255,255,0.9); font-weight: 300;
      margin-top: 6px; letter-spacing: 4px; text-transform: uppercase;
    }

    /* ===== SERVICES SECTION with SLIDER ===== */
    .services-section {
      padding: 50px 20px 40px;
      background: #f9f5f0;
    }
    .section-title {
      text-align: center;
      margin-bottom: 30px;
    }
    .section-title h2 {
      font-size: 2.4rem; font-weight: 700; color: #1a1a2e;
      display: inline-block;
      position: relative;
    }
    .section-title h2 i { color: #f7971e; margin-right: 12px; }
    .section-title h2::after {
      content: '';
      display: block;
      width: 60%; height: 4px;
      background: linear-gradient(90deg, #f7971e, #ffd200);
      margin: 6px auto 0;
      border-radius: 4px;
    }
    .section-title p {
      color: #888; font-size: 1rem; margin-top: 8px; font-weight: 300;
    }

    /* --- slider wrapper --- */
    .slider-wrapper {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding: 10px 0 20px;
    }
    .slider-track {
      display: flex;
      flex-wrap: nowrap;
      gap: 28px;
      width: max-content;
      padding: 6px 12px;
      margin: 0 auto;
      transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      will-change: transform;
    }

    /* card — same style */
    .service-card {
      flex: 0 0 auto;
      width: 210px;
      background: #ffffff;
      border-radius: 24px;
      padding: 22px 18px 24px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0,0,0,0.06), 0 4px 12px rgba(0,0,0,0.03);
      transition: transform 0.3s cubic-bezier(0.25,0.46,0.45,0.94),
                  box-shadow 0.3s ease,
                  background 0.3s ease;
      border: 1px solid rgba(247,151,30,0.08);
      cursor: default;
      position: relative;
      overflow: hidden;
    }
    .service-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 4px;
      background: linear-gradient(90deg, #f7971e, #ffd200);
      opacity: 0.6;
      transition: opacity 0.3s ease, height 0.3s ease;
    }
    .service-card:hover::before {
      opacity: 1;
      height: 5px;
    }
    .service-card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 20px 50px rgba(247,151,30,0.14), 0 8px 20px rgba(0,0,0,0.06);
      background: #ffffff;
      border-color: #ffd200;
    }

    .service-card .icon-wrapper {
      width: 64px; height: 64px;
      margin: 0 auto 14px;
      background: linear-gradient(135deg, #fef3e0, #fde8cc);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.0rem;
      color: #f7971e;
      transition: all 0.4s ease;
    }
    .service-card .icon-wrapper i {
      animation: bounceIcon 2.4s infinite;
      transition: transform 0.4s ease;
    }
    .service-card:hover .icon-wrapper {
      background: linear-gradient(135deg, #f7971e, #ffd200);
      color: #fff;
      transform: scale(1.06) rotate(-3deg);
      box-shadow: 0 8px 24px rgba(247,151,30,0.30);
    }
    .service-card:hover .icon-wrapper i {
      animation: none;
      transform: scale(1.05) rotate(3deg);
    }

    .service-card h3 {
      font-size: 1.1rem; font-weight: 700; color: #1a1a2e;
      margin-bottom: 6px;
      transition: color 0.3s ease;
    }
    .service-card:hover h3 { color: #f7971e; }
    .service-card p {
      font-size: 0.8rem; color: #777; line-height: 1.5; font-weight: 300;
      margin-bottom: 4px;
      transition: color 0.3s ease;
    }
    .service-card:hover p { color: #444; }

    .service-card .card-footer {
      margin-top: 14px;
      opacity: 0;
      transform: translateY(8px);
      transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .service-card:hover .card-footer {
      opacity: 1;
      transform: translateY(0);
    }
    .service-card .card-footer span {
      display: inline-block;
      background: linear-gradient(135deg, #f7971e, #ffd200);
      padding: 4px 18px;
      border-radius: 40px;
      font-size: 0.7rem;
      font-weight: 600;
      color: #1a1a2e;
      letter-spacing: 0.3px;
      box-shadow: 0 4px 14px rgba(247,151,30,0.20);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-card:hover .card-footer span {
      transform: scale(1.04);
      box-shadow: 0 8px 22px rgba(247,151,30,0.30);
    }

    /* slider dots */
    .slider-dots {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 18px;
      flex-wrap: wrap;
    }
    .slider-dots .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #d0cbc6;
      border: none;
      padding: 0;
      transition: background 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }
    .slider-dots .dot.active {
      background: #f7971e;
      transform: scale(1.25);
      box-shadow: 0 0 12px rgba(247,151,30,0.4);
    }
    .slider-dots .dot:hover {
      background: #f7971e;
      transform: scale(1.1);
    }

    /* ===== BOTTOM TRAVEL FAMILY BG ===== */
    .travel-family-bg {
      width: 100%;
      background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.75)),
                  url('image/Darjeeling.jfif') center/cover fixed no-repeat;
      padding: 50px 30px;
      text-align: center;
      border-top: 4px solid #ffd200;
      border-bottom: 4px solid #ffd200;
    }
    .travel-family-bg .overlay-content { max-width: 900px; margin: 0 auto; }
    .travel-family-bg .overlay-content h2 {
      font-size: 2.6rem; font-weight: 800; color: #fff;
      text-shadow: 0 4px 30px rgba(0,0,0,0.5);
    }
    .travel-family-bg .overlay-content h2 i { color: #ffd700; animation: bounceIcon 2.2s infinite; }
    .travel-family-bg .overlay-content p {
      font-size: 1.1rem; color: rgba(255,255,255,0.85); font-weight: 300;
      margin-top: 10px; max-width: 600px; margin-left: auto; margin-right: auto;
      line-height: 1.8;
    }
    .travel-family-bg .family-icons {
      display: flex; flex-wrap: wrap; justify-content: center;
      gap: 30px; margin-top: 30px;
    }
    .travel-family-bg .family-icons .icon-card {
      background: rgba(255,255,255,0.10);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      padding: 18px 28px;
      border-radius: 60px;
      border: 1px solid rgba(255,255,255,0.15);
      color: #fff;
      font-weight: 600;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 12px;
      transition: all 0.4s ease;
      box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    }
    .travel-family-bg .family-icons .icon-card i {
      font-size: 1.6rem; color: #ffd700; animation: bounceIcon 2.6s infinite;
    }
    .travel-family-bg .family-icons .icon-card:hover {
      transform: translateY(-6px) scale(1.03);
      background: rgba(255,255,255,0.20);
      border-color: #ffd700;
      box-shadow: 0 16px 48px rgba(255,215,0,0.20);
    }

    /* scrollbar global */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #f0ece8; }
    ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #f7971e, #ffd200); border-radius: 10px; }
    ::-webkit-scrollbar-thumb:hover { background: #e88a10; }

    /* ============================================================
       RESPONSIVE — 2 cards per row on all small screens
       ============================================================ */
    @media screen and (max-width: 1024px) {
      .service-card { width: 185px; padding: 18px 14px; }
      .service-card .icon-wrapper { width: 56px; height: 56px; font-size: 1.7rem; }
      .service-card h3 { font-size: 1rem; }
      .service-card p { font-size: 0.75rem; }
    }
    @media screen and (max-width: 768px) {
      .main-header { min-height: 200px; }
      .header-content h1 { font-size: 2.4rem; }
      .header-content p { font-size: 0.9rem; letter-spacing: 2px; }
      .section-title h2 { font-size: 1.8rem; }
      .service-card { width: 170px; padding: 16px 12px; border-radius: 20px; }
      .service-card .icon-wrapper { width: 50px; height: 50px; font-size: 1.5rem; margin-bottom: 10px; }
      .service-card h3 { font-size: 0.95rem; }
      .service-card p { font-size: 0.7rem; }
      .service-card .card-footer span { font-size: 0.6rem; padding: 3px 14px; }
      .slider-track { gap: 18px; }
      .travel-family-bg .overlay-content h2 { font-size: 1.8rem; }
      .travel-family-bg .family-icons .icon-card { padding: 14px 20px; font-size: 0.9rem; }
    }

    /* 2 cards per row on all screens <= 600px (phones) */
    @media screen and (max-width: 600px) {
      .main-header { min-height: 170px; }
      .header-content h1 { font-size: 2.0rem; }
      .header-content p { font-size: 0.8rem; letter-spacing: 1.5px; }
      .section-title h2 { font-size: 1.6rem; }

      /* force 2 cards per row */
      .service-card {
        flex: 0 0 calc(50% - 14px) !important;
        width: calc(50% - 14px) !important;
        max-width: calc(50% - 14px) !important;
        padding: 14px 10px;
      }
      .slider-track {
        flex-wrap: wrap !important;
        justify-content: center;
        gap: 14px 14px;
        width: 100% !important;
        transform: none !important;
        padding: 6px 4px;
      }
      .slider-dots { display: none !important; } /* hide dots on 2-column layout */
      .service-card .icon-wrapper { width: 48px; height: 48px; font-size: 1.4rem; }
      .service-card h3 { font-size: 0.9rem; }
      .service-card p { font-size: 0.7rem; }
      .service-card .card-footer span { font-size: 0.55rem; padding: 2px 12px; }
      .travel-family-bg { padding: 36px 18px; }
      .travel-family-bg .overlay-content h2 { font-size: 1.6rem; }
      .travel-family-bg .family-icons { gap: 20px; }
      .travel-family-bg .family-icons .icon-card { padding: 12px 18px; font-size: 0.8rem; }
    }

    @media screen and (max-width: 480px) {
      .main-header { min-height: 140px; }
      .header-content h1 { font-size: 1.6rem; }
      .header-content p { font-size: 0.7rem; letter-spacing: 1px; }
      .section-title h2 { font-size: 1.3rem; }

      .service-card {
        flex: 0 0 calc(50% - 10px) !important;
        width: calc(50% - 10px) !important;
        max-width: calc(50% - 10px) !important;
        padding: 12px 8px;
        border-radius: 18px;
      }
      .service-card .icon-wrapper { width: 42px; height: 42px; font-size: 1.2rem; margin-bottom: 6px; }
      .service-card h3 { font-size: 0.8rem; }
      .service-card p { font-size: 0.65rem; }
      .service-card .card-footer { margin-top: 10px; }
      .service-card .card-footer span { font-size: 0.5rem; padding: 2px 10px; }
      .slider-track { gap: 10px; }
      .travel-family-bg { padding: 28px 12px; }
      .travel-family-bg .overlay-content h2 { font-size: 1.3rem; }
      .travel-family-bg .overlay-content p { font-size: 0.9rem; }
      .travel-family-bg .family-icons { flex-direction: column; align-items: center; gap: 12px; }
      .travel-family-bg .family-icons .icon-card { width: 100%; max-width: 200px; justify-content: center; padding: 10px 14px; font-size: 0.75rem; }
    }

    @media screen and (max-width: 380px) {
      .main-header { min-height: 120px; }
      .header-content h1 { font-size: 1.3rem; }
      .header-content p { font-size: 0.6rem; letter-spacing: 0.5px; }
      .section-title h2 { font-size: 1.1rem; }

      .service-card {
        flex: 0 0 calc(50% - 6px) !important;
        width: calc(50% - 6px) !important;
        max-width: calc(50% - 6px) !important;
        padding: 10px 6px;
        border-radius: 16px;
      }
      .service-card .icon-wrapper { width: 34px; height: 34px; font-size: 1.0rem; margin-bottom: 4px; }
      .service-card h3 { font-size: 0.7rem; }
      .service-card p { font-size: 0.55rem; }
      .service-card .card-footer span { font-size: 0.45rem; padding: 2px 8px; }
      .slider-track { gap: 6px; }
      .travel-family-bg .overlay-content h2 { font-size: 1.0rem; }
      .travel-family-bg .family-icons .icon-card { max-width: 150px; font-size: 0.65rem; padding: 8px 10px; }
    }

    /* landscape phones: keep 2 cards per row */
    @media screen and (max-height: 500px) and (orientation: landscape) {
      .main-header { min-height: 120px; }
      .header-content h1 { font-size: 1.6rem; }
      .header-content p { font-size: 0.65rem; letter-spacing: 1px; }
      .services-section { padding: 20px 10px; }
      .service-card {
        flex: 0 0 calc(50% - 10px) !important;
        width: calc(50% - 10px) !important;
        max-width: calc(50% - 10px) !important;
        padding: 10px 8px;
      }
      .service-card .icon-wrapper { width: 36px; height: 36px; font-size: 1.1rem; margin-bottom: 6px; }
      .service-card h3 { font-size: 0.75rem; }
      .service-card p { font-size: 0.6rem; }
      .service-card .card-footer { margin-top: 8px; }
      .service-card .card-footer span { font-size: 0.5rem; padding: 2px 10px; }
      .slider-track { gap: 10px; flex-wrap: wrap !important; justify-content: center; width: 100% !important; transform: none !important; }
      .slider-dots { display: none !important; }
      .travel-family-bg { padding: 18px 12px; }
      .travel-family-bg .overlay-content h2 { font-size: 1.2rem; }
      .travel-family-bg .family-icons .icon-card { padding: 8px 14px; font-size: 0.7rem; gap: 8px; }
      .travel-family-bg .family-icons { gap: 12px; }
    }
  </style>
</head>
<body>

 <?php include 'header.php'; ?>
  <!-- ===== HEADER ===== -->
  <header class="main-header animate fadeInDown one">
    <div class="header-content">
      <h1><i class="fas fa-compass"></i> Tripinest</h1>
      <p>Explore · Experience · Evolve</p>
    </div>
  </header>

  <!-- ===== SERVICES SECTION – SLIDER ===== -->
  <section class="services-section">
    <div class="section-title animate fadeInUp two">
      <h2><i class="fas fa-suitcase-rolling"></i> Our Services</h2>
      <p>Curated journeys for every kind of traveller</p>
    </div>

    <div class="slider-wrapper">
      <div class="slider-track" id="sliderTrack">
        <!-- cards will be injected via JS -->
      </div>
      <!-- dots -->
      <div class="slider-dots" id="sliderDots"></div>
    </div>
  </section>

  <!-- ===== BOTTOM TRAVEL FAMILY BG ===== -->
  <section class="travel-family-bg animate fadeInUp four">
    <div class="overlay-content">
      <h2><i class="fas fa-users"></i> Travel with Family &amp; Friends</h2>
      <p>Every journey is better together. We create experiences that bring people closer — whether it's a caravan roadtrip, a tribal homestay, or a mountain trek.</p>
      <div class="family-icons">
        <div class="icon-card"><i class="fas fa-child"></i> Kid‑friendly</div>
        <div class="icon-card"><i class="fas fa-dog"></i> Pet‑friendly</div>
        <div class="icon-card"><i class="fas fa-wheelchair"></i> Accessible</div>
        <div class="icon-card"><i class="fas fa-camera"></i> Photo‑ready</div>
      </div>
    </div>
  </section>
 <?php include 'footer.php'; ?>
  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    (function() {
      'use strict';

      // -------- SERVICE DATA --------
      const services = [
        { icon: 'fa-map-marked-alt', title: 'Domestic Travel', desc: 'Mountains, backwaters, heritage & wildlife.', tag: 'Discover India' },
        { icon: 'fa-route', title: 'Offbeat Travel', desc: 'Hidden villages, remote valleys & local culture.', tag: 'Go Offbeat' },
        { icon: 'fa-mountain', title: 'Camping & Trekking', desc: 'Sleep under stars, conquer peaks, reconnect.', tag: 'Wild Escapes' },
        { icon: 'fa-caravan', title: 'Caravan Trip', desc: 'Open road, custom caravans, nomadic comfort.', tag: 'Roadtrip Life' },
        { icon: 'fa-feather-alt', title: 'Tribal Experience', desc: 'Indigenous culture, art, cuisine & community.', tag: 'Cultural Soul' },
        { icon: 'fa-umbrella-beach', title: 'Beach Getaway', desc: 'Sun, sand, and serene coastal vibes.', tag: 'Coastal Bliss' },
        { icon: 'fa-city', title: 'City Explorer', desc: 'Urban culture, food trails, and nightlife.', tag: 'Metro Vibes' }
      ];

      const track = document.getElementById('sliderTrack');
      const dotsContainer = document.getElementById('sliderDots');
      let currentIndex = 0;
      let totalCards = services.length;
      let autoSlideInterval = null;
      const visibleCount = 4; // fallback, but will be dynamic

      // -------- BUILD CARDS --------
      function buildCards() {
        track.innerHTML = '';
        services.forEach((s, idx) => {
          const card = document.createElement('div');
          card.className = 'service-card animate fadeInUp';
          const delay = (idx % 5) * 0.15 + 0.3;
          card.style.animationDelay = delay + 's';
          card.innerHTML = `
            <div class="icon-wrapper"><i class="fas ${s.icon}"></i></div>
            <h3>${s.title}</h3>
            <p>${s.desc}</p>
            <div class="card-footer"><span>${s.tag}</span></div>
          `;
          track.appendChild(card);
        });
        setTimeout(() => {
          document.querySelectorAll('.service-card.animate').forEach(el => el.classList.add('is-visible'));
        }, 100);
      }

      // -------- BUILD DOTS --------
      function buildDots() {
        dotsContainer.innerHTML = '';
        // dots only for slider mode (width > 600px)
        const dotCount = Math.ceil(totalCards / visibleCount);
        for (let i = 0; i < dotCount; i++) {
          const dot = document.createElement('button');
          dot.className = 'dot' + (i === 0 ? ' active' : '');
          dot.setAttribute('data-index', i);
          dot.addEventListener('click', () => {
            goToSlide(i);
            resetAutoSlide();
          });
          dotsContainer.appendChild(dot);
        }
      }

      // -------- SLIDE LOGIC (only for slider mode) --------
      function getCardWidth() {
        const firstCard = track.querySelector('.service-card');
        if (firstCard) {
          const style = window.getComputedStyle(firstCard);
          const w = parseFloat(style.width) || 210;
          const gap = parseFloat(window.getComputedStyle(track).gap) || 28;
          return w + gap;
        }
        return 210 + 28;
      }

      function getVisibleCount() {
        const wrapper = track.parentElement;
        const wrapperWidth = wrapper.clientWidth - 24;
        const cw = getCardWidth();
        if (cw <= 0) return 1;
        const count = Math.floor(wrapperWidth / cw);
        return Math.max(1, count);
      }

      function getMaxIndex() {
        const v = getVisibleCount();
        return Math.max(0, totalCards - v);
      }

      function goToSlide(index) {
        const v = getVisibleCount();
        const maxIdx = Math.max(0, totalCards - v);
        const target = Math.min(index, maxIdx);
        currentIndex = Math.max(0, target);
        const cw = getCardWidth();
        const offset = currentIndex * cw;
        track.style.transform = `translateX(-${offset}px)`;
        // update dots
        const dotCount = Math.ceil(totalCards / v);
        const dotIdx = Math.min(currentIndex, dotCount - 1);
        document.querySelectorAll('.dot').forEach((dot, i) => {
          dot.classList.toggle('active', i === dotIdx);
        });
      }

      function nextSlide() {
        const v = getVisibleCount();
        const maxIdx = Math.max(0, totalCards - v);
        if (currentIndex >= maxIdx) {
          goToSlide(0);
        } else {
          goToSlide(currentIndex + 1);
        }
      }

      function resetAutoSlide() {
        if (autoSlideInterval) {
          clearInterval(autoSlideInterval);
          autoSlideInterval = null;
        }
        autoSlideInterval = setInterval(nextSlide, 2800);
      }

      // -------- HANDLE RESIZE: switch between slider and 2-col grid --------
      function handleResize() {
        const width = window.innerWidth;
        // if width <= 600, we force wrap layout (2 cards per row) via CSS, so disable slider transform
        if (width <= 600) {
          // disable auto-slide, reset transform
          if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
            autoSlideInterval = null;
          }
          track.style.transform = 'none';
          // hide dots
          dotsContainer.style.display = 'none';
          return;
        } else {
          // slider mode
          dotsContainer.style.display = 'flex';
          // rebuild dots if needed
          if (dotsContainer.children.length === 0) {
            buildDots();
          }
          // re-init slide
          const v = getVisibleCount();
          const maxIdx = Math.max(0, totalCards - v);
          if (currentIndex > maxIdx) {
            currentIndex = maxIdx;
          }
          goToSlide(currentIndex);
          if (!autoSlideInterval) {
            resetAutoSlide();
          }
        }
      }

      // -------- INIT --------
      function initSlider() {
        buildCards();
        buildDots();
        requestAnimationFrame(() => {
          handleResize();
        });
      }

      // resize listener with debounce
      let resizeTimer;
      window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
          handleResize();
        }, 150);
      });

      // Intersection Observer for animations (non-card)
      const animatedElements = document.querySelectorAll('.animate:not(.service-card)');
      if (animatedElements.length) {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
            }
          });
        }, { threshold: 0.15, rootMargin: '0px 0px -20px 0px' });
        animatedElements.forEach(el => observer.observe(el));
        setTimeout(() => {
          animatedElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const winHeight = window.innerHeight || document.documentElement.clientHeight;
            if (rect.top < winHeight - 50 && rect.bottom > 0) {
              el.classList.add('is-visible');
            }
          });
        }, 100);
      }

      // start
      initSlider();

      // pause on hover (only if slider mode)
      const wrapper = document.querySelector('.slider-wrapper');
      wrapper.addEventListener('mouseenter', () => {
        if (window.innerWidth > 600 && autoSlideInterval) {
          clearInterval(autoSlideInterval);
          autoSlideInterval = null;
        }
      });
      wrapper.addEventListener('mouseleave', () => {
        if (window.innerWidth > 600 && !autoSlideInterval) {
          autoSlideInterval = setInterval(nextSlide, 2800);
        }
      });
      wrapper.addEventListener('touchstart', () => {
        if (window.innerWidth > 600 && autoSlideInterval) {
          clearInterval(autoSlideInterval);
          autoSlideInterval = null;
        }
      });
      wrapper.addEventListener('touchend', () => {
        if (window.innerWidth > 600 && !autoSlideInterval) {
          autoSlideInterval = setInterval(nextSlide, 2800);
        }
      });

    })();
  </script>
</body>
</html>