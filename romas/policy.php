<?php require_once __DIR__ . '/shared.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Information about the demonstration contact form, sample cart, and original student restaurant redesign.">
    <title>Privacy &amp; Project Information — Roma's Pizza &amp; Italian Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body data-page="policy.php">
    <?php echo $nav; ?>
    <main id="main-content" tabindex="-1">

        <section class="container section prose">
            <p class="eyebrow">About this website</p>
            <h1>Privacy &amp; project information</h1>
            <p>This website is a student redesign of Roma's Pizza &amp; Italian Restaurant, created by Michael Pacheco and Reed Turner for the 2024 CTEC 4309 Internet Marketing term project. It is a portfolio demonstration.</p>
            <h2>Contact form</h2>
            <p>The contact form demonstrates input validation and a confirmation page. This project does not save the form details in a database or email them to the restaurant. Please use the restaurant's phone or email link for a real inquiry.</p>
            <h2>Ordering demo</h2>
            <p>The cart lets you add dishes, change quantities, remove items, and calculate a subtotal. It is kept in memory for the current page only and resets when you reload. Completing the demo does not place an order, process a payment, or reserve any items.</p>
            <h2>External links and maps</h2>
            <p>Links to social networks and directions open services operated by other organizations. The map on the contact page loads content from Google Maps. Those services follow their own privacy policies.</p>
            <h2>Restaurant information and images</h2>
            <p>Menu prices, hours, promotions, and images are retained from the original student project. Contact the restaurant directly to confirm current details. Promotional graphics here demonstrate the redesign and are not a promise of an active offer.</p>
            <div class="actions"><a class="btn btn-outline" href="index.php">Back to Home</a></div>
        </section>
    </main>
    <?php echo $footer; ?>
</body>
</html>
