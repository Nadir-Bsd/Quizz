<?php 

session_start();

// pour voir toute les infos de la session
// var_dump($_SESSION);


// pour voir toutes les quizzes
// var_dump($_SESSION['quizzes']);


// pour voir toutes les infos du premier quiz
// var_dump($_SESSION['quizzes'][0]);


// pour voir le titre du premier quiz
// var_dump($_SESSION['quizzes'][0]['title']);

$quizzes = $_SESSION['quizzes'];
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
            <a href='./profil.php'>Profile</a>
            <a href="./category.php">Category</a>
            <a href="" class="active">Quiz</a>
        </nav>
    </header>

    <main class="container">

         <?php foreach($quizzes as $quiz) { ?>
            <a href="../../backend/distributors/gameDistributor.php?id_quiz=<?= $quiz["id"] ?>" class="category-and-quiz">
                <?= $quiz["title"] ?>
            </a>
        <?php } ?>

    </main>
</body>
</html>