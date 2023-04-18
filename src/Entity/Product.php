<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use App\Repository\ProductRepository;
use App\Repository\Repository;
use App\Entity\Product;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
#[ORM\Entity(repositoryClass: ProductRepository::class)]

class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?int $id_Product=null;


    #[ORM\Column]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?float $price= null;
    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $description= null;
    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $image= null;

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message:"peut pas etre vide")]
    private ?string $name = null;
  

    // /**
    //  * @var \Doctrine\Common\Collections\Collection
    //  *
    //  * @ORM\ManyToMany(targetEntity="Materiaux", inversedBy="idproduit")
    //  * @ORM\JoinTable(name="produit_materieux",
    //  *   joinColumns={
    //  *     @ORM\JoinColumn(name="idProduit", referencedColumnName="id_Product")
    //  *   },
    //  *   inverseJoinColumns={
    //  *     @ORM\JoinColumn(name="idMateriel", referencedColumnName="idMateriaux")
    //  *   }
    //  * )
    //  */
    //[ORM\ManyToOne(inversedBy: 'Product')]
    //#[ORM\JoinColumn(nullable: false)]   /// clé etranger problem
    //private ?Materintiaux $idmateriel = null;
    //#[Assert\NotBlank(message:"peut pas etre vide")]
   // private ?int $idmateriel = null;
   
    // private $idmateriel = array();


    /**
     * Constructor
     */
    // public function __construct()
    // {
    //     $this->idmateriel = new ArrayCollection();    }

    public function getIdProduct(): ?int
    {
        return $this->id_Product;
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

}
