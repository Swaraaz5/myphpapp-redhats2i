<?php
// Simple PHP application for Red Hat OpenShift Source-to-Image (S2I) hands-on.

$appName = getenv('APP_NAME') ?: 'OpenShift S2I by Swaraj Purekar';
$hostname = gethostname() ?: 'Unknown';
$phpVersion = PHP_VERSION;
$serverTime = date('Y-m-d H:i:s T');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($appName, ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        body { margin: 0; min-height: 100vh; display: grid; place-items: center; font-family: Arial, sans-serif; background: #f3f5f9; color: #202938; }
        .card { width: min(560px, calc(100% - 40px)); padding: 32px; background: #fff; border-radius: 14px; box-shadow: 0 8px 28px rgba(0,0,0,.08); }
        h1 { margin-top: 0; color: #c9190b; }
        .status { color: #16803c; font-weight: bold; }
        .details { margin-top: 24px; }
        .details p { padding: 10px 0; border-bottom: 1px solid #e8ebef; }
        code { background: #f1f3f5; padding: 3px 6px; border-radius: 4px; }
    </style>
</head>
<body>
    <main class="card">
        <h1><?= htmlspecialchars($appName, ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="status">Application is running successfully!</p>
        <p>This PHP application was deployed using Red Hat OpenShift Source-to-Image (S2I).</p>
        <section class="details">
            <p><strong>PHP version:</strong> <code><?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></code></p>
            <p><strong>Container / pod hostname:</strong> <code><?= htmlspecialchars($hostname, ENT_QUOTES, 'UTF-8') ?></code></p>
            <p><strong>Server time:</strong> <code><?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?></code></p>
        </section>
    </main>
</body>
</html>
