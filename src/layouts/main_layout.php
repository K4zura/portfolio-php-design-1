<?php
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="styles/global.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="src/logic/interactions.js"></script>
</head>
<body id="app" class="relative flex flex-col items-center text-white">
  <?php require SRC . '/components/header.php'; ?>
  <main id="main" class="w-full max-w-[1200px]">
    <?php 
      $sections = ['hero', 'about', 'experience', 'skills', 'projects', 'contact'];
      
      foreach ($sections as $section) {
          $path = SRC . "/pages/{$section}.php";
          if (file_exists($path)) {
              require_once $path;
          } else {
              echo "<h2 style='color:red'>ERROR: No encuentro el archivo $section.php</h2>";
          }
      }
    ?>
  </main>
  <div class="fixed inset-0 w-screen h-screen bg-radial -z-50"></div>
  <?php require_once SRC . '/components/navbar.php'; ?>
</body>
</html>