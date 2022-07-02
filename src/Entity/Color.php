<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ColorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ColorRepository::class)
 */
#[ApiResource]
class Color
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
     * @ORM\OneToMany(targetEntity=Shoe::class, mappedBy="shoeColor", orphanRemoval=true)
     */
    private $shoes;

    public function __construct()
    {
        $this->shoes = new ArrayCollection();
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

    /**
     * @return Collection<int, Shoe>
     */
    public function getShoes(): Collection
    {
        return $this->shoes;
    }

    public function addShoe(Shoe $shoe): self
    {
        if (!$this->shoes->contains($shoe)) {
            $this->shoes[] = $shoe;
            $shoe->setShoeColor($this);
        }

        return $this;
    }

    public function removeShoe(Shoe $shoe): self
    {
        if ($this->shoes->removeElement($shoe)) {
            // set the owning side to null (unless already changed)
            if ($shoe->getShoeColor() === $this) {
                $shoe->setShoeColor(null);
            }
        }

        return $this;
    }
}
