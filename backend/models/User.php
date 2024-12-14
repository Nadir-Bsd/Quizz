<?php 

class user {

    // Propriétés
    private string $id;
    private string $pseudo;
    private string $total_score;

    // Méthodes magique
    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

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

    public function getPseudo() : string
    {
        return $this->pseudo;
    }

    public function setTotalScore(string $totalScore) : self
    {
        $this->total_score = $totalScore; 
        return $this;
    }

    public function getTotalScore() : string
    {
        return $this->total_score;
    }
};

?>