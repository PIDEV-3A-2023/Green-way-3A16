<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\EvaluationRepository;
use App\Repository\Repository;
use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: EvaluationRepository::class)]

class Evaluation
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idevaluation=null;


    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $contenu= null;
   

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $rating=null;
    

   //#[ORM\ManyToOne(inversedBy: 'Evaluation')]
    //#[ORM\JoinColumn(nullable: false)]   /// clé etranger problem
    //private ?Personne $idPersonne = null;
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idPersonne = null;
  


}
