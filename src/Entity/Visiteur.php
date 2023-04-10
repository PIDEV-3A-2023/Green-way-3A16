<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\VisiteurRepository;
use App\Repository\Repository;
use App\Entity\Visiteur;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: VisiteurRepository::class)]
class Visiteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idvisiteur=null;

  


}
