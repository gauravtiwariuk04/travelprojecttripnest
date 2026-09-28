<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header with Logo Image & 7 Menus</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* ---------- RESET & BASE ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
        }

        /* ---------- HEADER ---------- */
        .header {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            padding: 0 40px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 3px solid #e94560;
        }

        /* ---------- LOGO with IMG ---------- */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #fff;
            font-size: 28px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }

        .logo:hover {
            transform: scale(1.04);
        }

        /* ---- Logo Image (no red border, no background box) ---- */
        .logo-img {
            display: block;
            background: transparent;
            box-shadow: none;
            border: none;
            outline: none;
            flex-shrink: 0;
            /* ---- FIXED: height & width 150px ---- */
            width: 150px;
            height: 150px;
            object-fit: contain; /* keeps aspect ratio, no distortion */
        }

        .logo:hover .logo-img {
            box-shadow: none;
        }

        /* ---- Logo Text ---- */
        .logo span {
            background: linear-gradient(90deg, #e94560, #f5a623);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 28px;
            font-weight: 700;
            white-space: nowrap;
        }

        /* ---------- NAVIGATION ---------- */
        .nav {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 30px;
            transition: all 0.3s ease;
            position: relative;
            letter-spacing: 0.3px;
            white-space: nowrap;
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: #e94560;
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .nav a:hover {
            color: #fff;
            background: rgba(233, 69, 96, 0.15);
        }

        .nav a:hover::after {
            width: 60%;
        }

        .nav a.active {
            color: #fff;
            background: rgba(233, 69, 96, 0.2);
        }

        .nav a.active::after {
            width: 60%;
        }

        /* ---------- AUTH BUTTONS ---------- */
        .auth {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-left: 10px;
            flex-shrink: 0;
        }

        .auth .login {
            color: #fff;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.25);
            padding: 10px 28px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .auth .login:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.08);
        }

        .auth .register {
            color: #fff;
            background: linear-gradient(135deg, #e94560, #c23152);
            border: none;
            padding: 10px 28px;
            border-radius: 30px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 18px rgba(233, 69, 96, 0.35);
            white-space: nowrap;
        }

        .auth .register:hover {
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 8px 30px rgba(233, 69, 96, 0.5);
            background: linear-gradient(135deg, #f05470, #d63a5a);
        }

        .auth .register i {
            font-size: 14px;
        }

        /* ---------- HAMBURGER (Mobile) ---------- */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: background 0.3s ease;
            flex-shrink: 0;
        }

        .hamburger:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        .hamburger span {
            display: block;
            width: 30px;
            height: 3px;
            background: #fff;
            border-radius: 10px;
            transition: all 0.3s ease;
            transform-origin: center;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* ---------- RESPONSIVE ---------- */

        /* ---- Tablet & small laptops ---- */
        @media (max-width: 1024px) {
            .header {
                padding: 0 24px;
            }

            .nav a {
                font-size: 14px;
                padding: 8px 14px;
            }

            .auth .login,
            .auth .register {
                padding: 8px 20px;
                font-size: 14px;
            }

            /* keep logo 150x150 on tablet (or adjust if needed) */
            .logo-img {
                width: 150px;
                height: 150px;
            }
            .logo span {
                font-size: 24px;
            }
            .logo {
                gap: 10px;
            }
        }

        /* ---- Mobile (hamburger active) ---- */
        @media (max-width: 820px) {
            .hamburger {
                display: flex;
            }

            .nav {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: #1a1a2e;
                flex-direction: column;
                padding: 20px 30px 30px;
                gap: 6px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
                transform: translateY(-120%);
                opacity: 0;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                border-top: 2px solid rgba(233, 69, 96, 0.3);
                pointer-events: none;
            }

            .nav.open {
                transform: translateY(0);
                opacity: 1;
                pointer-events: all;
            }

            .nav a {
                width: 100%;
                text-align: center;
                padding: 14px 20px;
                font-size: 16px;
                border-radius: 12px;
                white-space: normal;
            }

            .nav a::after {
                display: none;
            }

            .nav a:hover {
                background: rgba(233, 69, 96, 0.15);
            }

            .auth {
                margin-left: 0;
                gap: 8px;
            }

            .auth .login,
            .auth .register {
                padding: 8px 18px;
                font-size: 14px;
            }

            /* keep logo 150x150 on mobile */
            .logo-img {
                width: 150px;
                height: 150px;
            }
            .logo span {
                font-size: 22px;
            }
            .logo {
                gap: 8px;
            }
        }

        /* ---- Small phones ---- */
        @media (max-width: 480px) {
            .header {
                padding: 0 14px;
                height: 68px;
            }

            .logo span {
                font-size: 18px;
            }
            /* 150x150 still fits, but we keep it consistent */
            .logo-img {
                width: 150px;
                height: 150px;
                border-radius: 8px; /* optional softness */
            }
            .logo {
                gap: 6px;
            }

            .auth .login,
            .auth .register {
                padding: 6px 12px;
                font-size: 12px;
                gap: 4px;
            }
            .auth .login i,
            .auth .register i {
                font-size: 11px;
            }

            .nav {
                top: 68px;
                padding: 14px 16px 20px;
            }
            .nav a {
                font-size: 14px;
                padding: 11px 14px;
            }

            .hamburger span {
                width: 24px;
                height: 2.5px;
            }
            .hamburger {
                gap: 5px;
                padding: 6px;
            }
        }

        /* ---- Very small screens (<= 360px) ---- */
        @media (max-width: 360px) {
            /* keep 150x150 as requested, even on tiny screens */
            .logo-img {
                width: 150px;
                height: 150px;
            }
            .logo span {
                font-size: 15px;
            }
            .logo {
                gap: 4px;
            }
            .auth .login,
            .auth .register {
                padding: 4px 10px;
                font-size: 10px;
            }
            .auth .login i,
            .auth .register i {
                font-size: 9px;
            }
            .header {
                padding: 0 10px;
                height: 60px;
            }
            .nav {
                top: 60px;
                padding: 10px 12px 16px;
            }
            .nav a {
                font-size: 13px;
                padding: 9px 12px;
            }
            .hamburger span {
                width: 20px;
                height: 2px;
            }
            .hamburger {
                gap: 4px;
                padding: 4px;
            }
        }

        /* ---------- PAGE CONTENT (demo) ---------- */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 80px);
            text-align: center;
            padding: 40px 20px;
            background: radial-gradient(ellipse at center, #ffffff 0%, #f0f2f5 100%);
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 16px;
        }

        .hero h1 span {
            color: #e94560;
        }

        .hero p {
            font-size: 20px;
            color: #555;
            max-width: 600px;
            line-height: 1.6;
        }

        .hero .badge {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hero .badge span {
            background: #e94560;
            color: #fff;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 32px;
            }
            .hero p {
                font-size: 16px;
            }
            .hero {
                min-height: calc(100vh - 68px);
            }
        }

        @media (max-width: 360px) {
            .hero h1 {
                font-size: 26px;
            }
            .hero p {
                font-size: 14px;
            }
            .hero .badge span {
                font-size: 11px;
                padding: 5px 14px;
            }
        }
    </style>
</head>
<body>

    <!-- ====== HEADER ====== -->
    <header class="header">

        <!-- LOGO with IMG tag -->
        <a href="#" class="logo">
            <img
            src="image/WhatsApp_Image_2026-08-04_at_10.22.02_PM-removebg-preview.png"
            alt="Brand Logo"
            class="logo-img"
            width="150"
            height="150"
            />
            
        </a>

        <!-- NAVIGATION (7 menus) -->
        <nav class="nav" id="navMenu">
            <a href="index.php" class="active"><i class="fas fa-home"></i> Home</a>
            <a href="Abouts.php"><i class="fas fa-info-circle"></i> About</a>
            <a href="packages.php"><i class="fas fa-briefcase"></i> Package</a>
            <a href="service.php"><i class="fas fa-briefcase"></i> service</a>
            <a href="blog.php"><i class="fas fa-cogs"></i> Blog</a>
            <a href="contact.php"><i class="fas fa-blog"></i> Contact</a>
        </nav>

        <!-- AUTH BUTTONS + HAMBURGER -->
        <div style="display: flex; align-items: center; gap: 16px;">

            <div class="auth">
                <a href="login.php" class="login"><i class="fas fa-sign-in-alt"></i> Login</a>
                <a href="Register.php" class="register"><i class="fas fa-user-plus"></i> Register</a>
            </div>

            <!-- Hamburger (mobile) -->
            <div class="hamburger" id="hamburger" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

    </header>


    <!-- ====== JAVASCRIPT for mobile toggle ====== -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('open');
        });

        // Close menu when a nav link is clicked
        document.querySelectorAll('.nav a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('open');
            });
        });

        // Close menu on outside click
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.header')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('open');
            }
        });
    </script>

</body>
</html>