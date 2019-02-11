<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationRepository")
 * @ORM\Table(name="app_formation")
 */
class Formation
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDebut;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFin;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu;
    
    /**
     * @ORM\Column(type="text", nullable=true)
    */
    private $commentaire;

    
    public function getId(): ?int
    {
        return $this->id;
    }
    
     public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }
    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }
    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }
    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }
    
     public function getLieu(): ?string
    {
        return $this->lieu;
    }
    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;
        return $this;
    }
    
      public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }
    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    
}