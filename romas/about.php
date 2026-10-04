<?php require_once __DIR__ . '/shared.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about the family-owned restaurant and the community behind this Roma’s student website redesign.">
    <title>About Us — Roma's Pizza &amp; Italian Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-page="about.php">
    <?php echo $nav; ?>
    <main id="main-content" tabindex="-1">

        <section class="page-hero about-hero">
            <div class="container">
                <p class="eyebrow">The Roma's story</p>
                <h1>A little Italy on Greenville.</h1>
                <p>Family, community, and a shared love of good food.</p>
            </div>
        </section>
        <section class="container section">
            <div class="feature-row">
                <div>
                    <p class="eyebrow">Made with care</p>
                    <h2>Food that brings people together.</h2>
                    <p class="muted">Roma's blends fresh ingredients and Italian recipes with a made-from-scratch approach. From pizza and pasta to American favorites, the menu offers something for every appetite.</p>
                    <p class="muted">Family owned and operated, Roma's is dedicated to making every guest feel welcome.</p>
                </div>
                <div class="feature-image">
                    <img src="images/firstsecone.jpg" alt="An Italian dish from Roma's original project photography" loading="lazy">
                </div>
            </div>
        </section>
        <section class="soft-section section" aria-label="Restaurant highlights">
            <div class="container facts-grid">
                <img src="images/fact1.png" alt="Real mozzarella" loading="lazy">
                <img src="images/fact2.png" alt="Made from scratch" loading="lazy">
                <img src="images/fact3.png" alt="Only fresh ingredients" loading="lazy">
                <img src="images/fact4.png" alt="A menu with variety" loading="lazy">
            </div>
        </section>
        <section class="container section">
            <div class="feature-row reverse">
                <div class="feature-image">
                    <img src="images/alfredo-pizza.jpg" alt="Chicken Alfredo pizza" loading="lazy">
                </div>
                <div>
                    <p class="eyebrow">Rooted in North Texas</p>
                    <h2>Serving the community for over 20 years.</h2>
                    <p class="muted">Roma's welcomes guests from Dallas and neighboring communities, including Plano, Richardson, Euless, Fort Worth, Grapevine, and Grand Prairie.</p>
                    <p class="muted">Come for a favorite dish, discover something new, and enjoy a meal with the people you love.</p>
                    <a class="btn btn-green" href="contact.php">Find Roma's</a>
                </div>
            </div>
            <img class="food-banner" src="images/foodoptions.png" alt="Pizza, salad, pasta, and wine from the original restaurant redesign" loading="lazy">
        </section>
    </main>
    <?php echo $footer; ?>
</body>
</html>
