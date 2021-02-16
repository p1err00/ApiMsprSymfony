<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
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
    private $number_promo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_promo;

    /**
     * @ORM\Column(type="integer")
     */
    private $value_promo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberPromo(): ?int
    {
        return $this->number_promo;
    }

    public function setNumberPromo(int $number_promo): self
    {
        $this->number_promo = $number_promo;

        return $this;
    }

    public function getNumberOfPromo(): ?int
    {
        return $this->number_of_promo;
    }

    public function setNumberOfPromo(?int $number_of_promo): self
    {
        $this->number_of_promo = $number_of_promo;

        return $this;
    }

    public function getValuePromo(): ?int
    {
        return $this->value_promo;
    }

    public function setValuePromo(int $value_promo): self
    {
        $this->value_promo = $value_promo;

        return $this;
    }
}
