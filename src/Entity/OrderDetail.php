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
}
