<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use App\Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idproduct = null;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Materiaux", inversedBy="idproduit")
     * @ORM\JoinTable(name="produit_materieux",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idProduit", referencedColumnName="idProduct")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idMateriel", referencedColumnName="idMateriaux")
     *   }
     * )
     */
    private $idmateriel = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idmateriel = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdproduct(): ?int
    {
        return $this->idproduct;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Materiaux>
     */
    public function getIdmateriel(): Collection
    {
        return $this->idmateriel;
    }

    public function addIdmateriel(Materiaux $idmateriel): self
    {
        if (!$this->idmateriel->contains($idmateriel)) {
            $this->idmateriel->add($idmateriel);
        }

        return $this;
    }

    public function removeIdmateriel(Materiaux $idmateriel): self
    {
        $this->idmateriel->removeElement($idmateriel);

        return $this;
    }

}
