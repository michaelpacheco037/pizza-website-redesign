<?php require_once __DIR__ . '/shared.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restaurant contact details, location, and a demonstration inquiry form for the Roma’s student project.">
    <title>Contact — Roma's Pizza &amp; Italian Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script src="form.js" defer></script>
</head>
<body data-page="contact.php">
    <?php echo $nav; ?>
    <main id="main-content" tabindex="-1">

        <section class="page-hero contact-hero">
            <div class="container">
                <p class="eyebrow">Come say hello</p>
                <h1>There's a place for you here.</h1>
                <p>Plan a visit, ask about catering, or get in touch.</p>
            </div>
        </section>
        <section class="container section" aria-label="Restaurant information">
            <div class="contact-cards">
                <div class="info-card">
                    <h2>Hours</h2>
                    <p>Tuesday – Sunday<br><strong>10:00 AM – 10:30 PM</strong></p>
                    <p class="closed">Closed on Monday</p>
                </div>
                <div class="info-card">
                    <h2>Reach out</h2>
                    <ul class="contact-links">
                        <li><a href="tel:+12143730500">(214) 373-0500</a></li>
                        <li><a href="mailto:manager@romasdallas.com">manager@romasdallas.com</a></li>
                        <li><a href="https://maps.app.goo.gl/vVY8QDRWaMRh36cW6" target="_blank" rel="noopener noreferrer">7033 Greenville Ave.<br>Dallas, TX 75231 ↗</a></li>
                    </ul>
                </div>
                <div class="info-card">
                    <h2>Follow along</h2>
                    <ul class="contact-links">
                        <li><a href="https://www.instagram.com/romasitaliadallas/" target="_blank" rel="noopener noreferrer">Instagram ↗</a></li>
                        <li><a href="https://www.facebook.com/RomasDallas" target="_blank" rel="noopener noreferrer">Facebook ↗</a></li>
                        <li><a href="https://www.linkedin.com/company/romaspizzadallas/" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a></li>
                        <li><a href="https://twitter.com/romasdallas" target="_blank" rel="noopener noreferrer">Twitter / X ↗</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="soft-section section" aria-labelledby="contact-title">
            <div class="container contact-layout">
                <div>
                    <p class="eyebrow">Let's plan something</p>
                    <h2 id="contact-title">Catering or a special occasion?</h2>
                    <p class="muted">Try the contact form demo, or use the restaurant's contact links above for a real inquiry.</p>
                    <iframe class="map-frame" title="Map showing Roma's Pizza and Italian Restaurant in Dallas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11270.991741326021!2d-96.76862973841374!3d32.874734710868836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c20bc20539d65%3A0x6b69d112fef285d7!2sRoma&#39;s%20Pizza%20%26%20Italian%20Restaurant!5e0!3m2!1sen!2sus!4v1712776834299!5m2!1sen!2sus" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                </div>
                <div class="form-wrapper">
                    <form id="contact-form" class="contact-form" action="message.php" method="post">
                        <p class="demo-note" id="form-note">This is a demo form. Your message will not be saved or sent to the restaurant.</p>
                        <div class="form-field">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" autocomplete="name" maxlength="100" placeholder="Your name" required>
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" maxlength="254" placeholder="you@example.com" required>
                        </div>
                        <div class="form-field">
                            <label for="phone">Phone <span class="optional">(optional)</span></label>
                            <input id="phone" name="phone" type="tel" autocomplete="tel" maxlength="25" placeholder="(214) 555-0123" aria-describedby="phone-help">
                            <small id="phone-help">Use a 10-digit US number; a leading +1 is okay.</small>
                        </div>
                        <div class="form-field">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" maxlength="5000" placeholder="Tell us about your event or question…" required></textarea>
                        </div>
                        <button class="btn btn-green" type="submit" aria-describedby="form-note">Submit Demo Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php echo $footer; ?>
</body>
</html>
