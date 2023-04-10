<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\ProduitRepository;
use App\Repository\Repository;
use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idProduit=null;
   

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $name= null;
    

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $prix=null;
    

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $descP= null;
    

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $image= null;
  

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idfournisseur=null;


    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idcommande=null;


    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idactualite=null;
    

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idpanier=null;
   

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idcategorie=null;
   

}
