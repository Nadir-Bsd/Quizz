<?php

class Answer {

    // property
    private string $id;
    private string $response;
    private string $isCorrect;
    private string $id_question;

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

    public function setResponse($response) : self
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse() : string
    {
        return $this->response;
    }

    public function setIsCorrect($isCorrect) : self
    {
        $this->isCorrect = $isCorrect;
        return $this;
    }

    public function getIsCorrect() : string
    {
        return $this->isCorrect;
    }

    public function setId_question($id_question) : self
    {
        $this->id_question = $id_question;
        return $this;
    }

    public function getId_question() : string
    {
        return $this->id_question;
    }  
};
?>