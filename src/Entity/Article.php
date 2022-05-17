<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameProduct;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageProduct;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionProduct;

    /**
     * @ORM\Column(type="float")
     */
    private $dutyFreePrice;

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

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

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

    public function getNameProduct(): ?string
    {
        return $this->nameProduct;
    }

    public function setNameProduct(string $nameProduct): self
    {
        $this->nameProduct = $nameProduct;

        return $this;
    }

    public function getImageProduct(): ?string
    {
        return $this->imageProduct;
    }

    public function setImageProduct(?string $imageProduct): self
    {
        $this->imageProduct = $imageProduct;

        return $this;
    }

    public function getDescriptionProduct(): ?string
    {
        return $this->descriptionProduct;
    }

    public function setDescriptionProduct(?string $descriptionProduct): self
    {
        $this->descriptionProduct = $descriptionProduct;

        return $this;
    }

    public function getDutyFreePrice(): ?float
    {
        return $this->dutyFreePrice;
    }

    public function setDutyFreePrice(float $dutyFreePrice): self
    {
        $this->dutyFreePrice = $dutyFreePrice;

        return $this;
    }
}
