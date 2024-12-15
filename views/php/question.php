<?php 
session_start();

// pour voir toute les infos de la session
// var_dump($_SESSION);


// pour voir toutes les quizzes
// var_dump($_SESSION['quizScore']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="../styles/question.css">
</head>
<body> 

   <section class="quiz-section">
        <div class="quiz-box">
            <h2>Quiz</h2>
            <div class="quiz-header">
                <span>Quiz Website Tutorials</span>
                <span class="header-score">Score 0 / 5</span>
            </div>

            <h3 class="question-text">What does HTML stand for?</h3>

            <div class="option-list">
                <div class="option">
                    <span>A. hyper Type Multi Language</span>
                </div>
                <div class="option">
                    <span>B. Hyper Text Multiple Language</span>
                </div>
                <div class="option">
                    <span>C. Hyper Text Markup Language</span>
                </div>
                <div class="option">
                    <span>D. Home Text Multi Language</span>
                </div>
            </div>
            
            <div class="quiz-footer">
                <span class="question-total">1 of 5 Questions</span>
                <button class="next-btn">Next</button>
            </div>

            <a href="../../index.php" class="quit">Quit</a>

        </div>
   </section>

</body>
</html>