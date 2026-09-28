<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Package | Explore World</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet" />
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Raleway", sans-serif;
            background: #f0f4f8;
            color: #2c3e50;
        }

        /* ===== HEADER ===== */
        .main-header {
            height: 250px;
            width: 100%;
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.85), rgba(46, 204, 113, 0.70)),
                url('image/Amarkantak2.jfif') center/cover no-repeat;
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
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, #2ecc71, #27ae60, #2ecc71);
            background-size: 200% 100%;
            animation: shimmer 3s infinite linear;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        .header-content h1 {
            font-size: 52px;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .header-content h1 i {
            margin-right: 12px;
            color: #2ecc71;
        }

        .header-content p {
            font-size: 20px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.92);
            letter-spacing: 4px;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
        }

        .header-content p i {
            margin: 0 8px;
            color: #f1c40f;
        }

        /* ===== SECTION TITLE ===== */
        .section-title {
            text-align: center;
            padding: 50px 20px 30px;
        }

        .section-title h2 {
            font-size: 36px;
            font-weight: 800;
            color: #2c3e50;
            letter-spacing: 1px;
        }

        .section-title h2 i {
            color: #2ecc71;
            margin-right: 10px;
        }

        .section-title p {
            font-size: 16px;
            color: #7f8c8d;
            margin-top: 6px;
            letter-spacing: 1px;
        }

        /* ===== CARDS GRID ===== */
        .packages-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 30px 60px;
        }

        /* ===== SINGLE CARD ===== */
        .package-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            position: relative;
            cursor: default;
            /* Bounce effect on hover – applied via class .bounce-hover */
        }

        /* === BOUNCE ANIMATION (on hover) === */
        @keyframes bounce {
            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-18px);
            }
            60% {
                transform: translateY(-8px);
            }
        }

        .package-card.bounce-hover:hover {
            animation: bounce 0.9s ease;
            box-shadow: 0 20px 60px rgba(46, 204, 113, 0.25);
        }

        /* ===== CARD IMAGE ===== */
        .card-image {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: #ecf0f1;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .package-card:hover .card-image img {
            transform: scale(1.05);
        }

        /* Badge (optional) */
        .card-image .badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: #2ecc71;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 12px rgba(46, 204, 113, 0.4);
        }

        .card-image .badge i {
            margin-right: 5px;
        }

        /* ===== CARD BODY ===== */
        .card-body {
            padding: 22px 24px 24px;
        }

        .card-body .package-name {
            font-size: 22px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 4px;
            letter-spacing: 0.5px;
        }

        .card-body .package-name i {
            color: #2ecc71;
            margin-right: 6px;
            font-size: 18px;
        }

        /* ===== CARD DETAILS (icons + text) ===== */
        .card-details {
            margin: 14px 0 12px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px 20px;
            border-top: 1px solid #ecf0f1;
            border-bottom: 1px solid #ecf0f1;
            padding: 14px 0;
        }

        .card-details .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #34495e;
            font-weight: 500;
        }

        .card-details .detail-item i {
            color: #2ecc71;
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .card-details .detail-item .label {
            color: #7f8c8d;
            font-weight: 400;
        }

        /* ===== ACTIVITIES ===== */
        .activities {
            display: flex;
            flex-wrap: wrap;
            gap: 8px 10px;
            margin: 12px 0 18px;
        }

        .activities .activity-tag {
            background: #eafaf1;
            color: #1e8449;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 30px;
            letter-spacing: 0.3px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .activities .activity-tag i {
            font-size: 12px;
            color: #2ecc71;
        }

        .package-card:hover .activity-tag {
            background: #d5f5e3;
            transform: translateY(-2px);
        }

        /* ===== BUTTONS ===== */
        .card-actions {
            display: flex;
            gap: 12px;
            margin-top: 6px;
        }

        .card-actions .btn {
            flex: 1;
            padding: 12px 0;
            border: none;
            border-radius: 50px;
            font-family: "Raleway", sans-serif;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            letter-spacing: 0.5px;
        }

        .btn-book {
            background: #2ecc71;
            color: #fff;
            box-shadow: 0 4px 14px rgba(46, 204, 113, 0.35);
        }

        .btn-book:hover {
            background: #27ae60;
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(46, 204, 113, 0.45);
        }

        .btn-view {
            background: #ecf0f1;
            color: #2c3e50;
        }

        .btn-view:hover {
            background: #dde1e3;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .btn i {
            font-size: 15px;
        }

        /* ===== ANIMATION HELPERS (from user) ===== */
        .animate {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

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

        /* delays */
        .one {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }
        .two {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }
        .three {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        .four {
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }
        .five {
            -webkit-animation-delay: 1.0s;
            animation-delay: 1.0s;
        }
        .six {
            -webkit-animation-delay: 1.2s;
            animation-delay: 1.2s;
        }

        /* ====================================================
                   RESPONSIVE – MEDIA QUERIES
                   ==================================================== */

        /* --- Laptops / small desktops (≤ 1200px) --- */
        @media (max-width: 1200px) {
            .packages-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
                padding: 0 20px 50px;
            }
        }

        /* --- Tablets (≤ 992px) --- */
        @media (max-width: 992px) {
            .packages-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }

            .header-content h1 {
                font-size: 40px;
            }
            .header-content p {
                font-size: 17px;
                letter-spacing: 2px;
            }

            .card-image {
                height: 190px;
            }
            .card-body .package-name {
                font-size: 20px;
            }
        }

        /* --- Small tablets / large phones (≤ 768px) --- */
        @media (max-width: 768px) {
            .main-header {
                height: 200px;
            }

            .header-content h1 {
                font-size: 32px;
            }
            .header-content h1 i {
                margin-right: 6px;
            }
            .header-content p {
                font-size: 15px;
                letter-spacing: 1px;
            }

            .section-title h2 {
                font-size: 28px;
            }
            .section-title p {
                font-size: 14px;
            }

            .packages-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 18px;
                padding: 0 16px 40px;
            }

            .card-image {
                height: 170px;
            }
            .card-body {
                padding: 16px 18px 18px;
            }
            .card-body .package-name {
                font-size: 18px;
            }
            .card-details {
                gap: 8px 14px;
                padding: 10px 0;
            }
            .card-details .detail-item {
                font-size: 13px;
            }
            .activities .activity-tag {
                font-size: 11px;
                padding: 3px 10px;
            }
            .card-actions .btn {
                font-size: 13px;
                padding: 10px 0;
            }
        }

        /* --- Mobile phones (≤ 576px) --- */
        @media (max-width: 576px) {
            .main-header {
                height: 180px;
            }

            .header-content h1 {
                font-size: 26px;
            }
            .header-content p {
                font-size: 13px;
                letter-spacing: 0.5px;
            }

            .section-title {
                padding: 30px 16px 20px;
            }
            .section-title h2 {
                font-size: 24px;
            }
            .section-title p {
                font-size: 13px;
            }

            .packages-grid {
                grid-template-columns: 1fr;
                gap: 24px;
                padding: 0 14px 36px;
                max-width: 420px;
                margin: 0 auto;
            }

            .card-image {
                height: 200px;
            }
            .card-body {
                padding: 16px 16px 18px;
            }
            .card-body .package-name {
                font-size: 19px;
            }
            .card-details {
                gap: 6px 12px;
                padding: 10px 0;
            }
            .card-details .detail-item {
                font-size: 13px;
            }
            .activities {
                gap: 6px 8px;
                margin: 10px 0 14px;
            }
            .activities .activity-tag {
                font-size: 11px;
                padding: 3px 12px;
            }
            .card-actions {
                flex-direction: column;
                gap: 10px;
            }
            .card-actions .btn {
                font-size: 14px;
                padding: 12px 0;
            }
        }

        /* --- Extra small phones (≤ 400px) --- */
        @media (max-width: 400px) {
            .main-header {
                height: 160px;
            }
            .header-content h1 {
                font-size: 22px;
            }
            .header-content p {
                font-size: 12px;
                letter-spacing: 0px;
            }
            .section-title h2 {
                font-size: 20px;
            }
            .card-image {
                height: 170px;
            }
            .card-body .package-name {
                font-size: 17px;
            }
            .card-details .detail-item {
                font-size: 12px;
            }
            .card-details .detail-item i {
                font-size: 14px;
                width: 18px;
            }
            .activities .activity-tag {
                font-size: 10px;
                padding: 2px 10px;
            }
        }

        /* --- Very small phones (≤ 340px) --- */
        @media (max-width: 340px) {
            .main-header {
                height: 140px;
            }
            .header-content h1 {
                font-size: 18px;
            }
            .header-content p {
                font-size: 11px;
            }
            .packages-grid {
                padding: 0 10px 30px;
            }
            .card-body {
                padding: 12px 12px 14px;
            }
            .card-body .package-name {
                font-size: 15px;
            }
            .card-details {
                flex-direction: column;
                gap: 4px;
            }
            .card-actions .btn {
                font-size: 12px;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
  <?php include 'header.php'; ?>
    <!-- ===== HEADER (250px) ===== -->
    <header class="main-header animate fadeInDown">
        <div class="header-content">
            <h1><i class="fas fa-plane-departure"></i> Explore World</h1>
            <p>
                <i class="fas fa-map-pin"></i>
                discover · experience · enjoy
                <i class="fas fa-map-pin"></i>
            </p>
        </div>
    </header>

    <!-- ===== SECTION TITLE ===== -->
    <div class="section-title animate fadeIn">
        <h2><i class="fas fa-suitcase-rolling"></i> Our Packages</h2>
        <p>Handpicked tours for every kind of traveler</p>
    </div>

    <!-- ===== PACKAGES GRID ===== -->
    <div class="packages-grid">

        <!-- CARD 1 -->
        <div class="package-card bounce-hover animate fadeInUp one">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1533105079780-92b9be482077?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Bali tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-star"></i> popular</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-umbrella-beach"></i> Bali Paradise</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Bali, ID
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $499
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 5 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-swimmer"></i> Snorkeling</span>
                    <span class="activity-tag"><i class="fas fa-hiking"></i> Trekking</span>
                    <span class="activity-tag"><i class="fas fa-camera"></i> Photo Tour</span>
                    <span class="activity-tag"><i class="fas fa-utensils"></i> Cooking Class</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="package-card bounce-hover animate fadeInUp two">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Kerala tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-leaf"></i> nature</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-tree"></i> Kerala Backwaters</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Kerala, IN
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $379
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 6 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-ship"></i> Houseboat</span>
                    <span class="activity-tag"><i class="fas fa-spa"></i> Ayurveda</span>
                    <span class="activity-tag"><i class="fas fa-bird"></i> Bird Watching</span>
                    <span class="activity-tag"><i class="fas fa-coffee"></i> Tea Plantation</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="package-card bounce-hover animate fadeInUp three">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Alps tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-mountain"></i> adventure</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-mountain"></i> Swiss Alps</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Switzerland
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $899
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 7 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-skiing"></i> Skiing</span>
                    <span class="activity-tag"><i class="fas fa-hiking"></i> Hiking</span>
                    <span class="activity-tag"><i class="fas fa-cable-car"></i> Cable Car</span>
                    <span class="activity-tag"><i class="fas fa-cheese"></i> Cheese Tasting</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="package-card bounce-hover animate fadeInUp four">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1552465011-b4e21bf6e79a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Santorini tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-heart"></i> romantic</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-sun"></i> Santorini Sunset</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Greece
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $649
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 5 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-wine-glass"></i> Wine Tour</span>
                    <span class="activity-tag"><i class="fas fa-ship"></i> Catamaran</span>
                    <span class="activity-tag"><i class="fas fa-camera"></i> Sunset Photo</span>
                    <span class="activity-tag"><i class="fas fa-umbrella-beach"></i> Beach Time</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="package-card bounce-hover animate fadeInUp five">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Safari tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-paw"></i> wildlife</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-tree"></i> Kenya Safari</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Kenya
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $1099
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 8 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-camera-retro"></i> Game Drive</span>
                    <span class="activity-tag"><i class="fas fa-binoculars"></i> Birding</span>
                    <span class="activity-tag"><i class="fas fa-campground"></i> Camping</span>
                    <span class="activity-tag"><i class="fas fa-fire"></i> Bush Dinner</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="package-card bounce-hover animate fadeInUp six">
            <div class="card-image">
                <img
                src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="Tokyo tour"
                loading="lazy"
                />
                <span class="badge"><i class="fas fa-city"></i> urban</span>
            </div>
            <div class="card-body">
                <h3 class="package-name"><i class="fas fa-city"></i> Tokyo Explorer</h3>

                <div class="card-details">
                    <span class="detail-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="label">Location</span> Tokyo, JP
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-tag"></i>
                        <span class="label">Price</span> $749
                    </span>
                    <span class="detail-item">
                        <i class="fas fa-clock"></i>
                        <span class="label">Duration</span> 6 Days
                    </span>
                </div>

                <div class="activities">
                    <span class="activity-tag"><i class="fas fa-train"></i> Shinkansen</span>
                    <span class="activity-tag"><i class="fas fa-sushi"></i> Sushi Class</span>
                    <span class="activity-tag"><i class="fas fa-tree"></i> Gardens</span>
                    <span class="activity-tag"><i class="fas fa-shopping-bag"></i> Shopping</span>
                </div>

                <div class="card-actions">
                    <a href="#" class="btn btn-book"><i class="fas fa-calendar-check"></i> Book Now</a>
                    <a href="packageview.php" class="btn btn-view"><i class="fas fa-eye"></i> View More</a>
                </div>
            </div>
        </div>

    </div>
  <?php include 'footer.php'; ?>
</body>
</html>