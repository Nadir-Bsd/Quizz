<?php 

include_once '../suppliers/CategoriesSupplier.php';
include_once '../models/Category.php';

class CategoriesFactory {
    
    // Propriétés
    private CategoriesSupplier $supplier;
    
    // Méthodes magique
    public function __construct()
    {
        // appel le Supplier
        $this->supplier = new CategoriesSupplier();
    }

    // Méthodes custom
    public function getCategories() : array
    {
        // revois le user fini
        $categories = $this->dataPolish($this->supplier->getCategoriesData());
        return $categories;
    }

    // traiter les DATAS venant du supplier
    private function dataPolish(array $bruteCategoriesData) : array
    {
        foreach ($bruteCategoriesData as $categoryDataPolish) {
            $categories[] = $this->hydrateCategory($categoryDataPolish);
        }
        return $categories;
    }
    
    // hydrater le user
    private function hydrateCategory(array $dataPolish) : Category
    {
        $category = new Category();
        $category->setId($dataPolish['id']);
        $category->setTitle($dataPolish['title']);
        return $category;
    }
}

?>