<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoisirRepository")
 * @ORM\Table(name="app_loisir")
 */

class loisir
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="text", nullable=true)
    */
    private $commentaire;
    
        /**
     * @var string
     * 
     * @ORM\Column (type="string", name="name")
     */
    private $name;
    
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