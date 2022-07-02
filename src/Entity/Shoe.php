<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ShoeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ShoeRepository::class)
 */
#[ApiResource]
class Shoe
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
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stock;

    /**
     * @ORM\OneToMany(targetEntity=Review::class, mappedBy="reviewShoe", orphanRemoval=true)
     */
    private $reviews;

    /**
     * @ORM\ManyToMany(targetEntity=OrderDetail::class, inversedBy="shoes")
     */
    private $shoeOrderdetail;

    /**
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="shoes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $shoeBrand;

    public function __construct()
    {
        $this->shoeOrderdetail = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function isStock(): ?bool
    {
        return $this->stock;
    }

    public function setStock(?bool $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setReviewShoe($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getReviewShoe() === $this) {
                $review->setReviewShoe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, OrderDetail>
     */
    public function getShoeOrderdetail(): Collection
    {
        return $this->shoeOrderdetail;
    }

    public function addShoeOrderdetail(OrderDetail $shoeOrderdetail): self
    {
        if (!$this->shoeOrderdetail->contains($shoeOrderdetail)) {
            $this->shoeOrderdetail[] = $shoeOrderdetail;
        }

        return $this;
    }

    public function removeShoeOrderdetail(OrderDetail $shoeOrderdetail): self
    {
        $this->shoeOrderdetail->removeElement($shoeOrderdetail);

        return $this;
    }

    public function getShoeBrand(): ?Brand
    {
        return $this->shoeBrand;
    }

    public function setShoeBrand(?Brand $shoeBrand): self
    {
        $this->shoeBrand = $shoeBrand;

        return $this;
    }
}
