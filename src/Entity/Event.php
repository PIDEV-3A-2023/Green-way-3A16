<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\EventRepository;
use App\Repository\Repository;
use App\Entity\Event;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $id=null;
    

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $nom= null;
    

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date peut pas etre vide")]
    private ?\DateTimeInterface $datedeb = null;
    

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"date peut pas etre vide")]
    private ?\DateTimeInterface $datefin = null;
    
    

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $description= null;
   

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $image= null;


}
