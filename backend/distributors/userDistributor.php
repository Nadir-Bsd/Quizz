<?php 

include_once '../factorys/UserFactory.php';

$userFactory = new UserFactoy('nadir');

$users = $userFactory->getUser();

var_dump($users[0]->getPseudo());
var_dump($users[0]->getTotalScore());
?>