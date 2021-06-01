<?php

namespace App\Entity;

use App\Repository\ConsumptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsumptionRepository::class)
 */
class Consumption
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $product_quantity;

    /**
     * @ORM\Column(type="integer")
     */
    private $sugar_quantity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $create_at;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="consumption")
     */
    private $product;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="consumption")
     */
    private $user;

    public function __construct()
    {
        $this->product = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductQuantity(): ?int
    {
        return $this->product_quantity;
    }

    public function setProductQuantity(int $product_quantity): self
    {
        $this->product_quantity = $product_quantity;

        return $this;
    }

    public function getSugarQuantity(): ?int
    {
        return $this->sugar_quantity;
    }

    public function setSugarQuantity(int $sugar_quantity): self
    {
        $this->sugar_quantity = $sugar_quantity;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }

    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->product->contains($product)) {
            $this->product[] = $product;
            $product->setConsumption($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->product->removeElement($product)) {
            // set the owning side to null (unless already changed)
            if ($product->getConsumption() === $this) {
                $product->setConsumption(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
            $user->setConsumption($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getConsumption() === $this) {
                $user->setConsumption(null);
            }
        }

        return $this;
    }
}
