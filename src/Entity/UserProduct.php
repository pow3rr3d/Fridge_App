<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserProductRepository")
 * @Vich\Uploadable
 */
class UserProduct
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Product", inversedBy="userProducts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="userProducts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stockReel;

    /**
     * @ORM\Column(type="integer")
     */
    private $stockOpti;

    private $qt2Buy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getStockReel(): ?int
    {
        return $this->stockReel;
    }

    public function setStockReel(?int $stockReel): self
    {
        $this->stockReel = $stockReel;

        return $this;
    }

    public function getStockOpti(): ?int
    {
        return $this->stockOpti;
    }

    public function setStockOpti(int $stockOpti): self
    {
        $this->stockOpti = $stockOpti;

        return $this;
    }

    public function getQt2Buy()
    {
        return $this->stockOpti-$this->stockReel;
    }
}
