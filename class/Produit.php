<?php

class Produit implements ProduitInterface {

    use LoggerTrait;

    // Liste des propriétés
    protected string $nom;
    protected ?string $description;
    protected int $quantite;
    protected float $prix;
    protected string $image;

    const TAXE = 1.2; // 20% de TVA

    public function __construct(
        string $nom,
        ?string $description,
        int $quantite,
        float $prix
    )
    {
        $this->setNom($nom);
        $this->setDescription($description);
        $this->setQuantite($quantite);
        $this->setPrix($prix);

        $this->log(__CLASS__, 'Création d\'un produit : '. $this->getNom());
    }
 
    // Setters et Getters
    final public function setNom(string $value): self
    {
        $this->nom = $value;
        return $this;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setDescription(?string $value): self
    {
        $this->description = $value;
        return $this;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setQuantite(int $value): self
    {
        $this->quantite = $value;
        return $this;
    }
    public function getQuantite(): int
    {
        return $this->quantite;
    }
    
    public function setPrix(float $value): self
    {
        $this->prix = $value;
        return $this;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function getPrixTTC(): float
    {
        return $this->prix * self::TAXE;
    }

    public function getMontantTva(): float
    {
        return $this->getPrixTTC() - $this->getPrix();
    }

    public function __toString(): string
    {
        return '<h2>'. $this->getNom() . '</h2>'.
        '<p>Quantité : '. $this->getQuantite() . '</p>'.
        '<p>Prix HT : '. $this->getPrix() . '€</p>'.
        '<p>TVA : '. $this->getMontantTva() . '€</p>'.
        '<p>Prix TTC : '. $this->getPrixTTC() . '€</p>';
    }

    public function setImage(string $value): self
    {
        $this->image = $value;
        return $this;
    }
    public function getImage(): string
    {
        return $this->image;
    }
}