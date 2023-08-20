<?php
    include("../../Controller/protectController.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--LINKS-->
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <!--Own-->
    <link rel="stylesheet" href="/css/universal.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <?php include "../universal/header.php"?>

    <main>
        <h1>Bem vindo de volta <?php echo $_SESSION['nome']; ?></h1>

        <h1><a href="/src/Controller/logoutController.php">Sign Out</a></h1>
    </main>

    <?php include "../universal/footer.php"?>
</body>

<script src="/js/headerScroll.js"></script>

</html>