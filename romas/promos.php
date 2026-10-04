<?php require_once __DIR__ . '/shared.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catering information and original promotional artwork from the Roma’s student website redesign.">
    <title>Promotions — Roma's Pizza &amp; Italian Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-page="promos.php">
    <?php echo $nav; ?>
    <main id="main-content" tabindex="-1">

        <section class="page-hero promo-hero">
            <div class="container">
                <p class="eyebrow">More reasons to gather</p>
                <h1>Good food. Sweet deals.</h1>
                <p>Catering, special occasions, and a little something extra.</p>
            </div>
        </section>
        <section class="container section">
            <div class="feature-row">
                <div>
                    <p class="eyebrow">Catering from Roma's</p>
                    <h2>Bring Italy to your next event.</h2>
                    <p>From a corporate luncheon to a birthday celebration, Roma's catering brings people together over Italian favorites. Explore the possibilities and get in touch to talk about your event.</p>
                    <a class="btn btn-green" href="contact.php">Ask About Catering</a>
                </div>
                <div class="feature-image">
                    <img src="images/catering.png" alt="Catering promotion from the original Roma's redesign" loading="lazy">
                </div>
            </div>
        </section>
        <section class="soft-section section">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">From the original project</p>
                    <h2>Promotions worth a look.</h2>
                    <p class="muted">These graphics are part of the student redesign. Check directly with Roma's for current offers.</p>
                </div>
                <div class="promo-grid">
                    <div>
                        <a href="order.php"><img src="images/promo1.png" alt="Original promotion: order online and get 15% off. Explore the demo menu." loading="lazy"></a>
                        <p class="promo-caption">Explore the ordering demo.</p>
                    </div>
                    <div>
                        <img src="images/promo2.png" alt="Original promotion: scan your coupons and earn rewards" loading="lazy">
                        <p class="promo-caption">Original coupon and rewards artwork.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container section" aria-labelledby="offers-title">
            <div class="section-heading">
                <p class="eyebrow">New items &amp; limited offers</p>
                <h2 id="offers-title">A taste of something new.</h2>
            </div>
            <div class="carousel " role="region" aria-roledescription="carousel" aria-label="Original promotional artwork">
        <div class="carousel-frame">
            <div class="carousel-slide">
                <img src="images/9.png" alt="Original promotion introducing a new spicy pizza item.">
            </div>
            <div class="carousel-slide" hidden>
                <img src="images/10.png" alt="Original newsletter graphic: sign up for sweet deals." loading="lazy">
            </div>
            <div class="carousel-slide" hidden>
                <img src="images/11.png" alt="Original limited-time promotion for Cantuccini and Vin Santo." loading="lazy">
            </div>
        </div>
        <div class="carousel-controls">
            <button class="carousel-prev" type="button" aria-label="Previous slide">←</button>
            <span class="carousel-status" aria-live="polite" aria-atomic="true">1 / 3</span>
            <button class="carousel-next" type="button" aria-label="Next slide">→</button>
        </div>
    </div>
        </section>
        <section class="container section" aria-labelledby="club-title">
            <div class="club-panel">
                <div>
                    <p class="eyebrow">Stay in the loop</p>
                    <h2 id="club-title">Join the VIP Diners Club</h2>
                    <p>Text ROMAS to (214) 256-4112, or follow Roma's for news and offers.</p>
                </div>
                <div class="actions">
                    <a class="btn btn-green" href="https://www.facebook.com/RomasDallas" target="_blank" rel="noopener noreferrer">Facebook ↗</a>
                    <a class="btn btn-outline" href="https://www.instagram.com/romasitaliadallas/" target="_blank" rel="noopener noreferrer">Instagram ↗</a>
                </div>
            </div>
        </section>
    </main>
    <?php echo $footer; ?>
</body>
</html>
