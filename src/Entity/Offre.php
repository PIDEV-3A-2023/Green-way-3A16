<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\OffreRepository;
use App\Repository\Repository;
use App\Entity\Offre;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idoffre=null;
   

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date peut pas etre vide")]
    private ?\DateTimeInterface $dateDeb = null;
    

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $nbrJour=null;
 

    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $pourcentage=null;
  

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $nomoffre= null;
   


}
