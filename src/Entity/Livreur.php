<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\LivreurRepository;
use App\Repository\Repository;
use App\Entity\Livreur;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: LivreurRepository::class)]
class Livreur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $idlivreur=null;

}
