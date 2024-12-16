<?php 
include_once '../AbstractDbManager.php';

class QuizzesSupplier extends abstractDbManager {
   
    // property

    // magic methode
    public function __construct()
    {
        // CONNECTION DB
        parent::__construct();
    }

    // custom methode
    public function getThatCategoryQuizzesData(string $id_category) : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM quiz WHERE id_category = :id_category LIMIT 10');
        $stmt->execute([
            ':id_category'=>$id_category,
        ]);

        $brutQuizzesData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $brutQuizzesData;
    } 
};
?>