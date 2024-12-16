<?php

class Question {

    // property
    private string $id;
    private string $title;
    private string $id_quiz;
    private array $answers;

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

    public function setId_quiz($id_quiz) : self
    {
        $this->id_quiz = $id_quiz;
        return $this;
    }

    public function getId_quiz() : string
    {
        return $this->id_quiz;
    }

    public function setAnswers($answers) : self
    {
        $this->answers = $answers;
        return $this;
    }

    public function getAnswers() : array
    {
        return $this->answers;
    }
};

?>