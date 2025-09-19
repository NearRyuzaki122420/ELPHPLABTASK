<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Display Data (GET)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f1f3f5; }
    .container { max-width: 600px; margin-top: 50px; }
  </style>
</head>
<body>
<div class="container">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Registration Details (GET)</h2>
    
    <?php if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['email'])): ?>
      <div class="alert alert-info">
        <h5>From SESSION:</h5>
        <p><strong>First Name:</strong> <?= $_SESSION['firstname']; ?></p>
        <p><strong>Last Name:</strong> <?= $_SESSION['lastname']; ?></p>
        <p><strong>Email:</strong> <?= $_SESSION['email']; ?></p>
        <p><strong>Password:</strong> <?= $_SESSION['password']; ?></p>
      </div>
    <?php endif; ?>
    
    <?php if (isset($_COOKIE['firstname']) && isset($_COOKIE['lastname']) && isset($_COOKIE['email'])): ?>
      <div class="alert alert-success">
        <h5>From COOKIES:</h5>
        <p><strong>First Name:</strong> <?= $_COOKIE['firstname']; ?></p>
        <p><strong>Last Name:</strong> <?= $_COOKIE['lastname']; ?></p>
        <p><strong>Email:</strong> <?= $_COOKIE['email']; ?></p>
      </div>
    <?php endif; ?>
    
    <a href="register_get.php" class="btn btn-secondary w-100 mt-3">Back to Registration (GET)</a>
  </div>
</div>
</body>
</html>
