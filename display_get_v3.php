<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Data (GET - Page 2)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .container { max-width: 600px; margin-top: 50px; }
  </style>
</head>
<body>
<div class="container">
  <div class="card shadow-lg p-4">
    <h2 class="text-center mb-4">Submitted Registration Data</h2>

    <?php if (isset($_GET['firstname'], $_GET['lastname'], $_GET['email'], $_GET['password'])): ?>
      <div class="alert alert-info">
        <p><strong>First Name:</strong> <?= htmlspecialchars($_GET['firstname']); ?></p>
        <p><strong>Last Name:</strong> <?= htmlspecialchars($_GET['lastname']); ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($_GET['email']); ?></p>
        <p><strong>Password:</strong> <?= htmlspecialchars($_GET['password']); ?></p>
      </div>
    <?php else: ?>
      <div class="alert alert-warning">No data received. Please fill out the form first.</div>
    <?php endif; ?>

    <a href="register_get.php" class="btn btn-primary mt-3">Back to Registration</a>
  </div>
</div>
</body>
</html>
