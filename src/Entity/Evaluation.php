<?php

namespace App\Entity;

use App\Repository\EvaluationRepository;
use App\Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: EvaluationRepository::class)]
class Evaluation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idevaluation = null;
    /**
* @Assert\NotBlank(message="contenu doit etre non vide")

* @ORM\Column(type="string", length=1000)
*/
    #[ORM\Column(length: 30)]
    private ?string $contenu = null;
   
 /**
* @Assert\NotBlank(message="rating  doit etre non vide")
* @Assert\Range(min=0, max=5, minMessage="taux doit etre au moins 0", maxMessage="taux ne doit pas depasser 5")

* @ORM\Column(type="string", length=1000)
*/
    #[ORM\Column(type: 'integer')]
    private ?int $rating = null;

    public function getIdevaluation(): ?int
    {
        return $this->idevaluation;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

}
