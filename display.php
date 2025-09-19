<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Display Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body {
    background: linear-gradient(to right, #e3f2fd, #ffffff);
    font-family: 'Inter', sans-serif;
    padding: 30px;
  }

  .container {
    max-width: 800px;
    margin: auto;
    margin-top: 40px;
  }

  .card {
    border-radius: 16px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    padding: 25px;
    background-color: #ffffff;
    transition: transform 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
  }

  h2 {
    font-weight: 700;
    color: #1976d2;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
  }

  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #dee2e6;
  }

  th {
    background-color: #f1f8ff;
    color: #0d6efd;
    font-weight: 600;
  }

  tr:hover {
    background-color: #f9f9f9;
  }

  .btn {
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 500;
  }

  .btn-primary {
    background-color: #0d6efd;
    border: none;
  }

  .btn-primary:hover {
    background-color: #0b5ed7;
  }
</style>

</head>
<body>
<div class="container">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Registration Details</h2>
    
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
    
    <a href="register.php" class="btn btn-secondary w-100 mt-3">Back to Registration</a>
  </div>
</div>
</body>
</html>
