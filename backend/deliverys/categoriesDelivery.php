<?php 
include_once '../factorys/CategoriesFactory.php';

session_start();

$categoriesFactory = new CategoriesFactory();

$categoriesModel = $categoriesFactory->getCategories();

foreach ($categoriesModel as $category) {
    $categories[] = [
        'id'=>$category->getId(),
        'title'=>$category->getTitle()
    ];
}

$_SESSION['categories'] = $categories;

header("Location: ../../views/php/category.php");
?>