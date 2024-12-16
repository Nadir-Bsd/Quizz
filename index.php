<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizine</title>
    <link rel="stylesheet" href="./views/styles/style.css">
    
    <script src="./views/js/handle-popup.js"></script>
    <script src="./views/js/handle-user-popup.js"></script>
    
    
</head>
<body>
    <!--  header -->
    <header>
        <a href="" class="logo">Quizine.</a>
        <nav class="navbar">
            <a href="" class="active">Home</a>
            <a href='./backend/distributors/userDistributor.php'>Profile</a>
        </nav>
    </header>
    
    <!-- Main -->
    <main class="home">
        <section class="home-content">
            <h1>Quiz Website</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro eveniet consequuntur tempora explicabo, dolores nesciunt impedit repellat, consectetur ullam autem temporibus sequi. Dicta, labore voluptatem!</p>
            <button class=start-btn>Start Quiz</button>
        </section>
    </main>

    <!-- Popups -->
   
    <?php if(!isset($_SESSION['user'])) {  ?>
        <div class="userPopup">
        <h2>Connect</h2>
        <form action="./backend/distributors/userDistributor.php" method="post">
            <label for="pseudo">Pesudo :</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Example: Nadir">
            <div class="btn-group">
                <input type="submit" class="addUserButton" value="Connect">
            </div>
        </form>
    </div>
    <?php }?>

    <div class="popup-info">
        <h2>Quiz Guid</h2>
        <span class="info">1. Lorem ipsum dolor sit amet consectetur</span>
        <span class="info">2. Lorem ipsum dolor sit amet consectetur adipisicing.</span>
        <span class="info">3. Lorem ipsum dolor sit amet conse.</span>
        <span class="info">4. Lorem ipsum dolor sit amet consectetur adipisicing.</span>
        <span class="info">5. Lorem ipsum dolor sit amet consectetur adipisicing.</span>

        <div class="btn-group">
            <button class="info-btn exit-btn">Exit Quiz</button>
            <a href="./backend/deliverys/categoriesDelivery.php" class="info-btn continue-btn">Continue</a>
        </div>
    </div>
    
    
</body>
</html>