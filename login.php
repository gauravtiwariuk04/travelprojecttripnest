<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* ----- RESET & BASE ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Body Flex Layout for Stacking Header -> Content -> Footer */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f0f4f8;
        }

        /* Middle Section Wrapper to push footer to bottom and center main content */
        .page-content-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            width: 100%;
        }

        /* ----- MAIN CONTAINER ----- */
        .main-container {
            display: flex;
            width: 1000px;
            max-width: 100%;
            min-height: 550px;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        /* ----- LEFT: IMAGE DIV ----- */
        .image-div {
            flex: 1 1 50%;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            position: relative;
            min-height: 300px;
        }

        .image-div img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 16px;
            display: block;
            opacity: 0.9;
        }

        .image-div .overlay-text {
            position: absolute;
            bottom: 50px;
            left: 30px;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            letter-spacing: 0.5px;
        }

        .image-div .overlay-text i {
            margin-right: 10px;
        }

        /* ----- RIGHT: FORM DIV ----- */
        .form-div {
            flex: 1 1 50%;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .form-div h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }

        .form-div .subtitle {
            color: #718096;
            font-size: 0.95rem;
            margin-bottom: 32px;
        }

        /* ----- FORM ELEMENTS ----- */
        .form-group {
            margin-bottom: 22px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-group label i {
            color: #2a5298;
            font-size: 1rem;
            width: 18px;
        }

        .form-group input {
            padding: 14px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.25s ease;
            background: #f7fafc;
            outline: none;
            width: 100%;
        }

        .form-group input:focus {
            border-color: #2a5298;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(42, 82, 152, 0.15);
        }

        .form-group input::placeholder {
            color: #a0aec0;
            font-weight: 400;
        }

        /* ----- OPTIONS ROW (remember + forgot) ----- */
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 6px 0 26px 0;
            font-size: 0.9rem;
        }

        .options-row .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #4a5568;
            cursor: pointer;
        }

        .options-row .remember input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #2a5298;
            cursor: pointer;
        }

        .options-row .forgot a {
            color: #2a5298;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .options-row .forgot a:hover {
            color: #1a365d;
            text-decoration: underline;
        }

        /* ----- LOGIN BUTTON ----- */
        .login-btn {
            background: #1e3c72;
            color: #fff;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-bottom: 20px;
        }

        .login-btn:hover {
            background: #2a5298;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px -8px rgba(30, 60, 114, 0.4);
        }

        .login-btn i {
            font-size: 1.1rem;
        }

        /* ----- SIGNUP LINK ----- */
        .signup-link {
            text-align: center;
            color: #4a5568;
            font-size: 0.95rem;
        }

        .signup-link a {
            color: #2a5298;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }

        .signup-link a:hover {
            color: #1a365d;
            text-decoration: underline;
        }

        /* ========================================
           RESPONSIVE — MEDIA QUERIES
           ======================================== */

        @media screen and (max-width: 900px) {
            .main-container {
                flex-direction: column;
                max-width: 520px;
                min-height: auto;
                border-radius: 24px;
            }

            .image-div {
                flex: none;
                height: 220px;
                padding: 16px;
                min-height: unset;
            }

            .image-div img {
                border-radius: 12px;
            }

            .image-div .overlay-text {
                bottom: 24px;
                left: 24px;
                font-size: 1.2rem;
            }

            .form-div {
                padding: 32px 28px;
            }

            .form-div h2 {
                font-size: 1.6rem;
            }
        }

        @media screen and (max-width: 600px) {
            .page-content-wrapper {
                padding: 20px 12px;
            }

            .main-container {
                border-radius: 20px;
                max-width: 100%;
            }

            .image-div {
                height: 180px;
                padding: 12px;
            }

            .image-div .overlay-text {
                bottom: 16px;
                left: 16px;
                font-size: 1rem;
            }

            .form-div {
                padding: 24px 18px;
            }

            .form-div h2 {
                font-size: 1.4rem;
            }

            .options-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <main class="page-content-wrapper">
        <div class="main-container">

            <div class="image-div">
                <img
                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='600' viewBox='0 0 800 600'%3E%3Crect width='800' height='600' fill='%232a5298'/%3E%3Ccircle cx='400' cy='280' r='120' fill='%234a7ab5' opacity='0.5'/%3E%3Cpath d='M320 340 L360 280 L440 280 L480 340 L440 400 L360 400 L320 340Z' fill='%23f6ad55' opacity='0.7'/%3E%3Ccircle cx='360' cy='300' r='16' fill='%23edf2f7'/%3E%3Ccircle cx='440' cy='300' r='16' fill='%23edf2f7'/%3E%3Cpath d='M380 330 Q400 350 420 330' stroke='%23edf2f7' stroke-width='6' fill='none' stroke-linecap='round'/%3E%3Crect x='280' y='440' width='240' height='40' rx='8' fill='%23cbd5e0' opacity='0.4'/%3E%3Crect x='300' y='490' width='60' height='80' rx='6' fill='%23edf2f7' opacity='0.3'/%3E%3Crect x='440' y='490' width='60' height='80' rx='6' fill='%23edf2f7' opacity='0.3'/%3E%3Ccircle cx='400' cy='520' r='30' fill='%23f6ad55' opacity='0.3'/%3E%3C/svg%3E"
                    alt="Travel illustration"
                />
                <div class="overlay-text">
                    <i class="fas fa-plane-departure"></i> Explore the World
                </div>
            </div>

            <div class="form-div">
                <h2>Welcome Back</h2>
                <p class="subtitle">Sign in to continue your travel journey ✈️</p>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i> Email Address
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="you@example.com"
                            required
                        />
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <i class="fas fa-lock"></i> Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            required
                        />
                    </div>

                    <div class="options-row">
                        <label class="remember">
                            <input type="checkbox" name="remember" />
                            Remember me
                        </label>
                        <span class="forgot">
                            <a href="#">Forgot password?</a>
                        </span>
                    </div>

                    <button type="submit" class="login-btn">
                        <i class="fas fa-sign-in-alt"></i> Log In
                    </button>
                </form>

                <p class="signup-link">
                    Don't have an account? <a href="#">Sign up</a>
                </p>
            </div>

        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>