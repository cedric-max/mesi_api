<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

/**
* @ApiResource()
* @ORM\Entity(repositoryClass=ReviewRepository::class)
* iri="shoe"
 */
#[ApiResource]
class Review
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
    private $note;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $commentary;

    /**
     * @ORM\ManyToOne(targetEntity=Shoe::class, inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reviewShoe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(?string $commentary): self
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getReviewShoe(): ?Shoe
    {
        return $this->reviewShoe;
    }

    public function setReviewShoe(?Shoe $reviewShoe): self
    {
        $this->reviewShoe = $reviewShoe;

        return $this;
    }
}
