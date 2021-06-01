<?php

namespace App\Entity;

use App\Repository\ConsumptionRepository;
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
}
