<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\ClientRepository;
use App\Repository\Repository;
use App\Entity\Client;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date peut pas etre vide")]
    private ?\DateTimeInterface $datecreation = null;
   

   //#[ORM\ManyToOne(inversedBy: 'Client')]
    //#[ORM\JoinColumn(nullable: false)]   /// clé etranger problem
    //private ?Personne $idclient = null;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idclient = null;
   
   


}
