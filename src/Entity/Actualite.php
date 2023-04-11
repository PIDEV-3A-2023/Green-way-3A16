<?php

namespace App\Entity;
use App\Repository\ActualiteRepository;
use App\Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActualiteRepository::class)]
class Actualite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idactualite = null;

    /**
     * @var int
     *
     * @ORM\Column(name="nom_actualite", type="integer", nullable=false)
     */
    private $nomActualite;

    /**
     * @var \Offre
     *
     * @ORM\ManyToOne(targetEntity="Offre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOffre", referencedColumnName="idOffre")
     * })
     */
    private $idoffre;

    public function getIdactualite(): ?int
    {
        return $this->idactualite;
    }

    public function getNomActualite(): ?int
    {
        return $this->nomActualite;
    }

    public function setNomActualite(int $nomActualite): self
    {
        $this->nomActualite = $nomActualite;

        return $this;
    }

    public function getIdoffre(): ?Offre
    {
        return $this->idoffre;
    }

    public function setIdoffre(?Offre $idoffre): self
    {
        $this->idoffre = $idoffre;

        return $this;
    }


}
