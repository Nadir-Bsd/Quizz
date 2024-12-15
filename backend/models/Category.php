<?php 

class Category {

    // Propriétés
    private string $id;
    private string $title;

    // Méthodes magique

    // Méthodes customs

    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle() : string
    {
        return $this->title;
    }
};

?>