<?php

namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\CategorieRepository;
use App\Repository\Repository;
use App\Entity\Categorie;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    // #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $id=null;
   

    #[ORM\Column(length: 500)]
    // #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $nomcategorie= null;

    #[ORM\OneToMany(mappedBy: 'Categorie', targetEntity: Product::class)]
    private Collection $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
  
    public function getidcategorieId(): ?int
    {
        return $this->id;
    }
    
    public function getNomCategorie(): ?string
    {
        return $this->nomcategorie;
    }

    public function setNomCategorie(string $NomCategorie): self
    {
        $this->NomCategorie = $NomCategorie;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->setCategorie($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getCategorie() === $this) {
                $product->setCategorie(null);
            }
        }

        return $this;
    }

}

