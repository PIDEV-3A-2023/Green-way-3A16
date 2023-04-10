<?php

namespace App\Entity;

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\CommandeRepository;
use App\Repository\Repository;
use App\Entity\Commande;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?float $prixtotal= null;
   

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date peut pas etre vide")]
    private ?\DateTimeInterface $date = null;
   

   
    //#[ORM\ManyToOne(inversedBy: 'Commande')]
    //#[ORM\JoinColumn(nullable: false)]   /// clé etranger problem
    //private ?Client $idClient = null;
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idClient = null;
  
   //#[ORM\ManyToOne(inversedBy: 'Commande')]
    //#[ORM\JoinColumn(nullable: false)]   /// clé etranger problem
    //private ?Livreur $idcommande = null;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idcommande = null;
  


}
