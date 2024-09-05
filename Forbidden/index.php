<?php
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>403 Forbidden</title>
  <link rel="stylesheet" href="../error/styles.css">
</head>
<body>
<div class="page">
  <div class="main">
    <h1>Server Error</h1>
    <div class="error-code">403</div>
    <h2>Forbidden</h2>
    <p class="lead">You do not have permission to access this document.</p>
    <hr/>
    <p>That's what you can do</p>
    <div class="help-actions">
      <a href="../?pwd=<?php echo $passwd; ?>">Reload Page</a>
      <a href="../?pwd=<?php echo $passwd; ?>">Back to Previous Page</a>
      <a href="../?pwd=<?php echo $passwd; ?>">Home Page</a>
    </div>
  </div>
</div>
</body>
</html>