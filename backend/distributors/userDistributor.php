<?php 

include_once '../factorys/UserFactory.php';

session_start();

if(!isset($_SESSION['user'])){
    header("Location: ../../index.php");
};


$userFactory = new UserFactory($_SESSION['user']['pseudo']);

$users = $userFactory->getUser();

$_SESSION['user'] = [
    'id' => $users[0]->getId(),
    'pseudo' => $users[0]->getPseudo(),
    'total_score' => $users[0]->getTotalScore()
];

header("Location: ../../views/php/profil.php");


?>