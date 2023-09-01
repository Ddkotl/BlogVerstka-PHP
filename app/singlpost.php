<?php


require_once 'core/database/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">

</head>
<body>

<?php require_once "core/components/header.php" ?>
      <?php require_once "core/components/bread.php" ?>
      <section class="blog">
        <div class="container">
          <div class="blog__inner">
            <div class="blog__content">
    
            </div>
            <?php require_once "core/components/aside.php" ?>
          </div>
        </div> 
      </section>
      
      
      



      <?php require_once "core/components/footer.php" ?>

        <script src="js/main.min.js"></script>
</body>
</html>