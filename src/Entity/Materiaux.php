<?php

namespace App\Entity;
use App\Repository\MateriauxRepository;
use App\Repository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\AbstractType;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: MateriauxRepository::class)]
class Materiaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idmateriaux = null;
         /**
* @Assert\NotBlank(message="type  doit etre non vide")

* @ORM\Column(type="string", length=1000)
*/
    #[ORM\Column(length: 30)]
    private ?string $type = null;
    
    #[ORM\Column(length: 30)]
    private ?string $taux = null;
    
    #[ORM\Column(length: 30)]
    private ?string $duree = null;
     /**
* @Assert\NotBlank(message="condition doit etre non vide")

* @ORM\Column(type="string", length=1000)
*/
    #[ORM\Column(length: 30)]
    private ?string $condition_ut = null;
    

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getIdmateriaux(): ?int
    {
        return $this->idmateriaux;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTaux(): ?string
    {
        return $this->taux;
    }

    public function setTaux(string $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getCondition_ut(): ?string
    {
        return $this->conditionUt;
    }

    public function setCondition_ut(string $conditionUt): self
    {
        $this->condition_ut = $condition_ut;

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
            $product->addMateriaux($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->removeElement($product)) {
            $product->removeMateriaux($this);
        }

        return $this;
    }
    
    public function calculateDuration(DateTime $date, string $type): string
    {
        switch ($type) {
            case 'Metal':
                $years = 10;
                break;
            case 'Plastique':
                $years = 5;
                break;
            case 'verre':
                $years = 7;
                break;
            default:
                $years = 0;
        }

        $expirationDate = clone $date;
        $expirationDate->modify("+$years years");

        return $expirationDate->format('Y-m-d');
    }
}