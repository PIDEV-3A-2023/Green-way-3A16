<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
       // #[Assert\NotBlank(message:"peut pas etre vide")]

    private ?int $id = null;

    #[ORM\Column(length: 255)]
       // #[Assert\NotBlank(message:"Le champ nom ne peut pas être vide")]

    private ?string $nom = null;

    #[ORM\Column(length: 255)]
       // #[Assert\NotBlank(message:"Le champ prénom ne peut pas être vide")]

    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
       // #[Assert\NotBlank(message:"Le champ email ne peut pas être vide")]

    private ?string $email = null;

    #[ORM\Column(length: 255)]
       // #[Assert\NotBlank(message:"Le champ password ne peut pas être vide")]

    private ?string $password = null;

    #[ORM\Column]
       // #[Assert\NotBlank(message:"Le champ telephone ne peut pas être vide")]

    private ?int $telephone = null;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    
        

    
}
