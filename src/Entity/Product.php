<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $dateofcreation;

    /**
     * @ORM\Column(type="text")
     */
    private $dateofupdate;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateofcreation(): ?string
    {
        return $this->dateofcreation;
    }

    public function setDateofcreation(string $dateofcreation): self
    {
        $this->dateofcreation = $dateofcreation;

        return $this;
    }

    public function getDateofupdate(): ?string
    {
        return $this->dateofupdate;
    }

    public function setDateofupdate(string $dateofupdate): self
    {
        $this->dateofupdate = $dateofupdate;

        return $this;
    }
}
