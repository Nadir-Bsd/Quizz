<?php  

session_start();

// var_dump($_SESSION['user']);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../styles/profile.css">
    <script defer src="../js/handle-add-buttons.js"></script>
</head>
<body>
    <!--  header -->
    <header class="header">
        <a href="../../index.php" class="logo">Quizine.</a>
        <nav class="navbar">
            <a href="../../index.php">Home</a>
            <a href="" class="active">Profile</a>
            <a href="./category.php">Category</a>
        </nav>
    </header>

    <!-- Main -->
    <main class="container">
        <h1>Welcome <?= $_SESSION['user']['pseudo'] ?></h1>
        <?php if ($_SESSION['user']['pseudo'] == "nadir") { ?>
            <section class="addSection">
                <div class="addDiv" id="addCategoryButton">Add Category</div>
                <div class="addDiv" id="addQuizButton">Add Quiz</div>
                <div class="addDiv">Add Question</div>
            </section>

            
            <form action="" method="post" class="addCategoryForm formDisplayNone" id="addCategoryForm">
                <label for="catergoryName">Category name :</label>
                <input type="text" name="catergoryName" id="catergoryName">
                <input type="submit" value="ADD" id="submitButton">
            </form>

            <form action="" method="post" class="quizForm formDisplayNone" id="addQuizForm">

                <div>
                    <label for="catergoryName">Category name :</label>
                    <input type="text" name="catergoryName" class="name">
                </div>

                <div>
                    <label for="catergoryName">Quiz :</label>
                    <input type="text" name="catergoryName"  class="name">
                </div>

                <div>
                    <input type="submit" value="ADD"  class="quizAdd">
                </div>
            </form>


        <?php } ?>
    </main>
</body>
</html>