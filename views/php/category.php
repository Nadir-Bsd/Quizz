<?php 

session_start();

// pour voir toute les infos de la session
// var_dump($_SESSION);


// pour voir toutes les categories
// var_dump($_SESSION['categories']);


// pour voir toutes les infos de la premiere categorie
// var_dump($_SESSION['categories'][0]);


// pour voir le titre de la premiere categorie
// var_dump($_SESSION['categories'][0]['title']);

$categories = $_SESSION['categories'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="../styles/category-and-quiz.css">
</head>
<body>
    <!--  header -->
    <header class="header">
        <a href="../../index.php" class="logo">Quizine.</a>
        <nav class="navbar">
            <a href="../../index.php">Home</a>
            <a href="./profil.php">Profile</a>
            <a href="" class="active">Category</a>
        </nav>
    </header>

    <main class="container">

        <?php foreach($categories as $category) { ?>
            <a href="../../backend/distributors/quizzesDistributor.php?id=<?= $category["id"] ?>" class="category-and-quiz">
                <?= $category["title"] ?>
            </a>
        <?php } ?>
       
    </main>
</body>
</html>