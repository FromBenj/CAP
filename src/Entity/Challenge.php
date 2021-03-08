<?php

namespace App\Entity;

use App\Repository\ChallengeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChallengeRepository::class)
 */
class Challenge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="creatorChallenges")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creator;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="catcherChallenges")
     */
    private $catcher;

    /**
     * @ORM\ManyToOne(targetEntity=Defi::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $defi;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSuccess;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isValid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreator(): ?User
    {
        return $this->creator;
    }

    public function setCreator(?User $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

    public function getCatcher(): ?User
    {
        return $this->catcher;
    }

    public function setCatcher(?User $catcher): self
    {
        $this->catcher = $catcher;

        return $this;
    }

    public function getDefi(): ?Defi
    {
        return $this->defi;
    }

    public function setDefi(?Defi $defi): self
    {
        $this->defi = $defi;

        return $this;
    }

    public function getIsSuccess(): ?bool
    {
        return $this->isSuccess;
    }

    public function setIsSuccess(bool $isSuccess): self
    {
        $this->isSuccess = $isSuccess;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;

        return $this;
    }
}
