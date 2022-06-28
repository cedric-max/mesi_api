<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OrderDetailRepository;
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
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="orderDetails")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderdetail_user;

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
        return $this->orderdetail_user;
    }

    public function setOrderdetailUser(?User $orderdetail_user): self
    {
        $this->orderdetail_user = $orderdetail_user;

        return $this;
    }
}
