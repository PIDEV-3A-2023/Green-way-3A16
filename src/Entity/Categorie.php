<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\CategorieRepository;
use App\Repository\Repository;
use App\Entity\Categorie;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $id=null;
   

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $nomcategorie= null;
  
    public function getidcategorieId(): ?int
    {
        return $this->id;
    }
    
    public function getNomCategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setNomCategorie(string $NomCategorie): self
    {
        $this->NomCategorie = $NomCategorie;

        return $this;
    }

}
