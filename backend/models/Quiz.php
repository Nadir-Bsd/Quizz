<?php 


class Quiz {

    // property
    private string $id;
    private string $title;
    private string $id_category;

    // magic method

    // custom method

    public function setId($id) : self
    {
        $this->id = $id;
        return $this;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function setTitle($title) : self
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setId_category($id_category) : self
    {
        $this->id_category = $id_category;
        return $this;
    }

    public function getId_category() : string
    {
        return $this->id_category;
    }
};
?>