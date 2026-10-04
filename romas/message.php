<?php require_once __DIR__ . '/shared.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirmation page for the demonstration contact form. No real message is sent.">
    <title>Demo Complete — Roma's Pizza &amp; Italian Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-page="message.php">
    <?php echo $nav; ?>
    <main id="main-content" tabindex="-1">

        <div class="container">
            <section class="message-panel">
                <p class="eyebrow">Contact form demo</p>
                <h1>Thanks for trying it out.</h1>
                <p>The form demo is complete. No message has been saved or sent to Roma's.</p>
                <p>For a real inquiry, please call <a href="tel:+12143730500">(214) 373-0500</a> or use the contact information on the restaurant page.</p>
                <div class="actions">
                    <a class="btn btn-green" href="index.php">Back to Home</a>
                    <a class="btn btn-outline" href="contact.php">Contact Information</a>
                </div>
            </section>
        </div>
    </main>
    <?php echo $footer; ?>
</body>
</html>
