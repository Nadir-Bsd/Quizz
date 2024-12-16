<?php 

include_once '../factorys/UserFactory.php';

session_start();


if(!isset($_POST['pseudo'])){
    header("Location: ../../index.php");
};


$userFactory = new UserFactory($_POST['pseudo']);

$users = $userFactory->getUser();

$_SESSION['user'] = [
    'id' => $users[0]->getId(),
    'pseudo' => $users[0]->getPseudo(),
    'total_score' => $users[0]->getTotalScore()
];

header("Location: ../../views/php/profil.php");
?>