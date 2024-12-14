<?php 

include_once '../suppliers.php/UserSupplier.php';
include_once '../models/User.php';

class UserFactoy {

    // Propriétés
    private UsersSupllier $supllier;
    private string $userName;

    // Méthodes magique
    public function __construct(string $userName)
    {
        // appel le Supplier
        $this->supllier = new UsersSupllier();
        $this->userName = $userName;
    }

    // Méthodes custom
    public function getUser() : array
    {        
        // poli les datas
        $users = $this->dataPolish($this->supllier->getThatUserData($this->userName));
        return $users;
    }

    // traiter les DATAS venant du supplier
    private function dataPolish(array $bruteUserData) : array
    {
        foreach ($bruteUserData as $userDataPolish) {
            $users[] = $this->hydrateUser($userDataPolish);
        }
        return $users;
    }
    
    // hydrater le user
    private function hydrateUser(array $dataPolish) : User
    {
        $user = new User($dataPolish['pseudo']);
        $user->setTotalScore($dataPolish['total_score']);
        return $user;
    }
}

?>