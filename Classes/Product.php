<?php

namespace App\Classes;


class Product
{
    private $id;
    private $name; 
    private $image;
    private $stockReel;
    private $stockOpti;
    private $qtBuy;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }


    /**
     * Get the value of stockReel
     */ 
    public function getStockReel()
    {
        return $this->stockReel;
    }

    /**
     * Set the value of stockReel
     *
     * @return  self
     */ 
    public function setStockReel($stockReel)
    {
        $this->stockReel = $stockReel;

        return $this;
    }

    /**
     * Get the value of stockOpti
     */ 
    public function getStockOpti()
    {
        return $this->stockOpti;
    }

    /**
     * Set the value of stockOpti
     *
     * @return  self
     */ 
    public function setStockOpti($stockOpti)
    {
        $this->stockOpti = $stockOpti;

        return $this;
    }

    /**
     * Get the value of qtBuy
     */ 
    public function getQtBuy()
    {
        return $this->qtBuy;
    }

    /**
     * Set the value of qtBuy
     *
     * @return  self
     */ 
    public function setQtBuy($qtBuy)
    {
        $this->qtBuy = $qtBuy;

        return $this;
    }
}
