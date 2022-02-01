<?php

namespace App\Entity;

use App\Repository\HeroesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeroesRepository::class)]
class Heroes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 25)]
    public $Name;

    #[ORM\Column(type: 'string', length: 25)]
    public $Powers;

    #[ORM\Column(type: 'string', length: 25)]
    public $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPowers(): ?string
    {
        return $this->Powers;
    }

    public function setPowers(string $Powers): self
    {
        $this->Powers = $Powers;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
