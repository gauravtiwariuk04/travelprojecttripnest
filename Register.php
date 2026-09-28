<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Login · Compact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* ---------- RESET & BASE ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Body layout for proper Header -> Main Content -> Footer stacking */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #e0f2fe, #bae6fd);
        }

        /* Wrapper to vertically center the form between Header & Footer */
        .page-content-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
            width: 100%;
        }

        /* ---------- MAIN CONTAINER ---------- */
        .main-container {
            display: flex;
            max-width: 860px;
            width: 100%;
            min-height: 480px;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* ---------- LEFT : IMAGE SECTION ---------- */
        .image-section {
            flex: 1;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600&auto=format&fit=crop')
                center/cover no-repeat;
            min-height: 300px;
            position: relative;
        }

        .image-section::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 80, 120, 0.45), rgba(0, 40, 60, 0.55));
        }

        .image-overlay {
            position: absolute;
            bottom: 30px;
            left: 24px;
            color: #fff;
            z-index: 1;
        }

        .image-overlay h2 {
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .image-overlay p {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-top: 4px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* ---------- RIGHT : FORM SECTION ---------- */
        .form-section {
            flex: 1;
            padding: 28px 28px 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .form-section .brand {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
        }

        .form-section .brand i {
            font-size: 22px;
            color: #0b7b9e;
        }

        .form-section .brand h1 {
            font-size: 20px;
            font-weight: 700;
            color: #0b3b4a;
            letter-spacing: -0.3px;
        }

        .form-section .subtitle {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 18px;
        }

        /* ---------- 2‑COLUMN FORM GRID ---------- */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 3px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form-group label i {
            color: #0b7b9e;
            width: 16px;
            font-size: 0.75rem;
        }

        .form-group input {
            padding: 8px 12px;
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.85rem;
            transition: border 0.2s, box-shadow 0.2s;
            background: #f8fafc;
            outline: none;
            width: 100%;
        }

        .form-group input:focus {
            border-color: #0b7b9e;
            box-shadow: 0 0 0 3px rgba(11, 123, 158, 0.12);
            background: #ffffff;
        }

        .form-group input::placeholder {
            color: #94a3b8;
            font-size: 0.8rem;
        }

        .password-hint {
            font-size: 0.65rem;
            color: #94a3b8;
            margin-top: 2px;
            padding-left: 22px;
        }

        /* ----- CHECKBOX & FORGOT (Full Width) ----- */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0 14px 0;
            flex-wrap: wrap;
            gap: 6px;
            grid-column: 1 / -1;
        }

        .form-options label {
            font-size: 0.8rem;
            color: #334155;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .form-options label input[type="checkbox"] {
            accent-color: #0b7b9e;
            width: 14px;
            height: 14px;
            cursor: pointer;
        }

        .form-options a {
            color: #0b7b9e;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            transition: color 0.2s;
        }

        .form-options a:hover {
            color: #065f7a;
            text-decoration: underline;
        }

        /* ----- SUBMIT BUTTON (Full Width) ----- */
        .btn-submit {
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, #0b7b9e, #0a5f7a);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            letter-spacing: 0.2px;
            grid-column: 1 / -1;
            margin-top: 2px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(11, 123, 158, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* ----- SIGNUP LINK (Full Width) ----- */
        .signup-link {
            text-align: center;
            margin-top: 14px;
            font-size: 0.8rem;
            color: #475569;
            grid-column: 1 / -1;
        }

        .signup-link a {
            color: #0b7b9e;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }

        .signup-link a:hover {
            color: #065f7a;
            text-decoration: underline;
        }

        /* ---------- RESPONSIVE MEDIA QUERIES ---------- */

        @media screen and (max-width: 820px) {
            .main-container {
                flex-direction: column;
                max-width: 460px;
                min-height: auto;
                border-radius: 20px;
            }

            .image-section {
                min-height: 160px;
                width: 100%;
                border-radius: 20px 20px 0 0;
            }

            .image-overlay {
                bottom: 18px;
                left: 18px;
            }

            .image-overlay h2 {
                font-size: 1.2rem;
            }

            .image-overlay p {
                font-size: 0.75rem;
            }

            .form-section {
                padding: 20px 20px 24px;
            }

            .form-section .brand h1 {
                font-size: 18px;
            }

            .form-grid {
                gap: 8px 12px;
            }

            .form-group input {
                padding: 7px 10px;
                font-size: 0.8rem;
            }
        }

        @media screen and (max-width: 600px) {
            .page-content-wrapper {
                padding: 20px 10px;
            }

            .main-container {
                border-radius: 16px;
                max-width: 400px;
            }

            .image-section {
                min-height: 130px;
            }

            .image-overlay h2 {
                font-size: 1rem;
            }

            .image-overlay p {
                font-size: 0.7rem;
            }

            .form-section {
                padding: 16px 16px 20px;
            }

            .form-section .brand i {
                font-size: 18px;
            }

            .form-section .brand h1 {
                font-size: 16px;
            }

            .form-section .subtitle {
                font-size: 0.75rem;
                margin-bottom: 12px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .form-group label {
                font-size: 0.7rem;
            }

            .form-group input {
                padding: 6px 10px;
                font-size: 0.8rem;
                border-radius: 8px;
            }

            .password-hint {
                font-size: 0.6rem;
                padding-left: 20px;
            }

            .form-options {
                margin: 6px 0 10px 0;
                flex-direction: column;
                align-items: flex-start;
                gap: 4px;
            }

            .form-options label, .form-options a {
                font-size: 0.75rem;
            }

            .btn-submit {
                padding: 9px;
                font-size: 0.85rem;
                border-radius: 10px;
            }

            .signup-link {
                font-size: 0.75rem;
                margin-top: 10px;
            }
        }

        @media screen and (max-width: 400px) {
            .image-section {
                min-height: 100px;
            }

            .image-overlay h2 {
                font-size: 0.9rem;
            }

            .image-overlay p {
                font-size: 0.6rem;
            }

            .form-section {
                padding: 12px 12px 16px;
            }

            .form-section .brand h1 {
                font-size: 14px;
            }

            .form-group input {
                padding: 5px 8px;
                font-size: 0.75rem;
            }

            .btn-submit {
                padding: 8px;
                font-size: 0.8rem;
            }

            .signup-link {
                font-size: 0.7rem;
            }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main class="page-content-wrapper">
        <div class="main-container">

            <div class="image-section">
                <div class="image-overlay">
                    <h2><i class="fas fa-plane" style="margin-right:8px;"></i>Wanderlust</h2>
                    <p>Discover your next adventure</p>
                </div>
            </div>

            <div class="form-section">

                <div class="brand">
                    <i class="fas fa-globe-asia"></i>
                    <h1>TravelHub</h1>
                </div>
                <p class="subtitle">Create your account</p>

                <form action="#" method="POST" autocomplete="off" class="form-grid">

                    <div class="form-group">
                        <label for="fullName"><i class="fas fa-user"></i> Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="John Doe" required />
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com" required />
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required />
                        <span class="password-hint">Min 8 chars + number</span>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword"><i class="fas fa-check-circle"></i> Confirm</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required />
                    </div>

                    <div class="form-options">
                        <label>
                            <input type="checkbox" checked /> Remember me
                        </label>
                        <a href="#">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </button>

                    <p class="signup-link">
                        Already have an account? <a href="#">Log in</a>
                    </p>

                </form>

            </div>

        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>