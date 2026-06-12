<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
<meta name="author" content="<?= htmlspecialchars($pageAuthor) ?>">
<meta name="robots" content="<?= htmlspecialchars($pageRobots) ?>">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/main.css">
<?php if (!empty($pageStylesheet)): ?>
<link rel="stylesheet" href="<?= htmlspecialchars($pageStylesheet, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
</head>
<body>
