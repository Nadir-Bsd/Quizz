<?php 

class user {

    // Propriétés
    private int $id;
    private string $pseudo;
    private int $total_score;

    // Méthodes magique
    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    // Méthodes customs
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