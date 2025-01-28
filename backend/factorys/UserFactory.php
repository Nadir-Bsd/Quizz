<?php 

include_once '../suppliers/UserSupplier.php';
include_once '../models/User.php';

class UserFactory {

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
        // revois le user fini
        $users = $this->dataPolish($this->supllier->getThatUserData($this->userName));
        return $users;
    }

    // traiter les DATAS venant du supplier
    private function dataPolish(array $bruteUserData) : array
    {
        var_dump($bruteUserData);
        foreach ($bruteUserData as $userDataPolish) {
            $users[] = $this->hydrateUser($userDataPolish);
        }
        return $users;
    }
    
    // hydrater le user
    private function hydrateUser(array $dataPolish) : User
    {
        $user = new User($dataPolish['pseudo']);
        $user->setId($dataPolish['id']);
        $user->setTotalScore($dataPolish['total_score']);
        return $user;
    }
}

?>