<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Main Page</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* ---------- RESET & BASE ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fc;
            color: #1e293b;
            line-height: 1.6;
        }

        /* ---------- HEADER (250px) ---------- */
        .main-header {
            height: 250px;
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.75), rgba(15, 23, 42, 0.85)),
                url('image/Darjeeling5.jfif') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 0 1.5rem;
            position: relative;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .main-header h1 {
            font-size: 3.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.3);
            margin-bottom: 0.25rem;
        }

        .main-header p {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.9;
            max-width: 600px;
            text-shadow: 0 1px 8px rgba(0, 0, 0, 0.2);
        }

        /* ---------- BLOG GRID ---------- */
        .blog-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem 4rem;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        /* ---------- CARD ---------- */
        .blog-card {
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 48px rgba(0, 0, 0, 0.12);
        }

        .blog-card-image {
            height: 200px;
            background-size: cover;
            background-position: center;
            background-color: #e2e8f0;
            flex-shrink: 0;
        }

        .blog-card-body {
            padding: 1.5rem 1.5rem 1.8rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-card-body .tag {
            display: inline-block;
            background: #eef2ff;
            color: #4f46e5;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 0.25rem 0.9rem;
            border-radius: 50px;
            margin-bottom: 0.75rem;
            align-self: flex-start;
        }

        .blog-card-body h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #0f172a;
            line-height: 1.3;
        }

        .blog-card-body p {
            color: #475569;
            font-size: 0.95rem;
            margin-bottom: 1.2rem;
            flex: 1;
        }

        .blog-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
            border-top: 1px solid #f1f5f9;
            padding-top: 1rem;
        }

        .blog-card-footer .date {
            font-size: 0.8rem;
            color: #94a3b8;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .btn-view {
            background: #1e293b;
            color: #fff;
            border: none;
            padding: 0.5rem 1.4rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.25s ease, transform 0.15s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-view i {
            font-size: 0.75rem;
        }

        .btn-view:hover {
            background: #0f172a;
            transform: scale(1.03);
        }

        /* ---------- MODAL (full width) ---------- */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            display: none;
            /* hidden by default */
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 1.5rem;
            animation: fadeIn 0.3s ease;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal {
            background: #ffffff;
            width: 100%;
            max-width: 900px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.35);
            animation: slideUp 0.35s ease;
            max-height: 95vh;
            display: flex;
            flex-direction: column;
        }

        .modal-image {
            width: 100%;
            height: 280px;
            background-size: cover;
            background-position: center;
            background-color: #cbd5e1;
            flex-shrink: 0;
        }

        .modal-content {
            padding: 2rem 2.5rem 2.5rem;
            overflow-y: auto;
            flex: 1;
        }

        .modal-content .tag {
            display: inline-block;
            background: #eef2ff;
            color: #4f46e5;
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 0.25rem 0.9rem;
            border-radius: 50px;
            margin-bottom: 0.75rem;
        }

        .modal-content h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.75rem;
            line-height: 1.2;
        }

        .modal-content .meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 1.25rem;
        }

        .modal-content .meta i {
            margin-right: 0.3rem;
        }

        .modal-content .full-text {
            color: #334155;
            font-size: 1rem;
            line-height: 1.8;
        }

        .modal-content .full-text p {
            margin-bottom: 1rem;
        }

        .modal-close {
            position: absolute;
            top: 1.2rem;
            right: 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            font-size: 1.4rem;
            color: #0f172a;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .modal-close:hover {
            background: #ffffff;
            transform: rotate(90deg);
        }

        .modal-wrapper {
            position: relative;
            width: 100%;
        }

        /* ---------- ANIMATIONS ---------- */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* ---------- RESPONSIVE ---------- */

        /* Large tablets / small laptops */
        @media screen and (max-width: 1024px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.75rem;
            }

            .main-header h1 {
                font-size: 2.8rem;
            }

            .modal-content {
                padding: 1.75rem 2rem 2rem;
            }

            .modal-content h2 {
                font-size: 1.7rem;
            }
        }

        /* Tablets */
        @media screen and (max-width: 768px) {
            .main-header {
                height: 200px;
                padding: 0 1rem;
            }

            .main-header h1 {
                font-size: 2.2rem;
            }

            .main-header p {
                font-size: 1rem;
                max-width: 90%;
            }

            .blog-container {
                padding: 1.5rem 1rem 3rem;
            }

            .blog-grid {
                grid-template-columns: 1fr 1fr;
                gap: 1.25rem;
            }

            .blog-card-image {
                height: 160px;
            }

            .blog-card-body {
                padding: 1.2rem 1.2rem 1.4rem;
            }

            .blog-card-body h3 {
                font-size: 1.1rem;
            }

            .modal {
                max-width: 100%;
                border-radius: 16px;
                max-height: 98vh;
            }

            .modal-image {
                height: 200px;
            }

            .modal-content {
                padding: 1.5rem 1.5rem 2rem;
            }

            .modal-content h2 {
                font-size: 1.5rem;
            }

            .modal-close {
                top: 0.8rem;
                right: 1rem;
                width: 38px;
                height: 38px;
                font-size: 1.2rem;
            }
        }

        /* Mobile phones */
        @media screen and (max-width: 480px) {
            .main-header {
                height: 180px;
            }

            .main-header h1 {
                font-size: 1.7rem;
            }

            .main-header p {
                font-size: 0.9rem;
            }

            .blog-container {
                padding: 1rem 0.75rem 2.5rem;
            }

            .blog-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .blog-card-image {
                height: 180px;
            }

            .blog-card-body h3 {
                font-size: 1.2rem;
            }

            .modal {
                border-radius: 12px;
                max-height: 100vh;
                max-width: 100%;
            }

            .modal-image {
                height: 160px;
            }

            .modal-content {
                padding: 1.25rem 1.25rem 1.75rem;
            }

            .modal-content h2 {
                font-size: 1.3rem;
            }

            .modal-content .meta {
                flex-wrap: wrap;
                gap: 0.75rem;
                font-size: 0.8rem;
            }

            .modal-close {
                top: 0.6rem;
                right: 0.8rem;
                width: 34px;
                height: 34px;
                font-size: 1rem;
            }

            .btn-view {
                padding: 0.4rem 1.1rem;
                font-size: 0.8rem;
            }

            .blog-card-footer .date {
                font-size: 0.7rem;
            }
        }

        /* Extra small devices */
        @media screen and (max-width: 360px) {
            .main-header h1 {
                font-size: 1.4rem;
            }

            .main-header p {
                font-size: 0.8rem;
            }

            .blog-card-body h3 {
                font-size: 1rem;
            }

            .blog-card-body p {
                font-size: 0.85rem;
            }
        }

        /* ---------- SCROLLBAR STYLING (optional) ---------- */
        .modal-content::-webkit-scrollbar {
            width: 6px;
        }

        .modal-content::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 10px;
        }

        .modal-content::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        .modal-content::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body>
 <?php include 'header.php'; ?>
    <!-- ========== HEADER (250px) ========== -->
    <header class="main-header">
        <h1>📖 Mindful Blog</h1>
        <p>Stories, ideas &amp; insights for the curious mind</p>
    </header>

    <!-- ========== BLOG GRID ========== -->
    <section class="blog-container">
        <div class="blog-grid">

            <!-- Card 1 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Productivity</span>
                    <h3>10 Morning Habits to Boost Your Day</h3>
                    <p>Start your mornings with intention. Small shifts in your routine can create massive results over time.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Aug 3, 2026</span>
                        <button class="btn-view" data-card="1">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Wellness</span>
                    <h3>Finding Stillness in a Busy World</h3>
                    <p>Mindfulness isn't about escaping life — it's about showing up fully for it. Learn to pause and breathe.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Jul 28, 2026</span>
                        <button class="btn-view" data-card="2">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Creativity</span>
                    <h3>Unlocking Your Creative Potential</h3>
                    <p>Creativity isn't a gift — it's a skill. Break through blocks and let your ideas flow freely.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Jul 20, 2026</span>
                        <button class="btn-view" data-card="3">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Career</span>
                    <h3>Designing a Career You Love</h3>
                    <p>Forget the ladder. Build a career that aligns with your values, strengths, and what brings you joy.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Jul 14, 2026</span>
                        <button class="btn-view" data-card="4">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Learning</span>
                    <h3>The Art of Lifelong Learning</h3>
                    <p>Curiosity is your superpower. Embrace the journey of never stopping to grow, discover, and evolve.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Jul 7, 2026</span>
                        <button class="btn-view" data-card="5">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="blog-card">
                <div class="blog-card-image" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');"></div>
                <div class="blog-card-body">
                    <span class="tag">Mindset</span>
                    <h3>Rewiring Your Brain for Success</h3>
                    <p>Your thoughts shape your reality. Adopt a growth mindset and watch how your world transforms.</p>
                    <div class="blog-card-footer">
                        <span class="date"><i class="far fa-calendar-alt"></i> Jun 30, 2026</span>
                        <button class="btn-view" data-card="6">
                            View <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <!-- ========== FULL-WIDTH MODAL ========== -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-wrapper">
            <div class="modal" id="modal">
                <button class="modal-close" id="modalClose" aria-label="Close modal">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-image" id="modalImage" style="background-image: url('');"></div>
                <div class="modal-content" id="modalContent">
                    <span class="tag" id="modalTag">Tag</span>
                    <h2 id="modalTitle">Title</h2>
                    <div class="meta">
                        <span><i class="far fa-calendar-alt"></i> <span id="modalDate">Date</span></span>
                        <span><i class="far fa-clock"></i> 5 min read</span>
                    </div>
                    <div class="full-text" id="modalBody">
                        <p>Full blog content goes here. This is a demonstration of the full-width modal with smooth animations and responsive design.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.</p>
                        <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php include 'footer.php'; ?>
    <!-- ========== JAVASCRIPT ========== -->
    <script>
        (function() {
            'use strict';

            // ---- Data store ----
            const blogData = {
                1: {
                    tag: 'Productivity',
                    title: '10 Morning Habits to Boost Your Day',
                    date: 'Aug 3, 2026',
                    image: 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>Starting your day with intention is one of the most powerful things you can do. These 10 morning habits have been scientifically proven to boost mood, energy, and focus.</p>
                        <p>From hydrating first thing to practicing gratitude, each habit builds on the last to create a morning routine that sets you up for success.</p>
                        <p>Remember: consistency beats intensity. Start small and build your way up. Your future self will thank you.</p>
                    `
                },
                2: {
                    tag: 'Wellness',
                    title: 'Finding Stillness in a Busy World',
                    date: 'Jul 28, 2026',
                    image: 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>In a world that never stops, finding stillness is a radical act of self-care. This post explores practical ways to bring mindfulness into your daily life.</p>
                        <p>Whether it's five minutes of deep breathing or a mindful walk, these small pauses can dramatically reduce stress and increase clarity.</p>
                        <p>Stillness isn't about doing nothing — it's about being fully present with whatever you're doing.</p>
                    `
                },
                3: {
                    tag: 'Creativity',
                    title: 'Unlocking Your Creative Potential',
                    date: 'Jul 20, 2026',
                    image: 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>Creativity is not a mysterious gift reserved for the few — it's a muscle that everyone can develop. This guide breaks down the science of creativity.</p>
                        <p>Learn how to overcome creative blocks, generate new ideas, and turn inspiration into action. The key is to create space for play and curiosity.</p>
                        <p>Start with small creative acts every day and watch your confidence grow.</p>
                    `
                },
                4: {
                    tag: 'Career',
                    title: 'Designing a Career You Love',
                    date: 'Jul 14, 2026',
                    image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>Forget the traditional career ladder. The future of work is about designing a path that aligns with your values, strengths, and passions.</p>
                        <p>This article explores how to identify your core values, build skills that matter, and create a career that feels meaningful and fulfilling.</p>
                        <p>You have the power to shape your professional life — start with a clear vision and take intentional steps forward.</p>
                    `
                },
                5: {
                    tag: 'Learning',
                    title: 'The Art of Lifelong Learning',
                    date: 'Jul 7, 2026',
                    image: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>Lifelong learning is the key to staying adaptable, curious, and fulfilled in a rapidly changing world. Discover how to cultivate a learning mindset.</p>
                        <p>From reading daily to taking online courses, there are countless ways to keep growing. The secret is to stay curious and embrace the unknown.</p>
                        <p>Learning isn't just about acquiring knowledge — it's about transforming who you are.</p>
                    `
                },
                6: {
                    tag: 'Mindset',
                    title: 'Rewiring Your Brain for Success',
                    date: 'Jun 30, 2026',
                    image: 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80',
                    body: `
                        <p>Your brain is more adaptable than you think. Through neuroplasticity, you can rewire your thought patterns and build a growth mindset.</p>
                        <p>This post dives into the science of mindset shifts, offering practical exercises to reframe challenges and embrace resilience.</p>
                        <p>Success starts in the mind. Change your thoughts, and you'll change your world.</p>
                    `
                }
            };

            // ---- DOM refs ----
            const overlay = document.getElementById('modalOverlay');
            const modal = document.getElementById('modal');
            const modalImage = document.getElementById('modalImage');
            const modalTag = document.getElementById('modalTag');
            const modalTitle = document.getElementById('modalTitle');
            const modalDate = document.getElementById('modalDate');
            const modalBody = document.getElementById('modalBody');
            const closeBtn = document.getElementById('modalClose');

            // ---- Open modal ----
            function openModal(cardId) {
                const data = blogData[cardId];
                if (!data) return;

                // Populate
                modalImage.style.backgroundImage = `url('${data.image}')`;
                modalTag.textContent = data.tag;
                modalTitle.textContent = data.title;
                modalDate.textContent = data.date;
                modalBody.innerHTML = data.body;

                // Show
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            // ---- Close modal ----
            function closeModal() {
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            // ---- Event listeners ----
            // All "View" buttons
            document.querySelectorAll('.btn-view').forEach((btn) => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const cardId = this.getAttribute('data-card');
                    if (cardId) openModal(cardId);
                });
            });

            // Close button
            closeBtn.addEventListener('click', closeModal);

            // Click outside modal content (on overlay)
            overlay.addEventListener('click', function(e) {
                if (e.target === overlay) closeModal();
            });

            // Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && overlay.classList.contains('active')) {
                    closeModal();
                }
            });

            // Prevent body scroll while modal is open (already handled in open/close)

            console.log('📖 Blog page ready — click "View" on any card to open the full-width modal.');
        })();
    </script>

</body>
</html>