<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrderDetailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OrderDetailRepository::class)
 */
class OrderDetail
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
    private $numberArticle;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="OrderDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderdetailUser;

    /**
     * @ORM\ManyToMany(targetEntity=Shoe::class, mappedBy="shoeOrderdetail")
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

    public function getNumberArticle(): ?int
    {
        return $this->numberArticle;
    }

    public function setNumberArticle(int $numberArticle): self
    {
        $this->numberArticle = $numberArticle;

        return $this;
    }

    public function getOrderdetailUser(): ?User
    {
        return $this->orderdetailUser;
    }

    public function setOrderdetailUser(?User $orderdetailUser): self
    {
        $this->orderdetailUser = $orderdetailUser;

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
            $shoe->addShoeOrderdetail($this);
        }

        return $this;
    }

    public function removeShoe(Shoe $shoe): self
    {
        if ($this->shoes->removeElement($shoe)) {
            $shoe->removeShoeOrderdetail($this);
        }

        return $this;
    }
}
