<?php 
include_once '../AbstractDbManager.php';

class UsersSupllier extends abstractDbManager {

    // Propriétés

    // Méthodes magique
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // Méthodes custom
    public function getThatUserData(string $pseudo) : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE pseudo = :pseudo');
        $stmt->execute([
            ':pseudo' => $pseudo,
        ]);

        $brutUserData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $brutUserData;
    } 



};

?>