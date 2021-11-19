<?php

namespace App\Entity;

use App\Repository\FarmRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FarmRepository::class)
 */
class Farm
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=1,max=255)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 1,
     *      max = 10,
     *      minMessage = "Votre Prix doit avoir minimum {{ limit }} characters",
     *      maxMessage = "Votre Prix doit avoir maximum {{ limit }} characters")
     * @Assert\NotBlank
     */
    private $details;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $checkOrNot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $finishedAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=1,max=80)
     */
    private $nameUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=1,max=80)
     */
    private $farmeur;

    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\Length(
     *      min = 1,
     *      max = 10,
     *      minMessage = "Votre Quantité doit avoir minimum {{ limit }} characters",
     *      maxMessage = "Votre Quantité doit avoir maximum {{ limit }} characters")
     * @Assert\NotBlank
     */
    private $quantity;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getCheckOrNot(): ?string
    {
        return $this->checkOrNot;
    }

    public function setCheckOrNot(string $checkOrNot): self
    {
        $this->checkOrNot = $checkOrNot;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFinishedAt(): ?\DateTimeInterface
    {
        return $this->finishedAt;
    }

    public function setFinishedAt(?\DateTimeInterface $finishedAt): self
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    public function getNameUser(): ?string
    {
        return $this->nameUser;
    }

    public function setNameUser(string $nameUser): self
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    public function getFarmeur(): ?string
    {
        return $this->farmeur;
    }

    public function setFarmeur(string $farmeur): self
    {
        $this->farmeur = $farmeur;

        return $this;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

}
