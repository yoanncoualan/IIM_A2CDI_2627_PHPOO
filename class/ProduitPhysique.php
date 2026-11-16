<?php

class ProduitPhysique extends Produit {
    use LoggerTrait;

    public function __construct(
        string $nom,
        ?string $description,
        int $quantite,
        float $prix,
        private float $poids
    ){
        // Ici on appel le constructeur du parent, en lui envoyant les données
        parent::__construct($nom, $description, $quantite, $prix);

        $this->log(__CLASS__, 'Création d\'un produit physique : '. $this->getNom());
    }
    
    // Setter et Getter
    public function setPoids(float $value): self
    {
        $this->poids = $value;
        return $this;
    }
    public function getPoids(): float
    {
        return $this->poids;
    }

    public function __toString(): string
    {
        return '<h2>'. $this->getNom() . '</h2>'.
        '<p>Quantité : '. $this->getQuantite() . '</p>'.
        '<p>Prix HT : '. $this->getPrix() . '€</p>'.
        '<p>TVA : '. $this->getMontantTva() . '€</p>'.
        '<p>Prix TTC : '. $this->getPrixTTC() . '€</p>'.
        '<p>Poids : '. $this->getPoids() . 'kg</p>';
    }
}