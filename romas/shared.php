<?php
// Shared navigation and footer. Edit these once to update every page.
$nav = <<<'HTML'
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="site-header" id="top">
    <div class="container nav-container">
        <a class="navbar-brand" href="index.php" aria-label="Roma's Pizza and Italian Restaurant — home">
            <img src="images/logo.png" alt="Roma's Pizza and Italian Restaurant" width="1080" height="458">
        </a>
        <button class="navbar-toggler" type="button" aria-controls="navigation" aria-expanded="false">
            <span aria-hidden="true">☰</span> Menu
        </button>
        <nav class="navigation" id="navigation" aria-label="Main navigation">
            <ul class="navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="promos.php">Promotions</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="order" href="order.php">Explore the Menu</a></li>
            </ul>
        </nav>
    </div>
</header>
HTML;

$footer = <<<'HTML'
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-intro">
            <img class="footer-logo" src="images/logo.png" alt="Roma's Pizza and Italian Restaurant" width="1080" height="458" loading="lazy">
            <p>Good food. Great company. A little taste of Italy in the heart of Dallas.</p>
        </div>
        <div>
            <h2>Visit Roma's</h2>
            <address>7033 Greenville Ave.<br>Dallas, TX 75231</address>
            <a href="https://maps.app.goo.gl/vVY8QDRWaMRh36cW6" target="_blank" rel="noopener noreferrer">Get directions ↗</a>
        </div>
        <div>
            <h2>Hours</h2>
            <p>Tuesday – Sunday<br>10:00 AM – 10:30 PM</p>
            <p class="closed">Closed on Monday</p>
        </div>
        <div>
            <h2>Keep in touch</h2>
            <a href="tel:+12143730500">(214) 373-0500</a>
            <a href="mailto:manager@romasdallas.com">Email Roma's</a>
            <div class="footer-socials">
                <a href="https://www.instagram.com/romasitaliadallas/" target="_blank" rel="noopener noreferrer">Instagram ↗</a>
                <a href="https://www.facebook.com/RomasDallas" target="_blank" rel="noopener noreferrer">Facebook ↗</a>
            </div>
        </div>
    </div>
    <div class="container footer-bottom">
        <p>2024 student redesign by Michael Pacheco &amp; Reed Turner · CTEC 4309 Internet Marketing</p>
        <a href="policy.php">Privacy &amp; project information</a>
    </div>
</footer>
<a class="to-top" href="#top" aria-label="Back to top">↑</a>
HTML;
