<?php 
include_once '../AbstractDbManager.php';

class CategoriesSupplier extends abstractDbManager {

    // Propriétés

    // Méthodes magique
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // Méthodes custom
    public function getCategoriesData() : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM category LIMIT 10');
        $stmt->execute();

        $brutCategoriesData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $brutCategoriesData;
    } 



};

?>